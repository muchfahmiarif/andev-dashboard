@extends('front-view.layouts.master')

@push('plugin-style')
  <link rel="stylesheet" href="{{ asset('css/data-table/scroller.bootstrap5.min.css') }}">
@endpush
@section('custom-css')
    <link rel="stylesheet" href="/plugin/toastr/toastr.min.css">
    <link rel="stylesheet" href="/plugin/select2/css/select2.min.css">
    <link rel="stylesheet" href="/plugin/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
@endsection
@section('content')
<nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><p  href="{{ url('#') }}"> 
            <a style="color:#000000" href="/development-journey/raw_material">Raw Material</a> / 
            <a style="color:#000000" href="/development-journey/raw_material?nama_item={{ Request::get('nama_item') }}"> {{ Request::get('nama_item') }}</a> / 
            <a style="color:#000000" href="/development-journey/raw_material/raw_material_timeline?nama_item={{ Request::get('nama_item') }}&category={{ Request::get('category') }}">{{ Request::get('category') }}</a> / 
            <b>{{ Request::get('time_line') }}</b> </p></li>
          </ol>
</nav>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h6 class="card-title mb-3">Description</h6> 
            <a title="Tambah Data" type="button" class="btn btn-secondary btn-sm text-white" data-bs-toggle="modal" data-bs-target="#update_timeline"><i class="fas fa-edit"></i></a>
      </div>
        <div class="card">
          <div class="card-body">
           {!! htmlspecialchars_decode($body->body) !!}
          </div>
        </div>
      </div>

      <div class="card-body">
        <a title="Tambah Data" type="button"  class="btn btn-secondary btn-sm text-white" data-bs-toggle="modal"
        data-bs-target="#create_document"  style="width: 300px; text-align: center; margin-right: 10px;"><i class="fas fa-plus"></i> Tambah Document</a>
         </a>
        {{-- <p class="text-muted mb-3">Add class <code>.table-bordered</code></p> --}}
        <div class="table-responsive pt-3">
          <table class="table table-hover align-middle">
            <thead class="text-center">
              <tr>
                <th>
                  No
                </th>
                <th>
                  Tanggal
                </th>
                <th>
                  Judul
                </th>
                <th>
                  Deskripsi
                </th>
                <th>
                  Status
                </th>
                <th>
                  Nama Dokumen
                </th>
                <th>
                  Keterangan
                </th>
                <th>
                  Download
                </th>
                <th>
                  Action
                </th>
              </tr>
            </thead>
            <tbody class="table-group-divider text-center">
              @php
              $currentPage = $products->currentPage();
              $perPage = $products->perPage();
              $startNumber = ($currentPage - 1) * $perPage + 1;
          @endphp
          @if (count($products) > 0)
              @foreach ($products as $key => $d)
                  @php
                      $data = [
                          'pid' => $d->id_dev_doc,
                          'pjudul' => $d->judul,
                          'pnama_item' => $d->nama_item,
                          'pdeskripsi' => $d->deskripsi,
                          'pzat_aktif' => $d->zat_aktif,
                          'ptime_line' => $d->time_line,
                          'pnama_document' => $d->nama_document,
                          'pstatus' => $d->status,
                          'pketerangan' => $d->keterangan,
                          'pfile' => $d->file,
                          'created_at' => $d->created_at,
                          'updated_at' => $d->updated_at,
                      ];
                  @endphp
              <tr>
                <td class="text-center align-middle">{{ $startNumber++ }}</td>
                <td style="min-width: 100px"class="text-center align-middle ">
                    {{ Carbon\Carbon::parse($data['created_at'])->translatedFormat('j M Y') }}
                </td>
                <td style="min-width: 100px"class="align-middle ">
                    {{ $data['pjudul'] }}
                </td>
                <td style="min-width: 100px"class="text-center align-middle ">
                  {{ $data['pdeskripsi'] }}
                </td>
                <td style="min-width: 100px"class="text-center align-middle ">
                  @if ($data['pstatus'] == 'Work In Progress') 
                    <a title="Tambah Data" type="button"  class="btn btn-warning btn-sm text-white" > {{ $data['pstatus'] }}</a>
                  @elseif ($data['pstatus'] == 'Not yet') 
                    <a title="Tambah Data" type="button"  class="btn btn-danger btn-sm text-white" > {{ $data['pstatus'] }}</a>
                  @elseif ($data['pstatus'] == 'Done') 
                    <a title="Tambah Data" type="button"  class="btn btn-success btn-sm text-white" > {{ $data['pstatus'] }}</a>
                  @endif
                </td>
                <td style="min-width: 50px"class="text-center align-middle ">
                    {{ $data['pnama_document'] }}
                </td>
                <td style="min-width: 50px"class="text-center align-middle ">
                  {{ $data['pketerangan'] }}
              </td>
                <td style="min-width: 100px"class="text-center align-middle ">
                  <a title="File" class="badge rounded-pill-lg text-white bg-primary" href="{{ asset('storage/' . $data['pfile']) }}" target="_blank"> File</a>
              </td>
                <td>
                  <a title="Tambah Data" type="button"  class="btn btn-secondary btn-sm text-white" data-bs-toggle="modal"
                  data-bs-target="#update_doc{{ $d->id_dev_doc }}"><i class="fas fa-edit"></i></a>
                  </a>
                  <a title="Delete Data" type="button"  class="btn btn-danger btn-sm text-white" data-bs-toggle="modal"
                  data-bs-target="#delete{{ $d->id_dev_doc }}"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="delete{{ $d->id_dev_doc }}">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Action</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @if (count($products) > 0)
                            <form role="form" id="delete" action="{{ route('delete_document') }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id_delete" id="id_delete" value="{{ $d->id_dev_doc }}">
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
              <div class="modal fade"  id="update_doc{{ $d->id_dev_doc }}">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="modal-title" class="modal-title">{{ __('Tambah Document') }}</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form role="form" id="approve-form" action="{{ route('addDocument') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{{ $data['pid'] }}">
                                  <input type="hidden" name="jenis_journey" id="jenis_journey" value="Raw Material">
                                  <input type="hidden" name="nama_item" id="nama_item" value="{{ $data['pnama_item'] }}">
                                  <input type="hidden" name="zat_aktif" id="zat_aktif" value="{{ $data['pzat_aktif'] }}">
                                  <input type="hidden" name="time_line" id="time_line" value="{{ $data['ptime_line'] }}">
                                  <div class="form-group row">
                                    <label for="judul" class="col-sm-4 col-form-label">{{ __('Judul') }}</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="judul" name="judul" value="{{ $data['pjudul'] }}" required>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                    <label for="deskripsi" class="col-sm-4 col-form-label">{{ __('Deskripsi') }}</label>
                                    <div class="col-sm-8">
                                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $data['pdeskripsi'] }}" required>{{ $data['pdeskripsi'] }}</textarea>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                    <label for="status" class="col-sm-4 col-form-label">{{ __('Status') }}</label>
                                      <div class="col-sm-8">
                                          <select class="form-control" style="width: 100%;" id="status"
                                              name="status" required>
                                              <option value="" disabled selected>Status</option>
                                              <option value="Not yet" {{ $data['pstatus'] ==  "Not yet" ? 'selected' : '' }}>Not yet</option>
                                              <option value="Work In Progress" {{ $data['pstatus'] ==  "Work In Progress" ? 'selected' : '' }}>Work In Progress</option>
                                              <option value="Done" {{ $data['pstatus'] ==  "Done" ? 'selected' : '' }}>Done</option>
                                          </select>
                                          @error('status')
                                          <div class="text-danger">{{ $message }}</div>
                                          @enderror
                                      </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                      <label for="keterangan" class="col-sm-4 col-form-label">{{ __('Keterangan') }}</label>
                                      <div class="col-sm-8">
                                          <textarea type="text" class="form-control" id="keterangan" name="keterangan"  value="{{ $data['pketerangan'] }}" required>{{ $data['pketerangan'] }}</textarea>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                      <label for="nama_document" class="col-sm-4 col-form-label">{{ __('Nama Document') }}</label>
                                      <div class="col-sm-8">
                                          <input type="text" class="form-control" id="nama_document" name="nama_document"  value="{{ $data['pnama_document'] }}" required>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                      <label for="file" class="col-sm-4 col-form-label">{{ __('File') }}</label>
                                      <div class="col-sm-8">
                                        @if($data['pfile'])
                                        <p>File yang sudah diunggah:  <a href="{{ asset('storage/' . $data['pfile']) }}" target="_blank">Lihat File</a>
                                        @endif
                                        <input type="file" class="form-control" id="file" name="file">
                                        @error('file')
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
              @endforeach
              @else
                <tr class="text-center">
                    <td colspan="9">{{ __('No data.') }}</td>
                </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade"  id="update_timeline">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="modal-title" class="modal-title">{{ __('Update Timeline') }}</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form role="form" id="approve-form" action="{{ route('updateTimeline1') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{{ $body->id_dev_tl  }}">
                                
                                <div class="form-group row">
                                  <label for="body" class="col-sm-4 col-form-label">{{ __('Deskripsi') }}</label>
                                        <div class="col-sm-8">
                                            <input id="input-body" type="hidden"  name="body" value="{{ $body->body }}">
                                            <trix-editor input="input-body" ></trix-editor>
                                        </div>
                                </div>
                                <br>
                                <div class="d-flex justify-content-end">
                                    <button id="button-save" type="submit" class="btn btn-primary text-white">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
<div class="modal fade"  id="create_document">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h4 id="modal-title" class="modal-title">{{ __('Tambah Document') }}</h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form role="form" id="approve-form" action="{{ route('addDocument') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id" id="id" >
                    <input type="hidden" name="jenis_journey" id="jenis_journey" value="Raw Material">
                    <input type="hidden" name="nama_item" id="nama_item" value="{{ Request::get('nama_item') }}">
                    <input type="hidden" name="zat_aktif" id="zat_aktif" value="{{ Request::get('category') }}">
                    <input type="hidden" name="time_line" id="time_line" value="{{ Request::get('time_line') }}">
                    <div class="form-group row">
                      <label for="judul" class="col-sm-4 col-form-label">{{ __('Judul') }}</label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control" id="judul" name="judul">
                      </div>
                    </div>
                    <br>
                    <div class="form-group row">
                      <label for="deskripsi" class="col-sm-4 col-form-label">{{ __('Deskripsi') }}</label>
                      <div class="col-sm-8">
                          <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"></textarea>
                      </div>
                    </div>
                    <br>
                    <div class="form-group row">
                      <label for="status" class="col-sm-4 col-form-label">{{ __('Status') }}</label>
                        <div class="col-sm-8">
                            <select class="form-control" style="width: 100%;" id="status"
                                name="status">
                                <option value="" disabled selected>Status</option>
                                <option value="Not yet">Not yet</option>
                                <option value="Work In Progress">Work In Progress</option>
                                <option value="Done">Done</option>
                            </select>
                            @error('status')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                      <br>
                      <div class="form-group row">
                        <label for="keterangan" class="col-sm-4 col-form-label">{{ __('Keterangan') }}</label>
                        <div class="col-sm-8">
                            <textarea type="text" class="form-control" id="keterangan" name="keterangan"></textarea>
                        </div>
                      </div>
                      <br>
                      <div class="form-group row">
                        <label for="nama_document" class="col-sm-4 col-form-label">{{ __('Nama Document') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_document" name="nama_document">
                        </div>
                      </div>
                      <br>
                      <div class="form-group row">
                        <label for="file" class="col-sm-4 col-form-label">{{ __('File') }}</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="file" name="file">
                            @error('file')
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
@endsection
@section('custom-js')
<script src="/plugin/select2/js/select2.full.min.js"></script>
<script src="/plugin/toastr/toastr.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
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