<?php
/*
Template Name: Articles
*/
define('WP_USE_THEMES', false);
?>

<?php
  get_header();
  $articles = get_posts(array(
    "meta_key" => "article",
    "meta_value" => 1,
    "numberposts" => -1
  ));
  // Find all the categories associated with articles, create a mapping of category name -> id + name + posts.
  $article_categories = array();
  foreach ($articles as $article) {
    $categories = get_the_category($article->ID);
    foreach ($categories as $category) {
      if (!isset($article_categories[$category->cat_name])) {
        $article_categories[$category->cat_name] = array(
          'id' => $category->cat_ID,
          'name' => $category->cat_name,
          'posts' => array());
      }
      $article_categories[$category->cat_name]['posts'][] = $article;
    }
  }
  sort($article_categories);
?>

<div id="alpha" class="articles-page">
  <a href="#" class="info-icon" id="article-info">
    <p>
      A few posts that caught the community's attention or I think are worth a read.
    </p>
  </a>

  <?php foreach ($article_categories as $article_category): ?>
  <section class="article-cat">
    <h1 class="cat-title">
      <a href="<?php echo get_category_link($article_category['id']); ?>">
        <?php echo $article_category['name']; ?>
      </a>
    </h1>
    <ul class="articles clearfix">
      <?php foreach ($article_category['posts'] as $post): ?>
      <li class="article">
        <a href="<?php echo get_permalink($post->ID); ?>" class="article-link">
          <?php echo $post->post_title; ?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </section>
  <?php endforeach ?>
</div>

<div id="beta">
  <?php get_sidebar(); ?>
</div>

<?php
  get_footer();
?>

