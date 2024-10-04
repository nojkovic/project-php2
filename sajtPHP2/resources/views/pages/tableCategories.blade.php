@extends('layouts.admin')

@section("contentMain")
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Categories</h4>
            <p class="card-description">

            </p>
            <div class="table-responsive">
                @if(isset($categories) && !$categories->isEmpty())
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Number</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                       @foreach($categories as $i=>$c)

                           <tr>
                               <td>{{$i+1}}</td>
                               <td>{{$c->category}}</td>
                               <td><a href="{{route('editCategories',['id'=>$c->id])}}"><button type="submit" class="btn btn-warning">Edit</button></a></td>
                               <td>
                                   <form action="{{route('deleteCategories',['id'=>$c->id])}}" method="post">
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
                    <p class="alert alert-danger">There are currently no categories</p>
                @endif
            </div>
            <a href="{{route('newCategories')}}"><button type="button" class="btn btn-secondary btn-rounded btn-fw myClass1">Add new category</button></a>
        </div>
    </div>
@endsection
