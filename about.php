<?php
/*
Template Name: About
*/
define('WP_USE_THEMES', false);
?>

<?php
  get_header();
?>

<div id="alpha">
  <section id="about-banner">
    <img id="about-banner-image" src="<?php ac3_images_dir(); ?>/me_banner.jpg" alt="Looking lost" />
    <div id="about-text">
      <h1>ac.about</h1>
      <p>
        I'm a software engineer on the front-end of the web. I like clean designs, elegant code,
        and simple products. I write about stuff and take bad pictures.
      </p>
    </div>
  </section>

  <section id="about-content">
    <dl id="about-content-list">
      <dt>coding</dt>
      <dd>
        <p>I started coding as a kid, but didn't do much until after college. I did manage to graduate from
        UC Berkeley's <a href="http://www.eecs.berkeley.edu/">computer science</a> BA program back in 2004,
        and got my first professional software job writing <a href="http://en.wikipedia.org/wiki/Windows_API">Win32</a>
        applications at <a href="http://www.factset.com/">Factset Research Systems</a>.</p>

        <p>I managed to teach myself front-end web development and landed jobs at
        <a href="http://www.tagged.com/">Tagged</a> and <a href="http://www.lolapps.com/">Lolapps</a>,
        a pair of startups pioneering new aspects of the social online and gaming experience.
        I also spent a year at Google building tools to support the sales teams.</p>

        <p>I'm currently a front-end engineer at <a href="http://www.squareup.com/">Square</a>, developing our
        vision of a comprehensive web suite for our merchants.</p>
      </dd>

      <dt>elsewhere</dt>
      <dd>
        <p><strong>ac</strong> is this blog, which I've created to capture my engineering- and design-centric thoughts.
        It's also an outlet that lets me continally write and experiment with web technologies and developments.</p>

        <p><a href="http://www.incoherence.net/">incoherence.net</a> is a previous blog, a playground where I was
        able to teach myself how to develop for the web. Its evolution is a reminder of how much I've learned and
        how much more there is to learn.</p>

        <p>I'm also on <a href="http://www.quora.com/Allen-Cheung">Quora</a> and
        <a href="https://github.com/allenmhc/">Github</a>, though my Github account is pretty barren.</p>
      </dd>

      <dt>randomly</dt>
      <dd>
        <p>I enjoy video games of all types, and I'm into tech gadgetry and hardware as well. I have dabbled
        in writing and photography, but I don't do either particularly well. The only sports I understand are
        basketball and hockey.</p>
      </dd>

      <dt>credit</dt>
      <dd>
        <p>This is a <a href="http://wordpress.org/">Wordpress</a> blog, with my own theme built on top of
        <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>, <a href="http://jquery.com/">jQuery</a>
        and <a href="http://sass-lang.com/">SASS</a>, with webfonts assistance from
        <a href="http://www.google.com/webfonts">Google Web Fonts</a> and <a href="https://typekit.com/fonts">Typekit</a>.
        Useful Wordpress plugins include <a href="http://www.deliciousdays.com/cforms-plugin/">cforms II</a>,
        <a href="http://www.disqus.com/">Disqus</a>, and <a href="http://www.yarpp.org/">YARPP</a>. Hosting courtesy of
        <a href="http://dreamhost.com/">Dreamhost</a>.</p>
      </dd>
    </dl>
  </section>
</div>

<div id="beta">
  <?php get_sidebar(); ?>
</div>

<?php
  get_footer();
?>
