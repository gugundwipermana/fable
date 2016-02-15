@extends('app')

@section('htmlheader_title')
    Reserves
@endsection

@section('content_header')
  <h1>
      Reserves
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> Reserves</li>
  </ol>
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Reserves</h3>
        <div class="pull-right box-tools">
          <a href="{{ url('reserves/create') }}">
          <button class="btn btn-info btn-sm" data-toggle="tooltip" title="Tambah Reserve Baru">Add New Reserve</button></a>

          <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Event Title</th>
              <th>Name</th>
              <th>Age</th>
              <th>Phone</th>
              <th>Email</th>
              <th style="width: 100px"></th>
            </tr>
          </thead>
          <tbody>

            {{--*/ $no = 1 /*--}}
            @foreach($reserves as $reserve)

            <tr>
              <td>{{ $no }}</td> 
              <td>{{ $reserve->event->title }}</td>
              <td>{{ $reserve->name }}</td>
              <td>{{ $reserve->age }}</td>
              <td>{{ $reserve->phone }}</td>
              <td>{{ $reserve->email }}</td>

              <td>
                <div class="form-inline">
                  <div class="form-group">
                    <a href="{{ url('reserves', $reserve->id) }}/edit" class="btn btn-primary btn-xs">Edit</a>
                  </div>
                  <div class="form-group">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['reserves.destroy', $reserve->id]]) !!}

                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("Are you sure you want to delete?")']) !!}

                    {!! Form::close() !!}
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
