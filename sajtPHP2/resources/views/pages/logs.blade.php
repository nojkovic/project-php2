@extends('layouts.admin')
@section('contentMain')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All activities</h4>
            <form class="card-description" method="get" action="{{route('filterLogs')}}">
                Od: <input type="date" id="startDate" name="startDate" />
                Do: <input type="date" id="endDate" name="endDate" />
                <button type="submit" href>Filter</button>
            </form>
            <div class="table-responsive">
                @if(isset($activities) && !$activities->isEmpty())
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Number</th>
                            <th>User name</th>
                            <th>User email</th>
                            <th>IP address</th>
                            <th>Type of activities</th>
                            <th>Date</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($activities as $i=>$a)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$a->user->name}}</td>
                                <td>{{$a->user->email}}</td>
                                <td>{{$a->ip}}</td>
                                <td>{{$a->type->name}}</td>
                                <td>{{$a->created_at}}</td>
                                <td>
                                    <form action="{{route('deleteLogs',['id'=>$a->id])}}" method="post">
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
                    <p class="alert alert-danger">There is currently no activities</p>
                @endif
            </div>
            {{ $activities->links('pagination::simple-bootstrap-4') }}
        </div>
    </div>
@endsection
