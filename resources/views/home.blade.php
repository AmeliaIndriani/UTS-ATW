<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Blog - B4 Template by Bootstrap Temple</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{url('public')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{url('public')}}/assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="{{url('public')}}/assets/css/fontastic.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Fancybox-->
    <link rel="stylesheet" href="{{url('public')}}/assets/vendor/@fancyapps/fancybox/jquery.fancybox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{url('public')}}/assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{url('public')}}/assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  @include('template.section.header')
    <!-- Hero Section-->
    <section style="background: url(public/assets/img/hero.jpg); background-size: cover; background-position: center center" class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h1>Artikel</h1><a href="#" class="hero-link"></a>
          </div>
        </div><a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a>
      </div>
    </section>
    <!-- Intro Section-->
    <section class="featured-posts no-padding-top">
      <div class="container">
        <!-- Post-->
        @foreach ($list_post as $post)
        <div class="row d-flex align-items-stretch">
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                <header class="post-header">
                    <h2 class="h4" href="{{url('postblog', $post->id)}}">{{$post->judul_artikel}}</h2></a>
                </header>
                <p>{{$post->artikel}}</p>
                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="{{url('public')}}/assets/img/avatar-1.jpg" alt="..." class="img-fluid"></div>
                    <div class="title"><span>{{$post->penulis}}</span></div></a>
                  <div class="date"><i class="icon-clock">{{$post->tanggal_upload}}</i> </div>
                  <div class="comments"><i class="icon-comment"></i>12</div>
                </footer>
              </div>
            </div>
          </div>
          <div class="image col-lg-5"><img src="{{url('public')}}/assets/img/featured-pic-1.jpeg" alt="..."></div>
        </div>
        @endforeach
        <!-- Post        -->
        <!-- Post                            -->
      </div>
    </section>
    <!-- Divider Section-->
   
    <!-- Latest Posts -->
    <!-- Newsletter Section-->
    <section class="newsletter no-padding-top">    
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Subscribe to Newsletter</h2>
            <p class="text-big">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col-md-8">
            <div class="form-holder">
              <form action="#">
                <div class="form-group">
                  <input type="email" name="email" id="email" placeholder="Type your email address">
                  <button type="submit" class="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallery Section-->
    <section class="gallery no-padding">    
      <div class="row">
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gallery-1.jpg" data-fancybox="gallery" class="image"><img src="img/gallery-1.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gallery-2.jpg" data-fancybox="gallery" class="image"><img src="img/gallery-2.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gallery-3.jpg" data-fancybox="gallery" class="image"><img src="img/gallery-3.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gallery-4.jpg" data-fancybox="gallery" class="image"><img src="img/gallery-4.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
        </div>
      </div>
    </section>
    <!-- Page Footer-->
    @include('template.section.footer')
    <!-- JavaScript files-->
    <script src="{{url('public')}}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{url('public')}}/assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="{{url('public')}}/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{url('public')}}/assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="{{url('public')}}/assets/vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="{{url('public')}}/assets/js/front.js"></script>
  </body>
</html>