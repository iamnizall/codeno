@extends('layouts.main')
@section('content')

<!-- Main content -->
<section class="content">
    {{-- @include('layouts.dashboard') --}}
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-light">
                    <div class="inner">
                        <h3>{{ $invc }}</h3>

                        <p>Invoice</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>

                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-light">
                    <div class="inner">
                        <h3>{{ $bastvol }}</h3>

                        <p>BAST</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-archive"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-12">
                <!-- small box -->
                <div class="small-box bg-light">
                    <div class="inner">
                        <h3>{{ $invcvol }}</h3>

                        <p>Project</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <i class="fas fa-tasks"></i> Project
            </div>
            <div class="card-body">
                <div id="chart"></div>
            </div>
        </div>

    </div>

</section>


@endsection

@section('highchart')
<script src="https://code.highcharts.com/highcharts.js"></script>\
<script>
    Highcharts.chart('chart', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik Project Tahun {{ date('Y') }}'
        },
        xAxis: {
            categories: [
            'Desember',
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} project</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Invoice',
            data: [{{ $desinv21 }}, {{ $janinv22 }}, {{ $febinv22 }}, {{ $marinv22 }}, {{ $aprinv22 }}, {{ $meiinv22 }}, {{ $juninv22 }}, {{ $julinv22 == null? '' : $julinv22 }}, ]

        }, {
            name: 'BAST',
            data: [{{ $desbst21 }}, {{ $janbst22 }}, {{ $febbst22 }}, {{ $marbst22 }}, {{ $aprbst22 }}, {{ $meibst22 }}, {{ $junbst22 }}, {{ $julbst22 == null? '' : $julbst22 }},  ]
        }]
    });
</script>
@endsection
