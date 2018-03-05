<?php
global $post;
$event_id = get_the_ID();
$tPost = get_field('relation', $event_id);
$ticket = wc_get_product( $tPost->ID );
$buyTicketURL = get_site_url()."/checkout/?add-to-cart={$tPost->ID}&event-id=".$event_id;
?>
<div class="buy-ticket">
	<div class="col-xs-5 col-sm-3 labels">
		<div class="label qty">
			<span>Wybierz ilość</span>
			<span>(<?php echo $ticket->get_price(); ?>ZŁ/BILET)</span>
		</div>

		<div class="label info">
			<!-- Cennik Biletów <i class="icon-info"></i>-->
		</div>
	</div>
	<div class="col-xs-7 col-sm-3 form">
		<div class="qty-selector right-col glow">
			<div class="btn-nav decrease"><i class="icon-minus"></i></div>
			<input name="quantity" type="number" min="1" value="1" />
			<div class="btn-nav increase"><i class="icon-plus"></i></div>
		</div>
		<div class="buy-ticket-btn right-col">
			<a class="buy-link btn frame-btn glow" data-buy-url="<?php echo $buyTicketURL; ?>" href="#">Kup bilet</a>
		</div>
		<div class="separator"><span>lub</span></div>
	</div>
	
	<div class="col-xs-12 col-sm-6 col-md-5 reserve">
		<a class="btn frame-btn reserve-btn glow make-reservation" href="/rezerwacja/?date=<?php echo substr($post->EventStartDate, 0, 10)?>">Bilet z rezerwacją miejsc siedzących</a>
	</div>
</div>

