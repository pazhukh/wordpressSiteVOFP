<?php
/*
Template Name: werkwize
*/
?>
<?php get_header(); ?>
<div class="container">
<?php $post_id = get_the_ID(); ?>
	<aside><p>Werkwize</p><img src="<?php bloginfo('template_url'); ?>/image/aside.png" id="img_aside"></aside>
	<div class="main_content h1_werkwize">
		<h1 class="color_red"><?php wp_title(false); ?></h1>
		<p><?php echo get_post_meta( $post->ID, 'werkwize_text_in_the_top', true); ?></p>
		<section class="werkwize_container">

			<?php
			$catID = 15;
			if ($catID) {
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts("cat=$catID&paged=$paged");
			} ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="werkwize">
					<div class="werkwize_inside">
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
				</article>
				<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
		</section>
	<article class="werkwize_down">
		<h2 class="color_red"><?php echo get_post_meta( $post_id, 'title_down_text', true); ?></h2>
		<p><?php echo get_post_meta( $post_id, 'down_text', true); ?></p>
		</article>
	</div>
</div>
<?php get_footer(); ?>
