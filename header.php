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
        
        <?php if ( has_nav_menu( 'top' ) ) : ?>
        <header id="homepage-header">
            <div id="main-navigation" class="">


                <div id="sticky-navigation" class="">
                    <div id="main-nav" class="container">
                    <div class="row">
                        <div id="main-nav__left" class="col-md-5 text-right no-gutters">
                            <nav>
                                <ul>
                                    <li><a href="#">O nas</a></li>
                                    <li><a href="#">Menu & deli</a></li>
                                    <li><a href="#">Galeria</a></li>
                                </ul>
                            </nav>
                            </div>
                        <div id="main-nav__logo" class="col-md-2">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/images/logo-cargo-nav-white.png" alt="logo cargo"/>
                        </div>
                        <div id="main-nav__right" class="col-md-5 text-left no-gutters">
                            <nav>
                                <ul>
                                    <li><a href="#">Rezerwacja</a></li>
                                    <li><a href="#">Oferta</a></li>
                                    <li><a href="#">Kontakt</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    </div>
                </div>

                <div id="mobile-nav-toggle"><i class="icon-menu"></i></div>

                <div id="top-navigation-bar" class="container-fluid">
                    <div class="container no-gutters">
                        <div id="top-navigation-bar__address" class="pull-left"><i class="icon icon-map-outline"></i>Dolnych Młynów 10/2H, Kraków</div>
                        <div id="top-navigation-bar__phone" class="pull-right"><i class="icon icon-phone-outline"></i><a href="tel: 12 686 55 22"><span itemprop="telephone">12 686 55 22</span></a></div>
                    </div>
                </div>
                <div id="main-nav" class="container">
                   <div class="row">
                       <div id="main-nav__left" class="col-md-5 text-right">
                           <nav>
                               <ul>
                                   <li><a href="#">O nas</a></li>
                                   <li><a href="#">Menu & deli</a></li>
                                   <li><a href="#">Galeria</a></li>
                               </ul>
                           </nav>
                        </div>
                       <div id="main-nav__logo" class="col-md-2">
                           <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/images/logo-cargo-nav.png" alt="logo cargo"/>
                       </div>
                       <div id="main-nav__right" class="col-md-5 text-left">
                            <nav>
                               <ul>
                                   <li><a href="#">Rezerwacja</a></li>
                                   <li><a href="#">Oferta</a></li>
                                   <li><a href="#">Kontakt</a></li>
                               </ul>
                           </nav>
                       </div>
                   </div>
                </div><!-- .container -->
            </div><!-- .navigation-top -->

            <div id="homepage-header__welcome">
                <h1>#GRILLWITHIT</h1>
                <p>
                    Sezonowana wołowina,</br>
                    świeże owoce morza</br> 
                    i delikatesy.</br>
                </p>
                <a href="#" class="btn">Sprawdź menu</a>
            </div>
            <div id="homepage-header__reservation">
                <a href="#" class="btn">Rezerwacja</a>
            </div>
            <div class="next-section"><i class="icon-arrow-down"></i></div>
        </header>
        <?php endif; ?>

        <div id="inner-wrap">
        