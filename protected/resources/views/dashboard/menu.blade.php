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
                        <a class="page-scroll m-active" href="{{ url('/') }}/#about">BACK TO FABLE</a>
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


    <section id="menu" class="menu-section">

        <a class="navbar-brand page-scroll spasinull" href="{{ url('/') }}/#page-top"><img src="img/logoputih.png" class="img-logo default"></a>
           
        <div class="menuoverlay">
            <div class="box-kiri box-ilang-kecil">
                <div class="box-menu-sidebar">
                <ul>
                {{--*/ $menu_ac = 'active' /*--}} 
                @foreach($categorymenus as $categorymenu)

                    <li><a href="#" class="listcat {{ $menu_ac }}" id="m{{ $categorymenu->id }}" data-cont="data-con{{ $categorymenu->id }}">{{ strtoupper($categorymenu->name) }}</a></li>

                {{--*/ $menu_ac = '' /*--}} 
                @endforeach
                </ul>
                </div>
            </div>

            <div class="box-kanan">

                <div class="dropdown dropdown-costum-hp dropdown-costum-menu">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        {{--*/ $menu_ac = 'active' /*--}} 
                        @foreach($categorymenus as $categorymenu)

                            <li><a href="#" class="listcat {{ $menu_ac }}" id="m{{ $categorymenu->id }}" data-cont="data-con{{ $categorymenu->id }}">{{ strtoupper($categorymenu->name) }}</a></li>

                        {{--*/ $menu_ac = '' /*--}} 
                        @endforeach                   
                    </ul>
                </div>


                {{--*/ $menu_show = '' /*--}} 
                @foreach($categorymenus as $categorymenu)

                <div id="data-con{{ $categorymenu->id }}" class="carousel slide" data-ride="carousel" style="{{ $menu_show }}">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    
                    {{--*/ $stat_activeep = 'active' /*--}} 
                    {{--*/ $stat_activeepno = 0 /*--}} 
                    @foreach($categorymenu->menus as $menu)

                    <li data-target="#data-con{{ $categorymenu->id }}" data-slide-to="{{ $stat_activeepno }}" class="{{ $stat_activeep }}"></li>

                    {{--*/ $stat_activeep = '' /*--}}
                    {{--*/ $stat_activeepno++ /*--}} 
                    @endforeach
                    
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">

                    {{--*/ $stat_active = 'active' /*--}}   
                    @foreach($categorymenu->menus as $menu)


                    <div class="item {{ $stat_active }}">

                        <div class="box-menu-content ">
                            <h1 class="title-menu font-color-ungu font-bold">{{ strtoupper($menu->title) }}</h1>

                            <div class="line"></div><br/>
                            <div class="box-menu-scroll">
                            <p>
                                {!! $menu->description !!}
                            </p>
                            </div>
                            <br/><br/>
                        </div>

                    </div>

                    {{--*/ $stat_active = '' /*--}}
                    @endforeach

                    

                  </div>

                  <!-- Controls -->
                  <!-- <a class="left carousel-control" href="#data-con{{ $categorymenu->id }}" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#data-con{{ $categorymenu->id }}" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a> -->

                    <!-- Controls -->
                   <!--  <a class="left carousel-control" href="#data-con{{ $categorymenu->id }}" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#data-con{{ $categorymenu->id }}" data-slide="next">
                        <span class="icon-next"></span> 
                    </a> -->
                </div>

                {{--*/ $menu_show = 'display:none' /*--}} 
                @endforeach

                
            </div>
        </div>
        
    </section>

@endsection