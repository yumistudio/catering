<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @version 4.6.3
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$terms = get_the_terms($post->ID, 'tribe_events_cat');
?>
<div class="row">
	<div class="col-xs-12 col-sm-3">
		<!-- Event Meta -->
		<?php do_action( 'tribe_events_before_the_meta' ) ?>
		
		<div class="tribe-events-event-meta">
			<!-- Schedule & Recurrence Details -->
			<div class="tribe-event-schedule-details">
				<?php// echo tribe_events_event_schedule_details() ?>
				<?php tribe_get_template_part( 'modules/meta' ); ?>
			</div>
		</div><!-- .tribe-events-event-meta -->

		<?php do_action( 'tribe_events_after_the_meta' ) ?>

	</div>

	<div class="col-xs-12 col-sm-3 col-lg-3">
		<!-- Event Image -->
		<?php echo tribe_event_featured_image( null, 'medium' ); ?>
	</div>

	<div class="col-xs-12 col-sm-6 col-lg-6">
		<!-- Event Title -->
		<?php do_action( 'tribe_events_before_the_event_title' ) ?>
		<h4 class="tribe-events-list-event-title">
			<?php the_title() ?>
			<a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark"></a>
		</h4>
		<?php do_action( 'tribe_events_after_the_event_title' ) ?>

		<?php if($terms)  foreach ($terms as $cat) echo '<span class="category">'.$cat->name.'</span>'; ?>

	</div>
	<div class="col-xs-12 col-sm-5 col-lg-6">
		<?php tribe_get_template_part( 'modules/ticket-list' ); ?>
	</div>
</div>
