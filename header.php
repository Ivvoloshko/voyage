<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Voyage
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

<header>
	<div class="header-overlay container-box">		
		<div class="header-box">
			<!--============-->
			<!--	LOGO	-->
			<!--============-->			
			<div class="logo">			
				<div class="logo-img">
					<?php the_custom_logo( $blog_id ); ?>					
				</div>
				<div class="logo-title">
					<p>EmanGeoTours<br><span>Cyprus tours</span></p>
				</div>	
			</div>
			<!--============-->
			<!--	MENU	-->
			<!--============-->
			<nav class="main-navigation">
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'voyage' ); ?></button> -->
				<?php
				wp_nav_menu( array(
					'theme_location' => 'header-menu',
					'container' => false,
					'menu_class' => 'nav navbar-nav ',
				) );
				?>
			</nav>										
		</div>
		<!--============-->
		<!--	INTRO	-->
		<!--============-->
		<div class="intro">	
			<div class="intro-box">
				<!--============-->
				<!--	CONTENT	-->
				<!--============-->	
				<div  class="intro-description">
					<div class="intro-content">
						<h2 class="intro-subtitle-top">Кипр</h2>
						<h1 class="intro-title"><?php bloginfo( 'name' );?></h1>
						<h2 class="intro-subtitle-bottom"><?php bloginfo( 'description' ); ?></h2>
						<p class="intro-text">
								Окунись в культуру и историю колоритного Кипра, 
								в сопровождении опытного гида
						</p>
						<!--============-->
						<!--	BUTTONS	-->
						<!--============-->	
						<div class="btn">
							<a class="btn-link" href="#">Выбрать экскурсию</a>
						</div>
					</div>						
				</div>																		
				<div class="mouse">
					<a class="mouse-link" href="#"><img class="mouse-img" src="./wp-content/uploads/2020/03/mouse.png" alt="#"></a>
				</div>					
			</div>
		</div>											
	</div>
	<!-- <div class="light-block">Светлая секция</div> -->
	<!-- <svg class="wave-divider" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none">
    <defs>
        <path id="gentle-wave"
        d="M-160 44c30 0 
        58-18 88-18s
        58 18 88 18 
        58-18 88-18 
        58 18 88 18
        v44h-352z" />
    </defs>
    <g class="wave-parallax1"><use xlink:href="#gentle-wave" x="50" y="3" fill="#BFE2FF"/></g>
    <g class="wave-parallax2"><use xlink:href="#gentle-wave" x="50" y="0" fill="#5e9cd1"/></g>
    <g class="wave-parallax3"><use xlink:href="#gentle-wave" x="50" y="9" fill="#73bbf5"/></g>
    <g class="wave-parallax4"><use xlink:href="#gentle-wave" x="50" y="6" fill="#337AB7"/></g>
	</svg>
	<div class="dark-block">Темная секция</div>
	<svg class="wave-divider dark-bg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none">
    <g class="wave-parallax1"><use xlink:href="#gentle-wave" x="50" y="3" fill="#5e9cd1"/></g>
    <g class="wave-parallax2"><use xlink:href="#gentle-wave" x="50" y="0" fill="#73bbf5"/></g>
    <g class="wave-parallax3"><use xlink:href="#gentle-wave" x="50" y="9" fill="#BFE2FF"/></g>
    <g class="wave-parallax4"><use xlink:href="#gentle-wave" x="50" y="6" fill="#FFFFFF"/></g>
	</svg>
	<div class="light-block">Светлая секция</div> -->
</header>


	
	
	

	