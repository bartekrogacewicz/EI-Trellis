<article class="article">
  <header class="article__header">
    <div class="article__taxonomy">
      <span class="article__date">
        <?php pll_e('Publikacja') ?>: <?php echo get_the_date('d.m.Y') ?>
      </span>
      <a class="article__category" href="<?php echo get_permalink($cat) ?>">
        <?php echo get_the_category()[0]->name ?>
      </a>
    </div>
    <h1 class="article__title">
      <?php echo get_the_title() ?>
    </h1>
    <div class="article__social-media">

    </div>
    <figure class="article__image">
      <?php echo get_the_post_thumbnail() ?>
      <figcaption class="article__image-caption">
        <?php echo get_the_post_thumbnail_caption() ?>
      </figcaption>
    </figure>
  </header>
  <div class="article__content">
    <?php the_content() ?>
  </div>
  <footer class="article__footer">

  </footer>
</article>