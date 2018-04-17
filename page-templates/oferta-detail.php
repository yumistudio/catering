<?php
/**
 * Template Name: Strona Oferty Detal
 *
 * @package WordPress
 * @since vilicon 1.0
 */

get_header();

while ( have_posts() ) : the_post(); ?>

<section class="bg-subpage section-pd-top">
	<div class="container">
		<div class="col-md-12 text-center">
			<h1>
				<span class="claim"><?php the_field('claim'); ?></span>
				<?php the_title(); ?>
			</h1>
		</div>
	</div>
	<div class="container text-center cf no-gutters">
		<div class="col-md-12">
			<div class="bow bow-fluid bow-space">
				<span class="icon icon-bow"></span>
			</div>
		</div>
	</div>
	
	<div class="container cf section-pd-bottom">
		<div class="col-md-offset-1 col-md-10">
			<div class="col-md-6">
				<h2>
					<span class="claim"><?php the_field('claim_section_1'); ?></span>
					<?php the_field('title_section_1'); ?>
				</h2>
				<?php the_content(); ?>
			</div>
			<div class="col-md-6">
				<img class="img-fluid" src="<?php bloginfo( 'template_url' ); ?>/assets/images/about-us-1.png" alt=""/>
			</div>
		</div>
	</div>
<?php if( have_rows('variants') ): ?>
	<div class="container cf section-pd-top no-gutters">
		<div class="col-md-12 no-gutters">
			<?php while ( have_rows('variants') ) : the_row(); ?>
			<div class="col-md-4">
				<div class="image-box">
					<h2><?php the_sub_field('name'); ?></h2>
					<p><?php the_sub_field('short_description'); ?></p>
					<a href="<?php the_sub_field('pdf_file'); ?>" target="_blank" class="btn btn-secondary-outline btn-sm">Sprawdź menu</a>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php endif; ?>
	
	<div class="container cf section-pd-top">
		<div class="col-md-offset-1 col-md-10">
			<div class="container cf col-pd-bottom">
				<div class="col-md-offset-2 col-md-8 text-center no-gutters">
					<?php the_field('secondary_text'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<? endwhile; ?>

<?php 
	get_template_part('template-parts/parts/offer-features');
?>
<?php 
	get_template_part('template-parts/parts/order');
?>
<?php 
	get_template_part('template-parts/parts/offer-slider');
?>

<?php get_footer(); ?>