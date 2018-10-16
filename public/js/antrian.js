$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

let update;
(update = function () {
    document.getElementById("waktu")
        .innerHTML = moment().format('dddd, Do - MMMM - YYYY, h:mm:ss') + " WITA";
})();
setInterval(update, 1000);

let nomorAntrian = 0;
let jumlahAntrian = 100;
let nomorAntrianBiru = parseInt($('#jumlah-pasien-biru').html());
let nomorAntrianPink = parseInt($('#jumlah-pasien-pink').html());
let nomorAntrianHijau = parseInt($('#jumlah-pasien-hijau').html());
let suara1 = new Audio("../suara/1.mp3");
let suara2 = new Audio("../suara/2.mp3");
let suara3 = new Audio("../suara/3.mp3");
let suara4 = new Audio("../suara/4.mp3");
let suara5 = new Audio("../suara/5.mp3");
let suara6 = new Audio("../suara/6.mp3");
let suara7 = new Audio("../suara/7.mp3");
let suara8 = new Audio("../suara/8.mp3");
let suara9 = new Audio("../suara/9.mp3");
let suara10 = new Audio("../suara/10.mp3");
let suara11 = new Audio("../suara/sebelas.mp3");
let suaraBelas = new Audio("../suara/belas.mp3");
let suaraPuluh = new Audio("../suara/puluh.mp3");
let suaraHijau = new Audio("../suara/hijau.mp3");
let suaraBiru = new Audio("../suara/biru.mp3");
let suaraPink = new Audio("../suara/merah_muda.mp3");
let suaraNomorAntrian = new Audio("../suara/nomor_antrian.mp3");
let kosong = new Audio("../suara/kosong.mp3");



function merubahJumlah() {
    $("#jumlah-pasien").html(parseInt($('#jumlah-pasien-biru').html()) + parseInt($('#jumlah-pasien-pink').html()) + parseInt($('#jumlah-pasien-hijau').html()));
}

$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });
});

$("#btnBiru").click(function () {
    nomorAntrianBiru++;
    let warnaAntrian = 'biru';

    insertData(nomorAntrianBiru, warnaAntrian);

    $("#jumlah-pasien-biru").html(nomorAntrianBiru);

    console.log(nomorAntrianBiru);
    suaraNomorAntrian.play();


    setTimeout(function () {
        konvertAngka(nomorAntrianBiru);
        
        
    }, 1300);



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
    $("#nomor-antrian").html(nomorAntrian -= nomorAntrian);
    $("#tombol-antrian").prop('disabled', false);

});

let suara = [kosong, suara1, suara2, suara3, suara4, suara5, suara6, suara7, suara8, suara9, suara10];

function konvertAngka(n) {
    console.log("N" + n);


    if (n <= 10) {
        return suara[n].play();
    } else if (n == 10) { // khusus untuk sepuluh
        return suara10.play();
    } else if (n == 11) { // khusus untuk sebelas
        return suara11.play();
    } else if (n < 20) { // 12 -19
        suaraBelas.pause();

        return suara[(n - 10)].play() +
            setTimeout(function () { suaraBelas.play(); }, 700);

    } else if (n < 100) { // 20 -99

        console.log("a" + n);

        return suara[(n - (n % 10)) / 10].play() + /* suaraPuluh.play() */ setTimeout(function () { suaraPuluh.play(); }, 550) + setTimeout(function () { suara[(n % 10)].play(); }, 1000);

    }
}
function konvertAngka2(n) {
    if (n < 0) {
        return "negatif " + konvertAngka(-n);
    } else if (n < 10) {
        return satuan[n];
    } else if (n == 10) { // khusus untuk sepuluh
        return "sepuluh ";
    } else if (n == 11) { // khusus untuk sebelas
        return "sebelas ";
    } else if (n < 20) {
        return satuan[n - 10] + "belas ";
    } else if (n < 100) {
        return satuan[(n - (n % 10)) / 10] + "puluh " + konvertAngka(n % 10);
    } else if (n < 1000) {
        return (n < 200 ? "seratus " : satuan[(n - (n % 100)) / 100] + "ratus ") + konvertAngka(n % 100);
    } else if (n < 1000000) {
        return (n < 2000 ? "seribu " : konvertAngka((n - (n % 1000)) / 1000) + "ribu ") + konvertAngka(n % 1000);
    } else if (n < 1000000000) {
        return konvertAngka2((n - (n % 1000000)) / 1000000) + "juta " + konvertAngka(n % 1000000);
    } else {
        return "Angka lebih besar dari 999,999,999 (harus kurang dari 1 Milyar)";
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
        return jeda = 2500;
    }
    else {
        return jeda = 2100;
    }
}

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
