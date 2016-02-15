@extends('layout')

@section('style-navbar-costum')
    <style>
        /* EFFECT MUNCUL */
        @keyframes flickerAnimation3 {
          0%   { opacity:1; }
          100% { opacity:1; }
        }
        @-o-keyframes flickerAnimation3 {
          0%   { opacity:1; }
          100% { opacity:1; }
        }
        @-moz-keyframes flickerAnimation3 {
          0%   { opacity:1; }
          100% { opacity:1; }
        }
        @-webkit-keyframes flickerAnimation3 {
          0%   { opacity:1; }
          100% { opacity:1; }
        }

        .img-logo, .navbar-tonggle-costum, .content-bottom {
           -webkit-animation: flickerAnimation3 10s;
           -moz-animation: flickerAnimation3 10s;
           -o-animation: flickerAnimation3 10s;
            animation: flickerAnimation3 10s;
        }
    </style>
@endsection

@section('main-content')
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
                        <a class="page-scroll" href="{{ url('/') }}/#events">EVENTS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/') }}/#djresidences">DJ PERFORMANCE</a>
                    </li>
                    <li>
                        <a class="page-scroll m-active" href="{{ url('/') }}/#about">ABOUT</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/') }}/#gallery">GALLERY</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/') }}/#contact">CONTACT</a>
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


    <section id="promo" class="promo-section">

        <a class="navbar-brand page-scroll spasinull" href="{{ url('/') }}/#page-top"><img src="img/logoputih.png" class="img-logo default"></a>
        
        <div class="box-pro-back-luar">
        
        </div>

        <a href="{{ url('/') }}/#about" class="btn btn-primary btn-pro-back">BACK</a>

        <!-- carousel ==================================================================================================== -->

        <!-- Full Page Image Background Carousel Header -->
        <div id="eventCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">


                {{--*/ $stat_activeep = 'active' /*--}} 
                {{--*/ $stat_activeepno = 0 /*--}} 
                @foreach(array_chunk($promos->all(), 6) as $row)

                <li data-target="#eventCarousel" data-slide-to="{{ $stat_activeepno }}" class="{{ $stat_activeep }}"></li>

                {{--*/ $stat_activeep = '' /*--}}
                {{--*/ $stat_activeepno++ /*--}} 
                @endforeach

    <!-- 
                <div class="slidebottom">
                    <a class="page-scroll" href="#djresidences"><img src="img/slidebottom.png" /></a>
                </div> -->

            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">

            {{--*/ $stat_active = 'active' /*--}}
            @foreach(array_chunk($promos->all(), 6) as $row)


                <div class="item {{ $stat_active }}">

                    <div class="grid home-features">

                    @foreach($row as $promo)

                       
                        <div class="grid-unit view-first">
                            <div class="vinimg">
                                <img src="{{ asset('/file_upload/img/promos') }}/{{ $promo->image }}" />
                            </div>
                            <div class="caption">
                                <h3 class="date"><!-- {{ strtoupper(date('M d', strtotime($promo->date))) }} --></h3>
                                <h3 class="font-bold">{{ strtoupper($promo->title) }}</h3>
                            </div>
                            <div class="mask">  
                                <p>UPCOMING EVENT</p> 
                                <h1 class="hsatuimg font-bold">{{ strtoupper($promo->title) }}</h1> 
                                <a href="#{{ $promo->id }}" id="eventImgBtn" class="info">DETAILS</a>  
                            </div> 
                        </div>

                    @endforeach


                    </div>

                </div>

                {{--*/ $stat_active = '' /*--}}

            @endforeach

            </div>

               
            <!-- Controls -->
            <a class="left carousel-control" href="#eventCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#eventCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>

        </div>

        <!-- ======================== DIALOG ======================================================================== -->



            @foreach($promos as $promo)

            <div id="{{ $promo->id }}" style="display:none" class="imgDialog">

                <div class="imgDialogLeft">
                    <img src="{{ asset('/file_upload/img/promos') }}/{{ $promo->image }}" />
                </div>

                <div class="imgDialogRight">

                    <div class="imgDialogHome">
                        <p>FABLE SPECIAL PROMO</p>
                        <h1 class="font-bold">{{ strtoupper($promo->title) }}</h1>
                        <p><!-- {{ strtoupper(date('d F Y', strtotime($promo->date))) }} --></p>
                        <p>
                            {!! $promo->description !!}
                        </p>

                        <div class="ungubutoon">
                            <a href="#/" class="btn btn-primary reserve" id="r_reopening">RESERVE</a>
                        </div>

                        <ul class="icon-sosmed">
                            <li><img src="img/facebookU.png" /></li>
                            <li><img src="img/twitterU.png" /></li>
                            <li><img src="img/instaU.png" /></li>
                        </ul>
                    </div>

                    <!-- DIALOG RESERVE -->
                    <div class="imgDialogReserve r_reopening" style="display:none">
                        <p>FABLE SPECIAL EVENTS</p>
                        <h1 class="font-bold">{{ strtoupper($promo->title) }}</h1>
                        <p>EVENT RESERVATION</p>

                        {!! Form::open(['url' => 'reservepromos', 'files' => true, 'class' => 'form-horizontal']) !!}

                            <input type="hidden" name="promo_id" value="{{ $promo->id }}" />

                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">NAME</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">AGE</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="inputPassword3" placeholder="Umur" name="age">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">PHONE</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputPassword3" placeholder="Nomber Handphone" name="phone">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputPassword3" placeholder="Email" name="email">
                            </div>
                          </div>      

                          <input type="hidden" name="lokasiinput" value="1">                    

                          <div class="form-group">
                            <div class="col-sm-10 ungubutoon">
                              <input type="submit" class="btn btn-default" value="RESERVE">
                              <a href="#/" class="btn btn-primary back">BACK</a>
                            </div>
                          </div>
                        {!! Form::close() !!}

                    </div>
                </div>

            </div>

            @endforeach
        
    </section>

@endsection