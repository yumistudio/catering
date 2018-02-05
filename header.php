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

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <div id="main-navigation" class="">


            <div id="sticky-navigation" class="">
                <a href="/" id="sticky-logo"><i class="icon-s54-logo"></i></a>
                <?php wp_nav_menu( array(
                    'theme_location' => 'top',
                    'menu_id'        => 'sticky-menu',
                    'menu_class'     => 'navigation',
                ) ); ?>
                <div class="reservation-link"><a href="/rezerwacja/">Rezerwacja</a></div>
            </div>
            <div id="mobile-nav-toggle"><i class="icon-menu"></i></div>
            <div id="top-navigation-bar" class="container-fluid">
                <a id="logo-mobile" href="/">
                    <img src="/wp-content/themes/funktional/assets/images/logo.png" />
                </a>
                <div class="social">
                    <a href="<?php echo ot_get_option( 'facebook_link' ); ?>" target="_blank"><i class="icon-social-facebook"></i></a>
                    <a href="<?php echo ot_get_option( 'instagram_link' ); ?>" target="_blank"><i class="icon-social-instagram"></i></a>
                    <a href="<?php echo ot_get_option( 'trip_advisor_link' ); ?>" target="_blank"><i class="icon-social-tripadvisor"></i></a>
                </div>
                <span id="call-us-link">
                    <a href="tel:<?php echo ot_get_option( 'phone' ); ?>">
                        <i class="icon-phone"></i>
                        <?php echo ot_get_option(    'phone' ); ?>
                    </a>
                </span>
                <span class="reservation-link"><a href="/rezerwacja/">Rezerwacja</a></span>
            </div>
            <div id="main-navigation-bar" class="container-fluid">
                <div class="col-xs-3 col-md-2">
                    <a id="logo" href="/">
                        <img src="/wp-content/themes/funktional/assets/images/logo.png" />
                    </a>
                </div>
                <div class="col-xs-9 col-md-10">
                    <div class="menu-wrap">
                        <div class="menu-inner-wrap">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'top',
                            'menu_id'        => 'top-menu',
                            'menu_class'     => 'navigation',
                        ) ); ?>
                        </div>
                    </div>
                </div>
            </div><!-- .container-fluid -->
        </div><!-- .navigation-top -->
        <?php endif; ?>
        <div id="inner-wrap">
        