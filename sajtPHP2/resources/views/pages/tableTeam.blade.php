@extends('layouts.admin')

@section("contentMain")
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Teams</h4>
            <p class="card-description">

            </p>
            <div class="table-responsive">
                @if(isset($teams) && !$teams->isEmpty())
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Number</th>
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teams as $i=>$t)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$t->name}}</td>
                                <td>{{$t->lastname}}</td>
                                <td>{{$t->description}}</td>
                                <td><img src="{{asset('images/Team')}}/{{$t->image}}" alt="pict"/></td>
                                <td><a href="{{route('editTeam',['id'=>$t->id])}}"><button type="submit" class="btn btn-warning">Edit</button></a></td>
                                <td>
                                    <form action="{{route('deleteTeam',['id'=>$t->id])}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>


                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="alert alert-danger">There are currently no team</p>
                @endif
            </div>
            <a href="{{route('newTeam')}}"><button type="button" class="btn btn-secondary btn-rounded btn-fw myClass1">Add new team</button></a>
        </div>
    </div>
@endsection
