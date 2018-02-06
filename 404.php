<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();
get_template_part( 'template-parts/page/content', 'header' );
?>
<section id="maincontent" class="one-column-section">

	<div class="container-fluid section-wrap section-padding bg-lightgrey">
		
		<div class="col-sm-offset-3 col-xs-12 col-sm-7">
			<h2>Ooops!</h2>
			<h3>Strona nie może zostać odnaleziona.</h3>
			Wygląda na to, że nie możemy znaleźć w podanej lokalizacji...
		
		</div>
		
	</div>
	
</section>


<?php get_footer();
