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
        I'm a software engineer on the front-end of the web. I like clean designs, elegant code,
        and simple products. I write about stuff and take bad pictures.
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
