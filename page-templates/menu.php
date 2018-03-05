<?php
/**
 * Template Name: Strona Menu
 *
 * @package WordPress
 * @since vilicon 1.0
 */


get_header();
get_template_part( 'template-parts/page/content', 'header' );
global $post;
?>
<section id="menu-links" class="section-padding max-width">
<div class="container-fluid">
	<div class="col-xs-12 col-sm-6 coctails-card">
		<a class="btn frame-btn download" data-file-id="<?php the_field('coctails_card') ?>">
			<span class="span"></span>
			<i class="icon-cocktail"></i>
			Pobierz kartę koktajli
		</a>
	</div>
	<div class="col-xs-12 col-sm-6 tapas-card">
		<a class="btn frame-btn download" data-file-id="<?php the_field('tapas_card') ?>">
			<span class="span"></span>
			<i class="icon-sandwich"></i>
			Pobierz kartę Tapas
		</a>
	</div>
</div>
</section>
<section id="menu-carousel">
<div id="menu-slider" class="section-padding">
	
	<?php while ( have_posts() ) : the_post(); ?>
	
	<div id="people-swiper" class="swiper-container">
		<div class="swiper-wrapper">
			<?php
				$gallery = get_field('item_gallery');
				foreach ($gallery as $image) : ?>
				<div class="swiper-slide contnet-box">
					<img src="<?php echo $image['sizes']['yumi-slider-image']; ?>');" width="<?php echo $image['sizes']['yumi-slider-image-width']; ?>" height="<?php echo $image['sizes']['yumi-slider-image-height']; ?>"/>
	        	</div>
        	<?php endforeach; wp_reset_postdata(); ?>
        </div>

        <div class="swiper-button-next btn btn-nav"><i class="icon-navigate-right"></i></div>
	    <div class="swiper-button-prev btn btn-nav"><i class="icon-navigate-left"></i></div>
    </div>
	
	<?php endwhile; // End of the loop.?>
	
</div>
<script>
(function( $ ) {
	$(function() {

		var swiper = new Swiper('#people-swiper', {
			slidesPerView : 'auto',
			spaceBetween: 30,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	});
})( jQuery );
</script>
</section>
<?php get_footer(); ?>