<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Flash Card specific configuration options
    |--------------------------------------------------------------------------
    */
    'results_per_page' => 10,
    'card_categories' => [
    	'delete_confirm' => 'Are you sure you would like to delete this category? Any cards the category contains will also be deleted.'
    ],
    'card_feedback' => [
        'validation_rules' => [
            'card_id' => 'required|numeric',
            'feedback' => 'string|required|max:255'
        ]
    ]
];
