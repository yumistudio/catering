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

get_header(); ?>
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
				<?php if( have_rows('menu_ala_carte') ):
				    while ( have_rows('menu_ala_carte') ) : the_row(); ?>
				<div class="card-row">
					<div class="card-row__container">
						<div class="title"><?php the_sub_field('name'); ?></div>
						<div class="price"><?php the_sub_field('cena'); ?></div>
					</div>
					<div class="card-row__disc"><?php the_sub_field('ingredients'); ?></div>
				</div>
				<?php endwhile; endif; ?>
				<div class="card-button">
					<a href="#" class="btn btn-secondary-outline">Zobacz pełne menu</a>
				</div>
			</div>
			<div class="card">
				<h2 class="text-dark text-center">Karta Win</h2>
				<?php if( have_rows('wine_card') ):
				    while ( have_rows('wine_card') ) : the_row(); ?>
				<div class="card-row">
					<div class="card-row__container">
						<div class="title"><?php the_sub_field('name'); ?></div>
						<div class="price"><?php the_sub_field('cena'); ?><span class="sub"> / <?php the_sub_field('measure_unit'); ?></span></div>
					</div>
					<div class="card-row__disc"><?php the_sub_field('ingredients'); ?></div>
				</div>
				<?php endwhile; endif; ?>
				<div class="card-button">
					<a href="#" class="btn btn-secondary-outline">Zobacz kartę win</a>
				</div>
			</div>
			<div class="card">
				<h2 class="text-dark text-center">DELIkatesy</h2>
				<?php if( have_rows('deli') ):
				    while ( have_rows('deli') ) : the_row(); ?>
				<div class="card-row">
					<div class="card-row__container">
						<div class="title"><?php the_sub_field('name'); ?></div>
						<div class="price"><?php the_sub_field('cena'); ?><span class="sub"> / <?php the_sub_field('measure_unit'); ?></span></div>
					</div>
					<div class="card-row__disc"><?php the_sub_field('ingredients'); ?></div>
				</div>
				<?php endwhile; endif; ?>
				<div class="card-button">
					<a href="#" class="btn btn-secondary-outline">Zobacz pełną ofertę</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="home-people" class="padding-section divider-top divider-black">
	<div class="section-header">
		<h1 class="text-dark"><span>Nasz zespół</span></h1>
		<div class="section-intro"></div>
	</div>
	<div id="home-people__carousel" class="swiper-container carousel-one">
		<div class="swiper-wrapper">
			<?php $artists = get_posts( array('post_type' => 'artist', 'posts_per_page' => -1, ) ); ?>
	                
	        
			<?php foreach ($artists as $post) : global $post; ?>
        	<div class="swiper-slide" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
				<div class="swiper-slide__wrapper">
					<div class="title">
						<h2<?php the_title(); ?></h2>
						<h3><?php foreach (get_the_terms($post->ID, 'artist_categories') as $cat) echo $cat->name; ?></h3>
					</div>
					<div class="hidden">
						<p><?php the_excerpt(); ?></p>
						<a href="#" class="btn">Więcej</a>
					</div>
					
				</div>
				<div class="swiper-slide__overlay"></div>
			</div>
        	<?php endforeach; wp_reset_postdata(); ?>
		</div>
		<div class="max-width">
			<div class="swiper-nav-prev"><i class="icon-navigate-left"></i></div>
			<div class="swiper-nav-next"><i class="icon-navigate-right"></i></div>
		</div>
  </div>

  <!-- Initialize Swiper -->
<script>
(function($) {
	$(document).ready(function() {		
		var swiper = new Swiper('#home-people__carousel', {
	      slidesPerView: 6,
	      spaceBetween: 30,
	      centeredSlides: true,
		  loop: true,
	      navigation: {
	        nextEl: '.swiper-nav-next',
	        prevEl: '.swiper-nav-prev',
	      },
	    });
	});
})(jQuery);
</script>

</section>

<section id="gallery" class="padding-section pattern-section divider-bottom">
	<h1 class="text-dark text-center">Galeria</h1>

<?php
$heights = array(
	0 => 'grid-item--height-reg',
	1 => 'grid-item--height-small',
	2 => 'grid-item--height-reg',
	3 => 'grid-item--height-reg',
	4 => 'grid-item--height-reg',
	5 => 'grid-item--height-small',
	6 => 'grid-item--height-small',
);
$widths = array(
	0 => '',
	1 => 'grid-item--width-double',
	2 => '',
	3 => '',
	4 => '',
	5 => '',
	6 => 'grid-item--height-double',
);

$gallery = get_field('gallery');
$all_terms = array();
foreach ($gallery as $key => $image) {
	if ( $term = get_field('kategoria', $image['ID']))
		$all_terms[$term->slug] = $term->name;

	$gallery[$key]['term'] = $term;
}
?>
	<div class="btn-toolbar filters">
		<div data-toggle="buttons" class="btn-group">
			<label class="btn on">
				<input name="filter" value="*" checked="checked" type="radio">
				Wszystkie
			</label>
			<?php foreach ($all_terms as $slug => $name) : ?>
			<label class="btn on">
				<input name="filter" value="<?php echo $slug; ?>" type="radio">
				<?php echo $name; ?>
			</label>
			<?php endforeach; ?>
		</div>
	</div>	
	
	<div class="grid-wrap">
		<div id="gallery-grid" class="grid image">
			<?php foreach ($gallery as $key => $image) : //print_r($image); ?>
			<div class="grid-item photoswipe-item <?php echo $widths[$key]; ?> <?php echo $heights[$key]; ?> <?php echo $image['term']->slug; ?>">
				<a href="<?php echo $image['sizes']['yumi-gallery-item']; ?>" data-size="1920x1080" class="" style="background-image: url('<?php echo $image['sizes']['yumi-gallery-item']; ?>');">
					<div class="overlay"><i class="icon-search"></i></div>
				</a>
	
			</div>
			<?php endforeach; // End of the loop. ?>
		</div>

<script>
(function($) {
	$(document).ready(function() {
		var $grid = jQuery('#gallery-grid');
		$grid.isotope({
		  // options
		  itemSelector: '.grid-item',
		  layoutMode: 'masonry'
		});
	});
})(jQuery);
</script>
</section>

<?php while ( have_posts() ) : the_post(); ?>
<section id="home-about" class="divider-black" style="">
	<div class="container-fluid max-width">
		<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8 section-padding">
			<div class="section-header">
				<h1>Zarezerwuj stolik</h1>
			</div>
			<div class="content text-center">
				<p>Nie czekaj i już dzisiaj rozkoszuj się naszymi</br>wspaniałymi daniami na miejscu.</p>
			</div>
			<div id="home-about__cta" class="text-center">
				<a class="phone" href="tel: 12 686 55 22"><i class="icon icon-phone-outline"></i>12 686 55 22</a>
				<div class="or">lub</div>
				<a href="/miejsce/" class="btn btn-primary">Zarezerwuj online</a>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>

<section id="home-insta" class="padding-section pattern-section divider-black">
<div id="home-insta__carousel" class="swiper-container">
    <div id="instafeed" class="swiper-wrapper">
      <div class="swiper-slide col-md-3">Slide 1</div>
      <div class="swiper-slide col-md-3">Slide 2</div>
      <div class="swiper-slide col-md-3">Slide 3</div>
      <div class="swiper-slide col-md-3">Slide 4</div>
      <div class="swiper-slide col-md-3">Slide 2</div>
      <div class="swiper-slide col-md-3">Slide 3</div>
      <div class="swiper-slide col-md-3">Slide 4</div>
      <div class="swiper-slide col-md-3">Slide 2</div>
      <div class="swiper-slide col-md-3">Slide 3</div>
      <div class="swiper-slide col-md-3">Slide 4</div>
    </div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.min.js"></script>
  
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('#home-insta__carousel', {
      slidesPerView: 6,
      spaceBetween: 30,
      centeredSlides: true,
	  loop: true,
	  autoplay: true,
    });
  </script>
</section>

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
