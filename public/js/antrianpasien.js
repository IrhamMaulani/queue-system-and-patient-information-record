/* Halaman untuk mengambil data pasien */



$("#cariData").click(function () {
    let identitas = $("#inputIdentitas").val();
    $("#namaPasien").val("");
    $("#nomorBuku").val("");
    $("#dataKosongNotif").html("");
    console.log(identitas);
    if (identitas == 16108) {
        $("#namaPasien").val("Joko Susilo");
        $("#nomorBuku").val("B-20");

    }
    else {
        $("#dataKosongNotif").html("Data Tidak Ditemukan");

    }
});


$('input[name="radioJenisBerobat"]').change(function () {
    if($('#radioJenisBerobatBpjs').prop('checked')){
        $('#formBpjs').show();
    }
    else{
        $('#formBpjs').hide();
    }
});
