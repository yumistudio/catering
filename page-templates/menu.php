<?php
/**
 * Template Name: Strona Menu
 *
 * @package WordPress
 * @since vilicon 1.0
 */


get_header();
global $post;
?>
<section class="text-section pattern-section text-center cf padding-section">
	<h1 class="text-dark">Odkryj smaki cargo</h1>
	<div class="cf text-center">
	<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        <p>Nasze składniki do podawanych potraw wybieramy z najwyższą starannością. Sezonowana na sucho, polska wołowina, świeże ryby i owoce morza przyjeżdżające tu z największych targów Europy oraz rozbudowana selekcja win. To tylko niektóre specjały, które spotkasz w nowej, jesienno-zimowej karcie.</p>
		<p>Rozkoszuj się naszymi daniami na miejscu, lub odwiedź DELIkatesy i zabierz dodomu wysokiej jakości mięsa i dodatki, aby przyrządzić je swoim najbliższym.</p>
		<a href="#" class="btn btn-secondary-outline">Zobacz Menu a’la carte</a>
		<a href="#" class="btn btn-secondary-outline">Zobacz kartę win</a>
	</div>
	</div>
</section>

<section class="photo-carousel-section">
<div class="photo-carousel-1 swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide col-md-3">Slide #</div>
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
	<div class="max-width">
		<div class="swiper-nav-prev-1"><i class="icon-navigate-left"></i></div>
		<div class="swiper-nav-next-1"><i class="icon-navigate-right"></i></div>
	</div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.min.js"></script>

	<!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.photo-carousel-1', {
      slidesPerView: 6,
      spaceBetween: 30,
      centeredSlides: true,
	  loop: true,
	  autoplay: true,
		navigation: {
			nextEl: '.swiper-nav-next-1',
			prevEl: '.swiper-nav-prev-1',
		},
    });

	(function($) {
		$(document).ready(function() {	
			console.log('asdsad');
			$('.btn').css("height", "100px");
		});
	});
  </script>
</section>

<section class="text-section pattern-section text-center cf padding-section">
	<h1 class="text-dark">Delikatesy</h1>
	<div class="cf text-center">
	<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        <p>Wykorzystaj czas, gdy przygotowujemy dla Ciebie zamówione dania  i zapoznaj sięz ofertą naszych DELIkatesów. Znajdziesz tam rarytasy, które tylko czekają, aż wskażesz je palcem.</p>
		<p>Nasza obsługa zapakuje dla Ciebie dowolnej grubości stek z sezonowanej na sucho, polskiej wołowiny, kawałek aromatycznego, dojrzewającego sera lub świeżą rybę. Możesz cieszyć się ich smakiem w domowym zaciszu, z najbliższymi osobami.</p>
		<p>Zaproponujemy Ci również świeże, domowe sosy, masła oraz inne dodatki, które robimy sami,a także aromatyzowane oliwy produkowane specjalnie dla nas.</p>
		<a href="#" class="btn btn-secondary-outline">Poznaj ofertę</a>
	</div>
	</div>
</section>

<section class="padding-section photo-carousel-section">
<div class="photo-carousel-2 swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide col-md-3">Slide #</div>
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
	<div class="max-width">
		<div class="swiper-nav-prev-2"><i class="icon-navigate-left"></i></div>
		<div class="swiper-nav-next-2"><i class="icon-navigate-right"></i></div>
	</div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.min.js"></script>

	<!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.photo-carousel-2', {
      slidesPerView: 6,
      spaceBetween: 30,
      centeredSlides: true,
	  loop: true,
	  autoplay: true,
		navigation: {
			nextEl: '.swiper-nav-next-2',
			prevEl: '.swiper-nav-prev-2',
		},
    });

	(function($) {
		$(document).ready(function() {	
			console.log('asdsad');
			$('.btn').css("height", "100px");
		});
	});
  </script>
</section>
<?php get_footer(); ?>