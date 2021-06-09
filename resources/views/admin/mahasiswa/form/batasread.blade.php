@extends('admin.layouts.master')

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
        <td><a href="{{ url('/batas/form') }}" class="btn btn-danger">tambah</a></td> 
            <tr>
            <th scope="col">No</th>
            <th scope="col">ID</th>
            <th scope="col">Tanggal Mulai</th>
            <th scope="col">Tanggal Selesai</th>
           
            </tr>
        </thead>
        @php 
            $no=1;           
        @endphp
        @foreach($dr as $l)
        <tbody>
            <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $l->id_jadwal }}</td>
            <td>{{ $l->tglMulai }}</td>
            <td>{{ $l->tglSelesai }}</td>
           
            <td><a href="/batas/edit/{{$l->id_jadwal}}" class="btn btn-success">edit</a></td>  
            <td><a href="/batas/hapus/{{ $l->id_jadwal }}" class="btn btn-danger">hapus</a></td> 
            </tr>
                    
        </tbody>     
        @endforeach

        </table>
        
       <!-- /.row -->
    
 
     </section>
     <!-- /.content -->
   </div>
@endsection