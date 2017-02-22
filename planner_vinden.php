<?php
/*
Template Name: planner_vinden
*/
?>
<?php get_header(); ?>
<?php $post_id = get_the_ID(); ?>
<div class="container">
	<aside>
		<p>Planner vinden</p>
		<img src="<?php bloginfo('template_url'); ?>/image/photo_angelika.png" alt="angelika" id='photo_angelika'>
		<div id="angelika">Angelika E.M. Arntz</div>
	</aside>
	<div class="main_content">
		<h1 class="color_red h1_planer_vinden">Drs. Angelika E.M. Arntz MFP FFP</h1>
		<div id='planner_main_content_middle_left'>
			<ul class="person_info">
				<li><?php echo get_post_meta( $post->ID, 'posada', true); ?></li>
				<li><?php echo get_post_meta( $post->ID, 'street', true); ?></li>
				<li><?php echo get_post_meta( $post->ID, 'index_adress', true); ?></li>
				<li><?php echo get_post_meta( $post->ID, 'provincia', true); ?></li>
				<li><?php echo get_post_meta( $post->ID, 'telephone', true); ?></li>				
				<li><a href='http://www.arntzadvies.nl/'><?php echo get_post_meta( $post->ID, 'sait', true); ?></a></li>
				<li><?php echo get_post_meta( $post->ID, 'e-mail', true); ?></li>
			</ul>	
		</div>
		<div id='planner_main_content_middle_right'>
			<h5>Uurtarief</h5>
			<p><?php echo get_post_meta( $post->ID, 'uurtarief', true); ?></p>
			<h5>Vaste prijsafspraak</h5>
			<p><?php echo get_post_meta( $post->ID, 'vaste_prijsafspraak', true); ?></p>
		</div>
		<section class="planner_winden_main_text">
			<p><?php echo get_post_meta( $post->ID, 'main_text', true); ?></p>
		</section>
		<section class="div_blue_sq">
			<h1 class="color_red"><?php echo get_post_meta( $post->ID, 'lower_title', true); ?></h1>
			<div id="blue_squers">
				<ul>

					<?php
					$catID = 16;
					if ($catID) {
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						query_posts("cat=$catID&paged=$paged");
					} ?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<li><a href="<?php the_permalink()?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
			</ul>
		</div>
		<p class="lasted"><a href='#bottom'><?php echo get_post_meta( $post_id, 'link_overzicht_alle_planners', true); ?></a></p>
	</section>
</div>
</div>
<?php get_footer(); ?>