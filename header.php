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
<!-- <header class="header">
        <div class="wrapper">
            <div class="row">
                <div class="logo">
                    <img src="https://png.pngtree.com/element_origin_min_pic/16/09/11/1057d4c846189bf.jpg" alt="Logo" class="logo__pic">
                </div>
                <nav class="menu">
                    <a href="#" class="menu__item">Главная</a>
                    <a href="#" class="menu__item">О нас</a>
                    <a href="#" class="menu__item">Услуги</a>
                    <a href="#" class="menu__item">Каталог</a>
                    <a href="#" class="menu__item">Контакты</a>
                </nav>
                <div class="callback">
                    <button class="callback__btn">Заказать звонок</button>
                </div>
            </div>
        </div>
  
</header> -->

<header class="header">
		<div class="dark-block wrapper">
			<!--============-->
			<!--	SOCIAL	-->
			<!--============-->	
			<div class="container-box">
					<ul class="social-box">			
						<li class="social-list"><a href="#" class="social-link"><i class="fab fa-viber" aria-hidden="true"></i></a></li>
						<li class="social-list"><a href="#" class="social-link"><i class="fab fa-telegram-plane" aria-hidden="true"></i></a></li>
						<li class="social-list"><a href="#" class="social-link"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
						<li class="social-list"><a href="#" class="social-link"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
						<li class="social-list">+357 99 322 162</li>
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
						<?php the_custom_logo(); ?>					
					</div>
					<div class="logo-title">
						<p>EmanGeoTours<br><span>Cyprus excursions</span></p>
					</div>	
				</div>
				<!--============-->
				<!--	MENU	-->
				<!--============-->
				<!-- <nav class="main-navigation"> -->
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
	
	



	
	
	

	