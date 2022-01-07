
<div class="wrapper">
    <!-- Main content -->
    <div class="invoice p-3 mb-3">
        <!-- title row -->
        <div class="row">
            <div class="col-sm-12 mt-4">
                <img class="float-right" src="{{ asset('') }}assets/images/spq-logo.jpg" alt="spq" style="width: 700px">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h6 class="float-right mt-3" style="text-align: right"><strong>SpeeQual Language Solutions</strong><br>
                    Jl. K.H. Mas Mansyur No. 121,<br>
                    Karet Tengsin, Tanah Abang,<br>
                    Jakarta 10220. Indonesia. <br>
                    Phone : +62 21 2555 8965 <br>
                    Email: speequal@speequal.com
                </h6>
            </div>
        </div>

        <h3 style="text-align: center"> <b>INVOICE</b></h3>
        <h3 style="text-align: center"> <b><u>No. {{ $invc->no_inv }}</u></b></h3>
        <div class="row">
            <div class="col-sm mt-4">
                <address>
                    <h5><strong>{{ $invc->client }} </strong><br>
                        {{ $invc->address }}
                        <br>
                        Attn.: {{ $invc->client }}
                    </h5>
                </address>
            </div>
            <div class="col-sm mt-4">
                <h5 class="text-center">{{ date('d F Y') }}</h5>
            </div>
        </div>

        <!-- Table row -->
        <div class="row">
            <div class="col-12 table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th class="no">No</th>
                            <th>Job Description</th>
                            <th>Qtt Words</th>
                            <th>Unit Price</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($invc->subinvoice as $in)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $in->job_desc }}</td>
                            <td>{{ $in->vol }}</td>
                            <td>{{ $in->price }}</td>
                            <td>{{ $in->total }}</td>
                        </tr>
                        @php
                        $i++;
                        @endphp
                        @endforeach
                        <tr>
                            <th></th>
                            <th class="text-center">GRAND TOTAL</th>
                            <th colspan="2" class="text-center">Please pay</th>
                            <th>{{ $invc->totalcost }}</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <p> Payment : within {{ $days }} days after receiving the invoice</p>
        <p> Transfer to:</p>

        <div class="row">
            <div class="col-sm-4">
                Payment method : <br>
                @if ($invc->norek == 'financedept@bintang‐35.net')
                Full Name : <b>PT Bintang Panca Tridasa</b><br>
                Paypal Account : <b>financedept@bintang-35.net</b>
                @else
                Account Name : <strong> SpeeQual Language Solutions</strong> <br>
                Account No : <strong>{{ $invc->norek }}</strong> <br>
                Bank Name : <strong> Permata Bank</strong> <br>
                Address :  <b>Jl. K.H. Mas Mansyur No. 121,<br>
                    Karet Tengsin, Tanah Abang,<br>
                    Jakarta 10220. Indonesia. <br></b>
                    Swift Code : <strong>{{ $invc->s_code }}</strong>
                    @endif


                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-4 text-center ml-5">
                    Speequal Sdn Bhd <br><br><br><br>
                    Dedi Afianto
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 mt-5">
                    <table class="t-none">
                        <tbody>
                            <tr><td style="color: rgb(87, 69, 255); font-weight: bold">Amira Natasya</td><td>|</td><td style="color: red">Business Development Executive/Support</td></tr>
                        </tbody></table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <table class="t-none">
                            <tbody>
                                <tr><td>W: <strong>www.speequal.com</strong></td><td>|</td><td> E: <strong>amira@speequal.com</strong></td><td>|</td><td>S: amiraramora </td></tr>
                            </tbody></table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <table class="t-none">
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
