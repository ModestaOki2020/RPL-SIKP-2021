@extends('adminMhs.layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Menu Registrasi
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-8 order-md-1">
            
        </div>
        
            <!-- /.box-body -->
          <!-- /.box -->
         
            <!-- /.box-body -->
          </div>
         <div class="box-footer">
                <button type="submit" class="btn btn-default"><a href="{{ url('/prakp') }}">Tambahkan Data</button>
                
                <button type="submit" class="btn btn-default"><a href="{{ url('/lihatpra') }}">Lihat Data</button>
        </div>
      </div>
      </div>
      <!-- /.row -->
   

    </section>
    <!-- /.content -->
  </div>

@endsection