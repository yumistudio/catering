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

<section id="wwa" class="padding-section">
	<div class="container text-center">
		<h1>
			<span class="claim"><?php the_field('cs_section_subtitle'); ?></span>
			<?php the_field('cs_section_title'); ?>
		</h1>
	</div>
	<div class="container text-center cf no-gutters">
		<div class="col-md-offset-3 col-md-6">
			<div class="bow bow-fluid">
				<span class="icon icon-bow"></span>
			</div>
		</div>
	</div>
	<div class="container text-center cf">
		<div class="col-md-offset-2 col-md-8">
			<p class="lead"><?php the_field('cs_section_content'); ?></p>
			<a href="/o-nas/" class="btn btn-primary">Dowiedz się więcej</a>
		</div>
	</div>
</section>

<section class="section-info cf">
	<?php $query = new WP_Query( array(
		'post_type' => 'page',
	    'posts_per_page' => 6,
	    'post_parent' => 97)
	);
	        
	while ($query->have_posts()) : $query->the_post(); ?>
	<div class="col-md-4 section-info__box">
		<div class="section-info__box__holder" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
			<div class="wrapper">
				<div class="title">
					<h3><?php the_title(); ?></h3>
					<div class="hidden">
						<?php the_field('short_description'); ?>
						<a class="btn btn-secondary-outline" href="#">Zobacz warianty</a>
					</div>
					<div class="border-bottom">
						<span class="icon icon-bow"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; wp_reset_postdata(); ?>
</section>

<section id="home-people" class="padding-section">
	<div class="container text-center">
		<h1>
			<span class="claim"><?php the_field('ot_section_subtitle'); ?></span>
			<?php the_field('ot_section_title'); ?>
		</h1>
	</div>
	<div class="container text-center cf no-gutters">
		<div class="col-md-offset-3 col-md-6">
			<div class="bow bow-fluid">
				<span class="icon icon-bow"></span>
			</div>
		</div>
	</div>
	<div class="no-gutters container-fluid">

		<div class="arrow-conatainer no-gutters hidden-xs">
			<div class="swiper-nav-prev"><i class="icon-navigate-left"></i></div>
			<div class="swiper-nav-next"><i class="icon-navigate-right"></i></div>
		</div>

		<div class="container text-center cf">
			<div class="col-md-12">
				<div id="home-people__carousel" class="swiper-container carousel-one">
					<div class="swiper-wrapper">
						<?php $query = new WP_Query( array('post_type' => 'artist', 'posts_per_page' => -1, ) ); ?>    
						
						<?php while ($query->have_posts()) : $query->the_post(); 
							$aterms = get_the_terms(get_the_ID(), 'artist_categories');
						?>
						<div class="swiper-slide" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
							<div class="swiper-slide__wrapper">
								<div class="title">
									<h2><?php the_title(); ?></h2>
									<h3><?php if($aterms) foreach ($aterms as $cat) echo $cat->name; ?></h3>
								</div>
								<div class="hidden">
									<?php the_excerpt(); ?>
									<div class="col-xs-12">
										<a href="#" class="btn btn-sm" data-mfp-src="#popup-<?php the_ID(); ?>">Więcej</a>
									</div>
								</div>
								
							</div>
							<div class="swiper-slide__overlay"></div>
							<div class="about-us-popup">
								<div id="popup-<?php the_ID(); ?>" class="black-popup max-width mfp-hide">
									<div class="black-popup__wrapper">
										<button title="Zamknij (Esc)" id="mfp-close" type="button" class="mfp-close"><i class="icon-close"></i></button>
										<div>
											<div class="table">
												<div class="cell img-wrap"><?php the_post_thumbnail('yumi-gallery-item'); ?></div>
												<div class="cell"><div class="content">
													<?php the_title('<h3>', '</h3>');
													foreach ($aterms as $cat) echo '<div class="category">'.$cat->name.'</div>';
													the_content(); ?>
												</div></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>
				<!-- Initialize Swiper -->
				<script>
				(function($) {
					$(document).ready(function() {
						var swiper = new Swiper('#home-people__carousel', {
						slidesPerView: 4,
						spaceBetween: 30,
						centeredSlides: false,
						loop: true,
						navigation: {
							nextEl: '.swiper-nav-next',
							prevEl: '.swiper-nav-prev',
						},
						});
						var setUpNiceScroll = function() {
							var container = $(this.content.get()).find('.content');
							
							container.niceScroll({
								cursorcolor: '#ffe2a680',
								cursorborder: '1px solid #ffe2a680',
							});
							
							container.getNiceScroll().resize();
							//console.log(container.width() + ' / ' + container.height());
							//console.log(container.getNiceScroll());
						}

						$('#home-people__carousel').magnificPopup({
							delegate: 'a.btn',
							disableOn: 700,
							type: 'inline',
							closeMarkup: '<button title="Zamknij (Esc)" type="button" class="mfp-close"><i class="icon-close"></i></button>',
							mainClass: 'mfp-fade about-us-popup',
							removalDelay: 160,
							gallery:{ 
								enabled:true,
								arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"><i class="icon-navigate-%dir%"></i></button>'
							},
							callbacks: {
								open: setUpNiceScroll,
								change: setUpNiceScroll,
								buildControls: function() {
									this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
								}
							},
							/*
							preloader: false,
							fixedContentPos: false,
							*/
						});
					});
				})(jQuery);
				</script>
			</div>
		</div>
	</div>
</section>
<section id="parallax-1" class="offer-features">
<div class="parallaxed-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() ?>/assets/images/backgrounds/info-parallax-bg.jpg" style="min-height: 300px;">
    <div class="container cf">
        <div class="col-md-3 offer-features__feature">
			<i class="icon icon-fork-knife"></i>
			<h2>480</h2>
            <p>zrealizowanych eventów</p>
        </div>
        <div class="col-md-3 offer-features__feature">
            <i class="icon icon-waiter"></i>
			<h2>36</h2>
            <p>wykwalifikowanych kelnerów</p>
        </div>
        <div class="col-md-3 offer-features__feature">
            <i class="icon icon-dish"></i>
			<h2>105</h2>
            <p>różnych dań w ofercie</p>
        </div>
        <div class="col-md-3 offer-features__feature">
            <i class="icon icon-people"></i>
			<h2>8547</h2>
            <p>zadowolonych gości</p>
        </div>
    </div>
</div>
</section>

<section id="trust" class="padding-section">
	<div class="container text-center">
		<h1>
			<span class="claim"><?php the_field('t_section_subtitle'); ?></span>
			<?php the_field('t_section_title'); ?>
		</h1>
	</div>
	<div class="container text-center cf no-gutters">
		<div class="col-md-offset-3 col-md-6">
			<div class="bow bow-fluid">
				<span class="icon icon-bow"></span>
			</div>
		</div>
	</div>
	<div class="container text-center cf">
	<?php
	$query = new WP_Query( array('post_type' => 'reference', 'posts_per_page' => 8, ) );        
	while ($query->have_posts()) : $query->the_post(); 
		$aterms = get_the_terms(get_the_ID(), 'artist_categories');
	?>
	<div class="reference-item">
		<?php the_title(); ?>
	</div>
	<?php endwhile; wp_reset_postdata(); ?>
		<a href="/referencje/" class="btn btn-primary"><?php the_field('t_button_text'); ?></a>
	</div>
</section>

<!-- <section id="trust" class="padding-section">
	<div class="container text-center">
		<h1>
			<span class="claim">Nasze referencje</span>
			Zaufali nam
		</h1>
	</div>
	<div class="container text-center cf no-gutters">
		<div class="col-md-offset-3 col-md-6">
			<div class="bow bow-fluid">
				<span class="icon icon-bow"></span>
			</div>
		</div>
	</div>
	<div class="container text-center cf partners">
		<div class="col-md-3">
			<div class="partner">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/partners-logo/capgemini.png" />
			</div>
		</div>
		<div class="col-md-3">
			<div class="partner">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/partners-logo/hilton-garden-inn.png" />
			</div>
		</div>
		<div class="col-md-3">
			<div class="partner">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/partners-logo/bp.png" />
			</div>
		</div>
		<div class="col-md-3">
			<div class="partner">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/partners-logo/royal-canin.png" />
			</div>
		</div>
		<div class="col-md-3">
			<div class="partner">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/partners-logo/shell.png" />
			</div>
		</div>
		<div class="col-md-3">
			<div class="partner">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/partners-logo/veracomp.png" />
			</div>
		</div>
		<div class="col-md-3">
			<div class="partner">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/partners-logo/hcl.png" />
			</div>
		</div>
		<div class="col-md-3">
			<div class="partner">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/partners-logo/capita.png" />
			</div>
		</div>
	</div>
	<div class="container text-center cf ">
		<a href="#" class="btn btn-primary">Zobacz referencje</a>
	</div>
</section> -->

<section id="home-reservation" class="padding-section">
	<div class="container-fluid max-width">
		<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
			<div class="section-header">
				<h1>
					<span class="claim"><?php the_field('oc_section_subtitle'); ?></span>
					<?php the_field('oc_section_title'); ?>
				</h1>
			</div>
			<div id="home-reservation__cta" class="text-center">
				<a class="phone" href="tel: 12 686 55 22"><i class="icon icon-phone"></i>519 448 448</a>
				<div class="or">lub</div>
				<a href="#" class="btn btn-primary"><?php the_field('oc_button_text'); ?></a>
			</div>
		</div>
	</div>
</section>

<!-- <section id="home-reservation" class="padding-section">
	<div class="container text-center">
		<h1>
			<span class="claim"><?php the_field('oc_section_subtitle'); ?></span>
			<?php the_field('oc_section_title'); ?>
		</h1>
	</div>
	<div class="container text-center cf no-gutters">
		<div class="col-md-offset-3 col-md-6">
			<div class="bow bow-fluid">
				<span class="icon icon-bow"></span>
			</div>
		</div>
	</div>
	<div class="container text-center cf">
		<a href="#" class="btn btn-primary"><?php the_field('oc_button_text'); ?></a>
	</div>
</section> -->

<section id="home-map">
	
	<div class="address-box">
		<div class="address-box-inner">
			<div class="item">
				<h2>
					<span class="claim">Kontakt</span>
					Tu jesteśmy
				</h2>
				<div class="container text-center cf no-gutters">
					<div class="">
						<div class="bow bow-fluid">
							<span class="icon icon-bow"></span>
						</div>
					</div>
				</div>
				<p>
					Plac Nowy 9, Kraków
				</p>
				<a href="<?php echo ot_get_option( 'drive_directions' ); ?>" target="_blank" class="btn">Wskazówki dojazdu</a>
			</div>
			<div class="item__data">
				<div class="item__data__inner">
					<a href="#"><span class="icon icon-phone"></span>519 448 448</a>
					<a href="#"><span class="icon icon-mail"></span>catering@scandale.pl</a>
				</div>
			</div>
		</div>
	</div>

	<div id="map"></div>
	<script src="http://maps.google.com/maps/api/js?callback=initMap&key=AIzaSyCXp5fjmZoq-92myOehWAd_MQ_fcIyAvRQ" async=""></script>
<script>
	var getMapCenter = function() {
		   
	    if( screen.width > 767 )
	        return {lat: 50.064806, lng: 19.927};
	    else
	        return {lat: 50.064806, lng: 19.926007};
	}
	<?php get_template_part( 'template-parts/page/content', 'google-map' ); ?>
	</script>
</section>

<?php get_footer();
