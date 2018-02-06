<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

$objects = get_posts( array(
    'post_parent' => 121,
    'post_type'    => 'page',
    'posts_per_page' => -1,
) );

$args = array(
    'post_type'			=> 'tribe_events',
    'posts_per_page'	=> 4,
    //'meta_key' => '_EventStartDate',
    'orderby' => '_EventStartDate',
    'eventDisplay' => 'past',
    'order'	=> 'ASC',
    
    'meta_query' => array(
       array(
           'key' => '_EventStartDate',
           'value' => date("Y-m-d H:i:s"),
           'compare' => '>',
       )
   	)
   	
);


//$events = tribe_get_events( $args );
//$events = get_posts( $args );

$args2 = array(
    'posts_per_page'	=> 4,
    //'eventDisplay' => 'past',
    'start_date' => date( 'Y-m-d H:i:s' ),
    'order'	=> 'ASC'
);
$events = tribe_get_events( $args2 );


//global $wpdb; 
//print($wpdb->last_query);
//exit();
?>

<section id="home-slider">
	<div id="home-top-swiper" class="swiper-container add-next-scroll">
		<div class="swiper-wrapper">
		<?php 
		$slides = get_field('slides');
		
		foreach ($slides as $slide) : ?>
			<div class="swiper-slide" style="background-image: url('<?php echo $slide['url']?>');">
				<div class="slide-title max-width">
					<h1><?php echo $slide['caption']; ?></h1>
					<div class=""><?php echo $slide['description']; ?></div>
				</div>
			</div>
		<?php endforeach; ?>
		</div>
		<div class="swiper-pagination max-width"></div>
		<div class="max-width">
		<div class="swiper-button-next btn btn-nav"><i class="icon-navigate-right"></i></div>
    	<div class="swiper-button-prev btn btn-nav"><i class="icon-navigate-left"></i></div>
	</div>
<script>
(function( $ ) {
	$(function() {
		var slider = new Swiper('#home-top-swiper', {
		 	slidesPerView : 1,
	      	loop : false,
	      	//effect: 'fade',
	      	//spaceBetween: 5,
			pagination: {
	        	el: '.swiper-pagination',
	      	},
	      	navigation: {
		        nextEl: '.swiper-button-next',
		        prevEl: '.swiper-button-prev',
		    },
			/*
			autoplay: {
		        delay: 8000,
		    	disableOnInteraction: true,
		    },
		    */
		});

		var $swiperContainer = $('#home-top-swiper');
		$swiperContainer.height($(window).height() - 46);
		$(window).resize(function() {
			$swiperContainer.height($(window).height() - 46);
		});
	});
})( jQuery );
</script>

</section>

<section id="home-events" class="section-padding">
	<div class="section-header">
		<h1 class="decor"><span>Wydarzenia</span></h1>
		<div class="section-intro"><?php the_field('events-section-subtitle'); ?></div>
	</div>
	<div class="container-fluid max-width events-list">
        <?php $i=0; foreach($events as $post) :
        	//global $post;
        	//print_r($post);
        	$eventMeta = get_post_meta($post->ID);
			$dt = DateTime::createFromFormat('Y-m-d H:i:s', $eventMeta['_EventEndDate'][0]);
			$terms = get_the_terms($post->ID, 'tribe_events_cat');
			
			if ($i == 0) :
			?>
			<div class="col-xs-12 col-sm-6 col-md-offset-2 col-md-5 col-lg-offset-0 col-lg-4">
				<?php the_post_thumbnail() ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="col-xs-12 event first">
					<a class="event-content" href="<?php echo get_permalink($post->ID); ?>">
						<span><?php echo date_i18n( 'l, d M Y @ G:i', date_timestamp_get($dt), false ); ?></span>
						<span class="title"><?php echo the_title(); ?></span>
						<span class="more-lnk">Weź Udział</span>
						<?php if ($terms) foreach ($terms as $cat) echo '<span class="category">'.$cat->name.'</span>'; ?>
					</a>
				</div>
			</div>
			<div class="col-xs-12 col-lg-5 rest">
			<?php else : ?>
				<div class="col-sm-4 col-lg-12 event">
					<a class="event-content" href="<?php echo get_permalink($post->ID); ?>">
						<span class="date"><?php echo date_i18n( 'l, d M Y @ G:i', date_timestamp_get($dt), false ); ?></span>
						<span class="title"><?php echo the_title(); ?></span>
						<span class="more-lnk">Weź Udział</span>
						<?php if ($terms) foreach ($terms as $cat) echo '<span class="category">'.$cat->name.'</span>'; ?>
					</a>
				</div>
			<?php endif;
			if ($i == (count($events) -1)) echo '</div>';
			?>

		<?php $i++; endforeach ?>

	</div>
	<div class="container-fluid max-width">
		<a href="/wydarzenia/" class="btn frame-btn" >Przelądaj Kalendarz</a> 
	</div>
</section>

<?php while ( have_posts() ) : the_post(); ?>
<section id="home-about" style="background-image: url('<?php echo wp_get_attachment_url(get_field('place_section_bg')); ?>');">
	<div class="container-fluid max-width">
		<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8 section-padding content-wrap">
			<div class="section-header">
				<h1 class="decor"><span>Miejsce</span></h1>
				<div class="section-intro"><?php the_field('place-section-subtitle'); ?></div>
			</div>
			<div class="content">
				<?php the_content(); ?>
				<a href="/miejsce/" class="btn frame-btn">Czytaj więcej</a>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>

<section id="home-artists" class="section-padding">
	<div class="section-header">
		<h1 class="decor"><span>Artyści sceny54</span></h1>
		<div class="section-intro"><?php the_field('artists-section-subtitle'); ?></div>
	</div>
	<div class="container-fluid max-width">
		<div class="artists-slider">
	        <?php $artists = get_posts( array('post_type' => 'artist', 'posts_per_page' => -1, ) ); ?>
	                
	        <div id="artists-swiper" class="swiper-container">
				<div class="swiper-wrapper">
					<?php foreach ($artists as $post) : global $post; ?>
					<div class="swiper-slide content-box">
						<div class="bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
	            		<div class="gradient-cover"></div>
	            		<div class="content">
	            			<h4><?php the_title(); ?></h4>
	            			<?php foreach (get_the_terms($post->ID, 'artist_categories') as $cat) echo '<div class="category">'.$cat->name.'</div>'; ?>
	            			<div class="excerpt">
	            				<?php the_excerpt(); ?>
	            			</div>
	            			
	            		</div>
	            	</div>
	            	<?php endforeach; wp_reset_postdata(); ?>
	            </div>
	        </div>

	        <div class="swiper-button-next btn btn-nav"><i class="icon-navigate-right"></i></div>
    		<div class="swiper-button-prev btn btn-nav"><i class="icon-navigate-left"></i></div>

		</div>
	</div>
	<div class="container-fluid max-width" style="text-align: center;">
		<a href="/artysci/" class="btn frame-btn" >Wszyscy Artyści</a> 
	</div>

</section>
<!-- Initialize Swiper -->
<script>
(function( $ ) {
	$(function() {

		var swiper = new Swiper('#artists-swiper', {
			slidesPerView : 4,
			spaceBetween: 30,
			/*
			autoplay: {
		        delay: 3000,
		    	disableOnInteraction: true,
		    },
		    */
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			breakpoints: {
			    480: {
			      slidesPerView: 1,
			    },
			    768: {
			      slidesPerView: 2,
			    },
			    1200: {
			      slidesPerView: 3,
			    }
			}
		});
	});
})( jQuery );
</script>

<?php
$grid = array(
	0 => 'grid-item--height-small',
	1 => 'grid-item--height-reg',
	2 => 'grid-item--height-small',
	3 => 'grid-item--height-reg',
	4 => 'grid-item--height-reg',
	5 => 'grid-item--height-small',
);

?>
<section id="home-gallery">
	<div id="gallery-grid" class="grid image">
		<?php

		$args = array(
			'post_type' => 'tribe_events',
			'posts_per_page' => 5,
			'meta_query' => array(
				array(
					'key' => 'image_gallery',
					'value' => array(''),
					'compare' => 'NOT IN',
				),
			),
		);

		$query = new WP_Query($args);

		 
		$i=0;
		while ( $query->have_posts() ) : $query->the_post(); 
			global $post;
			
			$gallery = get_field('image_gallery');
			$dt = DateTime::createFromFormat('Y-m-d H:i:s', $post->EventStartDate);
		?>

		<?php if ($i==3) : ?>
		<div class="grid-item">
			<div class="<?php echo $grid[$i]; $i++; ?>">
				<div id="gallery-box" class="frame-box">
					<div class="box-inner">
						<div class="section-header">
							<h1 class="decor"><span>Galeria</span></h1>
							<div class="intro">
								<?php the_field('gallery_section_intro', 2); ?>
							</div>
							<a class="btn frame-btn" href="/galeria/foto/">Zobacz galerię</a>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="grid-item">
			<a href="<?php echo get_permalink(get_the_ID()).'/foto/' ; ?>" class="<?php echo $grid[$i]; ?>" style="background-image: url('<?php echo $gallery[0]['sizes']['yumi-gallery-item']; ?>');">
				<div class="gradient-cover"></div>
				<div class="overlay"></div>
				<div class="tile-title">
					<span class="date"><?php echo date_i18n( 'l, d M Y', date_timestamp_get($dt), false ); ?></span>
					<span class="title"><?php echo the_title(); ?></span>
				</div>
			<?php // get_template_part( 'template-parts/page/content', 'gallery' ); ?>
			</a>
		</div>
		<?php $i++; endwhile; wp_reset_query(); // End of the loop. ?>
	</div>
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

<section id="home-menu" class="section-padding">
	<div class="section-header">
		<h1 class="decor"><span>Menu</span></h1>
		<div class="section-intro">
			<?php the_field('menu_section_subtitle'); ?>
		</div>
	</div>
	<div class="container-fluid max-width">
		<div class="frame-box our-specialties">
			<div>
				<h3>Nasze Specjalności</h3>
				<?php the_field('our_specialties') ?>
				<a class="btn frame-btn" href="/menu/">Zobacz pełne menu</a>
			</div>
		</div>
		
		<div class="menu-gallery">
			<?php foreach (get_field('menu-gallery') as $image) : ?>
			<div class="col-xs-4 col-sm-3 col-md-2">
	        	<?php echo wp_get_attachment_image($image['ID']); ?>
			</div>
			<?php endforeach; ?>
		</div>
	</div>

</section>

<section id="home-reservation" class="section-padding">
	<div class="section-header">
		<h1 class="decor"><span>Rezerwacja</span></h1>
		<div class="section-intro"><?php the_field('reservation-section-subtitle'); ?></div>
	</div>	

	<?php get_template_part( 'template-parts/page/content', 'reservation-buttons' ); ?>
</section>
<section id="home-instagram" class="">
	<div id="instafeed" class="tail">
		<div id="instagram-box" class="frame-box">
			<div class="address-box-inner">
				<div class="section-header">
					<h1 class="decor"><span>Instagram</span></h1>
					<div class="section-intro">@scena54</div>
				</div>	
			</div>
		</div>

	</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
<script type="text/javascript">
  var userFeed = new Instafeed({
    get: 'user',
    userId: '623597756', //6246393452 //302456276897634
    clientId: '02b47e1b98ce4f04adc271ffbd26611d',
    accessToken: '623597756.02b47e1.3dbf3cb6dc3f4dccbc5b1b5ae8c74a72',
    resolution: 'low_resolution',
    template: '<a href="{{link}}" target="_blank" id="{{id}}" style="background-image: url(\'{{image}}\')"><div class="overlay"><i class="icon-social-instagram"></div></i></a>',
    sortBy: 'most-recent',
    limit: 12,
    links: false
  });
  userFeed.run();
</script>
</section>

<section id="home-map">
	
	<div class="frame-box address-box">
		<div class="address-box-inner">
			<div class="item">
				<i class="icon icon-map-placeholder"></i>
				<div>
					<strong>Scena54</strong><br />
					<?php echo str_replace("\r\n", '<br />', ot_get_option( 'addresss' )); ?>
				</div>
			</div>
			<br />
			<div class="item">
				<i class="icon icon-phone"></i>
				<?php echo ot_get_option( 'phone' ); ?>
			</div>
			<br />
			<div class="item">
				<i class="icon icon-mail"></i>
				<a href="<?php echo ot_get_option( 'email' ); ?>"><?php echo ot_get_option( 'email' ); ?></a>
			</div>
		</div>
	</div>

	<div id="map">

	</div>
<script src="http://maps.google.com/maps/api/js?callback=initMap&key=AIzaSyCXp5fjmZoq-92myOehWAd_MQ_fcIyAvRQ" async=""></script>
<script>
var getMapCenter = function() {
	   
    if( screen.width > 767 )
        return {lat: 50.064806, lng: 19.924};
    else
        return {lat: 50.064806, lng: 19.926007};
}
<?php get_template_part( 'template-parts/page/content', 'google-map' ); ?>
</script>
</section>
<?php get_footer();
