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

<footer class="footer-block">
<div class="voyage-front-page ">

<svg class="wave-divider wave-divider-footer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none">
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
	<div class="dark-block ">
	<div class='footer-content container-box'>	
		<div class="logo">			
			<div class="logo-img">
				<?php the_custom_logo( $blog_id ); ?>					
			</div>
			<div class="logo-title">
				<p>EmanGeoTours<br><span>Cyprus tours</span></p>
			</div>	
		</div>
		<div  class="">
			<div>
				<ul class="social-box">
					<li class="social-list"><a href="#" class="social-link"><i class="fab fa-viber" aria-hidden="true"></i></a></li>
					<li class="social-list"><a href="#" class="social-link"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
					<li class="social-list"><a href="#" class="social-link"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
					<li class="social-list"><a href="#" class="social-link"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
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
	</div>	


</footer>	

<?php wp_footer(); ?>

</body>
</html>
