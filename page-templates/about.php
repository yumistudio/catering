<?php
/**
 * Template Name: O nas
 *
 * @package WordPress
 * @since vilicon 1.0
 */

get_header();

?>
<section id="about-welcome" class="text-section text-center cf divider-bottom padding-section">
	<h1 class="text-dark">Witaj w CARGO</h1>
	<div class="cf text-center">
	<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-4 col-lg-4">
        <p>Witaj w miejscu, gdzie z najwyższą starannością wybieramy składniki do podawanych potraw. Sezonowana na sucho, polska wołowina, świeże ryby i owoce morza przyjeżdżające tu z największych targów Europy oraz rozbudowana selekcja win. To tylko niektóre specjały, które spotkasz w nowej, jesienno-zimowej karcie. </p>
        <p>Rozkoszuj się naszymi daniami na miejscu, lub odwiedź DELIkatesy i zabierz do domu wysokiej jakości mięsa i dodatki, aby przyrządzić je swoim najbliższym.</p>
	</div>
	</div>
</section>
<section id="parallax-1" class="divider-top divider-black">
    <div class="parallaxed-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() ?>/assets/images/p-aboutus.jpg" style="min-height: 400px;">
    </div>
</section>
<section id="about-deli" class="text-section pattern-section text-center cf padding-section divider-bottom">
	<h1 class="text-dark">Delikatesy</h1>
	<div class="cf text-center">
	<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-4 col-lg-4">
        <p>Wykorzystaj czas, gdy przygotowujemy dla Ciebie zamówione dania i zapoznaj się z ofertą naszych DELIkatesów. Znajdziesz tam rarytasy, które tylko czekają, aż wskażesz je palcem.</p>
        <p>Nasza obsługa zapakuje dla Ciebie dowolnej grubości stek z sezonowanej na sucho, polskiej wołowiny, kawałek aromatycznego, dojrzewającego sera lub świeżą rybę. Możesz cieszyć się ich smakiem w domowym zaciszu, z najbliższymi osobami.</p>
        <p>Zaproponujemy Ci również świeże, domowe sosy, masła oraz inne dodatki, które  robimy sami, a także aromatyzowane oliwy produkowane specjalnie dla nas.</p>
        <a href="#" class="btn btn-secondary-outline">Dowiedz się więcej</a>
	</div>
	</div>
</section>
<section id="parallax-1" class="divider-top divider-black">
    <div class="parallaxed-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() ?>/assets/images/p2-aboutus.jpg" style="min-height: 400px;">
    </div>
</section>
<section id="home-people" class="padding-section divider-top">
	<div class="section-header">
		<h1 class="text-dark"><span>Nasz zespół</span></h1>
		<div class="section-intro"></div>
	</div>
	<div id="home-people__carousel" class="swiper-container carousel-one">
		<div class="swiper-wrapper">
			<?php $query = new WP_Query( array('post_type' => 'artist', 'posts_per_page' => -1, ) ); ?>    
	        
			<?php while ($query->have_posts()) : $query->the_post(); ?>
        	<div class="swiper-slide" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
				<div class="swiper-slide__wrapper">
					<div class="title">
						<h2><?php the_title(); ?></h2>
						<h3><?php foreach (get_the_terms(get_the_ID(), 'artist_categories') as $cat) echo $cat->name; ?></h3>
					</div>
					<div class="hidden">
						<p><?php the_excerpt(); ?></p>
						<a href="#" class="btn">Więcej</a>
					</div>
					
				</div>
				<div class="swiper-slide__overlay"></div>
			</div>
        	<?php endwhile; wp_reset_postdata(); ?>
		</div>
		<div class="max-width hidden-xs hidden-sm">
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
		  breakpoints: {
			1440: {
				slidesPerView: 5,
				spaceBetween: 30,
			},
			1200: {
				slidesPerView: 4,
				spaceBetween: 30,
			},
			1024: {
				slidesPerView: 3,
				spaceBetween: 30,
			},
			768: {
				slidesPerView: 2,
				spaceBetween: 10,
			},
			480: {
				slidesPerView: 1,
				spaceBetween: 10,
				}
			},
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
<?php get_footer(); ?>