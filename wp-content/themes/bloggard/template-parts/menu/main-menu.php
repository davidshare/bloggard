<nav class="nav  main-nav" id="main-nav" role="navigation">
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
</nav>