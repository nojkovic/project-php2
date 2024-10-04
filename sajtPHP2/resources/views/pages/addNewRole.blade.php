@extends('layouts.admin')
@section("contentMain")
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{isset($role) ? "Edit Role" : "Add Role"}}</h4>
            <p class="card-description">
                Basic form elements
            </p>
            <form class="forms-sample" method="POST" action="{{isset($role)? route('updateRole',['id'=>$role->id]) : route('addRole')}}">
                @csrf
                @if(isset($role))
                    @method("PATCH")
                @endif
                <div class="form-group">
                    <label for="nameRole">Name</label>
                    <input type="text" class="form-control" id="nameRole" name="nameRole" placeholder="Name" value="{{isset($role)?$role->role:old('nameRole')}}">
                </div>
                @if(isset($role))
                    @foreach($errors->all() as $e)
                        <p class="alert alert-danger">{{$e}}</p>

                    @endforeach
                @endif
                <button type="submit" class="btn btn-primary btn-Boja" >{{isset($role) ? "Edit Role" : "Add Role"}}</button>

            </form>
        </div>
    </div>
@endsection
