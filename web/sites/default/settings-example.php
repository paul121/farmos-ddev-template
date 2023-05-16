<?php

// @codingStandardsIgnoreFile

// Add default Drupal settings!!!
//
// These are explained with detailed comments in Drupal's
// default.settings.php file.
//
// This file only contains a ddev and local settings include.

// Automatically generated include for settings managed by ddev.
if (file_exists(__DIR__ . '/settings.ddev.php') && getenv('IS_DDEV_PROJECT') == 'true') {
  include __DIR__ . '/settings.ddev.php';
}

// Local development.
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}
