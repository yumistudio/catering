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
										<div class="col-md-10 black-popup__content">
											<div class="container no-gutters">
												<div class="col-md-4 black-popup__image no-gutters">
													<?php the_post_thumbnail('yumi-gallery-item'); ?>
												</div>
												<div class="col-md-8 black-popup__text">
													<div class="text-center">
													<button title="Zamknij (Esc)" id="mfp-close" type="button" class="mfp-close"><i class="icon-close"></i></button>
													<h2>
														<?php foreach ($aterms as $cat) echo '<span class="claim">'.$cat->name.'</span>'; ?>
														<?php the_title(); ?>
													</h2>
													<div class="bow bow-fluid">
														<span class="icon icon-bow"></span>
													</div>
													</div>
													
													<?php the_content(); ?>
												</div>
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
						}

						$('#home-people__carousel').magnificPopup({
							delegate: 'a.btn',
							disableOn: 700,
							type: 'inline',
							
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
						});
					});
				})(jQuery);
				</script>
			</div>
		</div>
	</div>
</section>