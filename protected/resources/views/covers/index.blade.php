@extends('app')

@section('htmlheader_title')
    Covers
@endsection

@section('content_header')
  <h1>
      Covers
      <small>Create article for your style</small>
  </h1>

  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-send"></i> Covers</li>
  </ol>
@endsection


@section('main-content')

@foreach($covers as $cover)

<div class="row">
    <div class="col-md-6">
        <div class='box box-info'>
            <div class='box-body'>
              <div id="uploaded">
                <video width="100%" autoplay loop controls id="preVideo">
                  <source src="{{ asset('file_upload/video/covers') }}/{{ $cover->video }}" type="video/mp4" id="mp4source">
                </video>
              </div>
             
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class='box box-info'>
            <div class='box-body'>

            <table class="table table-striped">
              <tr>
                <td width="40%"><strong>Quote</strong></td>
                <td>{{ $cover->firstquote }} {{ $cover->lastquote }}</td>
              </tr>
              <tr>
                <td><strong>Video Name</strong></td>
                <td>{{ $cover->video }}</td>
              </tr>
              <tr>
                <td><strong>Music</strong></td>
                <td>{{ $cover->music }}</td>
              </tr>
              <tr>
                <td><strong>Title / Band</strong></td>
                <td>{{ $cover->title }} / {{ $cover->band }}</td>
              </tr>
              <tr>
                <td><strong>Album / Date</strong></td>
                <td>{{ $cover->album }} / {{ strtoupper(date('d F Y', strtotime($cover->date))) }}</td>
              </tr>
            </table>
              

            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <a href="{{ url('covers', $cover->id) }}/edit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
</div>

@endforeach

@endsection
