<nav class="nav  mobile-nav-closed" id="mobile-nav" role="navigation">
  <div class="logo">
    <span class="logo-image">
      <?php if (has_custom_logo()) :  ?>
        <?php
        // Get Custom Logo URL
        $custom_logo_id = get_theme_mod('custom_logo');
        $custom_logo_data = wp_get_attachment_image_src($custom_logo_id, 'full');
        $custom_logo_url = $custom_logo_data[0];
        ?>

        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>" rel="home">
          <img src="<?php echo esc_url($custom_logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
        </a>
      <?php endif; ?>
    </span>
    <a class="logo-text"><?php echo esc_html(get_bloginfo('name')); ?></a>
  </div>
  <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
  <nav class="social-nav">
    <a href="https://github.com/davidshare"><i class="fa-brands fa-github"></i></a>
    <a href="https://facebook.com/davidshare2"><i class="fa-brands fa-facebook-square"></i></a>
    <a href="https://www.linkedin.com/in/david-essien-share/"><i class="fa-brands fa-linkedin"></i></a>
    <a href="https://twitter.com/davidshare_"><i class="fa-brands fa-twitter"></i></a>
  </nav>
  <span class="nav-icons"><i class="fa-solid fa-xmark"></i><i class="fa-solid fa-bars"></i></span>
</nav>