@extends('app')

@section('htmlheader_title')
    Gallery {{ $gallery->title }}
@endsection

@section('content_header')
  <h1>
      Gallery {{ $gallery->title }}
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> Gallery</li>
  </ol>
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">{{ $gallery->title }}</h3>
        <div class="pull-right box-tools">
          <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        

                <h1>{{ $gallery->title }}</h1>
                <p><i class="fa fa-calendar"> {{ strtoupper(date('d F Y', strtotime($gallery->date))) }}</i></p>


                <div class="row">
                  <div class="col-md-6">
                          <div class='box-body'>

                            <div id="uploaded">
                              <video width="100%" autoplay loop controls id="preVideo">
                                <source src="{{ asset('file_upload/video/galleries') }}/{{ $gallery->video }}" type="video/mp4" id="mp4source">
                              </video>
                            </div>
                           
                          </div>
                  </div>
                  <div class="col-md-6">
                          <div class='box-body'>

                           <div class="form-group">
                              <a href="{{ url('galleries', $gallery->id) }}/edit" class="btn btn-primary btn-xs">Edit</a>
                            </div>
                            <div class="form-group">
                              {!! Form::open(['method' => 'DELETE', 'route' => ['galleries.destroy', $gallery->id]]) !!}

                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}

                              {!! Form::close() !!}
                            </div>

                      </div>
                  </div>
              </div>

      </div><!-- /.box-body -->
    </div><!-- /.box -->

  </div><!-- /.col -->
</div><!-- /.row -->

@endsection
