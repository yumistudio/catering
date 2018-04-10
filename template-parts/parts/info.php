<section class="section-info cf">
	<?php $query = new WP_Query( array(
		'post_type' => 'page',
	    'posts_per_page' => 6,
	    'post_parent' => 97)
	);
	        
	while ($query->have_posts()) : $query->the_post(); ?>
	<div class="col-md-4 section-info__box">
		<div class="section-info__box__holder" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
			<div class="wrapper">
				<div class="title">
					<h3><?php the_title(); ?></h3>
					<div class="hidden">
						<?php the_field('short_description'); ?>
						<a class="btn btn-secondary-outline" href="#">Zobacz warianty</a>
					</div>
					<div class="border-bottom">
						<span class="icon icon-bow"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; wp_reset_postdata(); ?>
</section>