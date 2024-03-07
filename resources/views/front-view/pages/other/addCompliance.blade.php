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
            <h4>Create Compliance</h4>
        </div>
        
        <div class="card-body">
            <form role="form" id="save"  action="{{ route('addCompliance') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="id_compliance" name="id_compliance">
                <input type="hidden" id="user_id" name="user_id">
                <div class="form-group row">
                    <label for="area" class="col-sm-4 col-form-label">{{ __('Area') }}</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="area" name="area"  value="{{ old('area') }}">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="pic" class="col-sm-4 col-form-label">{{ __('PIC') }}</label>
                    <div class="col-sm-8">
                        <select class="form-control select2" style="width: 100%;" id="pic"
                            name="pic">
                            <option value="" disabled selected>PIC</option>
                            <option value="Rifan" >Rifan</option>
                            <option value="Hesti" >Hesti</option>
                            <option value="Alfi" >Alfi</option>
                            <option value="Falma" >Falma</option>
                            <option value="Fahmi" >Fahmi</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="nama_alat" class="col-sm-4 col-form-label">{{ __('Nama Alat') }}</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_alat" name="nama_alat"  value="{{ old('nama_alat') }}">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="list_item_check" class="col-sm-4 col-form-label">{{ __('List Item Check') }}</label>
                    <div class="col-sm-8">
                        <textarea type="text" class="form-control" id="list_item_check" name="list_item_check"  value="{{ old('nama_alat') }}"></textarea>
                    </div>
                </div>
                <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>January</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status1" id="addFieldBtnPM" value="Ya">
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status1"  id="addFieldBtnRM" value="Tidak" >
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>Febuary</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status2" id="addFieldBtnPM" value="Ya" >
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status2"  id="addFieldBtnRM" value="Tidak">
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>Maret</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status3" id="addFieldBtnPM" value="Ya">
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status3"  id="addFieldBtnRM" value="Tidak" >
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>April</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status4" id="addFieldBtnPM" value="Ya">
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status4"  id="addFieldBtnRM" value="Tidak">
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>Mei</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status5" id="addFieldBtnPM" value="Ya">
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status5"  id="addFieldBtnRM" value="Tidak" >
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>Juni</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status6" id="addFieldBtnPM" value="Ya">
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status6"  id="addFieldBtnRM" value="Tidak" >
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>July</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status7" id="addFieldBtnPM" value="Ya">
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status7"  id="addFieldBtnRM" value="Tidak" >
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>Agustus</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status8" id="addFieldBtnPM" value="Ya">
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status8"  id="addFieldBtnRM" value="Tidak">
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>September</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status9" id="addFieldBtnPM" value="Ya">
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status9"  id="addFieldBtnRM" value="Tidak" >
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>Oktober</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status10" id="addFieldBtnPM" value="Ya">
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status10"  id="addFieldBtnRM" value="Tidak">
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>November</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status11" id="addFieldBtnPM" value="Ya">
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status11"  id="addFieldBtnRM" value="Tidak" >
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                                            <h6 class="text-end" ><a title="Bulan" type="button" class="btn btn-primary btn-sm text-white"><b>Desember</b></a></h6>
                                            <div class="form-group row">
                                                <label for="contact_person" class="col-sm-5 col-form-label">{{ __('Apakah Sesuai') }}</label>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status12" id="addFieldBtnPM" value="Ya">
                                                    <label class="form-check-label" for="addFieldBtnPM">Ya</label>
                                                </div>
                                                  <div class=" col-sm-3">
                                                    <input class="form-check-input" type="radio" name="status12"  id="addFieldBtnRM" value="Tidak" >
                                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                  </div>
                                            </div>
                                            <hr>
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-4 col-form-label">{{ __('Keterangan') }}</label>
                    <div class="col-sm-8">
                        <textarea type="text" class="form-control" id="keterangan" name="keterangan"  value="{{ old('keterangan') }}"></textarea>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-end">
                    <a  type="button" class="btn btn-secondary text-white" style="margin-right:10px;">{{ __('Batal') }}</a><br>
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
    $(function () {
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

