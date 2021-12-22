<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Print</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('') }}assets/dist/css/adminlte.min.css">
    {{-- <style>
        * {
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
                <div class="col-sm-12 mt-4">
                    <img class="float-right" src="{{ asset('') }}assets/spq.png" alt="spq" style="width: 150px">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h6 class="float-right mt-3" style="text-align: right"><strong>SpeeQual Sdn Bhd</strong><br>
                        C12-2, Jalan Ampang Utama 1/1, <br>
                        Ampang Avenue, 68000 Ampang, <br>
                        Selangor, Malaysia. <br>
                        Phone : +60 342 660 087 <br>
                        Email: speequal@speequal.com
                    </h6>
                </div>
            </div>

            <h3 style="text-align: center"> <b>INVOICE</b></h3>
            <h3 style="text-align: center"> <b><u>No. SQM-0001/I/2021</u></b></h3>
            <div class="row">
                <div class="col-sm mt-4">
                    <address>
                        <h5><strong>The International School Of Kuala Lumpur </strong><br>
                        No. 2, Lorong Kelab Polo Di Raja <br>
                        55000 Kuala Lumpur, Malaysia. <br>
                        <br>
                        Attn.:
                    </h5>
                    </address>
                </div>
                <div class="col-sm mt-4">
                    <h5 class="text-center">{{ date('d-m-Y') }}</h5>
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
                                <th>Qtt Words</th>
                                <th>Unit Price</th>
                                <th>Amount/euro</th>
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
                                <td colspan="3" class="text-center"><strong>GRAND TOTAL</strong></td>
                                <td colspan="3" class="text-center"><strong>Please pay</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <p> Payment :</p>
            <p> Transfer to:</p>

            <div class="row">
                <div class="col-sm-4">
                    Payment method : <br>
                    Account Name : <strong> Speequal Sdn Bhd</strong> <br>
                    MYR Account No : <strong>1063034598</strong> <br>
                    Bank Name : <strong> UOB (United Overseas Bank) Bhd</strong> <br>
                    Address : <strong> Head Office Menara UOB, </strong> <br>
                    <strong>Jalan Raja Laut, PO BOX 11212, </strong> <br>
                    <strong>50738, Kuala Lumpur-Malaysia,</strong> <br>
                    Swift Code : <strong>UOVBMYK10K1</strong>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-4 text-center ml-5">
                    Speequal Sdn Bhd <br><br><br><br>
                    Dedi Afianto
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 mt-3">
                    <strong>or paypal :</strong> <br>
                    Full Name : <strong>PT Bintang Panca Tridasa</strong> <br>
                    Paypal Account : <strong>financedept@bintang-35.net</strong> <br>
                    <strong>Subject :</strong> Invoice for ISKLrong <br>
                    <strong>From:</strong><a href="" style="text-decoration: none; color: inherit">  amira amira@speequal.com </a> <br>
                    <strong>Date:</strong> {{ date('d/m/y') }}, 11:41 AM <br>
                    <strong>To:</strong><a href="" style="text-decoration: none; color: inherit"> 'Invoice SQ' invoice@speequal.com </a> <br>
                    <strong>CC:</strong><a href="" style="text-decoration: none; color: inherit"> Dwi Ayu dwi.ayu@speequal.com </a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 mt-4" style="line-height: 4 0px">
                    Dear Ayu, <br>
                    Kindly be informed that we need an invoice for ISKL project, below is the details needed: <br>
                    i) Project name     : English to Bahasa Indonesia (TEP) <br>
                    <table>
                        <tbody>
                        <tr><td>Quantity</td><td class="mx-4">:</td><td></td></tr>
                        <tr><td>Rate</td><td>:</td><td></td></tr>
                        <tr><td>Address</td><td>:</td><td>The International School Of Kuala Lumpur
                        No. 2, Lorong Kelab Polo Di Raja, 55000 Kuala Lumpur, Malaysia.</td></tr>
                        <tr><td>Attn</td><td>:</td><td></td></tr>
                        </tbody></table>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 mt-5">
                    Thank you and have a nice day. <br><br>
                    -- <br><br>
                    Warmest regards,
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 mt-5">
                    <table>
                        <tbody>
                        <tr><td style="color: rgb(87, 69, 255); font-weight: bold">Amira Natasya</td><td>|</td><td style="color: red">Business Development Executive/Support</td></tr>
                        </tbody></table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <table>
                        <tbody>
                        <tr><td>W: <strong>www.speequal.com</strong></td><td>|</td><td> E: <strong>amira@speequal.com</strong></td><td>|</td><td>S: amiraramora </td></tr>
                        </tbody></table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <table>
                        <tbody>
                        <tr><td>INDONESIA, Jakarta & Yogyakarta</td><td>|</td><td>MALAYSIA, Kuala Lumpur</td></tr>
                        </tbody></table>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 mt-3">
                    <img  src="{{ asset('') }}assets/spq.png" alt="spq" style="width: 150px">
                    <a href="" style="text-decoration: none; color: inherit"><i class="fab fa-instagram fa-1x mx-2"> Speequal_translation</i></a>
                    <a href="" style="text-decoration: none; color: inherit"><i class="fab fa-facebook fa-1x"> Speequal</i></a>
                    <a href="" style="text-decoration: none; color: inherit"><i class="fab fa-twitter fa-1x mx-2"> SpeeQual</i></a>
                    <a href="" style="text-decoration: none; color: inherit"><i class="fab fa-linkedin fa-1x"> SpeeQual</i></a>
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
