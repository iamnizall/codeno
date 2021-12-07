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
                    <div class="small-box bg-info">
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
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

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
                    <div class="small-box bg-warning">
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
                type: 'spline'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                ]
            },
            yAxis: {
                title: {
                    text: ''
                },
                labels: {
                    formatter: function() {
                        return this.value + '';
                    }
                }
            },
            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                spline: {
                    marker: {
                        radius: 4,
                        lineColor: '#666666',
                        lineWidth: 1
                    }
                }
            },
            series: [{
                name: 'Tokyo',
                marker: {
                    symbol: 'square'
                },
                data: [1000,2000,3000,4000,5000, {
                    y: 2000,
                    marker: {
                        symbol: 'url(https://www.highcharts.com/samples/graphics/sun.png)'
                    }
                }, 1000]

            }, {
                name: 'London',
                marker: {
                    symbol: 'diamond'
                },
                data: [{
                    y: 3000,
                    marker: {
                        symbol: 'url(https://www.highcharts.com/samples/graphics/snow.png)'
                    }
                }, 1000,2000,3000,4000,5000]
            }]
        });
    </script>
@endsection
