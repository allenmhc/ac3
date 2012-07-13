  </div> <!-- end of main -->

  <footer class="clearfix">
    <div id="footer-alpha">
      <a href="<?php page_link('about'); ?>" rel="author" id="footer-pic-thumb" class="clearfix">
        <img src="<?php ac3_images_dir(); ?>/footer/me_small.png" alt="Back to the camera!" />
      </a>
      <a href="<?php page_link('about'); ?>" rel="author" id="footer-me" class="clearfix">
        Hi! I'm Allen Cheung, a software engineer in the heart of Silicon Valley.
        I spend my time thinking about the intricacies of front-end web development.
        Currently I'm doing just that at Square. <strong>More…</strong>
      </a>
      <div id="footer-meta">
        <a id="footer-rss" href="<?php bloginfo('rss2_url'); ?>">
          <img src="<?php ac3_images_dir(); ?>/footer/rss.png" alt="RSS" />
        </a>
        <p id="copyright">
          <span>Copyright &copy;&nbsp;<?php
            $start_year = 2011;
            $curr_year = date('Y');
            echo $start_year . ($start_year == $curr_year ? '' : ' - ' . $curr_year);
          ?></span>&nbsp;
        </p>
      </div>
    </div>
  </footer>

  <?php
    wp_footer();
  ?>
</body>

<?php function scripts_dir() { echo get_bloginfo('template_directory') . '/scripts'; } ?>
<script src="<?php scripts_dir(); ?>/lib/underscore.js"></script>
<script src="<?php scripts_dir(); ?>/lib/date.js"></script>
<script src="<?php scripts_dir(); ?>/index.js"></script>
<script>
</html>
