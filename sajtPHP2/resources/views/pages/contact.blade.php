@extends("layouts.layout")
@section("title")
    Contact stranica
@endsection
@section("content")

<!-- contact -->
<div class="contact">
    <div class="container">
        <h3 class="agileits-title w3title2">Contact Us</h3>
        <div class="map-pos">
            <div class="col-md-4 address-row">
                <div class="col-xs-2 address-left">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 address-right">
                    <h5>Visit Us</h5>
                    <p>Sumadijske Divizije, Belgrade, SRB</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 address-row w3-agileits">
                <div class="col-xs-2 address-left">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 address-right">
                    <h5>Mail Us</h5>
                    <p><a href="mailto:info@example.com"> nojkovicsara14@gmail.com</a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 address-row">
                <div class="col-xs-2 address-left">
                    <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 address-right">
                    <h5>Call Us</h5>
                    <p>+381655491086</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <form  method="POST" action="" id="contact">
            <div class="col-sm-6 contact-left">
                <input type="text" id="Name" name="Name" placeholder="Your Name" >
                <input type="email" id="Email" name="Email" placeholder="Email" >
                <input type="text" id="Mobile" name="Mobile" placeholder="Mobile Number" >
            </div>

            <div class="col-sm-6 contact-right">
                <textarea name="Message" id='Message' placeholder="Message" ></textarea>
                <input type="button" id='button' value="Submit" name="sendMessage" >
            </div>

            <div class="clearfix"></div>
            <div class="contactPage" id="errors" ></div>
            <div class="contactPage" id="success"></div>
        </form>
    </div>
</div>
<!-- //contact -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2832.9811244020148!2d20.488615976161405!3d44.76079968009515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a70e209ede181%3A0x1e22d1f612dde1ee!2z0KjRg9C80LDQtNC40ZjRgdC60LUg0LTQuNCy0LjQt9C40ZjQtSwg0JHQtdC-0LPRgNCw0LQ!5e0!3m2!1ssr!2srs!4v1709067655355!5m2!1ssr!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<!-- //modal sign in -->
<!-- js -->
<script src="{{asset("js/jquery-2.2.3.min.js")}}"></script>
<script src="{{asset("js/my.js")}}"></script>
<!-- //js -->
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
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset("js/bootstrap.js")}}"></script>
@endsection
