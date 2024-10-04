@extends('layouts.admin')
@section("contentMain")
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{isset($team)? "Edit team":"Add new team"}}</h4>
            <p class="card-description">
                Basic form elements
            </p>
            <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{isset($team) ? route('updateTeam',['id'=>$team->id]):route('addTeam')}}">
                @csrf
                @if(isset($team))
                    @method('PATCH')
                @endif
                <div class="form-group">
                    <label for="nameTeam">Name</label>
                    <input type="text" class="form-control" id="nameTeam"  name="nameTeam" placeholder="Name" value="{{isset($team)? $team->name:old('nameTeam')}}">
                </div>
                <div class="form-group">
                    <label for="lastnameTeam">Lastname</label>
                    <input type="text" class="form-control" id="lastnameTeam"  name="lastnameTeam" placeholder="Lastname" value="{{isset($team)? $team->lastname:old('Lastname')}}">
                </div>
                <div class="form-group">
                    <label for="descriptionTeam">Description</label>
                    <input type="text" class="form-control" id="descriptionTeam"  name="descriptionTeam" placeholder="Description" value="{{isset($team)? $team->description:old('descriptionTeam')}}">
                </div>
                @if(isset($team->image))
                    <div class="form-group ">
                        <label for="imageTeam">Image</label>
                        <img alt="slika" width="200" src="{{asset('images/Team/').'/'.$team->image}}">
                    </div>

                @endif
                <div class="form-group">
                    <label for="imageTeam"> New Image</label>
                    <input type="file" class="form-control" id="imageTeam"  name="imageTeam" >
                </div>
                @if(isset($team))
                    @foreach($errors->all() as $e)
                        <p class="alert alert-danger">{{$e}}</p>

                    @endforeach
                @endif
                <button type="submit" class="btn btn-primary btn-Boja">{{isset($team)? "Edit team":"Add new team"}}</button>
                {{--            <button class="btn btn-light">Cancel</button>--}}
            </form>
        </div>
    </div>
@endsection
