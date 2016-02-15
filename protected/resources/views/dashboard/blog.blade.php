@extends('layout')

@section('main-content')
    <!-- <div class="navbar-tonggle-costum">
        <span class="show-menu"></span>
        <span class="hide-menu"></span>
    </div> -->

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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


    <section id="blog" class="blog-section">

        <a class="navbar-brand page-scroll spasinull" href="{{ url('/') }}/#page-top"><img src="img/logoputih.png" class="img-logo default"></a>
        
        <div class="box-semua" style="background-image:url('img/backblog.jpg');-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
            

            <div class="box-kiri">
                
            </div>

            <div class="box-kanan">

                <div class="ungubutoon box-back">
                    <button href="" class="btn btn-primary font-color-putih" onclick="goBack()">BACK TO ABOUT</button>
                </div>
                

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    
                    {{--*/ $stat_activeep = 'active' /*--}} 
                    {{--*/ $stat_activeepno = 0 /*--}} 
                    @foreach($blogs as $blog)

                    <li data-target="#carousel-example-generic" data-slide-to="{{ $stat_activeepno }}" class="{{ $stat_activeep }}"></li>

                    {{--*/ $stat_activeep = '' /*--}}
                    {{--*/ $stat_activeepno++ /*--}} 
                    @endforeach
                    
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">

                    {{--*/ $stat_active = 'active' /*--}}   
                    @foreach($blogs as $blog)


                    <div class="item {{ $stat_active }}">

                        <div class="box-blog-content">
                            <p class="font-color-ungu">PRESS</p>
                            <h1 class="font-color-ungu font-bold">{{ $blog->title }}</h1>

                            <div class="line"></div><br/>
                            <p><strong>{{ $blog->subtitle }}</strong></p>
                            <p>
                                {!! $blog->description !!}
                            </p>
                        </div>

                    </div>

                    {{--*/ $stat_active = '' /*--}}
                    @endforeach

                    

                  </div>

                  <!-- Controls -->
                  <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a> -->
                  <!-- Controls -->
                   <!--  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span> 
                    </a> -->


                    <div class="blog-control-costum">
                        <a class="" href="#carousel-example-generic" data-slide="prev" id="slidekiri"><span class="glyphicon glyphicon-chevron-left font-color-ungu" aria-hidden="true"></span> PREV PRESS</a>
                        <a class="" href="#carousel-example-generic" data-slide="next" id="slidekanan">NEXT PRESS <span class="glyphicon glyphicon-chevron-right font-color-ungu" aria-hidden="true"></span></a>
                    </div>


                </div>


            </div>
        </div>
        


    </section>

@endsection