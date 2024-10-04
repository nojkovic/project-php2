@extends('layouts.admin')

@section("contentMain")
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Newsletter</h4>
            <p class="card-description">

            </p>
            <div class="table-responsive">
                @if(isset($newsletter) && !$newsletter->isEmpty())
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Number</th>
                            <th>Email</th>
                            <th>Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($newsletter as $i=>$n)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$n->email}}</td>
                                <td>
                                    <form action="{{route('deleteNewsletter',['id'=>$n->id])}}" method="post">
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
                <p class="alert alert-danger">There is currently no newsletter</p>

                @endif
            </div>
            <a href="{{route('newNewsletter')}}"><button type="button" class="btn btn-secondary btn-rounded btn-fw myClass1">Add new</button></a>
        </div>
    </div>
@endsection
