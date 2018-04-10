<?php
/**
 * Template Name: Strona Oferty
 *
 * @package WordPress
 * @since vilicon 1.0
 */

wp_enqueue_script( 'parallax', get_theme_file_uri( '/assets/js/parallax.js-1.5.0/parallax.min.js' ), array(), '', true );
get_header();

global $post;

?>
  
<section class="offer">
	<div class="container text-center">
		<h1>
			<span class="claim">W czym się specjalizujemy?</span>
			Oferta catering Kraków
		</h1>
	</div>
	<div class="container text-center cf no-gutters">
		<div class="col-md-12">
			<div class="bow bow-fluid bow-space">
				<span class="icon icon-bow"></span>
			</div>
		</div>
	</div>
	<div class="container cf">
		<div class="col-md-offset-1 col-md-10">
			<div class="container cf col-pd-bottom">
				<div class="col-md-offset-2 col-md-8 text-center no-gutters">
					<p>
                        Oferta cateringowa Grupy Scandale skierowana jest zarówno do dużych firm, jak klientów indywidualnych. Obsługujemy imprezy zamknięte i plenerowe.
					</p>
					<p>
                        W ramach oferty cateringowej zapewniamy nie tylko wykwintne potrawy z kuchni europejskiej i szeroki wybór koktajli, ale także:
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container cf col-pd-bottom">
		<div class="col-md-12">
            <div class="offer-feat">
                <div class="offer-feat__feature">
                    <i class="icon icon-fork-knife"></i>
                    <p>przygotowanie scenariusza imprezy</p>
                </div>
                <div class="offer-feat__feature">
                    <i class="icon icon-waiter"></i>
                    <p>profesjonalną obsługę logistyczną</p>
                </div>
                <div class="offer-feat__feature">
                    <i class="icon icon-dish"></i>
                    <p>oprawę muzyczną i animacyjną</p>
                </div>
                <div class="offer-feat__feature">
                    <i class="icon icon-people"></i>
                    <p>dodatkowe atrakcje dla naszych gości</p>
                </div>
                <div class="offer-feat__feature">
                    <i class="icon icon-people"></i>
                    <p>mobilny bar z obsługą barmańską</p>
                </div>
            </div>
		</div>
	</div>
</section>
<?php 
	get_template_part('template-parts/parts/info');
?>
<?php get_footer(); ?>