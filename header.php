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
	</svg>	 -->
	<div class="dark-block ">
		<!--============-->
		<!--	SOCIAL	-->
		<!--============-->	
		<div class="container-box">
			<ul class="social-box">					
				<li class="social-list"><a href="#" class="social-link"><i class="fab fa-viber" aria-hidden="true"></i></a></li>
				<li class="social-list"><a href="#" class="social-link"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
				<li class="social-list"><a href="#" class="social-link"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
				<li class="social-list"><a href="#" class="social-link"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
				<li class="social-list"><a href="#" class="social-link">+357 99 322 162</a></li>
			</ul>		
		</div>				
	</div>	
	<svg class="wave-divider dark-bg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none">
		<g class="wave-parallax1"><use xlink:href="#gentle-wave" x="50" y="3" fill="#5e9cd1"/></g>
		<g class="wave-parallax2"><use xlink:href="#gentle-wave" x="50" y="0" fill="#73bbf5"/></g>
		<g class="wave-parallax3"><use xlink:href="#gentle-wave" x="50" y="9" fill="#BFE2FF"/></g>
		<g class="wave-parallax4"><use xlink:href="#gentle-wave" x="50" y="6" fill="#FFFFFF"/></g>
	</svg>
	
	<div class="container-box header-box">
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

</header>								
	
	



	
	
	

	