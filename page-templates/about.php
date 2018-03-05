<?php
/**
 * Template Name: Strona Miejsce
 *
 * @package WordPress
 * @since vilicon 1.0
 */

$grid = array(
	0 => 'grid-item--height-reg',
	1 => 'grid-item--height-small',
	2 => 'grid-item--height-reg',
	3 => 'grid-item--height-reg',
	4 => 'grid-item--height-small',
	5 => 'grid-item--height-reg',
	6 => 'grid-item--height-small',
	7 => 'grid-item--height-small',
	8 => 'grid-item--height-small',
);

wp_enqueue_style( 'photoswipe-css', get_theme_file_uri( '/assets/js/photoswipe/dist/photoswipe.css' ) );
wp_enqueue_style( 'photoswipe-default-skin', get_theme_file_uri( '/assets/js/photoswipe/dist/default-skin/default-skin.css' ) );
wp_enqueue_script( 'photoswipe-main', get_theme_file_uri( '/assets/js/photoswipe/dist/photoswipe.min.js' ), array(), '', true );
wp_enqueue_script( 'photoswipe-ui', get_theme_file_uri( '/assets/js/photoswipe/dist/photoswipe-ui-default.min.js' ), array(), '', true );

get_header();
get_template_part( 'template-parts/page/content', 'header' );

?>
<section id="primary" class="section-padding max-width">
	
	<div id="primary" class="container-fluid">

		<div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			// Include the page content template.
			get_template_part( 'template-parts/page/content', 'page' );

		// End the loop.
		endwhile;
		?>
		</div>
	</div>
	<div  class="container-fluid">	
		<?php if ($scattered_elements = get_field('scattered_elements')) : ?>
		<div class="section-padding scattered-blocks">
			
			<div class="section-title frame-box">
				<div>
					<h2><?php the_field('scattered_section_title') ?></h2>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-offset-3 col-sm-9 scattered-rows">
			<?php $i = 0; foreach( $scattered_elements as $row ) : ?>
				<div class="scattered-row row">
					<div class="col-xs-12 col-sm-4 image-holder" style="background-image: url('<?php echo $row['url']; ?>')"></div>
					<div class="col-xs-12 col-sm-offset-4 <?php echo ($i % 2 ? 'col-sm-6' : 'col-sm-7'); ?> content">
						<h3><?php echo $row['title']; ?></h3>
						<p><?php echo $row['description']; ?></p>
					</div>
				</div>

			<?php $i++; endforeach; ?>
			</div>
		</div>
	<?php endif; ?>
	</div><!-- .content-area -->
</section>
<section id="about-gallery">
	<div id="gallery-grid" class="grid photoswipe-wrapper images">
		<?php
	
		$gallery = get_field('image_gallery');
		
		$i=0;
		foreach ( $gallery as $image ) : ?>

		<?php if ($i==1) : ?>
		<div class="grid-item">
			<div class="<?php echo $grid[$i]; $i++; ?>">
				<div class="frame-box">
					<div>
						<div class="section-header">
							<h3>Wnętrza</h3>
							<div class="intro">
								<?php the_field('intro'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="grid-item photoswipe-item">
			<a href="<?php echo $image['sizes']['yumi-full-hd']; ?>" data-size="1920x1080" class="<?php echo $grid[($i%20)]; ?>" style="background-image: url('<?php echo $image['sizes']['yumi-gallery-item']; ?>');">
				<div class="overlay"><i class="icon-search"></i></div>
			</a>
		</div>
		<?php $i++; endforeach; wp_reset_query(); // End of the loop. ?>
	</div>
<?php get_template_part( 'template-parts/page/content', 'photoswipe' ); ?>	
</section>
<script>
(function($) {
	
	var $grid = jQuery('#gallery-grid');
	$grid.isotope({
	  // options
	  itemSelector: '.grid-item',
	  layoutMode: 'masonry'
	});

	$('.frame-box a').click(function() {
		window.location.href = $(this).attr('href');
	});

})(jQuery);
</script>

<section id="about-people" class="section-padding">
	<div class="container-fluid max-width">
		<div class="section-title frame-box">
			<div>
				<h2><span>Poznaj nasz zespół</h2>
				<div class="section-intro"><?php the_field('artists-section-subtitle'); ?></div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-offset-3 col-sm-9">
			<div class="artists-slider">
		        <?php $gallery = get_field('our_people_gallery'); ?>
		                
		        <div id="people-swiper" class="swiper-container">
					<div class="swiper-wrapper">
						<?php foreach ($gallery as $image) : ?>
						<div class="swiper-slide content-box">
							<img src="<?php echo $image['sizes']['yumi-slider-image']; ?>');" width="<?php echo $image['sizes']['yumi-slider-image-width']; ?>" height="<?php echo $image['sizes']['yumi-slider-image-height']; ?>"/>
		            		<div class="gradient-cover"></div>
		            		<div class="content">
		            			<h4><?php echo $image['title']; ?></h4>
		            			<div class="category"><?php echo $image['caption'];?></div>
		            		</div>
		            	</div>
		            	<?php endforeach; wp_reset_postdata(); ?>
		            </div>
		        </div>

		        <div class="swiper-button-next btn btn-nav"><i class="icon-navigate-right"></i></div>
	    		<div class="swiper-button-prev btn btn-nav"><i class="icon-navigate-left"></i></div>
    		</div>
		</div>
	</div>

</section>
<!-- Initialize Swiper -->
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
<?php get_footer(); ?>