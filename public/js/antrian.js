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
let nomorAntrianBiru = 0;

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


$("#btnBiru").click(function () {
    nomorAntrianBiru++;
    $("#jumlah-pasien-biru").html(nomorAntrianBiru);


    /*   putarSuara(nomorAntrianBiru); */
    console.log(nomorAntrianBiru);
    suaraNomorAntrian.play();

    let jeda = 0;
    if(nomorAntrianBiru < 10){
        jeda = 2200;
    }
    else{
        jeda = 2500;
    }



    setTimeout(function () {
        konvertAngka(nomorAntrianBiru);
    }, 1300);

    setTimeout(function () {
        suaraBiru.play();
    }, jeda);


    /* setTimeout(function() {
        putarSuara(nomorAntrianBiru);
        }, 1800);
setTimeout(function() {
suaraBiru.play();
}, 3500); */



});
$("#btnBiruUlang").click(function () {
    /* suaraNomorAntrian.play(); */
    konvertAngka(nomorAntrianBiru);

    /* setTimeout(function() {
        putarSuara(nomorAntrianBiru);
        }, 1800);
setTimeout(function() {
suaraBiru.play();
}, 3500); */



});




$("#tombol-reset").click(function () {
    $("#nomor-antrian").html(nomorAntrian -= nomorAntrian);
    $("#tombol-antrian").prop('disabled', false);

});



let satuan = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, "Sebelas"];

function konvertAngka(n) {
    console.log(n);


    if (n <= 10) {
        /* satuan[n]; */
        let suara = penentuSuara(satuan[n]);

        return suara.play();
    } else if (n == 10) { // khusus untuk sepuluh
        return suara10.play();
    } else if (n == 11) { // khusus untuk sebelas
        return suara11.play();
    } else if (n < 20) { // 12 -19
        let suara = penentuSuara(satuan[n - 10]);

        /* return satuan[n-10] + suaraBelas.play(); */
        return suara.play() +
            setTimeout(function () { suaraBelas.play(); }, 650);

    } else if (n < 100 && n > 10) { // 20 -99
        let suara = penentuSuara(satuan[(n - (n % 10)) / 10]);
        let suaraKedua = penentuSuara(konvertAngka2(n % 10));
        console.log(n);

        return suara.play() + /* suaraPuluh.play() */ setTimeout(function () { suaraPuluh.play(); }, 550) + setTimeout(function () { suaraKedua.play(); }, 1000);

    } else if (n < 1000) {
        return (n < 200 ? "seratus " : satuan[(n - (n % 100)) / 100] + "ratus ") + konvertAngka(n % 100);
    } else if (n < 1000000) {
        return (n < 2000 ? "seribu " : konvertAngka((n - (n % 1000)) / 1000) + "ribu ") + konvertAngka(n % 1000);
    } else if (n < 1000000000) {
        return konvertAngka((n - (n % 1000000)) / 1000000) + "juta " + konvertAngka(n % 1000000);
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
        return konvertAngka((n - (n % 1000000)) / 1000000) + "juta " + konvertAngka(n % 1000000);
    } else {
        return "Angka lebih besar dari 999,999,999 (harus kurang dari 1 Milyar)";
    }
}
function penentuSuara(nilaiSuara) {
    if (nilaiSuara == 0) {
        return kosong;
    }
    else if (nilaiSuara == 1) {
        return suara1;
    }
    else if (nilaiSuara == 2) {
        return suara2;
    }
    else if (nilaiSuara == 3) {
        return suara3;
    }
    else if (nilaiSuara == 4) {
        return suara4;
    }
    else if (nilaiSuara == 5) {
        return suara5;
    }
    else if (nilaiSuara == 6) {
        return suara6;
    }
    else if (nilaiSuara == 7) {
        return suara7;
    }
    else if (nilaiSuara == 8) {
        return suara8;
    }
    else if (nilaiSuara == 9) {
        return suara9;
    }
    else if (nilaiSuara == 10) {
        return suara10;
    }
}