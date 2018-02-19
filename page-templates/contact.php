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
                    <?php echo str_replace("\r\n", '<br />', ot_get_option( 'address' )); ?>
                </div>
            </div>
            <div class="info">
                <div class="info__icon">
                    <i class="icon icon-phone-outline"></i>
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
            
            <?php foreach(explode("\n", ot_get_option( 'openning_hours' )) as $item) :
                    $lineArr = explode('|', $item);
            ?>
            <div class="col-sm-6 text-right">
                <span class="day"><?php echo $lineArr[0]; ?></span>
            </div>
            <div class="col-sm-6 text-left">
                <span class="hours"><?php echo $lineArr[1]; ?></span>
            </div>
            <?php endforeach; ?>
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