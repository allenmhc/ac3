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
  <div id="content"></div>

  <?php wp_footer(); ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/lib/underscore.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/lib/json2.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/lib/backbone.min.js"></script>

</html>
