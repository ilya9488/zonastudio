<?php

/**
 * @package zonastudio
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
	while (have_posts()) :
		the_post();
		if (is_front_page()) {
			get_template_part('template-parts/content-frontpage');
		} else {
			get_template_part('template-parts/content', get_post_type());
		}

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();