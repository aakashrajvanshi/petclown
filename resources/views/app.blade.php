<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="{{env('BASE_URL')}}">
    @yield('title')

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">
   <!--
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    -->
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
                            <img class="shrink-logo" src="images/petclown1.png" alt="Logo">
                        </a>
                    </div>
                    <!-- ENd Navbar Brand -->

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('/ideas/create') }}">Submit an Idea</a></li>
                            <li><a href="{{ url('/petitions') }}">Browse Petitions</a></li>
                            @if (Auth::guest())
                                <li><a href="{{ url('/auth/login') }}"><i class="fa fa-user"></i>&nbsp;&nbsp;Login</a></li>
                                <!--<li><a href="{{ url('/auth/register') }}">Register</a></li>-->
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hello, {{ Auth::user()->name }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/profile') }}">My Profile</a></li>
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

   @yield('jumbotron')

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

            @yield('content')

    </div>
</div>
<!--=== End Content ===-->

<!--=== Footer ===-->

@section('footer')
        @include('pages.footer')
@stop

<!--=== End Footer ===--->

<!-- JS Global Compulsory -->

<script type="text/javascript" src="assets/js/all.js"></script>

<script type="text/javascript">
    $( document ).ready(function(){
        App.init();
    });
</script>

<!--
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
-->
@yield('footer')
<!--[if lt IE 9]>
<script src="assets/plugins/respond.js"></script>
<script src="assets/plugins/html5shiv.js"></script>
<script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>
