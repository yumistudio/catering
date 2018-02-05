<?php
/**
 * Template Name: Artyści
 *
 * @package WordPress
 * @since vilicon 1.0
 */

get_header();

get_template_part( 'template-parts/page/content', 'header' );
?>

<section id="menu-list" class="section-padding side-padding">
	
<?php

$posts = get_posts( array('post_type' => 'menu-item', 'posts_per_page' => -1, ) );
print_r($posts);

while ( have_posts() ) : the_post();
print_r($post);

endwhile; // End of the loop.
?>
</section>
<?php get_footer(); ?>