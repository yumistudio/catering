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

<?php 
	get_template_part('template-parts/parts/our-team');
?>
<?php 
	get_template_part('template-parts/parts/offer-features');
?>

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
	<div class="container text-center cf partners">
	<?php
	$query = new WP_Query( array('post_type' => 'reference', 'posts_per_page' => 8, ) );        
	while ($query->have_posts()) : $query->the_post(); ?>
		<div class="col-md-3">
			<div class="partner">
				<img src="<?php the_post_thumbnail_url(); ?>" />
			</div>
		</div>
	<?php endwhile; wp_reset_postdata(); ?>
	</div>
	<div class="container text-center cf ">
		<a href="/referencje/" class="btn btn-primary"><?php the_field('t_button_text'); ?></a>
	</div>
</section>

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
