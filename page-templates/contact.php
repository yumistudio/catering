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
<section id="contact" class="cf padding-section">
    <div class="max-width">
        <div class="col-md-3 no-gutters">
            <h2>Informacje</h2>
            <div class="info">
                <div class="info__icon">
                    <i class="icon icon-map-outline"></i>
                </div>
                <div class="info__text">
                    Dolnych Młynów 10/2H</br>31-400 Kraków
                </div>
            </div>
            <div class="info">
                <div class="info__icon">
                    <i class="icon icon-phone-outline"></i>
                </div>
                <div class="info__text">
                    12 686 55 22
                </div>
            </div>
            <div class="info">
                <div class="info__icon">
                    <i class="icon icon-mail-outline"></i>
                </div>
                <div class="info__text">
                    kontakt@cargo.pl
                </div>
            </div>

            <div class="social">
                <ul>
                    <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                    <li><a href="#"><i class="icon icon-social-instagram"></i></a></li>
                    <li><a href="#"><i class="icon icon-social-tripadvisor"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-1 no-gutters">
            <h2>Napisz do nas</h2>
            <?php echo do_shortcode('[contact-form-7 id="31" title="Contact form 1"]'); ?>
            <form>
                <div class="md-form">
                    <input type="text" id="defaultForm-name" class="form-control">
                    <label for="defaultForm-name">Imię i nazwisko</label>
                </div>
                <div class="md-form">
                    <input type="text" id="defaultForm-email" class="form-control">
                    <label for="defaultForm-email">Adres e-mail</label>
                </div>
                <div class="md-form">
                    <input type="text" id="defaultForm-phone" class="form-control">
                    <label for="defaultForm-phone">Telefon</label>
                </div>
                <div class="md-form">
                    <textarea type="text" id="form8" class="md-textarea" style="height: 100px"></textarea>
                    <label for="form8">Wiadomość</label>
                </div>
                <div class="md-form text-right">
                    <button type="submit" class="btn btn-secondary">Wyślij</button>
                </div>
            </form>
        </div>
        <div class="col-md-3 col-md-offset-1 no-gutters">
            <h2>Godziny otwarcia</h2>
            <div class="col-md-6 no-gutters mr-top">
                <div class="info">
                    <div class="info__icon">
                        <i class="icon icon-clock-outline"></i>
                    </div>
                    <div class="info__text">
                        Pon – Śr</br>Czw – So</br>Niedziela
                    </div>
                </div>
            </div>
            <div class="col-md-6 no-gutters mr-top">
                <div class="info">
                    <div class="info__text pull-right">
                        <strong>12.00 - 22.30</strong></br><strong>12.00 - 23.30</strong></br><strong>12.00 - 22.30</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/page/content', 'reservation' ); ?>
<?php get_footer(); ?>