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
            <th scope="col">No</th>
            <th scope="col">Nim</th>
            <th scope="col">Nama</th>
            <th scope="col">Jam Mulai</th>
            <th scope="col">Jam Selesai</th>
            <th scope="col">Nama Lembaga</th>
            <th scope="col">Pimpinan</th>
            <th scope="col">Alamat Lembaga</th>
            <th scope="col">Nik</th>
            <th scope="col">Judul KP</th>
            <th scope="col">Ruangan</th>
            <th scope="col">File</th>
            </tr>
        </thead>
        @php 
            $no=1;           
        @endphp
        @foreach($data as $p)
        <tbody>
            <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $p->nim }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->jamMulai }}</td>
            <td>{{ $p->jamSelesai }}</td>
            <td>{{ $p->nama_lembaga }}</td>
            <td>{{ $p->pimpinan}}</td>
            <td>{{ $p->alamat_lembaga}}</td>
            <td>{{ $p->nidn}}</td>
            <td>{{ $p->judul_kp}}</td>
            <td>{{ $p->ruang}}</td>
            <td>{{ $p->filereq }}</td>
            </tr>
                    
        </tbody>   
        @endforeach

        </table>
        </div>
       
      </div>
      <!-- /.row -->
   

    </section>
    <!-- /.content -->
  </div>

@endsection