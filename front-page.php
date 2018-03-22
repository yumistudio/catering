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

<section class="padding-section">
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
	<div class="container text-center cf">
		<div class="col-md-12">
		<div id="home-people__carousel" class="swiper-container carousel-one">
		<div class="swiper-wrapper">
			<?php $query = new WP_Query( array('post_type' => 'artist', 'posts_per_page' => -1, ) );
	        
			while ($query->have_posts()) : $query->the_post(); 
				$aterms = get_the_terms(get_the_ID(), 'artist_categories');
			?>
        	<div class="swiper-slide" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
				<div class="swiper-slide__wrapper">
					<div class="title">
						<h2><?php the_title(); ?></h2>
						<h3><?php if($aterms) foreach ($aterms as $cat) echo $cat->name; ?></h3>
					</div>
					<div class="hidden">
						<p><?php the_excerpt(); ?></p>
						<div class="col-xs-12">
							<a href="#" class="btn" data-mfp-src="#popup-<?php the_ID(); ?>">Więcej</a>
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
		<div class="arrow-conatainer hidden-xs">
			<div class="swiper-nav-prev"><i class="icon-navigate-left"></i></div>
			<div class="swiper-nav-next"><i class="icon-navigate-right"></i></div>
			<div class="swiper-pagination"></div>
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
	      pagination: {
	      	el: '.swiper-pagination',
	      },
		});
	
	});
})(jQuery);
</script>
		</div>
	</div>
</section>

<section id="home-customers" class="padding-section">
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

<section id="home-order-catering" class="padding-section">
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
</section>



<?php get_footer();
