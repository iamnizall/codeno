
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
{{--   <style>
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
                <div class="col-12">
                  <h3 style="text-align: center">
                    <img src="{{ asset('') }}assets/star.png" alt="star" style="width: 200px;"">
                    {{-- <i class="fas fa-globe"></i> Print Invoice --}}
                    {{-- <small class="float-right">{{ date('d-m-Y') }}</small> --}}
                  </h3>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col" style="margin-left: 58%">
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
              
              <h3 style="text-align: center">INVOICE</h3><br>
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
                <h5 class="text-center">Invoice No. STJAK-0009/2021</h5><br>
                <h5 class="text-center">PO No. 155555-ID</h5>
              </div>
            </div>              

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Product</th>
                      <th>Serial #</th>
                      <th>Description</th>
                      <th>Subtotal</th>
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
                    </tbody>
                  </table>
                </div>
              </div>
              <p> Payment :</p> 
              <p> Transfer to:</p>
              <div class="row">
                
                  <div class="col-sm-3 text-center border border-dark ml-5" >
                    PT Star Software Indonesia <br>
                    Permata Bank, Mid Plaza Branch <br>
                    Jakarta, Indonesia <br>
                    Swift Code : <br>
                    RP Account <br>
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
