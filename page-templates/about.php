<?php
/**
 * Template Name: O nas
 *
 * @package WordPress
 * @since vilicon 1.0
 */

get_header();

?>

<section class="about-us">
	<div class="container text-center">
		<h1>
			<span class="claim">Poznajmy się lepiej!</span>
			O nas
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
				<div class="col-md-5">
					<h2>
						<span class="claim">Kim jesteśmy?</span>
						Catering Scandale
					</h2>
					<p>
						Jeteśmy specjalistami do sprawiania kulinarnych przyjemności i oganizowania dobrej zabawy. Jako właściciele dwóch kultowych restauracji w Krakowie – Le Scandale i Scandale Royal doskonale znamy się na przygotowywaniu dań z kuchni całego świata. Specjalnością Grupy Scandale jest również catering w Krakowie i okolicach.
					</p>
				</div>
				<div class="col-md-offset-1 col-md-6">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/images/about-us-1.png" alt=""/>
				</div>
			</div>
		</div>
		<div class="col-md-offset-1 col-md-10">
			<div class="container cf col-pd-bottom">
				<div class="col-md-5">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/images/about-us-2.png" alt=""/>
				</div>
				<div class="col-md-offset-1 col-md-6">
					<h2>
						<span class="claim">Co możemy dla Ciebie zrobić?</span>
						Pomożemy w każdym aspekcie
					</h2>
					<p>
						Grupa Scandale to firma, w której nie boimy się wyzwań. Jesteśmy elastyczni i otwarci na propozycje. Nie musisz się też martwić, gdy brakuje Ci pomysłów na menu,artystyczną oprawę, wystrój czy motyw przewodni imprezy.
					</p>
					<p>
						Nasi specjaliści zawsze chętnie podpowiedzą, doradzą, zainspirują. A doświadczenie w robieniu dobrego wrażenia mamy spore. Wystarczy zapytać o to gości restauracji należących do Grupy Scandale, w których organizowaliśmy już pokazy kulinarne, wieczory z degustacją win, koncerty, walki kickbokserskie czy imprezy-przebieranki.
					</p>
					<p>
						Powierzając nam organizację przyjęcia, możesz zająć się wyłącznie dobrą zabawą, dbaniem o zaproszonych gości i… zbieraniem od nich pochwał.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
	get_template_part('template-parts/parts/our-team');
?>
<?php 
	get_template_part('template-parts/parts/offer-features');
?>
<?php 
	get_template_part('template-parts/parts/order');
?>

<?php get_footer(); ?>