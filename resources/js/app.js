require('./vendor/bootstrap');
require('./vendor/jquery');
require('./vendor/editor');
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
});