@extends('adminMhs.layouts.master')

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
        @foreach($kp as $p)
        <form action="/registrasi/update" method="post"> 
        {{ csrf_field() }}
        <div class="form-group row">
                <label for="inputNim" class="col-sm-2 col-form-label">Nim</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nim" name="nim">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label" >Semester</label>
            <div class="col-sm-10">
            <select class="custom-select" id="semester" name="semester">
                <option selected>Semester</option>
                <option value="Gasal">Gasal</option>
                <option value="Genap">Genap</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
                <label for="inputTahun" class="col-sm-2 col-form-label" >Tahun Pengajuan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tahun" name="tahun">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNamaLembaga" class="col-sm-2 col-form-label">Nama Lembaga</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNamaLembaga" class="col-sm-2 col-form-label">pimpinan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="pimpinan" name="pimpinan">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAlamatLembaga" class="col-sm-2 col-form-label">Alamat Lembaga</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat_lembaga" name="alamat_lembaga">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNoLembaga" class="col-sm-2 col-form-label">No Telpon</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="no_telpon" name="no_telpon">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNoLembaga" class="col-sm-2 col-form-label">Judul KP</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="judul_kp" name="judul_kp">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNoLembaga" class="col-sm-2 col-form-label">Upload</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" id="file" name="file">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
            <fieldset disabled>
            <div class="form-group">
                <label  for="inputverifkasi">Verifikasi</label>
                <select class="custom-select">
                    <option value="belum terverifikasi"  id="verifikasi" name="verifikasi">belum terverifikasi</option>
                </select>
            </div>
           
            </form>
            @endforeach
        </div>
       
      </div>
      <!-- /.row -->
   

    </section>
    <!-- /.content -->
  </div>

@endsection