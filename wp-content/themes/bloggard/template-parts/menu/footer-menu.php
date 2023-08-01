<nav class="footer-nav" id="footer-nav" role="navigation">
    <?php wp_nav_menu(array(
      'theme_location' => 'footer-menu',
      'menu_class' => 'footer-navlinks',
      'menu_id' => 'footer-navlinks',
      'container' => ''
  )); ?>
  <p class="copyright">
    <a class="logo-text"><?php echo esc_html(get_bloginfo('name')); ?> | <?php echo _themename_copyright(); ?>
  </p>
</nav>