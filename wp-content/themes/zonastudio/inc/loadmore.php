<?php
// loadmore
add_action( 'wp_enqueue_scripts', function() {

	wp_register_script( 'trueajax', get_stylesheet_directory_uri() . '', array(), time(), true );
	wp_localize_script(
		'trueajax',
		'currentUrl',
		array(
			'ajax_url' => admin_url( 'admin-ajax.php' )
		)
	);
	wp_enqueue_script( 'trueajax' );

});

add_filter( 'script_loader_tag', 'my_script_loader_tag', 10 ,2 );
function my_script_loader_tag( $tag, $handle ){
	if ( $handle == 'trueajax' ) {
			return str_replace( '<script', '<script type="application/json"', $tag );
	}
	return $tag;
}

add_action( 'wp_ajax_loadmore', 'true_loadmore' );
add_action( 'wp_ajax_nopriv_loadmore', 'true_loadmore' );

function true_loadmore() {

	$paged = ! empty( $_POST[ 'paged' ] ) ? $_POST[ 'paged' ] : 1;
	$paged++;

	$args = array(
		'paged' => $paged,
		'post_status' => 'publish'
	);

	$taxonomy = ! empty( $_POST[ 'taxonomy' ] ) ? $_POST[ 'taxonomy' ] : '';
	$term_id = ! empty( $_POST[ 'term_id' ] ) ? $_POST[ 'term_id' ] : 0;

	if( $taxonomy && $term_id ) {

		$args[ 'tax_query' ] = array(
			array(
				'taxonomy' => $taxonomy,
				'terms' => $term_id
			)
		);
	}

	query_posts( $args );

	ob_start();

	while( have_posts() ) : the_post();

		// get_template_part( 'template-parts/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
		get_template_part( 'template-parts/content', get_category( get_query_var('cat') )->slug );

	endwhile;

	$posts = ob_get_contents();
	ob_get_clean();

	ob_start();
	the_posts_navigation();
	$pagination = ob_get_contents();
	ob_get_clean();

	echo json_encode( array(

		'posts' => $posts,
		'pagination' => str_replace( admin_url( 'admin-ajax.php' ), $_POST[ 'pagenumlink' ], $pagination )

	) );
	die;
}
