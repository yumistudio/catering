<?php
/**
 * Template Name: Rezerwacja
 *
 * @package WordPress
 * @since vilicon 1.0
 */

if($initDate = filter_input( INPUT_GET, 'date' )) {
	$dt = DateTime::createFromFormat('Y-m-d', $initDate);
	$date = date_i18n( 'l, d F Y', date_timestamp_get($dt), false );
}
else {
	$dt = new DateTime();
	$date = date_i18n( 'l, d F Y', date_timestamp_get($dt), false );
}

if(isset($_POST['date']))
	$date = sanitize_key( $_POST['date'] );

if(isset($_GET['seat_type']))
	$seat_type = sanitize_key( $_GET['seat_type'] );

get_header();

wp_enqueue_script( 'datetimepicker', get_theme_file_uri( '/assets/js/datetimepicker/build/jquery.datetimepicker.full.min.js' ), array( 'jquery' ), '1.0', true );
wp_enqueue_style( 'datetimepicker', get_theme_file_uri( '/assets/js/datetimepicker/build/jquery.datetimepicker.min.css' ) );
wp_enqueue_script( 'validate', get_theme_file_uri( '/assets/js/jquery-validation-1.17.0/dist/jquery.validate.min.js' ), array(), '', true );
wp_enqueue_script( 'validate-pl', get_theme_file_uri( '/assets/js/jquery-validation-1.17.0/dist/localization/messages_pl.min.js' ), array(), '', true );
wp_enqueue_script( 'yumi-reservation', get_theme_file_uri( '/assets/js/make-reservation.js' ), array( 'jquery' ), '1.0', true );
?>
<script>
window.ticketPrice = 0;
</script>

<section id="reservation-form" class="section-padding max-width">
	
	<form id="reservation" action="/">
		<div id="date-selector" class="container-fluid field-row">
			<div class="col-xs-12 col-sm-3">
				<div class="form-label"><h2>Szczegóły</br>rezerwacji</h2></div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div id="#date-selector" class="md-form">
					<i class="icon icon-calendar prefix"></i>
					<input value="<?php echo $date; ?>" id="datePicker1" type="text" class="select form-control" readonly/>
					<input id="reservation_date" name="reservation_date" type="hidden" value="<?php echo $initDate; ?>" />
					<input id="ticket-id" name="ticket-id" type="hidden" value="" />
					<input id="event-id" name="event-id" type="hidden" value="" />
					<label for="datePicker1">Wybierz datę</label>
				</div>

				<div class="md-form">
					<i class="icon icon-clock prefix"></i>
					<input id="reservation_time" name="reservation_time" type="text" class="select form-control w-50"/>
					<i class="icon-dropdown selector-arrow"></i>
					<label for="reservation_time">Wybierz godzinę</label>
				</div>
                
                <div class="md-form">
	                <div id="qty-selector" class="qty-selector women glow">
						<div class="btn-nav decrease"><i class="icon-minus"></i></div>
						<input id="quantity_men" name="quantity_men" type="number" min="1" value="1"/>
						<div class="btn-nav increase"><i class="icon-plus"></i></div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<div class="hint">
					
				</div>
			</div>
		</div>
	</form>

	<div class="separator-line"></div>

	<form id="checkout" class="checkout adq-billing" enctype="multipart/form-data" action="/quote-list/" method="post" name="checkout">
		
		<div class="customer-data">
			<div class="container-fluid field-row">
				<div class="col-xs-12 col-sm-3">
					<div class="label requitred">Twoje Dane</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="text-field glow">
						<input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="Imię" value="" required>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="text-field glow">
						<input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="Nazwisko" value="" required>
					</div>
				</div>
			</div>
			<div class="container-fluid field-row">
				<div class="col-xs-12 col-sm-3"></div>
				<div class="col-xs-12 col-sm-6">
					<div class="text-field glow">
						<input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="Telefon" value="" required>
					</div>
				</div>
			</div>
			<div class="container-fluid field-row">
				<div class="col-xs-12 col-sm-3"></div>
				<div class="col-xs-12 col-sm-6">
					<div class="text-field glow">
						<input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="Email" required>
					</div>
				</div>
			</div>
			<input type="hidden" data-value="Prześlij zapytanie o wycenę" value="Prześlij zapytanie o wycenę" id="quote_place_order" name="adq_quote_place_order" class="btn frame-btn button alt">
		</div>
		<div class="separator-line"></div>
		<div class="container-fluid field-row">
			<div class="col-xs-12 col-sm-3">
				<div class="label requitred">Specjalne życzenia</div>
			</div>
			<div class="col-xs-6 col-sm-6">
				<div class="text-field glow">
					<textarea rows="3" placeholder="Powiedz nam co chciałbyś aby czekało na Ciebie przy stoliku..." id="order_comments" class="input-text" name="order_comments"></textarea>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<div class="hint on"><?php the_field('hint_client_comment'); ?></div>
			</div>	
		</div>
		<div class="container-fluid field-row submit">
			<a id="" class="btn frame-btn glow submit"><span class="frame"></span>Wyślij prośbę o rezerwację</a>
		</div>
	</form>
<?php
while ( have_posts() ) : the_post();


endwhile; // End of the loop.
?>
<script>

</script>
</section>

<?php get_footer(); ?>