<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/print.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <center>
        <div class="kertas">

            <div class="container-xxl">

                <div class="row">
                    <div class="col">
                            {{-- kosong --}}
                    </div>
                    <div class="col">
                        <img src="starsoft.png" style="width: 60mm">
                    </div>
                    <div class="col" style="text-align: left">
                            <h5>
                            Software <br>
                            Translation <br>
                            Artwork <br>
                            Recording
                            </h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                      {{-- kosong --}}
                    </div>
                    <div class="col">
                      
                    </div>
                    <div class="col" style="text-align: left; font-size: 12px">
                      <b>PT. STAR Software Indonesia </b>
                      <div style="font-size: 12px; font-family: 'Roboto', sans-serif;">
                      CityLofts Sudirman # 1512 <br>
                      Jl.K.H. Mas Mansyur No.121  <br>
                      Jakarta 10220 <br>
                      INDONESIA <br>
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                      {{-- kosong --}}
                    </div>
                    <div class="col" style="position: relative; bottom: 0;">
                            <div class="judul" style="font-family: 'Archivo Black', sans-serif; font-size: 25px; gr"> <u> BERITA ACARA </u> </div>
                            <b><u>NO: {{ $bast->no_bast }}</u></b>
                    </div>
                    <div class="col" style="text-align: left; font-size: 12px; font-family: 'Roboto', sans-serif;">
                      Tel : +62 21 2555-8856 <br>
                      Fax : +62 21 2555-8767 <br>
                      e-mail : kusuma.adiwijaya@star-group.net <br>
                      web : www.star-group.ne <br>
                    </div>
                </div>

                <br>
                <br>
                @php
                          $tanggal = date('d F Y');
                          @endphp

                    <div class="row">
                      <div class="col" style="text-align: left; font-family: 'Roboto', sans-serif;">
                        Perihal <br>
                        Jenis pekerjaan <br>
                        Nama perusahaan <br>
                        PIC Client <br>
                        Item <br>
                      </div>
                      <div class="col" style="text-align: left; font-family: 'Roboto', sans-serif;">
                        : {{ $bast->perihal }} <br>
                        : {{ $bast->t_work }} <br>
                        : {{ $bast->Cname }} <br>
                        : {{ $bast->pClient }} <br>
                        : 1 File <br>
                      </div>
                      <div class="col">
                        {{-- kosong --}}
                      </div>
                      <div class="col">
                        {{-- kosong --}}
                      </div>
                    </div>

                    <br>
                    <br>

                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="text-align:center">Project</th>
                            <th style="width: 3cm; text-align:center;">Quantity</th>
                            <th style="width: 6cm; text-align:center;">Check (√/X)</th>
                          </tr>
                        </thead>
                        <tbody>
                        @php
                        $i = 1;
                        @endphp
                          <tr>
                            <td>{{ $bast->item }}</td>
                            <td style="text-align: center">{{ $bast->Quan }}</td>
                            <td style="text-align: center">√</td>
                          </tr>
                        @php
                            $i++;
                        @endphp
                        
                        </tbody>
                    </table>

                    <br>

                    <div style="text-align: left; font-family: 'Roboto', sans-serif;">
                    Pada hari ini tanggal {{ $tanggal }}, kami PT STAR Software Indonesia telah menyelesaikan seluruh 
                    pekerjaan tersebut untuk {{ $bast->Cname }}. <br>
                    Seluruh pekerjaan telah kami selesaikan dengan baik serta telah sesuai dengan permintaan dari pihak {{ $bast->Cname }}. <br>
                    Demikian berita acara ini dibuat untuk kelengkapan proses administrasi. 
                    </div>

                    <br>
                    <br>

                    <div class="row">
                        <div class="col">
                        Jakarta, {{ $tanggal }}
                        </div>
                        <div class="col">
                          {{-- kosong --}}
                        </div>
                        <div class="col">
                          {{-- kosong --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                          Yang menyerahkan :
                        </div>
                        <div class="col">
                          {{-- kosong --}}
                        </div>
                        <div class="col">
                          Mengetahui : 
                        </div>
                    </div>
                  <div class="row">
                      <div class="col" style="height: 3cm">
                        {{-- tanda tangan --}}
                      </div>
                      <div class="col">
                        {{-- kosong --}}
                      </div>
                      <div class="col" style="height: 3cm">
                        {{-- tanda tangan --}}
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                        Afrizal Luthfi L. 
                      </div>
                      <div class="col">
                        {{-- kosong --}}
                      </div>
                      <div class="col">
                        Ghislain Faure
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                        <div style="width: 5cm; height: 2px; background-color :black"></div> 
                      </div>
                      <div class="col">
                        {{-- kosong --}}
                      </div>
                      <div class="col">
                        <div style="width: 5cm; height: 2px; background-color :black"></div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                        PT STAR Software Indonesia  
                      </div>
                      <div class="col">
                        {{-- kosong --}}
                      </div>
                      <div class="col">
                      {{ $bast->Cname }}
                      </div>
                  </div>


            </div>

        </div>
    </center>

    <script>
      window.print ();
    </script>
</body>
</html>