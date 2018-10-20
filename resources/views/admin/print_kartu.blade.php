    <!DOCTYPE html>
    <head>

        <title>Kartu Berobat</title>
        <style>
           
        .kotak-luar{
            border: 2px solid black;
            border-radius: 9px;
            width: 120em;
            height: 54em;
            /* padding-left: 10%;
            padding-right: 10%; */
            
        }
        hr{
           /*  width: 100%;
            border: none;
            height: 4px;
             color: #333; */ /* old IE */
           /*  background-color: #333;  */
        }

        .logo_kota{
            position: relative;
            display: inline-block;
            width: 5%;
            left:10% ;
            
            /* margin: 5%; */
        }

        .header{
            position: relative;
            display: inline-block;
            /* bottom: 60px; */
            text-align: center;
            font-size: 3.6em;
            left: 20%;
            
        }
        .logo_kesehatan{
            position: relative;
            display: inline-block;
            width: 5%;
            left: 30%;
            /*
            margin: 5%;
            left : 0%;
            bottom: 5px; */
        }
        table{
            border-spacing: 10px 5px;
            margin-top: 2%;
            margin-left:5%; 
            

            
        }
        table tr{
            padding: 3em;
            
        }
        table tr td{
           
          padding-right: 5em;
            font-size: 2.5em;
            padding-top: 0.5em;
            
            
        }
        body {
   transform: scale(0.3);
   transform-origin: 0 0;  
    }
    .footer{
        font-size: 2em;
        font-style: italic;
        text-align: center;
        
    }
        
        </style>
    </head>
    <body>

        <div class="kotak-luar">
           <img src="{{asset('photo/Logo_kota.png')}}" class="logo_kota" alt="" srcset="">
           <h2 class="header">PUSKESMAS ALALAK TENGAH <br> KARTU BEROBAT</h2>
           <img  src="{{asset('photo/Logo_kesehatan.png')}}" class="logo_kesehatan" alt="" srcset="">
           <hr>
           <table  >
               <tr>
                   <td>No. Identitas</td>
                   <td>:</td>
                    <td>{{$pasien->identitas_pasien}}</td>
               </tr>
               <tr>
                   <td>No. BPJS</td>
                   <td>:</td>
                   @if ($pasien->nomor_bpjs == 'umum')
                    <td>-</td>
                    @else
                    <td>{{$pasien->nomor_bpjs}}</td>
                    @endif
               </tr>
               <tr>
                   <td>Nama</td>
                   <td>:</td>
                   <td>{{$pasien->name_pasien}}</td>
               </tr>
               <tr>
                   <td>Nama KK</td>
                   <td>:</td>
                   <td>{{$pasien->kepala_keluarga}}</td>
                   
               </tr>
               <tr>
                   <td>Alamat</td>
                   <td>:</td>
                   <td>{{$pasien->alamat_pasien}}</td>
                   
               </tr>
               <tr>
                   <td>Jenis Berobat</td>
                   <td>:</td>
                    @if ($pasien->nomor_bpjs == 'umum')
                    <td>Umum</td>
                    @else
                    <td>BPJS</td>
                    @endif
                   
               </tr>
           </table>
           <br>
           <br>
           <p class="footer">Setiap kali berobat kartu ini harus dibawa</p>
        </div>
        
    </body>


    </html>