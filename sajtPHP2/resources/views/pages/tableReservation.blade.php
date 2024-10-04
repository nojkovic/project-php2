@extends('layouts.admin')

@section("contentMain")
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Reservation</h4>
            <p class="card-description"></p>
            <div class="table-responsive">
                @if(isset($reservations) && !$reservations->isEmpty() || isset($reservation) && !$reservation->isEmpty())
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Number</th>
                            <th>User</th>
                            <th>Date</th>
                            <th>Gallery</th>
                            <th>Edit</th>
                            <th>Delete Reservation Line</th>
                            <th>Delete Reservation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($reservations as $i=>$reservation)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $reservation->user->email }}</td>
                                <td>{{ $reservation->reservationLines->first()->date }}</td>
                                <td><img src="{{asset('images')}}/{{ $reservation->reservationLines->first()->gallery->image }}" alt="Gallery Image"/></td>
                                <td>
                                    <a href="{{route('editReservationLineA',['id'=>$reservation->reservationLines->first()->id])}}" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('deleteReservationLineA',['id'=>$reservation->reservationLines->first()->id])}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{route('deleteReservationA',['id'=>$reservation->id])}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">Delete Reservation</button>
                                    </form>
                                </td>
                            </tr>

                            @foreach ($reservation->reservationLines->slice(1) as $line)
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $line->date }}</td>
                                    <td><img src="{{asset('images')}}/{{ $line->gallery->image }}" alt="Gallery Image"/></td>
                                    <td>
                                        <a href="{{route('editReservationLineA',['id'=>$line->id])}}" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{route('deleteReservationLineA',['id'=>$line->id])}}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                    <td></td>
                                </tr>
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="alert alert-danger">There are currently no reservations</p>
                @endif
            </div>
            <a href="{{route('newReservationLineA')}}" class="btn btn-secondary btn-rounded btn-fw myClass1">Add new</a>
        </div>
    </div>
@endsection
