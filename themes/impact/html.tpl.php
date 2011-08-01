<?php // $Id$   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"
  <?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  
  <?php // Hack for IE svg
  if($head_title=='My IMPACT | IMPACT Survey'): ?>
  <script src="<?php print drupal_get_path('module', 'myimpact_report_cover'); ?>/svg.js" data-path="<?php print drupal_get_path('module', 'myimpact_report_cover'); ?>"></script>
  <?php endif; ?>
  
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if IE]>
    <link type="text/css" rel="stylesheet" media="all" href="<?php print base_path() . path_to_theme(); ?>/ie_styles.css" />
  <![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
