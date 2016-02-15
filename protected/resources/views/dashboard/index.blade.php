@extends('layout')


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


    <!-- Home =========================================================================================================== -->
    <!-- Home =========================================================================================================== -->
    <!-- Home =========================================================================================================== -->
    <!-- Home =========================================================================================================== -->
    <section id="home" class="home-section">

        <a class="navbar-brand page-scroll spasinull" href="#page-top"><img src="img/logoputih.png" class="img-logo default"></a>
        
        <div id="video-wrap" class="video-wrap">

        <div class="viddal">
            <video preload="metadata" autoplay loop muted width='100%' height='100%' poster="" id="video-bg">
                <source src="{{ asset('/file_upload/video/covers') }}/{{ $cover->video }}" type="video/mp4">
                <!-- <source src="video.mp4" type="video/mp4"> -->
            </video>
        </div>
            <audio preload="metadata" autoplay loop id="audio-bg">
              <source src="{{ asset('/file_upload/music') }}/{{ $cover->music }}" type="audio/mp3">
                Your browser does not support the audio element.
            </audio>
            
            <div class="content-overlay">
                <div class="homecontent">
                    <div class="homecontent-top">
                    
                        <img src="{{ asset('img/iconhead.png') }}" />

                        <h1><span class="font-color-ungu">{{ strtoupper($cover->firstquote) }}</span><br/>{{ strtoupper($cover->lastquote) }}</h1>

                    </div>

                    <div class="content-bottom">

                        <table border="0" align="center">
                            <tr>
                                <td width="20%" align="right">{{ strtoupper($cover->title) }} / {{ strtoupper($cover->band) }}</td>
                                <td width="3%">
                                    <a class="onmusic" href="#/">
                                        <h4 class="spasinull font-color-ungu"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></h4>
                                    </a>

                                    <a class="offmusic" href="#/">
                                        <h4 class="spasinull font-color-ungu"><span class="glyphicon glyphicon-pause" aria-hidden="true"></span></h4>
                                    </a>
                                </td>
                                <td width="20%" align="left">{{ strtoupper($cover->album) }} / {{ strtoupper(date('M d', strtotime($cover->date))) }}</td>
                            </tr>
                        </table>
                           
                        <div class="slidebottom">
                            <a class="page-scroll" href="#events"><img src="{{ asset('img/slidebottom.png') }}" /></a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        
    </section>

    <!-- Event =========================================================================================================== -->
    <!-- Event =========================================================================================================== -->
    <!-- Event =========================================================================================================== -->
    <!-- Event =========================================================================================================== -->
    <section id="events" class="events-section">

        <a class="navbar-brand page-scroll spasinull" href="#page-top"><img src="img/logoputih.png" class="img-logo moveable"></a>

        <!-- carousel ==================================================================================================== -->

    <!-- Full Page Image Background Carousel Header -->
    <div id="eventCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">


            {{--*/ $stat_activeep = 'active' /*--}} 
            {{--*/ $stat_activeepno = 0 /*--}} 
            @foreach(array_chunk($events->all(), 6) as $row)

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
        @foreach(array_chunk($events->all(), 6) as $row)


            <div class="item {{ $stat_active }}">

                <div class="grid home-features">

                @foreach($row as $event)

                    @if($event->type == 1)

                    <div class="grid-unit view-first">
                        <div class="vinimg">
                            <img src="{{ asset('/file_upload/img/events') }}/{{ $event->cover }}" />
                        </div>
                        <div class="caption">
                            <h3 class="date">{{ strtoupper(date('M d', strtotime($event->date))) }}</h3>
                            <h3 class="font-bold">{{ strtoupper($event->title) }}</h3>
                        </div>
                        <div class="mask">  
                            <p>UPCOMING EVENT</p> 
                            <h1 class="hsatuimg">{{ strtoupper($event->title) }}</h1>
                            <a href="#{{ $event->id }}" id="eventImgBtn" class="info">DETAILS</a>  
                        </div> 
                    </div>

                    @elseif($event->type == 2)

                    <div class="grid-unit view-first">
                        <div class="vinimg">


                            <img src="{{ asset('/file_upload/img/events') }}/{{ $event->cover }}" class="imgdal" />

                            <video class="viddal" autoplay loop muted poster="{{ asset('/file_upload/img/events') }}" id="video-bga">
                                <source src="{{ asset('/file_upload/video/events') }}/{{ $event->video }}" type="video/mp4">
                            </video>


                        </div>
                        <div class="caption">
                            <h1><span class="glyphicon glyphicon-play" aria-hidden="true"></span></h1>
                        </div>
                        <div class="mask">  
                            <p>{{ strtoupper(date('M d', strtotime($event->date))) }}</p>  
                            <h1>{{ strtoupper($event->title) }}</h1>

                            <a class="fancybox_popup fancybox.iframe" href="https://www.youtube.com/embed/{{ $event->youtube }}?autoplay=1">
                                <h1><span class="glyphicon glyphicon-play" aria-hidden="true"></span></h1>
                            </a>

                            <a href="#{{ $event->id }}" id="eventImgBtn" class="info">DETAILS</a>  
                        </div> 
                    </div>

                    @endif

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



            @foreach($events as $event)

            <div id="{{ $event->id }}" style="display:none" class="imgDialog">

                <div class="imgDialogLeft">
                    <img src="{{ asset('/file_upload/img/events') }}/{{ $event->cover }}" />
                </div>

                <div class="imgDialogRight">

                    <div class="imgDialogHome">
                        <p>FABLE SPECIAL EVENTS</p>
                        <h1 class="font-bold">{{ strtoupper($event->title) }}</h1>
                        <p>{{ strtoupper(date('d F Y', strtotime($event->date))) }}</p>
                        <p>
                            {!! $event->description !!}
                        </p>

                        <div class="ungubutoon">
                            <a href="#/" class="btn btn-primary reserve" id="r_reopening">RESERVE</a>

                            @if($event->date == date("Y-m-d"))
                            <a href="#/" class="btn btn-primary guestlist" id="g_reopening" >GUEST LIST</a>
                            @else
                            <a href="#/" class="btn btn-primary mati" id="" >GUEST LIST</a>
                            @endif

                        </div>

                        <ul class="icon-sosmed">
                            <li><a href="https://www.facebook.com/sharer.php?u=fable.co.id"><img src="img/facebookU.png" /></a></li>
                            <li><a href="http://twitter.com/share?text=Share&url=http://www.fable.co.id"><img src="img/twitterU.png" /></a></li>
                            <li><a href="https://www.instagram.com"><img src="img/instaU.png" /></a></li>
                        </ul>
                    </div>

                    <!-- DIALOG RESERVE -->
                    <div class="imgDialogReserve r_reopening" style="display:none">
                        <p>FABLE SPECIAL EVENTS</p>
                        <h1 class="font-bold">{{ strtoupper($event->title) }}</h1>
                        <p>EVENT RESERVATION</p>

                        {!! Form::open(['url' => 'reserves', 'files' => true, 'class' => 'form-horizontal']) !!}

                            <input type="hidden" name="event_id" value="{{ $event->id }}" />

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

                    <!-- DIALOG GUEST -->
                    <div class="imgDialogGuest g_reopening" style="display:none">
                        <p>FABLE SPECIAL EVENTS</p>
                        <h1 class="font-bold">{{ strtoupper($event->title) }}</h1>
                        <p>GUEST LIST</p>

                        {!! Form::open(['url' => 'guests', 'files' => true, 'class' => 'form-horizontal']) !!}

                        <input type="hidden" name="event_id" value="{{ $event->id }}" />

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

                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">GENRE</label>
                            <div class="col-sm-10">
                              <select name="genre" class="form-control">
                                <option value="">Electronic Dance Music</option>
                              </select>
                            </div>
                          </div>

                          <input type="hidden" name="lokasiinput" value="1">

                          <div class="form-group">
                            <div class="col-sm-10 ungubutoon">
                              <input type="submit" class="btn btn-default" value="GUEST LIST">
                              <a href="#/" class="btn btn-primary back">BACK</a>
                            </div>
                          </div>
                        {!! Form::close() !!}

                    </div>

                </div>

            </div>

            @endforeach


    </section>

    <!-- DJ ================================================================================================================= -->
    <!-- DJ ================================================================================================================= -->
    <!-- DJ ================================================================================================================= -->
    <!-- DJ ================================================================================================================= -->

    <!-- Services Section -->
    <section id="djresidences" class="djresidences-section">

        <a class="navbar-brand page-scroll spasinull" href="#page-top"><img src="img/logoungu.png" class="img-logo moveable"></a>

       <div class="djwrapp">
            <div class="djtop">
                <p class="font-color-abu titlepage">DJ PERFORMANCE</p>
                <div class="line"></div>

                <div class="costumcontainer">
                <div class="row">
                  <div class="col-sm-6"><h4 class="titlepage typedj active" id="fabledj" data-dj="cfabledj">FABLE DJ SQUAD</h4></div>
                  <div class="col-sm-6"><h4 class="titlepage typedj" id="internasionaldj" data-dj="cinternasionaldj">INTERNATIONAL DJ<!-- PERFORMANCE --></h4></div>
                </div>
                </div>
            </div>



            <div class="djcontantwrap" style="background-image: url('file_upload/img/djs/{{ $djf->background }}')" id="cfabledj">
                <div class="djoverlay">
                    <div class="costumcontainer">
                        <div class="row djcontent">
                              <div class="col-sm-6 djmenu">
                                    <ul>
                                       
                                        {{--*/ $dj_ac = 'active' /*--}} 
                                        @foreach($djs as $dj)

                                        @if($dj->type == 1)

                                            <li><a href="#/" class="djanchor {{ $dj_ac }}" id="a{{ $dj->id }}" data-img="{{ $dj->background }}">{{ strtoupper($dj->name) }}</a></li>

                                        {{--*/ $dj_ac = '' /*--}} 

                                        @endif
                                        @endforeach


                                    </ul>
                              </div>

                              <div class="col-sm-6 djdes">

                                    <div class="dropdown dropdown-costum-hp">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            {{--*/ $dj_ac = 'active' /*--}} 
                                            @foreach($djs as $dj)

                                            @if($dj->type == 1)

                                                <li><a href="#/" class="djanchor {{ $dj_ac }}" id="a{{ $dj->id }}" data-img="{{ $dj->background }}">{{ strtoupper($dj->name) }}</a></li>

                                            {{--*/ $dj_ac = '' /*--}} 

                                            @endif
                                            @endforeach
                                      </ul>
                                    </div>


                                  {{--*/ $dj_hidd = 'active' /*--}} 
                                  @foreach($djs as $dj)

                                  @if($dj->type == 1)

                                      @if($dj_hidd == 'active')
                                        <div class="djbox a{{ $dj->id }}">
                                      @else
                                        <div class="djbox a{{ $dj->id }}" style="display:none">
                                      @endif

                                      <img src="{{ asset('/file_upload/img/djs') }}/{{ $dj->image }}" />
                                      <h2 class="font-bold">{{ strtoupper($dj->title) }}</h2>
                                      <!-- <p>{!! str_limit($dj->description, $limit = 500, $end = '...') !!}</p> -->
                                      <p>{!! $dj->description !!}</p>
                                      <ul>
                                        <li><a href="http://www.facebook.com/{{ $dj->facebook }}"><img src="img/facebook.png" /></a></li>
                                        <li><a href="http://www.twitter.com/{{ $dj->twitter }}"><img src="img/twitter.png" /></a></li>
                                        <li><a href="http://www.instagram.com/{{ $dj->instagram }}"><img src="img/insta.png" /></a></li>
                                      </ul>
                                  </div>

                                  {{--*/ $dj_hidd = '' /*--}} 
                                  @endif
                                  @endforeach
 

                            </div>
                        </div>
                    </div>
                </div>
            </div>

       <div class="djcontantwrap" style="background-image: url('file_upload/img/djs/{{ $dji->background }}')" id="cinternasionaldj">
                <div class="djoverlay">
                    <div class="costumcontainer">
                        <div class="row djcontent">
                          <div class="col-sm-6 djmenu">
                                <ul>
                                   
                                    {{--*/ $dj_ac = 'active' /*--}} 
                                    @foreach($djs as $dj)
                                    @if($dj->type == 2)

                                        <li><a href="#/" class="djanchori {{ $dj_ac }}" id="a{{ $dj->id }}" data-img="{{ $dj->background }}">{{ strtoupper($dj->name) }}</a></li>

                                    {{--*/ $dj_ac = '' /*--}} 
                                    @endif
                                    @endforeach


                                </ul>
                          </div>

                          <div class="col-sm-6 djdes">

                                    <div class="dropdown dropdown-costum-hp">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            {{--*/ $dj_ac = 'active' /*--}} 
                                            @foreach($djs as $dj)
                                            @if($dj->type == 2)

                                                <li><a href="#/" class="djanchori {{ $dj_ac }}" id="a{{ $dj->id }}" data-img="{{ $dj->background }}">{{ strtoupper($dj->name) }}</a></li>

                                            {{--*/ $dj_ac = '' /*--}} 
                                            @endif
                                            @endforeach
                                      </ul>
                                    </div>

                              {{--*/ $dj_hidd = 'active' /*--}} 
                              @foreach($djs as $dj)
                              @if($dj->type == 2)

                                  @if($dj_hidd == 'active')
                                    <div class="djboxi a{{ $dj->id }}">
                                  @else
                                    <div class="djboxi a{{ $dj->id }}" style="display:none">
                                  @endif

                                  <img src="{{ asset('/file_upload/img/djs') }}/{{ $dj->image }}" />
                                  <h2 class="font-bold">{{ strtoupper($dj->title) }}</h2>
                                  <p>{!! $dj->description !!}</p>
                                  <ul>
                                    <li><a href="http://www.facebook.com/{{ $dj->facebook }}"><img src="img/facebook.png" /></a></li>
                                    <li><a href="http://www.twitter.com/{{ $dj->twitter }}"><img src="img/twitter.png" /></a></li>
                                    <li><a href="http://www.instagram.com/{{ $dj->instagram }}"><img src="img/insta.png" /></a></li>
                                  </ul>
                              </div>

                              {{--*/ $dj_hidd = '' /*--}} 
                              @endif
                              @endforeach

                         
                        </div>
                    </div>
                </div>
            </div>
       </div>


    </section>

    <!-- ABOUT ============================================================================================================== -->
    <!-- ABOUT ============================================================================================================== -->
    <!-- ABOUT ============================================================================================================== -->
    <!-- ABOUT ============================================================================================================== -->

    <!-- Contact Section -->
    <section id="about" class="about-section">

        <a class="navbar-brand page-scroll spasinull" href="#page-top"><img src="img/logoputih.png" class="img-logo moveable"></a>
        
        <div class="fadeInBlock">
            <div class="costumcontainer">
                <div class="aboutcontent">
                    <h1 class="font-bold about-title">{{ strtoupper($about->title) }}</h1>
                    <p class="txt-head">
                        {{ strtoupper($about->subtitle) }}
                    </p>
                    <div class="line"></div>
                    <p>
                        {!! $about->description !!}
                    </p>
                    <div class="ungubutoon btn-about">

                        <a href="{{ url('house') }}" class="btn btn-primary">HOUSE RULES</a>
                        <a href="{{ url('menu') }}" class="btn btn-primary">OUR MENU</a>
                        <a href="{{ url('blog') }}" class="btn btn-primary">PRESS</a>
                        <a href="{{ url('promo') }}" class="btn btn-primary">PROMO</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- GALLERY ============================================================================================================= -->
    <!-- GALLERY ============================================================================================================= -->
    <!-- GALLERY ============================================================================================================= -->
    <!-- GALLERY ============================================================================================================= -->

    <section id="gallery" class="gallery-section">

        <a class="navbar-brand page-scroll spasinull" href="#page-top"><img src="img/logoungu.png" class="img-logo moveable"></a>


    <!-- INSTAGRAM -->
    <!-- ========= -->
    <!-- carousel ==================================================================================================== -->
    <!-- Full Page Image Background Carousel Header -->
    <div id="galleryCarousel" class="carousel slide carouselgallery" style="display:none">
        <!-- Indicators -->
        <!-- <ol class="carousel-indicators">

            {{--*/ $stat_activegp = 'active' /*--}} 
            {{--*/ $stat_activegpno = 0 /*--}} 
            @foreach(array_chunk($media->data, 6) as $row)

            <li data-target="#galleryCarousel" data-slide-to="{{ $stat_activegpno }}" class="{{ $stat_activegp }}"></li>

            {{--*/ $stat_activegp = '' /*--}}
            {{--*/ $stat_activegpno++ /*--}} 
            @endforeach



        </ol> -->

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">



            {{--*/ $stat_activeg = 'active' /*--}}   
            @foreach(array_chunk($media->data, 6) as $row)


                <div class="item {{ $stat_activeg }}">

                    <div class="grid home-features effect-muncul">

                    @foreach($row as $entry)

                        <div class="grid-unit view-first">
                            <div class="vinimg">
                                <?php echo "<img src=\"{$entry->images->standard_resolution->url}\" width=100% >"; ?>
                            </div>
                            <span class="caption scale-caption">
                                <span class="insta-love"><span class="fa fa-heart"></span> <?php echo "{$entry->likes->count}"; ?></span>
                            </span>
                            <div class="mask">
                                <p>
                                    
                                    <?php
                                        if("{$entry->comments->count}" == "0") {
                                            echo "No ";
                                        } else {
                                            echo "{$entry->comments->count}";
                                        }
                                    ?>

                                    comment

                                </p>
                                <h1 class="hsatuimg">
                                    <?php //echo "<img src=\"{$entry->user->profile_picture}\" width=15% class=img-circle>"; ?>
                                    <!-- <img src="{{ asset('img/instagram.png') }}" width="15%" class="img-circle" /> -->
                                </h1>
                                <a class="info" href="<?php echo "{$entry->link}"; ?>">DETAIL</a>
                            </div>
                        </div>

                    @endforeach


                    </div>

                </div>

                {{--*/ $stat_activeg = '' /*--}}

            @endforeach

            
        </div>

           
        <!-- Controls -->
        <!-- <a class="left carousel-control" href="#galleryCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#galleryCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a> -->

    </div>








    <!-- GALLERY VIDEO -->
    <!-- ========= -->
    <!-- carousel ==================================================================================================== -->
    <!-- Full Page Image Background Carousel Header -->
    <div id="galleryCarouselv" class="carousel slide carouselgallery" style="display:none">
        <!-- Indicators -->
   <!--      
        <ol class="carousel-indicators">

            {{--*/ $stat_activegp = 'active' /*--}} 
            {{--*/ $stat_activegpno = 0 /*--}} 
            @foreach(array_chunk($galleries->all(), 6) as $row)

            <li data-target="#galleryCarouselv" data-slide-to="{{ $stat_activegpno }}" class="{{ $stat_activegp }}"></li>

            {{--*/ $stat_activegp = '' /*--}}
            {{--*/ $stat_activegpno++ /*--}} 
            @endforeach


        </ol>
 -->
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">



            {{--*/ $stat_activeg = 'active' /*--}}   
            @foreach(array_chunk($galleries->all(), 6) as $row)


                <div class="item {{ $stat_activeg }}">

                    <div class="grid home-features effect-muncul">

                    @foreach($row as $gallery)

                        <div class="grid-unit view-first">
                            <div class="vinimg">

                            <img src="{{ asset('/file_upload/img/galleries') }}/{{ $gallery->cover }}" class="imgdal" />


                            <video class="viddal" autoplay loop muted poster="{{ asset('/file_upload/img/events') }}" id="video-bga">
                                <source src="{{ asset('/file_upload/video/galleries') }}/{{ $gallery->video }}" type="video/mp4">
                            </video>
                            </div>
                            <div class="caption">
                                <h1><span class="glyphicon glyphicon-play" aria-hidden="true"></span></h1>
                            </div>
                            <div class="mask">
                                <p>{{ strtoupper(date('M d', strtotime($gallery->date))) }}</p>
                                <h1>{{ strtoupper($gallery->title) }}</h1> 

                                <a class="fancybox_popup fancybox.iframe" href="https://www.youtube.com/embed/{{ $gallery->youtube }}?autoplay=1">
                                    <h1><span class="glyphicon glyphicon-play" aria-hidden="true"></span></h1>
                                </a>

                               <!--  <a class="fancybox_popup fancybox.iframe info" href="https://www.youtube.com/embed/{{ $gallery->youtube }}?autoplay=1">WATCH TRAILER</a> -->
                            </div> 
                        </div>

                    @endforeach


                    </div>

                </div>

                {{--*/ $stat_activeg = '' /*--}}

            @endforeach

            
        </div>

           
        <!-- Controls -->
        <!-- <a class="left carousel-control" href="#galleryCarouselv" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#galleryCarouselv" data-slide="next">
            <span class="icon-next"></span>
        </a> -->

    </div>




            <!-- <div class="maskgall"></div>  -->

            <div class="left">
                <div class="imageleft">
                    <div class="galleryoverlay">
                        <div class="box-btn-slide">
                            <h1 class="spasinull">SEE THE<br/>CROWD</h1>
                            <button class="btn btn-primary open-gallery" id="openphoto" data-gallery="galleryCarousel" data-control="gall-con-cos-img">PHOTOS</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="imageright">
                    <div class="galleryoverlay">
                        <div class="box-btn-slide">
                            <h1 class="spasinull">FEEL THE<br/>VIBES</h1>
                            <button class="btn btn-primary open-gallery" id="openvideo" data-gallery="galleryCarouselv" data-control="gall-con-cos-vid">WATCH</button>
                        </div>
                    </div>
                </div>
            </div>​

            <div class="gal-control-costum" style="display:none" id="gall-con-cos-img">
                <a class="" href="#galleryCarousel" data-slide="prev" id="slidekiri"><img src="{{ asset('img/slide_left.png') }}" /></a>
                <a class="" href="#galleryCarousel" data-slide="next" id="slidekanan"><img src="{{ asset('img/slide_right.png') }}" /></a>
            </div>

            <div class="gal-control-costum" style="display:none" id="gall-con-cos-vid" >
                <a class="" href="#galleryCarouselv" data-slide="prev" id="slidekiri"><img src="{{ asset('img/slide_left.png') }}" /></a>
                <a class="" href="#galleryCarouselv" data-slide="next" id="slidekanan"><img src="{{ asset('img/slide_right.png') }}" /></a>
            </div>


            <div class="galleryback">
            
                <p class="close-gallery font-color-ungu" id="openvideo"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> BACK</p>
            </div>

    </section>

    <!-- CONTACT ============================================================================================================= -->
    <!-- CONTACT ============================================================================================================= -->
    <!-- CONTACT ============================================================================================================= -->
    <!-- CONTACT ============================================================================================================= -->

    <section id="contact" class="contact-section">
        <div class="contactus">
            <h3 class="font-color-abu titlepage">CONTACT US</h3>
            <div class="row">
              <div class="col-sm-4 box-contact">
              
                <a class="fancybox_popup1 fancybox.iframe" href="https://www.google.co.id/maps/place/Lucy+in+The+Sky/@-6.2264633,106.807275,17.75z/data=!4m2!3m1!1s0x0000000000000000:0x6485482b0a0ff404" target="_blank">
                <h2 class="font-color-ungu"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></h2>
                <ul class="ulcontact">
                    <li>Fairgrounds, Lot 14 SCBD</li>
                    <li>Jl. Jend Sudirman Kav 52-53</li>
                    <li>Jakarta Selatan 12190</li>
                    <li>Indonesia</li>
                </ul>
                </a>
              </div>
              <div class="col-sm-4 box-contact">
                <h2 class="font-color-ungu"><span class="glyphicon glyphicon-earphone rotate" aria-hidden="true"></span></h2>
                <div class="box-contact-center">
                    <ul class="ulcontact">
                        <li>Phone. 021 5151501</li>
                        <li>Mobile. 0811 803 5666</li>
                        <li>Pin. 75EAE8F2</li>
                        <br/>
                        <li>Email. <a href="mailto:info@fable.co.id?Subject=Mailto" target="_top">info@fable.co.id</a></li>
                    </ul>
                </div>
              </div>
              <div class="col-sm-4 box-contact">
                <h2 class="font-color-ungu"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></h2>
                <ul class="ulcontact">
                    <li><b>Fable Nightclub</b></li>
                    <li>Thursday - Saturday 11 PM till closing</li>
                    <br/>
                    <li><b>Fable Rooftop Area (Name TBC)</b></li>
                    <li>Opening and Closing days and hours TBC</li>
                </ul>
              </div>
            </div>
        </div>
        <div class="followus">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 followus-top">
                        <h3 class="font-color-abu titlepage">FOLLOW US</h3>
                            <div class="sosmed-mobile" style="margin:10px">
                                <ul>
                                    <li><a href="https://www.facebook.com/FABLE.ALLin/"><img src="img/facebookU.png" /></a></li>
                                    <li><a href="https://www.twitter.com/FABLE_ALLin/"><img src="img/twitterU.png" /></a></li>
                                    <li><a href="https://www.instagram.com/fableallin/"><img src="img/instaU.png" /></a></li>
                                </ul>
                            </div>
                        {!! Form::open(['url' => 'subscribes', 'files' => true, 'class' => 'form-horizontal']) !!}
                        <table align="center">
                            <tr>
                                <td  class="sosmed-desktop">
                                    <ul>
                                        <li><a href="https://www.facebook.com/FABLE.ALLin/"><img src="img/facebookU.png" /></a></li>
                                        <li><a href="https://www.twitter.com/FABLE_ALLin/"><img src="img/twitterU.png" /></a></li>
                                        <li><a href="https://www.instagram.com/fableallin/"><img src="img/instaU.png" /></a></li>
                                    </ul>
                                </td>
                                <td>
                                    <input type="email" name="email" value="" />
                                </td>
                                <td>
                                    <input type="submit" value="SUBSCRIBE" />
                                </td>
                            </tr>
                        </table>
                        {!! Form::close() !!}

                    </div>
                    <div class="col-lg-12 footer">
                        <p>&copy; FABLE. 2015. MANAGED BY ALL-IN</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection