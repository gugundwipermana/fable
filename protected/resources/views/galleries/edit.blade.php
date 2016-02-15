@extends('app')

@section('htmlheader_title')
    Gallery
@endsection

@section('content_header')
  <h1>
      Edit
      <small>{{ $gallery->title }}</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ url('galleries') }}"><i class="fa fa-send"></i> Products</a></li>
      <li><a href="{{ url('galleries', $gallery->id) }}">{{ $gallery->title }}</a></li>
      <li class="active">Edit</li>
  </ol>
@endsection

@section('main-content')

<div class="row">
  <div class="col-xs-12">


    <div class="row">
        <div class="col-md-6">
            <div class='box box-info'>

            <div class='box-body'>



              <div id="uploaded"> 
                <video width="100%" autoplay loop controls id="preVideo">
                  <source src="{{ asset('file_upload/video/galleries') }}/{{ $gallery->video }}" type="video/mp4" id="mp4source">
                </video>
              </div>
              <div id="upload_progress" style="display:none"><!-- TEMPAT UNTUK PROGRESBAR --></div>

              <div>
                <!-- <form action="{{ url('events/upload') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data"> -->

                {!! Form::open(['url' => 'galleries/upload', 'files' => true]) !!}

                  <div class="form-group">
                    <input type="file" id="file" name="file[]" multiple="multiple" class="form-control" />
                  </div>
                    <input type="submit" id="submitVidGallery_e" value="Upload" class="btn btn-primary" />

                {!! Form::close() !!}
              </div>

            </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class='box box-info'>
            <div class='box-body'>


              @include('errors.list')

              {!! Form::model($gallery, ['method' => 'PATCH', 'action' => ['GalleriesController@update', $gallery->id], 'files' => true]) !!}

                @include('galleries.form', ['submitButtonText' => 'Save'])

              {!! Form::close() !!}


              </div>
            </div>
            </div>
        </div>

    

  </div><!-- /.col -->
</div><!-- /.row -->

@endsection
