@extends("layouts.layout")
@section("title")
    About stranica
@endsection
@section("content")


    <!-- welcome -->
    <div class="welcome">
        <div class="container">
            <div class="col-md-6 w3ls_welcome_right">
                <div class="flexslider">
                    <ul class="slides">
                        @foreach($products as $p)
                            <li>
                                <div class="agileits_w3layouts_welcome_grid">
                                    <img src="{{asset("images/$p->image")}}" alt="{{$p->name}}" class="img-responsive aboutPhoto" />
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-md-6 w3ls_welcome_left">
                <div class="w3ls_welcome_right1">
                    <h3 class="agileits-title">About Us</h3>
                    <h6>Wondering if  <span> we are  </span> what you were looking for? </h6>
                    <p>As shown, our institution is charitable with the aim that all animals who do not have their own home and love get exactly that.
                        Our purpose is to try to achieve mutual love between our client and his pet.</p>

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //welcome -->
    <!-- Stats -->
    <div class="stats services jarallax">
        <div class="container">
            <div class="stats-info agileits-w3layouts">
                <div class="col-sm-3 col-xs-6 stats-grid">
                    <div class="stats-img">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <h5>Happy Clients</h5>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='157000' data-delay='.5' data-increment="100">49999</div>
                </div>
                <div class="col-sm-3 col-xs-6 stats-grid">
                    <div class="stats-img w3-agileits">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    </div>
                    <h5>Our Events</h5>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='850' data-delay='8' data-increment="1">350</div>
                </div>
                <div class="col-sm-3 col-xs-6 stats-grid">
                    <div class="stats-img w3-agileits">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                    </div>
                    <h5>Projects</h5>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='80000' data-delay='.5' data-increment="100">49999</div>
                </div>
                <div class="col-sm-3 col-xs-6 stats-grid">
                    <div class="stats-img w3-agileits">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                    </div>
                    <h5>Awards</h5>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='269' data-delay='8' data-increment="1">200</div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //Stats -->
    <!-- team -->
    <div class="team agileits">
        <div class="team-agileinfo">
            <div class="container">
                <h3 class="agileits-title w3title2">Our Team</h3>
                <div class="team-row agileits-w3layouts">
                    @foreach($teams as $t)
                    <div class="col-sm-3 col-xs-6 team-grids">
                        <div class="team-agileimg myForImage">
                            <img class="img-responsive aboutTeam" src="{{asset("images/Team")}}/{{$t->image}}" alt="slika">
                            <div class="captn">
                                <div class="captn-top">
                                    <h4>{{$t->name }} {{$t->lastname}}</h4>
                                    <p>{{$t->description }}</p>
                                </div>
                                <div class="social-w3lsicon">
                                    <ul class="agileits_social_list">
                                        <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //team -->


    <!-- //modal sign in -->
    <!-- js -->
    <script src="{{asset("js/jquery-2.2.3.min.js")}}"></script>
    <!-- //js -->
    <!-- jarallax -->
    <script src="{{asset("js/SmoothScroll.min.js")}}"></script>
    <script src="{{asset("js/jarallax.js")}}"></script>
    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
    <!-- //jarallax -->
    <!-- flexSlider -->
    <script defer src="{{asset("js/jquery.flexslider.js")}}"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //flexSlider -->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="{{asset("js/move-top.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/easing.js")}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();

                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };
            */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- ResponsiveTabs js -->
    <script src="{{asset("js/easyResponsiveTabs.js")}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });
    </script>
    <!-- //ResponsiveTabs js -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset("js/bootstrap.js")}}"></script>

@endsection
