@extends('layouts.admin')
@section("contentMain")
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{isset($menu)? 'Edit menu': "Add menu"}}</h4>
            <p class="card-description">
                Basic form elements
            </p>
            <form class="forms-sample" method="POST" action="{{isset($menu) ? route('updateMenus',['id'=>$menu->id]) : route('addMenus')}}">
                @csrf

                @if(isset($menu))
                    @method("PATCH")
                @endif
                <div class="form-group">
                    <label for="nameMenu">Menu</label>
                    <input type="text" class="form-control" id="nameMenu"  name="nameMenu" placeholder="Name" value="{{isset($menu)?$menu->menu:old('nameMenu')}}">
                </div>
                <div class="form-group">
                    <label for="hrefMenu">Link</label>
                    <input type="text" class="form-control" id="hrefMenu"  name="hrefMenu" placeholder="Href" value="{{isset($menu)?$menu->href:old('hrefMenu')}}">
                </div>
                @if($errors)
                    @foreach($errors->all() as $e)
                        <p class="alert alert-danger">{{$e}}</p>

                    @endforeach
                @endif
                <button type="submit" class="btn btn-primary btn-Boja">{{isset($menu)? 'Edit menu': "Add menu"}}</button>
                {{--            <button class="btn btn-light">Cancel</button>--}}
            </form>
        </div>
    </div>
@endsection
