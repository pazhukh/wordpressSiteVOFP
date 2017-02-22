<?php
/*
Template Name: Life-events
*/
?>
<?php get_header(); ?>
<div class="container">
		<?php get_sidebar(); ?>
		<div class="main_content h1_lifeEvents">
			<h1 class="color_red h1_lifeEvents"><?php wp_title(false); ?></h1>
			<p><?php echo get_post_meta( $post->ID, 'tekst_on_top', true); ?></p>
			<section class="blue_div">
				<ul>
					<?php
					$catID = 14;
					if ($catID) {
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						query_posts("cat=$catID&paged=$paged");
					} ?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
				</ul>
			</section>
		</div>
	</div>
<?php get_footer(); ?>