@extends('admindosen.layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $title }}
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-8 order-md-1">
         <!-- Profile Image -->
         <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>


                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Email</b> <a class="pull-right">{{ auth()->user()->email }}</a>
                    </li>
                  </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Jurusan</strong>

              <p class="text-muted">
                Sistem Informasi
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Fakultas</strong>

              <p class="text-muted">Teknologi Informasi</p>

              <hr>
            </div>
            <!-- /.box-body -->
          </div>
      
       
      </div>
      <!-- /.row -->
   

    </section>
    <!-- /.content -->
  </div>

@endsection