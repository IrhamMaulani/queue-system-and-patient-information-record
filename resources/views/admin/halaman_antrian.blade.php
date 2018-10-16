@extends('adminlte::page')

@section('title', 'Antrian')

@section('content_header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<h1 id="waktu">
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Antrian</li>
  </ol>
@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
  {{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    {{-- <section class="content"> --}}

      <div class="row">
        <div class="col-md-5">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              

              

              <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                      <h2 class="{{-- profile-username --}} text-center" id="jumlah-pasien-biru">{{$antrianBiru}}</h2>
                      <h4 class="text-muted text-center text-primary "><strong>Nomor Antrian Biru</strong></h4>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                      <h2 class="{{-- profile-username --}} text-center" id="jumlah-pasien-pink">{{$antrianPink}}</h2>
                      <h4 class="text-muted text-center " style="color : rgb(255, 192, 218);"><strong>Nomor Antrian Merah Muda</strong></h4>
                    </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                      <h2 class="{{-- profile-username --}} text-center" id="jumlah-pasien-hijau">{{$antrianHijau}}</h2>
                      <h4 class="text-muted text-center text-success "><strong>Nomor Antrian Hijau</strong></h4>
                      </div>
                  </div>

              </div>

              

              {{-- <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Jumlah Pasien Hari Ini</b> <a class="pull-right" id="jumlah-pasien">{{$antrianBiru + $antrianPink + $antrianHijau}}</a>
                </li>
                <li class="list-group-item">
                  <b>Jumlah Pasien Antrian Biru</b> <a class="pull-right" id="jumlah-pasien-biru">{{$antrianBiru}}</a>
                </li>
                <li class="list-group-item">
                  <b>Jumlah Pasien Antrian Merah Muda</b> <a class="pull-right" id="jumlah-pasien-pink">{{$antrianPink}}</a>
                </li>
                <li class="list-group-item">
                  <b>Jumlah Pasien Antrian Hijau</b> <a class="pull-right" id="jumlah-pasien-hijau">{{$antrianHijau}}</a>
                </li>
                <li class="list-group-item">
                  <b>Sisa Nomor Antrian</b> <a class="pull-right" id="sisa-nomor">100</a>
                </li>
               
              </ul> --}}
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <h1 class="{{-- profile-username --}} text-center" id="jumlah-pasien">{{$antrianBiru + $antrianPink + $antrianHijau}}</h1>
                          <p class="text-muted text-center text-lg lead text-block"><strong>Antrian Hari Ini</strong></p>
                          </div>

                  </div>
              </div>


              <div class="row">
                <div class="col-md-4">
                  
                  <div class="form-group">
                  <button class="btn btn-lg btn-primary btn-block" id="btnBiru"> <strong>Biru</strong> </button>
                  </div>
                  <div class="form-group">
                  <div data-toggle="tooltip" title="Panggil Ulang" id="btnBiruUlang" class="btn btn-lg btn-primary fa fa-refresh fa-lg btn-block "></div>
                  </div>
                  
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                  <button class="btn btn-lg btn-light  btn-block" id="btnPink" style="background : rgb(255, 192, 218); color:white;" ><strong> Merah Muda </strong></button>
                    </div>
                  <div class="form-group">
                    <div data-toggle="tooltip" id="btnPinkUlang" title="Panggil Ulang" class="btn btn-lg btn-light fa fa-refresh fa-lg btn-block " style="background : rgb(255, 192, 218); color:white;"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                  <button  class="btn btn-lg btn-success btn-block "id="btnHijau"><strong> Hijau </strong> </button>
                    </div>
                    <div class="form-group">
                        <div data-toggle="tooltip" id="btnHijauUlang" title="Panggil Ulang" class="btn btn-lg btn-success fa fa-refresh fa-lg btn-block " ></div>

                    </div>
                </div>
              </div>

              <br>
              
              <button class="btn btn-warning btn-block" id="tombol-reset"><b>Reset</b></button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-7">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Antrian</a></li>
              <li><a href="#timeline" data-toggle="tab">Rincian Pasien</a></li>
              <li><a href="#settings" data-toggle="tab">Buat Baru</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">

                <div class="row">
                  
                  <div class="col-md-3">
                    </div>
                    </div>
                  
                  <div class="form-group">
                  <input type="text" class="form-control" id="inputIdentitas" placeholder="Masukan Nomor Identitas Pasien">
                  </div>
                  <div class="form-group">
                  <button class="btn btn-primary" id="cariData">Cari </button>
                  </div>
                  <div class="form-group">
                  <h4 class="text-danger" id="dataKosongNotif"><strong></strong></h4>
                  </div>
                  <h4>Data Pasien</h4>
                  <label for="inputIdentitas" class="control-label">Nama Pasien</label>
                  <div class="form-group">
                      <input type="text" class="form-control" id="namaPasien" readonly>
                  </div>
                  <label for="inputIdentitas" class="control-label">Nomor Buku</label>
                  <div class="form-group">
                      <input type="text" class="form-control" id="nomorBuku" readonly>
                  </div>
                  <label for="inputIdentitas" class="control-label">Masukan Keluhan Pasien</label>
                  <div class="form-group">
                    <textarea class="form-control" rows="5" id="keluhanPasien"></textarea>
                  </div>
                  <label for="pilihanPoli" class="control-label">Tujuan Poli Pasien</label>
                  <div class="form-group">
                    <select class="form-control" id="pilihanPoli">
                      <option>Gigi</option>
                      <option>Gizi</option>
                      <option>Anak</option>
                      <option>Umum</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary" id="submit-pasien">Submit</button>
                  </div>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                  <table class="table">
                      <thead>
                        <tr>
                            
                          <th>Nomor Buku</th>
                          <th>Nama Pasien</th>
                          <th>Nomor Antrian</th>
                          <th>Tujuan Poli</th>
                          <th>BPJS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>0.312</td>
                          <td>Eko Simanjuntak</td>
                          <td style="color : blue;">1 Biru</td>
                          <td>Gigi</td>
                          <td>161921828</td>
                        </tr>
                        <tr>
                          <td>0.312</td>
                          <td>Fahri Hamzah</td>
                          <td style="color : pink;">1 Merah Muda</td>
                          <td>Gizi</td>
                          <td>Umum</div></td>
                        </tr>
                      </tbody>
                    </table>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    {{-- Tombol Submit akan bisa di print --}}
                    <label for="inputIdentitas" class="col-sm-3 control-label">Nomor Identitas</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputIdentitas" placeholder="Masukan Nomor Identitas Pasien">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Jenis Berobat</label>

                    <div class="col-sm-9">
                        
                            <div class="radio-inline">
                          <label><input type="radio"  id="radioJenisBerobatUmum" name="radioJenisBerobat" value="umum" checked>Umum</label>
                        </div>
                        <div class="radio-inline">
                          <label><input type="radio" class="form-check-input" id="radioJenisBerobatBpjs" name="radioJenisBerobat" value="askes" >BPJS</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group" id="formBpjs" style="display:none ">
                    {{-- Tombol Submit akan bisa di print --}}
                    <label for="inputBPJS" class="col-sm-3 control-label" >Nomor BPJS</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputBPJS" placeholder="Masukan Nomor BPJS Pasien">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputNama" class="col-sm-3 control-label">Nama Pasien</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputNama" placeholder="Masukan Nama Pasien">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputTanggalLahir" class="col-sm-3 control-label">TTL Pasien</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputTanggalLahir" placeholder="Tanggal/Bulan/Tahun">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputNomorBuku" class="col-sm-3 control-label">Nomor Buku Pasien</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputNomorBuku" placeholder="Masukan Nomor Buku Pasien">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputAlamat" class="col-sm-3 control-label">Alamat Pasien</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputAlamat" placeholder="Masukan Alamat Pasien">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="inpuRtRw" placeholder="RT RW">
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="inputKelurahan" placeholder="Kelurahan">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputKepalaKeluarga" class="col-sm-3 control-label">Kepala Keluarga</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputKepalaKeluarga" placeholder="Masukan Kepala Keluarga Pasien">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Jenis Kelamin</label>

                    <div class="col-sm-9">
                        <div class="radio-inline">
                      <label><input type="radio" class="form-check-input" id="radioJenisKelamin" name="radioJenisKelamin" value="L" checked>Laki-Laki</label>
                    </div>
                    <div class="radio-inline">
                      <label><input type="radio" class="form-check-input" id="radioJenisKelamin" name="radioJenisKelamin" value="P" >Perempuan</label>
                    </div>
                        
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">
                      <button  class="btn btn-block btn-success">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  {{-- </div> --}}
  <!-- /.content-wrapper -->
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/locale/id.js"></script>

<script src="{{ asset('js/antrian.js') }}"></script>
<script src="{{ asset('js/antrianpasien.js') }}"></script>
 
@stop



