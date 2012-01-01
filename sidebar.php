<?php if (!ac3_is_about()): ?>
<section id="search-form">
  <?php get_search_form(); ?>
  <?php if (is_search()): ?>
    <?php
      global $wp_query;
      $total_results = $wp_query->found_posts;
    ?>
    <aside id="search-info">
      <?php echo $total_results; ?> post<?php echo ($total_results == 1) ? "" : "s" ?> found.
    </aside>
    <?php wp_reset_query(); ?>
  <?php endif; ?>
</section>
<?php endif; ?>

<?php if (!ac3_is_archives() && !ac3_is_about()): ?>
<section id="recent" class="post-links">
  <h1>ac.recent</h1>
  <ul>
    <?php
      $args = array( 'numberposts' => '5', 'post_status' => 'publish' );
      $posts= wp_get_recent_posts($args);
      foreach ($posts as $post):
    ?>
    <li>
      <a class="post" href="<?php echo get_permalink($post["ID"]); ?>" title="<?php echo $post["post_title"]; ?>">
        <div class="sidebar-post-title"><?php echo $post["post_title"]; ?></div>
        <div class="sidebar-post-metadata">
          <?php echo date('M j', strtotime($post["post_date"])); ?>
          <?php
            $categories = array();
            foreach (array_slice(get_the_category($post["ID"]), 0, 2) as $cat) {
              $categories[] = $cat->cat_name;
            }
            $category_str = join(', ', $categories);
          ?>
          <span class="sidebar-post-categories"><?php echo $category_str; ?></span>
        </div>
      </a>
    </li>
    <?php endforeach; ?>
    <?php wp_reset_query(); ?>
  </ul>
</section>
<?php endif; ?>

<?php if (is_home() || is_single()): ?>
<section id="related" class="post-links">
  <h1>ac.related</h1>
  <?php related_posts(); ?>
</section>
<?php endif; ?>

<?php if (ac3_is_archives()): ?>
<section id="archives" class="post-links">
  <h1>ac.<span class="chrono">chrono</span><span class="category">category</span></h1>
  <a href="#" id="archives-toggle"><img src="<?php ac3_images_dir(); ?>/sidebar/toggle.png" alt="Toggle"></a>
  <div id="archives-chrono">
    <ul class="post-list">
      <?php
      $end_posts_dates = ac3_find_cap_posts_dates();
      $queried_year = get_query_var('year');
      if ($queried_year == '') {
        $queried_year = $end_posts_dates['newest_year'];
      }
      for ($year = $end_posts_dates['newest_year']; $year >= $end_posts_dates['oldest_year']; $year -= 1):
      ?>
      <li>
        <h4><a href="#" class="chrono-year"><?php echo $year; ?></a></h4>
        <div class="year-post-list <?php if ($year != $queried_year) { ?>collapsed<?php } ?>">
          <?php
          $years_posts = ac3_find_posts_by_year($year);
          for ($month = count($years_posts); $month > 0; $month -= 1):
          ?>
            <?php
            $months_posts = $years_posts[$month-1];
            if (count($months_posts) > 0):
            ?>
            <a href="<?php echo get_month_link($year, $month); ?>" class="month-posts-link">
              <div class="month-name"><?php echo ac3_get_month_name($month); ?></div>
              <div class="mini-posts-wrapper">
                <ul class="mini-posts">
                  <?php foreach ($months_posts as $post_title): ?>
                    <li><?php echo $post_title; ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </a>
            <?php endif; ?>
          <?php endfor; ?>
        </div>
      </li>
      <?php endfor; ?>
    </ul>
  </div>

  <div id="archives-category">
    <ul class="post-list">
      <?php
      $categories = get_categories(array('order' => "ASC", 'orderby' => "name"));
      foreach ($categories as $category):
      ?>
      <li>
        <a class="category clearfix" href="<?php echo get_category_link($category->cat_ID); ?>">
          <div class="category-name"><?php echo $category->name; ?></div>
          <div class="category-count">
            <div class="category-count-bullets">
              <?php
              $pixel_count = min($category->category_count, 30);
              $first_row_count = $pixel_count % 10;
              for ($i = 1; $i <= $pixel_count; $i += 1) {
              ?>&#8226;<?php if ($i % 10 == $first_row_count) { ?><br /><?php } ?><?php } ?>
            </div>
            <div class="category-count-words">
              <?php echo $category->category_count . ' post' . ($category->category_count != 1 ? 's' : ''); ?>
            </div>
          </div>
        </a>
      </li>

      <?php endforeach; ?>
    </ul>
  </div>
</section>
<?php endif; ?>
