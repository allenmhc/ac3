<?php
/* Search results template. */
define('WP_USE_THEMES', false);
global $wp_query;
?>

<?php
  get_header();
?>

<div id="alpha">
<?php if ( have_posts() ) : ?>
  <?php
  while (have_posts()):
    the_post();
  ?>
  <article class="post clearfix">
    <header class="post-title">
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <div class="metainfo">
        <time datetime="<?php echo get_the_date('Y-m-d'); ?>" pubdate="pubdate">
          <?php echo get_the_date('M j, Y'); ?>
        </time>
      </div>
    </header>

    <div class="post-body">
      <?php the_excerpt(); ?>
    </div>
  </article>
  <?php endwhile; ?>
<?php else: ?>
  <article class="post" id="no-search-results">
    <div class="post-body">
      <p>Sorry, couldn't find anything. Here's a latte for your troubles.</p>
      <div id="coffee-404" />
    </div>
  </article>
<?php endif;?>
</div>

<div id="beta">
  <?php get_sidebar(); ?>
</div>

<?php
  get_footer();
?>
