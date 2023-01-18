<?php

function true_breadcrumbs(){

	// get the current page number
	$page_num = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	
	$separator = '  <svg class="delimiter" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.10387 5.6707L3.55351 0.1357C3.37166 -0.0455414 3.07724 -0.0452367 2.8957 0.136637C2.71429 0.318488 2.71476 0.613073 2.89663 0.794455L8.11661 6.00002L2.89645 11.2056C2.7146 11.387 2.71413 11.6814 2.89551 11.8632C2.98652 11.9544 3.10574 12 3.22497 12C3.34389 12 3.46265 11.9547 3.55349 11.8642L9.10387 6.32931C9.19145 6.24217 9.2406 6.12358 9.2406 6.00002C9.2406 5.87645 9.19131 5.758 9.10387 5.6707Z"/>
									</svg>
								'; //  separator > ... > ...
 
	// if the main page of the site
	if( is_front_page() ){
 
		if( $page_num > 1 ) {
			echo '<a href="' . site_url() . '">
							<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M19.501 8.65999C19.5004 8.65953 19.4999 8.65892 19.4995 8.65846L11.341 0.500337C10.9933 0.152436 10.531 -0.0390625 10.0392 -0.0390625C9.54737 -0.0390625 9.08503 0.152436 8.73713 0.500337L0.582968 8.65434C0.580222 8.65709 0.577323 8.65999 0.574729 8.66274C-0.139384 9.38097 -0.138163 10.5463 0.578238 11.2627C0.90554 11.5901 1.33767 11.7797 1.79986 11.7996C1.81878 11.8015 1.8377 11.8024 1.85677 11.8024H2.18179V17.8061C2.18179 18.9943 3.14859 19.961 4.33679 19.961H7.52863C7.85227 19.961 8.11457 19.6985 8.11457 19.375V14.668C8.11457 14.1259 8.5557 13.6849 9.09785 13.6849H10.9805C11.5226 13.6849 11.9636 14.1259 11.9636 14.668V19.375C11.9636 19.6985 12.2259 19.961 12.5495 19.961H15.7414C16.9297 19.961 17.8964 18.9943 17.8964 17.8061V11.8024H18.1979C18.6895 11.8024 19.1519 11.6109 19.4999 11.2628C20.2171 10.5454 20.2174 9.37792 19.501 8.65999ZM18.6712 10.4343C18.5447 10.5608 18.3766 10.6305 18.1979 10.6305H17.3104C16.9868 10.6305 16.7245 10.8928 16.7245 11.2165V17.8061C16.7245 18.3481 16.2835 18.7891 15.7414 18.7891H13.1355V14.668C13.1355 13.4798 12.1688 12.513 10.9805 12.513H9.09785C7.90949 12.513 6.94269 13.4798 6.94269 14.668V18.7891H4.33679C3.7948 18.7891 3.35366 18.3481 3.35366 17.8061V11.2165C3.35366 10.8928 3.09137 10.6305 2.76773 10.6305H1.89553C1.88638 10.6299 1.87737 10.6294 1.86807 10.6293C1.69351 10.6262 1.52978 10.557 1.4071 10.4341C1.14617 10.1732 1.14617 9.74856 1.4071 9.48748C1.40725 9.48748 1.40725 9.48732 1.4074 9.48717L1.40786 9.48671L9.56599 1.32889C9.69233 1.2024 9.86033 1.13281 10.0392 1.13281C10.2178 1.13281 10.3858 1.2024 10.5123 1.32889L18.6686 9.48503C18.6699 9.48626 18.6712 9.48748 18.6724 9.4887C18.932 9.75008 18.9315 10.1738 18.6712 10.4343Z"/>
							</svg>
						</a>' . $separator . $page_num;
		} else {
			echo 'You are on the home page';
		}
 
	} else { // not the main one
 
		echo '<a class="breadcrumbs-home" href="' . site_url() . '">
						<svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19.501 8.65999C19.5004 8.65953 19.4999 8.65892 19.4995 8.65846L11.341 0.500337C10.9933 0.152436 10.531 -0.0390625 10.0392 -0.0390625C9.54737 -0.0390625 9.08503 0.152436 8.73713 0.500337L0.582968 8.65434C0.580222 8.65709 0.577323 8.65999 0.574729 8.66274C-0.139384 9.38097 -0.138163 10.5463 0.578238 11.2627C0.90554 11.5901 1.33767 11.7797 1.79986 11.7996C1.81878 11.8015 1.8377 11.8024 1.85677 11.8024H2.18179V17.8061C2.18179 18.9943 3.14859 19.961 4.33679 19.961H7.52863C7.85227 19.961 8.11457 19.6985 8.11457 19.375V14.668C8.11457 14.1259 8.5557 13.6849 9.09785 13.6849H10.9805C11.5226 13.6849 11.9636 14.1259 11.9636 14.668V19.375C11.9636 19.6985 12.2259 19.961 12.5495 19.961H15.7414C16.9297 19.961 17.8964 18.9943 17.8964 17.8061V11.8024H18.1979C18.6895 11.8024 19.1519 11.6109 19.4999 11.2628C20.2171 10.5454 20.2174 9.37792 19.501 8.65999ZM18.6712 10.4343C18.5447 10.5608 18.3766 10.6305 18.1979 10.6305H17.3104C16.9868 10.6305 16.7245 10.8928 16.7245 11.2165V17.8061C16.7245 18.3481 16.2835 18.7891 15.7414 18.7891H13.1355V14.668C13.1355 13.4798 12.1688 12.513 10.9805 12.513H9.09785C7.90949 12.513 6.94269 13.4798 6.94269 14.668V18.7891H4.33679C3.7948 18.7891 3.35366 18.3481 3.35366 17.8061V11.2165C3.35366 10.8928 3.09137 10.6305 2.76773 10.6305H1.89553C1.88638 10.6299 1.87737 10.6294 1.86807 10.6293C1.69351 10.6262 1.52978 10.557 1.4071 10.4341C1.14617 10.1732 1.14617 9.74856 1.4071 9.48748C1.40725 9.48748 1.40725 9.48732 1.4074 9.48717L1.40786 9.48671L9.56599 1.32889C9.69233 1.2024 9.86033 1.13281 10.0392 1.13281C10.2178 1.13281 10.3858 1.2024 10.5123 1.32889L18.6686 9.48503C18.6699 9.48626 18.6712 9.48748 18.6724 9.4887C18.932 9.75008 18.9315 10.1738 18.6712 10.4343Z"/>
						</svg>
				</a>' . $separator;
 
		if( is_single() ){ // records (entry)
 
		// the_category( ', ' ); echo $separator; the_title();

		$post_categories = get_the_category();
		
		// this will be our only category assigned to a post
		if( ! empty( $post_categories[0]->cat_ID ) ) {
			echo get_category_parents( $post_categories[0]->cat_ID, true, $separator );
		}
		the_title();
 
		} elseif ( is_page() ){ // pages WordPress 
      
			global $post;
			// if the current page has a parent
				if ( $post->post_parent ) {
				
					$parent_id  = $post->post_parent; // assign to the variable
					$breadcrumbs = array(); 
				
					while ( $parent_id ) {
						$page = get_page( $parent_id );
						$breadcrumbs[] = '<a href="' . get_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a>';
						$parent_id = $page->post_parent;
					}
			
					echo join( $separator, array_reverse( $breadcrumbs ) ) . $separator;
			
				}
		
		echo	'<span class="this-page-name">'; the_title(); echo	'</span>';
		
 
		} elseif ( is_category() ) {
 
			$current_cat = get_queried_object();
			// if parent category exists
			if( $current_cat->parent ) {
				echo get_category_parents( $current_cat->parent, true, $separator );
			}
			single_cat_title();

 
		} elseif( is_tag() ) {
 
			single_tag_title();
 
		} elseif ( is_day() ) { // archives (by day)
 
			echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
			echo '<a href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '">' . get_the_time( 'F' ) . '</a>' . $separator;
			echo get_the_time('d');
 
		} elseif ( is_month() ) { // archives (by month)
 
			echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
			echo get_the_time('F');
 
		} elseif ( is_year() ) { // archives (by years)
 
			echo get_the_time( 'Y' );
 
		} elseif ( is_author() ) { // archives by author
 
			global $author;
			$userdata = get_userdata( $author );
			echo 'Posted by' . $userdata->display_name;
 
		} elseif ( is_404() ) { // if the page doesn't exist
 
			echo 'Error 404';

		} elseif (  is_search() ) { // if the page doesn't exist
 
			echo 'Search page';
 
		}
 
		if ( $page_num > 1 ) { // current page number
			echo ' (' . $page_num . 'page)';
		}
 
	}
 
}