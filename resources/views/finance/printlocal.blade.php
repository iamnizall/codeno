
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('') }}assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('') }}assets/dist/css/adminlte.min.css">
  {{-- <style>
    *{
      border-style: solid;
    }
  </style> --}}
</head>
<body>
<div class="wrapper">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-sm-7">
                    <img class="float-right" src="{{ asset('') }}assets/star.png" alt="star" style="width: 200px;"">
                </div>
                <div class="col-sm-5">

                  <h5 class="float-left mt-3">Software <br>
                  Translation <br>
                  Network <br>
                  Recording 
                  </h5>
                </div>
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col mt-2" style="margin-left: 58%; font-size: 14px">
                  <address>
                    <strong>PT Star Software Indonesia</strong><br>
                    Citylofts Sudirman # 1512<br>
                    Jl.K.H.Mas Mansyur No.121<br>
                    Jakarta 10220<br>
                    Indonesia<br><br>
                    Tel: +62 21 2555 8856<br>
                    Fax: +62 21 2555 8767<br>
                    Email: kusuma.adiwijaya@star-group.net<br>
                    Web: www.star-group.net<br>
                  </address>
                </div>
                
              </div>
              
              <h3 style="text-align: center"> <b>INVOICE</b></h3><br>
              {{-- <div class="col-sm-9"> --}}
                {{-- <small class="float-right" style="margin-right: 20%">{{ date('d-m-Y') }}</small><br> --}}
                
              {{-- </div> --}}
<div class="row">
  <div class="col-sm">

                <address>
                  <strong>PT Volvo Indonesia</strong><br>

                  Gedung Talavera Tower lt.21 <br>
                  Jl. TB Simatupang Kav. 22-26 No. 8 <br>
                  Cilandak, jakarta 12430 <br>
                  Attn: 
                </address>
              </div>
              <div class="col-sm">
                <h5 class="text-center">{{ date('d-m-Y') }}</h5>
                <h5 class="text-center"> <b><u>Invoice No. STJAK-0009/2021</b></u> </h5><br>
                <h5 class="text-center"><b>PO No. 155555-ID</b></h5>
              </div>
            </div>              

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Job Description</th>
                      <th>Volume Hour</th>
                      <th>Unit Price</th>
                      <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Call of Duty</td>
                      <td>455-981-221</td>
                      <td>El snort testosterone trophy driving gloves handsome</td>
                      <td>$64.50</td>
                      
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Need for Speed IV</td>
                      <td>247-925-726</td>
                      <td>Wes Anderson umami biodiesel</td>
                      <td>$50.00</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Monsters DVD</td>
                      <td>735-845-642</td>
                      <td>Terry Richardson helvetica tousled street art master</td>
                      <td>$10.70</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Grown Ups Blue Ray</td>
                      <td>422-568-642</td>
                      <td>Tousled lomo letterpress</td>
                      <td>$25.99</td>
                    </tr>
                    <tr >
                      <td colspan="2" class="text-center"><b>TOTAL</b></td>
                      <td colspan="2" class="text-center"><b>Please Pay</b></td>
                      <td ><b>Rp.21.00000</b></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <p> Payment :</p> 
              <p> Transfer to:</p>
              <div class="row">
                
                  <div class="col-sm-3 text-center border border-dark ml-5" >
                    <strong>PT Star Software Indonesia</strong> <br>
                    <strong>Permata Bank, Mid Plaza Branch</strong> <br>
                    <strong>Jakarta, Indonesia</strong> <br>
                    <strong>Swift Code :</strong> <br>
                    <strong>RP Account</strong> <br>
                  </div>
                  <div class="col-sm-3">

                  </div>
                  <div class="col-sm-4 text-center ml-5">
                    PT Star Software Indonesia <br><br><br><br>
                    Kusuma
                  </div>
              </div>

              


            </div>
          </div>
        </div>
      </div>

  </div>


<!-- jQuery -->
<script src="{{ asset('') }}assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('') }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('') }}assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('') }}assets/dist/js/demo.js"></script>
</body>
</html>
