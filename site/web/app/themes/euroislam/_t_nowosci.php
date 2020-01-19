<?php
/*
Template Name: Nowości
*/
?>
<?php get_header(); ?>

<main class="main">
  <?php $posts = get_posts(['post_type' => 'news']) ?>
  <!-- SEKCJA GLOWNA -->
  <section class="section">
    <div class="container">
      <div class="row align-items-start">
        <?php if ($posts): ?>
        <div class="col-12 col-md-7 col-lg-8">
          <?php foreach($posts as $post): ?>
          <a id="post-<?php echo get_the_ID() ?>" href="<?php echo get_permalink(get_the_ID()) ?>"
            class="hero-block hero-block--normal">
            <div class="hero-block__image-wrapper image">
              <?php echo get_the_post_thumbnail() ?>
            </div>
            <span class="hero-block__date">
              <?php pll_e('Publikacja') ?>: <?php echo get_the_date('d.m.Y') ?>
            </span>
            <header class="hero-block__header">
              <h2 class="hero-block__title">
                <?php echo get_the_title() ?>
              </h2>
              <p>
                <?php echo get_the_excerpt() ?>
              </p>
            </header>
            <div class="hero-block__footer">
              <a href="<?php echo get_permalink(get_the_ID()) ?>" class="button">
                <?php pll_e('Czytaj dalej') ?>
              </a>
            </div>
          </a>
          <?php endforeach ?>
        </div>
        <aside class="aside aside--category col col-12 col-md-5 col-lg-4">
          <?php $column = get_field('kolumna_1', pll_current_language() === 'pl' ? 2 : 10) ?>
          <a href="<?php echo $column['link'] ?>" class="aside__footer-block site-footer__link">
            <h4 class="site-footer__link-title">
              <?php echo $column['tytul'] ?>
            </h4>
            <p>
              <?php echo $column['tresc'] ?>
            </p>
          </a>
          <?php $column = get_field('kolumna_2', pll_current_language() === 'pl' ? 2 : 10) ?>
          <a href="<?php echo $column['link'] ?>" class="aside__footer-block site-footer__link">
            <h4 class="site-footer__link-title">
              <?php echo $column['tytul'] ?>
            </h4>
            <p>
              <?php echo $column['tresc'] ?>
            </p>
          </a>
        </aside>
        <?php endif; ?>
      </div>
    </div>
    <?php wp_reset_postdata(); ?>
  </section>
  <!-- KONIEC SEKCJA GLOWNA -->
</main>

<?php get_footer();