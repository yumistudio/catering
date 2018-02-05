<?php
/**
 * Template Name: Strona Oferty
 *
 * @package WordPress
 * @since vilicon 1.0
 */

wp_enqueue_script( 'parallax', get_theme_file_uri( '/assets/js/parallax.js-1.5.0/parallax.min.js' ), array(), '', true );
get_header();
get_template_part( 'template-parts/page/content', 'header' );

global $post;

while ( have_posts() ) : the_post(); ?>
    
<div class="container-fluid section_padding max-width-767 center">
    <?php the_content(); ?>

    <div class="center top-gap">
        <a href="#" class="btn frame-btn download" data-file-id="<?php the_field('offer_pdf'); ?>">
            Pobierz ofertę
        </a>
    </div>

</div>

<section id="parallax-1" class="section-padding">
    <div class="parallaxed-window" data-parallax="scroll" data-image-src="<?php the_field('image_offer_1'); ?>" style="min-height: 350px;">
    </div>
</section>

<div class="section_padding max-width-767 center">
    
    <h2>Przestrzenie sceny54</h2>
    <?php the_field('rooms_section_text'); ?>

</div>

<div id="spaces-section" class="max-width top-gap">
    <div class="container-fluid image-row">
        <div class="col-xs-12 col-md-3">
            <div class="reservation-btn">
                <div>
                    <i class="icon-ticket"></i>
                </div>
                <span class="text-white">300 osób</span><br />
                wersja standing cocktail party
            </div>
        </div>
        <div class="col-xs-12 col-md-6 responsive-img">
            <img src="<?php the_field('plan_image', 212); ?>" />
        </div>
        <div class="col-xs-12 col-md-3">
            <div class="reservation-btn">
                <div>
                    <i class="icon-ticket"></i>
                </div>
                aż do
                <span class="text-white">120 osób</span>
                w wersji siedzącej
            </div>
        </div>
    </div>
</div>

<div class="separator-line"></div>

<div class="section_padding max-width-767 center">
    
    <h2>Cocktaile</h2>
    <?php the_field('cocktails_section_text'); ?>

</div>

<div class="max-width top-gap image-section offer">
    <div class="container-fluid">
<?php        
    if( have_rows('cocktails_section_items') ):
        while ( have_rows('cocktails_section_items') ) : the_row(); ?>
            <div class="col-xs-12 col-md-3" style="height: 300px;">
                <div class="image-holder" style="height: 100%; background-image: url(<?php the_sub_field('image'); ?>)"></div>
                <div class="gradient-cover"></div>
                <div class="content">
                    <div class="name"><?php the_sub_field('name'); ?></div>
                    <?php the_sub_field('price'); ?>
                </div>
            </div>
        <?php endwhile;
endif; ?>
    </div>
</div>

<div class="separator-line"></div>

<section id="cusine-section">
    
    <div class="section_padding max-width-767 center">    
        <h2>Kulinaria</h2>
        <?php the_field('cusine_section_text'); ?>
    </div>

    <div class="max-width top-gap image-section offer">
        <div class="container-fluid">
        <?php        
            if( have_rows('cusine_section_items') ):
                while ( have_rows('cusine_section_items') ) : the_row(); ?>
                    <div class="col-xs-12 col-md-4" style="height: 300px;">
                        <div class="image-holder" style="height: 100%; background-image: url(<?php the_sub_field('image'); ?>)"></div>
                        <div class="gradient-cover"></div>
                        <div class="content">
                            <div class="name"><?php the_sub_field('name'); ?></div>
                            <?php the_sub_field('price'); ?>
                        </div>
                    </div>
                <?php endwhile;
        endif; ?>
        </div>
    </div>
</section>

<div class="center section-padding">
    <a href="#" class="btn frame-btn download" data-file-id="<?php the_field('offer_pdf'); ?>">
        Pobierz ofertę
    </a>
</div>

<section id="parallax-2" class="section-padding">
    <div class="parallaxed-window" data-parallax="scroll" data-image-src="<?php the_field('image_offer_2'); ?>" style="min-height: 350px;">
    </div>
</section>

<section id="contact-section" class="max-width">
    <h1 class="center">Zapraszamy do kontaktu</h1>
    <div class="container-fluid section-padding">
        
        <div class="section-title frame-box">
            <div>
                <h3>Paweł Pulka</h3>
                <div class="date">General manager</div>
                <div><i class="icon-phone" style="line-height: 1em;"></i><?php echo ot_get_option( 'phone' ); ?></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-lg-offset-1 col-lg-4">
            <p><?php the_Field('contac_prompt_text'); ?></p>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3 responsive-img">
            <img src="<?php the_Field('contact_image'); ?>" />
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>