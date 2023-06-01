{{dd($options)}}
<select name="myselect">
    @foreach ($options as $key => $value)
        <option value="{{ $key }}"
        @if ($key == old('myselect', $model->option))
            selected="selected"
        @endif
        >{{ $value }}</option>
    @endforeach
</select>