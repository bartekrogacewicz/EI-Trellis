	<footer class="site-footer">
    <div class="container">
      <section class="site-footer__top">
        <div class="row">
          <div class="col-12 col-lg-4">
            <?php $column = get_field('kolumna_1', pll_current_language() === 'pl' ? 2 : 10) ?>
            <a href="<?php echo $column['link'] ?>" class="site-footer__link">
              <h4 class="site-footer__link-title">
                <?php echo $column['tytul'] ?>
              </h4>
              <p>
                <?php echo $column['tresc'] ?>
              </p>
            </a>
          </div>
          <div class="col-12 col-lg-4">
            <?php $column = get_field('kolumna_2', pll_current_language() === 'pl' ? 2 : 10) ?>
            <a href="<?php echo $column['link'] ?>" class="site-footer__link">
              <h4 class="site-footer__link-title">
                <?php echo $column['tytul'] ?>
              </h4>
              <p>
                <?php echo $column['tresc'] ?>
              </p>
            </a>
          </div>
          <div class="col-12 col-lg-4">
            <?php $column = get_field('kolumna_3', pll_current_language() === 'pl' ? 2 : 10) ?>
            <a href="<?php echo $column['link'] ?>" class="site-footer__link">
              <h4 class="site-footer__link-title">
                <?php echo $column['tytul'] ?>
              </h4>
              <p>
                <?php echo $column['tresc'] ?>
              </p>
            </a>
          </div>
        </div>
      </section>
      <div class="row">
        <div class="col">
          <hr class="section-separator">
        </div>
      </div>
      <section class="site-footer__bottom">
        <div class="row">
          <div class="col-12 col-lg-3">
            <a href="<?php echo get_home_url() ?>" class="site-footer__logo">
              <img src="<?php echo get_template_directory_uri() ?>/dist/img/logo-euroislam-mono.png" alt="">
            </a>
          </div>
          <div class="col-12 col-lg-6">
            <?php get_template_part('includes/footer-nav', 'Footer Nav') ?>
          </div>
          <div class="col-12 col-lg-3">
            <ul class="site-footer__language-switcher">
              <?php pll_the_languages(['display_names_as' => 'slug']);?>
            </ul>
          </div>
        </div>
      </section>
    </div>
	</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
