<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{url('public')}}/assetsadmin/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{url('public')}}/assetsadmin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{url('public')}}/assetsadmin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{url('public')}}/assetsadmin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{url('public')}}/assetsadmin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{url('public')}}/assetsadmin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{url('public')}}/assetsadmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{url('public')}}/assetsadmin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{url('public')}}/assetsadmin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{url('public')}}/assetsadmin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{url('public')}}/assetsadmin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{url('public')}}/assetsadmin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('public')}}/assetsadmin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        @include('template.section-admin.header')
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @include('template.section-admin.sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        <img src="{{url('public')}}/assetsadmin/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="content">
                                                    <h5 class="name">
                                                        @if(Auth::check())
                                                        {{request()->user()->nama}}
                                                        @else
                                                        silahkan login
                                                        @endif    
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                            <a href="{{url('home')}}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            @yield('content')
           
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{url('public')}}/assetsadmin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{url('public')}}/assetsadmin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{url('public')}}/assetsadmin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{url('public')}}/assetsadmin/vendor/slick/slick.min.js">
    </script>
    <script src="{{url('public')}}/assetsadmin/vendor/wow/wow.min.js"></script>
    <script src="{{url('public')}}/assetsadmin/vendor/animsition/animsition.min.js"></script>
    <script src="{{url('public')}}/assetsadmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{url('public')}}/assetsadmin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{url('public')}}/assetsadmin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="{{url('public')}}/assetsadmin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{url('public')}}/assetsadmin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{url('public')}}/assetsadmin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{url('public')}}/assetsadmin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="{{url('public')}}/assetsadmin/js/main.js"></script>

</body>

</html>
<!-- end document-->
