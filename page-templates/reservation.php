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
			<div class="col-xs-12 col-sm-5">
				<div class="md-form">
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
				
				<div class="md-form"><i class="icon icon-group prefix"></i>
					<label for="datePicker1" class="active">Ilość osób</label>
					<div id="qty-men-selector" class="qty-selector">
						<div class="btn-nav decrease"><i class="icon-minus"></i></div>
						<input id="quantity_men" name="quantity_men" class="form-control" type="text" min="0" value="0"/>
						<div class="btn-nav increase"><i class="icon-plus"></i></div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-offset-1 col-sm-3">
				<div class="hint">Rezerwacja stolika jest możliwa co najmniej 6 godzin przed planowaną wizytą.</div>
			</div>	
		</div>

		<div class="separator-line"></div>

		<div id="date-selector" class="container-fluid field-row">
			<div class="col-xs-12 col-sm-3">
				<div class="form-label"><h2>Twoje</br>dane</h2></div>
			</div>
			<div class="col-xs-12 col-sm-5">
				<div class="md-form">
					<i class="icon icon-person prefix"></i>
					<input id="name" type="text" class="form-control"/>
					<label for="name">Imię i nazwisko</label>
				</div>
				<div class="md-form">
					<i class="icon icon-mail prefix"></i>
					<input id="name" type="text" class="form-control"/>
					<label for="name">Adres e-mail</label>
				</div>
				<div class="md-form">
					<i class="icon icon-phone prefix"></i>
					<input id="name" type="text" class="form-control"/>
					<label for="name">Telefon</label>
				</div>
			</div>
		</div>

		<div class="separator-line"></div>

		<div id="date-selector" class="container-fluid field-row">
			<div class="col-xs-12 col-sm-3">
				<div class="form-label"><h2>Dodatkowe</br>uwagi</h2></div>
			</div>
			<div class="col-xs-12 col-sm-5">
				<div class="md-form">
				<i class="prefix"></i>
                    <textarea type="text" id="form8" class="md-textarea" style="height: 100px"></textarea>
                    <label for="form8">Specjalne prośby (np. butelka szampana)</label>
                </div>
			</div>
		</div>

		<div class="container-fluid field-row submit text-center">
			
			<div class="col-sm-11"><a id="" class="btn btn-secondary">Wyślij</a></div>
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