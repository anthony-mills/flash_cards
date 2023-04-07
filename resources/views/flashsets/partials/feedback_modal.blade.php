<div class="modal fade" id="feedback-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" dusk="leave-card-feedback">Leave Card Feedback</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">
                    Do you like this card? Hate it? Do you believe it's incorrect?
                </p>

                <p class="text-center">
                    Leave your feedback below:
                </p>

                <form id="card-feedback">
                    {!! Form::token() !!}

                    <div class="form-group">
                        {!! Form::textarea(
                            'feedback',
                            null,
                            [
                                'dusk' => 'card-feedback-field',
                                'class' => 'form-control',
                                'placeholder' => 'Message ( Max 250 Characters )',
                                'maxlength' => 250
                            ])
                        !!}
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="save-feedback" class="btn btn-primary" dusk="save-feedback">
                    Send
                </button>
            </div>
        </div>
    </div>
</div>
