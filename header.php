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
	<header class="header">
		<div class="dark-block">
			<div class="container-box">			
				<div class="pay-social">					
					<div class="social-box">						
						<ul>
							<li class="phone"><i class="fa fa-phone" aria-hidden="true"></i>+357 99 322 162</li>							
						</ul>							
					</div>
					<!--============-->
					<!--	SOCIAL	-->
					<!--============-->						
					<ul class="social-box social-mobile">			
						<li class="social-list"><a href="#" class="social-link"><i class="fab fa-viber" aria-hidden="true"></i></a></li>
						<li class="social-list"><a href="#" class="social-link"><i class="fab fa-telegram-plane" aria-hidden="true"></i></a></li>
						<li class="social-list"><a href="#" class="social-link"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
						<li class="social-list"><a href="#" class="social-link"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
					<!--============-->
					<!--	PAY		-->
					<!--============-->		
						<li class="social-list-btn">
							<a class="pay-btn-link" target="_blank" href="https://api.fondy.eu/s/sJf5sdUE4mFyEh">						
								Оплатить услугу						
							</a>
						</li>
					</ul>										
				</div>
			</div>				
		</div>	
		<svg class="wave-divider dark-bg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none">
			<g class="wave-parallax1"><use xlink:href="#gentle-wave" x="50" y="3" fill="#5e9cd1"/></g>
			<g class="wave-parallax2"><use xlink:href="#gentle-wave" x="50" y="0" fill="#73bbf5"/></g>
			<g class="wave-parallax3"><use xlink:href="#gentle-wave" x="50" y="9" fill="#BFE2FF"/></g>
			<g class="wave-parallax4"><use xlink:href="#gentle-wave" x="50" y="6" fill="#FFFFFF"/></g>
		</svg>
		<div class="container-box"> 
			<div class="header-box">
				<!--============-->
				<!--	LOGO	-->
				<!--============-->			
				<div class="logo">			
					<div class="logo-img">
						<?php the_custom_logo(); ?>					
					</div>
					<div class="logo-title">
						<p>EmanGeoTours<br><span>Cyprus excursions</span></p>
					</div>	
				</div>
				<!--============-->
				<!--	MENU	-->
				<!--============-->	
				<div class="menu">	
					 <!-- <div class="menu-desktop">
						<?php
								wp_nav_menu( array(
								'theme_location' => 'header-menu',
								'container' => false,
								'menu_class' => 'menu nav navbar-nav',
							) );
							?>
				
					</div>  -->
							
					
					<button id="hamburger-menu" data-toggle="ham-navigation" class="hamburger-menu-button">
						<span class="hamburger-menu-button-open">Menu</span>
					</button> 
					<nav id="ham-navigation" class="ham-menu">
						<div class="menu">
							<?php
								wp_nav_menu( array(
								'theme_location' => 'header-menu',
								'container' => false,
								'menu_class' => 'menu nav navbar-nav header-nav',
							) );
							?>
						</div>
					</nav>
								
						
				</div>
			</div>			
		</div>
	</header>

	
	
	

	