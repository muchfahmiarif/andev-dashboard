@extends('front-view.layouts.master')

@push('plugin-style')
    <link rel="stylesheet" href="{{ asset('css/data-table/scroller.bootstrap5.min.css') }}">
@endpush
@section('custom-css')
    <link rel="stylesheet" href="/plugin/toastr/toastr.min.css">
    <link rel="stylesheet" href="/plugin/select2/css/select2.min.css">
    <link rel="stylesheet" href="/plugin/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection
@section('content')
    <div class="row py-2">
        <div class="col-md-5">
            <h4>
                <span class="text-muted fw-light">Tables /</span> Finish Good
            </h4>
        </div>

        <div class="col-md-7">
            <form method="GET" action="{{ route('logbook_fg') }}">
                <div class="input-group col-2 mx-auto">
                    <input class="form-control py-2 border-right-0 border" type="search" placeholder="Type something..."
                        name="q" id="example-search-input" value="{{ request()->input('q') }}">
                    <select class="form-control select2" style="width: 20px;" id="searchby" name="searchby">
                        <option value="0" {{ request()->input('searchby') == 0 ? 'selected' : '' }}>Search By</option>
                        <option value="1" {{ request()->input('searchby') == 1 ? 'selected' : '' }}>Item Name</option>
                        <option value="2" {{ request()->input('searchby') == 2 ? 'selected' : '' }}>PIC</option>
                        <option value="3" {{ request()->input('searchby') == 3 ? 'selected' : '' }}>Status</option>
                        <option value="4" {{ request()->input('searchby') == 4 ? 'selected' : '' }}>Keterangan</option>
                    </select>
                    <input type="hidden" name="category" value="{{ Request::get('category') }}">
                    <button class="btn btn-outline-primary" type="submit">
                        <i class='bx bx-search-alt'></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="container" style="display: flex; justify-content: space-between;">
                <div>
                    <a onclick="window.location.href='{{ route('ShowFormRPVRIV', ['jenis_kegiatan' => 'Finish Good']) }}'"
                        class="btn btn-primary text-white" style="width: 200px; text-align: center; margin-right: 10px;">
                        <i class="fas fa-plus"></i> Create RPV-RIV
                    </a>
                </div>
                <div class="form-group row col-sm-2" style="margin-right: 10px;">
                    <label for="sort" class="col-sm-4 col-form-label">Sort</label>
                    <div class="col-sm-8">
                        <form id="sorting" action="" method="get">
                            <input type="hidden" name="q" value="{{ Request::get('q') }}">
                            <select class="form-control select2" style="width: 100%;" id="sort" name="sort">
                                <option value="" {{ Request::get('sort') == null ? 'selected' : '' }}>None</option>
                                <option value="asc" {{ Request::get('sort') == 'asc' ? 'selected' : '' }}>Asc</option>
                                <option value="desc" {{ Request::get('sort') == 'desc' ? 'selected' : '' }}>Desc</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="container">
                <form id="select" action="" method="get">
                    <div class="form-group row">
                        <label for="date" class="col-sm-2 col-form-label">Date Start</label>
                        <div class="col-sm-3">
                            <input type="datetime-local" class="form-control" name="fromDate"
                                value="{{ Request::get('fromDate') }}">
                        </div>
                        <label for="date" class="col-sm-2 col-form-label">Date End</label>
                        <div class="col-sm-3">
                            <input type="datetime-local" class="form-control" name="toDate"
                                value="{{ Request::get('toDate') }}">
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-primary text-white" type="submit">
                                <i class="fas fa-search"></i> Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Item</th>
                        <th>PIC</th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>Mei</th>
                        <th>Jun</th>
                        <th>Jul</th>
                        <th>Aug</th>
                        <th>Sep</th>
                        <th>Oct</th>
                        <th>Nov</th>
                        <th>Dec</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        {{-- <th>Verifikasi</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php
                        $currentPage = $products->currentPage();
                        $perPage = $products->perPage();
                        $startNumber = ($currentPage - 1) * $perPage + 1;
                    @endphp
                    @if (count($products) > 0)
                        @foreach ($products as $key => $d)
                            @php
                                $data = [
                                    'pid' => $d->id_kegiatan,
                                    'user_id' => $d->user_id,
                                    'jenis_kegiatan' => $d->jenis_kegiatan,
                                    'nama_item' => $d->nama_item,
                                    'pic' => $d->pic,
                                    'rencana' => $d->rencana,
                                    'aktual' => $d->aktual,
                                    'keterangan' => $d->keterangan,
                                    'status' => $d->status,
                                    // 'verifikasi_1' => $d->verifikasi_1,
                                    // 'date_verifikasi_1' => $d->date_verifikasi_1,
                                    // 'verifikasi_2' => $d->verifikasi_2,
                                    // 'date_verifikasi_2' => $d->date_verifikasi_2,
                                ];
                            @endphp
                            <td rowspan="2" class="text-center align-middle">{{ $startNumber++ }}</td>
                            <td rowspan="2" class="text-center align-middle">{{ $data['nama_item'] }}</td>
                            <td rowspan="2" class="text-center align-middle">{{ $data['pic'] }}</td>
                            <td class="text-center align-middle"
                                style="background-color:@php $rencanaArray = explode(',', $data['rencana']); if (in_array(1, $rencanaArray)) {  echo '#00588b';  } @endphp">
                            </td>
                            <td class="text-center align-middle"
                                style="background-color:@php $rencanaArray = explode(',', $data['rencana']); if (in_array(2, $rencanaArray)) {  echo '#00588b';  } @endphp">
                            </td>
                            <td class="text-center align-middle"
                                style="background-color:@php $rencanaArray = explode(',', $data['rencana']); if (in_array(3, $rencanaArray)) {  echo '#00588b';  } @endphp">
                            </td>
                            <td class="text-center align-middle"
                                style="background-color:@php $rencanaArray = explode(',', $data['rencana']); if (in_array(4, $rencanaArray)) {  echo '#00588b';  } @endphp">
                            </td>
                            <td class="text-center align-middle"
                                style="background-color:@php $rencanaArray = explode(',', $data['rencana']); if (in_array(5, $rencanaArray)) {  echo '#00588b';  } @endphp">
                            </td>
                            <td class="text-center align-middle"
                                style="background-color:@php $rencanaArray = explode(',', $data['rencana']); if (in_array(6, $rencanaArray)) {  echo '#00588b';  } @endphp">
                            </td>
                            <td class="text-center align-middle"
                                style="background-color:@php $rencanaArray = explode(',', $data['rencana']); if (in_array(7, $rencanaArray)) {  echo '#00588b';  } @endphp">
                            </td>
                            <td class="text-center align-middle"
                                style="background-color:@php $rencanaArray = explode(',', $data['rencana']); if (in_array(8, $rencanaArray)) {  echo '#00588b';  } @endphp">
                            </td>
                            <td class="text-center align-middle"
                                style="background-color:@php $rencanaArray = explode(',', $data['rencana']); if (in_array(9, $rencanaArray)) {  echo '#00588b';  } @endphp">
                            </td>
                            <td class="text-center align-middle"
                                style="background-color:@php $rencanaArray = explode(',', $data['rencana']); if (in_array(10, $rencanaArray)) {  echo '#00588b';  } @endphp">
                            </td>
                            <td class="text-center align-middle"
                                style="background-color:@php $rencanaArray = explode(',', $data['rencana']); if (in_array(11, $rencanaArray)) {  echo '#00588b';  } @endphp">
                            </td>
                            <td class="text-center align-middle"
                                style="background-color:@php $rencanaArray = explode(',', $data['rencana']); if (in_array(12, $rencanaArray)) {  echo '#00588b';  } @endphp">
                            </td>
                            <td rowspan="2" class="text-center align-middle"> {{ $data['keterangan'] }} </td>
                            @php
                                $rencana = explode(',', $data['rencana']);
                                $aktual = explode(',', $data['aktual']);

                                sort($rencana);
                                sort($aktual);
                                $status = 'Effective';
                                if (
                                    count(array_intersect($rencana, $aktual)) === count($rencana) &&
                                    count($rencana) > count($aktual)
                                ) {
                                    $status = 'Effective';
                                } elseif (count($rencana) < count($aktual)) {
                                    if (end($rencana) < end($aktual)) {
                                        $status = 'Ineffective';
                                    }
                                } elseif (count($rencana) > count($aktual)) {
                                    if (end($rencana) > end($aktual)) {
                                        $status = 'Effective';
                                    }
                                } elseif ($aktual > $rencana && $aktual != $rencana) {
                                    $status = 'Ineffective';
                                }
                            @endphp
                            <td rowspan="2" class="text-center align-middle">{{ $status }}</td>
                            {{-- <td rowspan="2" class="text-center align-middle"> @isset($data['verifikasi_1']) <i title="{{ $data['verifikasi_1'] }} Date : {{ $data['date_verifikasi_1'] }}" class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i> @endisset @isset($data['verifikasi_2']) <i title="{{ $data['verifikasi_2'] }} Date : {{ $data['date_verifikasi_2'] }}" class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i> @endisset </td> --}}
                            <td rowspan="2" style="min-width: 100px;"class="text-center align-middle ">
                                {{-- @if ($data['verifikasi_1'] != null && $data['verifikasi_2'] != null) 
                    @elseif($data['verifikasi_1'] == NULL )
                      <a title="Verifikasi 1" type="button"  class="btn btn-primary btn-sm text-white" data-bs-toggle="modal"  data-bs-target="#approve1{{ $d->id_kegiatan }}"><i class="fas fa-user"></i></a>
                    @elseif  ($data['verifikasi_2'] != NULL )
                      <a title="Verifikasi 2" type="button"  class="btn btn-primary btn-sm text-white" data-bs-toggle="modal"  data-bs-target="#approve2{{ $d->id_kegiatan }}"><i class="fas fa-user"></i></a>
                    @endif --}}

                                <a title="Edit Data" type="button" class="btn btn-secondary btn-sm text-white"
                                    onclick="window.location.href='/rpv-riv/ShowFormRPVRIV?id={{ $d->id_kegiatan }}'"><i
                                        class="fas fa-edit"></i></a>
                                <a title="Edit Data" type="button" class="btn btn-danger btn-sm text-white"
                                    data-bs-toggle="modal" data-bs-target="#delete{{ $d->id_kegiatan }}"><i
                                        class="fas fa-trash"></i></a>
                            </td>
                            <tr>
                                <td class="text-center align-middle"
                                    style="background-color:@php $aktualArray = explode(',', $data['aktual']); if (in_array(1, $aktualArray)) {  echo '#f76300';  } @endphp">
                                </td>
                                <td class="text-center align-middle"
                                    style="background-color:@php $aktualArray = explode(',', $data['aktual']); if (in_array(2, $aktualArray)) {  echo '#f76300';  } @endphp">
                                </td>
                                <td class="text-center align-middle"
                                    style="background-color:@php $aktualArray = explode(',', $data['aktual']); if (in_array(3, $aktualArray)) {  echo '#f76300';  } @endphp">
                                </td>
                                <td class="text-center align-middle"
                                    style="background-color:@php $aktualArray = explode(',', $data['aktual']); if (in_array(4, $aktualArray)) {  echo '#f76300';  } @endphp">
                                </td>
                                <td class="text-center align-middle"
                                    style="background-color:@php $aktualArray = explode(',', $data['aktual']); if (in_array(5, $aktualArray)) {  echo '#f76300';  } @endphp">
                                </td>
                                <td class="text-center align-middle"
                                    style="background-color:@php $aktualArray = explode(',', $data['aktual']); if (in_array(6, $aktualArray)) {  echo '#f76300';  } @endphp">
                                </td>
                                <td class="text-center align-middle"
                                    style="background-color:@php $aktualArray = explode(',', $data['aktual']); if (in_array(7, $aktualArray)) {  echo '#f76300';  } @endphp">
                                </td>
                                <td class="text-center align-middle"
                                    style="background-color:@php $aktualArray = explode(',', $data['aktual']); if (in_array(8, $aktualArray)) {  echo '#f76300';  } @endphp">
                                </td>
                                <td class="text-center align-middle"
                                    style="background-color:@php $aktualArray = explode(',', $data['aktual']); if (in_array(9, $aktualArray)) {  echo '#f76300';  } @endphp">
                                </td>
                                <td class="text-center align-middle"
                                    style="background-color:@php $aktualArray = explode(',', $data['aktual']); if (in_array(10, $aktualArray)) {  echo '#f76300';  } @endphp">
                                </td>
                                <td class="text-center align-middle"
                                    style="background-color:@php $aktualArray = explode(',', $data['aktual']); if (in_array(11, $aktualArray)) {  echo '#f76300';  } @endphp">
                                </td>
                                <td class="text-center align-middle"
                                    style="background-color:@php $aktualArray = explode(',', $data['aktual']); if (in_array(12, $aktualArray)) {  echo '#f76300';  } @endphp">
                                </td>
                            </tr>
                            <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true" id="approve1{{ $d->id_kegiatan }}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Action</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @if (count($products) > 0)
                                                <form role="form" id="delete" action="{{ route('approve_1') }}"
                                                    method="post">
                                                    @csrf
                                                    <input type="hidden" name="id_kegiatan" id="id_kegiatan"
                                                        value="{{ $data['pid'] }}">
                                                    <div>
                                                        <p>Anda yakin ingin melakukan Approve ?</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">{{ __('Batal') }}</button>
                                                        <button id="button-save" type="submit"
                                                            class="btn btn-primary text-white">{{ __('Submit') }}</button>
                                                    </div>
                                                </form>
                                        </div>
                                    @else
                                        <div class="text-center">
                                            <p>{{ __('No data.') }}</p>
                                        </div>
                        @endif
        </div>

    </div>
    </div>
    <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        id="approve2{{ $d->id_kegiatan }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Action</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (count($products) > 0)
                        <form role="form" id="delete" action="{{ route('approve_2') }}" method="post">
                            @csrf
                            <input type="hidden" name="id_kegiatan" id="id_kegiatan" value="{{ $data['pid'] }}">
                            <div>
                                <p>Anda yakin ingin melakukan Approve ?</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default"
                                    data-dismiss="modal">{{ __('Batal') }}</button>
                                <button id="button-save" type="submit"
                                    class="btn btn-primary text-white">{{ __('Submit') }}</button>
                            </div>
                        </form>
                </div>
            @else
                <div class="text-center">
                    <p>{{ __('No data.') }}</p>
                </div>
                @endif
            </div>

        </div>
    </div>
    <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        id="delete{{ $d->id_kegiatan }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Action</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (count($products) > 0)
                        <form role="form" id="delete" action="{{ route('delete_RPVRIV') }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id_delete" id="id_delete" value="{{ $data['pid'] }}">
                            <div>
                                <p>Anda yakin ingin melakukan Approve ?</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default"
                                    data-dismiss="modal">{{ __('Batal') }}</button>
                                <button id="button-save" type="submit"
                                    class="btn btn-primary text-white">{{ __('Submit') }}</button>
                            </div>
                        </form>
                </div>
            @else
                <div class="text-center">
                    <p>{{ __('No data.') }}</p>
                </div>
                @endif
            </div>

        </div>
    </div>
    @endforeach
@else
    <tr class="text-center">
        <td colspan="21">{{ __('No data.') }}</td>
    </tr>
    @endif
    </tbody>
    </table>
    </div>
    <div style="margin-left:10px; margin-top:10px;">
        {{ $products->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
    </div>
    <div class="modal fade" id="export">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="modal-title" class="modal-title">{{ __('Export') }}</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" id="approve-form" action="{{ route('export_report') }}" method="post">
                        @csrf
                        <input type="hidden" name="jenis_report" id="jenis_report" value="Finish Good">
                        <div class="form-group row">
                            <label for="startDate" class="col-sm-2 col-form-label">{{ __('From') }}</label>
                            <div class="col-sm-4">
                                <input type="datetime-local" class="form-control" id="startDate" name="startDate"
                                    placeholder="Masukan">
                                @error('startDate')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <label for="endDate" class="col-sm-2 col-form-label">{{ __('To') }}</label>
                            <div class="col-sm-4">
                                <input type="datetime-local" class="form-control" id="endDate" name="endDate"
                                    placeholder="Masukan">
                                @error('endDate')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-end">
                            <button id="button-save" type="submit" class="btn btn-primary text-white">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
@section('custom-js')
    <script src="/plugin/select2/js/select2.full.min.js"></script>
    <script src="/plugin/toastr/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize Select2 for single select
            $('.select2').select2({
                theme: 'bootstrap4'
            });

            // Initialize Select2 for multiple select
            $('.multiple').select2();

            // Submit form when sorting option changes
            $('#sort').on('change', function() {
                $("#sorting").submit();
            });
        });
    </script>
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
