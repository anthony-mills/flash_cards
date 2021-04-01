require('./vendor/bootstrap');
require('./vendor/jquery');
require('./vendor/editor');
require('./vendor/confirm_modal');
require('./vendor/typeahead');
require('./vendor/bootstrap_tagsinput');
require('./cards/jquery_cycle');
require('./cards/flash_cards');

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
		datumTokenizer: Bloodhound.tokenizers.obj.whitespace("tag"),
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		prefetch: {
			url: "/api/card/tags"
		}		 
	});

	cardTags.initialize();

	$('#tag-input').tagsinput({
		maxTags: 5,
		trimValue: true,
		confirmKeys: [13, 44, 32],
		cancelConfirmKeysOnEmpty: false,
		itemValue: "id",
		itemText: "tag",
		typeaheadjs: {
			name: "cardTags",
			displayKey: "tag",
			source: cardTags.ttAdapter()
		}
	});

	$('form input').keydown(function(event){
		if(event.keyCode == 13) {
	  		event.preventDefault();
	  		return false;
		}
	});

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