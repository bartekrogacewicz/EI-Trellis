<?php get_header(); ?>
<?php
while (have_posts()): the_post() ?>

<?php
$cats = [];
foreach(get_the_category() as $cat) {
  $cats[] = $cat->term_id;
}
$cats_js_arr = '[' . implode(',', $cats) . ']';
?>;
<script>
  window._postId = <?php echo get_the_ID() ?>;
  window._categoriesIds = <?php echo $cats_js_arr ?>
</script>

<main class="main">
  <section class="section">
    <div class="container">
      <div class="row">
        <div id="articles-list" class="articles-list col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
          <?php echo get_template_part('includes/single-article', 'Single Article'); ?>
          <div id="infinite-listener"></div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php endwhile; ?>

<?php get_footer();