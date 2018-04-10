<section id="home-reservation" class="padding-section">
	<div class="container-fluid max-width">
		<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8">
			<div class="section-header">
				<h1>
					<span class="claim"><?php the_field('oc_section_subtitle'); ?></span>
					<?php the_field('oc_section_title'); ?>
				</h1>
			</div>
			<div id="home-reservation__cta" class="text-center">
				<a class="phone" href="tel: <?php echo ot_get_option( 'phone' ); ?>"><i class="icon icon-phone"></i><?php echo ot_get_option( 'phone' ); ?></a>
				<div class="or">lub</div>
				<a href="#" class="btn btn-primary"><?php the_field('oc_button_text'); ?></a>
			</div>
		</div>
	</div>
</section>