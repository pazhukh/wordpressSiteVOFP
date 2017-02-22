<?php
/*
Template Name:  Contact Page
*/
?>
<?php get_header(); ?>
<div class="container">
	<?php get_sidebar(); ?>
	<div class="main_content h1_contacts">
		<h1 class="color_red"><?php wp_title(false); ?></h1>
		<p><?php echo get_post_meta( $post->ID, 'contact_main_text', true); ?></p>
		<div id="phone">
			<img src="<?php bloginfo('template_url'); ?>/image/phone.png" alt="phone">
			<p><strong><?php echo get_post_meta( $post->ID, 'number', true); ?></strong></p>
		</div>
		<div id="mail">
			<img src="<?php bloginfo('template_url'); ?>/image/mail_latter.png" alt="mail">
			<p><strong><?php echo get_post_meta( $post->ID, 'e-mail', true); ?></strong></p>
		</div>
		<div class="textarea_contact">

			<?php
			if ( have_posts() ){
				while ( have_posts() ){ the_post();
				the_content(); }
			} else {				
			} ?>

		</div>
	</div>
</div>
<?php get_footer(); ?>


