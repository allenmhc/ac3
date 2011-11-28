<?php

/**
 * Retrieve a post from post.php, using $args to specify which comb. of post data to include.
 * Args are defined in $possible_args.
 */
function ac3_post() {
  load_template(get_template_directory() . '/post.php', false);
}

function ac3_is_page($page_name) {
  return get_page_by_title($page_name)->ID == get_the_ID();
}

function ac3_images_dir() {
  echo get_bloginfo('template_directory') . '/images';
}
?>

<?php

/* Filters */
function new_excerpt_length($length) {
	return 25;
}
add_filter('excerpt_length', 'new_excerpt_length');
function new_excerpt_more($more) {
  global $post;
  $arrow_icon = get_bloginfo('template_directory') . '/images/arrow-right.png';
	return '<a class="more-link" href="'. get_permalink($post->ID) . '"><img src="' . $arrow_icon .'" alt="more" /></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>
