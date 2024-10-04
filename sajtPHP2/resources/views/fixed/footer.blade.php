<!-- footer -->
<div class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-3 col-sm-6 footer-logo">
                    <div class="agileits-logo">
                        <h2><a href="index.html">Best Pets</a></h2>
                    </div>
                    <p>If you are looking for an ideal pet, well cared for, healthy and full of love, this is the RIGHT place for you.</p>
                </div>
                <div class="col-md-3 col-sm-6 footer-grid">
                    <h3>Navigation</h3>
                    <ul>
                        @foreach($menu as $m)
                            @if(session()->has('user'))
                                @if(session()->get('user')->id_role == 2)
                                    @if($m->menu != "Admin")
                                        <li><a class="@if(request()->routeIs($m->href)) active @endif list-border" href="{{$m->href}}">{{$m->menu}}</a></li>
                                    @endif
                                @elseif(session()->get('user')->id_role == 1)
                                    <li><a class="@if(request()->routeIs($m->href)) active @endif list-border" href="{{$m->href}}">{{$m->menu}}</a></li>
                                @endif
                            @elseif($m->menu == "Reservation" || $m->menu == "Admin" || $m->menu == "Checkout" || $m->menu == "CheckoutAll")
                                @continue
                            @else
                                <li><a class="@if(request()->routeIs($m->href)) active @endif list-border" href="{{$m->href}}">{{$m->menu}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-list">
                    <h3>Latest Posts</h3>
                    <ul>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i> The business before him</li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i> The fleet at eros</li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Mauritian trucks</li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Some life is sad</li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Children's policy</li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i> The class is silent</li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-grid">
                    <h3>Twitter Posts</h3>
                    <ul class="w3agile_footer_grid_list">
                        <li>You can see new announcements  <a href="#">http://example.com</a> here.
                            <span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
                        <li>You can also add your post  <a href="#">http://example.com</a> here.
                            <span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>© 2024 Best Pets. All rights reserved | Design by <a href="{{route('home')}}">Sara Nojkovic</a></p>
        </div>
    </div>
</div>
<!-- //footer -->
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
<!-- //modal-about -->
<!-- modal sign in  -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

