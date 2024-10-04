@extends('layouts.layout')
@section('title')
    Checkout page
@endsection

@section('content')
    <h2 class="chc">Checkout All</h2>
    <div class="r-right" id="prod1">

        @if(!$reservationsBase == null && count($reservationsBase) > 0 )
            <table class="table">
                <thead>
                <tr>
                    <th scope="row">Number</th>
                    <th >Image</th>
                    <th>Date</th>
                    <th>Category</th>

                </tr>

                </thead>
                <tbody>
                @php
                $i2=1;
                @endphp

                @foreach($reservationsBase as $rb => $r)
                    @foreach($r->reservationLines as $i=>$line)
                        <tr class="red44">
                            <td scope="col">{{ $i2++ }}</td>
                            <th scope="col"><img class="resPicture" src="{{ asset('images') }}/{{ $line->gallery->image }}" /></th>
                            <th scope="col">{{ $line->date }}</th>
                            <th scope="col">{{ $line->gallery->category->category }}</th>

                        </tr>

                    @endforeach
                @endforeach

                </tbody>
                <td></td>
            </table>


        @else
            <p id="pk12" class="alert alert-danger message">There are no scheduled reservations.</p>
        @endif
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{asset("js/my.js")}}"></script>
