<?php
/*
function print_filters_for( $hook = '' ) {
    global $wp_filter;
    if( empty( $hook ) || !isset( $wp_filter[$hook] ) )
        return;

    print '<pre>';
    print_r( $wp_filter[$hook] );
    print '</pre>';
}
print_filters_for( 'the_content' );
*/



global $post;
$qPost = get_queried_object();

$grid = array(
	0 => 'grid-item--height-reg',
	1 => 'grid-item--height-small',
	2 => 'grid-item--height-reg',
	3 => 'grid-item--height-small',
	4 => 'grid-item--height-small',
	5 => 'grid-item--height-reg',
	6 => 'grid-item--height-small',
	7 => 'grid-item--height-reg',
	8 => 'grid-item--height-small',
	9 => 'grid-item--height-reg',
	10 => 'grid-item--height-reg',
	11 => 'grid-item--height-small',
	12 => 'grid-item--height-small',
	13 => 'grid-item--height-reg',
	14 => 'grid-item--height-small',
	15 => 'grid-item--height-reg',
	16 => 'grid-item--height-small',
	17 => 'grid-item--height-reg',
	18 => 'grid-item--height-small',
	19 => 'grid-item--height-reg',
);

wp_enqueue_style( 'photoswipe-css', get_theme_file_uri( '/assets/js/photoswipe/dist/photoswipe.css' ) );
wp_enqueue_style( 'photoswipe-default-skin', get_theme_file_uri( '/assets/js/photoswipe/dist/default-skin/default-skin.css' ) );
wp_enqueue_script( 'photoswipe-main', get_theme_file_uri( '/assets/js/photoswipe/dist/photoswipe.min.js' ), array(), '', false );
wp_enqueue_script( 'photoswipe-ui', get_theme_file_uri( '/assets/js/photoswipe/dist/photoswipe-ui-default.min.js' ), array(), '', false );

get_header(); ?>

<section id="gallery" class="">

<?php
$args = array(
	'post_type' => 'post',
);
$query = new WP_Query($args);
$i = 0;
while ( $query->have_posts() ) : $query->the_post(); global $post; ?>
	
		<div id="gallery-grid" class="grid photoswipe-wrapper images" itemscope itemtype="http://schema.org/ImageGallery">
			<?php $i=0; foreach( get_field('image_gallery', $post->ID ) as $image) : //print_r($image); ?>
			
			<?php if ($i==3) : ?>
			<div class="grid-item">
				<div class="<?php echo $grid[$i]; $i++; ?>">
					<div class="frame-box gallery-title">
						<div>
							<a href="/galeria/foto/">
							<i class="icon-arrow-left"></i>
							 Wszystkie galerie</a>
							<h4><?php the_title(); ?></h4>
							<span><?php echo date_i18n( 'l, d M Y', date_timestamp_get($dt), false ); ?></span>
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
			<?php $i++; endforeach; ?>
		</div>
	</div>
<?php	endwhile; // End of the loop. ?>
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
<?php get_footer(); ?>