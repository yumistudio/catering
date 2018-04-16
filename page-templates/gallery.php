<?php
/**
 * Template Name: Strona Galerii
 *
 * @package WordPress
 * @since vilicon 1.0
 */

get_header();

?>

<section id="gallery-main" class="bg-subpage section-pd-top section-pd-bottom">
	<div class="container text-center">
		<h1>
			<span class="claim">Jak to wygląda?</span>
			Galeria
		</h1>
	</div>
	<div class="container text-center cf no-gutters">
		<div class="col-md-12">
			<div class="bow bow-fluid bow-space">
				<span class="icon icon-bow"></span>
			</div>
		</div>
	</div>
	<?php $query = new WP_Query( array(
        'category_name' => 'galeria',
        'posts_per_page' => 20,
    	)
    );
	?>
	<div class="container cf gallery-main">
		<?php while ($query->have_posts()) : $query->the_post(); ?>
		<div class="col-md-4 gallery-main__item">
			<div class="image" style="background-image: url('<?php the_post_thumbnail_url(); ?>">
			</div>
			<div class="text">
				<h3><?php the_field('gallery_date'); ?></h3>
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="overlay">
				<a href="<?php echo get_permalink(get_the_ID()); ?>" class="btn btn-secondary-outline btn-sm">Zobacz zdjęcia</a>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
</section>
<?php get_footer(); ?>