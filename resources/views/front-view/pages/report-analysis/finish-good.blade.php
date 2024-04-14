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
                        <option value="2" {{ request()->input('searchby') == 2 ? 'selected' : '' }}>Kode Racikan
                        </option>
                        <option value="3" {{ request()->input('searchby') == 3 ? 'selected' : '' }}>No Bets</option>
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
                    <a onclick="window.location.href='{{ route('ShowFormReportAnalysis', ['jenis_report' => 'Finish Good']) }}'"
                        class="btn btn-primary text-white" style="width: 200px; text-align: center; margin-right: 10px;">
                        <i class="fas fa-plus"></i> Create Report
                    </a>
                    <a title="Export" type="button" class="btn btn-primary text-white"
                        style="width: 200px; text-align: center; margin-right: 10px;" data-bs-toggle="modal"
                        data-bs-target="#export">
                        <i class='bx bxs-file-export'></i> Export
                    </a>
                    <a title="Import" type="button" class="btn btn-primary text-white"
                            style="width: 200px; text-align: center; margin-right: 10px;" data-bs-toggle="modal"
                            data-bs-target="#import">
                            <i class='bx bxs-file-export'></i> Import
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
                        <th>Created At</th>
                        <th>No Request Analysis</th>
                        <th>No Report Analysis</th>
                        <th>Nama Item</th>
                        <th>Kategori</th>
                        <th>PIC</th>
                        <th>Kode Racikan</th>
                        <th>No Bets</th>
                        <th>Bulan</th>
                        <th>Parameter</th>
                        <th>Storage</th>
                        <th>Tgl Masuk</th>
                        <th>Tgl Analisa</th>
                        <th>Tgl Estimasi Selasai</th>
                        <th>Tgl Selesai Report</th>
                        <th>Tgl Selesai Analysis</th>
                        <th>On Time Analysis</th>
                        <th>Nama Analis</th>
                        <th>File</th>
                        <th>Status</th>
                        <th>Lead Time</th>
                        <th>Status Lead Time</th>
                        <th>Keterangan</th>
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
                                    'pid' => $d->id_report,
                                    'user_id' => $d->user_id,
                                    'jenis_report' => $d->jenis_report,
                                    'no_permintaan_analisa' => $d->no_permintaan_analisa,
                                    'no_laporan_analisa' => $d->no_laporan_analisa,
                                    'nama_item' => $d->nama_item,
                                    'category' => $d->category,
                                    'pic' => $d->pic,
                                    'kode_racikan' => $d->kode_racikan,
                                    'no_bets' => $d->no_bets,
                                    'bulan' => $d->bulan,
                                    'supplier' => $d->supplier,
                                    'parameter' => $d->parameter,
                                    'storage' => $d->storage,
                                    'tgl_masuk' => $d->tgl_masuk,
                                    'tgl_analisa' => $d->tgl_analisa,
                                    'tgl_est' => $d->tgl_est,
                                    'tgl_selesai' => $d->tgl_selesai,
                                    'ot_analysis' => $d->ot_analysis,
                                    'nama_analis' => $d->nama_analis,
                                    'file_upload' => $d->file_upload,
                                    'status' => $d->status,
                                    'keterangan' => $d->keterangan,
                                    'created_at' => $d->created_at,
                                    'tgl_selesai_report' => $d->tgl_selesai_report,
                                    'status_lt' => $d->status_lt,
                                ];
                            @endphp
                            <tr>
                                <td class="text-center align-middle">{{ $startNumber++ }}</td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ Carbon\Carbon::parse($data['created_at'])->translatedFormat('j M Y') }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ $data['no_permintaan_analisa'] }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ $data['no_laporan_analisa'] }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ $data['nama_item'] }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ $data['category'] }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ $data['pic'] }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ $data['supplier'] }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ $data['kode_racikan'] }}
                                </td>
                                <td style="min-width: 100px" class="text-center align-middle">
                                    {{ $data['no_bets'] }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ $data['bulan'] }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ $data['parameter'] }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ $data['storage'] }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    @if (isset($data['tgl_masuk']))
                                        {{ Carbon\Carbon::parse($data['tgl_masuk'])->translatedFormat('d M Y') }}
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    @if (isset($data['tgl_analisa']))
                                        {{ Carbon\Carbon::parse($data['tgl_analisa'])->translatedFormat('d M Y') }}
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    @if (isset($data['tgl_est']))
                                        {{ Carbon\Carbon::parse($data['tgl_est'])->translatedFormat('d M Y') }}
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    @if (isset($data['tgl_selesai_report']))
                                        {{ Carbon\Carbon::parse($data['tgl_selesai_report'])->translatedFormat('d M Y') }}
                                    @else
                                        N/A
                                    @endif
                                </td>

                                <td style="min-width: 100px"class="text-center align-middle ">
                                    @if (isset($data['tgl_selesai']))
                                        {{ Carbon\Carbon::parse($data['tgl_selesai'])->translatedFormat('d M Y') }}
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    @php
                                        $tgl_analisa = isset($data['tgl_analisa'])
                                            ? Carbon\Carbon::parse($data['tgl_analisa'])
                                            : null;
                                        $tgl_selesai = isset($data['tgl_selesai'])
                                            ? Carbon\Carbon::parse($data['tgl_selesai'])
                                            : null;
                                    @endphp

                                    @if ($tgl_analisa && $tgl_selesai)
                                        @php
                                            $leadtime = $tgl_analisa->diffInDays($tgl_selesai);
                                        @endphp
                                        {{ $leadtime }} Hari
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ $data['nama_analis'] }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    <a title="File" class="badge rounded-pill-lg text-white bg-primary"
                                        href="{{ asset('storage/' . $data['file_upload']) }}" target="_blank"> File</a>
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    @if ($data['status'] == 'MS')
                                        <a title="Priority" class="badge rounded-pill-lg text-white bg-danger">
                                            {{ $data['status'] }}</a>
                                    @elseif ($data['status'] == 'On Progress')
                                        <a title="Priority" class="badge rounded-pill-lg text-white bg-warning">
                                            {{ $data['status'] }}</a>
                                    @else
                                        <a title="Priority" class="badge rounded-pill-lg text-white bg-primary">
                                            {{ $data['status'] }}</a>
                                    @endif
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    @php
                                        $tgl_selesai_report = isset($data['tgl_selesai_report'])
                                            ? Carbon\Carbon::parse($data['tgl_selesai_report'])
                                            : null;
                                        $tgl_masuk = isset($data['tgl_masuk'])
                                            ? Carbon\Carbon::parse($data['tgl_masuk'])
                                            : null;
                                    @endphp

                                    @if ($tgl_selesai_report && $tgl_masuk)
                                        @php
                                            $leadtime1 = $tgl_selesai_report->diffInDays($tgl_masuk);
                                        @endphp
                                        {{ $leadtime1 }} Hari
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ $data['status_lt'] }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    <a title="Remarks" type="button" class="btn btn-secondary btn-sm text-white"
                                        data-bs-toggle="modal" data-bs-target="#remarks{{ $d->id_report }}">Remarks</a>
                                </td>
                                <td style="min-width: 100px;"class="text-center align-middle ">
                                    <a title="Tambah Scar" type="button" class="btn btn-secondary btn-sm text-white"
                                        data-bs-toggle="modal" data-bs-target="#update_data{{ $d->id_report }}"><i
                                            class="fas fa-edit"></i></a>
                                    <a title="Tambah Scar" type="button" class="btn btn-danger btn-sm text-white"
                                        data-bs-toggle="modal" data-bs-target="#delete{{ $d->id_report }}"><i
                                            class="fas fa-trash"></i></a>
                                </td>

                            </tr>
                            <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true" id="remarks{{ $d->id_report }}">
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
                                                    <p><b>Remarks :</b>
                                                        @if (isset($data['keterangan']))
                                                            {{ $data['keterangan'] }}
                                                        @else
                                                            N/A
                                                        @endif
                                                    </p>
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
        id="delete{{ $d->id_report }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Action</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (count($products) > 0)
                        <form role="form" id="delete" action="{{ route('delete_report') }}" method="post">
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
        id="update_data{{ $d->id_report }}">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (count($products) > 0)
                        <form role="form" id="approve-form" action="{{ route('update_report') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="id_report" name="id_report" value="{{ $data['pid'] }}">
                            <div class="form-group row">
                                <label for="nama_item" class="col-sm-4 col-form-label">{{ __('Nama Item') }}</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama_item" name="nama_item"
                                        value="{{ $data['nama_item'] }}">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="supplier" class="col-sm-4 col-form-label">{{ __('Supplier') }}</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="supplier" name="supplier"
                                        value="{{ $data['supplier'] }}">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="contact_person" class="col-sm-4 col-form-label">{{ __('Category') }}</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" style="width: 100%;" id="category"
                                        name="category">
                                        <option value="" disabled selected>Category</option>
                                        <option value="Obat" {{ $data['category'] == 'Obat' ? 'selected' : '' }}>Obat
                                        </option>
                                        <option value="Kosmetik" {{ $data['category'] == 'Kosmetik' ? 'selected' : '' }}>
                                            Kosmetik</option>
                                        <option value="Eksternal"
                                            {{ $data['category'] == 'Eksternal' ? 'selected' : '' }}>Eksternal</option>
                                        <option value="RM Alternatif"
                                            {{ $data['category'] == 'RM Alternatif' ? 'selected' : '' }}>RM Alternatif
                                        </option>
                                        <option value="New RM" {{ $data['category'] == 'New RM' ? 'selected' : '' }}>New
                                            RM</option>
                                        <option value="Efektivitas Pengawet"
                                            {{ $data['category'] == 'Efektivitas Pengawet' ? 'selected' : '' }}>Efektivitas
                                            Pengawet</option>
                                    </select>
                                    @error('category')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="pic" class="col-sm-1 col-form-label">{{ __('PIC') }}</label>
                                <div class="col-sm-3">
                                    <select class="form-control select2" style="width: 100%;" id="pic"
                                        name="pic">
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
                                    @error('category')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="kode_racikan"
                                    class="col-sm-4 col-form-label">{{ __('Kode Racikan') }}</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="kode_racikan" name="kode_racikan"
                                        value="{{ $data['kode_racikan'] }}">
                                </div>
                                <label for="no_bets" class="col-sm-1 col-form-label">{{ __('No Bets') }}</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="no_bets" name="no_bets"
                                        value="{{ $data['no_bets'] }}">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="bulan" class="col-sm-4 col-form-label">{{ __('Bulan') }}</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2" style="width: 100%;" id="bulan"
                                        name="bulan">
                                        <option value="" disabled selected>Bulan</option>
                                        <option value="In Used H-0"
                                            {{ $data['bulan'] == 'In Used H-0' ? 'selected' : '' }}>In Used H-0</option>
                                        <option value="In Used H-3"
                                            {{ $data['bulan'] == 'In Used H-3' ? 'selected' : '' }}>In Used H-3</option>
                                        <option value="In Used H-7"
                                            {{ $data['bulan'] == 'In Used H-7' ? 'selected' : '' }}>In Used H-7</option>
                                        <option value="In Used H-14"
                                            {{ $data['bulan'] == 'In Used H-14' ? 'selected' : '' }}>In Used H-14</option>
                                        <option value="In Used H-21"
                                            {{ $data['bulan'] == 'In Used H-21' ? 'selected' : '' }}>In Used H-21</option>
                                        <option value="In Used H-28"
                                            {{ $data['bulan'] == 'In Used H-28' ? 'selected' : '' }}>In Used H-28</option>
                                        <option value="In Used H-35"
                                            {{ $data['bulan'] == 'In Used H-35' ? 'selected' : '' }}>In Used H-35</option>
                                        <option value="In Used H-49"
                                            {{ $data['bulan'] == 'In Used H-49' ? 'selected' : '' }}>In Used H-49</option>
                                        <option value="In Used H-63"
                                            {{ $data['bulan'] == 'In Used H-63' ? 'selected' : '' }}>In Used H-63</option>
                                        <option value="B-0" {{ $data['bulan'] == 'B-0' ? 'selected' : '' }}>B-0
                                        </option>
                                        <option value="B-1" {{ $data['bulan'] == 'B-1' ? 'selected' : '' }}>B-1
                                        </option>
                                        <option value="B-2" {{ $data['bulan'] == 'B-2' ? 'selected' : '' }}>B-2
                                        </option>
                                        <option value="B-3" {{ $data['bulan'] == 'B-3' ? 'selected' : '' }}>B-3
                                        </option>
                                        <option value="B-4" {{ $data['bulan'] == 'B-4' ? 'selected' : '' }}>B-4
                                        </option>
                                        <option value="B-5" {{ $data['bulan'] == 'B-5' ? 'selected' : '' }}>B-5
                                        </option>
                                        <option value="B-6" {{ $data['bulan'] == 'B-6' ? 'selected' : '' }}>B-6
                                        </option>
                                        <option value="B-9" {{ $data['bulan'] == 'B-9' ? 'selected' : '' }}>B-9
                                        </option>
                                        <option value="B-12" {{ $data['bulan'] == 'B-12' ? 'selected' : '' }}>B-12
                                        </option>
                                        <option value="B-18" {{ $data['bulan'] == 'B-18' ? 'selected' : '' }}>B-18
                                        </option>
                                        <option value="B-24" {{ $data['bulan'] == 'B-24' ? 'selected' : '' }}>B-24
                                        </option>
                                        <option value="B-36" {{ $data['bulan'] == 'B-36' ? 'selected' : '' }}>B-36
                                        </option>
                                    </select>
                                </div>
                                @error('bulan')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="Parameter" class="col-sm-4 col-form-label">Parameter</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="parameter" name="parameter"
                                        value="{{ $data['parameter'] }}">
                                </div>
                                <label for="storage" class="col-sm-1 col-form-label">Storage</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="storage" name="storage"
                                        value="{{ $data['storage'] }}">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="tgl_masuk" class="col-sm-4 col-form-label">{{ __('Tgl Masuk') }}</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk"
                                        value="{{ $data['tgl_masuk'] }}">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="tgl_analisa" class="col-sm-4 col-form-label">{{ __('Tgl Analisa') }}</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="tgl_analisa" name="tgl_analisa"
                                        value="{{ $data['tgl_analisa'] }}">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="tgl_est"
                                    class="col-sm-4 col-form-label">{{ __('Tgl Estimasi Selesai') }}</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="tgl_est" name="tgl_est"
                                        value="{{ $data['tgl_est'] }}">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="tgl_selesai"
                                    class="col-sm-4 col-form-label">{{ __('Tgl Selesai Analisa') }}</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai"
                                        value="{{ $data['tgl_selesai'] }}">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="tgl_selesai_report"
                                    class="col-sm-4 col-form-label">{{ __('Tgl Selesai Report') }}</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="tgl_selesai_report"
                                        name="tgl_selesai_report" value="{{ $data['tgl_selesai_report'] }}">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="status_lt"
                                    class="col-sm-4 col-form-label">{{ __('Status Lead Time') }}</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2" style="width: 100%;" id="status_lt"
                                        name="status_lt">
                                        <option value="" disabled selected>Select Option</option>
                                        <option value="Achived" {{ $data['status_lt'] == 'Achived' ? 'selected' : '' }}>
                                            Achived</option>
                                        <option value="Not Reached"
                                            {{ $data['status_lt'] == 'Not Reached' ? 'selected' : '' }}>Not Reached
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="nama_analis" class="col-sm-4 col-form-label">{{ __('Nama Analis') }}</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2" style="width: 100%;" id="nama_analis"
                                        name="nama_analis" value="{{ $data['nama_analis'] }}">
                                        <option value="" disabled selected>Select Analis</option>
                                        <option value="Shiddiq"
                                            {{ $data['nama_analis'] == 'Shiddiq' ? 'selected' : '' }}>Shiddiq</option>
                                        <option value="Dimas" {{ $data['nama_analis'] == 'Dimas' ? 'selected' : '' }}>
                                            Dimas</option>
                                        <option value="Wahyu" {{ $data['nama_analis'] == 'Wahyu' ? 'selected' : '' }}>
                                            Wahyu</option>
                                        <option value="Daffa" {{ $data['nama_analis'] == 'Daffa' ? 'selected' : '' }}>
                                            Daffa</option>
                                        <option value="Luthfi" {{ $data['nama_analis'] == 'Luthfi' ? 'selected' : '' }}>
                                            Luthfi</option>
                                        <option value="Tiwi" {{ $data['nama_analis'] == 'Tiwi' ? 'selected' : '' }}>
                                            Tiwi</option>
                                        <option value="Rica" {{ $data['nama_analis'] == 'Rica' ? 'selected' : '' }}>
                                            Rica</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="file_upload" class="col-sm-4 col-form-label">{{ __('File') }}</label>
                                <div class="col-sm-8">
                                    @if ($data['file_upload'])
                                        <p>File yang sudah diunggah: <a
                                                href="{{ asset('storage/' . $data['file_upload']) }}"
                                                target="_blank">Lihat Gambar</a>
                                    @endif
                                    <input type="file" class="form-control" id="file_upload" name="file_upload">
                                    @error('file_upload')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <br>
                            <div class="form-group row">
                                <label for="status" class="col-sm-4 col-form-label">{{ __('Status') }}</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2" style="width: 100%;" id="status"
                                        name="status" value="{{ $data['status'] }}">
                                        <option value="" disabled selected>Status</option>
                                        <option value="MS" {{ $data['status'] == 'MS' ? 'selected' : '' }}>MS
                                        </option>
                                        <option value="TMS" {{ $data['status'] == 'TMS' ? 'selected' : '' }}>TMS
                                        </option>
                                        <option value="On Progress"
                                            {{ $data['status'] == 'On Progress' ? 'selected' : '' }}>On Progress</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="keterangan" class="col-sm-4 col-form-label">{{ __('Keterangan') }}</label>
                                <div class="col-sm-8">
                                    <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan Keterangan"
                                        value="{{ $data['keterangan'] }}">{{ $data['keterangan'] }}</textarea>
                                    @error('keterangan')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('logbook_fg') }}" type="button"
                                    class="btn btn-default mr-3">{{ __('Batal') }} </a>
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
    <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Import Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>PILIH FILE</label>
                            <input type="file" name="file" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">TUTUP</button>
                        <button type="submit" class="btn btn-primary text-white">Import</button>
                    </div>
                </form>
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
