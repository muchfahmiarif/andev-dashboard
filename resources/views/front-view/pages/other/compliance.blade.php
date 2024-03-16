@extends('front-view.layouts.master')

@push('plugin-style')
    <link rel="stylesheet" href="{{ asset('css/data-table/scroller.bootstrap5.min.css') }}">
    <style>
        .table-responsive {
            height: 440px;
            overflow-y: auto;
        }
    </style>
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
                <span class="text-muted fw-light">Tables /</span> Compliance
            </h4>
        </div>

        <div class="col-md-7">
            <form method="GET" action="{{ route('logbook_compliance') }}">
                <div class="input-group col-2 mx-auto">
                    <input class="form-control py-2 border-right-0 border" type="search" placeholder="Type something..."
                        name="q" id="example-search-input" value="{{ request()->input('q') }}">
                    <select class="form-control select2" style="width: 20px;" id="searchby" name="searchby">
                        <option value="0" {{ request()->input('searchby') == 0 ? 'selected' : '' }}>Search By</option>
                        <option value="1" {{ request()->input('searchby') == 1 ? 'selected' : '' }}>Area</option>
                        <option value="2" {{ request()->input('searchby') == 2 ? 'selected' : '' }}>PIC</option>
                        <option value="3" {{ request()->input('searchby') == 3 ? 'selected' : '' }}>Nama Alat</option>
                        <option value="4" {{ request()->input('searchby') == 4 ? 'selected' : '' }}>List Item Check
                        </option>
                        <option value="5" {{ request()->input('searchby') == 5 ? 'selected' : '' }}>Status( Ya/Tidak )
                        </option>
                        <option value="6" {{ request()->input('searchby') == 6 ? 'selected' : '' }}>Keterangan</option>
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
                    <a onclick="window.location.href='{{ route('ShowFormCompliance') }}'"
                        class="btn btn-primary text-white" style="width: 200px; text-align: center; margin-right: 10px;">
                        <i class="fas fa-plus"></i> Create Compliance
                    </a>
                    <a title="Tambah Scar" type="button" class="btn btn-primary text-white"
                        style="width: 200px; text-align: center; margin-right: 10px;" data-bs-toggle="modal"
                        data-bs-target="#export">
                        <i class='bx bxs-file-export'></i> Export
                    </a>
                    <a title="Tambah Scar" type="button" class="btn btn-primary text-white"
                        style="width: 200px; text-align: center; margin-right: 10px;" data-bs-toggle="modal"
                        data-bs-target="#kesimpulan">
                        Kesimpulan
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

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th class="text-center align-middle"
                            style="background-color:#bbbbbb; position: sticky;  top: 0; left: 0; z-index: 999; min-width:50px;"
                            rowspan="2">No</th>
                        <th class="text-center align-middle"
                            style="background-color:#bbbbbb; position: sticky;  top: 0; left: 50px; z-index: 999;  min-width:150px;"
                            rowspan="2">Area</th>
                        <th class="text-center align-middle"
                            style="background-color:#bbbbbb; position: sticky;  top: 0; left: 200px; z-index: 999; min-width: 100px;"
                            rowspan="2">PIC</th>
                        <th class="text-center align-middle"
                            style="background-color:#bbbbbb; position: sticky;  top: 0; left: 300px; z-index: 999; min-width: 150px;"
                            rowspan="2">Nama Alat</th>
                        <th class="text-center align-middle"
                            style="background-color:#bbbbbb; position: sticky;  top: 0; left: 450px; z-index: 999; min-width: 150px;"
                            rowspan="2">List item yang perlu di check</th>
                        <th class="text-center align-middle"
                            style="background-color:#74c3b0; position: sticky;  top: 0; width:100px;" colspan="2">Jan
                        </th>
                        <th class="text-center align-middle"
                            style="background-color:#7fcfd1; position: sticky;  top: 0; width:40px;" colspan="2">Feb
                        </th>
                        <th class="text-center align-middle"
                            style="background-color:#fed2c7; position: sticky;  top: 0; width:40px;" colspan="2">Mar
                        </th>
                        <th class="text-center align-middle"
                            style="background-color:#b9e3d7; position: sticky;  top: 0; width:40px;" colspan="2">Apr
                        </th>
                        <th class="text-center align-middle"
                            style="background-color:#abe1e4; position: sticky;  top: 0; width:40px;" colspan="2">Mei
                        </th>
                        <th class="text-center align-middle"
                            style="background-color:#ffced2; position: sticky;  top: 0; width:40px;" colspan="2">Jun
                        </th>
                        <th class="text-center align-middle"
                            style="background-color:#c6e9e3; position: sticky;  top: 0; width:40px;" colspan="2">Jul
                        </th>
                        <th class="text-center align-middle"
                            style="background-color:#c5eff1; position: sticky;  top: 0; width:40px;" colspan="2">Aug
                        </th>
                        <th class="text-center align-middle"
                            style="background-color:#ffbec4; position: sticky;  top: 0; width:40px;" colspan="2">Sep
                        </th>
                        <th class="text-center align-middle"
                            style="background-color:#e2ede9; position: sticky;  top: 0; width:40px;" colspan="2">Oct
                        </th>
                        <th class="text-center align-middle"
                            style="background-color:#d8aed4; position: sticky;  top: 0; width:40px;" colspan="2">Nov
                        </th>
                        <th class="text-center align-middle"
                            style="background-color:#ffa2ac; position: sticky;  top: 0; width:40px;" colspan="2">Dec
                        </th>
                        <th class="text-center align-middle"
                            style="background-color:#bbbbbb; position: sticky;  top: 0; width:40px;" rowspan="2">
                            Keterangan</th>
                        <th class="text-center align-middle"
                            style="background-color:#bbbbbb; position: sticky;  top: 0; width:40px;" rowspan="2">Action
                        </th>
                    </tr>
                    <tr>
                        <th class="text-center align-middle "
                            style="background-color:#74c3b0; position: sticky;  top: 33px; width:40px;">Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#74c3b0; position: sticky;  top: 33px; width:40px;">Tidak Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#7fcfd1; position: sticky;  top: 33px; width:40px;">Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#7fcfd1; position: sticky;  top: 33px; width:40px;">Tidak Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#fed2c7; position: sticky;  top: 33px; width:40px;">Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#fed2c7; position: sticky;  top: 33px; width:40px;">Tidak Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#b9e3d7; position: sticky;  top: 33px; width:40px;">Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#b9e3d7; position: sticky;  top: 33px; width:40px;">Tidak Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#abe1e4; position: sticky;  top: 33px; width:40px;">Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#abe1e4; position: sticky;  top: 33px; width:40px;">Tidak Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#ffced2; position: sticky;  top: 33px; width:40px;">Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#ffced2; position: sticky;  top: 33px; width:40px;">Tidak Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#c6e9e3; position: sticky;  top: 33px; width:40px;">Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#c6e9e3; position: sticky;  top: 33px; width:40px;">Tidak Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#c5eff1; position: sticky;  top: 33px; width:40px;">Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#c5eff1; position: sticky;  top: 33px; width:40px;">Tidak Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#ffbec4; position: sticky;  top: 33px; width:40px;">Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#ffbec4; position: sticky;  top: 33px; width:40px;">Tidak Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#e2ede9; position: sticky;  top: 33px; width:40px;">Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#e2ede9; position: sticky;  top: 33px; width:40px;">Tidak Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#d8aed4; position: sticky;  top: 33px; width:40px;">Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#d8aed4; position: sticky;  top: 33px; width:40px;">Tidak Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#ffa2ac; position: sticky;  top: 33px; width:40px;">Sesuai</th>
                        <th class="text-center align-middle "
                            style="background-color:#ffa2ac; position: sticky;  top: 33px; width:40px;">Tidak Sesuai</th>
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
                                    'pid' => $d->id_compliance,
                                    'user_id' => $d->user_id,
                                    'area' => $d->area,
                                    'pic' => $d->pic,
                                    'nama_alat' => $d->nama_alat,
                                    'list_item_check' => $d->list_item_check,
                                    'status1' => $d->status1,
                                    'status2' => $d->status2,
                                    'status3' => $d->status3,
                                    'status4' => $d->status4,
                                    'status5' => $d->status5,
                                    'status6' => $d->status6,
                                    'status7' => $d->status7,
                                    'status8' => $d->status8,
                                    'status9' => $d->status9,
                                    'status10' => $d->status10,
                                    'status11' => $d->status11,
                                    'status12' => $d->status12,
                                    'keterangan' => $d->keterangan,
                                    'created_at' => $d->created_at,
                                ];
                            @endphp
                            <tr>
                                <td class="text-center align-middle"
                                    style=" position: sticky;  left: 0; background-color: #f2f2f2;">{{ $startNumber++ }}
                                </td>
                                <td
                                    style="min-width: 150px; position: sticky;  left: 50px; background-color: #f2f2f2;"class="text-center align-middle ">
                                    {{ $data['area'] }}
                                </td>
                                <td
                                    style="min-width: 100px; position: sticky;  left: 200px; background-color: #f2f2f2;"class="text-center align-middle ">
                                    {{ $data['pic'] }}
                                </td>
                                <td style="min-width: 150px; position: sticky;  left: 300px; background-color: #f2f2f2;"
                                    class="text-center align-middle">
                                    {{ $data['nama_alat'] }}
                                </td>
                                <td
                                    style="min-width: 150px; position: sticky;  left: 450px; background-color: #f2f2f2;"class="align-middle ">
                                    {{ $data['list_item_check'] }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status1'] === 'Ya'
                                        ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>'
                                        : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status1'] === 'Tidak' ? '❌' : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status2'] === 'Ya'
                                        ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>'
                                        : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status2'] === 'Tidak' ? '❌' : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status3'] === 'Ya'
                                        ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>'
                                        : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status3'] === 'Tidak' ? '❌' : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status4'] === 'Ya'
                                        ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>'
                                        : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status4'] === 'Tidak' ? '❌' : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status5'] === 'Ya'
                                        ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>'
                                        : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status5'] === 'Tidak' ? '❌' : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status6'] === 'Ya'
                                        ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>'
                                        : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status6'] === 'Tidak' ? '❌' : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status7'] === 'Ya'
                                        ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>'
                                        : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status7'] === 'Tidak' ? '❌' : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status8'] === 'Ya'
                                        ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>'
                                        : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status8'] === 'Tidak' ? '❌' : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status9'] === 'Ya'
                                        ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>'
                                        : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status9'] === 'Tidak' ? '❌' : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status10'] === 'Ya'
                                        ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>'
                                        : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status10'] === 'Tidak' ? '❌' : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status11'] === 'Ya'
                                        ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>'
                                        : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status11'] === 'Tidak' ? '❌' : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status12'] === 'Ya'
                                        ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>'
                                        : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {!! $data['status12'] === 'Tidak' ? '❌' : ' ' !!}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    <a title="Remarks" type="button" class="btn btn-secondary btn-sm text-white"
                                        data-bs-toggle="modal"
                                        data-bs-target="#remarks{{ $d->id_compliance }}">Remarks</a>
                                </td>
                                <td style="min-width: 100px;"class="text-center align-middle ">
                                    <a title="Edit Data" type="button" class="btn btn-secondary btn-sm text-white"
                                        data-bs-toggle="modal" data-bs-target="#update_data{{ $d->id_compliance }}"><i
                                            class="fas fa-edit"></i></a>
                                    <a title="Delete Data" type="button" class="btn btn-danger btn-sm text-white"
                                        data-bs-toggle="modal" data-bs-target="#delete{{ $d->id_compliance }}"><i
                                            class="fas fa-trash"></i></a>
                                </td>

                            </tr>
                            <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true" id="remarks{{ $d->id_compliance }}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Action</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @if (count($products) > 0)
                                                <div>
                                                    <p><b>Remarks :</b> {{ $data['keterangan'] }}</p>
                                                </div>
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
        id="delete{{ $d->id_compliance }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Action</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (count($products) > 0)
                        <form role="form" id="delete" action="{{ route('delete_compliance') }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id_delete" id="id_delete" value="{{ $data['pid'] }}">
                            <div>
                                <p>Anda yakin ingin menghapus data ?</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default"
                                    data-dismiss="modal">{{ __('Batal') }}</button>
                                <button id="button-save" type="submit"
                                    class="btn btn-danger text-white">{{ __('Ya, hapus') }}</button>
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
        id="update_data{{ $d->id_compliance }}">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (count($products) > 0)
                        <form role="form" id="approve-form" action="{{ route('update_compliance') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="id_compliance" name="id_compliance" value="{{ $data['pid'] }}">
                            <div class="form-group row">
                                <label for="area" class="col-sm-4 col-form-label">{{ __('Area') }}</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="area" name="area"
                                        value="{{ $data['area'] }}">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="pic" class="col-sm-4 col-form-label">{{ __('PIC') }}</label>
                                <div class="col-sm-8">
                                    <select class="form-control " style="width: 100%;" id="pic" name="pic">
                                        <option value="" disabled selected>PIC</option>
                                        <option value="Rifan" {{ $data['pic'] == 'Rifan' ? 'selected' : '' }}>Rifan
                                        </option>
                                        <option value="Hesti" {{ $data['pic'] == 'Hesti' ? 'selected' : '' }}>Hesti
                                        </option>
                                        <option value="Alfi" {{ $data['pic'] == 'Alfi' ? 'selected' : '' }}>Alfi
                                        </option>
                                        <option value="Falma" {{ $data['pic'] == 'Falma' ? 'selected' : '' }}>Falma
                                        </option>
                                        <option value="Fahmi" {{ $data['pic'] == 'Fahmi' ? 'selected' : '' }}>Fahmi
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="nama_alat" class="col-sm-4 col-form-label">{{ __('Nama Alat') }}</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_alat" name="nama_alat"
                                        value="{{ $data['nama_alat'] }}">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="list_item_check"
                                    class="col-sm-4 col-form-label">{{ __('List Item Check') }}</label>
                                <div class="col-sm-8">
                                    <textarea type="text" class="form-control" id="list_item_check" name="list_item_check"
                                        value="{{ $data['list_item_check'] }}">{{ $data['list_item_check'] }}</textarea>
                                </div>
                            </div>
                            <hr>
                            <h6 class="text-end"><a title="Bulan" type="button"
                                    class="btn btn-primary btn-sm text-white"><b>January</b></a></h6>
                            <div class="form-group row">
                                <label for="contact_person"
                                    class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                <div class="col-sm-3">
                                    <input class="form-check-input" type="radio" name="status1" id="addFieldBtnPM"
                                        value="Ya" {{ $data['status1'] === 'Ya' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                </div>
                                <div class=" col-sm-3">
                                    <input class="form-check-input" type="radio" name="status1" id="addFieldBtnRM"
                                        value="Tidak" {{ $data['status1'] === 'Tidak' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                            </div>
                            <hr>
                            <h6 class="text-end"><a title="Bulan" type="button"
                                    class="btn btn-primary btn-sm text-white"><b>Febuary</b></a></h6>
                            <div class="form-group row">
                                <label for="contact_person"
                                    class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                <div class="col-sm-3">
                                    <input class="form-check-input" type="radio" name="status2" id="addFieldBtnPM"
                                        value="Ya" {{ $data['status2'] === 'Ya' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                </div>
                                <div class=" col-sm-3">
                                    <input class="form-check-input" type="radio" name="status2" id="addFieldBtnRM"
                                        value="Tidak" {{ $data['status2'] === 'Tidak' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                            </div>
                            <hr>
                            <h6 class="text-end"><a title="Bulan" type="button"
                                    class="btn btn-primary btn-sm text-white"><b>Maret</b></a></h6>
                            <div class="form-group row">
                                <label for="contact_person"
                                    class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                <div class="col-sm-3">
                                    <input class="form-check-input" type="radio" name="status3" id="addFieldBtnPM"
                                        value="Ya" {{ $data['status3'] === 'Ya' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                </div>
                                <div class=" col-sm-3">
                                    <input class="form-check-input" type="radio" name="status3" id="addFieldBtnRM"
                                        value="Tidak" {{ $data['status3'] === 'Tidak' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                            </div>
                            <hr>
                            <h6 class="text-end"><a title="Bulan" type="button"
                                    class="btn btn-primary btn-sm text-white"><b>April</b></a></h6>
                            <div class="form-group row">
                                <label for="contact_person"
                                    class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                <div class="col-sm-3">
                                    <input class="form-check-input" type="radio" name="status4" id="addFieldBtnPM"
                                        value="Ya" {{ $data['status4'] === 'Ya' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                </div>
                                <div class=" col-sm-3">
                                    <input class="form-check-input" type="radio" name="status4" id="addFieldBtnRM"
                                        value="Tidak" {{ $data['status4'] === 'Tidak' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                            </div>
                            <hr>
                            <h6 class="text-end"><a title="Bulan" type="button"
                                    class="btn btn-primary btn-sm text-white"><b>Mei</b></a></h6>
                            <div class="form-group row">
                                <label for="contact_person"
                                    class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                <div class="col-sm-3">
                                    <input class="form-check-input" type="radio" name="status5" id="addFieldBtnPM"
                                        value="Ya" {{ $data['status5'] === 'Ya' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                </div>
                                <div class=" col-sm-3">
                                    <input class="form-check-input" type="radio" name="status5" id="addFieldBtnRM"
                                        value="Tidak" {{ $data['status5'] === 'Tidak' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                            </div>
                            <hr>
                            <h6 class="text-end"><a title="Bulan" type="button"
                                    class="btn btn-primary btn-sm text-white"><b>Juni</b></a></h6>
                            <div class="form-group row">
                                <label for="contact_person"
                                    class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                <div class="col-sm-3">
                                    <input class="form-check-input" type="radio" name="status6" id="addFieldBtnPM"
                                        value="Ya" {{ $data['status6'] === 'Ya' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                </div>
                                <div class=" col-sm-3">
                                    <input class="form-check-input" type="radio" name="status6" id="addFieldBtnRM"
                                        value="Tidak" {{ $data['status6'] === 'Tidak' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                            </div>
                            <hr>
                            <h6 class="text-end"><a title="Bulan" type="button"
                                    class="btn btn-primary btn-sm text-white"><b>July</b></a></h6>
                            <div class="form-group row">
                                <label for="contact_person"
                                    class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                <div class="col-sm-3">
                                    <input class="form-check-input" type="radio" name="status7" id="addFieldBtnPM"
                                        value="Ya" {{ $data['status7'] === 'Ya' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                </div>
                                <div class=" col-sm-3">
                                    <input class="form-check-input" type="radio" name="status7" id="addFieldBtnRM"
                                        value="Tidak" {{ $data['status7'] === 'Tidak' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                            </div>
                            <hr>
                            <h6 class="text-end"><a title="Bulan" type="button"
                                    class="btn btn-primary btn-sm text-white"><b>Agustus</b></a></h6>
                            <div class="form-group row">
                                <label for="contact_person"
                                    class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                <div class="col-sm-3">
                                    <input class="form-check-input" type="radio" name="status8" id="addFieldBtnPM"
                                        value="Ya" {{ $data['status8'] === 'Ya' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                </div>
                                <div class=" col-sm-3">
                                    <input class="form-check-input" type="radio" name="status8" id="addFieldBtnRM"
                                        value="Tidak" {{ $data['status8'] === 'Tidak' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                            </div>
                            <hr>
                            <h6 class="text-end"><a title="Bulan" type="button"
                                    class="btn btn-primary btn-sm text-white"><b>September</b></a></h6>
                            <div class="form-group row">
                                <label for="contact_person"
                                    class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                <div class="col-sm-3">
                                    <input class="form-check-input" type="radio" name="status9" id="addFieldBtnPM"
                                        value="Ya" {{ $data['status9'] === 'Ya' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                </div>
                                <div class=" col-sm-3">
                                    <input class="form-check-input" type="radio" name="status9" id="addFieldBtnRM"
                                        value="Tidak" {{ $data['status9'] === 'Tidak' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                            </div>
                            <hr>
                            <h6 class="text-end"><a title="Bulan" type="button"
                                    class="btn btn-primary btn-sm text-white"><b>Oktober</b></a></h6>
                            <div class="form-group row">
                                <label for="contact_person"
                                    class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                <div class="col-sm-3">
                                    <input class="form-check-input" type="radio" name="status10" id="addFieldBtnPM"
                                        value="Ya" {{ $data['status10'] === 'Ya' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                </div>
                                <div class=" col-sm-3">
                                    <input class="form-check-input" type="radio" name="status10" id="addFieldBtnRM"
                                        value="Tidak" {{ $data['status10'] === 'Tidak' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                            </div>
                            <hr>
                            <h6 class="text-end"><a title="Bulan" type="button"
                                    class="btn btn-primary btn-sm text-white"><b>November</b></a></h6>
                            <div class="form-group row">
                                <label for="contact_person"
                                    class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                <div class="col-sm-3">
                                    <input class="form-check-input" type="radio" name="status11" id="addFieldBtnPM"
                                        value="Ya" {{ $data['status11'] === 'Ya' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                </div>
                                <div class=" col-sm-3">
                                    <input class="form-check-input" type="radio" name="status11" id="addFieldBtnRM"
                                        value="Tidak" {{ $data['status11'] === 'Tidak' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                            </div>
                            <hr>
                            <h6 class="text-end"><a title="Bulan" type="button"
                                    class="btn btn-primary btn-sm text-white"><b>Desember</b></a></h6>
                            <div class="form-group row">
                                <label for="contact_person"
                                    class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                <div class="col-sm-3">
                                    <input class="form-check-input" type="radio" name="status12" id="addFieldBtnPM"
                                        value="Ya" {{ $data['status12'] === 'Ya' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                </div>
                                <div class=" col-sm-3">
                                    <input class="form-check-input" type="radio" name="status12" id="addFieldBtnRM"
                                        value="Tidak" {{ $data['status12'] === 'Tidak' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="keterangan" class="col-sm-4 col-form-label">{{ __('Keterangan') }}</label>
                                <div class="col-sm-8">
                                    <textarea type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $data['keterangan'] }}">{{ $data['keterangan'] }}</textarea>
                                </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-end">
                                <button id="button-save" type="submit"
                                    class="btn btn-primary text-white">{{ __('Ya, Update') }}</button>
                            </div>
                        </form>
                    @else
                        <tr class="text-center">
                            <td colspan="14">{{ __('No data.') }}</td>
                        </tr>
                    @endif
                </div>
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
    <div class="modal fade" id="kesimpulan">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="modal-title" class="modal-title">{{ __('Kesimpulan') }}</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th>Bulan</th>
                                <th>Total Compliance</th>
                                <th>% Compliance</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @for ($i = 1; $i <= 12; $i++)
                                <tr>
                                    <td class="align-middle">{{ DateTime::createFromFormat('!m', $i)->format('F') }}</td>
                                    <td class="align-middle text-center">{{ $totalYaArray["totalYa{$i}"] }}</td>
                                    <td class="align-middle text-center">{{ $percentageArray["percentage{$i}"] }}%</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                    <h1 class="card-title mt-5">Keterangan</h1>
                    <table>
                        <tr>
                            <td>✔️</td>
                            <td> : </td>
                            <td>Memenuhi</td>
                        </tr>
                        <tr>
                            <td>❌</td>
                            <td> : </td>
                            <td>Tidak Memenuhi</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
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
                    {{-- <form role="form" id="approve-form" action="{{ route('export_lka') }}" method="post"> --}}
                    @csrf
                    <input type="hidden" name="jenis_lka" id="jenis_lka" value="Finish Good">
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
