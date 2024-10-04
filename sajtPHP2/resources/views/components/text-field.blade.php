@if($label)
    <label for="{{$id}}">{{$label}}</label>
@endif
<input type="{{$type}}" class="{{$class}}" id="{{$id}}" name="{{$name}}" value="{{$value}}"  >

@if($hint)
    <p>{{$hint}}</p>
@endif

@if($error)
    <div class="error-message">{{$error}}</div>
@endif
