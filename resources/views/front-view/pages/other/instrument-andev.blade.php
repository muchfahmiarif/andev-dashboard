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
      <span class="text-muted fw-light">Tables /</span> Performance Instrument Andev
    </h4>
  </div>
  
  <div class="col-md-7">
    <form method="GET" action="{{ route('logbook_instrument') }}">
        <div class="input-group col-2 mx-auto">
            <input class="form-control py-2 border-right-0 border" type="search" placeholder="Type something..." name="q" id="example-search-input" value="{{ request()->input('q') }}">
            <select class="form-control select2" style="width: 20px;" id="searchby" name="searchby">
                <option value="0" {{ request()->input('searchby') == 0 ? 'selected' : '' }}>Search By</option>
                <option value="1" {{ request()->input('searchby') == 1 ? 'selected' : '' }}>Area</option>
                <option value="2" {{ request()->input('searchby') == 2 ? 'selected' : '' }}>PIC</option>
                <option value="3" {{ request()->input('searchby') == 3 ? 'selected' : '' }}>Nama Alat</option>
                <option value="4" {{ request()->input('searchby') == 4 ? 'selected' : '' }}>List Item Check</option>
                <option value="5" {{ request()->input('searchby') == 5 ? 'selected' : '' }}>Status( Ya/Tidak )</option>
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
                <a onclick="window.location.href='{{ route('ShowFormInstrument') }}'" class="btn btn-primary text-white" style="width: 200px; text-align: center; margin-right: 10px;">
                    <i class="fas fa-plus"></i> Create Instrument
                </a>
                <a title="Tambah Scar" type="button"  class="btn btn-primary text-white" style="width: 200px; text-align: center; margin-right: 10px;" data-bs-toggle="modal" data-bs-target="#export">
                    <i class='bx bxs-file-export'></i> Export
                </a>
                <a title="Tambah Scar" type="button"  class="btn btn-primary text-white" style="width: 200px; text-align: center; margin-right: 10px;" data-bs-toggle="modal" data-bs-target="#kesimpulan">
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
                        <input type="datetime-local" class="form-control" name="fromDate" value="{{ Request::get('fromDate') }}">
                    </div>
                    <label for="date" class="col-sm-2 col-form-label">Date End</label>
                    <div class="col-sm-3">
                        <input type="datetime-local" class="form-control" name="toDate" value="{{ Request::get('toDate') }}">
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
                      <th class="text-center align-middle" style="background-color:#bbbbbb; position: sticky;  top: 0; left:0px; z-index: 999;  min-width:50px;"  rowspan="2">No</th>
                      <th class="text-center align-middle" style="background-color:#bbbbbb; position: sticky;  top: 0; left: 50px; z-index: 999;  min-width:200px;"  rowspan="2">Alat Instrument</th>
                      <th class="text-center align-middle" style="background-color:#bbbbbb; position: sticky;  top: 0; left: 250px; z-index: 999;  min-width:200px;"  rowspan="2">No. Asset</th>
                      <th class="text-center align-middle" style="background-color:#74c3b0; position: sticky;  top: 0;" colspan="2">Jan</th>
                      <th class="text-center align-middle" style="background-color:#7fcfd1; position: sticky;  top: 0;" colspan="2">Feb</th>
                      <th class="text-center align-middle" style="background-color:#fed2c7; position: sticky;  top: 0;" colspan="2">Mar</th>
                      <th class="text-center align-middle" style="background-color:#b9e3d7; position: sticky;  top: 0;" colspan="2">Apr</th>
                      <th class="text-center align-middle" style="background-color:#abe1e4; position: sticky;  top: 0;" colspan="2">Mei</th>
                      <th class="text-center align-middle" style="background-color:#ffced2; position: sticky;  top: 0;" colspan="2">Jun</th>
                      <th class="text-center align-middle" style="background-color:#c6e9e3; position: sticky;  top: 0;" colspan="2">Jul</th>
                      <th class="text-center align-middle" style="background-color:#c5eff1; position: sticky;  top: 0;" colspan="2">Aug</th>
                      <th class="text-center align-middle" style="background-color:#ffbec4; position: sticky;  top: 0;" colspan="2">Sep</th>
                      <th class="text-center align-middle" style="background-color:#e2ede9; position: sticky;  top: 0;" colspan="2">Oct</th>
                      <th class="text-center align-middle" style="background-color:#d8aed4; position: sticky;  top: 0;" colspan="2">Nov</th>
                      <th class="text-center align-middle" style="background-color:#ffa2ac; position: sticky;  top: 0;" colspan="2">Dec</th>
                      <th class="text-center align-middle" style="background-color:#bbbbbb; position: sticky;  top: 0;"  rowspan="2">Keterangan</th>
                      <th class="text-center align-middle" style="background-color:#bbbbbb; position: sticky;  top: 0;"  rowspan="2">Action</th>
                  </tr>
                  <tr>
                    <th class="text-center align-middle " style="background-color:#74c3b0; position: sticky;  top: 0; ">Kalibrasi</th>
                    <th class="text-center align-middle " style="background-color:#74c3b0; position: sticky;  top: 0;">Perform</th>
                    <th class="text-center align-middle " style="background-color:#7fcfd1; position: sticky;  top: 0;">Kalibrasi</th>
                    <th class="text-center align-middle " style="background-color:#7fcfd1; position: sticky;  top: 0;">Perform</th>
                    <th class="text-center align-middle " style="background-color:#fed2c7; position: sticky;  top: 0;">Kalibrasi</th>
                    <th class="text-center align-middle " style="background-color:#fed2c7; position: sticky;  top: 0;">Perform</th>
                    <th class="text-center align-middle " style="background-color:#b9e3d7; position: sticky;  top: 0;">Kalibrasi</th>
                    <th class="text-center align-middle " style="background-color:#b9e3d7; position: sticky;  top: 0;">Perform</th>
                    <th class="text-center align-middle " style="background-color:#abe1e4; position: sticky;  top: 0;">Kalibrasi</th>
                    <th class="text-center align-middle " style="background-color:#abe1e4; position: sticky;  top: 0;">Perform</th>
                    <th class="text-center align-middle " style="background-color:#ffced2; position: sticky;  top: 0;">Kalibrasi</th>
                    <th class="text-center align-middle " style="background-color:#ffced2; position: sticky;  top: 0;">Perform</th>
                    <th class="text-center align-middle " style="background-color:#c6e9e3; position: sticky;  top: 0;">Kalibrasi</th>
                    <th class="text-center align-middle " style="background-color:#c6e9e3; position: sticky;  top: 0;">Perform</th>
                    <th class="text-center align-middle " style="background-color:#c5eff1; position: sticky;  top: 0;">Kalibrasi</th>
                    <th class="text-center align-middle " style="background-color:#c5eff1; position: sticky;  top: 0;">Perform</th>
                    <th class="text-center align-middle " style="background-color:#ffbec4; position: sticky;  top: 0;">Kalibrasi</th>
                    <th class="text-center align-middle " style="background-color:#ffbec4; position: sticky;  top: 0;">Perform</th>
                    <th class="text-center align-middle " style="background-color:#e2ede9; position: sticky;  top: 0;">Kalibrasi</th>
                    <th class="text-center align-middle " style="background-color:#e2ede9; position: sticky;  top: 0;">Perform</th>
                    <th class="text-center align-middle " style="background-color:#d8aed4; position: sticky;  top: 0;">Kalibrasi</th>
                    <th class="text-center align-middle " style="background-color:#d8aed4; position: sticky;  top: 0;">Perform</th>
                    <th class="text-center align-middle " style="background-color:#ffa2ac; position: sticky;  top: 0;">Kalibrasi</th>
                    <th class="text-center align-middle " style="background-color:#ffa2ac; position: sticky;  top: 0;">Perform</th>
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
                                  'pid' => $d->id_instrument,
                                  'user_id' => $d->user_id,
                                  'alat_instrument' => $d->alat_instrument,
                                  'no_asset' => $d->no_asset,
                                  'kalibrasi1' => $d->kalibrasi1,
                                  'performa1' => $d->performa1,
                                  'kalibrasi2' => $d->kalibrasi2,
                                  'performa2' => $d->performa2,
                                  'kalibrasi3' => $d->kalibrasi3,
                                  'performa3' => $d->performa3,
                                  'kalibrasi4' => $d->kalibrasi4,
                                  'performa4' => $d->performa4,
                                  'kalibrasi5' => $d->kalibrasi5,
                                  'performa5' => $d->performa5,
                                  'kalibrasi6' => $d->kalibrasi6,
                                  'performa6' => $d->performa6,
                                  'kalibrasi7' => $d->kalibrasi7,
                                  'performa7' => $d->performa7,
                                  'kalibrasi8' => $d->kalibrasi8,
                                  'performa8' => $d->performa8,
                                  'kalibrasi9' => $d->kalibrasi9,
                                  'performa9' => $d->performa9,
                                  'kalibrasi10' => $d->kalibrasi10,
                                  'performa10' => $d->performa10,
                                  'kalibrasi11' => $d->kalibrasi11,
                                  'performa11' => $d->performa11,
                                  'kalibrasi12' => $d->kalibrasi12,
                                  'performa12' => $d->performa12,
                                  'keterangan' => $d->keterangan,
                                  'created_at' => $d->created_at,
                              ];
                          @endphp
                          <tr>
                              <td class="text-center align-middle " style="position: sticky; background-color: #f2f2f2;  left: 0;">{{ $startNumber++ }}</td>
                              <td style="min-width: 200px; background-color: #f2f2f2; position: sticky;  left: 50px;"class="text-center align-middle  " >
                                  {{ $data['alat_instrument'] }}
                              </td>
                              <td style="min-width: 200px; background-color: #f2f2f2; position: sticky;  left: 250px;"class="text-center align-middle ">
                                {{ $data['no_asset'] }}
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                 @if(isset($data['kalibrasi1']))
                                     {!! $data['kalibrasi1'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                 @if(isset($data['performa1']))
                                {!! $data['performa1'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                   @if(isset($data['kalibrasi2']))
                                {!! $data['kalibrasi2'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['performa2']))
                                {!! $data['performa2'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['kalibrasi3']))
                                {!! $data['kalibrasi3'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['performa3']))
                                {!! $data['performa3'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['kalibrasi4']))
                                {!! $data['kalibrasi4'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['performa4']))
                                {!! $data['performa4'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['performa5']))
                                {!! $data['kalibrasi5'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['performa5']))
                                {!! $data['performa5'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['kalibrasi6']))
                                {!! $data['kalibrasi6'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['performa6']))
                                {!! $data['performa6'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['kalibrasi7']))
                                {!! $data['kalibrasi7'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌'  !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['performa7']))
                                {!! $data['performa7'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['kalibrasi8']))
                                {!! $data['kalibrasi8'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['performa8']))
                                {!! $data['performa8'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌'!!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['kalibrasi9']))
                                {!! $data['kalibrasi9'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['performa9']))
                                {!! $data['performa9'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['kalibrasi10']))
                                {!! $data['kalibrasi10'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['performa10']))
                                {!! $data['performa10'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['kalibrasi11']))
                                {!! $data['kalibrasi11'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['performa11']))
                                {!! $data['performa11'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['kalibrasi12']))
                                {!! $data['kalibrasi12'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                    @if(isset($data['performa12']))
                                {!! $data['performa12'] === 'Ya' ? '<i class="bx bxs-check-square" style="color:green;  font-size: 24px;"></i>' : '❌' !!}
                                  @endif
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                <a title="Remarks" type="button"  class="btn btn-secondary btn-sm text-white" data-bs-toggle="modal"
                                data-bs-target="#remarks{{ $d->id_instrument }}">Remarks</a>
                            </td>
                              <td style="min-width: 100px;"class="text-center align-middle ">
                                    <a title="Edit Data" type="button"  class="btn btn-secondary btn-sm text-white" data-bs-toggle="modal"
                                    data-bs-target="#update_data{{ $d->id_instrument }}"><i class="fas fa-edit"></i></a>
                                    <a title="Delete Data" type="button"  class="btn btn-danger btn-sm text-white" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $d->id_instrument }}"><i class="fas fa-trash"></i></a>
                              </td>
                              
                          </tr>
                          <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="remarks{{ $d->id_instrument }}">
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
                                                <p><b>Remarks :</b>  {{ $data['keterangan'] }}</p>
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
                          <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="delete{{ $d->id_instrument }}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Action</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @if (count($products) > 0)
                                        <form role="form" id="delete" action="{{ route('delete_instrument') }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id_delete" id="id_delete" value="{{ $data['pid'] }}">
                                            <div>
                                                <p>Anda yakin ingin menghapus data ?</p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Batal') }}</button>
                                                <button id="button-save" type="submit" class="btn btn-danger text-white">{{ __('Ya, hapus') }}</button>
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
                            <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="update_data{{ $d->id_instrument }}">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @if (count($products) > 0)
                                            <form role="form" id="approve-form" action="{{ route('update_instrument') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" id="id_instrument" name="id_instrument" value="{{ $data['pid'] }}">
                                            <div class="form-group row">
                                                <label for="alat_instrument" class="col-sm-4 col-form-label">{{ __('Alat Instrument') }}</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="alat_instrument" name="alat_instrument"   value="{{ $data['alat_instrument'] }}">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <label for="no_asset" class="col-sm-4 col-form-label">{{ __('No Asset') }}</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="no_asset" name="no_asset"   value="{{ $data['no_asset'] }}">
                                                </div>
                                            </div>
                                            <br>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>January</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi1" id="addFieldBtnPM" value="Ya" {{ $data['kalibrasi1'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi1"  id="addFieldBtnRM" value="Tidak" {{ $data['kalibrasi1'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa1" id="addFieldBtnPM" value="Ya" {{ $data['performa1'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa1"  id="addFieldBtnRM" value="Tidak" {{ $data['performa1'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>Febuary</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi2" id="addFieldBtnPM" value="Ya" {{ $data['kalibrasi2'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi2"  id="addFieldBtnRM" value="Tidak" {{ $data['kalibrasi2'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa2" id="addFieldBtnPM" value="Ya" {{ $data['performa2'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa2"  id="addFieldBtnRM" value="Tidak" {{ $data['performa2'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>Maret</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi3" id="addFieldBtnPM" value="Ya" {{ $data['kalibrasi3'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi3"  id="addFieldBtnRM" value="Tidak" {{ $data['kalibrasi3'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa3" id="addFieldBtnPM" value="Ya" {{ $data['performa3'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa3"  id="addFieldBtnRM" value="Tidak" {{ $data['performa3'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>April</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi4" id="addFieldBtnPM" value="Ya" {{ $data['kalibrasi4'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi4"  id="addFieldBtnRM" value="Tidak" {{ $data['kalibrasi4'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa4" id="addFieldBtnPM" value="Ya" {{ $data['performa4'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa4"  id="addFieldBtnRM" value="Tidak" {{ $data['performa4'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>Mei</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi5" id="addFieldBtnPM" value="Ya" {{ $data['kalibrasi5'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi5"  id="addFieldBtnRM" value="Tidak" {{ $data['kalibrasi5'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa5" id="addFieldBtnPM" value="Ya" {{ $data['performa5'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa5"  id="addFieldBtnRM" value="Tidak" {{ $data['performa5'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>Juni</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi6" id="addFieldBtnPM" value="Ya" {{ $data['kalibrasi6'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi6"  id="addFieldBtnRM" value="Tidak" {{ $data['kalibrasi6'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa6" id="addFieldBtnPM" value="Ya" {{ $data['performa6'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa6"  id="addFieldBtnRM" value="Tidak" {{ $data['performa6'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>July</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi7" id="addFieldBtnPM" value="Ya" {{ $data['kalibrasi7'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi7"  id="addFieldBtnRM" value="Tidak" {{ $data['kalibrasi7'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa7" id="addFieldBtnPM" value="Ya" {{ $data['performa7'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa7"  id="addFieldBtnRM" value="Tidak" {{ $data['performa7'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>Agustus</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi8" id="addFieldBtnPM" value="Ya" {{ $data['kalibrasi8'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi8"  id="addFieldBtnRM" value="Tidak" {{ $data['kalibrasi8'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa8" id="addFieldBtnPM" value="Ya" {{ $data['performa8'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa8"  id="addFieldBtnRM" value="Tidak" {{ $data['performa8'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>September</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi9" id="addFieldBtnPM" value="Ya" {{ $data['kalibrasi9'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi9"  id="addFieldBtnRM" value="Tidak" {{ $data['kalibrasi9'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa9" id="addFieldBtnPM" value="Ya" {{ $data['performa9'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa9"  id="addFieldBtnRM" value="Tidak" {{ $data['performa9'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>Oktober</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi10" id="addFieldBtnPM" value="Ya" {{ $data['kalibrasi10'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi10"  id="addFieldBtnRM" value="Tidak" {{ $data['kalibrasi10'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa10" id="addFieldBtnPM" value="Ya" {{ $data['performa10'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa10"  id="addFieldBtnRM" value="Tidak" {{ $data['performa10'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>November</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi11" id="addFieldBtnPM" value="Ya" {{ $data['kalibrasi11'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi11"  id="addFieldBtnRM" value="Tidak" {{ $data['kalibrasi11'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa11" id="addFieldBtnPM" value="Ya" {{ $data['performa11'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa11"  id="addFieldBtnRM" value="Tidak" {{ $data['performa11'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>Desember</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi12" id="addFieldBtnPM" value="Ya" {{ $data['kalibrasi12'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="kalibrasi12"  id="addFieldBtnRM" value="Tidak" {{ $data['kalibrasi12'] === 'Tidak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa12" id="addFieldBtnPM" value="Ya" {{ $data['performa12'] === 'Ya' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="performa12"  id="addFieldBtnRM" value="Tidak" {{ $data['performa12'] === 'Tidak' ? 'checked' : '' }}>
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
                                                <button id="button-save" type="submit" class="btn btn-primary text-white">{{ __('Ya, Update') }}</button>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="modal-title" class="modal-title">{{ __('Kesimpulan') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h1 class="card-title">Kalibrasi</h1>
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th>Bulan</th>
                            <th>Total Instrument</th>
                            <th>% Instrument</th>
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
                
                <h1 class="card-title mt-5">Performa</h1>
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th>Bulan</th>
                            <th>Total Instrument</th>
                            <th>% Instrument</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @for ($i = 1; $i <= 12; $i++)
                            <tr>
                                <td class="align-middle">{{ DateTime::createFromFormat('!m', $i)->format('F') }}</td>
                                <td class="align-middle text-center">{{ $totalYaArray1["totalYa{$i}"] }}</td>
                                <td class="align-middle text-center">{{ $percentageArray1["percentage{$i}"] }}%</td>
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
                                <input type="datetime-local"  class="form-control" id="startDate" name="startDate" placeholder="Masukan">
                                @error('startDate')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <label for="endDate" class="col-sm-2 col-form-label">{{ __('To') }}</label>
                            <div class="col-sm-4">
                                <input type="datetime-local"  class="form-control" id="endDate" name="endDate" placeholder="Masukan">
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
        @if(Session::has('success'))
            toastr.options = {
                "closeButton" : true,
                   "progressBar" : true
            }
              toastr.success("{{ session('success') }}");
        @endif
    
        @if(Session::has('error'))
            toastr.options = {
                "closeButton" : true,
                "progressBar" : true
            }
              toastr.error("{{ session('error') }}");
        @endif
    
        @if(Session::has('info'))
            toastr.options = {
                "closeButton" : true,
                "progressBar" : true
            }
              toastr.info("{{ session('info') }}");
        @endif
    
        @if(Session::has('warning'))
            toastr.options = {
                "closeButton" : true,
                "progressBar" : true
            }
              toastr.warning("{{ session('warning') }}");
        @endif
    </script>
@endsection