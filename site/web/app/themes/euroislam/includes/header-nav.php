<header class="site-header">
  <div class="container">
    <section class="site-header__top">
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="site-header__social-media">
            <a href="#" target="_blank" class="social-link" title="Facebook Link">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="social-link__path"
                  d="M21 0H3C1.3455 0 0 1.3455 0 3V21C0 22.6545 1.3455 24 3 24H12V15.75H9V12H12V9C12 6.5145 14.0145 4.5 16.5 4.5H19.5V8.25H18C17.172 8.25 16.5 8.172 16.5 9V12H20.25L18.75 15.75H16.5V24H21C22.6545 24 24 22.6545 24 21V3C24 1.3455 22.6545 0 21 0Z" />
              </svg>
            </a>
            <a href="#" target="_blank" class="social-link" title="Twitter Link">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="social-link__path"
                  d="M21.6 0H2.4C1.08 0 0 1.08 0 2.4V21.6C0 22.92 1.08 24 2.4 24H21.6C22.92 24 24 22.92 24 21.6V2.4C24 1.08 22.92 0 21.6 0ZM18.84 8.76C18.72 14.28 15.24 18.12 9.96 18.36C7.8 18.48 6.24 17.76 4.8 16.92C6.36 17.16 8.4 16.56 9.48 15.6C7.92 15.48 6.96 14.64 6.48 13.32C6.96 13.44 7.44 13.32 7.8 13.32C6.36 12.84 5.4 12 5.28 10.08C5.64 10.32 6.12 10.44 6.6 10.44C5.52 9.84 4.8 7.56 5.64 6.12C7.2 7.8 9.12 9.24 12.24 9.48C11.4 6.12 15.96 4.32 17.76 6.6C18.6 6.48 19.2 6.12 19.8 5.88C19.56 6.72 19.08 7.2 18.48 7.68C19.08 7.56 19.68 7.44 20.16 7.2C20.04 7.8 19.44 8.28 18.84 8.76Z" />
              </svg>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <a href="<?php echo get_home_url() ?>" class="site-header__logo">
            <img src="<?php echo get_template_directory_uri() ?>/dist/img/logo-euroislam.png" alt="">
          </a>
        </div>
        <div class="col-12 col-md-4">
          <form role="search" method="get" action="<?php echo get_home_url(); ?>" id="search" class="site-header__search search-form">
            <input id="search-input" type="text" class="search-form__input" name="s" value="<?php echo get_search_query(); ?>">
            <button type="submit" id="search-button" class="site-header__search social-link search-form__button">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="social-link__path"
                  d="M6.5 0C8.22391 0 9.87721 0.684819 11.0962 1.90381C12.3152 3.12279 13 4.77609 13 6.5C13 8.11 12.41 9.59 11.44 10.73L11.71 11H12.5L17.5 16L16 17.5L11 12.5V11.71L10.73 11.44C9.59 12.41 8.11 13 6.5 13C4.77609 13 3.12279 12.3152 1.90381 11.0962C0.684819 9.87721 0 8.22391 0 6.5C0 4.77609 0.684819 3.12279 1.90381 1.90381C3.12279 0.684819 4.77609 0 6.5 0ZM6.5 2C4 2 2 4 2 6.5C2 9 4 11 6.5 11C9 11 11 9 11 6.5C11 4 9 2 6.5 2Z"
                  fill="black" />
              </svg>
            </button>
          </form>
        </div>
      </div>
    </section>
    <?php if(get_field('pokazuj_tytul_w_naglowku') ||
          is_category() ||
          is_tag()): ?>
      <h2 class="site-header__title">
        <?php echo is_category() || is_tag() ? get_category($cat)->name : get_the_title() ?>
      </h2>
    <?php endif ?>
    <nav class="site-header__nav">
      <?php wp_nav_menu([
      'theme_location' => 'header-nav',
      'container' => false,
      'menu' => 'header-nav',
      'menu_class' => 'nav'
    ]); ?>
    </nav>
    <nav class="site-header__bottom">
      <span class="hot__item hot__item--title">
        <?php pll_e('Pod obserwacją') ?>:
      </span>
      <?php wp_nav_menu([
      'theme_location' => 'header-bottom-menu',
      'container' => false,
      'menu' => 'header-bottom-menu',
      'menu_class' => 'hot'
    ]); ?>
    </nav>
  </div>
</header>