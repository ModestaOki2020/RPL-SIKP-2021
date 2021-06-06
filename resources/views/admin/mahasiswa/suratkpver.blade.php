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
            <th scope="col">Fax Lembaga</th>
            <th scope="col">Email</th>
            <th scope="col">Surat</th>
            <th scope="col">Verifikasi</th>
            <th scope="col"></th>          
            </tr>
        </thead>
        @php 
            $no=1;           
        @endphp
        @foreach($su as $s)
        <tbody>
            <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $s->id_ket }}</td>
            <td>{{ $s->nim }}</td>
            <td>{{ $s->tahun }}</td>
            <td>{{ $s->semester }}</td>
            <td>{{ $s->nama_lembaga }}</td>
            <td>{{ $s->fax_lembaga }}</td>
            <td>{{ $s->email }}</td>
            <td>{{ $s->filesurat }}</td>
            <td>{{ $s->verifikasisurat }}</td>
            <td><a href="/suratkp/edit/" class="btn btn-danger">edit</a></td>  
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