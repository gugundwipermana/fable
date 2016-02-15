@extends('app')

@section('htmlheader_title')
    Event
@endsection

@section('content_header')
  <h1>
      Create New Event
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ url('events') }}"><i class="fa fa-send"></i> Event</a></li>
      <li class="active">New</li>
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
                <video width="100%" controls id="preVideo">
                  <source src="" type="video/mp4" id="mp4source">
                </video>
              </div>
              <div id="upload_progress" style="display:none"><!-- TEMPAT UNTUK PROGRESBAR --></div>

              <div>
                <!-- <form action="{{ url('events/upload') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data"> -->

                {!! Form::open(['url' => 'events/upload', 'files' => true]) !!}
                    <div class="form-group">
                      <input type="file" id="file" name="file[]" multiple="multiple" class="form-control"  />
                    </div>
                    <input type="submit" id="submit" value="Upload" class="btn btn-primary" />

                {!! Form::close() !!}
              </div>

            </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class='box box-info'>
            <div class='box-body'>


              @include('errors.list')

              {!! Form::open(['url' => 'events', 'files' => true]) !!}

                @include('events.form', ['submitButtonText' => 'Save'])

              {!! Form::close() !!}


            </div>
            </div>
            </div>
        </div>

      <!-- </div>
    </div> --><!-- /.box -->

  </div><!-- /.col -->
</div><!-- /.row -->

@endsection
