@extends('layouts.admin')
@section("contentMain")
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{isset($user) ? "Edit User" : "Add User"}}</h4>
        <p class="card-description">
            Basic form elements
        </p>
        <form class="forms-sample" method="POST" action="{{isset($user) ? route("editUser",['id'=>$user->id]) : route('addUser')}}">
            @csrf
            @if(isset($user))
                @method("PATCH")
            @endif
            <div class="form-group">
                <label for="nameUser">Name</label>
                <input type="text" class="form-control" id="nameUser" name="nameUser" placeholder="Name" value="{{isset($user)?$user->name:old('nameUser')}}">
            </div>
            <div class="form-group">
                <label for="lastnameUser">Lastname</label>
                <input type="text" class="form-control" id="lastnameUser"   name="lastnameUser" placeholder="Lastname" value="{{isset($user)?$user->lastname:old('lastnameUser')}}">
            </div>
            <div class="form-group">
                <label for="emailUser">Email address</label>
                <input type="email" class="form-control" id="emailUser" name="emailUser" placeholder="Email" value="{{isset($user)?$user->email:old('emailUser')}}">
            </div>
            <div class="form-group">
                <label for="passwordUser">Password</label>
                <input type="password" class="form-control" id="passwordUser" name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Re-Password</label>
                <input type="password" class="form-control"  placeholder="Re-Password" name="password_confirmation">

            </div>
            <div class="form-group">
                <label for="activeAdmin">Active</label>
                <select class="form-control" id="activeAdmin" name="activeAdmin">

                    @if(isset($user)&& is_object($user))
                        @if($user->active)
                            <option value="1" selected>Active</option>
                            <option value="0" >Deactive</option>

                        @else
                            <option value="1">Active</option>
                            <option value="0" selected>Deactive</option>


                        @endif

                    @else
                        <option value="-1">Choose..</option>
                        <option value="1" >Active</option>
                        <option value="0">Deactive</option>
                    @endif

                </select>
            </div>
            <div class="form-group">
                <label for="rolAdmin">Role</label>
                <select class="form-control" id="rolAdmin" name="rolAdmin">

                    @if(isset($user))
                        @foreach($role as $r)
                            @if($user->id_role==$r->id)
                            <option value="{{$r->id}}" selected>{{$r->role}}</option>
                            @else
                                <option value="{{$r->id}}">{{$r->role}}</option>
                            @endif

                        @endforeach

                    @else
                        <option value="chc">Choose..</option>
                        @foreach($role as $r)
                        <option value="{{$r->id}}">{{$r->role}}</option>
                        @endforeach

                    @endif
                </select>
            </div>

            @if($errors)
                @foreach($errors->all() as $e)
                    <p class="alert alert-danger">{{$e}}</p>

                @endforeach
            @endif



            <button type="submit" class="btn btn-primary btn-Boja" >{{isset($user) ? "Edit User" : "Add User"}}</button>
{{--            <button class="btn btn-light">Cancel</button>--}}
        </form>
    </div>
</div>
@endsection
