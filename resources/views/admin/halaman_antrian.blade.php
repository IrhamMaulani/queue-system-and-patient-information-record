@extends('adminlte::page')

@section('title', 'Antrian')

@section('content_header')
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
              

              <h3 class="profile-username text-center" id="nomor-antrian">0</h3>

              <p class="text-muted text-center"><strong>Nomor Antrian Sekarang</strong></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Jumlah Pasien Hari Ini</b> <a class="pull-right" id="jumlah-pasien">0</a>
                </li>
                <li class="list-group-item">
                  <b>Jumlah Pasien Antrian Biru</b> <a class="pull-right" id="jumlah-pasien">0</a>
                </li>
                <li class="list-group-item">
                  <b>Jumlah Pasien Antrian Merah Muda</b> <a class="pull-right" id="jumlah-pasien">0</a>
                </li>
                <li class="list-group-item">
                  <b>Jumlah Pasien Antrian Hijau</b> <a class="pull-right" id="jumlah-pasien">0</a>
                </li>
                <li class="list-group-item">
                  <b>Sisa Nomor Antrian</b> <a class="pull-right" id="sisa-nomor">100</a>
                </li>
               
              </ul>

              <div class="row">
                <div class="col-md-4">
                  
                  <button class="btn btn-md btn-primary btn-block" id="btnBiru"> <strong>Biru</strong> </button>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-md btn-light  btn-block" id="btnPink" style="background : rgb(255, 192, 218); color:white;" ><strong> Merah Muda </strong></button>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-md btn-success btn-block "id="btnHijau"><strong> Hijau </strong> </button>
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
                      <div data-toggle="tooltip" title="Panggil Ulang" class="btn btn-danger fa fa-bullhorn fa-3x " style="margin-bottom : 20px; margin-top : 5px;"></div>
                    </div>
                    </div>
                  
                  <div class="form-group">
                  <input type="text" class="form-control" id="inputIdentitas" placeholder="Masukan Nomor Identitas Pasien">
                  </div>
                  <div class="form-group">
                  <button class="btn btn-primary">Cari </button>
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
                          <th>Panggil Ulang</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>0.312</td>
                          <td>Eko Simanjuntak</td>
                          <td style="color : blue;">1 Biru</td>
                          <td>Gigi</td>
                          <td><div class="btn	fa fa-bullhorn fa-lg"></div></td>
                        </tr>
                        <tr>
                          <td>0.312</td>
                          <td>Fahri Hamzah</td>
                          <td style="color : pink;">1 Merah Muda</td>
                          <td>Gizi</td>
                          <td><div class="btn	fa fa-bullhorn fa-lg"></div></td>
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
                    <label for="inputExperience" class="col-sm-3 control-label">Jenis Kelamin</label>

                    <div class="col-sm-9">
                        <div class="checkbox-inline">
                      <input type="radio" class="form-check-input" id="radioJenisKelamin" name="radioJenisKelamin" value="L" checked>Laki-Laki
                    </div>
                    <div class="checkbox-inline">
                      <input type="radio" class="form-check-input" id="radioJenisKelamin" name="radioJenisKelamin" value="P" >Perempuan
                    </div>
                        
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Jenis Berobat</label>

                    <div class="col-sm-9">
                        
                            <div class="checkbox-inline">
                          <input type="radio" class="form-check-input" id="radioJenisBerobat" name="radioJenisBerobat" value="umum" checked>Umum
                        </div>
                        <div class="checkbox-inline">
                          <input type="radio" class="form-check-input" id="radioJenisBerobat" name="radioJenisBerobat" value="askes" >Askes
                        </div>
                        <div class="checkbox-inline">
                            <input type="radio" class="form-check-input" id="radioJenisBerobat" name="radioJenisBerobat" value="askeskin" >Askeskin
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
 
@stop



