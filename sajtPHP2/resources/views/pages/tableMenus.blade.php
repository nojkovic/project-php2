@extends('layouts.admin')

@section("contentMain")
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Menus</h4>
            <p class="card-description">

            </p>
            <div class="table-responsive">
                @if(isset($menus) && !$menus->isEmpty())
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Number</th>
                            <th>Menu</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menus as $i=>$m)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>{{$m->menu}}</td>
                            <td><a href="{{route('editMenu',['id'=>$m->id])}}"><button type="submit" class="btn btn-warning">Edit</button></a></td>
                            <td>
                                <form action="{{route('deleteMenu',['id'=>$m->id])}}" method="post">
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
                <p class="alert alert-danger">There is currently no navigation menu</p>
                @endif
            </div>
            <a href="{{route('newMenus')}}"><button type="button" class="btn btn-secondary btn-rounded btn-fw myClass1">Add new menu</button></a>
        </div>
    </div>
@endsection
