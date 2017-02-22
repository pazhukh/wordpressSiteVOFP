<?php
/*
Template Name: over_de_vofp
*/
?>
<?php get_header(); ?>
<div class="container">
	<?php get_sidebar(); ?>
	<div class="main_content over_de_vofp">
		<?php if ( have_posts() ){
			while ( have_posts() ){ the_post();?>
			<h1 class="color_red"><?php wp_title(false); ?></h1>
			<?php the_content();
		}
	} else {				
	} ?>
	</div>
</div>
<div class="bg_three_photo">
	<div class="container">
		<div class="main_content_three_photo_div">
			<div id="three_photo_div">
				<h3>Ons bestuur</h3>
				<img src="<?php bloginfo('template_url'); ?>/image/first_photo1.png" alt="man" width="175px">
				<img src="<?php bloginfo('template_url'); ?>/image/first_photo1.png" alt="man" width="175px">
				<img src="<?php bloginfo('template_url'); ?>/image/first_photo2.png" alt="man" width="175px">
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="main_content_2_three_photo">
		<h3 class="color_red"><?php echo get_post_meta( $post->ID, 'down_title', true); ?></h3>
		<p><?php echo get_post_meta( $post->ID, 'down_text', true); ?></p>
		<a href='#'><span class="color_blue_over_de_vofp"><?php echo get_post_meta( $post->ID, 'link', true); ?></span></a>
	</div>
</div>
<?php get_footer(); ?>