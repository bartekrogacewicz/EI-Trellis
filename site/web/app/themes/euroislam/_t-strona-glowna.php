<?php
/*
Template Name: Strona główna
*/
?>
<?php get_header(); ?>

<main class="main">
  <!-- SEKCJA GLOWNA -->
  <section class="section">
    <div class="container">
      <div class="row align-items-start">
        <div class="col-12 col-md-7 col-lg-8">
          <?php $article = get_newest_post_with_video() ?>
          <a id="post-<?php echo get_the_ID() ?>" href="<?php echo get_permalink(get_the_ID()) ?>" class="hero-block">
            <div class="hero-block__image-wrapper image">
              <?php echo get_the_post_thumbnail() ?>
            </div>
            <header class="hero-block__header">
              <h2 class="hero-block__title">
                <?php echo get_the_title() ?>
              </h2>
              <p>
                <?php echo get_the_excerpt() ?>
              </p>
            </header>
          </a>
          <?php wp_reset_postdata(); ?>
          <section class="section">
            <h3 class="section-title">
              <a href="<?php echo get_permalink(pll_current_language() === 'pl' ? 826 : 833) ?>"><?php pll_e('Nowości') ?></a>
            </h3>
            <div class="row has-3 has-scroll has-scroll-mobile">
              <?php $posts = get_posts(['post_type' => 'news', 'numberposts' => 3]) ?>
              <?php foreach($posts as $post): ?>
              <a id="post-<?php echo get_the_ID() ?>" href="<?php echo get_permalink() ?>" class="article-block article-block--small">
                <header class="article-block__header">
                  <picture class="article-block__image-wrapper image">
                    <?php echo get_the_post_thumbnail() ?>
                  </picture>
                  <h2 class="article-block__title">
                    <?php echo get_the_title() ?>
                  </h2>
                </header>
                <p class="article-block__content">
                  <?php echo get_the_excerpt() ?>
                </p>
                <footer class="article-block__footer"></footer>
              </a>
              <?php endforeach; ?>
              <?php wp_reset_postdata(); ?>
            </div>
          </section>
        </div>
        <aside class="aside col col-12 col-md-5 col-lg-4">
          <?php $category = get_aside_categories()[0] ?>
          <?php $post_list = get_posts_from_category($category->term_id, 'najnowsze', 2); ?>
          <?php if ($post_list): ?>
          <div class="aside__block">
            <a class="aside__category" href="<?php echo get_permalink($category->term_id) ?>">
              <?php echo $category->name ?>
            </a>
            <?php foreach($post_list as $post): ?>
            <a id="post-<?php echo get_the_ID() ?>" href="<?php echo get_permalink() ?>" class="aside__article">
              <div href="/" class="aside__article-link">
                <p class="aside__article-title">
                  <?php echo get_the_title() ?>
                </p>
                <p>
                  <?php echo get_the_excerpt() ?>
                </p>
              </div>
              <span href="" class="aside__article-author">
                <?php echo get_post_author()['name'] ?>
              </span>
            </a>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </div>
          <?php endif; ?>

          <?php $category = get_aside_categories()[1] ?>
          <?php $post_list = get_posts_from_category($category->term_id, 'najnowsze', 2); ?>
          <?php if ($post_list): ?>
          <div class="aside__block">
            <a class="aside__category" href="<?php echo get_permalink($category->term_id) ?>">
              <?php echo $category->name ?>
            </a>
            <?php foreach($post_list as $post): ?>
            <a id="post-<?php echo get_the_ID() ?>" href="<?php echo get_permalink() ?>" class="aside__article">
              <div href="/" class="aside__article-link">
                <p class="aside__article-title">
                  <?php echo get_the_title() ?>
                </p>
                <p>
                  <?php echo get_the_excerpt() ?>
                </p>
              </div>
              <span href="" class="aside__article-author">
                <?php echo get_post_author()['name'] ?>
              </span>
            </a>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </div>
          <?php endif; ?>
        </aside>
      </div>
    </div>
    <?php wp_reset_postdata(); ?>
  </section>
  <!-- KONIEC SEKCJA GLOWNA -->

  <!-- KATEGORIA 1 -->
  <?php $category_field = get_field('kategorie_pod_sekcja_glowna')['kategoria_i_wyswietlanie_postow_1'] ?>
  <?php $post_list = get_posts_from_category($category_field['kategoria']->term_id, $category_field['kolejnosc_postow'], 4); ?>
  <?php if ($post_list): ?>
  <section class="section section-1">
    <div class="container">
      <div class="row">
        <div class="col">
          <a class="section-title" href="<?php echo get_permalink($category_field['kategoria']->term_id) ?>">
            <?php echo $category_field['kategoria']->name ?>
          </a>
        </div>
      </div>
      <div class="row has-4 has-scroll">
        <?php foreach($post_list as $post): ?>
        <a id="post-<?php echo get_the_ID() ?>" href="<?php echo get_permalink() ?>" class="debate-block">
          <header class="debate-block__header">
            <picture class="debate-block__image-wrapper image">
              <img class="debate-block__image image__element" src="<?php echo get_post_author()['avatar'] ?>" alt="">
            </picture>
            <p class="debate-block__author">
              <?php echo get_post_author()['name'] ?>
            </p>
          </header>
          <div class="debate-block__content">
            <p>
              <?php echo get_the_excerpt() ?>
            </p>
          </div>
        </a>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
  <!-- KONIEC KATEGORIA 1 -->

  <!-- KATEGORIA 2 -->
  <?php $category_field = get_field('kategorie_pod_sekcja_glowna')['kategoria_i_wyswietlanie_postow_2'] ?>
  <?php $post_list = get_posts_from_category($category_field['kategoria']->term_id, $category_field['kolejnosc_postow'], 4); ?>
  <?php if ($post_list): ?>
  <section class="section section-2">
    <div class="container">
      <div class="row">
        <div class="col">
          <a class="section-title" href="<?php echo get_permalink($category_field['kategoria']->term_id) ?>">
            <?php echo $category_field['kategoria']->name ?>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-6">
          <?php $post = $post_list[0] ?>
          <a id="post-<?php echo get_the_ID() ?>" href="<?php echo get_permalink() ?>" class="hero-block hero-block--normal">
            <div class="hero-block__image-wrapper image">
              <?php echo get_the_post_thumbnail() ?>
            </div>
            <header class="hero-block__header">
              <h2 class="hero-block__title">
                <?php echo get_the_title() ?>
              </h2>
              <p>
                <?php echo get_the_excerpt() ?>
              </p>
            </header>
          </a>
          <?php wp_reset_postdata(); ?>
        </div>
        <div class="col-12 col-lg-6">
          <div class="row">
            <?php $post = $post_list[1] ?>
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
            <?php wp_reset_postdata(); ?>
          </div>

          <div class="row">
            <?php $post = $post_list[2] ?>
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
            <?php wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
  <!-- KONIEC KATEGORIA 2 -->

  <!-- KATEGORIA 3 -->
  <?php $category_field = get_field('kategorie_pod_sekcja_glowna')['kategoria_i_wyswietlanie_postow_3'] ?>
  <?php $post_list = get_posts_from_tag($category_field['kategoria']->term_id, $category_field['kolejnosc_postow'], 3); ?>
  <?php if ($post_list): ?>
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col">
          <a class="section-title" href="<?php echo get_permalink($category_field['kategoria']->term_id) ?>">
            <?php echo $category_field['kategoria']->name ?>
          </a>
        </div>
      </div>
      <div class="row has-3 has-scroll">
        <?php foreach($post_list as $post): ?>
        <article id="post-<?php echo get_the_ID() ?>" class="article-block article-block--large">
          <a class="article-block__header" href="<?php echo get_permalink() ?>">
            <picture class="article-block__image-wrapper image">
              <?php echo get_the_post_thumbnail() ?>
            </picture>
          </a>
          <div class="article-block__content">
            <p class="article-block__categories">
              <?php foreach(get_the_category() as $cat): ?>
              <a class="article-block__category" href="<?php echo get_permalink($cat->term_id) ?>">
                <?php echo $cat->name ?>
              </a>
              <?php endforeach ?>
            </p>
            <h3 class="article-block__title">
              <a href="<?php echo get_permalink() ?>">
                <?php echo get_the_title() ?>
              </a>
            </h3>
            <a href="<?php echo get_permalink() ?>">
              <?php echo get_the_excerpt() ?>
            </a>
          </div>
        </article>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
  <!-- KONIEC KATEGORIA 3 -->

  <!-- KATEGORIA 4 -->
  <?php $category_field = get_field('kategorie_pod_sekcja_glowna')['kategoria_i_wyswietlanie_postow_4'] ?>
  <?php $post_list = get_posts_from_tag($category_field['kategoria']->term_id, $category_field['kolejnosc_postow'], 3); ?>
  <?php if ($post_list): ?>
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col">
        <?php var_dump($category_field['kategoria']) ?>
          <a class="section-title" href="<?php echo get_permalink($category_field['kategoria']->term_id) ?>">
            <?php echo $category_field['kategoria']->name ?>
          </a>
        </div>
      </div>
      <div class="featured-row">
        <div class="row has-3 has-scroll">
          <?php foreach($post_list as $post): ?>
          <article id="post-<?php echo get_the_ID() ?>" class="article-block article-block--large">
            <a class="article-block__header" href="<?php echo get_permalink() ?>">
              <picture class="article-block__image-wrapper image">
                <?php echo get_the_post_thumbnail() ?>
              </picture>
            </a>
            <div class="article-block__content">
              <p class="article-block__categories">
                <?php foreach(get_the_category() as $cat): ?>
                <a class="article-block__category" href="<?php echo get_permalink($cat->term_id) ?>">
                  <?php echo $cat->name ?>
                </a>
                <?php endforeach ?>
              </p>
              <h3 class="article-block__title">
                <a href="<?php echo get_permalink() ?>">
                  <?php echo get_the_title() ?>
                </a>
              </h3>
              <a href="<?php echo get_permalink() ?>">
                <?php echo get_the_excerpt() ?>
              </a>
            </div>
          </article>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <!-- KONIEC KATEGORIA 4 -->

  <!-- KATEGORIA 5 -->
  <?php $category_field = get_field('kategorie_pod_sekcja_glowna')['kategoria_i_wyswietlanie_postow_5'] ?>
  <?php $post_list = get_posts_from_tag($category_field['kategoria']->term_id, $category_field['kolejnosc_postow'], 3); ?>
  <?php if ($post_list): ?>
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col">
          <a class="section-title" href="<?php echo get_permalink($category_field['kategoria']->term_id) ?>">
            <?php echo $category_field['kategoria']->name ?>
          </a>
        </div>
      </div>
      <div class="row has-3 has-scroll">
        <?php foreach($post_list as $post): ?>
        <article id="post-<?php echo get_the_ID() ?>" class="article-block article-block--large">
          <a class="article-block__header" href="<?php echo get_permalink() ?>">
            <picture class="article-block__image-wrapper image">
              <?php echo get_the_post_thumbnail() ?>
            </picture>
          </a>
          <div class="article-block__content">
            <p class="article-block__categories">
              <?php foreach(get_the_category() as $cat): ?>
              <a class="article-block__category" href="<?php echo get_permalink($cat->term_id) ?>">
                <?php echo $cat->name ?>
              </a>
              <?php endforeach ?>
            </p>
            <h3 class="article-block__title">
              <a href="<?php echo get_permalink() ?>">
                <?php echo get_the_title() ?>
              </a>
            </h3>
            <a href="<?php echo get_permalink() ?>">
              <?php echo get_the_excerpt() ?>
            </a>
          </div>
        </article>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <!-- KONIEC KATEGORIA 5 -->
</main>

<?php get_footer();