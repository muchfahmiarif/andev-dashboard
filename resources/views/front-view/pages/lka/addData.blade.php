@extends('front-view.layouts.master')

@section('custom-css')
    <link rel="stylesheet" href="/plugin/toastr/toastr.min.css">
    <link rel="stylesheet" href="/plugin/select2/css/select2.min.css">
    <link rel="stylesheet" href="/plugin/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            </div>
        </div>
    </div>
    <div class="container" style="border-radius: 15px;">
        <div class="card ">
            <div class="card-header">
                <h4>Create LKA</h4>
            </div>

            <div class="card-body">
                <form role="form" id="save" action="{{ route('addLKA') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="id_lka" name="id_lka">
                    <input type="hidden" id="user_id" name="user_id">
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-4 col-form-label">{{ __('Jenis LKA') }}</label>
                        <div class="col-sm-8">
                            <select class="form-control select2" style="width: 100%;" id="jenis_lka" name="jenis_lka">
                                <option value="" disabled selected>Option Report</option>
                                <option value="Finish Good" {{ $jenis_lka == 'Finish Good' ? 'selected' : '' }}>Finish Good
                                </option>
                                <option value="Stabilita" {{ $jenis_lka == 'Stabilita' ? 'selected' : '' }}>Stabilita
                                </option>
                                <option value="Raw Material" {{ $jenis_lka == 'Raw Material' ? 'selected' : '' }}>Raw
                                    Material</option>
                                <option value="Mikrobiologi" {{ $jenis_lka == 'Mikrobiologi' ? 'selected' : '' }}>
                                    Mikrobiologi</option>
                            </select>
                            @error('jenis_lka')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="nama_item" class="col-sm-4 col-form-label">{{ __('Nama Item') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_item" name="nama_item"
                                value="{{ old('nama_item') }}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="no_lka" class="col-sm-4 col-form-label">{{ __('No LK') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="no_lka" name="no_lka"
                                value="{{ old('no_lka') }}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="tahun_terbit" class="col-sm-4 col-form-label">{{ __('Tahun Terbit') }}</label>
                        <div class="col-sm-3">
                            <select class="form-control select2" style="width: 100%;" id="tahun_terbit" name="tahun_terbit">
                                <option value="" disabled selected>Pilih Tahun Terbit</option>
                                @php
                                    $tahun_sekarang = date('Y');
                                    $tahun_terbit_awal = 1945;
                                @endphp
                                @for ($tahun = $tahun_sekarang; $tahun >= $tahun_terbit_awal; $tahun--)
                                    <option value="{{ $tahun }}">{{ $tahun }}</option>
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
                            <textarea type="text" class="form-control" id="keterangan" name="keterangan" value="{{ old('keterangan') }}"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="file_upload" class="col-sm-4 col-form-label">{{ __('File') }}</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="file_upload" name="file_upload">
                            @error('file_upload')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-end">
                        <a type="button" class="btn btn-secondary text-white"
                            style="margin-right:10px;">{{ __('Batal') }}</a><br>
                        <button id="button-save" type="submit" class="btn btn-primary text-white">Tambahkan</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
@section('custom-js')
    <script src="/plugin/toastr/toastr.min.js"></script>
    <script src="/plugin/select2/js/select2.full.min.js"></script>
    <script>
        $(function() {
            $('.select2').select2({
                theme: 'bootstrap4'
            });
            $('.multiple').select2();
        });

        $('#sort').on('change', function() {
            $("#sorting").submit();
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
