<?php
  function _themename_register_menus(){
    register_nav_menus( array(
      'main-menu' => esc_html__('Main menu - Display this menu in the top nav', '_themename'),
      'footer-menu' => esc_html__('Footer menu - Display this menu in the footer', '_themename')
    ));
  }

  add_action( 'init', '_themename_register_menus');

?>
