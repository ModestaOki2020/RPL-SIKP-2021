<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">{{ auth()->user()->name }}
        </div>
        <div class="pull-left info">
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
        <li>
          <a href="{{ url('/profile') }}">
            <i class="fa fa-th"></i> <span>Data diri mahasiswa</span>
          </a>
        </li>
        <li><a href="{{ url('/registrasi') }}"><i class="fa fa-book"></i> <span>registrasi KP</span></a></li>
        <li>
          <a href="{{ url('/suratreq') }}">
            <i class="fa fa-book"></i> <span>Pengajuan Surat KP</span>
          </a>
        </li>

        <li>
          <a href="{{ url('/menupra') }}">
            <i class="fa fa-book"></i> <span>Registrasi Pra KP</span>
          </a>
        </li>

        <li>
          <a href="{{ url('/logout') }}">
            <i class="fa fa-log"></i> <span>Keluar</span>
          </a>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>