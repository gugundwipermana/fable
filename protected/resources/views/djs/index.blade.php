@extends('app')

@section('htmlheader_title')
    DJ
@endsection

@section('content_header')
  <h1>
      DJ
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> DJ</li>
  </ol>
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">DJ</h3>
        <div class="pull-right box-tools">
          <a href="{{ url('djs/create') }}"><button class="btn btn-info btn-sm" data-toggle="tooltip" title="Tambah DJ Baru">Add New DJ</button></a>

          <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">

      <div class="row">
      @foreach($djs as $dj)
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('{{ asset('/file_upload/img/djs') }}/{{ $dj->background }}') center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
              <h3 class="widget-user-username">{{ $dj->name }}</h3>
              <h5 class="widget-user-desc">{{ $dj->title }}</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="{{ asset('/file_upload/img/djs') }}/{{ $dj->image }}" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-12">
                  <br/>

                  <div class="box box-default collapsed-box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Description</h3>

                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <p>{!! $dj->description !!}</p>

                      <div class="text-blue">

                        www.facebook.com/{{ $dj->facebook }} <br/>
                        www.twitter.com/{{ $dj->twitter }} <br/>
                        www.instagram.com/{{ $dj->instagram }}

                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                  
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">

                  <div class="row">
                    <div class="col-sm-6 border-right">
                      <div class="description-block">
                       @if($dj->type == 1)
                          <p class="label label-success">FABLE DJ SQUAD TEAMS</p>
                        @elseif($dj->type == 2)
                          <p class="label label-info">INTERNATIONAL DJ</p>
                        @endif
                     </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="description-block">
                        
                        <div class="form-inline">
                          <div class="form-group">
                            <a href="{{ url('djs', $dj->id) }}/edit" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                          </div>
                          <div class="form-group">
                            {!! Form::open(['method' => 'DELETE', 'route' => ['djs.destroy', $dj->id]]) !!}

                              <!-- {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!} -->
                              <button type="submit" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete?')" ><i class="fa fa-trash-o"></i></button>

                            {!! Form::close() !!}
                          </div>
                        </div>

                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                  </div>

                </div>
              </div>
              
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
      @endforeach
      </div>


      </div><!-- /.box-body -->
    </div><!-- /.box -->

    </div><!-- /.col -->
  </div><!-- /.row -->



@endsection
