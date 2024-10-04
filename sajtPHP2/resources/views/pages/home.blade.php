@extends("layouts.layout")
@section("title")
    Home stranica
@endsection

@section("banner")
    <!-- banner-text -->
    <div class="banner-text agileinfo">
        <div class="container">
            <div class="agile_banner_info">
                <div class="agile_banner_info1">
                    <h6>Quis nostrum exercitationem </h6>
                    <div id="typed-strings" class="agileits_w3layouts_strings">
                        <p class="homeBann">Welcome to<i> Best Pets</i></p>

                    </div>
                    <span id="typed" style="white-space:pre;"></span>
                </div>
            </div>
            <div class="agile_social_icons_banner">
                <ul class="agileits_social_list">
                    <li><a href="https://www.facebook.com/" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/i/flow/login" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.google.rs/" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="https://vimeo.com/" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- //banner-text -->
@endsection


@section("content")
<!-- banner -->

<!-- //banner -->
<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="col-md-4 bnr-agileitsgrids">
        <div class="agileinfo_banner_bottom_pos">
            <div class="w3_agileits_banner_bottom_pos_grid">
                <div class="col-xs-4 wthree_banner_bottom_grid_left">
                    <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                        <i class="fa fa-clone" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-xs-8 wthree_banner_bottom_grid_right">
                    <h4>Free Consultation</h4>
                    <p>The institution is open for any type of communication.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 bnr-agileitsgrids w3grid1">
        <div class="agileinfo_banner_bottom_pos">
            <div class="w3_agileits_banner_bottom_pos_grid">
                <div class="col-xs-4 wthree_banner_bottom_grid_left">
                    <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-xs-8 wthree_banner_bottom_grid_right">
                    <h4>Certificates</h4>
                    <p>For what we do, we have certificates from all institutions .</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 bnr-agileitsgrids w3grid2">
        <div class="agileinfo_banner_bottom_pos">
            <div class="w3_agileits_banner_bottom_pos_grid">
                <div class="col-xs-4 wthree_banner_bottom_grid_left">
                    <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                        <i class="fa fa-comment-o" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-xs-8 wthree_banner_bottom_grid_right">
                    <h4>Free Helpline</h4>
                    <p>We are open 24/7 and ready to help.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //banner-bottom -->
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
                <p> As shown, our institution is charitable with the aim that all animals who do not have their own home and love get exactly that.
                    Our purpose is to try to achieve mutual love between our client and his pet.</p>

            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //welcome -->
<!-- services -->
<div class="services jarallax">
    <div class="container">
        <h3 class="agileits-title w3title1">Our Services</h3>
        <div class="services-w3ls-row">
            <div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts">
                <span class="glyphicon glyphicon-home effect-1" aria-hidden="true"></span>
                <h5>Lorem ipsum</h5>
                <p>Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts">
                <span class="glyphicon glyphicon-list-alt effect-1" aria-hidden="true"></span>
                <h5>Ut non lacus</h5>
                <p>Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts">
                <span class="glyphicon glyphicon-tree-deciduous effect-1" aria-hidden="true"></span>
                <h5>Maec rutrum</h5>
                <p>Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 services-grid">
                <span class="glyphicon glyphicon-globe effect-1" aria-hidden="true"></span>
                <h5>Phase gravida</h5>
                <p>Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //services -->
<!-- blog-bottom -->
<div class="blog-bottom">
    <div class="container">
        <div class="col-sm-5 w3_agile_blog_bottom_left">
            <img src="images/s1.jpg" alt=" " class=" homePicture" />
        </div>
        <div class="col-sm-7 w3_agile_blog_bottom_right">
            <h5>Best Pets</h5>
            <h3>24/7 Customer Service Support</h3>
            <p>Our clients can contact us at any time. They can ask anything related to pets, their diet, maintenance or any advice related to keeping them.</p>
            <div class="w3l_more">
                <a href="#" class="button button--nina" data-text="Learn more" data-toggle="modal" data-target="#myModal">
                    <span>L</span><span>e</span><span>a</span><span>n</span> <span>m</span><span>o</span><span>r</span><span>e</span>
                </a>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //blog-bottom -->
<!-- news letter -->
<div class="subscribe jarallax">
    <div class="sub-agileinfo">
        <div class="container">
            <h3 class="agileits-title w3title1">Get our free newsletter</h3>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est consectetur adipisci velit sed quia non numquam eius.</p>
            <form method="POST" action="" id="news">
                @csrf
                <input type="email" id="email" name="email" placeholder="Email Address" class="user" >
                <input type="button" id="buttonNews" value="Subscribe">

            </form>
            <div  id="errors"  style="color:white"></div>
            <div  id="success"  style="color:white"></div>

            <p class="spam">We never share your information or use it to spam you</p>
        </div>
    </div>
</div>
<!-- //news letter -->

<!-- modal-about -->
<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <img src="images/g2.jpg" class="img-responsive" alt=""/>
                <h4>Consectetur adipiscing elit</h4>
                <p>Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate in.<br> Fusce lacus purus, pulvinar ut lacinia id, sagittis eu mi. Vestibulum eleifend massa sem, eget dapibus turpis efficitur at. Aliquam viverra quis leo et efficitur. Nullam arcu risus, scelerisque quis interdum eget, fermentum viverra turpis. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut At vero eos </p>
            </div>
        </div>
    </div>
</div>

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
<!-- banner-type-text -->
<script src="{{asset('js/typed.js')}}" type="text/javascript"></script>
<script>
    $(function(){

        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 30,
            backDelay:700,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });
    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }
</script>
<!-- //banner-type-text -->
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
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/my.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
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
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset("js/bootstrap.js")}}"></script>
@endsection
