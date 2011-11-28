<?php
/* Search results template. */
define('WP_USE_THEMES', false);
global $wp_query;
?>

<?php
  get_header();
?>

<div id="alpha">
  <div id="page-404">
    <p>Hey! How'd you end up here?</p>
    <p>Well, this is a little embarassing…but here's a latte for your troubles.</p>
    <div id="coffee-404"></div>
  </div>
</div>

<div id="beta">
  <?php get_sidebar(); ?>
</div>

<?php
  get_footer();
?>
