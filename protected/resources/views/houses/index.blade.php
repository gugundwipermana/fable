@extends('app')

@section('htmlheader_title')
    House Rules
@endsection

@section('content_header')
  <h1>
      House Rules
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> House Rules</li>
  </ol>
@endsection


@section('main-content')

  @foreach($houses as $house)
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">HOUSE</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <p>{!! $house->description !!}</p>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">

                  <div class="form-group">
                    <a href="{{ url('houses', $house->id) }}/edit" class="btn btn-primary">Edit</a>
                  </div>

        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
  @endforeach


@endsection
