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
      
        <div class="col-md-8 order-md-1">
        <form action="/batas/simpan" method="post"> 
        {{ csrf_field() }}
            <div class="form-group row">
                <label for="inputNim" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="tglMulai" name="tglMulai">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="tglSelesai" name="tglSelesai">
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
            </form>
        </div>
       
      </div>
      <!-- /.row -->
   

    </section>
    <!-- /.content -->
  </div>

@endsection