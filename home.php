<?php
/* Home template. */
define('WP_USE_THEMES', false);
global $wp_query;
?>

<?php
  get_header();
?>

<div id="alpha">
  <?php
  $args = array('numberposts' => 1);
  $posts = get_posts($args);
  setup_postdata($posts[0]);
  the_post();
  ac3_post(array('show_morelink' => true, 'show_comments_link' => true));
  ?>
</div>

<div id="beta">
  <?php get_sidebar(); ?>
</div>

<?php
  get_footer();
?>
