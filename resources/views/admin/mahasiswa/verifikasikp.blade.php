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
            <th scope="col">Tools</th>
            <th scope="col">Spesifikasi</th>
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
        @foreach($dp as $p)
        <tbody>
            <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $p->nim }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->tahun }}</td>
            <td>{{ $p->semester }}</td>
            <td>{{ $p->statuskp}}</td>
            <td>{{ $p->nama_lembaga }}</td>
            <td>{{ $p->pimpinan}}</td>
            <td>{{ $p->alamat_lembaga}}</td>
            <td>{{ $p->no_telpon }}</td>
            <td>{{ $p->nidn}}</td>
            <td>{{ $p->judul_kp}}</td>
            <td>{{ $p->penguji}}</td>
            <td>{{ $p->ruang}}</td>
            <td>{{ $p->ruang}}</td>
            <td>{{ $p->tools}}</td>
            <td>{{ $p->status_ujian}}</td>
            <td>{{ $p->jadwal_ujian}}</td>
            <td>{{ $p->filereq }}</td>
            <td>{{ $p->verifikasi_kp }}</td>
           
            <td><a href="/lihatverkp/edit/{{$p->id_reg}}" class="btn btn-danger">edit</a></td>  
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