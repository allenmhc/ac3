<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
  <meta charset="UTF-8">
  <title><?php wp_title(); ?></title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:100" type="text/css" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed"
      href="<?php bloginfo('rss2_url'); ?>" />

  <script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/lib/modernizr-1.6.min.js"></script>
  <script src="http://use.typekit.com/eyp5dlm.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div id="header-content">
      <a id="header-title" href="<?php get_home_url() ?>">
        <h1><?php bloginfo('name'); ?></h1>
        <h3 id="subheader"><?php bloginfo('description'); ?></h3>
      </a>

      <nav id="header-nav">
        <ul>
          <li class="nav-item"><a href="#">
            <h4>home</h4><span class="subtext">origin</span>
          </a></li>
          <li class="nav-item"><a href="#">
            <h4>articles</h4><span class="subtext">noteworthy</span>
          </a></li>
          <li class="nav-item"><a href="#">
            <h4>archives</h4><span class="subtext">thoughtstream</span>
          </a></li>
          <li class="nav-item"><a href="#">
            <h4>about</h4><span class="subtext">identity</span>
          </a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div id="content">
  </div>

  <?php wp_footer(); ?>
</body>
<script>
  var apiRoot = "<?php echo get_option('siteurl'); ?>";
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/lib/underscore.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/lib/json2.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/lib/backbone.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/api.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/post.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/app.js"></script>
<script>
  $(document).ready(function() {
    window.App = new AppView;
  });
</script>
</html>
