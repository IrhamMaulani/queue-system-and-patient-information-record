$(document).ready(function(){
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

let suara1 = new Audio("../sounds/1.wav");
let suara2 = new Audio("../sounds/2.wav");
let suara3 = new Audio("../sounds/3.wav");
let suara4 = new Audio("../sounds/4.wav");
let suara5 = new Audio("../sounds/5.wav");
let suara6 = new Audio("../sounds/6.wav");
let suara7 = new Audio("../sounds/7.wav");
let suara8 = new Audio("../sounds/8.wav");
let suara9 = new Audio("../sounds/9.wav");
let suara10 = new Audio("../sounds/sepuluh.wav");
let nomorUrut = new Audio ("../sounds/nomor-urut.wav");


$("#btnBiru").click(function () {


});

$("#tombol-antrian").click(function () {
  nomorAntrian++;
  $("#nomor-antrian").html(nomorAntrian);
  $("#jumlah-pasien").html(nomorAntrian);
  
  jumlahAntrian--;
  $("#sisa-nomor").html(jumlahAntrian);
/* 
  setTimeout(putarSuara, 1500) */
  /* putarSuara1(suara1); */
  nomorUrut.play();
 

  if(nomorAntrian <= 10 ){

    switch (nomorAntrian) {
        case 1:
            putarSuara1(suara1);
            break;

        case 2:
            putarSuara1(suara2);
            break;

        case 3:
            putarSuara1(suara3);
            break;

        case 4:
            putarSuara1(suara4);
            break;

        case 5:
            putarSuara1(suara5);
            break;

        case 6:
            putarSuara1(suara6);
            break;

        case 7:
            putarSuara1(suara7);
            break;

        case 8:
            putarSuara1(suara8);
            break;

        case 9:
            putarSuara1(suara9);
            break;

        case 10:
            putarSuara1(suara10);
            break;
    
        default:
            break;
    }
  }
  
  /* console.log(nomorAntrian); */
  console.log(jumlahAntrian);
  if(jumlahAntrian <= 0){
    $("#tombol-antrian").prop('disabled', true);    
  }
  
 
});

$("#tombol-reset").click(function () {
  $("#nomor-antrian").html(nomorAntrian -=nomorAntrian );
  $("#tombol-antrian").prop('disabled', false);

});

/* function putarSuara() {
    suara1.play();
    
} */

function putarSuara1(suara) {

    /* TODO : Kerjakan algoritma kondisional di sini */
    function putarSuara() {
        suara.play();
    }
    setTimeout(putarSuara, 1500);
    
}
