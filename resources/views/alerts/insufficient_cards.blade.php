@php use App\Providers\CardTypes\CardTypes; @endphp

<div class="card dark-card">
    <div class="card-header">Insufficient {{ CardTypes::nameById($cardType, true) }}</div>

    <div class="card-body">
        <div class="card-content-area">
            <p>ERROR: At least two or more {{ CardTypes::nameById($cardType, true) }} are required to continue.</p>
        </div>
    </div>
</div>
