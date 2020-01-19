<?php get_header(); ?>

<main class="main">
  <section class="section">
    <div class="container">
      <?php if (have_posts()): ?>
      <div class="row">
        <div class="col-12">
          <h2 class="section-title">
            <?php pll_e('Wyniki wyszukiwania dla') ?>: <i><?php echo get_search_query(); ?></i>
          </h2>
        </div>
      </div>
      <?php
      while (have_posts()):
        the_post();
      ?>
      <div class="row">
        <a id="post-<?php echo get_the_ID() ?>" href="<?php echo get_permalink() ?>" class="article-block article-block--horizontal">
          <header class="article-block__header">
            <picture class="article-block__image-wrapper image">
              <?php echo get_the_post_thumbnail() ?>
            </picture>
          </header>
          <div class="article-block__content">
            <h3 class="article-block__title">
              <?php echo get_the_title() ?>
            </h3>
            <p>
              <?php echo get_the_excerpt() ?>
            </p>
          </div>
        </a>
      </div>
      <?php
      endwhile;
      ?>
      <?php else: ?>
      <h3 class="article__title">
        <?php pll_e('Brak postów do wyświetlenia') ?>
      </h3>
      <?php endif ?>
    </div>
  </section>
</main>

<?php get_footer();
