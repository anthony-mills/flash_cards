Selected Category:
<select name="selected-cat" class="select-card-category">
    @if ($catId == 0)
        <option value="" SELECTED>All</option>
    @endif

    @foreach($catList as $catItem)
        <option value="{{ $catItem->id }}" {{ ($catItem->id == $catId) ? 'SELECTED' : '' }}>
            {{ $catItem->name }}
        </option>
    @endforeach
</select>
