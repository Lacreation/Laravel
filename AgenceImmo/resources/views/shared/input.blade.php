@php
    $name ??= '';
    $type ??= 'text';
    $class ??= null;
    $label ??= ucfirst($name);
    $value ??= '';
@endphp

<div @class(["form-group", $class])>
    <label for="{{ $name }}">{{$label}}</label>
    <input class="form-control @error($name) is-invalid @enderror" type="{{$type}}" id="{{$name}}" name="{{$name}}" value="{{old($name, $value)}}">

    @error($name)
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
</div>