<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/avatar5.png')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> {{ Auth::user()->email }}</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <!-- <li class="active"><a href="{{ url('home') }}"><i class='fa fa-dashboard'></i> <span>Home</span></a></li> -->
            <li><a href="{{ url('home') }}"><i class='fa fa-dashboard text-blue'></i> <span>Home</span></a></li>

            <li><a href="{{ url('covers') }}"><i class='fa fa-file-movie-o text-yellow'></i> <span>Cover</span></a></li>

            <li class="treeview">
                <a href="#"><i class='fa fa-calendar-o text-red'></i> <span>Events</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('events') }}"><i class='fa fa-circle-o text-green'></i> <span>Events</span></a></li>
                    <li><a href="{{ url('reserves') }}"><i class='fa fa-circle-o text-yellow'></i> <span>All Reserves</span></a></li>
                    <li><a href="{{ url('guests') }}"><i class='fa fa-circle-o text-blue'></i> <span>All Guests</span></a></li>
                </ul>
            </li>
            
            <li><a href="{{ url('djs') }}"><i class='fa fa-users text-green'></i> <span>DJ</span></a></li>


            <li class="treeview">
                <a href="#"><i class='fa fa-copyright text-blue'></i> <span>Abouts</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">


                    <li><a href="{{ url('abouts') }}"><i class='fa fa-circle-o text-yellow'></i> <span>About</span></a></li>

                    <li><a href="{{ url('houses') }}"><i class='fa fa-circle-o text-red'></i> <span>House Rules</span></a></li>

                    <li class="treeview">
                        <a href="#"><i class="fa fa-navicon text-green"></i> <span>Our Menu</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('categorymenus') }}"><i class='fa fa-circle-o text-red'></i> <span>Categories Menu</span></a></li>
                            <li><a href="{{ url('menus') }}"><i class='fa fa-circle-o text-yellow'></i> <span>Menu</span></a></li>
                        </ul>
                    </li>

                    <li><a href="{{ url('blogs') }}"><i class='fa fa-circle-o  text-red'></i> <span>Press</span></a></li>

                    
                    <li class="treeview">
                        <a href="#"><i class="fa fa-navicon text-green"></i> <span>Promo</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('promos') }}"><i class='fa  fa-image text-blue'></i> <span>Promo</span></a></li>
                            <li><a href="{{ url('reservepromos') }}"><i class='fa fa-circle-o text-yellow'></i> <span>All Reserve Promo</span></a></li>
                        </ul>
                    </li>


                </ul>
            </li>

            




            <li><a href="{{ url('galleries') }}"><i class='fa  fa-image text-yellow'></i> <span>Galleries</span></a></li>

            <li><a href="{{ url('subscribes') }}"><i class='fa  fa-location-arrow text-red'></i> <span>Subscribes</span></a></li>

            <li><a href="{{ url('users') }}"><i class='fa  fa-user text-green'></i> <span>Users</span></a></li>
            
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
