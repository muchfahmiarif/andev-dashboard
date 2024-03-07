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
  <div class="col-md-6">
        <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><p  href="{{ url('#') }}"> <a style="color:#000000" href="/development-journey/eksternal">Eksternal</a> /<b> {{ Request::get('nama_item') }}</b></p></li>
          </ol>
        </nav>
  </div>
  <div class="col-md-6">
    <label for="formFile" class="form-label">Nama Product</label>
    <form id='nama_product' method="GET" action="{{ route('dev_logbook_ex') }}">
      <div class="input-group col-2 mx-auto text-center" >
          <select class="form-control select2" style="width: 20px;" id="nama_item" name="nama_item" >
            <option selected disabled >.:: List Product ::.</option>
            @foreach ($selectProduct as $data)
            <option value="{{ $data->nama_item }}" {{ request()->input('nama_item') == $data->nama_item ? 'selected' : '' }}>{{ $data->nama_item }}</option>
          @endforeach
          </select>
      </div>
  </form>
  </div>
</div>
@php
    $nama_item = Request::get('nama_item');
@endphp
@if ($nama_item == NULL)
<div class="m-2">
  <div class="card text-center">
    <div class="card-body">
      <div class="container" style="display: flex; ">
        <div>
          <a title="Tambah Data" type="button"  class="btn btn-secondary btn-sm text-white" data-bs-toggle="modal"
          data-bs-target="#create" style="width: 300px; text-align: center; margin-right: 10px;"><i class="fas fa-plus"></i> Tambah Product</a>
        </a>
        </div>
    </div>
    </div>
</div>
</div>
@elseif(isset($addJourney) && $addJourney->zat_aktif == NULL)
<div class="m-2">
  <div class="card text-center">
    <div class="card-body">
      <div class="container" style="text-align: center; ">
        <div>
          <a title="Tambah Data" type="button"  class="btn btn-secondary btn-sm text-white" data-bs-toggle="modal"
          data-bs-target="#update_zatAktif{{ $addJourney->id_devlop }}"  style="width: 300px; text-align: center; margin-right: 10px;"><i class="fas fa-plus"></i> Tambah Zat Aktif</a>
          </a>
        </div>
    </div>
    </div>
</div>
</div>

<div class="modal fade"  id="update_zatAktif{{ $addJourney->id_devlop }}">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h4 id="modal-title" class="modal-title">{{ __('Tambah Zat Aktif') }}</h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form role="form" id="approve-form" action="{{ route('addZatAktif') }}" method="post">
                  @csrf
                  <input type="hidden" name="id" id="id" value="{{ $addJourney->id_devlop }}">
                  <input type="hidden" name="jenis_journey" id="jenis_journey" value="External">
                  <input type="hidden" name="nama_item" id="nama_item" value="{{ Request::get('nama_item') }}">
                  <div class="form-group row">
                    <label for="zat_aktif" class="col-sm-4 col-form-label">{{ __('Nama Zat Aktif') }}</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="zat_aktif" name="zat_aktif"  value="{{ old('zat_aktif') }}" required>
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
@elseif(isset($addJourney) && $addJourney->zat_aktif != NULL)
<div class="m-2">
  <div class="card">
    <div class="card-body">
      <div class="container">
        <div>
          <a title="Tambah Data" type="button"  class="btn btn-secondary btn-sm text-white" data-bs-toggle="modal"
         data-bs-target="#create_zatAktif"  style="width: 300px; text-align: center; margin-right: 10px;"><i class="fas fa-plus"></i> Tambah Zat Aktif</a>
          </a>
        </div>
    </div>
    </div>
</div>
</div>

@elseif (empty($addJourney))
    <script>
        window.location.href = '{{ route('dev_logbook_ex') }}';
    </script>
@endif




@if ( Request::get('nama_item') != NULL )
  @foreach($products as $key => $d)
  @if ( $d->zat_aktif != NULL )
    <div class="m-3">
      <div class="card text-center">
        <div class="card-header d-flex justify-content-between align-items-center">
          <div>
              <b>LIST ZAT AKTIF</b>
          </div>
          <div>
              <a title="Delete Data" type="button" class="btn btn-danger btn-sm text-white" data-bs-toggle="modal"
                  data-bs-target="#delete{{ $d->id_devlop }}">
                  <i class="fas fa-trash"></i>
              </a>
          </div>
      </div>
        <div class="card-body">
          <h5 class="card-title">{{ $d->zat_aktif }}</h5>
          <p class="card-text" >Nama Product : {{ $d->nama_item }} </p>
          <a onclick="window.location.href='eksternal/eksternal_timeline?nama_item={{ $d->nama_item }}&category={{ $d->zat_aktif }}'" class="btn btn-primary text-white">Lihat Timeline</a>
        </div>
      </div>  
    </div>
    @else
    
    @endif
    <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="delete{{ $d->id_devlop }}">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Action</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"
                      aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  @if (count($products) > 0)
                  <form role="form" id="delete" action="{{ route('delete_product') }}" method="post">
                      @csrf
                      @method('delete')
                      <input type="hidden" name="id_delete" id="id_delete" value="{{ $d->id_devlop }}">
                      <input type="hidden" name="nama_item" id="nama_item" value="{{ $d->nama_item }}">
                      <div>
                          <p>Anda yakin ingin menghapus Zat Aktif <b>{{ $d->zat_aktif }}</b> ?</p>
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
    @endforeach
  @else
        <div class="m-3">
          <div class="card text-center">
            <div class="card-body">
              <div class="container" style="display: flex; justify-content: center;">
                <div>
                  <h6>Silakan Melakukan Pemilihan Product</h6>
                </a>
                </div>
            </div>
            </div>
        </div>
      </div>
  @endif
    
   
  <div class="modal fade" id="create">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="modal-title" class="modal-title">{{ __('Tambah Product') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" id="approve-form" action="{{ route('addProduct') }}" method="post">
                    @csrf
                    <input type="hidden" name="id_devlop" id="id_devlop">
                    <input type="hidden" name="user_id" id="user_id">
                    <input type="hidden" name="jenis_journey" id="jenis_journey" value="External">
                    <div class="form-group row">
                      <label for="nama_item" class="col-sm-4 col-form-label">{{ __('Nama Product') }}</label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control" id="nama_item" name="nama_item"  value="{{ old('nama_item') }}" required>
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

<div class="modal fade"  id="create_zatAktif">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h4 id="modal-title" class="modal-title">{{ __('Tambah Zat Aktif') }}</h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form role="form" id="approve-form" action="{{ route('addZatAktif') }}" method="post">
                  @csrf
                  <input type="hidden" name="id_devlop" id="id_devlop">
                  <input type="hidden" name="jenis_journey" id="jenis_journey" value="External">
                  <input type="hidden" name="nama_item" id="nama_item" value="{{ Request::get('nama_item') }}">
                  <div class="form-group row">
                    <label for="zat_aktif" class="col-sm-4 col-form-label">{{ __('Nama Zat Aktif') }}</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="zat_aktif" name="zat_aktif"  value="{{ old('zat_aktif') }}">
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
        
          $('#nama_item').on('change', function() {
            $("#nama_product").submit();
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