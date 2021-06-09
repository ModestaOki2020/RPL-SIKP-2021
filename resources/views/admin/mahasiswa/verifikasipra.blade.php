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
            <th scope="col">Tahun</th>
            <th scope="col">Semester</th>
            <th scope="col">Status Pra</th>
            <th scope="col">Lembaga</th>
            <th scope="col">pimpinan</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Telpon</th>
            <th scope="col">File</th>
            <th scope="col">Tools</th>
            <th scope="col">Spesifikasi</th>
            <th scope="col">Nik</th>
            <th scope="col">Penguji</th>
            <th scope="col">Ruangan</th>
            <th scope="col">Verifikasi</th>
            <th scope="col"></th>          
            </tr>
        </thead>
        @php 
            $no=1;           
        @endphp
        @foreach($op as $q)
        <tbody>
            <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $q->nim }}</td>
            <td>{{ $q->nama }}</td>
            <td>{{ $q->tahun }}</td>
            <td>{{ $q->semester }}</td>
            <td>{{ $q->status_pra }}</td>
            <td>{{ $q->nama_lembaga }}</td>
            <td>{{ $q->pimpinan }}</td>
            <td>{{ $q->alamat }}</td>
            <td>{{ $q->no_telpon }}</td>
            <td>{{ $q->filereq }}</td>
            <td>{{ $q->tools }}</td>
            <td>{{ $q->spesifikasi}}</td>
            <td>{{ $q->nidn }}</td>
            <td>{{ $q->penguji}}</td>
            <td>{{ $q->ruang }}</td>
            <td>{{ $q->verifikasi_pra }}</td>
            <td><a href="/verifikasiprakp/edit/{{$q->id_pra}}" class="btn btn-danger">edit</a></td>  
            </tr>
                    
        </tbody>     
        @endforeach

        </table>
        
       <!-- /.row -->
    
 
     </section>
     <!-- /.content -->
   </div>
@endsection