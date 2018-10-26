$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }

});

$(".edit-riwayat").click(function (e) { 
    e.preventDefault();
    $("#myModal").modal();
    $("#form-edit-riwayat").show();
    $("#form-edit-pasien").hide();

    $('#tujuanPoli').val("");
    $('#keluhanPasien').val("");

    let id = $(this).attr("id");
    console.log(id);

    $.ajax({
        method: "GET",
        url: "http://localhost/proyek_magang/public/admin/riwayatpendaftaran/" + id,   
      })
        .done(function( data ) {
             /*  $('#formBody').hide();
              $('#table-untuk-detail').show();
              $('#detailNamaBarang').html(data.nama_barang);
              //$('#namaBarang').html(data.nama_barang);
              $('#detailJenisBarang').html(data.jenis_barang);
              $('#detailHargaBarang').html(data.harga_barang);
              $('#myModal').modal('show');  */  
              $('#tujuanPoli').val(data.tujuan_poli_pasien);
              $('#keluhanPasien').val(data.keluhan_pasien);

              $("#form-edit-riwayat").attr("action", "http://localhost/proyek_magang/public/admin/riwayatpendaftaran=" +data.id);
              
              
        });
    
});


$("#edit-profil").click(function (e) { 
    e.preventDefault();
    $("#myModal").modal();
    $("#form-edit-pasien").show();
    $("#form-edit-riwayat ").hide();
    
});