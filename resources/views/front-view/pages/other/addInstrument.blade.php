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
                <h4>Create Instrument</h4>
            </div>

            <div class="card-body">
                <form role="form" id="save" action="{{ route('addInstrument') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="id_instrument" name="id_instrument">
                    <input type="hidden" id="user_id" name="user_id">
                    <div class="form-group row">
                        <label for="alat_instrument" class="col-sm-4 col-form-label">{{ __('Alat Instrument') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="alat_instrument" name="alat_instrument"
                                value="{{ old('alat_instrument') }}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="no_asset" class="col-sm-4 col-form-label">{{ __('No Asset') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="no_asset" name="no_asset"
                                value="{{ old('no_asset') }}">
                        </div>
                    </div>
                    <br>
                    <h6 class="text-end"><a title="Bulan" type="button"
                            class="btn btn-primary btn-sm text-white"><b>January</b></a></h6>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi1" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi1" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="performa1" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="performa1" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <hr>
                    <h6 class="text-end"><a title="Bulan" type="button"
                            class="btn btn-primary btn-sm text-white"><b>Febuary</b></a></h6>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi2" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi2" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="performa2" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="performa2" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <hr>
                    <h6 class="text-end"><a title="Bulan" type="button"
                            class="btn btn-primary btn-sm text-white"><b>Maret</b></a></h6>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi3" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi3" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="performa3" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="performa3" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <hr>
                    <h6 class="text-end"><a title="Bulan" type="button"
                            class="btn btn-primary btn-sm text-white"><b>April</b></a></h6>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi4" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi4" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="performa4" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="performa4" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <hr>
                    <h6 class="text-end"><a title="Bulan" type="button"
                            class="btn btn-primary btn-sm text-white"><b>Mei</b></a></h6>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi5" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi5" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="performa5" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="performa5" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <hr>
                    <h6 class="text-end"><a title="Bulan" type="button"
                            class="btn btn-primary btn-sm text-white"><b>Juni</b></a></h6>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi6" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi6" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="performa6" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="performa6" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <hr>
                    <h6 class="text-end"><a title="Bulan" type="button"
                            class="btn btn-primary btn-sm text-white"><b>July</b></a></h6>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi7" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi7" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="performa7" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="performa7" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <hr>
                    <h6 class="text-end"><a title="Bulan" type="button"
                            class="btn btn-primary btn-sm text-white"><b>Agustus</b></a></h6>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi8" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi8" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="performa8" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="performa8" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <hr>
                    <h6 class="text-end"><a title="Bulan" type="button"
                            class="btn btn-primary btn-sm text-white"><b>September</b></a></h6>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi9" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi9" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="performa9" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="performa9" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <hr>
                    <h6 class="text-end"><a title="Bulan" type="button"
                            class="btn btn-primary btn-sm text-white"><b>Oktober</b></a></h6>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi10" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi10" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="performa10" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="performa10" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <hr>
                    <h6 class="text-end"><a title="Bulan" type="button"
                            class="btn btn-primary btn-sm text-white"><b>November</b></a></h6>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi11" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi11" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="performa11" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="performa11" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <hr>
                    <h6 class="text-end"><a title="Bulan" type="button"
                            class="btn btn-primary btn-sm text-white"><b>Desember</b></a></h6>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Kalibrasi') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi12" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="kalibrasi12" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Performa') }}</label>
                        <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="performa12" id="addFieldBtnPM"
                                value="Ya">
                            <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                        </div>
                        <div class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="performa12" id="addFieldBtnRM"
                                value="Tidak">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                        </div>
                    </div>
                    <hr>

                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-4 col-form-label">{{ __('Keterangan') }}</label>
                        <div class="col-sm-8">
                            <textarea type="text" class="form-control" id="keterangan" name="keterangan"></textarea>
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
