<?php
//TODO change
global $sql_fscs;

//$sql_fscs = " AND LibID LIKE \"%" . $_REQUEST['fscs'] . "%\"" ;
$sql_fscs = "";

// generate some temp tables to speed up the queries
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
	die(mysql_error());
}
mysql_select_db('impactsurvey');

global $temp_table;
//$temp_table = mysql_query("CREATE TEMPORARY TABLE #tempTable ( select * from dr_survey_responses WHERE LIBid='MD0016'");
if (!$temp_table) {
//	die("Create " . mysql_error());
}
$temp_query = "CREATE TEMPORARY TABLE one_lib " .
              "SELECT * FROM dr_survey_responses " .
              "WHERE LibID LIKE \"%" . $_REQUEST['fscs'] . "%\"";
              
$temp_table = mysql_query($temp_query);
//, array(":fscs" => $fscs));
if (!$temp_table) {
//	die(" Select into " . mysql_error());
}
//$temp_table = "#tempTable";
$temp_table = "one_lib";

// SurveyResponse class - useful for generating tokens
class SurveyResponse {
    public $title;
    public $count;
    public $percent;
    public $countPercent;
    public function __construct($title, $count=-1, $total=-1) {
        $this->title = $title;
        $this->count = $count;
        if ( $count != 0 && $total != 0) $this->percent = round( $count / $total  * 100 );
        else $this->percent = 0;
        $this->countPercent = number_format($this->count) . " (" . $this->percent . "%)";
    }
}



/* get_survey_variable: returns a SQL table with the count of survey responses for each question, on a
 * variable-by-variable basis.
 *
 * @variable: the name of the variable to query (for example, GEN_visit)
 * @response_values: an associative array of response number (e.g., 2, 777) to its column title (e.g., "weekly" or "skip")
 *
 * @returns the response_values array in a modified form (a mapping of variable :  SurveyResponse)
 *
 * Example usage:
 *
 * $gen_visit = get_survey_variable(
 * "GEN_visit",
 * array(
 *              "1,2" => "weekly",
 *              "3" => "monthly",
 *              "4,5" => "less than once a month",
 *              "1,2,3,4,5" => "all respondents",
 *              "6" => "no visits"
 *        )
 * );
 *
 * Theoretically, the title mapping isn't really necessary,
 * but it provides a coherent way to look at the data and get it
 * into the report.
 *
 * After this is stored in the $gen_visit variable,
 * the number of respondants for a number can be found with
 * $gen_visit["1,2"]->count; which returns the count.
 *
 * This can be used inline with the text, for example:
 * echo ( $gen_visit["1,2"] . " visited the library once a week or more frequently." );
 *
 */
function get_survey_variable($variable, $response_values, $sql = -1) {
    global $fscs; // need this for the db query
    global $temp_table; // more db stuffs
    global $sql_fscs;
    $total = -1;

	// This one is to find the array with an index of "total"
	$total_key = array_search("total", $response_values);
	if ($total_key) {
		$sql = "SELECT count(*) AS tot FROM $temp_table WHERE $variable IN ( $total_key )";
		$result = mysql_query($sql);
		$res = mysql_fetch_object($result);
		if (!$result) {
			die(mysql_error());
		}
		$total = $res->tot;
		unset($response_values[$total_key]);
	}

	$total_override = ($response_values['total_override']);
	if (isset($total_override)) {
		$total = $total_override;
		unset($response_values['total_override']);
	}
	
    // This loop is to populate all of the survey responses
    foreach($response_values as $response_val => &$name) {
            $sql = "SELECT count(*) AS tot FROM $temp_table WHERE $variable IN ( $response_val ) " .$sql_fscs;;
            $result = mysql_query($sql);
      		$res = mysql_fetch_object($result);
      		if (!$result) {
      			die(mysql_error());
      		}
            $survey_response = new SurveyResponse($name, $res->tot, $total);
            $name = $survey_response;
    }

    $response_values["total"] = $total;
    $response_values["variable"] = $variable;
    return $response_values;
}

/* This method returns a number when called with a variable and response.
 For example, one can use this to do something such as, echo ( get_single_variable("GEN_visit", "1") . " people visited the library every day."); */
function get_single_variable($variable, $response, $sql = -1) {
	$temp = get_survey_variable( $variable, array((string)$response => "foo"), $sql );
	return $temp[(string)$response]->count;
}

// This function accepts a simple string, like "WHERE GEN_visit = 1" and returns an int of 
// the count of matches.
function sql_query($sql) {
	global $sql_fscs;
	global $temp_table;
	$result = mysql_query("SELECT count(*) AS tot FROM $temp_table WHERE " . $sql . $sql_fscs);
	$res = mysql_fetch_object($result);
	if (!$result) {
		die ("SELECT count(*) AS tot FROM $temp_table WHERE " . $sql . $sql_fscs . mysql_error());
	}
	return $res->tot;
}

function age_crosstab($variable) {
	$age_array = array(
		"14_24" => "BETWEEN 1987 AND 1997",
		"25_34" => "BETWEEN 1977 AND 1986",
		"35_44" => "BETWEEN 1967 AND 1976",
		"45_54" => "BETWEEN 1957 AND 1966",
		"55_64" => "BETWEEN 1947 AND 1956",
		"65"    => "BETWEEN 1880 AND 1946"
	);
	
	$var_array = array();
	foreach ($age_array as $var_suffix => $sql_suffix) {
		$target_name = $variable . "_" . $var_suffix;
		$var_array[$target_name . "_n"] = sql_query("$variable = 1 AND Z_year_born $sql_suffix");
		$var_array[$target_name . "_p"] = $var_array[$target_name . "_n"] / sql_query("$variable = 1") * 100;
	}
	return $var_array;
}
?>
