@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')

<div class="row">
  <div class="col-xs-12">

        <!-- Main content -->
        <section class="content">
        
<!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $jumEvent }}</h3>
                  <p>Event</p>
                </div>
                <div class="icon">
                  <i class="fa fa-calendar"></i>
                </div>
                <a href="{{ url('events') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{{ $jumGallery }}</h3>
                  <p>Gallery</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file-image-o"></i>
                </div>
                <a href="{{ url('galleries') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{ $jumPromo }}</h3>
                  <p>Promo</p>
                </div>
                <div class="icon">
                  <i class="fa fa-credit-card"></i>
                </div>
                <a href="{{ url('promos') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>{{ $jumUser }}</h3>
                  <p>User</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ url('users') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->

         


         <div class="row">
          
          <div class="col-md-4">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest DJ</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">{{ $jumDj }} DJ</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">

                  @foreach($djs as $dj)



                    <li>
                      <img src="{{ asset('/file_upload/img/djs') }}/{{ $dj->image }}" alt="User Image">
                      <a class="users-list-name" href="#">{{ $dj->name }}</a>
                    </li>

                  @endforeach
                    
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="{{ url('djs') }}" class="uppercase">View All DJ</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
          </div>
        </section>


       </div>
    </div>

@endsection
