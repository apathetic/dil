<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <title>Dil Hildebrand – <?php wp_title(''); ?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="shortcut icon" href="<?= get_bloginfo('template_url') ?>/favicon.png">

  <?php wp_head(); ?>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="<?= get_bloginfo('template_url') ?>/js/awesome.js"></script>
</head>

<body>
  <header>
    <h1>
      <a href="<?= home_url(); ?>">Dil <span>Hildebrand</span></a>
    </h1>
  </header>

