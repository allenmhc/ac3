<?php /*
Sidebar template
Author: Allen Cheung
*/
?>
<?php if ($related_query->have_posts()):?>
<ul>
	<?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
  <li>
    <a href="<?php the_permalink(); ?>" rel="bookmark">
      <div class="sidebar-post-title"><?php the_title(); ?></div>
      <div class="sidebar-post-metadata">
        <?php echo date('M j', strtotime(get_the_date())); ?>
        <?php
          $categories = array();
          foreach (array_slice(get_the_category(), 0, 2) as $cat) {
            $categories[] = $cat->cat_name;
          }
          $category_str = join(', ', $categories);
        ?>
        <span class="sidebar-post-categories"><?php echo $category_str; ?></span>
      </div>
    </a>
  </li>
	<?php endwhile; ?>
</ul>
<?php else: ?>
<p>No related posts.</p>
<?php endif; ?>
