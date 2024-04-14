@extends('front-view.layouts.master')
@section('custom-css')
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="/plugin/toastr/toastr.min.css">
    <link rel="stylesheet" href="/plugin/select2/css/select2.min.css">
    <link rel="stylesheet" href="/plugin/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <style>
        .fc-event {
            background-color: rgb(162, 219, 255);
            border-color: rgb(162, 219, 255);
            font-weight: bold;
            height: 25px;
            /* menentukan tinggi event */
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding-left: 5px;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-info">Welcome , {{ Auth::user()->name }}! 🎉</h5>
                            <p class="mb-4">Kindly review your tasks.</p>

                            <a href="javascript:;" class="btn btn-sm btn-outline-info">Check your tasks</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Bar chart</h6>
                <canvas id="chartjsBar"></canvas>
              </div>
            </div>
         </div>
         <div class="col-xl-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title">Pie chart</h6>
              <canvas id="chartjsPie"></canvas>
            </div>
          </div>
        </div>
      </div>
        <div class="row">
            <!-- Order Statistics -->
            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#navs-pills-within-card-active" role="tab">Report</button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#navs-pills-within-card-link" role="tab">LKA</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <div class="tab-pane fade show active" id="navs-pills-within-card-active" role="tabpanel">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0 me-2">Report Analysis</h5>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="orederStatistics"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                                                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div class="d-flex flex-column align-items-center gap-1">
                                                <h2 class="mb-2">{{ $report_all }}</h2>
                                                <span>Total Report Analysis</span>
                                            </div>
                                        </div>
                                        <ul class="p-0 m-0">
                                            <li class="d-flex mb-4 pb-1" style="display: flex; align-items: center;">
                                                <div class="avatar flex-shrink-0 me-3"
                                                    style="flex-shrink: 0; margin-right: 10px;">
                                                    <span class="avatar-initial rounded bg-label-primary"
                                                        style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; background-color: #007bff; color: #fff;"><i
                                                            class='bx bxs-folder'></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-start justify-content-between gap-2"
                                                    style="display: flex; align-items: center; justify-content: space-between; gap: 10px;">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Finish Goods</h6>
                                                    </div>
                                                    <div class="user-progress" style="flex-shrink: 0;">
                                                        <h6 class="mb-0">{{ $report_fg }}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1" style="display: flex; align-items: center;">
                                                <div class="avatar flex-shrink-0 me-3"
                                                    style="flex-shrink: 0; margin-right: 10px;">
                                                    <span class="avatar-initial rounded bg-label-primary"
                                                        style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; background-color: #007bff; color: #fff;"><i
                                                            class='bx bxs-folder'></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-start justify-content-between gap-2"
                                                    style="display: flex; align-items: center; justify-content: space-between; gap: 10px;">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Microbiologi</h6>
                                                    </div>
                                                    <div class="user-progress" style="flex-shrink: 0;">
                                                        <h6 class="mb-0">{{ $report_mikro }}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1" style="display: flex; align-items: center;">
                                                <div class="avatar flex-shrink-0 me-3"
                                                    style="flex-shrink: 0; margin-right: 10px;">
                                                    <span class="avatar-initial rounded bg-label-primary"
                                                        style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; background-color: #007bff; color: #fff;"><i
                                                            class='bx bxs-folder'></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-start justify-content-between gap-2"
                                                    style="display: flex; align-items: center; justify-content: space-between; gap: 10px;">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Raw Material</h6>
                                                    </div>
                                                    <div class="user-progress" style="flex-shrink: 0;">
                                                        <h6 class="mb-0">{{ $report_rm }}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1" style="display: flex; align-items: center;">
                                                <div class="avatar flex-shrink-0 me-3"
                                                    style="flex-shrink: 0; margin-right: 10px;">
                                                    <span class="avatar-initial rounded bg-label-primary"
                                                        style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; background-color: #007bff; color: #fff;"><i
                                                            class='bx bxs-folder'></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-start justify-content-between gap-2"
                                                    style="display: flex; align-items: center; justify-content: space-between; gap: 10px;">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Stabilita</h6>
                                                    </div>
                                                    <div class="user-progress" style="flex-shrink: 0;">
                                                        <h6 class="mb-0">{{ $report_stabilita }}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navs-pills-within-card-link" role="tabpanel">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0 me-2">Lembar Kerja Analis</h5>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="orederStatistics"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="orederStatistics">
                                                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div class="d-flex flex-column align-items-center gap-1">
                                                <h2 class="mb-2">{{ $lka_all }}</h2>
                                                <span>Total LKA</span>
                                            </div>
                                            <div id="orderStatisticsChart"></div>
                                        </div>
                                        <ul class="p-0 m-0">
                                            <li class="d-flex mb-4 pb-1" style="display: flex; align-items: center;">
                                                <div class="avatar flex-shrink-0 me-3"
                                                    style="flex-shrink: 0; margin-right: 10px;">
                                                    <span class="avatar-initial rounded bg-label-primary"
                                                        style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; background-color: #007bff; color: #fff;"><i
                                                            class='bx bxs-folder-plus'></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-start justify-content-between gap-2"
                                                    style="display: flex; align-items: center; justify-content: space-between; gap: 10px;">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Finish Goods</h6>
                                                    </div>
                                                    <div class="user-progress" style="flex-shrink: 0;">
                                                        <h6 class="mb-0">{{ $lka_fg }}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1" style="display: flex; align-items: center;">
                                                <div class="avatar flex-shrink-0 me-3"
                                                    style="flex-shrink: 0; margin-right: 10px;">
                                                    <span class="avatar-initial rounded bg-label-primary"
                                                        style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; background-color: #007bff; color: #fff;"><i
                                                            class='bx bxs-folder-plus'></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-start justify-content-between gap-2"
                                                    style="display: flex; align-items: center; justify-content: space-between; gap: 10px;">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Microbiologi</h6>
                                                    </div>
                                                    <div class="user-progress" style="flex-shrink: 0;">
                                                        <h6 class="mb-0">{{ $lka_mikro }}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1" style="display: flex; align-items: center;">
                                                <div class="avatar flex-shrink-0 me-3"
                                                    style="flex-shrink: 0; margin-right: 10px;">
                                                    <span class="avatar-initial rounded bg-label-primary"
                                                        style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; background-color: #007bff; color: #fff;"><i
                                                            class='bx bxs-folder-plus'></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-start justify-content-between gap-2"
                                                    style="display: flex; align-items: center; justify-content: space-between; gap: 10px;">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Raw Material</h6>
                                                    </div>
                                                    <div class="user-progress" style="flex-shrink: 0;">
                                                        <h6 class="mb-0">{{ $lka_rm }}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1" style="display: flex; align-items: center;">
                                                <div class="avatar flex-shrink-0 me-3"
                                                    style="flex-shrink: 0; margin-right: 10px;">
                                                    <span class="avatar-initial rounded bg-label-primary"
                                                        style="display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; background-color: #007bff; color: #fff;"><i
                                                            class='bx bxs-folder-plus'></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-start justify-content-between gap-2"
                                                    style="display: flex; align-items: center; justify-content: space-between; gap: 10px;">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Stabilita</h6>
                                                    </div>
                                                    <div class="user-progress" style="flex-shrink: 0;">
                                                        <h6 class="mb-0">{{ $lka_stabilita }}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/ Order Statistics -->

            <!-- Expense Overview -->
            <div class="col-md-6 col-lg-4 order-2 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Scheduled</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @php
                            $events = \App\Models\Event::where('start', '<=', now())
                                ->orderByDesc('start')
                                ->limit(4)
                                ->get();
                        @endphp

                        @foreach ($events as $event)
                            <div class="list-group">
                                <div href="#"
                                    class="list-group-item list-group-item-action flex-column align-items-start bg-white mb-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <p class="mb-1"
                                            style="max-width: 580px; height: 50px; overflow: hidden; text-overflow: ellipsis; font-weight:bold">
                                            {{ $event->title }}</p>
                                        <small>{{ Carbon\Carbon::parse($event->end)->diffForHumans(null, true) }}
                                        </small>
                                    </div>
                                    <p class="mb-1"></p>
                                    <h6>Date Submit : {{ Carbon\Carbon::parse($event['end'])->translatedFormat('d M Y') }}
                                    </h6>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!--/ Expense Overview -->

            <!-- Transactions -->
            <div class="col-md-6 col-lg-4 order-2 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Calendar</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <div href="#"
                                class="list-group-item list-group-item-action flex-column align-items-start bg-white">
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @push('plugin-scripts')
    <script src="{{ asset('assets/plugins/chartjs/chart.min.js') }}"></script>
    @endpush

    @push('custom-scripts')
    <script src="{{ asset('assets/js/chartjs.js') }}"></script>
    <script src="{{ asset('assets/js/calendarjs.js') }}"></script>
    @endpush
    @section('custom-js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script src="/plugin/toastr/toastr.min.js"></script>
        <script src="/plugin/select2/js/select2.full.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
        <script>
            @if (Session::has('success'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.success("{{ session('success') }}");
            @endif

            @if (Session::has('error'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.error("{{ session('error') }}");
            @endif

            @if (Session::has('info'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.info("{{ session('info') }}");
            @endif

            @if (Session::has('warning'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.warning("{{ session('warning') }}");
            @endif
        </script>
    @endsection
