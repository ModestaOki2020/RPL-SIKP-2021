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
        @foreach($kp as $p)
        <form action="{{url('/lihatverkp/update/'.$p->id_reg)}}" method="post"> 
        {{ csrf_field() }}
            <div class="form-group row">
                <label for="inputNim" class="col-sm-2 col-form-label">Nim</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" id="nim" name="nim" value="{{ $p->nim }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required"  id="nama" name="nama" value="{{ $p->nama }}">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label" >Semester</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="semester" name="semester" required="required" value="{{ $p->semester }}">
            </div>
            </div>
            <div class="form-group row">
                <label for="inputTahun" class="col-sm-2 col-form-label" >Tahun Pengajuan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tahun" name="tahun" required="required" value="{{ $p->tahun }}">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">Status KP</label>
            <div class="col-sm-10">
            <select class="custom-select" id="status_kp" name="status_kp" required="required">
                <option selected>Status</option>
                <option value="Terima">Terima</option>
                <option value="Tolak">Tolak</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
                <label for="inputNamaLembaga" class="col-sm-2 col-form-label">Nama Lembaga</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga" required="required" value="{{ $p->nama_lembaga }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNamaLembaga" class="col-sm-2 col-form-label">pimpinan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="pimpinan" required="required" name="pimpinan" value="{{ $p->pimpinan }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAlamatLembaga" class="col-sm-2 col-form-label">Alamat Lembaga</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat_lembaga" required="required" name="alamat_lembaga" value="{{ $p->alamat_lembaga }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNoLembaga" class="col-sm-2 col-form-label">No Telpon</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="no_telpon"  required="required" name="no_telpon" value="{{ $p->no_telpon }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNoLembaga" class="col-sm-2 col-form-label">Judul KP</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="judul_kp" required="required" name="judul_kp" value="{{ $p->judul_kp }}">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">NIDN</label>
            <div class="col-sm-10">
            <select class="custom-select" id="nidn" name="nidn" required="required">
                <option selected>NIDN</option>
                <option value="721600001" @if($p->nidn =='721600001') selected @endif>721600001</option>
                <option value="721600002" @if($p->nidn =='721600002') selected @endif>721600002</option>
                <option value="721600003" @if($p->nidn =='721600003') selected @endif>721600003</option>
                <option value="721600004" @if($p->nidn =='721600004') selected @endif>721600004</option>
                <option value="721600005" @if($p->nidn =='721600005') selected @endif>721600005</option>
                <option value="721600006" @if($p->nidn =='721600006') selected @endif>721600006</option>
                <option value="721600007" @if($p->nidn =='721600007') selected @endif>721600007</option>
                <option value="721600008" @if($p->nidn =='721600008') selected @endif>721600008</option>
                <option value="721600009" @if($p->nidn =='721600009') selected @endif>721600009</option>
                <option value="721600010" @if($p->nidn =='721600010') selected @endif>721600010</option>
            </select>
            </div>
            </div>
           
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">penguji</label>
            <div class="col-sm-10">
            <select class="custom-select" id="penguji" name="penguji" required="required">
                <option selected>Penguji</option>
                <option value="Drs. Jong Jek Siang, M.Sc." @if($p->penguji =='Drs. Jong Jek Siang, M.Sc.') selected @endif>Drs. Jong Jek Siang, M.Sc.</option>
                <option value="Argo Wibowo, S.T.," @if($p->penguji =='Argo Wibowo, S.T.,') selected @endif>Argo Wibowo, S.T.,</option>
                <option value="Gabriel Indra W.T, S.Kom. M.Kom." @if($p->penguji =='Gabriel Indra W.T, S.Kom. M.Kom.') selected @endif>Gabriel Indra W.T, S.Kom. M.Kom.</option>
                <option value="Budi Sutedjo DO, S.Kom, M.M." @if($p->penguji =='Budi Sutedjo DO, S.Kom, M.M.') selected @endif>Budi Sutedjo DO, S.Kom, M.M.</option>
                <option value="Yuan Lukito, S.Kom., M.Cs." @if($p->penguji =='Yuan Lukito, S.Kom., M.Cs.') selected @endif>Yuan Lukito, S.Kom., M.Cs.</option>
                <option value="Hendro Setiadi, ST., M.M., M.EngSc" @if($p->penguji =='Hendro Setiadi, ST., M.M., M.EngSc') selected @endif>Hendro Setiadi, ST., M.M., M.EngSc</option>
                <option value="Lussy Ernawati, S.Kom., M.Acc" @if($p->penguji =='Lussy Ernawati, S.Kom., M.Acc') selected @endif>Lussy Ernawati, S.Kom., M.Acc</option>
                <option value="Yetli Oslan, S.Kom, M.T." @if($p->penguji =='Yetli Oslan, S.Kom, M.T.') selected @endif>Yetli Oslan, S.Kom, M.T.</option>
                <option value="Aloysius Airlangga Bajuadji, S.Kom., M.Eng." @if($p->penguji =='Aloysius Airlangga Bajuadji, S.Kom., M.Eng.') selected @endif>Aloysius Airlangga Bajuadji, S.Kom., M.Eng.</option>
                <option value="Hendra Sigalingging, S.S., M.Hum." @if($p->penguji =='Hendra Sigalingging, S.S., M.Hum.') selected @endif>Hendra Sigalingging, S.S., M.Hum.</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">ruang</label>
            <div class="col-sm-10">
            <select class="custom-select" id="ruang" name="ruang" required="required">
                <option selected>Ruangan</option>
                <option value="D.1.2" @if($p->ruang =='D.1.2') selected @endif>D.1.2</option>
                <option value="D.2.2" @if($p->ruang =='D.2.2') selected @endif>D.2.2</option>
                <option value="H.1.2" @if($p->ruang =='H.1.2') selected @endif>H.1.2</option>
                <option value="H.2.2" @if($p->ruang =='H.2.2') selected @endif>H.2.2</option>
                <option value="C.3.8" @if($p->ruang =='C.3.8') selected @endif>C.3.8</option>
                <option value="C.3.9" @if($p->ruang =='C.3.9') selected @endif>C.3.9</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">Status Ujian</label>
            <div class="col-sm-10">
            <select class="custom-select" id="status_ujian" name="status_ujian">
                <option selected>Status</option>
                <option value="Terima" @if($p->status_ujian =='Terima') selected @endif>Terima</option>
                <option value="Tolak" @if($p->status_ujian =='Tolak') selected @endif>Tolak</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
                <label for="inputAlamatLembaga" class="col-sm-2 col-form-label">Tools</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tools" name="tools" required="required" value="{{ $p->tools }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNoLembaga" class="col-sm-2 col-form-label">Spesifikasi</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="spesifikasi" name="spesifikasi" required="required" value="{{ $p->spesifikasi }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNoLembaga" class="col-sm-2 col-form-label">Upload</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="filereq" name="filereq" required="required" value="{{ $p->filereq }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNoLembaga" class="col-sm-2 col-form-label">Tanggal Ujian</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="jadwal_ujian" name="jadwal_ujian"  value="{{ $p->jadwal_ujian }}">
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
                <select class="custom-select" id="verifikasi_kp" name="verifikasi_kp">
                <option value="belum terverifikasi"  @if($p->verifikasi_kp =='Belum Terverifikasi') selected @endif>Belum Terverifikasi</option>
                    <option value="Sudah Terverifikasi"  @if($p->verifikasi_kp =='Terverifikasi') selected @endif >Terverifikasi</option>
                    <option value="Tolak" @if($p->verifikasi_kp =='Tolak') selected @endif>Tolak</option>
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