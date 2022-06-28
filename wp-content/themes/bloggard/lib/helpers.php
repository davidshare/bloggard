<?php
function _themename_copyright()
{
  global $wpdb;
  $copyright_dates = $wpdb->get_results("
    SELECT
    YEAR(min(post_date_gmt)) AS firstdate,
    YEAR(max(post_date_gmt)) AS lastdate
    FROM
    $wpdb->posts
    WHERE
    post_status = 'publish'
    ");
  $output = '';
  if ($copyright_dates) {
    $copyright = "&copy; " . $copyright_dates[0]->firstdate;
    if ($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
      $copyright .= '-' . $copyright_dates[0]->lastdate;
    }
    $output = $copyright;
  }
  return $output;
}


if(!function_exists('_themename_post_meta')) {
  function _themename_post_meta() {
      /* translators: %s: Post Date */
      printf(
          esc_html__( 'Posted on %s', '_themename' ), 
          '<a href="' . esc_url(get_permalink( )) . '"><time datetime="' . esc_attr(get_the_date('c')) . '">' .  esc_html(get_the_date()) . '</time></a>'
      );
      /* translators: %s: Post Author */
      printf(
          esc_html__(' By %s','_themename'),
          '<a href="' . esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )) . '">' . esc_html(get_the_author( )) . '</a>'
      );
  }
}

function _themename_readmore_link() {
  echo '<a class="c-post__readmore" href="' . esc_url(get_permalink()) . '" title="' . the_title_attribute(['echo' => false]) . '">';
  /* translators: %s: Post Title */
  printf(
      wp_kses(
          __( 'Read More <span class="u-screen-reader-text">About %s</span>', '_themename' ),
          [
              'span' => [
                  'class' => []
              ]
          ]
      ),
      get_the_title()
  );
  echo '</a>';
}

?>