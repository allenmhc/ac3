<section id="recent">
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
  </ul>
</section>
