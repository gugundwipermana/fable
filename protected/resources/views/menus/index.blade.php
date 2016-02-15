@extends('app')

@section('htmlheader_title')
    Menus
@endsection

@section('content_header')
  <h1>
      Menus
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> Menus</li>
  </ol>
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Menus</h3>
        <div class="pull-right box-tools">
          <a href="{{ url('menus/create') }}">
          <button class="btn btn-info btn-sm" data-toggle="tooltip" title="Tambah Menu Baru">Add New Menu</button></a>

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
              <th>Category</th>
              <th>Description</th>
              <th style="width: 100px"></th>
            </tr>
          </thead>
          <tbody>

            {{--*/ $no = 1 /*--}}
            @foreach($menus as $menu)

            <tr>
              <td>{{ $no }}</td> 
              <td>{{ $menu->title }}</td>

              <td>

              @foreach($categorymenus as $categorymenu)

                @if($categorymenu->id == $menu->category_menu_id)
                  {{ $categorymenu->name }}
                @endif

              @endforeach

              </td> 

              <td>{!! $menu->description !!}</td>
              <td>
                <div class="form-inline">
                  <div class="form-group">
                    <a href="{{ url('menus', $menu->id) }}/edit" class="btn btn-primary btn-xs">Edit</a>
                  </div>
                  <div class="form-group">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['menus.destroy', $menu->id]]) !!}

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
