<?php

/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dosth App
 */

get_header();
?>
<?php if (have_posts()) { ?>
  <main class="main o-container">
    <h2 class="section-title featured-posts-title">Articles</h2>
    <div class="articles" id="articles">
      <?php while (have_posts()) { ?>
        <?php the_post() ?>

        <article class="article-card">
          <figure class="article-image">
            <?php _themename_display_post_thumbnail(get_the_post_thumbnail_url(), get_the_title()) ?>
          </figure>
          <div class="article-content">
            <a href="#" class="article-category"><?php the_category(',');?></a>
            <h3 class="article-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h3>
          </div>
        </article>
      <?php } ?>
    </div>
  </main>
  <?php the_posts_pagination() ?>
<?php } else { ?>
  <p><?php echo __('Sorry, no posts match your criteria.', '_themename'); ?></p>
<?php } ?>
<?php get_footer(); ?>