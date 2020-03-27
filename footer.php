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
	<div class="waves">
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
			<g class="wave-parallax1"><use xlink:href="#gentle-wave" x="50" y="3" fill="#5e9cd1"/></g><!--#BFE2FF-->
			<g class="wave-parallax2"><use xlink:href="#gentle-wave" x="50" y="0" fill="#337AB7"/></g><!--#5e9cd1-->
			<g class="wave-parallax3"><use xlink:href="#gentle-wave" x="50" y="9" fill="#005F9D"/></g><!--#73bbf5-->
			<g class="wave-parallax4"><use xlink:href="#gentle-wave" x="50" y="6" fill="#003F7A"/></g><!--#337AB7-->
		</svg>	
		<div class="dark-block footer-box ">
			<div class="footer-content  container-box">
				<div class="logo-box">
					<div class="logo">			
						<div class="logo-img">
							<?php the_custom_logo(); ?>					
						</div>
						<div class="logo-title">
							<p>EmanGeoTours<br><span>Cyprus excursions</span></p>
						</div>	
					</div>		
					<div class="time-box">
						<h5 class="footer-h">Время работы</h5>
						<li>9:00-18:00</li>		
					</div>		
				</div>				
				<div class="contact-box">
					<h5 class="footer-h">Обратная связь</h5>
					<li>+357 99 322 162</li>
					<li>+357 96 171 157 </li>
					<li>emangeotour1@gmail.com</li>
					<li>Cyprus,  Protaras,</li>
					<li>Street Cavo Greko 547</li>				
				</div>						
				<nav class="main-navigation">
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'voyage' ); ?></button> -->
					<h5 class="footer-h">Страницы</h5>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu',
						'container' => false,
						'menu_class' => 'nav navbar-nav footer-navi',
					) );
					?>
				</nav>	
				<div class="footer-pay">
					<h5 class="footer-h">Способы оплаты</h5>
					<ul class="social-box pay-box">						
						<li class="social-list"><i class="fa fa-cc-paypal fa-2x" aria-hidden="true"></i></li>
						<li class="social-list"><i class="fa fa-cc-mastercard fa-2x" aria-hidden="true"></i></li>
						<li class="social-list"><i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i></li>						
					</ul>
					<h5 class="footer-h">Присоединяйтесь к нам:</h5>
					<ul class="social-box">
						<li class="social-list"><a href="#" class="social-link"><i class="fab fa-viber" aria-hidden="true"></i></a></li>
						<li class="social-list"><a href="#" class="social-link"><i class="fab fa-telegram-plane" aria-hidden="true"></i></a></li>
						<li class="social-list"><a href="#" class="social-link"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
						<li class="social-list"><a href="#" class="social-link"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
					</ul>	
				</div>	
			</div>	
			<div class="copyright">
				<p>&copy; EmanGeoTours - Cyprus excursions <?php echo date('Y')?> | Все права защищены </p>
			</div>	
		</div>	
	</div>	
</footer>	

<?php wp_footer(); ?>

</body>
</html>
