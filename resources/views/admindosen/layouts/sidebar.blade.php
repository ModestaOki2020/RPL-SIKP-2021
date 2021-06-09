@if(auth()->user()->level=="dosen")

@endif
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        </div>
        <div class="pull-left info">
        <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
        <li>
          <a href="{{ url('/datadosen') }}">
            <i class="glyphicon glyphicon-user"></i> <span>Data Diri Dosen</span>
          </a>
        </li>

        <li>
          <a href="{{ url('/dosenbimbing') }}">
            <i class="fa fa-book"></i> <span>Lihat Bimbingan</span>
          </a>
        </li>
        <li><a href="{{ url('/jadwalDosen') }}"><i class="fa fa-book"></i> <span>Lihat jadwal </span></a></li>
        <li>
          <a href="{{ url('/logout') }}">
            <i class="fa fa-log"></i> <span>Keluar</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>