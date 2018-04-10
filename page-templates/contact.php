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
                Grupa Scandale Royal
            </p>
            <p>
                Pajda Klesyk Spółka Jawna
            </p>
            <p>
                REGON: 122627960
            </p>
            <p>
                NIP: 6762457712
            </p>
		</div>
		<div class="col-md-offset-1 col-md-3">
		    <h2>
			    <span class="claim">Tu jesteśmy</span>
			    Informacje
		    </h2>
            <div class="info">
                <div class="info__icon">
                    <i class="icon icon-phone"></i>
                </div>
                <div class="info__text">
                    <?php echo str_replace("\r\n", '<br />', ot_get_option( 'address' )); ?>
                </div>
            </div>
		</div>
		<div class="col-md-offset-1 col-md-4">
		    <h2>
			    <span class="claim">Napisz do nas</span>
			    Wyślij wiadomość
		    </h2>
		</div>
	</div>
</section>
<section id="contact" class="cf padding-section">
    <div class="container">
        <div class="col-sm-5 col-md-3 no-gutters">
            <h2>Informacje</h2>
            <div class="info">
                <div class="info__icon">
                    <i class="icon icon-phone"></i>
                </div>
                <div class="info__text">
                    <?php echo str_replace("\r\n", '<br />', ot_get_option( 'address' )); ?>
                </div>
            </div>
            <div class="info">
                <div class="info__icon">
                    <i class="icon icon-phone"></i>
                </div>
                <div class="info__text">
                    <?php echo ot_get_option( 'phone' ); ?>
                </div>
            </div>
            <div class="info">
                <div class="info__icon">
                    <i class="icon icon-mail-outline"></i>
                </div>
                <div class="info__text">
                    <a href="<?php echo ot_get_option( 'email' ); ?>"><?php echo ot_get_option( 'email' ); ?></a>
                </div>
            </div>

            <div class="social">
                <ul>
                    <li><a href="<?php echo ot_get_option( 'facebook_link' ); ?>" target="_blank"><i class="icon icon-social-facebook"></i></a></li>
                    <li><a href="<?php echo ot_get_option( 'instagram_link' ); ?>" target="_blank"><i class="icon icon-social-instagram"></i></a></li>
                    <li><a href="<?php echo ot_get_option( 'trip_advisor_link' ); ?>" target="_blank"><i class="icon icon-social-tripadvisor"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="col-sm-5 col-md-3 col-sm-offset-1 no-gutters hidden-md hidden-lg">
            <h2>Godziny otwarcia</h2>
            <div class="col-xs-6 no-gutters mr-top">
                <div class="info">
                    <div class="info__icon">
                        <i class="icon icon-clock-outline"></i>
                    </div>
                    <div class="info__text">
                    <?php foreach(explode("\n", ot_get_option( 'openning_hours' )) as $item) :
                        $lineArr = explode('|', $item);
                    ?>
                        <?php echo $lineArr[0]. '</br>'; ?>
                    <?php endforeach; ?>   
                    </div>
                </div>
            </div>
            <div class="col-xs-6 no-gutters mr-top mr-bottom">
                <div class="info">
                    <div class="info__text pull-right">
                        <?php foreach(explode("\n", ot_get_option( 'openning_hours' )) as $item) :
                            $lineArr = explode('|', $item);
                        ?>
                        <strong><?php echo $lineArr[1]. '</br>'; ?></strong>
                        <?php endforeach; ?>   
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-1 col-lg-4 no-gutters hidden-xs hidden-sm">
            <h2>Napisz do nas</h2>
            <?php echo do_shortcode('[contact-form-7 id="31" title="Contact form 1"]'); ?>
        </div>

        <div class="col-sm-12 no-gutters hidden-md hidden-lg">
            <h2>Napisz do nas</h2>
            <?php echo do_shortcode('[contact-form-7 id="31" title="Contact form 1"]'); ?>
        </div>                    

        <div class="col-sm-5 col-md-3 col-lg-3 col-lg-offset-1 no-gutters hidden-xs hidden-sm">
            <h2>Godziny otwarcia</h2>
        
            <div class="col-md-6 no-gutters mr-top">
                <div class="info">
                    <div class="info__icon">
                        <i class="icon icon-clock-outline"></i>
                    </div>
                    <div class="info__text">
                    <?php foreach(explode("\n", ot_get_option( 'openning_hours' )) as $item) :
                        $lineArr = explode('|', $item);
                    ?>
                        <?php echo $lineArr[0]. '</br>'; ?>
                    <?php endforeach; ?>   
                    </div>
                </div>
            </div>
            <div class="col-md-6 no-gutters mr-top">
                <div class="info">
                    <div class="info__text pull-right">
                        <?php foreach(explode("\n", ot_get_option( 'openning_hours' )) as $item) :
                            $lineArr = explode('|', $item);
                        ?>
                        <strong><?php echo $lineArr[1]. '</br>'; ?></strong>
                        <?php endforeach; ?>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/page/content', 'reservation' ); ?>
<?php get_footer(); ?>