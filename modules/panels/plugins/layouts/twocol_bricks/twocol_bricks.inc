<?php
// $Id: twocol_bricks.inc,v 1.4 2010/10/11 22:56:02 sdboyer Exp $

/**
 * @file
 * Implementation for the two column bricked layout
 */

// Plugin definition
$plugin = array(
  'title' => t('Two column bricks'),
  'category' => t('Columns: 2'),
  'icon' => 'twocol_bricks.png',
  'theme' => 'panels_twocol_bricks',
  'css' => 'twocol_bricks.css',
  'regions' => array(
    'top' => t('Top'),
    'left_above' => t('Left above'),
    'right_above' => t('Right above'),
    'middle' => t('Middle'),
    'left_below' => t('Left below'),
    'right_below' => t('Right below'),
    'bottom' => t('Bottom'),
  ),
);

