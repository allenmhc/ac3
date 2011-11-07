  </div> <!-- end of main -->

  <footer class="clearfix">
    <p id="copyright">
      <span>Copyright &copy;&nbsp;<?php
        $start_year = 2011;
        $curr_year = date('Y');
        echo $start_year . ($start_year == $curr_year ? '' : ' - ' . $curr_year);
      ?></span>&nbsp;
      You've scrolled all the way to the bottom!
    </p>
  </footer>

  <?php
    wp_footer();
  ?>
</body>

<?php function scripts_dir() { echo get_bloginfo('template_directory') . '/scripts'; } ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="<?php scripts_dir(); ?>/lib/underscore.js"></script>
<script src="<?php scripts_dir(); ?>/lib/date.js"></script>
<script>
</html>
