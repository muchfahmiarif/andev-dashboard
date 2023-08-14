@extends('front-view.layouts.master')

@push('plugin-style')

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
              <div id="main"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('plugin-scripts')
  <script type="text/javascript">
    var myChart = echarts.init(document.getElementById('main'), null, {
        width: 600,
        height: 400
    });
    var option;

    option = {
      tooltip: {
        trigger: 'axis',
        axisPointer: {
          type: 'shadow'
        }
      },
      legend: {
        data: ['Planning', 'Aktual']
      },
      grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
      },
      xAxis: [
        {
          type: 'value',
          data:['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli']
        }
      ],
      yAxis: [
        {
          type: 'category',
          axisTick: {
            show: false
          },
          data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        }
      ],
      series: [
        {
          name: 'Planning',
          type: 'bar',
          label: {
            show: true,
            position: 'inside'
          },
          emphasis: {
            focus: 'series'
          },
          data: ['Maret', 'Mei', 'Januari', 244, 200, 220, 210]
        },
        {
          name: 'Aktual',
          type: 'bar',
          stack: 'Total',
          label: {
            show: true
          },
          emphasis: {
            focus: 'series'
          },
          data: ['Januari', 'April', 341, 374, 390, 450, 420]
        },
      ]
    };

    option && myChart.setOption(option);

  </script>
@endpush

@push('custom-scripts')

@endpush