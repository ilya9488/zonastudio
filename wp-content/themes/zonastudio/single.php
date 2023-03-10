<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Zonastudio
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="single-post-content">
		<div class="container-xl container-fluid">
			<div class="row d-block">
	
				<?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', 'single');
	
				// the_post_navigation(
					// 	array(
					// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'zonastudio' ) . '</span> <span class="nav-title">%title</span>',
					// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'zonastudio' ) . '</span> <span class="nav-title">%title</span>',
					// 	)
				// );
				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
				// endif;
	
					endwhile; // End of the loop.?>
				</div>
			</div>
		</section>

		<?php get_template_part( 'acf-layouts/posts' ); ?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
