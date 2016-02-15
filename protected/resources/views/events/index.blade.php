@extends('app')

@section('htmlheader_title')
    Events
@endsection

@section('content_header')
  <h1>
      Events
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> Events</li>
  </ol>
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Articles</h3>
        <div class="pull-right box-tools">
          <a href="{{ url('events/create') }}">
          <button class="btn btn-info btn-sm" data-toggle="tooltip" title="Tambah Event Baru">Add New Event</button></a>

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
              <th>Type</th>
              <th>Description</th>
              <th style="width: 100px"></th>
            </tr>
          </thead>
          <tbody>

            {{--*/ $no = 1 /*--}}
            @foreach($events as $event)

            <tr>
              <td>{{ $no }}</td> 
              <td>{{ $event->title }}</td>
              <td>{{ strtoupper(date('d F Y', strtotime($event->date))) }}</td>

              <td>
                  @if($event->type == 1)
                    Nasional
                  @elseif($event->type == 2)
                    Internasional
                  @endif
              </td>

              <td>{!! $event->description !!}</td>
              <td>
                <div class="form-inline">
                  <div class="form-group">
                    <a href="{{ url('events', $event->id) }}/edit" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                  </div>
                  <div class="form-group">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['events.destroy', $event->id]]) !!}

                      <!-- {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!} -->
                      <button type="submit" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete?')" ><i class="fa fa-trash-o"></i></button>

                    {!! Form::close() !!}
                  </div>

                  <div class="form-group">
                    <a href="{{ url('events', $event->id) }}" class="btn btn-success btn-xs" data-toggle="tooltip"  title="Show"><i class="fa fa-eye"></i></a>
                  </div>

                  <div class="form-group">
                    <a href="{{ url('events', $event->id) }}/reserves" class="btn btn-info btn-xs">Reserves <span class="badge">{{ $event->reserves()->count() }}</span> </a>
                  </div>
                  <div class="form-group">
                    <a href="{{ url('events', $event->id) }}/guests" class="btn btn-info btn-xs">Guests <span class="badge">{{ $event->guests()->count() }}</span> </a>
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
