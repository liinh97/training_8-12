@foreach ($input as $key => $value)
    <div class="form-group comps-input-container">
        <label for="{{ $key }}">{{ $value['title'] }}</label>
        @if($value['select'])
            <select class="form-control" id="exampleFormControlSelect1">
                @foreach($value['select_item'] as $item)
                    <option>{{ $item }}</option>
                @endforeach
            </select>
        @else
            <input type="{{ $value['type'] }}" class="form-control" placeholder="{{ $value['placeholder'] }}" name="{{ $key }}" id="{{ $key }}">
        @endif
    </div>
@endforeach