<?php

/**
 * Retrieve a post from post.php, using $args to specify which comb. of post data to include.
 * Args are defined in $possible_args.
 */
function ac3_post() {
  load_template(get_template_directory() . '/post.php', false);
}
?>
