<?php get_header(); ?>

<!----------------------- blog ---------------------->

	<?php require_once('sections/banner.php'); ?>

			<?php if(have_posts()) : ?>
			     <?php while(have_posts()) : the_post(); ?>
			     	<div class="container">
			          <div class="post"> 
			               <div class="entry">
			                    <?php
			                    $myposts = get_posts(); 
				               foreach($myposts as $post) :
			                         //Escreve o Título do Post ?>
									
				                         <h2 class="lato-light title-blog fonte-azul "><?php the_title();?></h2>
				                         <?php
				                         echo "<br/>";
				                         ?>
										<div class="post-img lato-light">
											<div class="img-do-post">
				                         		<img src="<?php bloginfo('template_url') ?>/img/post_img.jpg" alt="">
				                         	</div>
										<?php
				                         //Conteúdo do Post
									echo '<div class="post-home">';
				         				 the_content();
				                         echo "<br/><br/>";

				                         echo '<a href="#" class="leia-mais lato-light">LEIA MAIS</a>';
			                         
			                        echo "</div>";
			                    endforeach;
			                     
			                    ?>
								
			                  	</div>
			              </div>
			          </div>
			        </div>
			     <?php endwhile; ?>
			<?php endif; ?>

<?php get_footer(); ?>