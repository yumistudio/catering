<?php
/**
 * Template Name: Strona Kontakt
 *
 * @package WordPress
 * @since vilicon 1.0
 */


get_header();
get_template_part( 'template-parts/page/content', 'header' );
global $post;
?>

<section id="address" class="section-padding max-width">
    <div id="top-content" class="container-fluid">
        <div class="col-xs-12 col-sm-5 address-box">
            <div class="grey-frame address-box-inner">
                <?php get_template_part( 'template-parts/page/content', 'address-box' ); ?>
                <br />
                <div class="item">
                    <i class="icon icon-clock"></i>
                    <?php echo nl2br(ot_get_option( 'openning_hours' )); ?>
                </div>
                <div id="show-map-btn" class="btn">Pokaż mapę</div>
                <div id="social-media-menu" class="social">
                    <a class="btn btn-nav" href="<?php echo ot_get_option( 'facebook_link' ); ?>" target="_blank">
                        <i class="icon-social-facebook"></i>
                    </a>
                    <a class="btn btn-nav" href="<?php echo ot_get_option( 'instagram_link' ); ?>" target="_blank">
                        <i class="icon-social-instagram"></i>
                    </a>
                    <a class="btn btn-nav" href="<?php echo ot_get_option( 'trip_advisor_link' ); ?>" target="_blank">
                        <i class="icon-social-tripadvisor"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-7">
            <div class="gold-frame newsletter-prompt">
                <div class="col-xs-12 col-sm-7 newsletter-form">
                    <h3>Newsletter</h3>
                    <?php the_field('newsletter_prompt'); ?>
                    <?php es_subbox($namefield = "NO", $desc = "", $group = "Public"); ?>
                </div>
                <div class="col-xs-hidden col-sm-5 image-holder" style="background-image: url('<?php the_field('newsletter_bg'); ?>');">
                    <div class="gradient gradient-left-right"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="reservation" class="section-padding">
    <div class="section-header">
        <h2>Zarezerwuj miejsce</h2>
        <div class="section-intro"><?php the_field('reservation-section-subtitle'); ?></div>
    </div>  

    <?php get_template_part( 'template-parts/page/content', 'reservation-buttons' ); ?>
</section>

<div class="side-padding">
    <div class="separator-line"></div>
</div>

<section id="content" class="section-padding contact-form">
    <div class="container-fluid side-padding">
    <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    <?php while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

    <? endwhile; // End of the loop. ?>
    </div>
</section>

<section id="google-map">

    <div id="map">

    </div>

<script src="http://maps.google.com/maps/api/js?callback=initMap&key=AIzaSyCXp5fjmZoq-92myOehWAd_MQ_fcIyAvRQ" async=""></script>
<script>
var getMapCenter = function() {
        
    return {lat: 50.064806, lng: 19.926007};
}
<?php get_template_part( 'template-parts/page/content', 'google-map' ); ?>

(function( $ ) {
    $(function() {
        $('#top-content').equalBoxes();

        $('#show-map-btn').click(function() {
            var target = $('#google-map');
            $('html, body').animate({
              scrollTop: target.offset().top - 70
            }, 1000);
        });
    });
})( jQuery );
</script>
</section>
<?php get_footer(); ?>