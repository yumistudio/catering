<?php
/**
 * Template Name: O nas
 *
 * @package WordPress
 * @since vilicon 1.0
 */

get_header();

?>

<section class="about-us">
	<div class="container text-center">
		<h1>
			<span class="claim"><?php the_field('claim') ?></span>
			<?php the_title(); ?>
		</h1>
	</div>
	<div class="container text-center cf no-gutters">
		<div class="col-md-12">
			<div class="bow bow-fluid bow-space">
				<span class="icon icon-bow"></span>
			</div>
		</div>
	</div>
	<div class="container cf">
		<div class="col-md-offset-1 col-md-10">
			<div class="container cf col-pd-bottom">
				<div class="col-md-5">
					<h2>
						<span class="claim"><?php the_field('claim_section_1'); ?></span>
						<?php the_field('title_section_1'); ?>
					</h2>
					<?php echo apply_filters('content', get_field('text_section_1')); ?>
				</div>
				<div class="col-md-offset-1 col-md-6">
					<img class="img-fluid" src="<?php the_field('image_section_1'); ?>" alt=""/>
				</div>
			</div>
		</div>
		<div class="col-md-offset-1 col-md-10">
			<div class="container cf col-pd-bottom">
				<div class="col-md-5">
					<img class="img-fluid" src="<?php the_field('image_section_2'); ?>" alt=""/>
				</div>
				<div class="col-md-offset-1 col-md-6">
					<h2>
						<span class="claim"><?php the_field('claim_section_2'); ?></span>
						<?php the_field('title_section_2'); ?>
					</h2>
					<?php echo apply_filters('content', get_field('text_section_2')); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
	get_template_part('template-parts/parts/our-team');
?>
<?php 
	get_template_part('template-parts/parts/offer-features');
?>
<?php 
	get_template_part('template-parts/parts/order');
?>

<?php get_footer(); ?>