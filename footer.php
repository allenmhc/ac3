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

    <div id="footer-beta">
      <ul id="elsewhere" class="clearfix">
        <li id="elsewhere-linkedin">
          <a href="http://www.linkedin.com/in/allencheung" target="_blank" title="LinkedIn" class="icon" rel="me">
            <img src="<?php ac3_images_dir(); ?>/footer/i_linkedin.png" alt="LinkedIn" />
          </a>
        </li>
        <li id="elsewhere-flickr">
          <a href="http://www.flickr.com/photos/datheron/" target="_blank" title="Flickr" class="icon" rel="me">
            <img src="<?php ac3_images_dir(); ?>/footer/i_flickr.png" alt="Flickr" />
          </a>
        </li>
        <li id="elsewhere-googleplus">
          <a rel="author" target="_blank" title="Google+" class="icon" rel="me"
              href="https://profiles.google.com/allenc">
            <img src="<?php ac3_images_dir(); ?>/footer/i_googleplus.png" alt="Google+" />
          </a>
        </li>
        <li id="elsewhere-twitter">
          <a href="http://twitter.com/#!/allenmhc" target="_blank" title="Twitter" class="icon" rel="me">
            <img src="<?php ac3_images_dir(); ?>/footer/i_twitter.png" alt="Twitter" />
          </a>
        </li>
      </div>
    </div>
 </footer>

  <?php
    wp_footer();
  ?>
</body>

<?php function scripts_dir() { echo get_bloginfo('template_directory') . '/scripts'; } ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="scripts/lib/jquery-1.7.1.min.js">\x3C/script>')</script>
<script src="<?php scripts_dir(); ?>/lib/underscore.js"></script>
<script src="<?php scripts_dir(); ?>/lib/date.js"></script>
<script src="<?php scripts_dir(); ?>/index.js"></script>
<script>
</html>
