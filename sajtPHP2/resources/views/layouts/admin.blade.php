<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('admin/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
            </div>
            <div>
                <a class="navbar-brand brand-logo" href="{{route('home')}}">
                    <img src="{{asset('admin/images/logo.svg')}}" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="{{route('home')}}">
                    <img src="{{asset('admin/images/logo-mini.svg')}}" alt="logo" />
                </a>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
            <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                    <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">{{session()->get('user')->name}} {{session()->get('user')->lastname}}</span></h1>
                    <h3 class="welcome-sub-text">"The more I work, the luckier I seem to be." </h3>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">




                <a href="{{route("logout")}}"  class="dropdown-item py-3 border-bottom">
                    <p class="mb-0 font-weight-medium float-left">Logout </p>
                    <span class="badge badge-pill badge-primary float-right"></span>
                </a>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                        <i class="icon-mail icon-lg"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">

                        <a class="dropdown-item py-3 border-bottom">
                            <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-alert m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                                <p class="fw-light small-text mb-0"> Just now </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-settings m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                                <p class="fw-light small-text mb-0"> Private message </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-airballoon m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                                <p class="fw-light small-text mb-0"> 2 days ago </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="icon-bell"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>



                    </div>
                </li>

            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="ti-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>

        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin2')}}">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">All Users</span>
                    </a>
                </li>



                <li class="nav-item">
                    <a class="nav-link"  href="{{route('role')}}">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">All Role</span>

                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="{{route('reservationA')}}" aria-expanded="false" aria-controls="tables">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">All Reservations</span>

                    </a>

                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="{{route('team')}}" aria-expanded="false" aria-controls="icons">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">All Team</span>

                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="{{route('newsletter')}}" aria-expanded="false" aria-controls="icons">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">All Newsletters</span>

                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="{{route('menus')}}" aria-expanded="false" aria-controls="icons">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">All Menus</span>

                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="{{route('galleries')}}" aria-expanded="false" aria-controls="icons">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">All Galleries</span>

                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="{{route('contacts')}}" aria-expanded="false" aria-controls="icons">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">All Contacts</span>

                    </a>

                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="{{route('categories')}}" aria-expanded="false" aria-controls="icons">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">All Categories</span>

                    </a>

                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="collapse" href="{{route('filterAct')}}" aria-expanded="false" aria-controls="icons">
                                        <i class="menu-icon mdi mdi-table"></i>
                                        <span class="menu-title">Logs</span>

                                    </a>

                                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="col-sm-12">
                            <div class="home-tab">
                                <div class="col-12 grid-margin stretch-card">
                                    @yield("contentMain")


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>

<!-- container-scroller -->

<!-- plugins:js -->
{{--<script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>--}}
{{--<!-- endinject -->--}}
{{--<!-- Plugin js for this page -->--}}
{{--<script src="{{asset('admin/vendors/chart.js/Chart.min.js')}}"></script>--}}
{{--<script src="{{asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>--}}
{{--<script src="{{asset('admin/vendors/progressbar.js/progressbar.min.js')}}"></script>--}}

<!-- End plugin js for this page -->
<!-- inject:js -->
{{--<script src="{{asset('admin/js/off-canvas.js')}}"></script>--}}
{{--<script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>--}}
{{--<script src="{{asset('admin/js/template.js')}}"></script>--}}
{{--<script src="{{asset('admin/js/settings.js')}}"></script>--}}
{{--<script src="{{asset('admin/js/todolist.js')}}"></script>--}}
{{--<!-- endinject -->--}}
{{--<!-- Custom js for this page-->--}}
{{--<script src="{{asset('admin/js/dashboard.js')}}"></script>--}}
{{--<script src="{{asset('admin/js/Chart.roundedBarCharts.js')}}"></script>--}}
<!-- End custom js for this page-->
</body>

</html>

