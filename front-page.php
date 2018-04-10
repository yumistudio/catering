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


<?php 
	get_template_part('template-parts/parts/info');
?>
<?php 
	get_template_part('template-parts/parts/our-team');
?>
<?php 
	get_template_part('template-parts/parts/offer-features');
?>
<?php 
	get_template_part('template-parts/parts/trusted');
?>
<?php 
	get_template_part('template-parts/parts/order');
?>

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
					<a href="tel: <?php echo ot_get_option( 'phone' ); ?>">
						<span class="icon icon-phone"></span>
						<?php echo ot_get_option( 'phone' ); ?>
					</a>
					<a href="mailto: <?php echo ot_get_option( 'email' ); ?>">
						<span class="icon icon-mail"></span>
						<?php echo ot_get_option( 'email' ); ?>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div id="map"></div>
	<script src="http://maps.google.com/maps/api/js?callback=initMap&key=AIzaSyCXp5fjmZoq-92myOehWAd_MQ_fcIyAvRQ" async=""></script>
<script>
	var getMapCenter = function() {
		   
	    if( screen.width > 767 )
	        return {lat: 50.051891, lng: 19.944578};
	    else
	        return {lat: 50.051891, lng: 19.944578};
	}
	<?php get_template_part( 'template-parts/page/content', 'google-map' ); ?>
	</script>
</section>

<?php get_footer();
