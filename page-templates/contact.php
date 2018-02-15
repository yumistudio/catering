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
        <div class="col-md-3">
            <h2>Informacje</h2>
            <div><span><i class="icon icon-map-outline"></i>Dolnych Młynów 10/2H </br>31-400 Kraków</span></div>
            <div><span><i class="icon icon-phone-outline"></i>12 686 55 22</span></div>
            <div><span><i class="icon icon-mail-outline"></i>kontakt@cargo.pl</span></div>
        </div>
        <div class="col-md-4 col-md-offset-1">
            <h2>Napisz do nas</h2>
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
        <div class="col-md-3 col-md-offset-1">
            <h2>Godziny otwarcia</h2>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/page/content', 'reservation' ); ?>
<?php get_footer(); ?>