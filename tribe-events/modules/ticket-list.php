<?php
global $post;
$event_id = get_the_ID();
//print_r($post);
//print_r($tPost);
$tPost = get_field('relation', $event_id);
$ticket = wc_get_product( $tPost->ID );
$buyTicketURL = get_site_url()."/checkout/?add-to-cart={$tPost->ID}&event-id=".$event_id;

//print_r($ticket);
?>
<?php if( $ticket ) : ?>
<div class="buy-ticket">
	<a class="buy-link btn frame-btn glow" href="<?php echo $buyTicketURL; ?>">Kup bilet</a>
	<br /><br /><br />
	<a class="btn glow" href="/rezerwacja/?date=<?php echo substr($post->EventStartDate, 0, 10)?>">Miejsce + Bilet</a>
</div>
<?php endif; ?>
