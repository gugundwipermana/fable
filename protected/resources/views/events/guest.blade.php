@extends('app')

@section('htmlheader_title')
    Guests {{ $event->title }}
@endsection

@section('content_header')
  <h1>
      Guests {{ $event->title }}
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> Guests</li>
  </ol>
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">{{ $event->title }}</h3>
        <div class="pull-right box-tools">
          <a href="{{ url('guests/create') }}">
          <button class="btn btn-info btn-sm" data-toggle="tooltip" title="Tambah Guest Baru">Add New Guest</button></a>

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
              <th>Genre</th>
              <th style="width: 100px"></th>
            </tr>
          </thead>
          <tbody>

            {{--*/ $no = 1 /*--}}
            @foreach($event->guests as $guest)

            <tr>
              <td>{{ $no }}</td> 
              <td>{{ $guest->event->title }}</td>
              <td>{{ $guest->name }}</td>
              <td>{{ $guest->age }}</td>
              <td>{{ $guest->phone }}</td>
              <td>{{ $guest->email }}</td>
              <td>{{ $guest->genre }}</td>

              <td>
                <div class="form-inline">
                  <div class="form-group">
                    <a href="{{ url('guests', $guest->id) }}/edit" class="btn btn-primary btn-xs">Edit</a>
                  </div>
                  <div class="form-group">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['guests.destroy', $guest->id]]) !!}

                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}

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
