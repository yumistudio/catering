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
						<div class="price"><?php the_sub_field('cena'); ?><span class="sub">/ <?php the_sub_field('measure_unit'); ?></span></div>
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
						<div class="price"><?php the_sub_field('cena'); ?><span class="sub">/ <?php the_sub_field('measure_unit'); ?></span></div>
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
			<div class="swiper-slide" style="background-image: url('http://scena54.yumistudio.pl/wp-content/uploads/2018/01/kkrasko.jpg')">
				<div class="swiper-slide__wrapper">
					<div class="title">
						<h2>Maciej Piórkowski</h2>
						<h3>Szef kuchni</h3>
					</div>
					<div class="hidden">
						<p>Całe życie zawodowe spędził w restauracjach i hotelach w Polsce, Anglii, Turcji i Izraelu...</p>
						<a href="#" class="btn">Więcej</a>
					</div>
					
				</div>
				<div class="swiper-slide__overlay"></div>
			</div>
			<div class="swiper-slide" style="background-image: url('http://scena54.yumistudio.pl/wp-content/uploads/2018/01/kkrasko.jpg')">
				<div class="swiper-slide__wrapper">
					<div class="title">
						<h2>Maciej Piórkowski</h2>
						<h3>Szef kuchni</h3>
					</div>
					<div class="hidden">
						<p>Całe życie zawodowe spędził w restauracjach i hotelach w Polsce, Anglii, Turcji i Izraelu...</p>
						<a href="#" class="btn">Więcej</a>
					</div>
					
				</div>
				<div class="swiper-slide__overlay"></div>
			</div>
			<div class="swiper-slide" style="background-image: url('http://scena54.yumistudio.pl/wp-content/uploads/2018/01/kkrasko.jpg')">
				<div class="swiper-slide__wrapper">
					<div class="title">
						<h2>Maciej Piórkowski</h2>
						<h3>Szef kuchni</h3>
					</div>
					<div class="hidden">
						<p>Całe życie zawodowe spędził w restauracjach i hotelach w Polsce, Anglii, Turcji i Izraelu...</p>
						<a href="#" class="btn">Więcej</a>
					</div>
					
				</div>
				<div class="swiper-slide__overlay"></div>
			</div>
			<div class="swiper-slide" style="background-image: url('http://scena54.yumistudio.pl/wp-content/uploads/2018/01/kkrasko.jpg')">
				<div class="swiper-slide__wrapper">
					<div class="title">
						<h2>Maciej Piórkowski</h2>
						<h3>Szef kuchni</h3>
					</div>
					<div class="hidden">
						<p>Całe życie zawodowe spędził w restauracjach i hotelach w Polsce, Anglii, Turcji i Izraelu...</p>
						<a href="#" class="btn">Więcej</a>
					</div>
					
				</div>
				<div class="swiper-slide__overlay"></div>
			</div>
			<div class="swiper-slide" style="background-image: url('http://scena54.yumistudio.pl/wp-content/uploads/2018/01/kkrasko.jpg')">
				<div class="swiper-slide__wrapper">
					<div class="title">
						<h2>Maciej Piórkowski</h2>
						<h3>Szef kuchni</h3>
					</div>
					<div class="hidden">
						<p>Całe życie zawodowe spędził w restauracjach i hotelach w Polsce, Anglii, Turcji i Izraelu...</p>
						<a href="#" class="btn">Więcej</a>
					</div>
					
				</div>
				<div class="swiper-slide__overlay"></div>
			</div>
			
		</div>
		<div class="max-width">
			<div class="swiper-nav-prev"><i class="icon-navigate-left"></i></div>
			<div class="swiper-nav-next"><i class="icon-navigate-right"></i></div>
		</div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.min.js"></script>
  
  <!-- Initialize Swiper -->
  <script>
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
  </script>
	<!-- <div class="container-fluid max-width">
		<div class="artists-slider">
	        	                
	        <div id="artists-swiper" class="swiper-container swiper-container-horizontal">
				<div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-1170px, 0px, 0px);">
										<div class="swiper-slide content-box" style="width: 262.5px; margin-right: 30px;">
						<div class="bg" style="background-image: url('http://scena54.yumistudio.pl/wp-content/uploads/2018/01/kkrasko.jpg');"></div>
	            		<div class="gradient-cover"></div>
	            		<div class="content">
	            			<h4>Karina Kraśko</h4>
	            			<div class="category">Muzyk</div>	            			<div class="excerpt">
	            				<p>Scena54 wychodzi naprzeciw oczekiwaniom gości powyżej 30 roku życia, lubującym się w wysublimowanej rozrywce. To spełnienie marzenia wyrafinowanego klubowicza o … </p>
	            			</div>
	            			
	            		</div>
	            	</div>
	            						<div class="swiper-slide content-box" style="width: 262.5px; margin-right: 30px;">
						<div class="bg" style="background-image: url('http://scena54.yumistudio.pl/wp-content/uploads/2018/01/mmkobylacz.jpg');"></div>
	            		<div class="gradient-cover"></div>
	            		<div class="content">
	            			<h4>Mariusz ‚Mario’ Kobylacz</h4>
	            			<div class="category">Stand-Up</div>	            			<div class="excerpt">
	            				<p>Pellentesque imperdiet tristique felis.</p>
	            			</div>
	            			
	            		</div>
	            	</div>
	            						<div class="swiper-sl ide content-box" style="width: 262.5px; margin-right: 30px;">
						<div class="bg" style="background-image: url('http://scena54.yumistudio.pl/wp-content/uploads/2018/01/rmtrzebinski.jpg');"></div>
	            		<div class="gradient-cover"></div>
	            		<div class="content">
	            			<h4>Robert Marek Trzebiński</h4>
	            			<div class="category">Muzyk</div>	            			<div class="excerpt">
	            				<p>Class aptent taciti sociosqu ad litora .</p>
	            			</div>
	            			
	            		</div>
	            	</div>
	            						<div class="swiper-slide content-box swiper-slide-prev" style="width: 262.5px; margin-right: 30px;">
						<div class="bg" style="background-image: url('http://scena54.yumistudio.pl/wp-content/uploads/2018/01/gryfnesynki.jpg');"></div>
	            		<div class="gradient-cover"></div>
	            		<div class="content">
	            			<h4>Gryfne Synki</h4>
	            			<div class="category">DJ Band</div>	            			<div class="excerpt">
	            				<p>Duis pharetra eget elit sed semper.</p>
	            			</div>
	            			
	            		</div>
	            	</div>
	            						<div class="swiper-slide content-box swiper-slide-active" style="width: 262.5px; margin-right: 30px;">
						<div class="bg" style="background-image: url('http://scena54.yumistudio.pl/wp-content/uploads/2018/01/scanditanoche.jpg');"></div>
	            		<div class="gradient-cover"></div>
	            		<div class="content">
	            			<h4>Scandalita Noche</h4>
	            			<div class="category">Zespół</div>	            			<div class="excerpt">
	            				<p>Luis ac ex faucibus ante vestibulum sagittis.</p>
	            			</div>
	            			
	            		</div>
	            	</div>
	            						<div class="swiper-slide content-box swiper-slide-next" style="width: 262.5px; margin-right: 30px;">
						<div class="bg" style="background-image: url('http://scena54.yumistudio.pl/wp-content/uploads/2018/01/sszczebrzeszynski.jpg');"></div>
	            		<div class="gradient-cover"></div>
	            		<div class="content">
	            			<h4>Seweryn Szczebrzeszyński</h4>
	            			<div class="category">Stand-Up</div>	            			<div class="excerpt">
	            				<p>Curabitur id erat et ex laoreet egestas.</p>
	            			</div>
	            			
	            		</div>
	            	</div>
	            						<div class="swiper-slide content-box" style="width: 262.5px; margin-right: 30px;">
						<div class="bg" style="background-image: url('http://scena54.yumistudio.pl/wp-content/uploads/2018/01/mwalczaknowakowska.jpg');"></div>
	            		<div class="gradient-cover"></div>
	            		<div class="content">
	            			<h4>Monika Walczak-Nowakowska</h4>
	            			<div class="category">Burlesque</div>	            			<div class="excerpt">
	            				<p>In pellentesque, nisl in aliquet.</p>
	            			</div>
	            			
	            		</div>
	            	</div>
	            						<div class="swiper-slide content-box" style="width: 262.5px; margin-right: 30px;">
						<div class="bg" style="background-image: url('http://scena54.yumistudio.pl/wp-content/uploads/2018/01/atrojanowski.jpg');"></div>
	            		<div class="gradient-cover"></div>
	            		<div class="content">
	            			<h4>Andrzej Trojanowski</h4>
	            			<div class="category">Stand-Up</div>	            			<div class="excerpt">
	            				<p>Lorem ipsum dolor sit amet</p>
	            			</div>
	            			
	            		</div>
	            	</div>
	            		            </div>
	        </div>

	        <div class="swiper-button-next btn btn-nav"><i class="icon-navigate-right"></i></div>
    		<div class="swiper-button-prev btn btn-nav"><i class="icon-navigate-left"></i></div>

		</div>
	</div> -->

</section>

<section id="gallery" class="padding-section pattern-section divider-bottom">
	<h1 class="text-dark text-center">Galeria</h1>
	<div class="btn-toolbar filters">
		<div data-toggle="buttons" class="btn-group">
			<label class="btn on">
				<input name="filter" value="*" checked="checked" type="radio">
				Wnętrza
			</label>
			<label class="btn">
				<input name="filter" value="burlesque" type="radio">
				Menu a’la carte	
			</label>
			<label class="btn">
				<input name="filter" value="dj-band" type="radio">
				Delikatesy	
			</label>
			<label class="btn">
			<input name="filter" value="muzyk" type="radio">
				Wydarzenia	
			</label>
			<label class="btn">
			<input name="filter" value="muzyk" type="radio">
				Wina i cocktaile
			</label>
		</div>
	</div>	
	<div class="container-fluid">
		
		<div id="artists-grid" class="row max-width">
			<div class="artist-item muzyk">
				<div>
					<div class="table">
						<div class="cell img-wrap"><img src="http://via.placeholder.com/350x150"></div>
					</div>
				</div>
			</div>
			<div class="artist-item muzyk">
				<div>
					<div class="table">
						<div class="cell img-wrap"><img src="http://via.placeholder.com/350x150"></div>
					</div>
				</div>
			</div>
			<div class="artist-item muzyk">
				<div>
					<div class="table">
						<div class="cell img-wrap"><img src="http://via.placeholder.com/350x150"></div>
					</div>
				</div>
			</div>
			<div class="artist-item muzyk">
				<div>
					<div class="table">
						<div class="cell img-wrap"><img src="http://via.placeholder.com/350x150"></div>
					</div>
				</div>
			</div>
			<div class="artist-item muzyk">
				<div>
					<div class="table">
						<div class="cell img-wrap"><img src="http://via.placeholder.com/350x150"></div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
	<script>
	(function($) {
		
		var $grid = jQuery('#artists-grid');
		$grid.isotope({
		// options
		itemSelector: '.artist-item',
		layoutMode: 'masonry',
		masonry: {
			columnWidth: 25
		}
		});

		$('.filters input').change(function() {
			$(this).parent().siblings().removeClass('on');
			$(this).parent().toggleClass('on');
			var value = $(this).val();
			if ( value != '*' ) value = '.' + value;
			$grid.isotope({ filter: value });
		});

	})(jQuery);


	(function($) {
		$(document).ready(function() {
			
			var $contentElements = $('#artists-grid .content')
			
			/*
			$contentElements.niceScroll({
				cursorcolor: '#ffe2a680',
				cursorborder: '1px solid #ffe2a680',
			});
			console.log($contentElements.getNiceScroll());
			*/

			// $('#artists-grid').magnificPopup({
			// 	delegate: 'div.content-box',
			// 	disableOn: 700,
			// 	type: 'inline',
			// 	closeMarkup: '<button title="Zamknij (Esc)" type="button" class="mfp-close"><i class="icon-close"></i></button>',
			// 	mainClass: 'mfp-fade',
			// 	removalDelay: 160,
			// 	callbacks: {
			// 		open: function() {
			// 			var container = $(this.content.get()).find('.content');
						
			// 			container.niceScroll({
			// 				cursorcolor: '#ffe2a680',
			// 				cursorborder: '1px solid #ffe2a680',
			// 			});
						
			// 			container.getNiceScroll().resize();
			// 			console.log(container.width() + ' / ' + container.height());
			// 			console.log(container.getNiceScroll());
			// 		},
			// 	},
			// 	/*
			// 	mainClass: 'mfp-fade',
			// 	removalDelay: 160,
			// 	preloader: false,
			// 	fixedContentPos: false,
			// 	*/
			// });

			
			
			$('#artists-grid').magnificPopup({
				delegate: 'a',
				disableOn: 700,
				type: 'iframe',
				mainClass: 'mfp-fade',
				removalDelay: 160,
				preloader: false,
				fixedContentPos: false,
				

				iframe: {
					markup: '<div class="mfp-iframe-scaler">'+
								'<div class="mfp-title"></div>'+
								'<div class="mfp-close"></div>'+
								'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
							'</div>',
				},

				callbacks: {
					markupParse: function(template, values, item) {

						values.title = '<h4>' + item.el.attr('title') + '</h4>' +
										'<span class="date">'+item.el.find('.date').text()+'</span>'; 
					},
				},
				closeMarkup: '<button title="Zamknij (Esc)" type="button" class="mfp-close"><i class="icon-close"></i></button>'
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
