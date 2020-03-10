<?php get_header() ?>

<div class="container-box">
		<!--============-->
		<!--	INTRO	-->
		<!--============-->
		<div class="intro  ">	
			
			<div class="intro-box ">
				<!--============-->
				<!--	CONTENT	-->
				<!--============-->	
				<div  class="intro-description ">	
					<div class="intro-bubble">
						<div class="intro-title-box">
							<h2 class="intro-subtitle-top">Кипр</h2>
							<h1 class="intro-title"><?php bloginfo( 'name' );?></h1>
							<h2 class="intro-subtitle-bottom"><?php bloginfo( 'description' ); ?></h2>
						</div>					
						<div class="intro-content">	
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
				</div>																		
			<div class="mouse">
				<a class="mouse-link" href="#"><img class="mouse-img" src="http://localhost/voyage/wp-content/uploads/2020/03/mouse.png" alt="#"></a>
			</div>				
			</div>
			

		</div>		



		<?php if(have_posts()):while(have_posts()):the_post();?>
		<?php the_content()?>
	<?php endwhile;?>
		<!--post navigation-->
	<?php else: ?>
		<!--no post found-->
	<?php endif;?>

</div>

<?php get_footer() ?>