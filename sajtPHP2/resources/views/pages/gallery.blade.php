@extends("layouts.layout")
@section("title")
    Gallery stranica
@endsection
@section("content")

<!-- gallery -->
<div class="gallery team">
    <div class="container">

        <h3 class="agileits-title w3title2 ">Gallery</h3>
            <form class="divovi" method="GET" action="{{route('filter')}}" id="filter">
            <x-text-field class="pad" name="search" ></x-text-field><button  class="btn btn-outline-info search">Search</button>

            <x-drop-down class="stil" class1="selectList" :options="$category" id="dd" value="id" text="category"  label="Filter" name="filtriranje" ></x-drop-down>


            </form>
        <div class="agile_gallery_grids">
            @if(count($products))
                @foreach($products as $p)
                <x-card :image="$p->image" :name="$p->name" :description="$p->description" :category="$p->category->category"></x-card>
                @endforeach
            @else
                <p class="alert alert-danger mess">No results</p>
            @endif

        </div>
        <div class="clearfix"> </div>
        <div class="pad"> {{$products->links('pagination::simple-bootstrap-4')}}</div>
    </div>
</div>
<!-- //gallery -->


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
{{--<!-- gallery-lightbox -->--}}
{{--<script src="{{asset("js/lsb.min.js")}}"></script>--}}
{{--<script>--}}
{{--    $(window).load(function() {--}}
{{--        $.fn.lightspeedBox();--}}
{{--    });--}}
{{--</script>--}}
{{--<!-- //gallery-lightbox -->--}}
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
