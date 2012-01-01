<?php
/**
 * Theme header.
 * Displays everything<head> and the header + nav.
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <title><?php wp_title(); ?></title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:100" type="text/css" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed"
      href="<?php bloginfo('rss2_url'); ?>" />

  <script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/lib/modernizr-1.6.min.js"></script>
  <script src="http://use.typekit.com/eyp5dlm.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="scripts/lib/jquery-1.7.1.min.js">\x3C/script>')</script>

  <?php wp_head(); ?>
</head>

<body>
  <header id="site-header">
    <div id="header-content">
      <a id="header-title" href="<?php echo get_home_url(); ?>">
        <h1><?php bloginfo('name'); ?></h1>
        <h3 id="subheader"><?php bloginfo('description'); ?></h3>
      </a>

      <?php function page_link($page) { echo get_permalink(get_page_by_title($page)->ID); } ?>
      <?php
        function selected_page($page) {
          if (ac3_is_archives() && $page == 'Archives') {
            echo 'selected';
          } else {
            echo (ac3_is_page($page)) ? 'selected' : '';
          }
        }
        ?>
      <nav id="header-nav">
        <ul>
          <li class="nav-item">
            <a class="<?php echo (is_home() ? 'selected' : ''); ?>" href="<?php echo get_home_url(); ?>">
              <h4>home</h4><span class="subtext">origin</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="<?php selected_page('Articles'); ?>" href="<?php page_link('articles'); ?>">
              <h4>articles</h4><span class="subtext">noteworthy</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="<?php selected_page('Archives'); ?>" href="<?php page_link('archives'); ?>">
              <h4>archives</h4><span class="subtext">thoughtstream</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="<?php selected_page('About'); ?>" href="<?php page_link('about'); ?>" rel="author">
              <h4>about</h4><span class="subtext">identity</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <div id="content" class="clearfix">
