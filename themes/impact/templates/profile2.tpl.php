<?php
// $Id: profile2.tpl.php,v 1.1.2.1 2010/11/02 16:58:35 fago Exp $

/**
 * @file
 * Default theme implementation for profiles.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) profile type label.
 * - $url: The URL to view the current profile.
 * - $page: TRUE if this is the main view page $url points too.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-profile
 *   - profile-{TYPE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>>
        <a href="<?php print $url; ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      print render($content);
    ?>
       <?php
   $sql="SELECT field_fielding_date_value2 AS from_date 
	   FROM {field_data_field_fielding_date} AS a, 
	   {profile} AS b WHERE a.entity_id=b.pid AND b.uid=:uid";
	   $date=db_query($sql, array('uid'=>$user->uid))->fetchField();
	   
	   		//get the type
	   		$sql="select type from {profile_type} where label=:title";
	   		$type=db_query($sql, array('title'=>$title))->fetchField();
	   
	   		//if they have submitted, the edit page will not be allowed
          		$sql="select pid from {myimpact_profile_status} where uid=:uid and type=:type";
          		$pid=db_query($sql, array('uid'=>$user->uid, 'type'=>$type))->fetchField();
	  
	   
	   if((empty($date) or strtotime($date)>time()) and empty($pid)):
	   
	   $edit_url = $url."/edit";
	   
   ?>
<input type="button" class="form-submit" value="Edit" onclick = "window.location.href='<?php print $edit_url; ?>'"></input>
    <?php endif;?>

  </div>
</div>
