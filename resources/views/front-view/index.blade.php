@extends('front-view.layouts.master')

@push('style')
<style>
    span.empty-box-blue {
        border: 1px solid transparent;
        border-radius: .2rem;
        width: 1.5rem;
        height: 0.7rem;
        display: inline-block;
        background-color: #5470c6;
    }
    span.empty-box-green {
        border: 1px solid transparent;
        border-radius: .2rem;
        width: 1.5rem;
        height: 0.7rem;
        display: inline-block;
        background-color: #9fe080;
    }
    span.empty-box-yellow {
        border: 1px solid transparent;
        border-radius: .2rem;
        width: 1.5rem;
        height: 0.7rem;
        display: inline-block;
        background-color: #ffdc60;
    }
</style>
@endpush

@push('head-script')
<script src="https://cdn.jsdelivr.net/npm/echarts@5.4.2/dist/echarts.min.js"></script>
@endpush

@section('content')
    <div class="">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Home</h1>
                    <div class="content d-flex flex-wrap justify-content-center gap-3">
                        <div class="text-center">
                            <div id="main-1" class="d-flex"></div>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-blue"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-green"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-yellow"></span> Finish Good</a>
                            </div>
                        </div>
                        <div class="text-center">
                            <div id="main-2" class="d-flex"></div>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-blue"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-green"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-yellow"></span> Finish Good</a>
                            </div>
                        </div>

                        <div>
                            <div id="main-pie" class="d-flex"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
<script type="text/javascript">
    // Initialize the echarts instance based on the prepared dom
    var myChart = echarts.init(document.getElementById('main-1'), null, {
        width: 600,
        height: 400
    });

    // Specify the configuration items and data for the chart
    var option = {
        title: {
            text: 'Methode refer to FI VI'
        },
        tooltip: {},
        legend: {
            // Try 'horizontal'
            orient: 'vertical',
            right: 0,
            top: 'center'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {},
            dataset: {
        // Provide a set of data.
        source: [
            ['product', '2015', '2016', '2017', '2018'],
            ['Matcha Latte', 43.3, 85.8, 93.7,],
            ['Milk Tea', 83.1, 73.4, 55.1,],
            ['Cheese Cocoa', 86.4, 65.2, 82.5,],
            ['Walnut Brownie', 72.4, 53.9, 39.1,],
        ]
    },
        series: [{ type: 'bar' }, { type: 'bar' }, { type: 'bar' },]
};

    // Display the chart using the configuration items and data just specified.
    myChart.setOption(option);
</script>
<script type="text/javascript">
    // Initialize the echarts instance based on the prepared dom
    var myChart = echarts.init(document.getElementById('main-2'), null, {
        width: 600,
        height: 400
    });

    // Specify the configuration items and data for the chart
    var option = {
        title: {
            text: 'Methode refer to FI VI'
        },
        tooltip: {},
        legend: {
            // Try 'horizontal'
            orient: 'vertical',
            right: 0,
            top: 'center'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {},
            dataset: {
        // Provide a set of data.
        source: [
            ['product', '2015', '2016', '2017'],
            ['Matcha Latte', 43.3, 85.8, 93.7],
            ['Milk Tea', 83.1, 73.4, 55.1],
            ['Cheese Cocoa', 86.4, 65.2, 82.5],
            ['Walnut Brownie', 72.4, 53.9, 39.1]
        ]
    },
        series: [{ type: 'bar' }, { type: 'bar' }, { type: 'bar' }]
};

    // Display the chart using the configuration items and data just specified.
    myChart.setOption(option);

    
</script>
<script type="text/javascript">
    var myChart = echarts.init(document.getElementById('main-pie'), null, {
        width: 600,
        height: 400
    });

    var option = {
        series: [
            {
            type: 'pie',
            data: [
                {
                value: 335,
                name: 'Direct Visit'
                },
                {
                value: 234,
                name: 'Union Ad'
                },
                {
                value: 1548,
                name: 'Search Engine'
                }
            ]
            }
        ]
    };
    myChart.setOption(option);
</script>
@endpush
