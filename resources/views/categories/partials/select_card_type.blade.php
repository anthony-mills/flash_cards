@php use App\Providers\CardTypes\CardTypes; @endphp

Card Type:
<select name="selected-card_type" class="select-card-type" data-category="{{ $catId ?? '' }}">
    @if ($selectedType == 0)
        <option value="" SELECTED>All</option>
    @endif

    @php $cardTypes = CardTypes::getTypes(); @endphp

    @foreach($cardTypes as $cardType)
        <option value="{{ $cardType['id'] }}" {{ ($cardType['id'] == $selectedType) ? 'SELECTED' : '' }}>
            {{ $cardType['plural'] }}
        </option>
    @endforeach
</select>
