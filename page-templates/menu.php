<?php
/**
 * Template Name: Strona Menu
 *
 * @package WordPress
 * @since vilicon 1.0
 */


get_header();
get_template_part( 'template-parts/page/content', 'header' );
global $post;
?>
<section id="menu-links" class="section-padding max-width">
<div class="container-fluid">
	<div class="col-xs-12 col-sm-6 coctails-card">
		<a class="btn frame-btn download" data-file-id="<?php the_field('coctails_card') ?>">
			<i class="icon-cocktail"></i>
			Pobierz kartę koktajli
		</a>
	</div>
	<div class="col-xs-12 col-sm-6 tapas-card">
		<a class="btn frame-btn download" data-file-id="<?php the_field('tapas_card') ?>">
			<i class="icon-sandwich"></i>
			Pobierz kartę Tapas
		</a>
	</div>
</div>

<div class="container-fluid section-padding">
	<div  id="masonryContainer" class="row">
	<?php while ( have_posts() ) : the_post(); ?>
	<?php foreach( get_field('item_gallery') as $image ) : ?>
	<div class="col-xs-12 col-sm-4 item">
		<div class="menu-item-box">
			<img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" />
			<div class="frame-box content">
				<div>
					<h4><?php echo $image['title']; ?></h4>
				</div>
			</div>
		</div> 
	</div>
	<?php endforeach; ?>
	<?php endwhile; // End of the loop.?>
	</div>
</div>
<script>

var j$ = jQuery;
// initialize Masonry
var $container = j$('#masonryContainer');

$container.masonry({
    // options
    itemSelector : '.item',
});


/*
$container.multipleFilterMasonry({
  itemSelector: '.item',
  filtersGroupSelector:'.filters',
  //selectorType: "list",
});
*/
</script>
</section>
<?php get_footer(); ?>