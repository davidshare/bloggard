<?php
$footer_bg = _themename_sanitize_footer_bg(get_theme_mod('_themename_footer_bg', 'dark'));
$site_info = get_theme_mod('_themename_site_info', '');
?>

<div class="c-site-info c-site-info--<?php echo $footer_bg; ?>">
  <div class="o-container">
    <div class="o-row">
      <div class="o-row__column o-row__column--span-12 c-site-info__text">
        AllHome
        Courses
        Code Playground
        Top Learners
        Blog
        Pro
        FAQ
        Contact
        CareersWe're hiring
        Terms of Use
        Privacy Policy
        Made with
        by
        Sololearn
        | ©2022
      </div>
    </div>
  </div>
</div>