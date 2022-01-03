<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bast Print</title>
    <link rel="stylesheet" href="{{ asset('assets/print.css') }}">
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
                        <div class="col-1">
                        {{-- kosong --}}
                        </div>
                        <div class="col-11">

                            <div class="row">
                                <div class="col" style="height: 45mm">{{-- kosong --}}</div>
                                <div class="col">{{-- ksosong --}}</div>
                                <div class="col">{{-- kosong --}}</div>
                            </div>

                            <div class="row">
                                <div class="col">
                                  {{-- kosong --}}
                                </div>
                                <div class="col" style="position: relative; bottom: 0;">
                                        <div class="judul" style="font-family: 'Archivo Black', sans-serif; font-size: 20px; gr"> <u> BERITA ACARA </u> </div>
                                        <b><u>NO: {{ $bast->no_bast }}</u></b>
                                </div>
                                <div class="col" style="text-align: left; font-size: 12px; font-family: 'Roboto', sans-serif;">
                                  {{-- kosong --}}
                                </div>
                            </div>

                            <br>
                            @php
                            $tanggal = date('d F Y');
                            @endphp

                            <div class="row">
                                <div class="col" style="text-align: left; font-family: 'Roboto', sans-serif; font-size:14px;">
                                  Perihal <br>
                                  Jenis pekerjaan <br>
                                  Nama perusahaan <br>
                                  PIC Client <br>
                                  Item <br>
                                </div>
                                <div class="col" style="text-align: left; font-family: 'Roboto', sans-serif; font-size:14px;">
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
                                      <td style="text-align: center">
                                      @if ($bast->status === '1')
                                      √
                                      @else
                                      X
                                      @endif
                                    </td>
                                    </tr>
                                  </tbody>
                              </table>
          
                              <br>
          
                              <div style="text-align: left; font-family: 'Roboto', sans-serif; font-size:15px;">
                              Pada hari ini tanggal {{ $tanggal }}, kami PT STAR Software Indonesia telah menyelesaikan seluruh 
                              pekerjaan tersebut untuk {{ $bast->Cname }}. <br>
                              Seluruh pekerjaan telah kami selesaikan dengan baik serta telah sesuai dengan permintaan dari pihak {{ $bast->Cname }}. <br>
                              Demikian berita acara ini dibuat untuk kelengkapan proses administrasi. 
                              </div>
          
                              <br>
                              <br>
          
                              <div class="row">
                                  <div class="col">
                                    Jakarta, {{ $tanggal }} {{-- diubah gan berdasar tanggal print --}}
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
                                {{ $bast->pClient }}
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
                
            </div>

        </div>
    </center>
    <script>
      window.print ();
    </script>
</body>
</html>
