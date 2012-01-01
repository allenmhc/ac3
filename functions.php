<?php

/**
 * Retrieve a post from post.php, using $args to specify which comb. of post data to include.
 * Args are defined in $possible_args.
 */
function ac3_post() {
  load_template(get_template_directory() . '/post.php', false);
}

function ac3_is_home() {
  return ac3_is_page('Home');
}
function ac3_is_articles() {
  return ac3_is_page('Articles');
}
function ac3_is_archives() {
  return ac3_is_page('Archives') || is_category() || is_month() || is_day() || is_year();
}
function ac3_is_about() {
  return ac3_is_page('About');
}
function ac3_is_page($page_name) {
  return get_page_by_title($page_name)->ID == get_the_ID();
}

function ac3_images_dir() {
  echo get_bloginfo('template_directory') . '/images';
}

/**
 * Find the years of the oldest and newest posts.
 */
function ac3_find_cap_posts_dates() {
  $oldest = get_posts(array(
    'orderby' => 'date',
    'order' => 'ASC',
    'posts_per_page' => 1,
    'caller_get_posts' => 1
  ));
  $newest = get_posts(array(
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 1,
    'caller_get_posts' => 1
  ));
  $oldest_postdate = strtotime($oldest[0]->post_date);
  $newest_postdate = strtotime($newest[0]->post_date);

  return array(
    'oldest_year' => date('Y', $oldest_postdate),
    'oldest_month' => date('n', $oldest_postdate),
    'newest_year' => date('Y', $newest_postdate),
    'newest_month' => date('n', $newest_postdate)
  );
}

/**
 * Find the posts of a specified year, where each index in the array represents a month.
 */
function ac3_find_posts_by_year($year) {
  $query = new WP_Query(array(
    'year' => $year,
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => -1,
  ));
  $posts = $query->get_posts();
  $retval = array();
  for ($month = 0; $month < 12; ++$month) {
    $retval[$month] = array();
  }
  foreach ($posts as $post) {
    $post_date = strtotime($post->post_date);
    $month_idx = date('n', $post_date) - 1;
    $retval[$month_idx][] = $post->post_title;
  }
  return $retval;
}

/**
 * Get the month string from an monthnum.
 */
function ac3_get_month_name($monthnum) {
  $month_names = array(
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
  );
  return $month_names[$monthnum-1];
}

/* Filters */
function new_excerpt_length($length) {
	return 60;
}
add_filter('excerpt_length', 'new_excerpt_length');
function new_excerpt_more($more) {
  global $post;
  $arrow_icon = get_bloginfo('template_directory') . '/images/arrow-right.png';
	return '<a class="more-link" href="'. get_permalink($post->ID) . '"><img src="' . $arrow_icon .'" alt="more" /></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>
