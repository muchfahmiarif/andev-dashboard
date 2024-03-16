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
    <div class="row py-2">
        <div class="col-md-6">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <p href="{{ url('#') }}"> <a style="color:#000000" href="/development-journey/raw_material">Raw
                                Material</a> / <a style="color:#000000"
                                href="/development-journey/raw_material?nama_item={{ Request::get('nama_item') }}">
                                {{ Request::get('nama_item') }}</a> / <b> {{ Request::get('category') }}</b></p>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="m-2">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div>
                        <a title="Tambah Data" type="button" class="btn btn-secondary btn-sm text-white"
                            data-bs-toggle="modal" data-bs-target="#create_timeline"
                            style="width: 300px; text-align: center; margin-right: 10px;"><i class="fas fa-plus"></i> Tambah
                            Timeline</a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Timeline {{ Request::get('category') }}</h6>
                        <div id="content">
                            <ul class="timeline">
                                @if (count($products) > 0)
                                    @foreach ($products as $d)
                                        @php
                                            $created_at = \Carbon\Carbon::parse($d->created_at);
                                            $now = \Carbon\Carbon::now();

                                            // Hitung perbedaan waktu dalam menit, jam, atau hari
                                            $diffInMinutes = $now->diffInMinutes($created_at);
                                            $diffInHours = $now->diffInHours($created_at);
                                            $diffInDays = $now->diffInDays($created_at);

                                            // Tetapkan $data_date berdasarkan perbedaan waktu
                                            if ($diffInMinutes < 60) {
                                                $data_date = $diffInMinutes . ' Minutes Ago';
                                            } elseif ($diffInHours < 24) {
                                                $data_date = $diffInHours . ' Hours Ago';
                                            } elseif ($diffInDays == 1) {
                                                $data_date = '1 Day Ago';
                                            } else {
                                                $data_date = $diffInDays . ' Days Ago';
                                            }
                                        @endphp

                                        <li class="event" data-date="{{ $data_date }}">
                                            <div>
                                                <div class="hstack">
                                                    <a style="cursor: pointer;" class="title text-decoration-none"
                                                        onclick="window.location.href='raw_material_timeline/detail?nama_item={{ $d->nama_item }}&category={{ $d->zat_aktif }}&time_line={{ $d->time_line }}'">{{ $d->time_line }}</a>
                                                    @if ($d->status == 'Mencari Litelatur')
                                                        <h5 style="text-decoration: none; cursor: default;"
                                                            class="ms-auto badge bg-info text-decoration-none">
                                                            {{ $d->status }}</h5>
                                                    @elseif ($d->status == 'Pending')
                                                        <h5 style="text-decoration: none; cursor: default;"
                                                            class="ms-auto badge bg-danger text-decoration-none">
                                                            {{ $d->status }}</h5>
                                                    @elseif ($d->status == 'Done')
                                                        <h5 style="text-decoration: none; cursor: default;"
                                                            class="ms-auto badge bg-success text-decoration-none">
                                                            {{ $d->status }}</h5>
                                                    @elseif ($d->status == 'Work In Progress')
                                                        <h5 style="text-decoration: none; cursor: default;"
                                                            class="ms-auto badge bg-warning text-decoration-none">
                                                            {{ $d->status }}</h5>
                                                    @endif
                                                </div>
                                                <p> {!! htmlspecialchars_decode($d->body) !!}</p>
                                                <div>
                                                    <a title="Tambah Data" type="button"
                                                        class="btn btn-secondary btn-sm text-white" data-bs-toggle="modal"
                                                        data-bs-target="#update_timeline{{ $d->id_dev_tl }}"><i
                                                            class="fas fa-edit"></i></a>
                                                    </a>
                                                    <a title="Delete Data" type="button"
                                                        class="btn btn-danger btn-sm text-white" data-bs-toggle="modal"
                                                        data-bs-target="#delete{{ $d->id_dev_tl }}"><i
                                                            class="fas fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true" id="delete{{ $d->id_dev_tl }}">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Action</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @if (count($products) > 0)
                                                            <form role="form" id="delete"
                                                                action="{{ route('delete_Timeline') }}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <input type="hidden" name="id_delete" id="id_delete"
                                                                    value="{{ $d->id_dev_tl }}">
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
                <div class="modal fade" id="update_timeline{{ $d->id_dev_tl }}">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 id="modal-title" class="modal-title">{{ __('Update Timeline') }}</h4>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form role="form" id="approve-form" action="{{ route('addTimeline') }}"
                                    method="post">
                                    @csrf
                                    <input type="hidden" name="id" id="id" value="{{ $d->id_dev_tl }}">
                                    <input type="hidden" name="jenis_journey" id="jenis_journey" value="Raw Material">
                                    <input type="hidden" name="nama_item" id="nama_item"
                                        value="{{ Request::get('nama_item') }}">
                                    <input type="hidden" name="zat_aktif" id="zat_aktif"
                                        value="{{ Request::get('category') }}">
                                    <div class="form-group row">
                                        <label for="time_line"
                                            class="col-sm-4 col-form-label">{{ __('Tittle Timeline') }}</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="time_line" name="time_line"
                                                value="{{ $d->time_line }}" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-4 col-form-label">{{ __('Status') }}</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" style="width: 100%;" id="status"
                                                name="status" required>
                                                <option value="" disabled selected>Status</option>
                                                <option value="Mencari Litelatur"
                                                    {{ $d->status == 'Mencari Litelatur' ? 'selected' : '' }}>Mencari
                                                    Litelatur</option>
                                                <option value="Pending" {{ $d->status == 'Pending' ? 'selected' : '' }}>
                                                    Pending</option>
                                                <option value="Done" {{ $d->status == 'Done' ? 'selected' : '' }}>Done
                                                </option>
                                                <option value="Work In Progress"
                                                    {{ $d->status == 'Work In Progress' ? 'selected' : '' }}>Work In
                                                    Progress</option>
                                            </select>
                                            @error('category')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <br>
                                    <div class="d-flex justify-content-end">
                                        <button id="button-save" type="submit"
                                            class="btn btn-primary text-white">Update</button>
                                    </div>
                                </form>
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
                </ul>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="modal fade" id="create_timeline">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="modal-title" class="modal-title">{{ __('Tambah Timeline') }}</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" id="approve-form" action="{{ route('addTimeline') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <input type="hidden" name="jenis_journey" id="jenis_journey" value="Raw Material">
                        <input type="hidden" name="nama_item" id="nama_item" value="{{ Request::get('nama_item') }}">
                        <input type="hidden" name="zat_aktif" id="zat_aktif" value="{{ Request::get('category') }}">
                        <div class="form-group row">
                            <label for="time_line" class="col-sm-4 col-form-label">{{ __('Tittle Timeline') }}</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="time_line" name="time_line" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="body" class="col-sm-4 col-form-label">{{ __('Deskripsi') }}</label>
                            <div class="col-sm-8">
                                <input id="input-body" name="body" required
                                    style="opacity: 0; width: 0; position: absolute; top: 37%; left: 36%">
                                <trix-editor input="input-body"></trix-editor>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="status" class="col-sm-4 col-form-label">{{ __('Status') }}</label>
                            <div class="col-sm-8">
                                <select class="form-control" style="width: 100%;" id="status" name="status"
                                    required>
                                    <option value="" disabled selected>Category</option>
                                    <option value="Mencari Litelatur">Mencari Litelatur</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Done">Done</option>
                                    <option value="Work In Progress">Work In Progress</option>
                                </select>
                                @error('category')
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
