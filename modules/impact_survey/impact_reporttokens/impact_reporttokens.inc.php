<?php
// Get the FSCS key from the DB, and not from the token
global $_fscs, $user;
$query = "SELECT f.field_library_reg_system_value AS fscs " .
		 "FROM {field_data_field_library_reg_system} f " .
		 "JOIN {profile} p ON p.pid = f.entity_id " .
	     "WHERE p.uid = $user->uid";
$result = db_query($query);
foreach($result as $record) {
	$_fscs = $record->fscs;
	//die($record->fscs);
}

/**
 * Implements hook_tokens().
 */
function impact_reporttokens_tokens($type, $tokens, array $data = array(), array $options = array()) {
  // We need the $fscs variable to pass onto db_caching.php
  global $_fscs;
  $fscs = $_fscs;
  $replacements = array();
  $sanitize = !empty($options['sanitize']);
  $better_array = array();
  if ($type = 's') {
  	require_once ('db_caching.php');
    foreach($tokens as $name => $original) {
        $replacements[$original] = $better_array[$name];
    }
  }
  return $replacements;
}

/**
 * Implements hook_token_info().
 */
function impact_reporttokens_token_info() {
  global $_fscs;
  $fscs = $_fscs;
  require_once("db_caching.php");
  
  $types = array(
    's' => array(
      'name' => t('Survey Response'),
      'description' => t('Survey response variables'),
    ),
  );
  
  $survey = array();
  //$better_array;

  foreach($better_array as $var=>$count) {
    $survey[$var] = array (
      'name' => $var,
      'description' => t('Variable count')
    );
  }

  return array(
    'types' => $types,
    'tokens' => array(
      's' => $survey
    ),
  );
}

?>
