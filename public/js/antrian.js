    //TODO Give all CSRF 

    
    let nomorAntrianSekarang =$('#nomorAntrianTerakhir').val();
    let warnaAntrianSekarang = $('#warnaKartuTerakhir').val();
    let jumlahAntrian = 100;
    let nomorAntrianBiru = parseInt($('#jumlah-pasien-biru').html());
    let nomorAntrianPink = parseInt($('#jumlah-pasien-pink').html());
    let nomorAntrianHijau = parseInt($('#jumlah-pasien-hijau').html());
    let suara1 = document.getElementById("satu");
    let suara2 = document.getElementById("dua");
    let suara3 = document.getElementById("tiga")
    let suara4 = document.getElementById("empat");
    let suara5 = document.getElementById("lima");
    let suara6 = document.getElementById("enam");
    let suara7 = document.getElementById("tujuh");
    let suara8 = document.getElementById("delapan");
    let suara9 = document.getElementById("sembilan");
    let suara10 = document.getElementById("sepuluh");
    let suara11 = document.getElementById("sebelas");
    let suaraBelas = document.getElementById("belas");
    let suaraPuluh = document.getElementById("puluh");
    let suaraHijau = document.getElementById("hijau");
    let suaraBiru = document.getElementById("biru");
    let suaraPink = document.getElementById("merah_muda");
    let suaraNomorAntrian = document.getElementById("nomor_antrian");
    let kosong = document.getElementById("kosong");


    $(document).ready(function () {
        $('#tablePasienHariIni').DataTable( {
            dom: 'Blfrtip',
            buttons: [
                {
    
                    extend: 'print',
                    text: 'Print ',
                    /* autoPrint: false, */
                    orientation: 'portrait',
                    exportOptions: {
                        modifier: {
                            page: 'current',
                            
                        }
                    },
                    customize: function (win) {
                        $(win.document.body).find('table').addClass('display').css('font-size', '15px');
                        $(win.document.body).find('h1').css('text-align','center').addClass('header');
                        $(win.document.body).find('title').html('');
                        $(win.document.body).find('.header').html('Daftar Pasien tanggal ' + moment().format('dddd, Do - MMMM - YYYY'));
                        /* $(win.document.body).find('h1').html('Hello'); */
                    },
                  
                },
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    exportOptions: {
                        modifier: {
                            page: 'current'
                        }
                    }, customize: function ( doc ) {
                        // Splice the image in after the header, but before the table
                       }
                    
                }
               
    
            ],
         "ajax": "/admin/antrian/pendaftaran",
            "columns": [
                { data: 'nomor_buku_pasien' },
                { data : 'name_pasien' },
                { data : 'nomor_antrian' },
                { data : 'tujuan_poli_pasien' },
                { data : 'nomor_bpjs' }
            ]
        } );
});
   
    
   

    
    

    function merubahJumlah() {
        $("#jumlah-pasien").html(parseInt($('#jumlah-pasien-biru').html()) + parseInt($('#jumlah-pasien-pink').html()) + parseInt($('#jumlah-pasien-hijau').html()));
    }



        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });

        

    $("#btnBiru").click(function () {
        nomorAntrianBiru++;
        let warnaAntrian = 'biru';
        


        insertData(nomorAntrianBiru, warnaAntrian);

        $("#jumlah-pasien-biru").html(nomorAntrianBiru);

        console.log(nomorAntrianBiru);
        /* suaraNomorAntrian.play();

        suaraNomorAntrian.onended = function() {
            konvertAngka(nomorAntrianBiru);
        }; */

        
        /* jeda(suaraNomorAntrian,suaraAntrian);  */
        suaraNomorAntrian.play();
        suaraNomorAntrian.onended = function() {
            konvertAngka(nomorAntrianBiru);
    };

        console.log(nomorAntrianBiru + 'biru');


        /* setTimeout(function () {
            konvertAngka(nomorAntrianBiru);


        }, 1300); */

        setTimeout(function () {
            suaraBiru.play();
        }, jedaSuara(nomorAntrianBiru));


        merubahJumlah();
    });

    $("#btnBiruUlang").click(function () {
        suaraNomorAntrian.play();


        setTimeout(function () {
            konvertAngka(nomorAntrianBiru);
        }, 1300);

        setTimeout(function () {
            suaraBiru.play();
        }, jedaSuara(nomorAntrianBiru));
    });


    $("#btnPink").click(function () {
        nomorAntrianPink++;
        let warnaAntrian = 'pink';

        

        insertData(nomorAntrianPink, warnaAntrian);



        $("#jumlah-pasien-pink").html(nomorAntrianPink);

        suaraNomorAntrian.play();


        setTimeout(function () {
            konvertAngka(nomorAntrianPink);
        }, 1300);

        setTimeout(function () {
            suaraPink.play();
        }, jedaSuara(nomorAntrianPink));

        merubahJumlah();
    });

    $("#btnPinkUlang").click(function () {
        suaraNomorAntrian.play();

        setTimeout(function () {
            konvertAngka(nomorAntrianPink);
        }, 1300);

        setTimeout(function () {
            suaraPink.play();
        }, jedaSuara(nomorAntrianPink));
    });

    $("#btnHijau").click(function () {
        nomorAntrianHijau++;

        let warnaAntrian = 'hijau';


        insertData(nomorAntrianHijau, warnaAntrian);



        $("#jumlah-pasien-hijau").html(nomorAntrianHijau);

        suaraNomorAntrian.play();


        setTimeout(function () {
            konvertAngka(nomorAntrianHijau);
        }, 1300);

        setTimeout(function () {
            suaraHijau.play();
        }, jedaSuara(nomorAntrianHijau));
        merubahJumlah();
    });

    $("#btnHijauUlang").click(function () {
        suaraNomorAntrian.play();

        setTimeout(function () {
            konvertAngka(nomorAntrianHijau);
        }, 1300);

        setTimeout(function () {
            suaraHijau.play();
        }, jedaSuara(nomorAntrianHijau));
    });

    $("#tombol-reset").click(function () {
        suara1.play();
        alert("hhh");
    });

    let suara = [kosong, suara1, suara2, suara3, suara4, suara5, suara6, suara7, suara8, suara9, suara10];

    function konvertAngka(n) {
        console.log("N" + n);


        if (n <= 10) {
            console.log("eksekusi");
            return suara[n].play();
            
        } else if (n == 10) { // khusus untuk sepuluh
            return suara10.play();
            
        } else if (n == 11) { // khusus untuk sebelas
            return suara11.play();
        } else if (n < 20) { // 12 -19
           
           suara[(n - 10)].play();

          let b =  suara[(n - 10)].onended = function() {
                suaraBelas.play();
            };
        
            return  b;

        } else if (n < 100) { // 20 -99


            return suara[(n - (n % 10)) / 10].play() +  setTimeout(function () { suaraPuluh.play(); }, 550) + setTimeout(function () { suara[(n % 10)].play(); }, 1000);

        }
    }

    function jedaSuara(nomorAntrian) {
        let jeda = 0;

        if (nomorAntrian > 30) {
            return jeda = 3000;

        }
        else if (nomorAntrian > 20) {
            return jeda = 3000;
        }
        else if (nomorAntrian > 10 && nomorAntrian <= 20) {
            return jeda = 3200;
        }
        else {
            return jeda = 2100;
        }
    }

    /* function jeda(suaraNomorAntrian1,suaraNomorAntrian2){

        console.log("AAAAAAAAAAAAAAAAAAAA"+suaraNomorAntrian1);
        suaraNomorAntrian1.play();
        suaraNomorAntrian1.onended = function() {
            suaraNomorAntrian2;
    };
        } */
    function insertData(nomorAntrian, warnaAntrian) {
        $.ajax({
            method: "POST",
            url: "/admin/antrian",
            data: {
                nomorAntrian: nomorAntrian,
                warnaAntrian: warnaAntrian
            }
        })
            .done(function (data) {
                console.log(data.success);
            });
    }


            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });

            let update;
            (update = function () {
                document.getElementById("waktu")
                    .innerHTML = moment().format('dddd, Do - MMMM - YYYY, h:mm:ss') + " WITA";
            })();
            setInterval(update, 1000);
    
            /* Halaman untuk mengambil data pasien */
            $("#cariData").click(function () {
                let identitas = $("#inputIdentitas").val();
                $("#namaPasien").val("");
                $("#nomorBuku").val("");
                $("#dataKosongNotif").html("");
                console.log(identitas);
    
                $.ajax({
                    method: "GET",
                    url: "/admin/antrian/pendaftaran/" + identitas,
                    data: identitas,
                })
                    .done(function (data) {
                        console.log(data);
                        $("#namaPasien").val(data.name_pasien);
                        $("#nomorBuku").val(data.nomor_buku_pasien);
                        $("#idPasien").val(data.id);
                        $("#nomorBpjs").val(data.nomor_bpjs);
                        

                        
                        if(data == 'kosong'){
                            $("#dataKosongNotif").html("Data Tidak Ditemukan");
                        }
                        
                    });
            });

            $("#submit-antrian-pasien").click(function () {
                //TODO Kerjakan ajax get untuk mengambil data nomorAntrianSekarang ketika di refresh

                let idPasien = $("#idPasien").val();
               
                let keluhanPasien = $("#keluhanPasien").val();
                let poliTujuan = $("#pilihanPoli").val();
                let inputNomorAntrian = nomorAntrianSekarang + " " + warnaAntrianSekarang;
    
                $.ajax({
                    method: "POST",
                    url: "/admin/antrian/pendaftaran/",
                    data: {
                        idPasien : idPasien,
                        keluhanPasien : keluhanPasien,
                        poliTujuan : poliTujuan,
                        nomorAntrian : inputNomorAntrian,
                    }
                })
                    .done(function (data) {
                       
                        $("#namaPasien").val("");
                        $("#nomorBuku").val("");
                        $("#idPasien").val("");
                        $("#nomorBpjs").val("");
                        $("#keluhanPasien").val("");
                        $('#tablePasienHariIni').DataTable().ajax.reload();
                        
                        alert(data.success);
                        
                    })  .fail(function() {
                        alert( "error" );
                      });
            });
    
    
            $('input[name="radioJenisBerobat"]').change(function () {
                if($('#radioJenisBerobatBpjs').prop('checked')){
                    $('#formBpjs').show();
                    $('#inputBPJS').val('');
                    
                }
                else{
                    $('#formBpjs').hide();
                    $('#inputBPJS').val('kosong');
                }
            });
    
            let idPasienTerakhir = 0;
    
            $("#formDataPasienBaru").submit(function (e) {
                let namaPasien = $("#inputNama").val();
                
                
    
            e.preventDefault();
    
            let formData = new FormData(this);
            
            
            /* formData.append('namaPasien', namaPasien); */
            /* console.log(formData); */
    
            $.ajax({
                method: "POST",
                url: "/admin/pasien",
                contentType: false,
                processData: false,
                data: formData
                
            })
                .done(function (data) {
                    /* console.log(data.success);
                    console.log(data.success); */
                    alert(data.success);
                    document.getElementById("formDataPasienBaru").reset();
                    $('#print').show();
                    idPasienTerakhir = data.idPasienBaru;
                    $("#printTombol").attr("href", "pasien/print/" + idPasienTerakhir);
                    
                }) .fail(function() {
                    alert( "Data yang anda masukan tidak valid" );
                  });
                ;
            
            });

            $("#printTombol").click(function () {
                $('#print').hide();
            });

    