<section id="offer-slider" class="padding-section bg-subpage">
	<div class="container text-center">
		<h2>
			<span class="claim">W naszej ofercie</span>
			Zobacz także
		</h2>
	</div>
	<div class="container text-center cf no-gutters">
		<div class="col-md-offset-3 col-md-6">
			<div class="bow bow-fluid bow-space">
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
				<div id="offer__carousel" class="swiper-container carousel-two">
					<div class="swiper-wrapper">
                    <?php $query = new WP_Query( array(
                        'post_type' => 'page',
                        'posts_per_page' => 6,
                        'post_parent' => 97)
                    );
                            
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="section-info__box swiper-slide">
                            <div class="section-info__box__holder" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                <div class="wrapper">
                                    <div class="title">
                                        <h3><?php the_title(); ?></h3>
                                        <div class="hidden">
                                            <?php the_field('short_description'); ?>
                                            <a class="btn" href="<?php echo get_permalink(get_the_ID()); ?>">Zobacz warianty</a>
                                        </div>
                                        <div class="border-bottom">
                                            <img class="icon" src="<?php bloginfo( 'template_url' ); ?>/assets/images/bow.png"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
				</div>
				<!-- Initialize Swiper -->
				<script>
				(function($) {
					$(document).ready(function() {
						var swiper = new Swiper('#offer__carousel', {
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
						});
					});
				})(jQuery);
				</script>
			</div>
		</div>
	</div>
</section>