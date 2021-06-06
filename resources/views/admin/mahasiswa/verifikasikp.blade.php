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
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nim</th>
            <th scope="col">Nama</th>
            <th scope="col">Tahun Pengajuan</th>
            <th scope="col">Semester</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Nama Lembaga</th>
            <th scope="col">Pimpinan</th>
            <th scope="col">Alamat Lembaga</th>
            <th scope="col">No Telpon</th>
            <th scope="col">Nik</th>
            <th scope="col">Judul KP</th>
            <th scope="col">Penguji</th>
            <th scope="col">Ruangan</th>
            <th scope="col">Status Ujian</th>
            <th scope="col">Jadwal Ujian</th>
            <th scope="col">File</th>
            <th scope="col">Verifikasi</th>
            <th scope="col"></th>          
            </tr>
        </thead>
        @php 
            $no=1;           
        @endphp
        @foreach($pr as $r)
        <tbody>
            <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $r->nim }}</td>
            <td>{{ $r->nama }}</td>
            <td>{{ $r->tahun_pengajuan }}</td>
            <td>{{ $r->semester }}</td>
            <td>{{ $r->jenis_kelamin}}</td>
            <td>{{ $r->nama_lembaga }}</td>
            <td>{{ $r->pimpinan}}</td>
            <td>{{ $r->alamat_lembaga}}</td>
            <td>{{ $r->no_telpon }}</td>
            <td>{{ $r->nik}}</td>
            <td>{{ $r->judul_kp}}</td>
            <td>{{ $r->penguji}}</td>
            <td>{{ $r->ruang}}</td>
            <td>{{ $r->status_ujian}}</td>
            <td>{{ $r->jadwal_ujian}}</td>
            <td>{{ $r->file }}</td>
            <td>{{ $r->verifikasi }}</td>
           
            <td><a href="/formkp/edit/" class="btn btn-danger">edit</a></td>  
            </tr>
                    
        </tbody>    
        @endforeach

        </table>
        </div>
        
       <!-- /.row -->
    
 
     </section>
     <!-- /.content -->
   </div>
 
 @endsection

@endsection