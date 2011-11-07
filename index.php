<?php
/* Base index file. */
define('WP_USE_THEMES', false);
global $wp_query;
?>

<?php
  get_header();
?>

<div id="alpha">
  <?php
  while (have_posts()) {
    the_post();
    ac3_post(array('show_morelink' => true, 'show_comments_link' => true));
  }
  ?>
</div>

<div id="beta"></div>

<?php
  get_footer();
?>