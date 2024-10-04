@extends('layouts.layout')
@section('title')
    Reservation page
@endsection

@section('content')
    <div id="myModal" class="modal2">

        <!-- Modal content -->
        <div class="modal-content2">
            <span class="close">&times;</span>
            <p id="unos"></p>
        </div>

    </div>
    <div class="resContainer2">
        <div class="r-left">
            <div id="filters">
                <h2 class="naslovreservation">Filters:</h2><br>
                <x-text-field id="searchReservation"  class="searchRes"></x-text-field>
                <h2 class="hh11">Categories:</h2>
                @foreach($categories as $c)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{$c->id}}" id="exc-{{$c->id}}">
                        <label class="labelReservation" for="exc-{{$c->id}}">
                            {{$c->category}}
                        </label>
                    </div>
                @endforeach
                <br>
                <h2 class="hh11">Age:</h2>
                <br>
                <x-drop-down :options="[ ['value' =>'asc', 'text' => 'ASC'], ['value' => 'desc', 'text' => 'DESC'] ]" name="sortAge" id="sort"></x-drop-down>

            </div>

        </div>
        <div class="r-right" id="prod">

                @foreach($all as $a)

                    <div class="reservationCard flex">
                        <div class="resImage">
                            <img src="{{asset("images/$a->image")}}">
                        </div>
                        <div class="content">
                            <h2 class="naslovMy">Category:</h2>
                            <p>{{$a->category->category}}</p>
                            <h2 class="naslovMy">Age:</h2>
                            <p>{{$a->year}} year   {{$a->month}} month</p>
                            <div class="flex chairs"><h2 class="naslovMy">Name:</h2>&nbsp;
                                <p>{{$a->name}}</p></div>
                            <h2 class="naslovMy" id="nnn">Choose a date and time:</h2>
                            <input id="dateRes" type="datetime-local" class="meeting-time" name="meeting-time" min="<?php echo date('Y-m-d\TH:i'); ?>">&nbsp;

                            <input class="buttonCustom" type="button" data-gallery='{{$a->id}}' data-idcat='{{$a->id_category}}' data-picture="{{$a->image}}" id="reservation"  value="RESERVE">&nbsp;
                            <h2 class="naslovMy">Description:</h2>
                            <p>{{$a->description}}</p>
                        </div>
                    </div>
                @endforeach

        </div>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");



        var span = document.getElementsByClassName("close")[0];


        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endsection
<script src="{{asset("js/my.js")}}"></script>

