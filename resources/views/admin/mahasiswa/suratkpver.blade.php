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
            <th scope="col">ID Keterangan Surat</th>
            <th scope="col">Nim</th>
            <th scope="col">Tahun</th>
            <th scope="col">Semester</th>
            <th scope="col">Nama Lembaga</th>
            <th scope="col">Pimpinan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Fax Lembaga</th>
            <th scope="col">No Telpon</th>
            <th scope="col">Email</th>
            <th scope="col">Surat</th>
            <th scope="col">Verifikasi</th>
            <th scope="col"></th>          
            </tr>
        </thead>
        @php 
            $no=1;           
        @endphp
        @foreach($tp as $t)
        <tbody>
            <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $t->id_ket }}</td>
            <td>{{ $t->nim }}</td>
            <td>{{ $t->tahun }}</td>
            <td>{{ $t->semester }}</td>
            <td>{{ $t->nama_lembaga }}</td>
            <td>{{ $t->pimpinan }}</td>
            <td>{{ $t->alamat }}</td>
            <td>{{ $t->fax_lembaga }}</td>
            <td>{{ $t->no_telpon }}</td>
            <td>{{ $t->email }}</td>
            <td>{{ $t->filesurat }}</td>
            <td>{{ $t->verifikasi_surat }}</td>
            <td><a href="/verifikasisurkp/edit/{{$t->id_ket}}" class="btn btn-danger">edit</a></td>  
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