<?php

function get_newest_post_with_video() {
  $query = new WP_Query([
    'tag' => 'Wideo, Video'
  ], ['post_count' => 1]);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      return $query->the_post();
    }
  } else {
    $newQuery = new WP_Query([
      'meta_query' => [['key' => '_thumbnail_id']]
    ]);
    while ($newQuery->have_posts()) {
      return $newQuery->the_post();
    }
  }
}

function get_aside_categories() {
  $categories = [
    get_field('panel_boczny')['kategoria_1'],
    get_field('panel_boczny')['kategoria_2']
  ];

  return [
    get_category($categories[0]),
    get_category($categories[1])
  ];
}

function get_posts_from_category($id, $order = 'najnowsze', $count = 2) {
  $orderby;
  switch ($order) {
    case 'najnowsze':
      $orderby = 'date';
      break;
    case 'najpopularniejsze':
      $orderby = 'comment_count';
      break;
    case 'losowo':
      $orderby = 'rand';
      break;
    default:
      $orderby = 'date';
      break;
  }

  $posts = get_posts([
    'numberposts' => $count,
    'cat' => $id,
    'order' => 'DESC',
    'orderby' => $orderby
  ]);

  return $posts;
}

function get_posts_from_tag($id, $order = 'najnowsze', $count = 3) {
  $orderby;
  switch ($order) {
    case 'najnowsze':
      $orderby = 'date';
      break;
    case 'najpopularniejsze':
      $orderby = 'comment_count';
      break;
    case 'losowo':
      $orderby = 'rand';
      break;
    default:
      $orderby = 'date';
      break;
  }

  $posts = get_posts([
    'numberposts' => $count,
    'tag_id' => $id,
    'order' => 'DESC',
    'orderby' => $orderby
  ]);

  return $posts;
}

function get_post_author() {
  $author_id = get_the_author_meta('user_ID');
  $author_name = get_the_author_meta('display_name');
  $author_url = get_the_author_meta('user_url');
  $author_avatar = get_avatar_url($author_id);

  return [
    'name' => $author_name,
    'url' => $author_url,
    'avatar' => $author_avatar
  ];
}