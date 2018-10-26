
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    $(document).ready(function () {
        $("button").addClass("btn btn-success");
        var table =$('#tablePasien').DataTable( {
            dom: 'Blfrtip',
            buttons: [
                {

                    extend: 'print',
                    text: 'Print ',
                    autoPrint: true,
                    orientation: 'landscape',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3 ,4 ,5  ],
                        modifier: {
                            page: 'current',
                            columns: ':visible',
                            
                        }
                    },
                    customize: function (win) {
                        $(win.document.body).find('table').addClass('display').css('font-size', '15px');
                        $(win.document.body).find('h1').css('text-align','center').addClass('header');
                        $(win.document.body).find('.header').html('Daftar Pasien');
                        /* $(win.document.body).find('button').css('display','none'); */
                        /* $(win.document.body).find('h1').html('Hello'); */
                    },
                
                },
                {
                    extend: 'excelHtml5',
                    orientation: 'landscape',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3 ,4 ,5  ],
                        modifier: {
                            page: 'current',
                            columns: ':visible',
                            
                        }
                        
                    }, customize: function ( xlsx ) {
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];
    
                            // jQuery selector to add a border
                            
                            $('row c[r*="10"]', sheet).attr( 's', '25' );
                    }
                    
                }
            

            ],
        "ajax": "riwayatpendaftaran/datatable",
            "columns": [
                
                { data: 'identitas_pasien' },
                { data : 'nomor_bpjs' },
                { data : 'nomor_buku_pasien' },
                { data : 'name_pasien' },
                { data : 'tujuan_poli_pasien' },
                { data : 'created_at' },
                {"defaultContent": "<a class='btn btn-block btn-info lihat-data' id='printTombol' target='_blank'  href=''>Lihat Data</a>"},
                {"defaultContent": "<button class='btn btn-danger delete-data'>Delete Data!</button>"}
            ],
            
        } );

        $('#tablePasien tbody').on( 'click', '.lihat-data', function () {
            var data = table.row( $(this).parents('tr') ).data();

            $(".lihat-data").attr("href", "pasien/detailpasien=" +data.id);
            
            console.log(data);
        } );

        $('#tablePasien tbody').on( 'click', '.delete-data', function () {
            var data = table.row( $(this).parents('tr') ).data();

            var confirmation = confirm("Data akan di hapus permanen.Apakah anda ingin melanjutkan?");

            if (confirmation) {
                $.ajax({
                    method: "POST",
                    url: window.location.href + "/" + data.id,
                    data: { 
                        _method     :     "delete"       
                    }    
                })
                    .done(function( data ) {
                        alert("Data Pasien Berhasil Di hapus");
                        $('#tablePasien').DataTable().ajax.reload();   
                    });
                
            }
        
    } );

    });