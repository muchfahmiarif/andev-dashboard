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
            <h4>Create Report</h4>
        </div>
        
        <div class="card-body">
            <form role="form" id="save" @if(isset($RPVRIV)) action="{{ route('update_RPVRIV') }}" @else action="{{ route('addRPVRIV') }}" @endif method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="id_kegiatan" name="id_kegiatan" @if(isset($RPVRIV)) value="{{ $RPVRIV->id_kegiatan }}" @else @endif>
                <input type="hidden" id="user_id" name="user_id" @if(isset($RPVRIV)) value="{{ $RPVRIV->user_id }}" @else @endif>
                <div class="form-group row">
                    <label for="contact_person" class="col-sm-4 col-form-label">{{ __('Category') }}</label>
                      <div class="col-sm-8">
                          <select class="form-control select2" style="width: 100%;" id="jenis_kegiatan" required
                              name="jenis_kegiatan">
                              @if(isset($RPVRIV))
                              <option value="" disabled selected>Option Report</option>
                              <option value="Eksternal" {{  $RPVRIV->jenis_kegiatan == 'Eksternal' ? 'selected' : '' }}>Eksternal</option>
                              <option value="Finish Good" {{  $RPVRIV->jenis_kegiatan == 'Finish Good' ? 'selected' : '' }}>Finish Good</option>
                              <option value="Raw Material" {{  $RPVRIV->jenis_kegiatan == 'Raw Material' ? 'selected' : '' }}>Raw Material</option>
                              <option value="Mikrobiologi" {{  $RPVRIV->jenis_kegiatan == 'Mikrobiologi' ? 'selected' : '' }}>Mikrobiologi</option>
                              @else
                              <option value="" disabled selected>Option Report</option>
                              <option value="Eksternal" {{ $jenis_kegiatan == 'External' ? 'selected' : '' }}>Eksternal</option>
                              <option value="Finish Good" {{ $jenis_kegiatan == 'Finish Good' ? 'selected' : '' }}>Finish Good</option>
                              <option value="Raw Material" {{ $jenis_kegiatan == 'Raw Material' ? 'selected' : '' }}>Raw Material</option>
                              <option value="Mikrobiologi" {{ $jenis_kegiatan == 'Mikrobiologi' ? 'selected' : '' }}>Mikrobiologi</option>
                              @endif
                          </select>
                          @error('jenis_kegiatan')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="nama_item" class="col-sm-4 col-form-label">{{ __('Nama Item') }}</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_item" name="nama_item"  value="{{ $RPVRIV->nama_item ?? old('nama_item') }}" required> 
                    </div>
                </div>
                <br>
                <div class="form-group row">
                      <label for="pic" class="col-sm-4 col-form-label">{{ __('PIC') }}</label>
                      <div class="col-sm-8">
                          <select class="form-control select2" style="width: 100%;" id="pic" required
                              name="pic">
                              @if(isset($RPVRIV))
                                <option value="Rifan" {{ $RPVRIV->pic == 'Rifan' ? 'selected' : '' }}>Rifan</option>
                                <option value="Hesti" {{ $RPVRIV->pic == 'Hesti' ? 'selected' : '' }}>Hesti</option>
                                <option value="Alfi" {{ $RPVRIV->pic == 'Alfi' ? 'selected' : '' }}> Alfi</option>
                                <option value="Falma" {{ $RPVRIV->pic == 'Falma' ? 'selected' : '' }}>Falma</option>
                                <option value="Fahmi" {{ $RPVRIV->pic == 'Fahmi' ? 'selected' : '' }}>Fahmi</option>
                              @else
                              <option value="" disabled selected>PIC</option>
                              <option value="Rifan" >Rifan</option>
                              <option value="Hesti" >Hesti</option>
                              <option value="Alfi" > Alfi</option>
                              <option value="Falma">Falma</option>
                              <option value="Fahmi" >Fahmi</option>
                              @endif
                          </select>
                          @error('pic')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="rencana" class="col-sm-4 col-form-label">Rencana</label>
                    <div class="col-sm-8">
                        <select class="form-control multiple" name="rencana[]" multiple="multiple" required>
                            @if(isset($RPVRIV))
                            <option value="1" {{ in_array("1", explode(",",  $RPVRIV->rencana)) ? 'selected' : '' }}>January</option>
                            <option value="2"  {{ in_array("2", explode(",",  $RPVRIV->rencana)) ? 'selected' : '' }}>Febuary</option>
                            <option value="3"  {{ in_array("3", explode(",",  $RPVRIV->rencana)) ? 'selected' : '' }}>Maret</option>
                            <option value="4"  {{ in_array("4", explode(",",  $RPVRIV->rencana)) ? 'selected' : '' }}>April</option>
                            <option value="5"  {{ in_array("5", explode(",",  $RPVRIV->rencana)) ? 'selected' : '' }}>Mei</option>
                            <option value="6"  {{ in_array("6", explode(",",  $RPVRIV->rencana)) ? 'selected' : '' }}>Juni</option>
                            <option value="7"  {{ in_array("7", explode(",",  $RPVRIV->rencana)) ? 'selected' : '' }}>July</option>
                            <option value="8"  {{ in_array("8", explode(",",  $RPVRIV->rencana)) ? 'selected' : '' }}>Agustus</option>
                            <option value="9"  {{ in_array("9", explode(",",  $RPVRIV->rencana)) ? 'selected' : '' }}>September</option>
                            <option value="10"  {{ in_array("10", explode(",",  $RPVRIV->rencana)) ? 'selected' : '' }}>November</option>
                            <option value="11"  {{ in_array("11", explode(",",  $RPVRIV->rencana)) ? 'selected' : '' }}>Oktober</option>
                            <option value="12"  {{ in_array("12", explode(",",  $RPVRIV->rencana)) ? 'selected' : '' }}>Desember</option>
                            @else
                            <option value="1">January</option>
                            <option value="2" >Febuary</option>
                            <option value="3" >Maret</option>
                            <option value="4" >April</option>
                            <option value="5" >Mei</option>
                            <option value="6" >Juni</option>
                            <option value="7" >July</option>
                            <option value="8" >Agustus</option>
                            <option value="9" >September</option>
                            <option value="10" >November</option>
                            <option value="11" >Oktober</option>
                            <option value="12" >Desember</option>
                            @endif
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="aktual" class="col-sm-4 col-form-label">Aktual</label>
                    <div class="col-sm-8">
                        <select class="form-control multiple" name="aktual[]" multiple="multiple" required>
                            @if(isset($RPVRIV))
                            <option value="1" {{ in_array("1", explode(",",  $RPVRIV->aktual)) ? 'selected' : '' }}>January</option>
                            <option value="2"  {{ in_array("2", explode(",",  $RPVRIV->aktual)) ? 'selected' : '' }}>Febuary</option>
                            <option value="3"  {{ in_array("3", explode(",",  $RPVRIV->aktual)) ? 'selected' : '' }}>Maret</option>
                            <option value="4"  {{ in_array("4", explode(",",  $RPVRIV->aktual)) ? 'selected' : '' }}>April</option>
                            <option value="5"  {{ in_array("5", explode(",",  $RPVRIV->aktual)) ? 'selected' : '' }}>Mei</option>
                            <option value="6"  {{ in_array("6", explode(",",  $RPVRIV->aktual)) ? 'selected' : '' }}>Juni</option>
                            <option value="7"  {{ in_array("7", explode(",",  $RPVRIV->aktual)) ? 'selected' : '' }}>July</option>
                            <option value="8"  {{ in_array("8", explode(",",  $RPVRIV->aktual)) ? 'selected' : '' }}>Agustus</option>
                            <option value="9"  {{ in_array("9", explode(",",  $RPVRIV->aktual)) ? 'selected' : '' }}>September</option>
                            <option value="10"  {{ in_array("10", explode(",",  $RPVRIV->aktual)) ? 'selected' : '' }}>November</option>
                            <option value="11"  {{ in_array("11", explode(",",  $RPVRIV->aktual)) ? 'selected' : '' }}>Oktober</option>
                            <option value="12"  {{ in_array("12", explode(",",  $RPVRIV->aktual)) ? 'selected' : '' }}>Desember</option>
                        @else
                            <option value="1">January</option>
                            <option value="2" >Febuary</option>
                            <option value="3" >Maret</option>
                            <option value="4" >April</option>
                            <option value="5" >Mei</option>
                            <option value="6" >Juni</option>
                            <option value="7" >July</option>
                            <option value="8" >Agustus</option>
                            <option value="9" >September</option>
                            <option value="10" >November</option>
                            <option value="11" >Oktober</option>
                            <option value="12" >Desember</option>
                        @endif
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-4 col-form-label">{{ __('Keterangan') }}</label>
                    <div class="col-sm-8">
                        @if(isset($RPVRIV))
                            <textarea type="text"  class="form-control" id="keterangan" name="keterangan" placeholder="Masukan Keterangan" value="{{ $RPVRIV->keterangan}}">{{ $RPVRIV->keterangan}}</textarea>
                        @else
                        <textarea type="text"  class="form-control" id="keterangan" name="keterangan" placeholder="Masukan Keterangan"></textarea>
                        @endif
                        @error('keterangan')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
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

