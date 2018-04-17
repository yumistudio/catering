<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<?php
wp_head();
?>

</head>

<body <?php body_class(); ?>>
    <div id="ajax-loader">
        <svg width="40px"  height="40px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-dual-ring" style="background: none;"><circle cx="50" cy="50" ng-attr-r="{{config.radius}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.stroke}}" ng-attr-stroke-dasharray="{{config.dasharray}}" fill="none" stroke-linecap="round" r="40" stroke-width="3" stroke="#ffe2a6" stroke-dasharray="62.83185307179586 62.83185307179586" transform="rotate(155 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1.2s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg>
    </div>
    <div id="outer-wrap">
        
            <!-- Header main -->
            <?php 
                if (is_front_page() == TRUE) {
            ?>
        
        <header class="header-main">
            <?php 
                get_template_part('template-parts/navigation/navigation', 'main');
            ?>        
            <div class="header-main__logo text-center">
                <img id="logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo-white.png" alt="Catering Logo"/>
            </div>  
            <div class="header-main__welcome text-center">
                <h1>
                    <span class="claim"><?php the_field('claim'); ?></span>
                    <?php the_title(); ?>
                </h1>
                <a href="/oferta/" class="btn btn-primary">Sprawdź ofertę</a>
            </div>

            <div class="header-main__plate">
                <div class="container parallax-img-container">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/plate.png" class="parallax-move"/>
                </div>
            </div>
            <div class="header-main__scroll next-section-scroll">
                <i class="icon icon-navigate-down"></i>
            </div>
            <!-- Header subpage -->
            <?php
                } else {
                    get_template_part('template-parts/navigation/navigation', 'secondary');
                }
            ?>
        </header>   
        
        
        <div class="phone-fixed">
            <a href="#" data-mfp-src="#popup-phone"><i class="icon icon-phone"></i></a>
            <div id="popup-phone" class="max-width mfp-hide">
                <div class="col-md-offset-3 col-md-6">
                    <div class="phone-popup__wrapper">
                        <button title="Zamknij (Esc)" id="mfp-close" type="button" class="mfp-close"><i class="icon-close"></i></button>
                        <div>
                            <div class="table">
                                <div class="content">
                                    <div class="col-md-offset-1 col-md-10 text-center">
                                        <h1>
                                            <span class="claim">Oddzwonimy do Ciebie</span>
                                            Zostaw numer
                                        </h1>
                                        
                                        <div class="container text-center cf">
                                            <div class="col-md-12">
                                                <div class="bow bow-fluid">
                                                    <span class="icon icon-bow"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container text-center cf">
                                            <div class="col-md-12">
                                                <div class="md-form">
                                                    <input name="yourPhone" class="form-control" aria-required="true" aria-invalid="false" type="text">
                                                    <label for="yourPhone">Telefon</label>
                                                </div>
                                                <a href="#" class="btn btn-primary">Zamów rozmowę</a>
                                                <a href="<?php bloginfo( 'url' )?>/kontakt" class="btn">lub Wyślij wiadomość</a>
                                            </div>
                                        </div>

                                        <div class="container text-center cf">
                                            <div class="col-md-12">
                                                <div class="disclaimer">
                                                <div class="col-md-2">
                                                    <i class="icon icon-shield"></i>
                                                </div>
                                                <div class="col-md-9">
                                                    <p>
                                                        Twoje dane są bezpieczne i nie zostaną sprzedane </br>
                                                        lub wykorzystane w celach marketingowych.
                                                    </p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            (function($) {
                $(document).ready(function() {
                    var setUpNiceScroll = function() {
                        var container = $(this.content.get()).find('.content');
                        
                        container.niceScroll({
                            cursorcolor: '#ffe2a680',
                            cursorborder: '1px solid #ffe2a680',
                        });
                        
                        container.getNiceScroll().resize();
                    }
                    $('.phone-fixed').magnificPopup({
                        disableOn: 700,
                        delegate: 'a',
                        type: 'inline',
                        closeMarkup: '<button title="Zamknij (Esc)" type="button" class="mfp-close"><i class="icon-close"></i></button>',
                        mainClass: 'mfp-fade phone-popup',
                        removalDelay: 160,
                        gallery:{ 
                            enabled:false
                        },
                        callbacks: {
                            open: setUpNiceScroll,
                            change: setUpNiceScroll,
                        },
                        /*
                        preloader: false,
                        fixedContentPos: false,
                        */
                    });
                });
            })(jQuery);
        </script>
    <div id="inner-wrap">
        