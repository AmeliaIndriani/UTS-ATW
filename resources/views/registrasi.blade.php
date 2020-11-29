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
    <title>Login</title>

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
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{url('public')}}/assetsadmin/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            @include('template.utils.notif')
                        <form action="{{url('registrasi')}}" method="post">
                            @csrf
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="au-input au-input--full" type="text" name="nama" id="nama" placeholder="nama">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" id="usernamae" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="email" name="email" id="email" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="password">
                                </div>
                                <div class="btn btn-primary btn-lg btn-block"> 
                                    <button class="btn btn-primary btn-lg btn-block">Submit</button>
                                </div>   
                            </form>
                            <div class="card-footer bg-white p-0 row ">
                                <div class="card-footer-item card-footer-item-bordered col-md-6">
                                <a href="{{url('home')}}" class="footer-link">Kembali</a></div>
                                <div class="card-footer-item card-footer-item-bordered col-md-6">
                                <a href="{{url('registrasi')}}" class="footer-link">Registrasi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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