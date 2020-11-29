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
    
    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        @foreach ($list_post as $post)
        <main class="post blog-post col-lg-8"> 
          <div class="container">
            <div class="post-single">
            <div class="post-thumbnail"><img src="{{url('public')}}/assets/img/blog-post-3.jpeg" alt="..." class="img-fluid"></div>
              <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                </div>
                <h1>{{$post->judul_artikel}}<a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
                <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="{{url('public')}}/assets/img/avatar-1.jpg" alt="..." class="img-fluid"></div>
                    <div class="title"><span>{{$post->penulis}}</span></div></a>
                  <div class="d-flex align-items-center flex-wrap">       
                    <div class="date"><i class="icon-clock"></i> {{$post->tanggal_upload}}</div>
                    <div class="views"><i class="icon-eye"></i> 500</div>
                    <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                  </div>
                </div>
                <div class="post-body">
                  <p> {{$post->artikel}}</p>
                </div>
                @endforeach
                <div class="post-comments">
                  <header>
                    <h3 class="h6">Post Comments<span class="no-of-comments">(3)</span></h3>
                  </header>
                  <div class="comment">
                    <div class="comment-header d-flex justify-content-between">
                      <div class="user d-flex align-items-center">
                        <div class="image"><img src="{{url('public')}}/assets/img/user.svg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="title"><strong>Jabi Hernandiz</strong><span class="date">May 2016</span></div>
                      </div>
                    </div>
                    <div class="comment-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                  </div>
                  <div class="comment">
                    <div class="comment-header d-flex justify-content-between">
                      <div class="user d-flex align-items-center">
                        <div class="image"><img src="{{url('public')}}/assets/img/user.svg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="title"><strong>Nikolas</strong><span class="date">May 2016</span></div>
                      </div>
                    </div>
                    <div class="comment-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                  </div>
                  <div class="comment">
                    <div class="comment-header d-flex justify-content-between">
                      <div class="user d-flex align-items-center">
                        <div class="image"><img src="{{url('public')}}/assets/img/user.svg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="title"><strong>John Doe</strong><span class="date">May 2016</span></div>
                      </div>
                    </div>
                    <div class="comment-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                  </div>
                </div>
                <div class="add-comment">
                  <header>
                    <h3 class="h6">Leave a reply</h3>
                  </header>
                  <form action="#" class="commenting-form">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <input type="text" name="username" id="username" placeholder="Name" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <input type="email" name="username" id="useremail" placeholder="Email Address (will not be published)" class="form-control">
                      </div>
                      <div class="form-group col-md-12">
                        <textarea name="usercomment" id="usercomment" placeholder="Type your comment" class="form-control"></textarea>
                      </div>
                      <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-secondary">Submit Comment</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </main>
        <aside class="col-lg-4">
          <!-- Widget [Search Bar Widget]-->
         
          <!-- Widget [Latest Posts Widget]        -->
          
          <!-- Widget [Categories Widget]-->
          
          <!-- Widget [Tags Cloud Widget]-->
          
        </aside>
      </div>
    </div>
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