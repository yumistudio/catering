<?php
/**
 * Template Name: Galeria
 *
 * @package WordPress
 * @since vilicon 1.0
 */

get_header();

?>
<section id="gallery" class="padding-section pattern-section divider-bottom">
	<h1 class="text-dark text-center">Galeria</h1>

<?php
$heights = array(
	0 => 'grid-item--height-reg',
	1 => 'grid-item--height-small',
	2 => 'grid-item--height-reg',
	3 => 'grid-item--height-reg',
	4 => 'grid-item--height-small',
	5 => 'grid-item--height-small',
	6 => 'grid-item--height-small',
);
$widths = array(
	0 => '',
	1 => 'grid-item--width-double',
	2 => '',
	3 => '',
	4 => '',
	6 => '',
	5 => 'grid-item--width-double',
);

$gallery = get_field('gallery');
$all_terms = array();
foreach ($gallery as $key => $image) {
	if ( $term = get_field('kategoria', $image['ID']))
		$all_terms[$term->slug] = $term->name;

	$gallery[$key]['term'] = $term;
}
?>
	<div class="btn-toolbar filters">
		<div data-toggle="buttons" class="btn-group">
			<label class="btn on">
				<input name="filter" value="*" checked="checked" type="radio">
				Wszystkie
			</label>
			<?php foreach ($all_terms as $slug => $name) : ?>
			<label class="btn on">
				<input name="filter" value="<?php echo $slug; ?>" type="radio">
				<?php echo $name; ?>
			</label>
			<?php endforeach; ?>
		</div>
	</div>	
	
	<div class="grid-wrap max-width">
		<div id="gallery-grid" class="grid image">
			<?php foreach ($gallery as $key => $image) : //print_r($image); ?>
			<div class="grid-item photoswipe-item <?php echo $widths[$key]; ?> <?php echo $heights[$key]; ?> <?php echo $image['term']->slug; ?>">
				<a href="<?php echo $image['sizes']['yumi-gallery-item']; ?>" data-size="1920x1080" class="" style="background-image: url('<?php echo $image['sizes']['yumi-gallery-item']; ?>');">
					<div class="overlay"><i class="icon-search"></i></div>
				</a>
	
			</div>
			<?php endforeach; // End of the loop. ?>
		</div>
    </div>
    <div id="gallery__load-more">
        <a href="#" class="btn btn-secondary-outline">Załaduj więcej zdjęć</a>
    </div>
<script>
(function($) {
	$(document).ready(function() {
		var $grid = jQuery('#gallery-grid');
		$grid.isotope({
		  // options
		  itemSelector: '.grid-item',
		  layoutMode: 'masonry'
		});

		$('.filters input').change(function() {
			$(this).parent().siblings().removeClass('on');
			$(this).parent().toggleClass('on');
			var value = $(this).val();
			if ( value != '*' ) value = '.' + value;
			$grid.isotope({ filter: value });
		});
	});
})(jQuery);
</script>
</section>
<?php get_footer(); ?>