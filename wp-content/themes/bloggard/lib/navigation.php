<?php
  function _themename_register_menus(){
    register_nav_menus( array(
      'main-menu' => esc_html__('Main menu', '_themename'),
      'footer-menu' => esc_html__('Footer menu', '_themename')
    ));
  }

  add_action( 'init', '_themename_register_menus');

?>
