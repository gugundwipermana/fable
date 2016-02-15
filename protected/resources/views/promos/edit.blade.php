@extends('app')

@section('htmlheader_title')
    Promo
@endsection

@section('content_header')
  <h1>
      Edit
      <small>{{ $promo->name }}</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ url('promos') }}"><i class="fa fa-send"></i> Promos</a></li>
      <li><a href="{{ url('promos', $promo->id) }}">{{ $promo->title }}</a></li>
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

        {!! Form::model($promo, ['method' => 'PATCH', 'action' => ['PromosController@update', $promo->id], 'files' => true]) !!}

          @include('promos.form', ['submitButtonText' => 'Save'])

        {!! Form::close() !!}

      </div>
    </div><!-- /.box -->

  </div><!-- /.col -->
</div><!-- /.row -->

@endsection
