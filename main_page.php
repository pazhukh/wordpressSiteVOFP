<?php
/*
Template Name: main_page
*/
?>	
<?php get_header(); ?>
<div class='container'>
		<div id='main_up'><h1 class="home color_dk_blue"><?php echo get_post_meta( $post->ID, 'main_title', true); ?></h1>
		</div>
	</div>

	<?php
	if ( have_posts() ){
		while ( have_posts() ){ the_post();?>
		<div class='main_photo'><?php the_post_thumbnail('full'); ?></div>
		<div class='container'>
			
			<div id='main_middle'><h2 class="color_red"><?php echo get_post_meta( $post->ID, 'title', true); ?></h2>
				<?php the_content(); ?>
			</div>
		</div>
	<?php }
} else {				
	} ?>
<?php get_footer(); ?>
