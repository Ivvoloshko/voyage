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

<section>
<div class="header-overlay">
	<header class="contant-box">	
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
</header>
		<!--============-->
		<!--	INTRO	-->
		<!--============-->
		<div class="intro">	
			<div class="intro-box header-bg">
				<div>
					<h1 class="intro-title headline"><?php bloginfo( 'name' );?></h1>
				</div>			
				<div>						
					<div  class="intro-description">
						<!--============-->
						<!--	SOCIAL	-->
						<!--============-->						
						<div>
							<ul class="social-box">
								<li class="social-list"><a href="#" class="social-link"><i class="fab fa-viber" aria-hidden="true"></i></a></li>
								<li class="social-list"><a href="#" class="social-link"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
								<li class="social-list"><a href="#" class="social-link"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social-list"><a href="#" class="social-link"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
							</ul>	
						</div>
						<!--============-->
						<!--	CONTENT	-->
						<!--============-->							
						<div class="intro-content">
							<h2 class="intro-subtitle"><?php bloginfo( 'description' ); ?></h2>
							<p class="intro-text">
									Окунись в культуру и историю колоритного Кипра, 
									в сопровождении опытного гида.
							</p>
						</div>						
					</div>
				</div>
				<!--============-->
				<!--	BUTTONS	-->
				<!--============-->				
				<div class="contant-box">
					<div class="btn">
						<a class="btn-link" href="#">Выбрать экскурсию</a>
					</div>
				</div>				
				<div class="mouse">
					<a class="mouse-link" href="#"><img class="mousemouse-img" src="../img/mouse.png" alt=""></a>
				</div>	
			</div>
		</div>											
	</div>
</section>

	
	
	

	