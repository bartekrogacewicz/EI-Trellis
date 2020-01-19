<?php
/*
Template Name: Patron
*/
?>
<?php get_header(); ?>

<main class="main">
  <?php $post_list = get_posts_from_category($cat, 'najnowsze', 0); ?>
  <!-- SEKCJA GLOWNA -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="page-title">
            <?php the_title() ?>
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <?php if (have_posts()): while(have_posts()): the_post() ?>
            <?php the_content() ?>
          <?php endwhile; endif; ?>
        </div>
        <div class="col-12 col-md-6 col-lg-8">
          
        </div>
      </div>
    </div>
    <?php wp_reset_postdata(); ?>
  </section>
  <!-- KONIEC SEKCJA GLOWNA -->
</main>

<?php get_footer();