jQuery( function( $ ) {

	// $( '#true_get_id' ).submit( function() {

	// 	var form = $(this);

	// 	$.ajax({
	// 		type : 'POST',
	// 		url : currentUrl.ajax_url,
	// 		data : form.serialize(),
	// 		beforeSend : function( xhr ) {
	// 			form.find('button').text( 'Sending a request...' );
	// 		},
	// 		success : function( data ){

	// 			$('#result').html(data);
	// 			form.find('button').text( 'Find out the title' );
	// 		}
	// 	});
	// 	return false;
	// });


	var button = $( '#loadmore a' ),
			paged = button.data( 'paged' ),
			maxPages = button.data( 'max_pages' );

	// $( window ).scroll( function() {
	// 	if( $(document).scrollTop() > ( $( document ).height() - 1000 ) {
	// 		// ajax ...
	// 	}
	// } );

	button.click( function( event ) {
		event.preventDefault();
		if( ! $( 'body' ).hasClass( 'loading' ) ) {
			$.ajax({
				type : 'POST',
				url : currentUrl.ajax_url,
				data : {
					paged : paged,
					action : 'loadmore',
					taxonomy : button.data( 'taxonomy' ),
					term_id : button.data( 'term_id' ),
					pagenumlink : button.data( 'pagenumlink' )
				},
				dataType: 'json',
				beforeSend : function( xhr ) {
					button.text( 'ŁADOWANIE...' );
					$( 'body' ).addClass( 'loading' );
				},
				success : function( data ){
					//console.log(data);
					paged++;
					button.parent().before( data.posts );
					$( '#pagination' ).html( data.pagination );
					button.text( 'POKAŻ WIĘCEJ' );
					if( paged == maxPages ) {
						// button.remove();
						button.addClass('no-more-posts').text( 'wszystkie posty są załadowane' );
					}
					$( 'body' ).removeClass( 'loading' );
					// height = width
					$('.home-last-posts .wrap').each(function () {
						$(this).css('height', $(this).width())
					})
					siteSliderUpdate()
					// siteSlider.update()
				}
			});
		}
	} );
} );