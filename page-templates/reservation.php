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
	$initDate = date_i18n( 'Y-m-d', date_timestamp_get($dt), false );
}

if(isset($_POST['date']))
	$date = sanitize_key( $_POST['date'] );

if(isset($_GET['seat_type']))
	$seat_type = sanitize_key( $_GET['seat_type'] );

get_header();
get_template_part( 'template-parts/page/content', 'header' );

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
				<div class="label required">Data</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="text-field glow hint-icon">
					<input value="<?php echo $date; ?>" id="datePicker1" type="text" class="select" size="40" readonly/>
					<input id="reservation_date" name="reservation_date" type="hidden" value="<?php echo $initDate; ?>" />
					<input id="ticket-id" name="ticket-id" type="hidden" value="" />
					<input id="event-id" name="event-id" type="hidden" value="" />
					<i class="icon-calendar hint-icon"></i>
					<i class="icon-navigate-down selector-arrow"></i>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<div class="hint"></div>
			</div>
		</div>

		<div class="separator-line"></div>


		<div id="quantity-selector" class="container-fluid field-row">
			<div class="col-xs-12 col-sm-3">
				<div class="label required">Liczba Osób</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div id="qty-men-selector" class="qty-selector women glow">
					<div class="btn-nav decrease"><i class="icon-minus"></i></div>
					<input id="quantity_women" name="quantity_women" type="number" min="1" value="1"/>
					<div class="btn-nav increase"><i class="icon-plus"></i></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<div class="hint">
					<div>
						KOSZT BIETÓW:
					</div>
					<div>
						<span class="price"></span>
						<span class="tickets"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid field-row">	
			<div class="col-xs-12 col-sm-3">
				<div class="label required">Rodzaj Miejsca siedzącego</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<input type="radio" name="seat_type" value="table" <?php if (!$seat_type) echo 'checked="checked"';?>/>
				<div class="btn btn-switch btn-switch-type glow">
					<i class="icon-table"></i>
					Stolik
					<span>darmowy</span>
				</div>
			</div>

			<div class="col-xs-12 col-sm-3 switch-container">
				<input type="radio" name="seat_type" value="lodge" <?php if ($seat_type) echo 'checked="checked"';?>/>
				<div id="lodge-btn" class="btn btn-switch btn-switch-type glow">
					<i class="icon-lodge"></i>
					Loża
					<span class="price">420zł</span>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<div class="hint on"><?php the_field('hint_seat_type'); ?></div>
			</div>
		</div>
		<div class="container-fluid field-row">
			<div id="zone-selector">
				<div class="col-xs-12 col-sm-3">
					<div class="label required">Preferowana strefa</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<ul class="switch">
						<li class="btn-wrap">
							<input type="radio" name="attribute_pa_strefa" value="A" class="required"/>
							<input type="radio" data-type="lodge" name="variation_id" value="232" />
							<input type="radio" data-type="table" name="variation_id" value="236" />
							<div class="btn btn-switch btn-switch-zone glow">A</div>
						</li>
						<li class="btn-wrap">
							<input type="radio" name="attribute_pa_strefa" value="B" />
							<input type="radio" data-type="lodge" name="variation_id" value="233" />
							<input type="radio" data-type="table" name="variation_id" value="237" />
							<div class="btn btn-switch btn-switch-zone glow">B</div>
						</li>
						<li class="btn-wrap">
							<input type="radio" name="attribute_pa_strefa" value="C" />
							<input type="radio" data-type="lodge" name="variation_id" value="234" />
							<input type="radio" data-type="table" name="variation_id" value="238" />
							<div class="btn btn-switch btn-switch-zone glow">C</div>
						</li>
						<li class="btn-wrap">
							<input type="radio" name="attribute_pa_strefa" value="D" />
							<input type="radio" data-type="lodge" name="variation_id" value="235" />
							<input type="radio" data-type="table" name="variation_id" value="239" />
							<div class="btn btn-switch btn-switch-zone glow">D</div>
						</li>
					</ul>
					<img class="venue-plan" src="<?php the_field('plan_image'); ?>">
				</div>
				<div class="col-xs-12 col-sm-3">
					<div class="hint"></div>
				</div>
			</div>
		</div>
		<div class="container-fluid field-row">
			<div class="col-xs-12 col-sm-3">
				<div class="label">Początek rezerwacji</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="text-field glow hint-icon">
					<input id="reservation_time" name="reservation_time" type="text" class="select"/>
					<i class="icon-clock hint-icon"></i>
					<i class="icon-navigate-down selector-arrow"></i>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<div class="hint"></div>
			</div>
		</div>
	</form>

	<form id="checkout" class="checkout adq-billing" enctype="multipart/form-data" action="/quote-list/" method="post" name="checkout">
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
		<div class="separator-line"></div>
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
		<div class="summary">
			<div class="container-fluid">
				<div class="col-xs-12 col-sm-3">
					<div class="label">Podsumowanie</div>
				</div>
				<div class="col-xs-6 col-sm-6">
					<dl>
						<dd>Data:</dd>
						<dt id="date-val"></dt>
					</dl>
					<dl>
						<dd>Godzina rozpoczęcia:</dd>
						<dt id="hour-val"></dt>
					</dl>
					<dl>
						<dd>Ilość osób:</dd>
						<dt id="qty-val"></dt>
					</dl>
					<dl>
						<dd>Rodzaj miejsca:</dd>
						<dt id="type-val"></dt>
					</dl>
					<dl>
						<dd>Peferowana Strefa:</dd>
						<dt id="zone-val"></dt>
					</dl>
					<div class="separator-line"></div>
					<dl>
						<dd>Całkowity koszt:</dd>
						<dt id="cost-val"></dt>
					</dl>
				</div>
				<div class="col-xs-16 col-sm-3">
					<div class="hint on"><?php the_field('hint_summary'); ?></div>
				</div>
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