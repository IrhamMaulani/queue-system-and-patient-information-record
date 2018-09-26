    
    let update;
    (update = function () {
        document.getElementById("waktu")
            .innerHTML = moment().format('dddd, Do-mm-YYYY, h:mm:ss') + " WITA";
    })();
    setInterval(update, 1000);

    let nomorAntrian = 1;

    let suara = new Audio("{{ asset('sounds/1.wav') }}");

$("#tombol-antrian").click(function () {
    nomorAntrian++;
    $("#nomor-antrian").html(nomorAntrian);
    suara.play();
});