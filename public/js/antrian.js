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
let suaraNomorAntrian = new Audio ("../suara/nomor_antrian.mp3");


$("#btnBiru").click(function () {
    nomorAntrianBiru++;
    $("#jumlah-pasien-biru").html(nomorAntrianBiru);
    
    
  /*   putarSuara(nomorAntrianBiru); */
  console.log(nomorAntrianBiru);
    suaraNomorAntrian.play();
   
    
        setTimeout(function() {
            putarSuara(nomorAntrianBiru);
            }, 1800);
   setTimeout(function() {
    suaraBiru.play();
    }, 3500);
    


});
$("#btnBiruUlang").click(function () {
    suaraNomorAntrian.play();
   
    setTimeout(function() {
        putarSuara(nomorAntrianBiru);
        }, 1800);
setTimeout(function() {
suaraBiru.play();
}, 3500);
    
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
  
 

  /* angka nya  di cacah (1012 (seribu seratus dua belas)) */
/*   if(nomor antrian >11){
      putar suara belas
      else if (tidak)
      {
          
      }
      if(fungsi mencacah ambil angka terakhir)
  } */
  
  /* console.log(nomorAntrian); */
  
 
});

$("#tombol-reset").click(function () {
  $("#nomor-antrian").html(nomorAntrian -=nomorAntrian );
  $("#tombol-antrian").prop('disabled', false);

});



function cacahAngka(x){
    let ribu = x - (x % 1000);
    let a = ribu / 1000;
    let ratus = x - (ribu + (x % 100));
    let b = ratus / 100;
    let puluh = x - (ribu + ratus + (x % 10));
    let c = puluh / 10;
    let d = x % 10;

    /* console.log (a);
    console.log (b);
    console.log (c);
    console.log (d); */
    
    let array = [a,b,c,d];
    return array;
}

function putarSuara(x){
    let nilai = cacahAngka(x);
console.log(nilai);


if(nilai[2] == 1 && nilai[3] != 1 && nilai[3] != 0){
    
    setTimeout(function() {
        suaraBelas.play();
        }, 1000);
    }
if(nilai[2] == 2){
    setTimeout(function() {
        suaraPuluh.play();
        }, 1000);
}
    
     if(nilai[3] == 1){
        if(nilai[3] == 1 && nilai[2] == 0){
            suara1.play();
        }
        if(nilai[2] == 1 && nilai[3] == 1){
            suara11.play();
        }
       /*  else if(nilai[2] == 1 && nilai[3] != 1){
            suaraBelas.play();
        }  */
        /* if(nilai[2] == 1 && nilai[3] != 1 && nilai[3] != 0){
            suaraBelas.play();
            }  */
        
    }
    else if (nilai[3] == 2 ){
        suara2.play();
    }
    else if (nilai[3] == 3){
        suara3.play();
    }
    else if (nilai[3] == 4){
        suara4.play();
    }
    else if (nilai[3] == 5){
        suara5.play();
    }
    else if (nilai[3] == 6){
        suara6.play();
    }
    else if (nilai[3] == 7){
        suara7.play();
    }
    else if (nilai[3] == 8){
        suara8.play();
    }
    else if (nilai[3] == 9){
        suara9.play();
    }
    /* jika angka == 10 */
     else if (nilai[2]== 1 && nilai[3] == 0){
        suara10.play();
    }

    
   /*  else if (nilai[2] == 1 && nilai[3] == 1){
        suara11.play();
    } */


    /* jika angka == 10 */
    /* else if (nilai[2]== 1 && nilai[3] == 0){
        suara10.play();
    }
    else if(nilai[2] == 1){
        
    } */
    
}