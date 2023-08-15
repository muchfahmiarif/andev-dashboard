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
<div>
    <div class="alert alert-warning d-flex align-items-center" role="alert">
        🏗️ Under development
    </div>
</div>
    <div class="mb-2 d-flex">
        <div>
            <h2 class="mb-0">Andev Dashboard</h2>
        </div>
        <div class="ms-auto">
            <div class="d-flex">
                <select class="form-select mx-2" aria-label="Default select example">
                    <option selected>Pilih tahun...</option>
                    <option value="1">2023</option>
                    <option value="2">2024</option>
                    <option value="3">2025</option>
                    <option value="4">2026</option>
                    <option value="5">2027</option>
                    <option value="6">2028</option>
                    <option value="7">2029</option>
                    <option value="8">2030</option>
                    <option value="9">2031</option>
                    <option value="10">2032</option>
                    <option value="11">2033</option>
                    <option value="12">2034</option>
                </select>
                <button class="btn btn-primary text-light">Terapkan</button>
            </div>
        </div>
    </div>
    <div class="row">
        {{-- Grafik 1 --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Main 1</h1>
                    <div class="content d-flex flex-wrap justify-content-center gap-3">
                        <div class="text-center">
                            <div id="main-1" class="d-flex"></div>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-blue"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-green"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-yellow"></span> Finish Good</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Grafik 2 --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Main 2</h1>
                    <div class="content d-flex flex-wrap justify-content-center gap-3">
                        <div class="text-center">
                            <div id="main-2" class="d-flex"></div>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-blue"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-green"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-yellow"></span> Finish Good</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        {{-- Grafik 3 --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Main 1</h1>
                    <div class="content d-flex flex-wrap justify-content-center gap-3">
                        <div class="text-center">
                            <div id="main-pie" class="d-flex"></div>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-blue"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-green"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-yellow"></span> Finish Good</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Grafik 4 --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Main 2</h1>
                    <div class="content d-flex flex-wrap justify-content-center gap-3">
                        <div class="text-center">
                            <div id="main-4" class="d-flex"></div>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-blue"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-green"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-yellow"></span> Finish Good</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        {{-- Grafik 5 --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Complience</h1>
                    <div class="content d-flex flex-wrap justify-content-center gap-3">
                        <div class="text-center">
                            <div id="main-complience" class="d-flex"></div>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-blue"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-green"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-yellow"></span> Finish Good</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        {{-- Grafik 6 --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Main 1</h1>
                    <div class="content d-flex flex-wrap justify-content-center gap-3">
                        <div class="text-center">
                            <div id="main-stacked-line" class="d-flex"></div>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-blue"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-green"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-yellow"></span> Finish Good</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
{{-- Main 1 --}}
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
        toolbox: {
        feature: {
        saveAsImage: {}
        }
    },
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
{{-- Main 2 --}}
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
        toolbox: {
        feature: {
        saveAsImage: {}
        }
    },
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
{{-- Main 4 --}}
<script type="text/javascript">
    // Initialize the echarts instance based on the prepared dom
    var myChart = echarts.init(document.getElementById('main-4'), null, {
        width: 600,
        height: 400
    });

    // Specify the configuration items and data for the chart
    var option = {
        title: {
            text: 'Methode refer to FI VI'
        },
        tooltip: {},
        toolbox: {
        feature: {
        saveAsImage: {}
        }
    },
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
{{-- Main Pie --}}
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
        ],
        toolbox: {
        feature: {
        saveAsImage: {}
        }
    },
    };
    myChart.setOption(option);
</script>
{{-- Main Stacked Line --}}
<script type="text/javascript">
    var myChart = echarts.init(document.getElementById('main-stacked-line'), null, {
        width: 1200,
        height: 400
    });
    var option;

    option = {
    title: {
        text: 'Stacked Line'
    },
    tooltip: {
        trigger: 'axis'
    },
    legend: {
        data: ['Email', 'Union Ads', 'Video Ads', 'Direct', 'Search Engine']
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    toolbox: {
        feature: {
        saveAsImage: {}
        }
    },
    xAxis: {
        type: 'category',
        boundaryGap: false,
        data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
    },
    yAxis: {
        type: 'value'
    },
    series: [
        {
        name: 'Email',
        type: 'line',
        stack: 'Total',
        data: [120, 132, 101, 134, 90, 230, 210]
        },
        {
        name: 'Union Ads',
        type: 'line',
        stack: 'Total',
        data: [220, 182, 191, 234, 290, 330, 310]
        },
        {
        name: 'Video Ads',
        type: 'line',
        stack: 'Total',
        data: [150, 232, 201, 154, 190, 330, 410]
        },
        {
        name: 'Direct',
        type: 'line',
        stack: 'Total',
        data: [320, 332, 301, 334, 390, 330, 320]
        },
        {
        name: 'Search Engine',
        type: 'line',
        stack: 'Total',
        data: [820, 932, 901, 934, 1290, 1330, 1320]
        }
    ]
    };
    option && myChart.setOption(option);
</script>

{{-- Main Complience --}}
<script type="text/javascript">
    var myChart = echarts.init(document.getElementById('main-complience'), null, {
        width: 1200,
        height: 400
    });
    var option;

option = {
  tooltip: {
    trigger: 'axis',
    axisPointer: {
      type: 'cross',
      crossStyle: {
        color: '#999'
      }
    }
  },
  toolbox: {
    feature: {
      dataView: { show: true, readOnly: false },
      magicType: { show: true, type: ['line', 'bar'] },
      restore: { show: true },
      saveAsImage: { show: true }
    }
  },
  legend: {
    data: ['Complience', 'Performance Instrument', 'Limit']
  },
  xAxis: [
    {
      type: 'category',
      data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      axisPointer: {
        type: 'shadow'
      }
    }
  ],
  yAxis: [
    {
      type: 'value',
      name: 'Performance Instrument',
      min: 0,
      max: 250,
      interval: 50,
      axisLabel: {
        formatter: '{value} ml'
      }
    },
    {
      type: 'value',
      name: 'Limit',
      min: 0,
      max: 100,
      interval: 10,
      axisLabel: {
        formatter: '{value} %'
      }
    }
  ],
  series: [
    {
      name: 'Complience',
      type: 'bar',
      tooltip: {
        valueFormatter: function (value) {
          return value + ' ml';
        }
      },
      data: [
        2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3
      ]
    },
    {
      name: 'Performance Instrument',
      type: 'bar',
      tooltip: {
        valueFormatter: function (value) {
          return value + ' ml';
        }
      },
      data: [
        2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3
      ]
    },
    {
      name: 'Limit',
      type: 'line',
      yAxisIndex: 1,
      tooltip: {
        valueFormatter: function (value) {
          return value + ' %';
        }
      },
      data: [95, 95, 95, 95, 95, 95, 95, 95, 95, 95, 95, 95]
    }
  ]
};

option && myChart.setOption(option);

</script>
@endpush
