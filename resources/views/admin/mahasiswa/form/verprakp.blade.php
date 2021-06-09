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
        @foreach($kr as $i)
        <form action="{{url('/verifikasiprakp/update/'.$i->id_pra)}}" method="post"> 
        {{ csrf_field() }}
            <div class="form-group row">
                <label for="inputNim" class="col-sm-2 col-form-label">Nim</label>

                <div class="col-sm-10">
                <input type="text" class="form-control" id="nim" name="nim" value="{{ $i->nim }}"> 
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"id="nama" name="nama" value="{{ $i->nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-2 col-form-label">tahun</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $i->tahun }}">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label" >Semester</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="semester" name="semester" required="required" value="{{ $i->semester }}">
            </div>
            </div>
            <div class="form-group row">
                <label for="inputNamaLembaga" class="col-sm-2 col-form-label">Lembaga</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga" value="{{ $i->nama_lembaga }}">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">Status Pra KP</label>
            <div class="col-sm-10">
            <select class="custom-select" id="status_pra" name="status_pra">
                <option selected>Status</option>
                <option value="Terima" @if($i->status_pra =='Terima') selected @endif>Terima</option>
                <option value="Tolak" @if($i->status_pra =='Tolak') selected @endif>Tolak</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
                <label for="inputNamaLembaga" class="col-sm-2 col-form-label">Pimpinan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="pimpinan" name="pimpinan" value="{{ $i->pimpinan }}">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="inputNamaLembaga" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $i->alamat }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNamaLembaga" class="col-sm-2 col-form-label">No Telpon</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="no_telpon" name="no_telpon" value="{{ $i->no_telpon }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-2 col-form-label">Tools</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tools" name="tools" value="{{ $i->tools }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNoLembaga" class="col-sm-2 col-form-label">Upload</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="filereq" name="filereq" required="required" value="{{ $i->filereq }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputTahun" class="col-sm-2 col-form-label">Spesifikasi</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="spesifikasi" name="spesifikasi" value="{{ $i->spesifikasi }}">
                </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">NIDN</label>
            <div class="col-sm-10">
            <select class="custom-select" id="nidn" name="nidn">
                <option selected>NIDN</option>
                <option value="721600001" @if($i->nidn =='721600001') selected @endif>721600001</option>
                <option value="721600002" @if($i->nidn =='721600002') selected @endif>721600002</option>
                <option value="721600003" @if($i->nidn =='721600003') selected @endif>721600003</option>
                <option value="721600004" @if($i->nidn =='721600004') selected @endif>721600004</option>
                <option value="721600005" @if($i->nidn =='721600005') selected @endif>721600005</option>
                <option value="721600006" @if($i->nidn =='721600006') selected @endif>721600006</option>
                <option value="721600007" @if($i->nidn =='721600007') selected @endif>721600007</option>
                <option value="721600008" @if($i->nidn =='721600008') selected @endif>721600008</option>
                <option value="721600009" @if($i->nidn =='721600009') selected @endif>721600009</option>
                <option value="721600010" @if($i->nidn =='721600010') selected @endif>721600010</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">ruang</label>
            <div class="col-sm-10">
            <select class="custom-select" id="ruang" name="ruang">
                <option selected>Ruangan</option>
                <option value="D.1.2" @if($i->ruang =='D.1.2') selected @endif>D.1.2</option>
                <option value="D.2.2" @if($i->ruang =='D.2.2') selected @endif>D.2.2</option>
                <option value="H.1.2" @if($i->ruang =='H.1.2') selected @endif>H.1.2</option>
                <option value="H.2.2" @if($i->ruang =='H.2.2') selected @endif>H.2.2</option>
                <option value="C.3.8" @if($i->ruang =='C.3.8') selected @endif>C.3.8</option>
                <option value="C.3.9" @if($i->ruang =='C.3.9') selected @endif>C.3.9</option>
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">penguji</label>
            <div class="col-sm-10">
            <select class="custom-select" id="penguji" name="penguji">
                <option selected>Status</option>
                <option value="Drs. Jong Jek Siang, M.Sc." @if($i->penguji =='Drs. Jong Jek Siang, M.Sc.') selected @endif>Drs. Jong Jek Siang, M.Sc.</option>
                <option value="Argo Wibowo, S.T.," @if($i->penguji =='Argo Wibowo, S.T.,') selected @endif>Argo Wibowo, S.T.,</option>
                <option value="Gabriel Indra W.T, S.Kom. M.Kom." @if($i->penguji =='Gabriel Indra W.T, S.Kom. M.Kom.') selected @endif>Gabriel Indra W.T, S.Kom. M.Kom.</option>
                <option value="Budi Sutedjo DO, S.Kom, M.M." @if($i->penguji =='Budi Sutedjo DO, S.Kom, M.M.') selected @endif>Budi Sutedjo DO, S.Kom, M.M.</option>
                <option value="Yuan Lukito, S.Kom., M.Cs." @if($i->penguji =='Yuan Lukito, S.Kom., M.Cs.') selected @endif>Yuan Lukito, S.Kom., M.Cs.</option>
                <option value="Hendro Setiadi, ST., M.M., M.EngSc" @if($i->penguji =='Hendro Setiadi, ST., M.M., M.EngSc') selected @endif>Hendro Setiadi, ST., M.M., M.EngSc</option>
                <option value="Lussy Ernawati, S.Kom., M.Acc" @if($i->penguji =='Lussy Ernawati, S.Kom., M.Acc') selected @endif>Lussy Ernawati, S.Kom., M.Acc</option>
                <option value="Yetli Oslan, S.Kom, M.T." @if($i->penguji =='Yetli Oslan, S.Kom, M.T.') selected @endif>Yetli Oslan, S.Kom, M.T.</option>
                <option value="Aloysius Airlangga Bajuadji, S.Kom., M.Eng." @if($i->penguji =='Aloysius Airlangga Bajuadji, S.Kom., M.Eng.') selected @endif>Aloysius Airlangga Bajuadji, S.Kom., M.Eng.</option>
                <option value="Hendra Sigalingging, S.S., M.Hum." @if($i->penguji =='Hendra Sigalingging, S.S., M.Hum.') selected @endif>Hendra Sigalingging, S.S., M.Hum.</option>
            </select>
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
                <select class="custom-select" id="verifikasi_pra" name="verifikasi_pra">
                    <option value="belum terverifikasi"  @if($i->verifikasi_pra =='Belum Terverifikasi') selected @endif>Belum Terverifikasi</option>
                    <option value="Sudah Terverifikasi"  @if($i->verifikasi_pra =='Terverifikasi') selected @endif >Terverifikasi</option>
                    <option value="Tolak" @if($i->verifikasi_pra =='Tolak') selected @endif>Tolak</option>
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