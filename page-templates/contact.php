<?php
/**
 * Template Name: Strona Kontakt
 *
 * @package WordPress
 * @since vilicon 1.0
 */


get_header();

global $post;
?>
<section class="contact bg-subpage">
	<div class="container text-center">
		<h1>
			<span class="claim">Catering Scandale</span>
			Kontakt
		</h1>
	</div>
	<div class="container text-center cf no-gutters">
		<div class="col-md-12">
			<div class="bow bow-fluid bow-space">
				<span class="icon icon-bow"></span>
			</div>
		</div>
	</div>
	<div class="container cf col-pd-bottom">
		<div class="col-md-3">
		    <h2>
			    <span class="claim">Grupa Scandale</span>
			    Dane firmy
            </h2>
            <p>
            <?php
                echo str_replace("\r\n", "</p>\n<p>", ot_get_option( 'company_data' ) );
            ?>
            </p>
		</div>
		<div class="col-md-offset-1 col-md-3">
		    <h2>
			    <span class="claim">Tu jesteśmy</span>
			    Informacje
		    </h2>
            <div class="info">
                <div class="info__icon mr-4">
                    <i class="icon icon-location"></i>
                </div>
                <div class="info__text">
                    <?php echo str_replace("\r\n", ", ", ot_get_option( 'address' )); ?>
                </div>
            </div>
            <div class="info">
                <div class="info__icon mr-9">
                    <i class="icon icon-phone"></i>
                </div>
                <div class="info__text">
                    <?php foreach( explode("\r\n", ot_get_option( 'information_phones' )) as $phone)
                        echo '<p><a href="tel: '.$phone.'">'.$phone.'</a></p>';
                    ?>
                </div>
            </div>
            <div class="info">
                <div class="info__icon mr-12">
                    <i class="icon icon-mail"></i>
                </div>
                <div class="info__text">
                    <p><a href="mailto: <?php echo ot_get_option( 'email' ); ?>">
                        <?php echo ot_get_option( 'email' ); ?>
                    </a></p>
                </div>
            </div>
		</div>
		<div class="col-md-offset-1 col-md-4">
		    <h2>
			    <span class="claim">Napisz do nas</span>
			    Wyślij wiadomość
            </h2>
            <?php echo do_shortcode('[contact-form-7 id="31" title="Contact form 1"]'); ?>
		</div>
	</div>
</section>
<?php 
    get_template_part('template-parts/parts/order');
?>
<?php get_footer(); ?>