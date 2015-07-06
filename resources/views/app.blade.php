<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="http://petclown.com/">
    @yield('title')

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />

    <!-- Combined Stylesheets -->
    <link rel="stylesheet" href="assets/css/all.css">

</head>

<body class="header-fixed header-fixed-space">

<div class="wrapper">
    <!--=== Header v6 ===-->
    <div class="header-v6 header-classic-white header-sticky">
        <!-- Navbar -->
        <div class="navbar mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Navbar Brand -->
                    <div class="navbar-brand">
                        <a href="{{ url('/') }}">
                            <img class="shrink-logo" src="assets/img/logo1-default.png" alt="Logo">
                        </a>
                    </div>
                    <!-- ENd Navbar Brand -->

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('/petition/create') }}">Create Petition</a></li>
                            <li><a href="{{ url('/petitions') }}">Browse Petitions</a></li>
                            @if (Auth::guest())
                                <li><a href="{{ url('/auth/login') }}"><i class="fa fa-user"></i>&nbsp;&nbsp;Login</a></li>
                                <!--<li><a href="{{ url('/auth/register') }}">Register</a></li>-->
                            @else
                                <li class="menu-icons">
                                    <i class="menu-icons-style radius-x fa fa-envelope"></i>
                                    <span class="badge rounded-x">0</span>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/profile') }}">Profile</a></li>
                                        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div><!--/navbar-collapse-->
            </div>
        </div>
        <!-- End Navbar -->
    </div>
    <!--=== End Header v6 ===-->


    <!--=== Content ===-->
    <div class="container">
        @if(Session::has('flash_message'))
            <div class="alert alert-success {{ Session::has('flash_message_important') ? alert-important : ''}}">
                @if (Session::has('flash_message_important'))
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                @endif
                {{Session::get('flash_message')}}
            </div>
        @endif
        @yield('heading')
        <div class="row">
            <div class="col-md-8 col">
                @yield('content')
            </div>
            <div class=col-md-4 col">
            @yield('sidebar')
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col">
                @yield('comments')
            </div>
            <div class="col-md-4 col">

            </div>
        </div>
    </div>
</div>
<!--=== End Content ===-->


<!--=== Footer ===-->
<div id="footer-default" class="footer-default">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 md-margin-bottom-40">
                    <!-- About -->
                    <div class="headline"><h2>About</h2></div>
                    <p class="margin-bottom-25 md-margin-bottom-40">Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals.</p>
                    <!-- End About -->

                    <!-- Monthly Newsletter -->
                    <div class="headline"><h2>Monthly Newsletter</h2></div>
                    <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                    <form class="footer-subsribe">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email Address">
                                <span class="input-group-btn">
                                    <button class="btn-u" type="button">Subscribe</button>
                                </span>
                        </div>
                    </form>
                    <!-- End Monthly Newsletter -->
                </div><!--/col-md-4-->

                <div class="col-md-4 md-margin-bottom-40">
                    <!-- Recent Blogs -->
                    <div class="posts">
                        <div class="headline"><h2>Recent Blog Entries</h2></div>
                        <dl class="dl-horizontal">
                            <dt><a href="#"><img src="assets/img/sliders/elastislide/6.jpg" alt="" /></a></dt>
                            <dd>
                                <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt><a href="#"><img src="assets/img/sliders/elastislide/10.jpg" alt="" /></a></dt>
                            <dd>
                                <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt><a href="#"><img src="assets/img/sliders/elastislide/11.jpg" alt="" /></a></dt>
                            <dd>
                                <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                            </dd>
                        </dl>
                    </div>
                    <!-- End Recent Blogs -->
                </div><!--/col-md-4-->

                <div class="col-md-4">
                    <!-- Contact Us -->
                    <div class="headline"><h2>Contact Us</h2></div>
                    <address class="md-margin-bottom-40">
                        25, Lorem Lis Street, Orange <br />
                        California, US <br />
                        Phone: 800 123 3456 <br />
                        Fax: 800 123 3456 <br />
                        Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
                    </address>
                    <!-- End Contact Us -->

                    <!-- Social Links -->
                    <div class="headline"><h2>Stay Connected</h2></div>
                    <ul class="social-icons">
                        <li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
                        <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
                        <li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
                        <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
                        <li><a href="#" data-original-title="Pinterest" class="social_pintrest"></a></li>
                        <li><a href="#" data-original-title="Linkedin" class="social_linkedin"></a></li>
                        <li><a href="#" data-original-title="Vimeo" class="social_vimeo"></a></li>
                    </ul>
                    <!-- End Social Links -->
                </div><!--/col-md-4-->
            </div>
        </div>
    </div><!--/footer-->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        2015 &copy; Unify. ALL Rights Reserved.
                        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <a href="index.html">
                        <img class="pull-right" id="logo-footer" src="assets/img/logo2-default.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div><!--/copyright-->
</div>
<!--=== End Footer ===-->


<!-- JS Global Compulsory -->

<script type="text/javascript" src="assets/js/all.js"></script>

<script type="text/javascript">
    $( document ).ready(function(){
        App.init();
    });
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
@yield('footer')
<!--[if lt IE 9]>
<script src="assets/plugins/respond.js"></script>
<script src="assets/plugins/html5shiv.js"></script>
<script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>
