<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zonastudio
 */

get_header();
?>

	<main id="primary" class="site-main">
    <?php if (have_rows('screens')):
      while (have_rows("screens")) : the_row();
        $row_layout = get_row_layout();
        if ($row_layout != "preset_screen"):
          get_template_part('acf-layouts/' . $row_layout);
        endif;
      endwhile;
    else :
      if (have_posts()) {
        while (have_posts()) {
          the_post(); ?>
          <div class="content-page">
            <div class="container">
              <?php echo the_content(); ?>
            </div>
          </div>
        <?php }
      }
    endif;
    ?>
  </main><!-- #site-main -->

<?php
// get_sidebar();
get_footer();
