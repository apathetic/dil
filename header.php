<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title>Dil Hildebrand – <?php wp_title(''); ?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <meta property="og:title" content="<?php wp_title(''); ?>" />
  <meta property="og:description" content="Article Description (One or Two sentences)"/>
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://example.com/link/to/article" />
  <meta property="og:site_name" content="Dil Hildebrand" />
  <meta property="og:image" content="http://example.com/image/src.jpg" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="shortcut icon" href="<?= get_bloginfo('template_url') ?>/favicon.png">

  <?php wp_head(); ?>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="<?= get_bloginfo('template_url') ?>/js/awesome.js"></script>


	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>
<div id="container">
	<?php /* <header><h1><a href="<?= home_url(); ?>">Dil <span>Hildebrand</span></a></h1></header> */ ?>

	<?php get_sidebar() ?>
