@extends('front-view.layouts.master')

@section('custom-css')
    <link rel="stylesheet" href="/plugin/toastr/toastr.min.css">
    <link rel="stylesheet" href="/plugin/select2/css/select2.min.css">
    <link rel="stylesheet" href="/plugin/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
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
                <h4>Create Report</h4>
            </div>

            <div class="card-body">
                <form role="form" id="save" action="{{ route('addReport') }}" method="post"
                    enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <input type="hidden" id="id_report" name="id_report">
                    <input type="hidden" id="user_id" name="user_id" value="1">
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-4 col-form-label">{{ __('Jenis Report') }}</label>
                        <div class="col-sm-8">
                            <select class="form-control select2" style="width: 100%;" id="jenis_report" name="jenis_report">
                                <option value="" disabled selected>Option Report</option>
                                <option value="Finish Good" {{ $jenis_report == 'Finish Good' ? 'selected' : '' }}>Finish
                                    Good</option>
                                <option value="Stabilita" {{ $jenis_report == 'Stabilita' ? 'selected' : '' }}>Stabilita
                                </option>
                                <option value="Raw Material" {{ $jenis_report == 'Raw Material' ? 'selected' : '' }}>Raw
                                    Material</option>
                                <option value="Mikrobiologi" {{ $jenis_report == 'Mikrobiologi' ? 'selected' : '' }}>
                                    Mikrobiologi</option>
                            </select>
                            @error('jenis_report')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="nama_item" class="col-sm-4 col-form-label">{{ __('Nama Item') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_item" name="nama_item"
                                value="{{ $amrData->nama_item ?? old('nama_item') }}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="supplier" class="col-sm-4 col-form-label">{{ __('Supplier') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="supplier" name="supplier"
                                value="{{ $amrData->supplier ?? old('supplier') }}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="contact_person" class="col-sm-4 col-form-label">{{ __('Category') }}</label>
                        <div class="col-sm-4">
                            <select class="form-control select2" style="width: 100%;" id="category" name="category">
                                <option value="" disabled selected>Category</option>
                                <option value="Obat">Obat</option>
                                <option value="Kosmetik">Kosmetik</option>
                                <option value="Eksternal">Eksternal</option>
                                <option value="RM Alternatif">RM Alternatif</option>
                                <option value="New RM">New RM</option>
                                <option value="Efektivitas Pengawet">Efektivitas Pengawet</option>
                            </select>
                            @error('category')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <label for="pic" class="col-sm-1 col-form-label">{{ __('PIC') }}</label>
                        <div class="col-sm-3">
                            <select class="form-control select2" style="width: 100%;" id="pic" name="pic">
                                <option value="" disabled selected>PIC</option>
                                <option value="Rifan">Rifan</option>
                                <option value="Hesti">Hesti</option>
                                <option value="Alfi">Alfi</option>
                                <option value="Falma">Falma</option>
                                <option value="Fahmi">Fahmi</option>
                            </select>
                            @error('category')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="kode_racikan" class="col-sm-4 col-form-label">{{ __('Kode Racikan') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="kode_racikan" name="kode_racikan"
                                value="{{ $amrData->kode_racikan ?? old('kode_racikan') }}">
                        </div>
                        <label for="no_bets" class="col-sm-1 col-form-label">{{ __('No Bets') }}</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="no_bets" name="no_bets"
                                value="{{ $amrData->no_bets ?? old('no_bets') }}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="bulan" class="col-sm-4 col-form-label">{{ __('Bulan') }}</label>
                        <div class="col-sm-8">
                            <select class="form-control select2" style="width: 100%;" id="bulan" name="bulan">
                                <option value="" disabled selected>Bulan</option>
                                <option value="In Used H-0">In Used H-0</option>
                                <option value="In Used H-3">In Used H-3</option>
                                <option value="In Used H-7">In Used H-7</option>
                                <option value="In Used H-14">In Used H-14</option>
                                <option value="In Used H-28">In Used H-28</option>
                                <option value="In Used H-21">In Used H-21</option>
                                <option value="In Used H-35">In Used H-35</option>
                                <option value="In Used H-49">In Used H-49</option>
                                <option value="In Used H-63">In Used H-63</option>
                                <option value="B-0">B-0</option>
                                <option value="B-1">B-1</option>
                                <option value="B-2">B-2</option>
                                <option value="B-3">B-3</option>
                                <option value="B-4">B-4</option>
                                <option value="B-5">B-5</option>
                                <option value="B-6">B-6</option>
                                <option value="B-9">B-9</option>
                                <option value="B-12">B-12</option>
                                <option value="B-18">B-18</option>
                                <option value="B-24">B-24</option>
                                <option value="B-36">B-36</option>
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
                            <select class="form-control multiple" name="parameter[]" multiple="multiple">
                                <option value="Pemerian">Pemerian</option>
                                <option value="pH">pH</option>
                                <option value="BJ">BJ</option>
                                <option value="Visko">Visko</option>
                                <option value="Bobot">Bobot</option>
                                <option value="WH">WH</option>
                                <option value="Kadar">Kadar</option>
                                <option value="Disolusi">Disolusi</option>
                                <option value="Mikro">Mikro</option>
                            </select>
                        </div>
                        <label for="storage" class="col-sm-1 col-form-label">Storage</label>
                        <div class="col-sm-3">
                            <select class="form-control multiple" name="storage[]" multiple="multiple">
                                <option value="" disabled >Option Storage</option>
                                <option value="LE">LE</option>
                                <option value="SK">SK</option>
                                <option value="SO">SO</option>
                                <option value="S50">S50</option>
                            </select>
                        </div>

                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="tgl_masuk" class="col-sm-4 col-form-label">{{ __('Tgl Masuk') }}</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control" id="tgl_masuk" placeholder="Enter Entry Date" name="tgl_masuk"
                            value="{{ old('tgl_masuk') }}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="tgl_analisa" class="col-sm-4 col-form-label">{{ __('Tgl Analisa') }}</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control"  id="tgl_analisa"  placeholder="Enter Analysis Date" name="tgl_analisa"
                            value="{{ old('tgl_analisa') }}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="tgl_est" class="col-sm-4 col-form-label">{{ __('Tgl Estimasi Selesai') }}</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control"  id="tgl_est" placeholder="Enter Estimate Date" name="tgl_est"
                            value="{{ old('tgl_est') }}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="tgl_selesai" class="col-sm-4 col-form-label">{{ __('Tgl Selesai Analisa') }}</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control" id="tgl_selesai"  placeholder="Enter Analysis Finished Date" name="tgl_selesai"
                            value="{{ old('tgl_selesai') }}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="tgl_selesai_report"
                            class="col-sm-4 col-form-label">{{ __('Tgl Selesai Report') }}</label>
                        <div class="col-sm-8">
                            <input type="text"  class="form-control"id="tgl_selesai_report"  placeholder="Enter Finished The Report Date" name="tgl_selesai_report"
                            value="{{ old('tgl_selesai_report') }}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="status_lt" class="col-sm-4 col-form-label">{{ __('Status Lead Time') }}</label>
                        <div class="col-sm-8">
                            <select class="form-control select2" style="width: 100%;" id="status_lt" name="status_lt">
                                <option value="" disabled selected>Select Status</option>
                                <option value="Achived">Achived</option>
                                <option value="Not Reached">Not Reached</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="nama_analis" class="col-sm-4 col-form-label">{{ __('Nama Analis') }}</label>
                        <div class="col-sm-8">
                            <select class="form-control select2" style="width: 100%;" id="nama_analis"
                                name="nama_analis">
                                <option value="" disabled selected>Select Analisa</option>
                                <option value="Shiddiq">Shiddiq</option>
                                <option value="Dimas">Dimas</option>
                                <option value="Wahyu">Wahyu</option>
                                <option value="Daffa">Daffa</option>
                                <option value="Luthfi">Luthfi</option>
                                <option value="Tiwi">Tiwi</option>
                                <option value="Rica">Rica</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="file_upload" class="col-sm-4 col-form-label">{{ __('File') }}</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="file_upload" name="file_upload"
                                placeholder="Enter Note" value="{{ old('file_upload') }}">
                            @error('file_upload')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="status" class="col-sm-4 col-form-label">{{ __('Status') }}</label>
                        <div class="col-sm-8">
                            <select class="form-control select2" style="width: 100%;" id="status" name="status">
                                <option value="" disabled selected>Status</option>
                                <option value="MS">MS</option>
                                <option value="TMS">TMS</option>
                                <option value="On Progress">On Progress</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-4 col-form-label">{{ __('Keterangan') }}</label>
                        <div class="col-sm-8">
                            <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan Keterangan"
                                value="{{ old('keterangan') }}"></textarea>
                            @error('keterangan')
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
        $( function() {
    $( "#tgl_masuk" ).datepicker();
    $( "#tgl_analisa" ).datepicker();
    $( "#tgl_est" ).datepicker();
    $( "#tgl_selesai" ).datepicker();
    $( "#tgl_selesai_report" ).datepicker();
  } );
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
