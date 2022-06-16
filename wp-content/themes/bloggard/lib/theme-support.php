<?php
function _themename_theme_support()
{
  /*
  * Make theme available for translation.
  * Translations can be filed in the /languages/ directory.
  */
  load_theme_textdomain( '_themename', get_stylesheet_directory() . '/languages' );

  //add <title> tag support
  add_theme_support('title-tag');

  //add custom logo support
  add_theme_support('custom-logo');
}

add_action('after_setup_theme', '_themename_theme_support');
