<?php
/*
Template Name: About
*/
define('WP_USE_THEMES', false);
?>

<?php
  get_header();
?>

<div id="alpha">
  <section id="about-banner">
    <img id="about-banner-image" src="<?php ac3_images_dir(); ?>/me_banner.jpg" alt="Looking lost" />
    <div id="about-text">
      <h1>ac.about</h1>
      <p>
        I'm a front-end web software engineer who cares about a clean design, both
        in the user interface and the code its built upon.
      </p>
    </div>
  </section>
</div>

<div id="beta">
  <?php get_sidebar(); ?>
</div>

<?php
  get_footer();
?>
