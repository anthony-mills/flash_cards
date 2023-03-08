require('./vendor/bootstrap');
require('./vendor/jquery');
require('./vendor/editor');
require('./vendor/confirm_modal');
require('./vendor/typeahead');
require('./vendor/bootstrap_tagsinput');
require('./cards/jquery_cycle');
require('./cards/flash_cards');
require('./learning_resources/view.js');

const Bloodhound = require('bloodhound-js');

$(document).ready(function(){

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

	var cardTags = new Bloodhound({
		datumTokenizer: Bloodhound.tokenizers.whitespace,
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		prefetch: {
			url: "/api/card/tags"
		}
	});

	cardTags.initialize();

	$('#tag-input').tagsinput({
		maxTags: 5,
		trimValue: true,
		confirmKeys: [13, 44],
		cancelConfirmKeysOnEmpty: false,
		typeaheadjs: {
			name: "cardTags",
			source: cardTags.ttAdapter()
		}
	});

	$('.delete-item').click(function() {
		var delMsg = $(this).data('msg');

		if (delMsg === undefined) {
			delMsg = 'Are you sure to delete this item?';
		}

		$.confirmModal( delMsg, {
			messageHeader: 'Confirm Deletion'
		}, function(el) {
			var deleteLink = $(el).data('delete');

			window.location = deleteLink;
		});
	});
});
