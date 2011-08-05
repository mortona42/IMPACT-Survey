<?php
$debug = false;

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
// Time this stuff
$time_start = microtime_float();

// All of the survey variables are contained within this file.
global $survey_variables;
$survey_variables = array();
require('impact_reporttokens.lib.php');
$survey_variables[] = get_survey_variable(
"GEN_visit",
array(
	"1,2,3,4,5" => "total",
	"6" => "6",
	"1,2" => "weekly",
	"3" => "13_month",
	"4,5" => "less_than_month"
	)
);

$survey_variables[] = get_survey_variable(
"GEN_comp",
array(
	"1,2" => "weekly",
	"3" => "13_month",
	"4,5" => "less_than_month",
	"1,2,3,4,5" => "total"
	)
);

$survey_variables[] = get_survey_variable(
"GEN_remote",
array(
	"1,2,3,4,5" => "total",
	"1,2" => "weekly",
	"3" => "13_month",
	"4,5" => "less_than_month"
	)
);

$survey_variables[] = get_survey_variable(
"GEN_internet",
array(
	"1,2,3,4,5" => "total",
	"1,2" => "weekly",
	"3" => "13_month",
	"4,5" => "less_than_month"
	)
);

$survey_variables[] = get_survey_variable(
"GEN_wireless",
array(
	"1,2,3,4,5" => "total",
	"1,2" => "weekly",
	"3" => "13_month",
	"4,5" => "less_than_month"
	)
);

$survey_variables[] = get_survey_variable( 
"Z_method",
array(
	"1,2,3,4,5" => "method"
	)
);

// Binary array:
// Accepts an array of variable names, 
// as well as a "total" index that references the
// target "total" variable and its values
function binary_array($in) {
	global $survey_variables;
	$total_array = -1;
	if (isset($in['total'])) {
		$total_array = $in['total'];
		unset($in['total']);
	}
	foreach ($in as $key=>$var) {
		$survey_variables[] = binary_response($var, $total_array);
	}
}

// Helper function for binary_array
function binary_response($variable, $total=-1) {
	if ($total != -1) {
		foreach ($total as $var=>$val) {
			$total = get_single_variable($var, $val);
		}
	}
	$return_object = get_survey_variable($variable, array ("total_override" => $total , "1"=>"yes") );
	return $return_object;
}

$gen_comp_type = array ( "GEN_comp_type_cat", "GEN_comp_type_acc", "GEN_comp_type_sub", "GEN_comp_type_ebook", "GEN_comp_type_oth", "GEN_comp_type_dk" 
, "total" => array( "GEN_comp" => "1,2,3,4,5" )
);
binary_array($gen_comp_type);

$use_tool = array("USE_tools_call", "USE_tools_blog", "USE_tools_wiki", "USE_tools_soc", "USE_tools_vid", "USE_tools_aud", "USE_tools_none", "USE_tools_dk", 
"USE_tools_mess", "USE_tools_search", "USE_tools_email", "USE_tools_print",
"total" => array( "PACUSER" => "1") );
binary_array($use_tool);

$civ_vars = array ( "CIV_news", "CIV_politics", "CIV_politics_help", "CIV_club", "CIV_particip", "CIV_org", "total" => array( "PACUSER" => "1") );
binary_array($civ_vars);

$use_help = array ( "USE_help_libserv", "USE_help_subscrip", "USE_help_basic", "USE_help_websearch", "USE_help_nonlibsite", "USE_help_software", "USE_help_oth", "USE_help_none", "USE_help_dk",
"total" => array ("PACUSER" => "1")  );
binary_array($use_help);

$gov_vars = array ( "GOV_legal", "GOV_form", "GOV_form_submit", "GOV_law", "GOV_permit", "GOV_permit_apply", "GOV_legal",
                   "GOV_program", "GOV_program_apply", "GOV_official",
		   "total" => array ("PACUSER"=>"1")
		  );
binary_array($gov_vars);

$edu_vars = array ("EDU_program", "EDU_apply", "EDU_apply_admit", "EDU_class", "EDU_research", "EDU_crswork", "EDU_testprep",
		   "EDU_test", "EDU_test_proc", "EDU_finaid", "EDU_finaid_get",
		   "total"=> array("PACUSER" => "1") );
binary_array($edu_vars);

$hea_vars = array ("HEA_illness", "HEA_medpro", "HEA_supgrp", "HEA_prescr", "HEA_diet", "HEA_diet_change", "HEA_exercs",
		   "HEA_exercs_change", "HEA_doctor", "HEA_hlthins", "HEA_records",
		   "total" => array("PACUSER" => "1") );
binary_array($hea_vars);

$emp_vars = array ("EMP_oppr", "EMP_oppr_jobapp", "EMP_oppr_intrvw", "EMP_oppr_hired", "EMP_resume", "EMP_train", "EMP_research",
		   "EMP_work",
		   "total" => array ("PACUSER" => "1") );
binary_array($emp_vars);

$bus_vars = array ("BUS_start", "BUS_manage", "BUS_busplan", "BUS_research", "BUS_license", "BUS_cust", "BUS_cust_incrs", 
		   "BUS_contract", "BUS_contract_recvd",
		   "total" => array ("PACUSER" => "1") );
binary_array($bus_vars);

$com_vars = array ("COM_housing", "COM_bank", "COM_paybills", "COM_invest", "COM_compare", "COM_purchase", "COM_sell", "COM_travel",
		   "COM_credit", "COM_debt", 
		   "total" => array ("PACUSER" => "1" ) 
		  );
binary_array($com_vars);

$soc_vars = array ("SOC_site_friends", "SOC_site_skill", "SOC_site_hobby", "SOC_site_gene", "SOC_site_diy", "SOC_site_recipes", "SOC_site_event", "SOC_site_support", "SOC_site_parent", "SOC_site_pet", "SOC_site_celeb", "SOC_site_games", "SOC_site_review",
                    "total" => array("PACUSER" => "1"));

binary_array($soc_vars);
// One variable per array index
$better_array = array();

// Probably an expensive operation, so maybe clean this up later?
foreach($survey_variables as $variable) {
  foreach($variable as $option) {
    if (is_object($option)){ // if option is a surveyresponse
      if($option->title == "yes") {
      	$better_array[$variable['variable'] . "_n"] = $option->count;
      	$better_array[$variable['variable'] . "_p"] = 
		round ($option->percent);
      } else {
      	$better_array[$variable['variable'] . "_" . $option->title . "_n"] = $option->count;
      	$better_array[$variable['variable'] . "_" . $option->title . "_p"] = $option->percent;
      }
    }
  }
}

$better_array['GEN_comp_cat_p'] = $better_array['GEN_comp_type1_p'];
$better_array['GEN_comp_ebook_p'] = $better_array['GEN_comp_type2_p'];
$better_array['GEN_visit6_n'] = -1;
$better_array['GEN_comp_users_p'] = -1;
$better_array['GEN_comp_users_n'] = -1;
function printVars() {
	foreach ($survey_variables as $variable) {
  		?>
  	<h1><?=$variable['variable']?></h1>
  	<?php
 	 foreach ($variable as $option) {
    		if (is_object($option)) { // if it's a SurveyResponse 
      		?>
      		<h3><?=$option->title?> - <?=$option->count?>
      			<?php
   			 }
  		}
	}
}

/** 
 * This function accepts a target variable, cutoff value, and the text for when
 * the variable is less than or greater than the cutoff value. It adds the variable
 * to the "better array" with the postfix of "_condtext"
 */
function conditionalText($target_var, $cutoff, $less_than_text, $greater_than_text) {
	$value = $better_array[$target_var];
	$text = $better_array[$target_var . '_condtext'];
	if ($value > $cutoff) {
		$better_array[$target_var . '_condtext'] = $greater_than_text;
	} else if ($value < $cutoff) {
		$better_array[$target_var . '_condtext'] = $less_than_text;
	}
}

// Defining conditional text variables: Target variable, cutoff value, less than text, greater than text
// The output is found in "target_variable"_condtext
conditionalText("GEN_wireless_users_p", $better_array['GEN_internet_users_p'], "less", "more");
conditionalText("GEN_access1_p", 50, "Only", "Most survey respondents");
conditionalText("EDU_edu_p", $better_array['EDU_edu_14_18'], "less", "even greater");

// SPECIAL CASE VARIABLES

// Crosstabs for example

// COM_bank_access_N_P
   	// Count if COM_bank = 1 AND GEN_access = 2
//
$v = &$better_array; // why didn't I do this earlier ...
$v["Z_method_n"] = $v["Z_method_method_n"];

$better_array["GEN_visit_n"] = get_single_variable("GEN_visit", "1,2,3,4,5");
$better_array["GEN_visit_p"] = round($better_array["GEN_visit_n"] / $better_array["Z_method_method_n"] * 100);

$better_array["GEN_comp_users_n"] = get_single_variable("GEN_comp", "1,2,3,4,5");
$better_array["GEN_comp_users_p"] = round($better_array["GEN_comp_users_n"] / $better_array["Z_method_method_n"] * 100);

$better_array["GEN_skip_n"] = sql_query("GEN_internet = '6' AND GEN_wireless = '6'");
$better_array["USE_pac_n"] = $better_array["Z_method_method_n"] - $better_array["GEN_skip_n"];
$better_array["USE_pac_p"] = round ( $better_array["USE_pac_n"] / $better_array["Z_method_method_n"]  * 100 ) ;

$better_array["GEN_wireless_users_n"] = sql_query("GEN_wireless IN (1,2,3,4,5)");
$better_array["GEN_wireless_users_p"] = round($better_array["GEN_wireless_users_n"] / $better_array["Z_method_method_n"] * 100);

$better_array["USE_help_helped_n"] = $better_array["USE_help_none_n"] + $better_array["USE_help_dk_n"];
$better_array["USE_help_helped_p"] = round ( $better_array["USE_help_helped_n"] / $better_array["USE_pac_n"] * 100 );

// Race variables
// Available races: Z_race_AI_AN	Z_race_asian	Z_race_black Z_race_NH_PI Z_race_white Z_race_oth Z_race_dk
$w = array();
$w["Z_race_asian_"] = sql_query("Z_race_asian = 1 AND (Z_race_AI_AN + Z_race_black + Z_race_NH_PI + Z_race_white + Z_race_oth + Z_race_dk) = 0");
$w["Z_race_AI_AN_"] = sql_query("Z_race_AI_AN = 1 AND (Z_race_asian + Z_race_black + Z_race_NH_PI + Z_race_white + Z_race_oth + Z_race_dk) = 0");
$w["Z_race_black_"] = sql_query("Z_race_black = 1 AND (Z_race_AI_AN + Z_race_asian + Z_race_NH_PI + Z_race_white + Z_race_oth + Z_race_dk) = 0");
$w["Z_race_NH_PI_"] = sql_query("Z_race_NH_PI = 1 AND (Z_race_AI_AN + Z_race_asian + Z_race_black + Z_race_white + Z_race_oth + Z_race_dk) = 0");
$w["Z_race_white_"] = sql_query("Z_race_white = 1 AND (Z_race_AI_AN + Z_race_asian + Z_race_black + Z_race_NH_PI + Z_race_oth + Z_race_dk) = 0");
$w["Z_race_oth_"] = sql_query("Z_race_oth = 1 AND (Z_race_AI_AN + Z_race_asian + Z_race_black + Z_race_NH_PI + Z_race_white + Z_race_dk) = 0");
$w["Z_race_dk_"] = sql_query("Z_race_dk = 1");
$w["Z_race_cats_multi_"] = sql_query("(Z_race_AI_AN + Z_race_asian + Z_race_black + Z_race_NH_PI + Z_race_white + Z_race_dk + Z_race_oth) > 1");
foreach($w as $i=>$x) {
  $v[$i . "n"] = $x;
  $v[$i . "p"] = $x / $v["Z_method_n"] * 100;
}

// Gender variables
$better_array["Z_gender_male_n"] = sql_query("Z_gender = 2");
$better_array["Z_gender_female_n"] = sql_query("Z_gender = 1");
$v["Z_gender_n"] = sql_query("Z_gender IN (1,2)");
$v["Z_gender_male_p"] = $v["Z_gender_male_n"] / $v["Z_gender_n"] * 100;
$v["Z_gender_female_p"] = $v["Z_gender_female_n"] / $v["Z_gender_n"] * 100;

// Citizenship variables
$better_array["Z_nativity_yes_n"] = sql_query("Z_nativity = 1");
$better_array["Z_nativity_apply_n"] = sql_query("Z_nativity = 2");
$better_array["Z_nativity_plan_n"] = sql_query("Z_nativity = 3");
$better_array["Z_nativity_no_n"] = sql_query("Z_nativity = 4");
$v["Z_nativity_yes_p"] = $v["Z_nativity_yes_n"] / $v["Z_method_n"] * 100;
$v["Z_nativity_apply_p"] = $v["Z_nativity_apply_n"] / $v["Z_method_n"] * 100;
$v["Z_nativity_plan_p"] = $v["Z_nativity_plan_n"] / $v["Z_method_n"] * 100;
$v["Z_nativity_no_p"] = $v["Z_nativity_no_n"] / $v["Z_method_n"] * 100;

// Age variables
$better_array["Z_year_born_14_18_n"] = sql_query("Z_year_born BETWEEN 1993 AND 1997");
$better_array["Z_year_born_19_24_n"] = sql_query("Z_year_born BETWEEN 1987 AND 1992");
$better_array["Z_year_born_14_24_n"] = sql_query("Z_year_born BETWEEN 1987 AND 1997");
$better_array["Z_year_born_25_34_n"] = sql_query("Z_year_born BETWEEN 1977 AND 1986");
$better_array["Z_year_born_35_44_n"] = sql_query("Z_year_born BETWEEN 1967 AND 1976");
$better_array["Z_year_born_45_54_n"] = sql_query("Z_year_born BETWEEN 1957 AND 1966");
$better_array["Z_year_born_55_64_n"] = sql_query("Z_year_born BETWEEN 1947 AND 1956");
$better_array["Z_year_born_65_n"] = sql_query("Z_year_born BETWEEN 1880 AND 1946");
$v["Z_year_born_14_18_p"] = $v["Z_year_born_14_18_n"] / $v["Z_method_n"] * 100;
$v["Z_year_born_19_24_p"] = $v["Z_year_born_19_24_n"] / $v["Z_method_n"] * 100;
$v["Z_year_born_14_24_p"] = $v["Z_year_born_14_24_n"] / $v["Z_method_n"] * 100;
$v["Z_year_born_25_34_p"] = $v["Z_year_born_25_34_n"] / $v["Z_method_n"] * 100;
$v["Z_year_born_35_44_p"] = $v["Z_year_born_35_44_n"] / $v["Z_method_n"] * 100;
$v["Z_year_born_45_54_p"] = $v["Z_year_born_45_54_n"] / $v["Z_method_n"] * 100;
$v["Z_year_born_55_64_p"] = $v["Z_year_born_55_64_n"] / $v["Z_method_n"] * 100;
$v["Z_year_born_65_p"] = $v["Z_year_born_65_n"] / $v["Z_method_n"] * 100;

// Education variables
$w = array();
$w["Z_education01_"] = sql_query("Z_education = 1");
$w["Z_education02_"] = sql_query("Z_education = 2");
$w["Z_education03_"] = sql_query("Z_education = 3");
$w["Z_education04_"] = sql_query("Z_education = 4");
$w["Z_education05_"] = sql_query("Z_education = 5");
$w["Z_education06_"] = sql_query("Z_education = 6");
$w["Z_education07_"] = sql_query("Z_education = 7");
$w["Z_education08_"] = sql_query("Z_education = 8");
foreach($w as $i=>$x) {
  $v[$i . "n"] = $x;
  $v[$i . "p"] = $x / $v["Z_method_n"] * 100;
}
$v["Z_education_dk_p"] = $v["Z_education08_p"];

// Poverty variables
$v["Z_poverty1_n"] = sql_query("Z_poverty = 1");
$v["Z_poverty2_n"] = sql_query("Z_poverty = 2");
$v["Z_poverty3_n"] = sql_query("Z_poverty = 3");
//$v["Z_poverty4_n"] = sql_query("Z_poverty = 4");
//$v["Z_poverty5_n"] = sql_query("Z_poverty = 5");
$v["Z_poverty4_n"] = sql_query("Z_poverty IN ( 4, 5, 6)");
$v["Z_poverty7_n"] = sql_query("Z_poverty = -7");
$v["Z_poverty1_p"] = $v["Z_poverty1_n"] / $v["Z_method_n"] * 100;
$v["Z_poverty2_p"] = $v["Z_poverty2_n"] / $v["Z_method_n"] * 100;
$v["Z_poverty3_p"] = $v["Z_poverty3_n"] / $v["Z_method_n"] * 100;
$v["Z_poverty4_p"] = $v["Z_poverty4_n"] / $v["Z_method_n"] * 100;
//$v["Z_poverty5_p"] = $v["Z_poverty5_n"] / $v["Z_method_n"] * 100;
$v["Z_poverty7_p"] = $v["Z_poverty7_n"] / $v["Z_method_n"] * 100;
$v["Z_poverty_dk_p"] = $v["Z_poverty7_p"];

// Satisfaction
$v["satisfaction_n"] = sql_query("satisfaction IN ( 1, 2, 3, 4, 5 )");
$v["satisfaction01_n"] = sql_query("satisfaction = 1");
$v["satisfaction02_n"] = sql_query("satisfaction = 2");
$v["satisfaction03_n"] = sql_query("satisfaction = 3");
$v["satisfaction04_n"] = sql_query("satisfaction = 4");
$v["satisfaction05_n"] = sql_query("satisfaction = 5");
$v["satisfaction06_n"] = sql_query("satisfaction = 6");
$v["satisfaction01_p"] = $v["satisfaction01_n"] / $v["satisfaction_n"] * 100;
$v["satisfaction02_p"] = $v["satisfaction02_n"] / $v["satisfaction_n"] * 100;
$v["satisfaction03_p"] = $v["satisfaction03_n"] / $v["satisfaction_n"] * 100;
$v["satisfaction04_p"] = $v["satisfaction04_n"] / $v["satisfaction_n"] * 100;
$v["satisfaction05_p"] = $v["satisfaction05_n"] / $v["satisfaction_n"] * 100;
$v["satisfaction06_p"] = $v["satisfaction06_n"] / $v["satisfaction_n"] * 100;
$v["satisfaction_1_2_p"] = ($v["satisfaction01_n"] + $v["satisfaction02_n"]) / $v["satisfaction_n"] * 100;

// Importance (personal)
$v["import_personal_n"] = sql_query("import_personal in ( 1, 2, 3, 4, 5 )");
$v["import_personal01_n"] = sql_query("import_personal = 1");
$v["import_personal02_n"] = sql_query("import_personal = 2");
$v["import_personal03_n"] = sql_query("import_personal = 3");
$v["import_personal04_n"] = sql_query("import_personal = 4");
$v["import_personal05_n"] = sql_query("import_personal = 5");
$v["import_personal06_n"] = sql_query("import_personal = 6");
$v["import_personal01_p"] = $v["import_personal01_n"] / $v["import_personal_n"] * 100;
$v["import_personal02_p"] = $v["import_personal02_n"] / $v["import_personal_n"] * 100;
$v["import_personal03_p"] = $v["import_personal03_n"] / $v["import_personal_n"] * 100;
$v["import_personal04_p"] = $v["import_personal04_n"] / $v["import_personal_n"] * 100;
$v["import_personal05_p"] = $v["import_personal05_n"] / $v["import_personal_n"] * 100;
$v["import_personal06_p"] = $v["import_personal06_n"] / $v["import_personal_n"] * 100;
$v["import_personal_1_2_p"] = 
  ( $v["import_personal01_n"] + $v["import_personal02_n"] ) / $v["import_personal_n"] * 100;
  
// Importance (community)
$v["import_community_n"] = sql_query("import_community in ( 1, 2, 3, 4, 5 )");
$v["import_community01_n"] = sql_query("import_community = 1");
$v["import_community02_n"] = sql_query("import_community = 2");
$v["import_community03_n"] = sql_query("import_community = 3");
$v["import_community04_n"] = sql_query("import_community = 4");
$v["import_community05_n"] = sql_query("import_community = 5");
$v["import_community06_n"] = sql_query("import_community = 6");
$v["import_community_1_2_p"] = 
  ( $v["import_community01_n"] + $v["import_community02_n"] ) / $v["import_community_n"] * 100;
$v["import_community01_p"] = $v["import_community01_n"] / $v["import_community_n"] * 100;
$v["import_community02_p"] = $v["import_community02_n"] / $v["import_community_n"] * 100;
$v["import_community03_p"] = $v["import_community03_n"] / $v["import_community_n"] * 100;
$v["import_community04_p"] = $v["import_community04_n"] / $v["import_community_n"] * 100;
$v["import_community05_p"] = $v["import_community05_n"] / $v["import_community_n"] * 100;
$v["import_community06_p"] = $v["import_community06_n"] / $v["import_community_n"] * 100;

// More civ vars
$v["CIV_civ_n"] = sql_query("CIV_civ = 1");
$v["CIV_civ_poverty_p"] = sql_query("CIV_civ = 1 AND Z_poverty = 1") / $v["USE_pac_n"] * 100;
$v["CIV_civ_access_p"] = sql_query("CIV_civ = 1 AND GEN_access = 2") / $v["USE_pac_n"] * 100;
$v["CIV_civ_age_14_24_p"] = sql_query("CIV_civ = 1 AND Z_year_born > 1986 AND Z_year_born < 1998") / $v["USE_pac_n"] * 100;

// Total vars
$v["EDU_edu_p"] = sql_query("EDU_edu = 1") / $v["USE_pac_n"] * 100;
$v["EMP_emp_p"] = sql_query("EMP_emp = 1") / $v["USE_pac_n"] * 100;
$v["BUS_bus_p"] = sql_query("BUS_bus = 1") / $v["USE_pac_n"] * 100;
$v["HEA_hea_p"] = sql_query("HEA_hea = 1") / $v["USE_pac_n"] * 100;
$v["GOV_gov_p"] = sql_query("GOV_gov = 1") / $v["USE_pac_n"] * 100;
$v["CIV_civ_p"] = sql_query("CIV_civ = 1") / $v["USE_pac_n"] * 100;
$v["CIV_politics_help_politics_p"] = $v["CIV_politics_help_n"] / $v["CIV_politics_n"] * 100;
$v["COM_com_n"] = sql_query("COM_com = 1");
$v["COM_com_p"] = $v["COM_com_n"] / $v["USE_pac_n"] * 100;
$v["COM_com_access_p"] = sql_query("COM_com = 1 AND GEN_access = 0") / $v["COM_com_n"] * 100;
$v["COM_bank_access_p"] = sql_query("COM_bank = 1 AND GEN_access = 0") / $v["COM_bank_n"] * 100;
$v["SOC_soc_p"] = sql_query("SOC_soc = 1") / $v["USE_pac_n"] * 100;
$v["SOC_comm_n"] = sql_query("SOC_comm = 1");
$v["SOC_comm_p"] = $v["SOC_comm_n"] / $v["USE_pac_n"] * 100;
$v["GEN_remote_users_n"] = sql_query("GEN_remote IN (1,2,3,4,5)");
$v["GEN_remote_users_p"] = $v["GEN_remote_users_n"] / $v["Z_method_n"] * 100;
$v["GEN_internet_users_n"] = sql_query("GEN_internet IN (1,2,3,4,5)");
$v["GEN_internet_users_p"] = $v["GEN_internet_users_n"] / $v["Z_method_n"] * 100;
$v["GEN_access1_n"] = sql_query("GEN_access = 1");
$v["GEN_access1_p"] = $v["GEN_access1_n"] / $v["Z_method_n"] * 100;
$v["USE_train_yes_n"] = sql_query("USE_train = 1");
$v["USE_train_yes_p"] = $v["USE_train_yes_n"] / $v["USE_pac_n"] * 100;
$v["USE_limb_n"] = sql_query("USE_limb = 1");
$v["USE_limb_p"] = $v["USE_limb_n"] / $v["USE_pac_n"] * 100;
$v["EDU_edu_14_18_n"] = sql_query("EDU_edu = 1 AND Z_year_born >= 1993 AND Z_year_born <= 1997");
$v["USE_pac_14_18_n"] = sql_query("PACUSER = 1 AND Z_year_born >= 1993 AND Z_year_born <= 1997");
$v["EDU_edu_14_18_p"] = $v["EDU_edu_14_18_n"] / $v["USE_pac_14_18_n"] * 100;

// Variables dependent on other variables ...
$v["GOV_form_submit_form_p"] = $v["GOV_form_submit_n"] / $v["GOV_form_n"] * 100;
$v["GOV_program_apply_program_p"] = $v["GOV_program_apply_n"] / $v["GOV_program_n"] * 100; 
$v["HEA_diet_change_diet_p"] = $v["HEA_diet_change_n"] / $v["HEA_diet_n"] * 100;
$v["HEA_exercs_change_exercs_p"] = $v["HEA_exercs_change_n"] / $v["HEA_exercs_n"] * 100;
$v["EMP_oppr_intrvw_oppr_p"] = $v["EMP_oppr_intrvw_n"] / $v["EMP_oppr_n"] * 100;
$v["EMP_oppr_hired_oppr_p"] = $v["EMP_oppr_hired_n"] / $v["EMP_oppr_n"] * 100; 
$v["EDU_apply_admit_apply_p"] = $v["EDU_apply_admit_n"] / $v["EDU_apply_n"] * 100;
$v["BUS_cust_incrs_cust_p"] = $v["BUS_cust_incrs_n"] / $v["BUS_cust_n"] * 100;
$v["BUS_contract_bus_p"] = $v["BUS_contract_n"] / $v["BUS_manage_n"] * 100;
$v["BUS_bus_n"] = sql_query("BUS_bus = 1");
$v["BUS_cust_bus_p"] = $v["BUS_cust_n"] / $v["BUS_bus_n"] * 100;

// Don't know variables.
$v["Z_race_dk_n"] = sql_query("Z_race_dk = 1");
$v["Z_race_dk_p"] = $v["Z_race_dk_n"] / $v["Z_method_n"] * 100;
$v["Z_nativity_dk_n"] = sql_query("Z_nativity = -7");
$v["Z_nativity_dk_p"] = $v["Z_nativity_dk_n"] / $v["Z_method_n"] * 100;

// Generate the age crosstab variables
$v = array_merge($v, age_crosstab("GOV_gov"));
$v = array_merge($v, age_crosstab("CIV_civ"));
$v = array_merge($v, age_crosstab("COM_com"));
$v = array_merge($v, age_crosstab("SOC_soc"));
$v = array_merge($v, age_crosstab("EDU_edu"));
$v = array_merge($v, age_crosstab("EMP_emp"));
$v = array_merge($v, age_crosstab("BUS_bus"));
$v = array_merge($v, age_crosstab("HEA_hea"));
  
// TODO: get this from the db
if ($_REQUEST['fscs'] == "MD0002") $v["lib_name"] = "Anne Arundel County Public Library";
else if ($_REQUEST['fscs'] == "WA0059") $v["lib_name"] = "King County Library System";
else if ($_REQUEST['fscs'] == "WA0061") $v["lib_name"] = "Mid-Columbia Library System";
else if ($_REQUEST['fscs'] == "WA0064") $v["lib_name"] = "Seattle Public Library System";
else if ($_REQUEST['fscs'] == "WA0002") $v["lib_name"] = "Burlington Public Library";
else if ($_REQUEST['fscs'] == "XXTEST") die("Test");

$v["USE_travel_n"] = sql_query("USE_travel IN (0,1)");
$v["USE_travel_yes_n"] = sql_query("USE_travel = 1");
$v["USE_travel_yes_p"] = $v["USE_travel_yes_n"] / $v["USE_travel_n"] * 100;

// Round all percentages - DO NOT define any more _p variables after this!
foreach($v as $index=>&$number) {
  if (substr($index, -1) == "p") {
    $number = round($number);
  }
}

// Conditional texts - this NEEDS to go after the percentage rounding! (or else the text will get the ugly percentage inside it)
$v["import_condtext"] = $v["import_personal_1_2_p"] < $v["import_community_1_2_p"] ? "even more" : "while";

$text= &$v["CIV_civ_condtext"];

$poverty = round($v["CIV_civ_poverty_p"] / $v["CIV_civ_p"] * 100);
$access = round($v["CIV_civ_access_p"] / $v["CIV_civ_p"] * 100);
$age = round($v["CIV_civ_age_14_24_p"] / $v["CIV_civ_p"] * 100);

if ($age > $access && $age > $poverty) {
  $v["CIV_civ_condtext"] = "patrons aged 14-24, as this group accounted for " . $age;
} else if ($access > $age && $access > $poverty) {
  $v["CIV_civ_condtext"] = "patrons without access to the Internet except at a public library, as this group accounted for " . $access;
} else if ($poverty > $access && $poverty > $age) {
  $v["CIV_civ_condtext"] = "lower income patrons, as this group accounted for " . $poverty;
}

$time_end = microtime_float();
$time = $time_end - $time_start;

if (isset($_REQUEST['debug2'])) {
  echo "<!--Variables took $time seconds to calculate-->";
  
  echo "<!--";
  print_r($better_array);
  echo "-->";
}
?>
