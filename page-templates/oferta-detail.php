<?php
/**
 * Template Name: Strona Oferty Detal
 *
 * @package WordPress
 * @since vilicon 1.0
 */

get_header();

?>

<section class="bg-subpage section-pd-top">
	<div class="container">
		<div class="col-md-12 text-center">
			<h1>
				<span class="claim">Oferta</span>
				Przyjęcia okolicznościowe
			</h1>
		</div>
	</div>
	<div class="container text-center cf no-gutters">
		<div class="col-md-12">
			<div class="bow bow-fluid bow-space">
				<span class="icon icon-bow"></span>
			</div>
		</div>
	</div>
	
	<div class="container cf section-pd-bottom">
		<div class="col-md-offset-1 col-md-10">
			<div class="col-md-6">
				<h2>
					<span class="claim">Przygotowania zostaw nam</span>
					Ciesz się okazją
				</h2>
				<p>
				Troszczymy się o niezapomniane wspomnienia z ważnych wydarzeń. Dbamy o to, aby uczestniczący w nim goście nie musieli martwić się przygotowaniami ani obsługą, a zamiast tego mogli skupić się na byciu z bliskimi w wyjątkowych chwilach. Organizujemy indywidualną oprawę: komunii  /  chrzcin  /  wesel  /  rodzinnych przyjęć
				</p>
			</div>
			<div class="col-md-6">
				<img class="img-fluid" src="<?php bloginfo( 'template_url' ); ?>/assets/images/about-us-1.png" alt=""/>
			</div>
		</div>
	</div>

	<div class="container cf section-pd-top no-gutters">
		<div class="col-md-12 no-gutters">
			<div class="col-md-4">
				<div class="image-box">
					<h2>Wariant pierwszy</h2>
					<p>Przystawka, danie główne, zimny lub ciepły bufet</p>
					<a href="#" class="btn btn-secondary-outline btn-sm">Sprawdź menu</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="image-box">
					<h2>Wariant drugi</h2>
					<p>Przystawka, danie główne, zimny lub ciepły bufet</p>
					<a href="#" class="btn btn-secondary-outline btn-sm">Sprawdź menu</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="image-box">
					<h2>Wariant trzeci</h2>
					<p>Przystawka, danie główne, zimny lub ciepły bufet</p>
					<a href="#" class="btn btn-secondary-outline btn-sm">Sprawdź menu</a>
				</div>
			</div>
		</div>
	</div>

	
	<div class="container cf section-pd-top">
		<div class="col-md-offset-1 col-md-10">
			<div class="container cf col-pd-bottom">
				<div class="col-md-offset-2 col-md-8 text-center no-gutters">
					<p>
					Zamówienia realizujemy w dowolnej, dogodnej dla klienta lokalizacji. Doradzamy na etapie budowania koncepcji przyjęcia, pomagamy w konstrukcji niepowtarzalnego menu, posiłki dostarczamy w gotowej formie lub przygotowujemy je na miejscu, w kuchni klienta. Dysponujemy szeroką ofertą zastawy stołowej oraz profesjonalną obsługa kelnerską, dzięki której gospodarz może skupić się wyłącznie na gościach.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
	get_template_part('template-parts/parts/offer-features');
?>
<?php 
	get_template_part('template-parts/parts/order');
?>
<?php 
	get_template_part('template-parts/parts/offer-slider');
?>

<?php get_footer(); ?>