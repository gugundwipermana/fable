@extends('app')

@section('htmlheader_title')
    Events {{ $event->title }}
@endsection

@section('content_header')
  <h1>
      Events {{ $event->title }}
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
        <h3 class="box-title">{{ $event->title }}</h3>
        <div class="pull-right box-tools">
          <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
        

                <h1>{{ $event->title }}</h1>
                <p><i class="fa fa-calendar"> {{ strtoupper(date('d F Y', strtotime($event->date))) }}</i></p>
                <p>{!! $event->description !!}</p>

                <p>
                  <strong>
                    @if($event->type == 1)
                      Nasional
                    @elseif($event->type == 2)
                      Internasional
                    @endif
                  </strong>
                </p>


                <div class="row">
                  <div class="col-md-6">
                          <div class='box-body'>

                          @if($event->type == 1)
                            <img src="{{ asset('file_upload/img/events') }}/{{ $event->cover }}" /> 
                          @elseif($event->type == 2)
                            <div id="uploaded">
                              <video width="100%" autoplay loop controls id="preVideo">
                                <source src="{{ asset('file_upload/video/events') }}/{{ $event->video }}" type="video/mp4" id="mp4source">
                              </video>
                            </div>
                           @endif
                          </div>
                  </div>
                  <div class="col-md-6">
                          <div class='box-body'>

                            <div class="form-group">
                              <a href="{{ url('events', $event->id) }}/edit" class="btn btn-primary btn-xs">Edit</a>
                            </div>
                            <div class="form-group">
                              {!! Form::open(['method' => 'DELETE', 'route' => ['events.destroy', $event->id]]) !!}

                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}

                              {!! Form::close() !!}
                            </div>

                            <div class="form-group">
                              <a href="{{ url('events', $event->id) }}/reserves" class="btn btn-primary btn-xs">Reserves <span class="badge">{{ $event->reserves()->count() }}</span> </a>
                            </div>
                            <div class="form-group">
                              <a href="{{ url('events', $event->id) }}/guests" class="btn btn-primary btn-xs">Guests <span class="badge">{{ $event->guests()->count() }}</span> </a>
                            </div>


                      </div>
                  </div>
              </div>

      </div><!-- /.box-body -->
    </div><!-- /.box -->

  </div><!-- /.col -->
</div><!-- /.row -->

@endsection
