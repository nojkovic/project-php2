<div class="{{$class}}">

    @if($label)
        <label for="{{$id?$id:""}}">{{$label}}</label>
   @endif
    <select class="form-select {{$class1}}" aria-label="Default select example" id="{{$id?$id:""}}" name="{{$name}}">
        <option value="-2" hidden>Select option</option>
        <option value="0">Without</option>

    @foreach($options as $o)
            <option value="{{ $o[$value] }}" @selected($selected == $o[$value])> {{ $o[$text]}}</option>
        @endforeach
    </select>

        @if($errors)
            <div class="error-message">{{$errors}}</div>
        @endif
</div>
