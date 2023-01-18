<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zonastudio
 */

?>

<div class="col-12 text-center"><h2 class="block-title" data-bg-text="<?php the_sub_field('text_bg'); ?>"><?php the_sub_field('title'); ?></h2></div>
      <?php $my_posts = get_posts( array('numberposts' => 9, 'post_type' => 'post', 'suppress_filters' => true, )); 
        global $post; $i = 0; foreach( $my_posts as $post ){ setup_postdata( $post ); ?>
        <div class="col-md-4 col-6 px-md-10" <?php if (have_rows('fields')): while (have_rows("fields")) : the_row(); if( get_sub_field('project_photo') ): ?> data-toggle="modal" data-target="#modal_<?= $i; ?>" data-whatever="@getbootstrap" <?php else: ?> title="Brak zdjęć projektu." data-photo="false" <?php endif; ?> <?php endwhile; else: ?> title="Brak zdjęć projektu." data-photo="false" <?php endif; ?>>
          <div class="wrap" style="background-image: url(<?php if(get_the_post_thumbnail()){ echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-full')[0]; }else{ if (have_rows('fields')): while (have_rows("fields")) : the_row(); $images = get_sub_field('project_photo'); if( $images): echo esc_url($images[0]['sizes']['post-full']); else: echo get_template_directory_uri().'/static/img/bez-zdjęć.jpg'; endif; endwhile; endif; }?> );">
            <div class="text-wrap hover-wrap">
              <h4 class="title"><?php the_title(); ?></h4>
              <?php if (have_rows('fields')): while (have_rows("fields")) : the_row(); ?>
                <?php if(get_sub_field('apartament_mkv')):?>
                  <div class="delimer"></div>
                  <span class="apartament">Apartament <?php the_sub_field('apartament_mkv');?> mkv</span>
                <?php endif;?>
              <?php endwhile; endif; ?>
              <div class="line-1"></div><div class="line-2"></div><div class="line-3"></div><div class="line-4"></div>
            </div>
          </div>
        </div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
		// if ( is_singular() ) :
			// the_title( '<h1 class="entry-title">', '</h1>' );
		// else :
			// the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		// endif;
			//if ( 'post' === get_post_type() ) : 
		?>
		<?php // endif; ?>

	<h2><?php the_title(); ?></h2>

	<?php if (have_rows('fields')): while (have_rows("fields")) : the_row(); ?>
		<?php if(get_sub_field('apartament_mkv')):?>
			<?php the_sub_field('apartament_mkv');?>
		<?php endif;?>
	<?php endwhile; endif; ?>
	
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	<?php the_content(); ?>

	<div class="entry-content">
		<?php
		// the_content(
		// 	sprintf(
		// 		wp_kses(
		// 			/* translators: %s: Name of current post. Only visible to screen readers */
		// 			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'zonastudio' ),
		// 			array(
		// 				'span' => array(
		// 					'class' => array(),
		// 				),
		// 			)
		// 		),
		// 		wp_kses_post( get_the_title() )
		// 	)
		// );

		// wp_link_pages(
		// 	array(
		// 		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'zonastudio' ),
		// 		'after'  => '</div>',
		// 	)
		// );
		?>
	</div><!-- .entry-content -->

	<!-- <footer class="entry-footer"> -->
		<?php // zonastudio_entry_footer(); ?>
	<!-- </footer> --><!-- .entry-footer -->
</article><!-- #post-<?php // the_ID(); ?> -->
