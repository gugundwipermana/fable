@extends('app')

@section('htmlheader_title')
    Galleries
@endsection

@section('content_header')
  <h1>
      Galleries
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> Galleries</li>
  </ol>
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Galleries</h3>
        <div class="pull-right box-tools">
          <a href="{{ url('galleries/create') }}">
          <button class="btn btn-info btn-sm" data-toggle="tooltip" title="Tambah Gallery Baru">Add New Gallery</button></a>

          <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Title</th>
              <th>Date</th>
              <th style="width: 150px"></th>
            </tr>
          </thead>
          <tbody>

            {{--*/ $no = 1 /*--}}
            @foreach($galleries as $gallery)

            <tr>
              <td>{{ $no }}</td> 
              <td>{{ $gallery->title }}</td>
              <td>{{ strtoupper(date('d F Y', strtotime($gallery->date))) }}</td>
              <td>
                <div class="form-inline">
                  <div class="form-group">
                    <a href="{{ url('galleries', $gallery->id) }}/edit" class="btn btn-primary btn-xs">Edit</a>
                  </div>
                  <div class="form-group">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['galleries.destroy', $gallery->id]]) !!}

                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("Are you sure you want to delete?")']) !!}

                    {!! Form::close() !!}
                  </div>
                  <div class="form-group">
                    <a href="{{ url('galleries', $gallery->id) }}" class="btn btn-success btn-xs">Show</a>
                  </div>
                </div>
              </td>
            </tr>

            {{--*/ $no++ /*--}}
            @endforeach
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->

    </div><!-- /.col -->
  </div><!-- /.row -->

@endsection
