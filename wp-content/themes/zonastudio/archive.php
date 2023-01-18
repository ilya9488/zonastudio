<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zonastudio
 */

get_header();
?>

	<main id="primary" class="site-main">

	
	<?php 
		// breadchrambs ( for categories page )
		if (have_rows('screens', get_queried_object())):
				while (have_rows("screens", get_queried_object())) : the_row();
					$row_layout = get_row_layout();
					if ($row_layout != "preset_screen"):
						get_template_part('acf-layouts/' . $row_layout);
					endif;
				endwhile;
			endif;
	 ?>
	 
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_category( get_query_var('cat') )->slug);
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
			// loadmore btn
			get_template_part( 'loadmore' );
			// the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
