<?php
/*
Template Name: FAQ
*/
?>
<?php get_header(); ?>

<main class="main">
  <?php $posts = get_posts(['post_type' => 'faq']) ?>
  <!-- SEKCJA GLOWNA -->
  <section class="section">
    <div class="container">
      <div class="row align-items-start">
        <?php if (have_posts()): ?>
        <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
          <form id="faq-search" class="faq-search">
            <label for="faq-search-input" class="faq-search__label">
              <?php pll_e('Wpisz szukaną frazę') ?>
            </label>
            <input type="text" id="faq-search-input" class="faq-search__input">
          </form>
          <?php while(have_posts()): the_post(); ?>
          <article id="post-<?php echo get_the_ID() ?>" class="faq-block js-faq-block">
            <h2 class="faq-block__title">
              <?php echo get_the_title() ?>
            </h2>
            <?php the_content() ?>
          </article>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <?php wp_reset_postdata(); ?>
  </section>
  <!-- KONIEC SEKCJA GLOWNA -->
</main>

<?php get_footer();