<?php
wp_enqueue_script( 'nicescroll', get_theme_file_uri( '/assets/js/nicescroll/dist/jquery.nicescroll.min.js' ), array('jquery'), '', false );
get_header();

$terms = get_terms( 'artist_categories', array(
    'hide_empty' => true,
));

set_query_var( 'placeholderPageId', 91 );
get_template_part( 'template-parts/page/content', 'header' );
?>
<section id="artists-list" class="section-padding max-width">
	
<div class="btn-toolbar filters">
	<div data-toggle="buttons" class="btn-group">
		<label class="btn on">
			<input type="radio" name="filter" value="*" checked="checked">
			Wszyscy
		</label>
		<?php foreach ($terms as $term) : ?>
		<label class="btn">
			<input type="radio" name="filter" value="<?php echo $term->slug; ?>">
			<?php echo $term->name; ?>
		</label>
		<?php endforeach; ?>
	</div>
</div>
<div class="container-fluid">
	<div id="artists-grid" class="row">
	<?php while ( have_posts() ) : the_post(); ?>
	<?php $aterms = get_the_terms(get_the_ID(), 'artist_categories'); ?>
	<div class="col-xs-12 col-sm-4 col-md-3 artist-item<?php foreach ($aterms as $t) echo ' '.$t->slug; ?>">
		<div class="content-box" data-mfp-src="#test-popup-<?php the_ID(); ?>">
			<div class="bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
			<div class="gradient-cover"></div>
			<div class="content">
				<h4><?php the_title(); ?></h4>
				<?php foreach ($aterms as $cat) echo '<div class="category">'.$cat->name.'</div>'; ?>
				<div class="excerpt">
					<?php the_excerpt(); ?>
				</div>
			</div>
		</div> 
		<div id="test-popup-<?php the_ID(); ?>" class="black-popup max-width mfp-hide">
		  	<div>
			  	<div class="table">
			  		<div class="cell img-wrap"><?php the_post_thumbnail(); ?></div>
			  		<div class="cell"><div class="content">
			  			<?php the_title('<h3>', '</h3>');
			  			foreach ($aterms as $cat) echo '<div class="category">'.$cat->name.'</div>';
			  			the_content(); ?>
			  		</div></div>
			  	</div>
			</div>
		</div>
	</div>
	<?php endwhile; // End of the loop.?>
	</div>
</div>
<script>
(function($) {
	
	var $grid = jQuery('#artists-grid');
	$grid.isotope({
	  // options
	  itemSelector: '.artist-item',
	  layoutMode: 'masonry'
	});

	$('.filters input').change(function() {
		$(this).parent().siblings().removeClass('on');
		$(this).parent().toggleClass('on');
		var value = $(this).val();
		if ( value != '*' ) value = '.' + value;
		$grid.isotope({ filter: value });
	});

})(jQuery);


(function($) {
	$(document).ready(function() {
        
        $('#artists-grid').magnificPopup({
			delegate: 'div.content-box',
			disableOn: 700,
			type: 'inline',
			closeMarkup: '<button title="Zamknij (Esc)" type="button" class="mfp-close"><i class="icon-close"></i></button>',
			inline: {
			},
			callbacks: {
			    open: function() {
			      // Will fire when this exact popup is opened
			      // this - is Magnific Popup object
			      var container = $(this.content.get()).find('.content');
			      container.niceScroll({
			      	cursorcolor: '#ffe2a680',
			      	cursorborder: '1px solid #ffe2a680',
			      });

			    },
			},
			/*
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false,
			*/
		});

        /*
        
        $('#gallery-grid').magnificPopup({
			delegate: 'a',
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false,
			

			iframe: {
				markup: '<div class="mfp-iframe-scaler">'+
							'<div class="mfp-title"></div>'+
				            '<div class="mfp-close"></div>'+
				            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
				        '</div>',
			},

			callbacks: {
		    	markupParse: function(template, values, item) {

		     		values.title = '<h4>' + item.el.attr('title') + '</h4>' +
		     						'<span class="date">'+item.el.find('.date').text()+'</span>'; 
		    	},
		  	},
		  	closeMarkup: '<button title="Zamknij (Esc)" type="button" class="mfp-close"><i class="icon-close"></i></button>'
        });

        */
	});
})(jQuery);
</script>
</section>
<?php get_footer(); ?>