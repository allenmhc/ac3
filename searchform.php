<?php
/**
 * Custom search form.
 */
?>
<form id="searchform" action="<?php echo home_url(); ?>" method="get">
  <fieldset>
    <input type="text" id="search" name="s" placeholder="Search" value="<?php the_search_query(); ?>" />
    <input type="image" id="searchsubmit" alt="Search" src="<?php echo get_bloginfo('template_directory'); ?>/images/sidebar/search.png" />
  </fieldset>
</form>
