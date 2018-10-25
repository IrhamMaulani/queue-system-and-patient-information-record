@extends('adminlte::page')

@section('title', 'Detail Pasien')

@section('content_header')
    
@stop

@section('content')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif


    <div class="row">
        <div class="col-md-3">
                <div class="box box-clasic">
                        <div class="box-body box-profile">
                            <i class="fa fa-edit fa-lg btn pull-right" id="edit-profil" title="Edit Profil!"></i>  
                            <br>
                            <br>
                        <h1 class="profile-username text-center">Data Pasien</h1>
                        

                        <h3 class="profile-username text-center">Nama Pasien : {{$pasien -> name_pasien}}</h3>
            
                        <p class="text-muted text-center">Nomor Identitas : {{$pasien -> identitas_pasien}}</p>

                          
                          <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                              <b>Nomor BPJS</b> <a class="pull-right">{{$pasien->nomor_bpjs}}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Tempat Tanggal Lahir</b> <a class="pull-right">{{$pasien->tempat_lahir}} , {{$pasien->ttl_pasien}}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Nomor Buku</b> <a class="pull-right">{{$pasien->nomor_buku_pasien}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Alamat Pasien</b> <a class="pull-right">{{$pasien->alamat_pasien}}</a>
                              </li>
                              <li class="list-group-item">
                                  <b>Kepala Keluarga</b> <a class="pull-right">{{$pasien->kepala_keluarga}}</a>
                                </li>
                          </ul>
            
                        <a class="btn btn-success btn-block" target="_blank" href="print/{{$pasien->id}}">Print Kartu Berobat</a>
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
        </div>
        <div class="col-md-9">
                <div class="box box-default padding" >
                  <h1 class="spacing">Riwayat Pasien</h1>
                  @forelse ($prosesPendaftaran as $detailPasien)
                  <div class="panel panel-default spacing">
                  <div class="panel-heading putih">
                    
                    Tanggal Pasien Berobat: {{date('d -m -Y', strtotime($detailPasien->created_at))}}
                  </div>
                      <div class="panel-body">
                      <h5>Tujuan Poli: {{$detailPasien->tujuan_poli_pasien}}</h5>
                        <h4>Keluhan Pasien:  {{$detailPasien->keluhan_pasien}} </h4>
                      </div>
                    </div>
                    @empty
                   
                        <div class="panel panel-default spacing">
                            <div class="panel-body">
                              <h1>Tidak Ditemukan Riwayat Pasien</h1>
                        </div>
                        </div>

                    

                  
                  @endforelse
                  
                      
        </div>
    </div>


     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content ">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Data Pasien</h4>
          </div>
          <div class="modal-body">

              <form action="{{url('admin/pasien/detailpasien=')}}{{$pasien->id}}" method="POST">
              <div class="form-group">
                  <label for="usr">Nama Pasien:</label>
              <input type="text" class="form-control" name="nama_pasien" value="{{$pasien->name_pasien}}">
                </div>

                <div class="form-group">
                    <label for="usr">Nomor BPJS:</label>
                    <input type="text" class="form-control" name="nomor_bpjs" id="usr" value="{{$pasien->nomor_bpjs}}">
                  </div>

                  <div class="form-group">
                      <label for="usr">Nomor Buku:</label>
                      <input type="text" class="form-control" name="nomor_buku_pasien" id="usr" value="{{$pasien->nomor_buku_pasien}}">
                    </div>

                    <div class="form-group">
                        <label for="usr">Alamat Pasien:</label>
                        <input type="text" class="form-control" name="alamat_pasien"  id="usr" value="{{$pasien->alamat_pasien}}">
                      </div>

                      <div class="form-group">
                          <label for="usr">Kepala Keluarga:</label> 
                          <input type="text" class="form-control" id="usr" name="kepala_keluarga" value="{{$pasien->kepala_keluarga}}">
                        </div>
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <button type="submit" class="btn btn-primary" name="submit" value="edit">Submit</button>

                        </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
      .spacing{
        margin: 15px !important;
      }
      .padding{
        padding-bottom:15px;
      }
      .putih{
        background-color: white !important;
      }
    </style>
@stop

@section('js')

<script src="{{ asset('js/detail_pasien.js') }}"></script>

@stop