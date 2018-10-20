

$(document).ready(function () {
    $("button").addClass("btn btn-success");
    var table =$('#tablePasien').DataTable( {
        dom: 'Blfrtip',
        buttons: [
            {

                extend: 'print',
                text: 'Print ',
                /* autoPrint: false, */
                orientation: 'landscape',
                exportOptions: {
                    modifier: {
                        page: 'current',
                        
                    }
                },
                customize: function (win) {
                    $(win.document.body).find('table').addClass('display').css('font-size', '15px');
                    $(win.document.body).find('h1').css('text-align','center').addClass('header');
                    $(win.document.body).find('.header').html('Daftar Pasien');
                    /* $(win.document.body).find('h1').html('Hello'); */
                },
              
            },
            {
                extend: 'pdfHtml5',
                text: 'PDF',
                exportOptions: {
                    modifier: {
                        page: 'current',
                        
                    },
                    exportOptions: {
                        columns: [ 0, 1, 5 ]
                    }
                }, customize: function ( doc ) {
                    // Splice the image in after the header, but before the table
                   }
                
            }
           

        ],
     "ajax": "/admin/pasien/datatable",
        "columns": [
            { data: 'name_pasien' },
            { data : 'nomor_bpjs' },
            { data : 'ttl_pasien' },
            { data : 'nomor_buku_pasien' },
            { data : 'alamat_pasien' },
            { data : 'jenis_kelamin' },
            { data : 'identitas_pasien' },
            { data : 'kepala_keluarga' },
            {"defaultContent": "<button class='btn btn-info'>Lihat Data</button>"},
            {"defaultContent": "<button class='btn btn-warning'>Edit Data!</button>"}
        ],
        
    } );

    $('#tablePasien tbody').on( 'click', '.btn', function () {
        var data = table.row( $(this).parents('tr') ).data();
        alert( data.id );
        console.log(data);
    } );
});




