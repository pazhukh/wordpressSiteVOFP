<?php
/*
Template Name: in_de_media (index.php)
*/
?>
<?php get_header(); ?>
	<div class="container">
		<?php get_sidebar(); ?>
		<?php $post_id = get_the_ID(); ?>
		<div class="main_content index_conteiner">
			<h1 class="color_red"><?php wp_title(false); ?></h1>
			<?php echo get_post_meta( $post_id, 'main_up_text', true ); ?>
			<?php echo get_post_meta( $post_id, 'text', true ); ?>

			<p>Met regelmaat worden de planners van de VOFP gevraagd hun mening of expertise te delen met een breder publiek. In het kader van onafhankelijkheid werken zij daar altijd graag aan mee. Zo beantwoorden de planners van de VOFP wekelijks een vraag van een Geldgidslezer, heeft Kapé Breukelaar een column in de Telegraaf en schrijven anderen artikelen in het Financieel Dagblad, de Fiscalert en andere kranten en tijdschriften.</p>
			<ul class="in_de_media_post">
				
				<?php
				$catID = 13;
				if ($catID) {
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					query_posts("cat=$catID&paged=$paged");
				} ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li>
					<div class="in_de_media"><a href="<?php the_permalink(); ?>">
						<div class="in_de_media_inside">
							<h4><?php the_title(); ?></h4>
							<?php the_excerpt(); ?>
							<p><span class="span_bolder">Media:</span> <?php echo get_post_meta( $post->ID, 'in_de_media_media', true); ?></p>
							<p><span class="span_bolder">Datum:</span> <?php echo get_the_date('d F, Y'); ?></p>
							<?php the_post_thumbnail('full'); ?>
						</div></a>
					</div>
				</li>
			<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
	</ul>

</div>
</div>
<?php get_footer(); ?>