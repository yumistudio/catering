<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.3
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();
$tPost = get_field('relation', $event_id);
$terms = get_the_terms($event_id, 'tribe_events_cat');

//print_r($ticket);

global $eventsPageId;
?>
<div id="header-image" >
	<div class="overlay"></div>
</div>
<section id="single-event" class="section-padding">
<div id="" class="container-fluid max-width">

	<?php while ( have_posts() ) :  the_post(); ?>
	<div class="col-xs-12 col-sm-4">
		<!-- Event featured image, but exclude link -->
		<?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>
	</div>
	<div class="col-xs-12 col-sm-5">
		<?php foreach ($terms as $cat) echo '<span class="category">'.$cat->name.'</span>'; ?>
	</div>
	<div class="col-xs-12 col-sm-3">
		Udostępnij:
	</div>
	<div class="col-xs-12 col-sm-8">

		<?php the_title( '<h1 class="tribe-events-single-event-title">', '</h1>' ); ?>

		<!-- Event meta -->
		<?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
		<?php tribe_get_template_part( 'modules/meta' ); ?>
		<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
	</div>
	<div class="col-xs-12 col-lg-8">

		<?php if( $tPost ) : ?>

		<div class="separator-line"></div>

		<div class="buy-ticket-container top">

			<h3>Weź udział</h3>
		
			<?php tribe_get_template_part( 'modules/ticket' ); ?>

		</div>
		<?php endif; ?>

	</div> <!-- #post-x -->
</div>
<div class="container-fluid max-width">
		<div class="col-xs-12 col-sm-8 clear-left">
			<!-- Event content -->
			<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
			<div class="tribe-events-single-event-description tribe-events-content">
				<?php the_content(); ?>
			</div>
			<!-- .tribe-events-single-event-description -->
			<?php //do_action( 'tribe_events_single_event_after_the_content' ) ?>
		</div>
		<div class="col-xs-6 col-sm-offset-1 col-sm-3">
			<?php if( have_rows('lineup', $event_id) ) : ?>
				<h4>Line-up</h4>
				<ul>
				<?php while( have_rows( 'lineup', $event_id ) ) : the_row(); ?>
    				<li>
						<?php the_sub_field('start'); ?>
						<?php echo ($end = the_sub_field('end') ? $end : ''); ?>
						<br />
						<?php the_sub_field('title'); ?>
					</li>
    			<?php endwhile; ?>
				</ul>
			<?php endif; ?>	
		</div>
	<?php endwhile; ?>
</div>
<?php if ($artists = get_field('artists_in_event', $event_id)) : ?>
<div id="event-artists" class="container-fluid max-width">
	
	<div class="section-title frame-box">
		<div>
			<h2>Artyści Sceny54</h2>
		</div>
	</div>		
	<div class="col-xs-12 col-sm-offset-3 col-sm-9">
		<?php foreach($artists as $a) : ?>
			<div class="box row">
				<div class="col-xs-12 col-sm-3 image-holder" style="background-image: url(<?php echo get_the_post_thumbnail_url($a->ID); ?>);"></div>
				<div class="col-xs-12 col-sm-offset-3 col-sm-8">
					<h4><?php echo $a->post_title; ?></h4>
					<?php foreach (get_the_terms($a->ID, 'artist_categories') as $cat) echo '<div class="category">'.$cat->name.'</div>'; ?>
					<div class="excerpt">
						<?php echo apply_filters('the_content', $a->post_content); ?>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<?php endif; ?>

<?php if( $tPost ) : ?>
<div class="separator-line"></div>
<div class="buy-ticket-container bottom">
	<h3>Weź udział</h3>
	<h4><?php the_title(); ?></h4>
	<?php tribe_get_template_part( 'modules/meta' ); ?>
	<?php tribe_get_template_part( 'modules/ticket' ); ?>
</div>
<?php endif; ?>
<div class="separator-line"></div>
<?php
$fEvents = tribe_get_events( array(
 'posts_per_page' => 3,
 'eventDisplay'   => 'custom',
 'featured'       => true,
 'start_date' 	  => date( 'Y-m-d H:i:s' )
 ) );
?>
<?php if( $fEvents ) : ?>
<div id="featured-events" class="events-list max-width">
	<h2 class="center">Polecane Wydarzenia</h2>
	<div class="row">
	<?php foreach($fEvents as $post) : global $post;
		$eventMeta = get_post_meta($post->ID);
		$dt = DateTime::createFromFormat('Y-m-d H:i:s', $eventMeta['_EventEndDate'][0]);
		?>
		<div class="col-xs-12 col-sm-4 event">
			<a class="event-content" href="<?php echo get_permalink($post->ID); ?>">
				<span class="date"><?php echo date_i18n( 'l, d M Y @ G:i', date_timestamp_get($dt), false ); ?></span>
				<span class="title"><?php echo the_title(); ?></span>
				<span class="more-lnk">Weź Udział</span>
				<?php foreach (get_the_terms($post->ID, 'tribe_events_cat') as $cat) echo '<span class="category">'.$cat->name.'</span>'; ?>
			</a>
		</div>
		
	<?php endforeach; ?>
	</div>
</div>
<script>
(function( $ ) {
	$(function() {
		$('#featured-events .row').equalBoxes('.event-content');
	});
})( jQuery );
</script>
<?php endif; ?>
</section>
