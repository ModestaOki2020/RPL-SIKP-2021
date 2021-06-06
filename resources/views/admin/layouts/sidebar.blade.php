<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
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
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Verifikasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ url('/prakp') }}l"><i class="fa fa-circle-o"></i> Verifikasi Pra KP</a></li>
            <li><a href="{{ url('/kp') }}"><i class="fa fa-circle-o"></i>Verifikasi KP</a></li>
            <li><a href="{{ url('/surat') }}"><i class="fa fa-circle-o"></i> Verifikasi Surat KP</a></li>
          </ul>
        </li>

        <li>
          <a href="{{ url('/jadwal') }}">
            <i class="fa fa-th"></i> <span>jadwal ujian</span>
          </a>
        </li>


        <li><a href="{{ url('/batas') }}"><i class="fa fa-book"></i> <span>set batas ujian</span></a></li>
        <li>
          <a href="{{ url('/logout') }}">
            <i class="fa fa-log"></i> <span>Keluar</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>