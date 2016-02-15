@extends('app')

@section('htmlheader_title')
    Abouts
@endsection

@section('content_header')
  <h1>
      Abouts
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> Abouts</li>
  </ol>
@endsection


@section('main-content')

  @foreach($abouts as $about)
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">ABOUT</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <h2>{{ $about->title }}</h2>
          <p><strong>{{ $about->subtitle }}</strong></p>
          <p>{!! $about->description !!}</p>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">

                  <div class="form-group">
                    <a href="{{ url('abouts', $about->id) }}/edit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                  </div>

        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
  @endforeach


@endsection
