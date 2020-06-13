require('./vendor/bootstrap');
require('./vendor/jquery');
require('./vendor/editor');
require('./vendor/confirm_modal');
require('./cards/jquery_cycle');
require('./cards/flash_cards');

$(document).ready(function(){
	if ($('.texteditor').length) {
		$('.texteditor').summernote({
			'removeModule': 'autolink',
	        toolbar: [
	          ['style', ['style']],
	          ['font', ['bold', 'underline', 'clear']],
	          ['color', ['color']],
	          ['para', ['ul', 'ol', 'paragraph']],
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