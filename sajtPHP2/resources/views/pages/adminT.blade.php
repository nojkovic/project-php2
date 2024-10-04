@extends('layouts.admin')

@section("contentMain")
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Users</h4>
            <p class="card-description">

            </p>
            <div class="table-responsive">
                @if(isset($users) && !$users->isEmpty())
                    <table class="table">

                        <thead>
                        <tr>
                            <th>Number</th>
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Active</th>
                            <th>Role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $i=>$u)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$u->name}}</td>
                                <td>{{$u->lastname}}</td>
                                <td>{{$u->email}}</td>
                                <td>{{$u->active}}</td>
                                <td>{{$u->role->role}}</td>
                                <td><a href="{{route('editUser',['id'=>$u->id])}}"><button type="submit" class="btn btn-warning">Edit</button></a></td>
                                <td>
                                    <form action="{{route('deleteUser',['id'=>$u->id])}}" method="post">
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
                <p class="alert alert-danger">There are no users</p>

                @endif
            </div>
            <a href="{{route('new')}}"><button type="button" class="btn btn-secondary btn-rounded btn-fw myClass1">Add new</button></a>
        </div>
    </div>
@endsection
