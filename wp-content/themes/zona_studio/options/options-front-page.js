jQuery(document).ready(function ($) {
	var custom_uploader;
	$('#upload_image_button').click(function (e) {
		e.preventDefault();
		//If the uploader object has already been created, reopen the dialog
		if (custom_uploader) {
			custom_uploader.open();
			return;
		}
		//Extend the wp.media object
		custom_uploader = wp.media.frames.file_frame = wp.media({
			title: 'Wybierz obrazy dla głownego slidera',
			button: {
				text: 'Wybierz zaznaczone',
			},
			multiple: true,
		});
		//When a file is selected, grab the URL and set it as the text field's value
		custom_uploader.on('select', function () {
			attachment = custom_uploader.state().get('selection').toJSON();
			imagesIds = attachment.map(el => el.id);
			if (Array.isArray(imagesIds)) {
				$('#front_page_images').empty();
				imagesIds.forEach(image => {
					$('#front_page_images').append(`<input id="selected_images-${image}" type="hidden" name="front_page_image[]" value="${image}"/>`);
				});
				$('#selected_image_presenter').empty();
				attachment.forEach(element => {
					console.log(element);
					var thumbnail = element.sizes.thumbnail.url;
					$('#selected_image_presenter').append(`<div id="img-${element.id}"><div>`);
					$(`#img-${element.id}`).addClass('image-presenter__entry').css('background-image', `url('${thumbnail}')`);
				});
			}
			custom_uploader.close();
		});
		//Open the uploader dialog
		custom_uploader.open();
	});
});

jQuery(function ($) {
	var custom_uploader;
	$('#upload_logo_button').click(function (e) {
		e.preventDefault();
		//If the uploader object has already been created, reopen the dialog
		if (custom_uploader) {
			custom_uploader.open();
			return;
		}
		//Extend the wp.media object
		custom_uploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose Image',
			button: {
				text: 'Choose Image',
			},
			multiple: false,
		});
		//When a file is selected, grab the URL and set it as the text field's value
		custom_uploader.on('select', function () {
			attachment = custom_uploader.state().get('selection').first().toJSON();
			$('#upload_logo').val(attachment.url);
		});
		//Open the uploader dialog
		custom_uploader.open();
	});
});
