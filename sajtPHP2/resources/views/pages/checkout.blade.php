@extends('layouts.layout')
@section('title')
    Checkout page
@endsection

@section('content')
    <h2 class="chc">Checkout</h2>
    <div class="r-right" id="prod">

    @if(!$reservations ==null)
            <table class="table">
                <thead>
                <tr>
                    <th scope="row">Number</th>
                    <th >Image</th>
                    <th>Date</th>
                    <th>Category</th>
                    <th>Delete</th>
                </tr>

                </thead>
                <tbody>
                @foreach($reservations as $rb=>$r)
                <tr class="red44">
                    @php
                        $carbonDatum = \Carbon\Carbon::parse($r['reservationDate']);
                    @endphp

                    <td scope="col">{{$rb + 1}}</td>
                    <th scope="col"><img class="resPicture" src="{{asset('images')}}/{{$r['picture']}}"/></th>
                    <th scope="col">{{ $carbonDatum->format('d.m.Y H:i:s') }}</th>
                    <th scope="col">{{$r['catName']}}</th>
                    <th scope="col"><button class="remove" data-id="{{$rb}}">Remove</button></th>
                </tr>
                @endforeach
                </tbody>
                <td></td>
            </table>
        <button class="buttRes" id="resBtn" >Reservate</button>

        @else
        <p id="pk123" class="alert alert-danger message">There are no scheduled reservations.</p>

    @endif
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{asset("js/my.js")}}"></script>
