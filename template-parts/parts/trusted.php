<section id="trust" class="padding-section">
	<div class="container text-center">
		<h1>
			<span class="claim"><?php the_field('t_section_subtitle'); ?></span>
			<?php the_field('t_section_title'); ?>
		</h1>
	</div>
	<div class="container text-center cf no-gutters">
		<div class="col-md-offset-3 col-md-6">
			<div class="bow bow-fluid">
				<span class="icon icon-bow"></span>
			</div>
		</div>
	</div>
	<div class="container text-center cf partners">
	<?php
	$query = new WP_Query( array('post_type' => 'reference', 'posts_per_page' => 8, ) );        
	while ($query->have_posts()) : $query->the_post(); ?>
		<div class="col-md-3">
			<div class="partner">
				<img src="<?php the_post_thumbnail_url(); ?>" />
			</div>
		</div>
	<?php endwhile; wp_reset_postdata(); ?>
	</div>
	<div class="container text-center cf ">
		<a href="/referencje/" class="btn btn-primary"><?php the_field('t_button_text'); ?></a>
	</div>
</section>