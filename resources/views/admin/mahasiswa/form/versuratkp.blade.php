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
        @foreach($sr as $o)
        <form action="{{url('/verifikasisurkp/update/'.$o->id_ket)}}" method="post"> 
        {{ csrf_field() }}
            <div class="form-group row">
                <label for="inputNim" class="col-sm-2 col-form-label">No keterangan</label>

                @php $i = 1001 @endphp
                <div class="col-sm-10">
                <input type="text" class="form-control" value='{{ $i++ }}'id="id_ket" name="id_ket" value="{{ $o->id_ket }}"> 
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-2 col-form-label">Nim</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nim" name="nim" value="{{ $o->nim }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-2 col-form-label">Tahun</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $o->tahun }}">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">Semester</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga" value="{{ $o->nama_lembaga }}">
            </div>
            </div>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-2 col-form-label">Nama Lembaga</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga" value="{{ $o->nama_lembaga }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputTahun" class="col-sm-2 col-form-label">Fax</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="fax_lembaga" name="fax_lembaga" value="{{ $o->fax_lembaga }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNamaLembaga" class="col-sm-2 col-form-label">Pimpinan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="pimpinan" name="pimpinan" value="{{ $o->pimpinan }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNamaLembaga" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" value="{{ $o->email }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputTahun" class="col-sm-2 col-form-label">No Telpon</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="no_telpon" name="no_telpon" value="{{ $o->no_telpon }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNamaLembaga" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $o->alamat }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNoLembaga" class="col-sm-2 col-form-label">Upload</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="filesurat"  required="required" name="filesurat" value="{{ $o->filesurat }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-warning">Tambah</button>
                </div>
            </div>
            <fieldset>
            <div class="form-group">
                <label  for="inputverifkasi">Verifikasi</label>
                <select class="custom-select" id="verifikasi_surat" name="verifikasi_surat">
                    <option value="belum terverifikasi"  @if($o->verifikasi_surat =='Belum Terverifikasi') selected @endif>Belum Terverifikasi</option>
                    <option value="Sudah Terverifikasi"  @if($o->verifikasi_surat =='Terverifikasi') selected @endif >Terverifikasi</option>
                    <option value="Tolak" @if($o->verifikasi_surat =='Tolak') selected @endif>Tolak</option>
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