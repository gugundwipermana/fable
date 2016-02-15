@extends('app')

@section('htmlheader_title')
    Users
@endsection

@section('content_header')
  <h1>
      Users
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> Users</li>
  </ol>
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Users</h3>
          <div class="pull-right box-tools">
            <a href="{{ url('users', 'create') }}"><button class="btn btn-info btn-sm" data-toggle="tooltip" title="Tambah User Baru">Add User</button></a>

            <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
          </div><!-- /. tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
          <table class="table table-condensed">
            <tr>
              
              <th>Name</th>
              <th>Email</th>
              <th style="width: 100px"></th>
            </tr>

            @foreach($users as $user)

            <tr>
              
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              
              <td>
                <div class="form-inline">
                  <div class="form-group">
                    <a href="{{ url('users', $user->id) }}/edit" class="btn btn-primary btn-xs">Edit</a>
                  </div>
                  <div class="form-group">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id]]) !!}

                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("Are you sure you want to delete?")']) !!}

                    {!! Form::close() !!}
                  </div>
                </div>
              </td>
            </tr>

            @endforeach

          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->

    </div><!-- /.col -->
  </div><!-- /.row -->

@endsection
