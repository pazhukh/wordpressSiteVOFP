<?php
/*
Template Name:  Contact Page
*/
?>
<?php get_header(); ?>
<main>
	<div class="container">
		<?php get_sidebar(); ?>
		<div class="main_content h1_contacts">

			<?php
			if ( have_posts() ){
				while ( have_posts() ){ the_post();?>
				<h1 class="color_red"><?php wp_title(false); ?></h1>
				<?php the_content();
			}
		} else {				
		} ?>



		<div id="phone">
			<?php $postid = get_the_ID(); ?>
			<img src="<?php bloginfo('template_url'); ?>/image/phone.png" alt="phone">
			<p><strong><?php echo get_post_meta( $postid, 'number', true); ?></strong></p>
		</div>
		<div id="mail">
			<img src="<?php bloginfo('template_url'); ?>/image/mail_latter.png" alt="mail">
		<p><strong><?php echo get_post_meta( $postid, 'e-mail', true); ?></strong></p>
		</div>
		<section class="textarea_contact">
		<p class="textarea_p">Uw vraag of opmerking</p>
		<textarea id='fitrst_text_area'></textarea>
		<p class="textarea_p">Uw naam</p>
		<textarea id='middle_text_area'></textarea>
		<p class="textarea_p">E-mailadres</p>
		<textarea id='last_text_area'></textarea>
		<button id="button_versturen">versturen</button>
		</section>
	</div>
</div>
<?php get_footer(); ?>


