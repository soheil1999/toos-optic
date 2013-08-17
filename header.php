<!doctype html>
<html lang="en">
<head>
    <style type="text/css">

    </style>
<link href="<?php bloginfo('template_url');?>/style.css" rel="stylesheet" type="text/css" />	<meta charset="UTF-8">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script.js"></script>

	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="logo"></div>
			<div class="blacks"></div>
	<nav class="menu">
        <?php
         wp_nav_menu(array(
    'sort_column' => 'menu_order',
    'menu' => '',
    'container_class' => 'menu',
    'container_id' => 'header',
    'theme_location'  => 'header'));
        ?>
    </nav>
</div>
