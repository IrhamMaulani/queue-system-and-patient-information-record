@extends('adminlte::page')

@section('title', 'Detail Pasien')

@section('content_header')
    
@stop

@section('content')

    <div class="row">
        <div class="col-md-3">
                <div class="box box-clasic">
                        <div class="box-body box-profile">

                        <h3 class="profile-username text-center">{{$pasien -> name_pasien}}</h3>
            
                        <p class="text-muted text-center">Nomor Identitas : {{$pasien -> identitas_pasien}}</p>
            
                          <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                              <b>Nomor BPJS</b> <a class="pull-right">{{$pasien->nomor_bpjs}}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Tempat Tanggal Lahir</b> <a class="pull-right">Banjarmasin , 19 Oktober 1998</a>
                            </li>
                            <li class="list-group-item">
                              <b>Nomor Buku</b> <a class="pull-right">{{$pasien->nomor_buku_pasien}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Alamat Pasien</b> <a class="pull-right">13,287</a>
                              </li>
                              <li class="list-group-item">
                                  <b>Kepala Keluarga</b> <a class="pull-right">13,287</a>
                                </li>
                          </ul>
            
                          
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
        </div>
        <div class="col-md-9">
                <div class="box box-default padding" >
                  @foreach ($prosesPendaftaran as $detailPasien)
                  <div class="panel panel-default spacing">
                  <div class="panel-heading putih">Tanggal Pasien Berobat: {{date('d -m -Y', strtotime($detailPasien->created_at))}}</div>
                      <div class="panel-body">
                      <h4>Tujuan Poli: {{$detailPasien->tujuan_poli_pasien}}</h4>
                        <h4>Keluhan Pasien:  {{$detailPasien->keluhan_pasien}} </h4>
                      </div>
                    </div>
                  @endforeach
                  
                      
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

@stop