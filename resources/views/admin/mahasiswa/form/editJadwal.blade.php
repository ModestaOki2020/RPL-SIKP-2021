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
        @foreach($ml as $x)
        <form action="{{url('/jadwal/update/'.$x->id_jadwal)}}" method="post"> 
        {{ csrf_field() }}
            <div class="form-group row">
                <label for="inputNim" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="tglMulai" name="tglMulai" value="{{ $x->tglMulai }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="tglSelesai" name="tglSelesai" value="{{ $x->tglSelesai }}">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">NIDN</label>
            <div class="col-sm-10">
            <select class="custom-select" id="nidn" name="nidn">
                <option selected>NIDN</option>
                <option value="721600001" @if($x->nidn =='721600001') selected @endif>721600001</option>
                <option value="721600002" @if($x->nidn =='721600002') selected @endif>721600002</option>
                <option value="721600003" @if($x->nidn =='721600003') selected @endif>721600003</option>
                <option value="721600004" @if($x->nidn =='721600004') selected @endif>721600004</option>
                <option value="721600005" @if($x->nidn =='721600005') selected @endif>721600005</option>
                <option value="721600006" @if($x->nidn =='721600006') selected @endif>721600006</option>
                <option value="721600007" @if($x->nidn =='721600007') selected @endif>721600007</option>
                <option value="721600008" @if($x->nidn =='721600008') selected @endif>721600008</option>
                <option value="721600009" @if($x->nidn =='721600009') selected @endif>721600009</option>
                <option value="721600010" @if($x->nidn =='721600010') selected @endif>721600010</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">ruang</label>
            <div class="col-sm-10">
            <select class="custom-select" id="ruang" name="ruang">
                <option selected>Ruangan</option>
                <option value="D.1.2" @if($x->ruang =='D.1.2') selected @endif>D.1.2</option>
                <option value="D.2.2" @if($x->ruang =='D.2.2') selected @endif>D.2.2</option>
                <option value="H.1.2" @if($x->ruang =='H.1.2') selected @endif>H.1.2</option>
                <option value="H.2.2" @if($x->ruang =='H.2.2') selected @endif>H.2.2</option>
                <option value="C.3.8" @if($x->ruang =='C.3.8') selected @endif>C.3.8</option>
                <option value="C.3.9" @if($x->ruang =='C.3.9') selected @endif>C.3.9</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">Jam Mulai</label>
            <div class="col-sm-10">
            <select class="custom-select" id="jamMulai" name="jamMulai">
                <option selected>Ruangan</option>
                <option value="08.00" @if($x->jamMulai =='08.00') selected @endif>08.00</option>
                <option value="10.00" @if($x->jamMulai =='10.00') selected @endif>10.00</option>
                <option value="12.00" @if($x->jamMulai =='12.00') selected @endif>12.00</option>
                <option value="14.00" @if($x->jamMulai =='14.00') selected @endif>13.00</option>
                <option value="16.00" @if($x->jamMulai =='16.00') selected @endif>15.00</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">Jam Selesai</label>
            <div class="col-sm-10">
            <select class="custom-select" id="jamSelesai" name="jamSelesai">
                <option selected>Ruangan</option>
                <option value="09.30" @if($x->jamSelesai =='09.30') selected @endif>09.30</option>
                <option value="11.30" @if($x->jamSelesai =='11.30') selected @endif>11.30</option>
                <option value="13.30" @if($x->jamSelesai =='13.30') selected @endif>13.30</option>
                <option value="15.30" @if($x->jamSelesai =='15.30') selected @endif>15.30</option>
                <option value="17.30" @if($x->jamSelesai =='17.30') selected @endif>17.30</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-warning">Tambah</button>
                </div>
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