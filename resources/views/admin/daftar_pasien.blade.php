@extends('adminlte::page')

@section('title', 'Pasien')

@section('content_header')
    
@stop

@section('content')
    <div class="container-fluid">
        <table class="table table-striped table-bordered"  id="tablePasien" style="width:100%;">
            <thead>
              <tr>
                  
                <th>Nomor Identitas</th>
                <th>Nomor BPJS</th>
                <th>Nomor Buku</th>
                <th>Nama Pasien</th>
                <th>Tanggal Lahir</th>
                <th>Alamat Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Kepala Keluarga</th>
                <th>Lihat Data</th>
                <th>Edit Data</th>

              </tr>
            </thead>
           
          </table>
    </div>
@stop
@section('css')
<style>
.dt-buttons{
    margin: 20px;
    position: relative;
    text-align: right;
}

</style>
@stop
@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/af-2.3.2/b-1.5.4/b-colvis-1.5.4/b-html5-1.5.4/b-print-1.5.4/rg-1.1.0/sl-1.2.6/datatables.min.js"></script>
<script src="{{ asset('js/pasien.js') }}"></script>
@stop