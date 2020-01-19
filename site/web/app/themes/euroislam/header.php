<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo is_category() || is_tag() ? get_category($cat)->name : get_the_title() ?></title>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Raleway:500,700|Spectral:500,700&display=swap&subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/css/euroislam.css">
  <script src="<?php echo get_template_directory_uri() ?>/dist/js/euroislam.js" defer></script>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="site" class="site">
    <div id="overlay" class="overlay"></div>
    <?php get_template_part('includes/header-nav', 'Header Nav') ?>