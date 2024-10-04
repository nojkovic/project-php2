@extends('layouts.layout')
@section("title")
    Author page
@endsection
@section("content")
    <div class="container">
        <div class="col-md-6 w3ls_welcome_right">
            <div class="flexslider">

                        <div class="agileits_w3layouts_welcome_grid author">
                            <img src="{{asset("images/Team/author.jpg")}}" alt="author" class="img-responsive authorPhoto" />
                        </div>

            </div>
        </div>
        <div class="col-md-6  leftAuthor">
            <div class="w3ls_welcome_right1 leftA">
                <h3 class="agileits-title colorAuthor">About Me</h3>
                <h6>Name:  <span class="colorAuthor"> Sara  </span> </h6>
                <h6>Lastname: <span class="colorAuthor"> Nojkovic  </span> </h6>
                <h6>Age:  <span class="colorAuthor"> 21  </span> </h6>
                <h6>High school:  <span class="colorAuthor"> 'SS Sveti Sava,medical nurse-educator'  </span> </h6>
                <h6>College:  <span class="colorAuthor"> ICT Information and communication technologies  </span> </h6>

            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>
@endsection
