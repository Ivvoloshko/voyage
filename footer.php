<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Voyage
 */
?>

<footer class="footer-block contant-box">
	<div class='footer-content'>	
		<div class="logo">			
			<div class="logo-img">
				<?php the_custom_logo( $blog_id ); ?>					
			</div>
			<div class="logo-title">
				<p>EmanGeoTours<br><span>Cyprus tours</span></p>
			</div>	
		</div><!--.logo -->	
		<div  class="banner-block__description">
			<div class="social-block">
				<ul class="social-block__item">
					<li class="social-block__list"><a href="#" class="social-block__link"><i class="fab fa-viber" aria-hidden="true"></i></a></li>
					<li class="social-block__list"><a href="#" class="social-block__link"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
					<li class="social-block__list"><a href="#" class="social-block__link"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
					<li class="social-block__list"><a href="#" class="social-block__link"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
				</ul>	
			</div>
			<div class="">
				<h5 class="footer-h">Обратная связь</h5>
				<li>+357 99 322 162</li>
				<li>+357 96 171 157 </li>
				<li>emangeotour1@gmail.com</li>
				<li>Cyprus,  Protaras,</li>
				<li>Street Cavo Greko 547</li>				
			</div>						
		</div>
		<nav class="footer-navi">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'voyage' ); ?></button> -->
			<h5 class="footer-h">Страницы</h5>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'footer-menu',
				'container' => false,
				'menu_class' => 'nav navbar-nav ',
			) );
			?>
		</nav>	
	</div>
	<div class="copyright">
		<p>&copy;EmanGeoTours - Cyprus excursions <?php echo date('Y')?> | Все права защищены</p>
	</div>

</footer>	

<?php wp_footer(); ?>

</body>
</html>
