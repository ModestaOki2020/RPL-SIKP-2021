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
          <tr><a href="/batas/delete/{{ $p->id }}" class="btn btn-danger">tambah</a></tr> 
            <tr>
              <th>No</th>
              <th>Nidn</th>
              <th>Nama</th>
              <th>ruangan</th>
              <th>waktu mulai</th>
              <th>waktu selesai</th>
             </tr>
            </thead>
            <tbody>
            @php $i = 1 @endphp
            @foreach( $data as $row)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $row->nidn }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->ruangan }}</td>
                <td>{{ $row->waktumulai }}</td>
                <td>{{ $row->waktuselasai }}</td>

                <td><a href="/batas/delete/{{ $p->id }}" class="btn btn-danger">delete</a></td> 
                <td><a href="/batas/edit/{{ $p->id }}" class="btn btn-danger">edit</a></td> 

              </tr>
            @endforeach
            </tbody>
          </table>
        </div> 
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection