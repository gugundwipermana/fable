<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FABLE</title>

    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <!-- Custom CSS -->
    <link href="{{ asset('/css/scrolling-nav.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{ asset('/plugins/fancybox/jquery.fancybox.css?v=2.1.5') }}" type="text/css" media="screen" />

    <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/sweetalert/sweetalert.css') }}">

    <link href="{{ asset('/css/costum.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    @yield('style-navbar-costum')

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <div class="navbar-tonggle-costum">
        <span class="show-menu"></span>
        <span class="hide-menu"></span>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-costum" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand page-scroll" href="#page-top">FABLE</a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>


                    <li>
                        <a class="page-scroll" href="#events">EVENTS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#djresidences">DJ PERFORMANCE</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">ABOUT</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#gallery">GALLERY</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">CONTACT</a>
                    </li>


                    
                </ul>
                <!-- <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a></li>
                </ul> -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    @yield('main-content')

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="{{ asset('/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/js/scrolling-nav.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/plugins/fancybox/jquery.fancybox.pack.js?v=2.1.5') }}"></script>

    <script src="{{ asset('/js/backgroundVideo.min.js') }}"></script>

    <script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.js') }}"></script>


    <script src="{{ asset('/js/costum.js') }}"></script>


    @include('sweet::alert')

</body>

</html>
