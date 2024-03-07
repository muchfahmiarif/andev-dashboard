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
      <span class="text-muted fw-light">Tables /</span> Stabilita
    </h4>
  </div>
  
  <div class="col-md-7">
    <form method="GET" action="{{ route('lka_logbook_fg') }}">
        <div class="input-group col-2 mx-auto">
            <input class="form-control py-2 border-right-0 border" type="search" placeholder="Type something..." name="q" id="example-search-input" value="{{ request()->input('q') }}">
            <select class="form-control select2" style="width: 20px;" id="searchby" name="searchby">
                <option value="0" {{ request()->input('searchby') == 0 ? 'selected' : '' }}>Search By</option>
                <option value="1" {{ request()->input('searchby') == 1 ? 'selected' : '' }}>Nama Item</option>
                <option value="2" {{ request()->input('searchby') == 2 ? 'selected' : '' }}>No LKA</option>
                <option value="3" {{ request()->input('searchby') == 3 ? 'selected' : '' }}>Tahun Terbit</option>
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
                <a onclick="window.location.href='{{ route('ShowFormLKA', ['jenis_lka' => 'Stabilita']) }}'" class="btn btn-primary text-white" style="width: 200px; text-align: center; margin-right: 10px;">
                    <i class="fas fa-plus"></i> Create Report
                </a>
                <a title="Tambah Scar" type="button"  class="btn btn-primary text-white" style="width: 200px; text-align: center; margin-right: 10px;" data-bs-toggle="modal" data-bs-target="#export">
                    <i class='bx bxs-file-export'></i> Export
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
                      <th>No</th>
                      <th>Created At</th>
                      <th>Nama Item</th>
                      <th>No. LKA</th>
                      <th>Tahun terbit</th>
                      <th>File</th>
                      <th>Keterangan</th>
                      <th>Perubahan terakhir</th>
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
                                  'pid' => $d->id_lka,
                                  'user_id' => $d->user_id,
                                  'jenis_lka' => $d->jenis_lka,
                                  'nama_item' => $d->nama_item,
                                  'no_lka' => $d->no_lka,
                                  'tahun_terbit' => $d->tahun_terbit,
                                  'file_upload' => $d->file_upload,
                                  'keterangan' => $d->keterangan,
                                  'created_at' => $d->created_at,
                                  'updated_at' => $d->updated_at,
                              ];
                          @endphp
                          <tr>
                              <td class="text-center align-middle">{{ $startNumber++ }}</td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                  {{ Carbon\Carbon::parse($data['created_at'])->translatedFormat('j M Y') }}
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                  {{ $data['nama_item'] }}
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                {{ $data['no_lka'] }}
                              </td>
                              <td style="min-width: 50px"class="text-center align-middle ">
                                  {{ $data['tahun_terbit'] }}
                              </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                <a title="File" class="badge rounded-pill-lg text-white bg-primary" href="{{ asset('storage/' . $data['file_upload']) }}" target="_blank"> File</a>
                            </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                {{ Carbon\Carbon::parse($data['updated_at'])->translatedFormat('j M Y') }}
                            </td>
                              <td style="min-width: 100px"class="text-center align-middle ">
                                <a title="Remarks" type="button"  class="btn btn-secondary btn-sm text-white" data-bs-toggle="modal"
                                data-bs-target="#remarks{{ $d->id_lka }}">Remarks</a>
                              </td>
                        
                              <td style="min-width: 100px;"class="text-center align-middle ">
                                    <a title="Edit Data" type="button"  class="btn btn-secondary btn-sm text-white" data-bs-toggle="modal"
                                    data-bs-target="#update_data{{ $d->id_lka }}"><i class="fas fa-edit"></i></a>
                                    <a title="Delete Data" type="button"  class="btn btn-danger btn-sm text-white" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $d->id_lka }}"><i class="fas fa-trash"></i></a>
                              </td>
                              
                          </tr>
                          <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="remarks{{ $d->id_lka }}">
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
                          <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="delete{{ $d->id_lka }}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Action</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @if (count($products) > 0)
                                        <form role="form" id="delete" action="{{ route('delete_lka') }}" method="post">
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
                            <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="update_data{{ $d->id_lka }}">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @if (count($products) > 0)
                                            <form role="form" id="approve-form" action="{{ route('update_lka') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" id="id_lka" name="id_lka" value="{{ $data['pid'] }}">
                                            <div class="form-group row">
                                                <label for="nama_item" class="col-sm-4 col-form-label">{{ __('Nama Item') }}</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nama_item" name="nama_item"   value="{{ $data['nama_item'] }}">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <label for="no_lka" class="col-sm-4 col-form-label">{{ __('No LK') }}</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="no_lka" name="no_lka"   value="{{ $data['no_lka'] }}">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <label for="tahun_terbit" class="col-sm-4 col-form-label">{{ __('Tahun Terbit') }}</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control " style="width: 100%;" id="tahun_terbit" name="tahun_terbit">
                                                        <option value="" disabled selected>Pilih Tahun Terbit</option>
                                                        @php
                                                            $tahun_sekarang = date('Y');
                                                            $tahun_terbit_awal = 1945;
                                                        @endphp
                                                        @for ($tahun = $tahun_sekarang; $tahun >= $tahun_terbit_awal; $tahun--)
                                                            <option value="{{ $tahun }}" {{ $data['tahun_terbit'] == $tahun ? 'selected' : '' }}>{{ $tahun }}</option>
                                                        @endfor
                                                    </select>
                                                    @error('tahun_terbit')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <label for="keterangan" class="col-sm-4 col-form-label">{{ __('Keterangan') }}</label>
                                                <div class="col-sm-8">
                                                    <textarea type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $data['keterangan'] }}">{{ $data['keterangan'] }}</textarea>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <label for="file_upload" class="col-sm-4 col-form-label">{{ __('File') }}</label>
                                                <div class="col-sm-8">
                                                    @if($data['file_upload'])
                                                        <p>File yang sudah diunggah:  <a href="{{ asset('storage/' . $data['file_upload']) }}" target="_blank">Lihat File</a>
                                                    @endif
                                                    <input type="file" class="form-control" id="file_upload" name="file_upload">
                                                    @error('file_upload')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
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
                    <form role="form" id="approve-form" action="{{ route('export_lka') }}" method="post">
                        @csrf
                        <input type="hidden" name="jenis_lka" id="jenis_lka" value="Stabilita">
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