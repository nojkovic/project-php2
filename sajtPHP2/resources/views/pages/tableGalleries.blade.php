@extends('layouts.admin')

@section("contentMain")
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Galleries</h4>
            <p class="card-description">

            </p>
            <div class="table-responsive">
                @if(isset($galleries) && !$galleries->isEmpty())
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Number</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Year</th>
                            <th>Month</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($galleries as $i=>$g)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$g->name}}</td>
                                <td>{{$g->description}}</td>
                                <td>{{$g->year}}</td>
                                <td>{{$g->month}}</td>
                                <td><img src="{{asset('images')}}/{{$g->image}}"/></td>
                                <td>{{$g->category->category}}</td>
                                <td><a href="{{route('editGalleries',['id'=>$g->id])}}"><button type="submit" class="btn btn-warning">Edit</button></a></td>
                                <td>
                                    <form action="{{route('deleteGalleries',['id'=>$g->id])}}" method="post">
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
                <p class="alert alert-danger">There is currently no item in the gallery</p>
                @endif
            </div>
            <a href="{{route('newGalleries')}}"><button type="button" class="btn btn-secondary btn-rounded btn-fw myClass1">Add new</button></a>
        </div>
    </div>
@endsection
