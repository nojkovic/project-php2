@extends('layouts.admin')

@section("contentMain")
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Contacts</h4>
            <p class="card-description">

            </p>
            <div class="table-responsive">
                @if(isset($contacts) && !$contacts->isEmpty())
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Number</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Message</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $i=>$c)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$c->name}}</td>
                                <td>{{$c->email}}</td>
                                <td>{{$c->mobile}}</td>
                                <td>{{$c->message}}</td>
                                <td>
                                    <form action="{{route('deleteContacts',['id'=>$c->id])}}" method="post">
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
                    <p class="alert alert-danger">There are currently no messages</p>
                @endif
            </div>

        </div>
    </div>
@endsection
