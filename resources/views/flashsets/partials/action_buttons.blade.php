<div class="row justify-content-center">

    <div class="card-action-icon">
        <a href="/" title="Exit cards and return home.">
            <img class="home_icon action-icon" src="/img/home.png"/>
        </a>
    </div>

    @hasanyrole('user|admin')
    <div class="card-action-icon">
        <a href="#" class="save-card-for-review" title="Save the card for future review">
            <img src="/img/mark_card_for_review.png" class="action-icon"/>
        </a>
    </div>
    @endrole

    <div class="card-action-icon">
        <a href="#" data-bs-toggle="modal" data-bs-target="#feedback-modal" dusk="open-feedback-modal" title="Leave Card Feedback">
            <img src="/img/feedback.png" class="action-icon"/>
        </a>
    </div>

</div>

<div class="card-button-action-message alert alert-success justify-content-center" role="alert"></div>
