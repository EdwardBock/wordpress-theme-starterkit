<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title><?php wp_title('|', true, 'right'); ?></title>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php

get_template_part( 'template-parts/menu', 'main' );

