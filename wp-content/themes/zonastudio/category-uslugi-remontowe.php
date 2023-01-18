<?php
/**
 * The template for displaying studio-projektowe pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zonastudio
 */

get_header();
?>

	<main id="primary" class="site-main category-uslugi-remontowe">

    <?php 
      // breadchrambs ( for categories page )
      if (have_rows('screens', get_queried_object())):
        while (have_rows("screens", get_queried_object())) : the_row();
          $row_layout = get_row_layout();
          if ($row_layout != "preset_screen" && $row_layout === "breadcrumbs"):
            get_template_part('acf-layouts/' . $row_layout); 
      endif; endwhile; endif; ?>

    <section class="remontowe-last-posts home-last-posts">
      <div class="container-xl">
        <div class="row">
          <?php if (have_rows('screens', get_queried_object())): while (have_rows("screens", get_queried_object())) : the_row(); if(get_row_layout() === 'tytul_strony'): ?>
            <div class="col-12 text-center">
              <h2 class="block-title" data-bg-text="<?php if(get_sub_field('text_bg')): the_sub_field('text_bg'); else: echo 'portfolio'; endif; ?>"><?php if(get_sub_field('title')): the_sub_field('title'); else: echo 'Nasze Projekty'; endif; ?></h2>
            </div>
          <?php endif; endwhile; endif; ?>

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
        </div>
      </div>
    </section>

    <?php if (have_rows('screens', get_queried_object())): while (have_rows("screens", get_queried_object())) : the_row();
        $row_layout = get_row_layout();
        switch ($row_layout) {
          case 'remontowe_spelniamy_wasze_marzenia':
          // case 'spelniamy_wasze_marzenia':
          // case 'projekt_to_proces':
              get_template_part('acf-layouts/' . $row_layout);
              // echo '<p>'.$row_layout.'</p>';
            break;
        }
        // echo '<p>'.$row_layout.'</p>';
     endwhile; endif; ?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
