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

  <?php
    $paged = get_query_var('paged');
    $max_pages = $wp_query->max_num_pages;
    $curr_link = get_pagenum_link($paged);
    $next_link = get_next_posts_page_link();
    $prev_link = get_previous_posts_page_link();
  ?>

  <?php if ($max_pages > 1): ?>
    <div class="pagination-buttons clearfix">
    <?php
    function get_button($tag, $direction, $disabled, $href, $text) {
      return "<$tag class=\"$direction pagination-button $disabled\" $href>$text</$tag>";
    }

    $buttons = '';
    if ($paged < $max_pages) {
      $buttons .= get_button('a', 'prev', '', "href=\"$next_link\"", 'Older');
    } else {
      $buttons .= get_button('span', 'prev', 'disabled', '', 'Older');
    }
    if ($paged > 1) {
      $buttons .= get_button('a', 'next', '', "href=\"$prev_link\"", 'Newer');
    } else {
      $buttons .= get_button('span', 'next', 'disabled', '', 'Newer');
    }
    echo $buttons;
    ?>
   </div>
  <?php endif; ?>

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
