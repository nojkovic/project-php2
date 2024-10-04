@extends('layouts.admin')

@section("contentMain")
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Roles</h4>
            <p class="card-description">

            </p>
            <div class="table-responsive">
                @if(isset($roles) && !$roles->isEmpty())
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Number</th>
                            <th>Role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $i=>$r)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$r->role}}</td>
                                <td><a href="{{route('editRole',['id'=>$r->id])}}"><button type="submit" class="btn btn-warning">Edit</button></a></td>
                                <td>
                                    <form action="{{route('deleteRole',['id'=>$r->id])}}" method="post">
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
                    <p class="alert alert-danger">There are currently no roles</p>
                @endif
            </div>
            <a href="{{route('newRole')}}"><button type="button" class="btn btn-secondary btn-rounded btn-fw myClass1">Add new role</button></a>
        </div>
    </div>
@endsection
