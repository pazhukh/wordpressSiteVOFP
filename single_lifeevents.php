<?php
/*
Template Name Posts: lifeevent and planner_vinden posts
*/
?>
<?php get_header(); ?>
<div class="container">
	<aside><p>Life-event</p></aside>
	<div class="main_content">
		
		<?php while ( have_posts() ) : the_post(); ?>
			<h1 class="color_red"><?php wp_title(false); ?></h1>
			<p><?php echo get_post_meta( $post->ID, 'text_in_the_top', true); ?></p>
		</div>
	</div>
	<div class='main_photo_single_lifeevent'><?php the_post_thumbnail('full'); ?></div>
	<div class="container">
		<div class="main_content_down">
			<p><?php the_content(); ?></p>
			<p class="color_blue_over_de_vofp" id="lifeevent_single_link"><a href="http://l937207i.bget.ru/life-event/">Bekijk alle life events ►</a></p>
		<?php endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>