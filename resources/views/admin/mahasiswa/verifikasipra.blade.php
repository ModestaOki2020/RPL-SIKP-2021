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
        @foreach($pa as $p)
        <tbody>
            <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $p->nim }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->tahun }}</td>
            <td>{{ $p->semester }}</td>
            <td>{{ $p->lembaga }}</td>
            <td>{{ $p->pimpinan }}</td>
            <td>{{ $p->alamat }}</td>
            <td>{{ $p->no_telpon }}</td>
            <td>{{ $p->filepra }}</td>
            <td>{{ $p->tools }}</td>
            <td>{{ $p->spesifikasi}}</td>
            <td>{{ $p->nik }}</td>
            <td>{{ $p->penguji}}</td>
            <td>{{ $p->ruangan }}</td>
            <td>{{ $p->verifikasipra }}</td>
            <td><a href="/prakp/edit/" class="btn btn-danger">edit</a></td>  
            </tr>
                    
        </tbody>    
        @endforeach

        </table>
        
       <!-- /.row -->
    
 
     </section>
     <!-- /.content -->
   </div>
@endsection