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
              
             
              <input type="hidden" name="" id="nomorAntrianTerakhir" value="{{$antrianTerakhir ->nomor_antrian}}">
              <input type="hidden" name="" id="warnaKartuTerakhir" value="{{$antrianTerakhir ->warna_kartu}}">

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
                    <input type="hidden" name="idPasien" id="idPasien">
                    <input type="hidden" name="nomorBpjs" id="nomorBpjs">
                    
                    <button class="btn btn-primary" id="submit-antrian-pasien">Submit</button>
                  </div>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                
               {{--  <a href="#" class="btn btn-primary pull-right" target="_blank" style="margin-bottom : 1.250em;">Print</a> --}}
                <br>
               
                  <table class="table m-4"  id="tablePasienHariIni" style="width:100%;">
                      <thead>
                        <tr>
                            
                          <th>Nomor Buku</th>
                          <th>Nama Pasien</th>
                          <th>Nomor Antrian</th>
                          <th>Tujuan Poli</th>
                          <th>BPJS</th>
                        </tr>
                      </thead>
                    </table>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form action="post" id="formDataPasienBaru" class="form-horizontal needs-validation">
                  <div class="form-group">
                    {{-- Tombol Submit akan bisa di print --}}
                    <label for="inputIdentitas" class="col-sm-3 control-label">Nomor Identitas</label>

                    <div class="col-sm-9">
                      <input type="text" name="inputIdentitas" class="form-control" id="inputIdentitas" placeholder="Masukan Nomor Identitas Pasien" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Jenis Berobat</label>

                    <div class="col-sm-9">
                        
                            <div class="radio-inline">
                          <label><input type="radio"  id="radioJenisBerobatUmum" name="radioJenisBerobat" value="umum" checked>Umum</label>
                        </div>
                        <div class="radio-inline">
                          <label><input type="radio" class="form-check-input" id="radioJenisBerobatBpjs" name="radioJenisBerobat" value="bpjs" >BPJS</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group" id="formBpjs" style="display:none ">
                    {{-- Tombol Submit akan bisa di print --}}
                    <label for="inputBPJS" class="col-sm-3 control-label" >Nomor BPJS</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" value="kosong" name="inputBPJS" id="inputBPJS" placeholder="Masukan Nomor BPJS Pasien" required>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputNama" class="col-sm-3 control-label">Nama Pasien</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="inputNama" id="inputNama" placeholder="Masukan Nama Pasien" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputTanggalLahir" class="col-sm-3 control-label">TTL Pasien</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="inputTempatLahir" id="inputTempatLahir" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="inputTanggalLahir" id="inputTanggalLahir" placeholder="Tanggal/Bulan/Tahun" required>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="inputNomorBuku" class="col-sm-3 control-label">Nomor Buku Pasien</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="inputNomorBuku" id="inputNomorBuku" placeholder="Masukan Nomor Buku Pasien" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputAlamat" class="col-sm-3 control-label">Alamat Pasien</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="inputAlamat" id="inputAlamat" placeholder="Masukan Alamat Pasien" required>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="inputRtRw" id="inpuRtRw" placeholder="RT RW" required>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" name="inputKelurahan" id="inputKelurahan" placeholder="Kelurahan" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputKepalaKeluarga" class="col-sm-3 control-label">Kepala Keluarga</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="inputKepalaKeluarga" id="inputKepalaKeluarga" placeholder="Masukan Kepala Keluarga Pasien" required>
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
                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                     <input type='submit' class="btn btn-block btn-success" id="submitPasienBaru" value="Tambah Data">
                     <br>
                     <div class="form-group " id="print" style="display:none">
                        <div class="col-sm-12">
                          
                     <a class="btn btn-block btn-info" id="printTombol" target="_blank" href="#">Print</a>
                        </div>
                     </div>
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
  <div id="suara">
     
      <audio  preload="auto" id="satu" src="../suara/1.mp3"></audio>
      <audio  preload="auto" id="dua" src="../suara/2.mp3"></audio>
      <audio  preload="auto" id="tiga" src="../suara/3.mp3"></audio>
      <audio  preload="auto" id="empat" src="../suara/4.mp3"></audio>
      <audio  preload="auto" id="lima" src="../suara/5.mp3"></audio>
      <audio  preload="auto" id="enam" src="../suara/6.mp3"></audio>
      <audio  preload="auto" id="tujuh" src="../suara/7.mp3"></audio>
      <audio  preload="auto" id="delapan" src="../suara/8.mp3"></audio>
      <audio  preload="auto" id="sembilan" src="../suara/9.mp3"></audio>
      <audio  preload="auto" id="sepuluh" src="../suara/10.mp3"></audio>
      <audio  preload="auto" id="sebelas" src="../suara/sebelas.mp3"></audio>
      <audio  preload="auto" id="belas" src="../suara/belas.mp3"></audio>
      <audio  preload="auto" id="puluh" src="../suara/puluh.mp3"></audio>
      <audio  preload="auto" id="hijau" src="../suara/hijau.mp3"></audio>
      <audio  preload="auto" id="biru" src="../suara/biru.mp3"></audio>
      <audio  preload="auto" id="merah_muda" src="../suara/merah_muda.mp3"></audio>
      <audio  preload="auto" id="nomor_antrian" src="../suara/nomor_antrian.mp3"></audio>
      <audio  preload="auto" id="kosong" src="../suara/kosong.mp3"></audio>
    
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/locale/id.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/af-2.3.2/b-1.5.4/b-colvis-1.5.4/b-html5-1.5.4/b-print-1.5.4/rg-1.1.0/sl-1.2.6/datatables.min.js"></script>

<script src="{{ asset('js/antrian.js') }}"></script>


 
@stop





