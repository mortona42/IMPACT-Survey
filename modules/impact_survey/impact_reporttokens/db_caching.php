<?php
/** 
  * db_caching.php - by Spencer Thomas <srt4@uw.edu> - June 23, 2011
  *
  * This file is used to retrieve a cached version of the database, and output it into an array.
  * Additionally, it checks whether the cache is up-to-date. It does so by checking the number of
  * survey responses associated with an FSCS key, versus the number of survey responses associated
  * with the FSCS key when the variables were cached. This should result in much better performance 
  * (hundreds of SQL queries become one). The worst case scenario is that the variables need to be
  * recalculated once per day, but usually will be calculated less often.
  * Some tests: usually, without db_caching.php, variables took about 2.5s to generate. 
  * With db_caching.php, they now take about 0.08s. 
  */

// Grab FSCS from token:
#$fscs = token_replace('[current-user:profile-library-registration:field-library-reg-system]');
$fscs = "WA0064";
// Test if fscs has been declared from an include parent
if ($fscs == null || $fscs == "") {
    if ($_REQUEST['fscs'] == null || $_REQUEST['fscs'] == "") {
        die("No FSCS ID given");
    }
	$fscs = $_REQUEST['fscs'];
}
$_start = microtime();

// Constants
global $tables;
$tables["source"] =  "dr_survey_responses";
$tables["cache"]  =  "dr_survey_responses_cache";
$tables["meta"]    = "dr_survey_responses_meta";

// Establish the sql connection
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
	die(mysql_error());
}
mysql_select_db('impactsurvey');

// Return the number of current responses for an fscs key
function responses($fscs) {
	global $tables;
	$query = "SELECT count(*) as total FROM " . $tables['source'] . " WHERE libid = '$fscs'";
    if (isset($_REQUEST['debug']))
        echo $query;
	$result = mysql_query($query);
	if (!$result) {
		die($query . " " . mysql_error());
	}
	$responses = mysql_fetch_object($result)->total;
	return $responses == null ? 0 : $responses;
}

// Return the number of cached responses for an fscs key
function cached_responses($fscs) {
	global $tables;
	$query = "SELECT responses FROM " . $tables['meta'] . " WHERE libid = '$fscs'";
	$result = mysql_query($query);
	if (!$result) {
		die($query . " " . mysql_error());
	}
	$responses = mysql_fetch_object($result)->responses;
	return $responses == null ? 0 : $responses;
}

// Return an array of the cached calculations
function dump_cache($fscs) {
	global $tables;
	$query = "SELECT variable, value FROM " . $tables['cache'] . " WHERE libid = '$fscs'";
	$result = mysql_query($query);
	if (!$result) {
		die($query . " " . mysql_error());
	}
	// instantiate the array
	$better_array = array();
	// iterate through each row and add the values to the array
	while ($row = mysql_fetch_object($result)) {
		$better_array[$row->variable] = $row->value;
	}
	return $better_array;
}

// Save a db query ... only calculate this once
$responses['cached'] = cached_responses($fscs);
$responses['actual'] = responses($fscs);

// If there are more responses in the db, than there are cached, recalculate them
if ( $responses['actual'] != $responses['cached'] ) {
	require_once('survey_variables.php');
	// update the actual db to reflect the changes
	foreach($better_array as $variable => $value) {
		$query = "INSERT INTO " . $tables['cache'] . " ( libid, variable, value ) ".
		         "VALUES ( '$fscs', '$variable', '$value' ) ON DUPLICATE KEY UPDATE value = '$value'";
		$result = mysql_query($query);
		if (!$result) {
			die($query . " " . mysql_error());
		} 
	}
	$query = "INSERT INTO " . $tables['meta'] . " ( libid, responses ) " .
	         "VALUES ( '$fscs', '" . $responses['actual'] . "' ) " .
	         "ON DUPLICATE KEY UPDATE responses = '" . $responses['actual'] . "'";
	$result = mysql_query($query);
	if (!$result) die($query . " " . mysql_error());
} else { 
	// Responses == cached_responses
	$better_array = dump_cache($fscs);
}

// See how long these take to calculate ... if the script is called with debug as a param, it will print_r the arrays
function diff_microtime($mt_old,$mt_new) {
  list($old_usec, $old_sec) = explode(' ',$mt_old);
  list($new_usec, $new_sec) = explode(' ',$mt_new);
  $old_mt = ((float)$old_usec + (float)$old_sec);
  $new_mt = ((float)$new_usec + (float)$new_sec);
  return $new_mt - $old_mt;
}

if ( isset($_REQUEST['debug']) ) {
	echo "<pre>Took " . number_format(diff_microtime($_start,microtime()), 4) . " seconds to execute\n";
	print_r($responses);
	print_r($better_array);
}
