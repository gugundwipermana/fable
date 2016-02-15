@extends('app')

@section('htmlheader_title')
    Articles
@endsection

@section('content_header')
  <h1>
      Edit
      <small>COVER</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ url('covers') }}"><i class="fa fa-send"></i> Products</a></li>
      <li><a href="{{ url('covers', $cover->id) }}">{{ $cover->firstquote }}</a></li>
      <li class="active">Edit</li>
  </ol>
@endsection

@section('main-content')

<div class="row">
  <div class="col-xs-12">

    <!-- <div class='box box-info'>
      <div class='box-header'>
        <h3 class='box-title'>CK Editor <small>Advanced and full of features</small></h3>
        
        <div class="pull-right box-tools">
          <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class='box-body pad'> -->



        <div class="row">
            <div class="col-md-6">
            <div class='box box-info'>

            <div class='box-body'>
              <div id="uploaded">
                <video width="100%" autoplay loop controls id="preVideo">
                  <source src="{{ asset('file_upload/video/covers') }}/{{ $cover->video }}" type="video/mp4" id="mp4source">
                </video>
              </div>
              <div id="upload_progress" style="display:none"><!-- TEMPAT UNTUK PROGRESBAR --></div>

              <div>
                <!-- <form action="{{ url('events/upload') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data"> -->

                {!! Form::open(['url' => 'covers/upload', 'files' => true]) !!}
                    <div class="form-group">
                      <input type="file" id="file" name="file[]" multiple="multiple" class="form-control" />
                    </div>

                    <input type="submit" id="submitVidCover" value="Upload" class="btn btn-primary" />

                {!! Form::close() !!}
              </div>

            </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class='box box-info'>
            <div class='box-body'>

              @include('errors.list')

              {!! Form::model($cover, ['method' => 'PATCH', 'action' => ['CoversController@update', $cover->id], 'files' => true]) !!}

                @include('covers.form', ['submitButtonText' => 'Save'])

              {!! Form::close() !!}

            </div>
            </div>
            </div>
        </div>

        

        






        

    <!--   </div>
    </div> -->

  </div><!-- /.col -->
</div><!-- /.row -->

@endsection
