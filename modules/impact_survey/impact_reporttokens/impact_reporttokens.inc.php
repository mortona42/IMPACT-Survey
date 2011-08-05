<?php
global $better_array;

/**
 * Implements hook_tokens().
 */
function impact_reporttokens_tokens($type, $tokens, array $data = array(), array $options = array()) {
  #$fscs = token_replace('[current-user:profile-library-registration:field-library-reg-system]'); 
  $fscs = "WA0064";
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
  #$fscs = token_replace('[current-user:profile-library-registration:field-library-reg-system]');
  $fscs = "WA0064";
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
