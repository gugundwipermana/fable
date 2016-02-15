@extends('app')

@section('htmlheader_title')
    Promos
@endsection

@section('content_header')
  <h1>
      Promos
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> Promos</li>
  </ol>
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Promos</h3>
        <div class="pull-right box-tools">
          <a href="{{ url('promos/create') }}"><button class="btn btn-info btn-sm" data-toggle="tooltip" title="Tambah Promo Baru">Add New Promo</button></a>

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
              <th>Description</th>
              <th>Image</th>
              <th style="width: 100px"></th>
            </tr>
          </thead>
          <tbody>

            {{--*/ $no = 1 /*--}}
            @foreach($promos as $promo)

            <tr>
              <td>{{ $no }}</td>  
              <td>{{ $promo->title }}</td>
              <td>{{ strtoupper(date('d F Y', strtotime($promo->date))) }}</td> 
              <td>{!! $promo->description !!}</td>
              <td><img src="{{ asset('/file_upload/img/promos') }}/{{ $promo->image }}" class="img-responsive img-thumbnail" alt="Image" width="100"></td>
              
              <td>
                <div class="form-inline">
                  <div class="form-group">
                    <a href="{{ url('promos', $promo->id) }}/edit" class="btn btn-primary btn-xs">Edit</a>
                  </div>
                  <div class="form-group">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['promos.destroy', $promo->id]]) !!}

                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("Are you sure you want to delete?")']) !!}

                    {!! Form::close() !!}
                  </div>
                  <div class="form-group">
                    <a href="{{ url('promos', $promo->id) }}/reserves" class="btn btn-info btn-xs">Reserves <span class="badge">{{ $promo->reserves()->count() }}</span> </a>
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
