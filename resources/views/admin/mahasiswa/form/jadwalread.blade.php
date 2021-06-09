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
        <td><a href="{{ url('/jadwal/form') }}" class="btn btn-danger">tambah</a></td> 
            <tr>
            <th scope="col">No</th>
            <th scope="col">ID</th>
            <th scope="col">Tanggal Mulai</th>
            <th scope="col">Tanggal Selesai</th>
            <th scope="col">NIDN</th>
            <th scope="col">Ruang</th>
            <th scope="col">Jam Mulai</th>
            <th scope="col">Jam Selesai</th>
           
            </tr>
        </thead>
        @php 
            $no=1;           
        @endphp
        @foreach($dq as $m)
        <tbody>
            <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $m->id_jadwal }}</td>
            <td>{{ $m->tglMulai }}</td>
            <td>{{ $m->tglSelesai }}</td>
            <td>{{ $m->nidn }}</td>
            <td>{{ $m->ruang }}</td>
            <td>{{ $m->jamMulai }}</td>
            <td>{{ $m->jamSelesai }}</td>
           
            <td><a href="/jadwal/edit/{{$m->id_jadwal}}" class="btn btn-info">edit</a></td>  
            <td><a href="/jadwal/hapus/{{ $m->id_jadwal }}" class="btn btn-success">hapus</a></td> 
            </tr>
                    
        </tbody>     
        @endforeach

        </table>
        
       <!-- /.row -->
    
 
     </section>
     <!-- /.content -->
   </div>
@endsection