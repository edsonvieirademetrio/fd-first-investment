<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Meu_Primeiro_Investimento
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header bg-white pt-2 pb-3">
		<div class="container">
			<div class="row align-center m-0">
				<div class="col-12 col-lg-4 text-center text-lg-left pt-2">
					<a href="/">
						<img src="<?=get_template_directory_uri()?>/assets/img/primeiro-investimento-logo.png" alt=""
						style="max-width: 200px;">
					</a>
				</div>
				<div class="col-12 col-lg-8">
					<!-- Navbar -->
					<nav class="navbar navbar-expand-lg navbar-light shadow-none">
						<div class="container-fluid">
						<button
							class="navbar-toggler"
							type="button"
							data-toggle="collapse"
							data-target="#navbarExample01"
							aria-controls="navbarExample01"
							aria-expanded="false"
							aria-label="Toggle navigation"
						>
							<i class="fas fa-bars"></i>
						</button>
						<? get_template_part('template-parts/menu-principal') ?>
						</div>
					</nav>
					<!-- Navbar -->
				
				</div>
			</div>
		</div>
	</header>
