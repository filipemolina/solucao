<?php get_header(); ?>

<!----------------------- blog ---------------------->

	<?php require_once('sections/banner.php'); ?>

			<?php if(have_posts()) : ?>
			     <?php while(have_posts()) : the_post(); ?>
			          <div class="post"> 
			               <div class="entry">
			                    <?php
			                    $myposts = get_posts(); 
				               foreach($myposts as $post) :
			                         //Escreve o Título do Post ?>

			                         <h2 class="lato-light title-blog fonte-azul "><?php the_title();?></h2>
			                         <?php
			                         echo "<br/>";

			                         //Conteúdo do Post
			                         the_content();
			                         echo "<br/><br/>";

			                    endforeach;
			                         
			                    ?>
			              </div>
			          </div>
			     <?php endwhile; ?>
			<?php endif; ?>

<?php get_footer(); ?>