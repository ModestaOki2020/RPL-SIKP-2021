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
        <form action="/jadwal/simpan" method="post"> 
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
            <label for="inputNama" class="col-sm-2 col-form-label">NIDN</label>
            <div class="col-sm-10">
            <select class="custom-select" id="nidn" name="nidn">
                <option selected>NIDN</option>
                <option value="721600001">721600001</option>
                <option value="721600002">721600002</option>
                <option value="721600003">721600003</option>
                <option value="721600004">721600004</option>
                <option value="721600005">721600005</option>
                <option value="721600006">721600006</option>
                <option value="721600007">721600007</option>
                <option value="721600008">721600008</option>
                <option value="721600009">721600009</option>
                <option value="721600010">721600010</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">ruang</label>
            <div class="col-sm-10">
            <select class="custom-select" id="ruang" name="ruang">
                <option selected>Ruangan</option>
                <option value="D.1.2">D.1.2</option>
                <option value="D.2.2">D.2.2</option>
                <option value="H.1.2">H.1.2</option>
                <option value="H.2.2">H.2.2</option>
                <option value="C.3.8">C.3.8</option>
                <option value="C.3.9">C.3.9</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">Jam Mulai</label>
            <div class="col-sm-10">
            <select class="custom-select" id="jamMulai" name="JamMulai">
                <option selected>Ruangan</option>
                <option value="08.00">08.00</option>
                <option value="10.00">10.00</option>
                <option value="12.00">12.00</option>
                <option value="14.00">13.00</option>
                <option value="16.00">15.00</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">Jam Selesai</label>
            <div class="col-sm-10">
            <select class="custom-select" id="jamSelesai" name="jamSelesai">
                <option selected>Ruangan</option>
                <option value="09.30">09.30</option>
                <option value="11.30">11.30</option>
                <option value="13.30">13.30</option>
                <option value="15.30">15.30</option>
                <option value="17.30">17.30</option>
            </select>
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