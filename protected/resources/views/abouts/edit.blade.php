@extends('app')

@section('htmlheader_title')
    Abouts
@endsection

@section('content_header')
  <h1>
      Edit
      <small>{{ $about->title }}</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ url('abouts') }}"><i class="fa fa-send"></i> Products</a></li>
      <li><a href="{{ url('abouts', $about->id) }}">{{ $about->title }}</a></li>
      <li class="active">Edit</li>
  </ol>
@endsection

@section('main-content')

<div class="row">
  <div class="col-xs-12">

    <div class='box box-info'>
      <div class='box-header'>
        <h3 class='box-title'>CK Editor <small>Advanced and full of features</small></h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
          <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div><!-- /. tools -->
      </div><!-- /.box-header -->
      <div class='box-body pad'>

        @include('errors.list')

        {!! Form::model($about, ['method' => 'PATCH', 'action' => ['AboutsController@update', $about->id], 'files' => true]) !!}

          @include('abouts.form', ['submitButtonText' => 'Save'])

        {!! Form::close() !!}

      </div>
    </div><!-- /.box -->

  </div><!-- /.col -->
</div><!-- /.row -->

@endsection
