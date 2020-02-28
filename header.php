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


	<header class="site-header">
	
		<div class="container header-block">
			<div class="logo">			
				<div class="logo-img">
					<?php the_custom_logo( $blog_id ); ?>					
				</div>
				<div class="logo-title">
					<p>EmanGeoTours<br><span>Cyprus tours</span></p>
				</div>	
			</div>	
			<div>
			<nav id="site-navigation" class="main-navigation">
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
		</div>	

		<section class="intro  container">	
			<div class="banner-block">
				<div>
					<h1 class="banner-block__title"><?php bloginfo( 'name' ); ?></h1>
				</div>			
				<div class="banner-block__overlay">						
					<div  class="banner-block__description">
						<div class="social-block">
							<ul class="social-block__item">
								<li class="social-block__list"><a href="#" class="social-block__link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social-block__list"><a href="#" class="social-block__link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>	
						</div>
						<div>
							<h2 class="banner-block__subtitle"><?php bloginfo( 'description' ); ?></h2>
							<p class="banner-block__text">
									Окунись в культуру и историю калоритного Кипра, 
									в сопровождении опытного гида.
							</p>
						</div>						
					</div>											
				</div>				
				<div class="btn">
					<a class="btn__link" href="#">Выбрать экскурсию</a>
				</div>			
				</div>											
		</section>

	</header>