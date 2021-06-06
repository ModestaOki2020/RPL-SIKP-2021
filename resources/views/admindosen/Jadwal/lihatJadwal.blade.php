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
        <div class=" ol-md-12">
          <table class="table table-responsive table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nim</th>
              <th>Nama Mahasiswa</th>
              <th>Judul</th>
              <th>Ruangan</th>
              <th>Jadwal</th>
             </tr>
            </thead>
          </table>
        </div>
       
      </div>
      <!-- /.row -->
   

    </section>
    <!-- /.content -->
  </div>

@endsection