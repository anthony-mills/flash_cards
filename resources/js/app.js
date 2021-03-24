require('./vendor/bootstrap');
require('./vendor/jquery');
require('./vendor/editor');
require('./vendor/confirm_modal');
require('./vendor/bootstrap_tagsinput');
require('./cards/jquery_cycle');
require('./cards/flash_cards');

$(document).ready(function(){

	$('.tag-input').tagsinput({
		maxTags: 5,
		trimValue: true,
		confirmKeys: [13, 44],
		cancelConfirmKeysOnEmpty: false
	});

	if ($('.texteditor').length) {
		$('.texteditor').summernote({
			'removeModule': 'autolink',
	        toolbar: [
	          ['font', ['bold', 'underline', 'clear']],
	          ['para', ['ul', 'ol']],
	          ['insert', ['link']]
	        ]			
		});
	}

	$('.delete-item').click(function(e) {
		e.preventDefault();              
		$.confirmModal( 'Are you sure to delete this item?', {
			messageHeader: 'Confirm Deletion'
		}, function(el) {
			var deleteLink = $(el).data('delete');
			
			window.location = deleteLink;
		});
	}); 

});