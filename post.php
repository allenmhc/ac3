<article class="post">

  <header class="post-title">
    <h1><?php the_title(); ?></h1>
    <div class="metainfo">
      <time datetime="<?php echo get_the_date('Y-m-d'); ?>" pubdate="pubdate">
        <?php echo get_the_date('M j, Y'); ?>
      </time>
    </div>
  </header>
  <div class="post-body">
    <?php
      global $more;
      $more = 1;
      the_content();
    ?>
  </div>

  Posted under <?php the_category(); ?>

  <div class="shareaholic-like-buttonset clearfix">
    <a class="shareaholic-googleplusone" shr_size="standard" shr_count="no"
        shr_href="<?php the_permalink(); ?>"></a>
    <a class="shareaholic-fblike" shr_layout="standard" shr_showfaces="false"
        shr_href="<?php the_permalink(); ?>"></a>
  </div>

  <div class="comments" name="comments" id="comments">
    <?php comments_template(); ?>
  </div>

</article>