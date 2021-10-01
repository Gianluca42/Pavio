<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package venturelli
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel='stylesheet' type='text/css' href='<?php bloginfo('template_url')?>/assets/css/owl.carousel.min.css' media='all'>
	<link rel='stylesheet' type='text/css' href='<?php bloginfo('template_url')?>/assets/css/owl.theme.default.min.css' media='all'>

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/edc8pbw.css">

	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/main.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="color:<?php the_field('fonte') ?>">
<?php wp_body_open(); ?>

<header class="<?php if((!is_page('Gestos Barreiras') && !is_page('Home')) && screen.width > 770 ){?> open <?php } ?>" style="background-color:<?php the_field('cor') ?>">
	<div class="wrapper">

			<a href="<?php bloginfo('siteurl')?>"><h1>Laboratório de Manuseio Coreográfico</h1></a>

		<button class="bt-menu"><hr><hr><hr></button>
		<div class="menu" style="background-color:<?php the_field('cor') ?>">
			<nav class="menu" style="background-color:<?php the_field('cor') ?>">
				<ul>
					<li><a class="<?php if(is_page('Gestos Barreiras')){?> ativo <?php } ?>" href="<?php bloginfo('siteurl')?>/gestos-barreiras">Gestos barreiras</a></li>
					<li><a class="<?php if(is_single('Artístico-pedagógico')){?> ativo <?php } ?>" href="<?php bloginfo('siteurl')?>/2021/05/03/artistico-pedagogico">Artístico-pedagógico</a></li>
					<li><a class="<?php if(is_single('Agenda')){?> ativo <?php } ?>" href="<?php bloginfo('siteurl')?>/2021/07/15/agenda/">Agenda</a></li>
					<li><a class="<?php if(is_single('Sobre')){?> ativo <?php } ?> " href="<?php bloginfo('siteurl')?>/2021/05/03/sobre">Sobre</a></li>
					<li><a class="<?php if(is_page('Contato')){?> ativo <?php } ?> " href="<?php bloginfo('siteurl')?>/contato">Contato</a></li>
				</ul>
			</nav>

			<p>© 2021
				Site criado e desenvolvido por <a href="http://estudiopavio.com/">Estúdio Pavio</a></p>
		</div>

	</div>
</header>

<main style="background-color:<?php the_field('cor') ?>">
