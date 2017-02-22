<?php get_header(); ?>
	<div class="container">
		<aside><p>In de media</p></aside>
		<div class="main_content" class="pp">

			<?php while ( have_posts() ) : the_post(); ?>
				
					
							<h1 class="color_red"><?php wp_title(false); ?></h1>
							<?php the_post_thumbnail( 'full'); ?>
							<p><?php the_content(); ?></p>

						
				
			<?php endwhile; ?>

		</div>
		</div>
<?php get_footer(); ?>