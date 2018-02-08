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

<<<<<<< HEAD
get_header(); ?>
=======
get_header();

$objects = get_posts( array(
    'post_parent' => 121,
    'post_type'    => 'page',
    'posts_per_page' => -1,
) );

$args = array(
    'post_type'			=> 'tribe_events',
    'posts_per_page'	=> 500,
    'meta_key' => '_EventStartDate',
    'orderby' => '_EventStartDate',
    'order'	=> 'asc',
    
    'meta_query' => array(
       array(
           'key' => '_EventStartDate',
           'value' => date("Y-m-d H:i:s"),
           'compare' => '>',
       )
   	)
   	
);


$events = get_posts( $args );

//global $wpdb; 
//print($wpdb->last_query);
//exit();
?>
<section id="meetcargo" class="pattern-section text-center cf divider-top divider-black padding-section">
	<h1 class="text-dark">Poznaj Cargo</h1>
	<p class="text-semi text-md">
		Cargo to miejsce, w którym niezobowiązująca i ustronna atmosfera</br>spotyka się z prosta, lecz niepozbawioną kunsztu kuchnią.
	</p>
	<p class="text-md">
		Miejsce, w którym odpoczniesz do wielkomiejskiego zgiełku...</br>nie wyjeżdżając nawet z centrum Krakowa!
	</p>
	<p class="text-md">
		Rozkoszuj się naszymi daniami na miejscu, lub odwiedź DELIkatesy</br>i zabierz do domu wysokiej jakości mięsa i dodatki, aby przyrządzić</br>je swoim najbliższym.
	</p>
	<a href="#" class="btn btn-secondary-outline">Dowiedz się więcej</a>
</section>

<section id="recommend" class="padding-section">
	<h1 class="text-center">Szczególnie polecamy</h1>
	<div class="container">
		<div class="cards">

			<div class="card">
				<h2 class="text-dark text-center">Menu a'la carte</h2>
				<div class="card-row">
					<div class="card-row__container">
						<div class="title">Zuppa Del Pescatore</div>
						<div class="price">29zł</div>
					</div>
					<div class="card-row__disc">w opcji z rybą, krewetką i mulami</div>
				</div>
				<div class="card-row">
					<div class="card-row__container">
						<div class="title">Grillowany stek z miecznika</div>
						<div class="price">49zł</div>
					</div>
					<div class="card-row__disc">w marynacie chermoula z sosem salsa</div>
				</div>
				<div class="card-row">
					<div class="card-row__container">
						<div class="title">Żeberka Jacob’s ladder</div>
						<div class="price">39zł</div>
					</div>
					<div class="card-row__disc">podawane z kolbą gotowanej kukurydzy</div>
				</div>
				<div class="card-button">
					<a href="#" class="btn btn-secondary-outline">Zobacz pełne menu</a>
				</div>
			</div>

			<div class="card">
				<h2 class="text-dark text-center">Karta Win</h2>
				<div class="card-row">
					<div class="card-row__container">
						<div class="title">2012 Monte Tondo</div>
						<div class="price">62zł <span class="sub">/ 10cl</span></div>
					</div>
					<div class="card-row__disc">Amarone della Valpolicella, Corvina blend</div>
				</div>
				<div class="card-row">
					<div class="card-row__container">
						<div class="title">2015 Mount Riley Noir</div>
						<div class="price">27zł <span class="sub">/ 10cl</span></div>
					</div>
					<div class="card-row__disc">Marlbourough, Pinot Noir</div>
				</div>
				<div class="card-row">
					<div class="card-row__container">
						<div class="title">2016 Yangarra Viognier</div>
						<div class="price">42zł <span class="sub">/ 10cl</span></div>
					</div>
					<div class="card-row__disc">Mc Laren Vale, Viognier</div>
				</div>
				<div class="card-button">
					<a href="#" class="btn btn-secondary-outline">Zobacz kartę win</a>
				</div>
			</div>
			
			<div class="card">
				<h2 class="text-dark text-center">DELIkatesy</h2>
				<div class="card-row">
					<div class="card-row__container">
						<div class="title">Karkówka</div>
						<div class="price">50zł <span class="sub">/ 100g</span></div>
					</div>
					<div class="card-row__disc">Amarone della Valpolicella, Corvina blend</div>
				</div>
				<div class="card-row">
					<div class="card-row__container">
						<div class="title">Łopatka</div>
						<div class="price">25zł <span class="sub">/ 100g</span></div>
					</div>
					<div class="card-row__disc">Marlbourough, Pinot Noir</div>
				</div>
				<div class="card-row">
					<div class="card-row__container">
						<div class="title">Polędwica wołowa</div>
						<div class="price">18zł <span class="sub">/ 100g</span></div>
					</div>
					<div class="card-row__disc">Mc Laren Vale, Viognier</div>
				</div>
				<div class="card-button">
					<a href="#" class="btn btn-secondary-outline">Zobacz pełną ofertę</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="gallery" class="padding-section pattern-section divider-black">
	<h1 class="text-dark text-center">Galeria</h1>
</section>

<section id="home-events" class="section-padding">
	<div class="section-header">
		<h1 class="decor"><span>Wydarzenia</span></h1>
		<div class="section-intro"><?php the_field('events-section-subtitle'); ?></div>
	</div>
	<div class="container-fluid max-width events-list">
        <?php $i=0; foreach($events as $post) :
        	global $post;
        	$eventMeta = get_post_meta($post->ID);
			$dt = DateTime::createFromFormat('Y-m-d H:i:s', $eventMeta['_EventEndDate'][0]);
			if ($i == 0) : ?>
			<div class="col-xs-12 col-sm-6 col-md-offset-2 col-md-5 col-lg-offset-0 col-lg-4">
				<?php the_post_thumbnail() ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="col-xs-12 event first">
					<a class="event-content" href="<?php echo get_permalink($post->ID); ?>">
						<span><?php echo date_i18n( 'l, d M Y @ G:i', date_timestamp_get($dt), false ); ?></span>
						<span class="title"><?php echo the_title(); ?></span>
						<span class="more-lnk">Weź Udział</span>
						<?php foreach (get_the_terms($post->ID, 'tribe_events_cat') as $cat) echo '<span class="category">'.$cat->name.'</span>'; ?>
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
						<?php foreach (get_the_terms($post->ID, 'tribe_events_cat') as $cat) echo '<span class="category">'.$cat->name.'</span>'; ?>
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
>>>>>>> 32a10126a51b2d64ddacedd4f9f72b88801a1d62

<?php while ( have_posts() ) : the_post(); ?>
<section id="home-about" style="background-image: url('<?php echo wp_get_attachment_url(get_field('place_section_bg')); ?>');">
	<div class="container-fluid max-width">
		<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8 section-padding">
			<div class="section-header">
				<h1>Poznaj Cargo</h1>
			</div>
			<div class="content">
				<?php the_content(); ?>
				<a href="/miejsce/" class="btn frame-btn">Dowedz się więcej</a>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>

<section id="home-people" class="section-padding" style="background-image: url('<?php the_field(); ?>');">
	<div class="section-header">
		<h1>Nasz Zespół</h1>
		<div class="section-intro"><?php the_field('artists-section-subtitle'); ?></div>
	</div>
	<div class="container-fluid max-width">
		<div class="people-slider">
	        <?php $artists = get_posts( array('post_type' => 'artist', 'posts_per_page' => -1, ) ); ?>
	                
	        <div id="people-swiper" class="swiper-container">
				<div class="swiper-wrapper">
					<?php foreach ($artists as $post) : global $post; ?>
					<div class="swiper-slide artist-box">
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

		var swiper = new Swiper('#people-swiper', {
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
					<div class="address-box-inner">
						<div class="section-header">
							<h1 class="decor"><span>Galeria</span></h1>
							<a class="btn btn-frame" href="/galeria/foto/">Zobacz galerię</a>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="grid-item">
			<a href="<?php echo get_permalink(get_the_ID()).'/foto/' ; ?>" class="<?php echo $grid[$i]; ?>" style="background-image: url('<?php echo $gallery[0]['sizes']['yumi-gallery-item']; ?>');">
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
    userId: '623597756', //6246393452
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
