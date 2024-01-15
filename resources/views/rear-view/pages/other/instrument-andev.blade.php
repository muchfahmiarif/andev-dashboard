@extends('rear-view.layouts.master')

@push('plugin-style')

@endpush

@section('content')
<div class="container">
  <div>
    <div class="mb-2 d-flex">
        <div>
            <h2 class="mb-0">Performance Instrument Andev</h2>
        </div>
        <div class="ms-auto">
            <div class="d-flex">
                <select class="form-select mx-2" aria-label="Default select example">
                    <option value="" disabled hidden selected>Pilih bulan...</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
                <select class="form-select mx-2" aria-label="Default select example">
                    <option value="" hidden hidden selected>Pilih tahun...</option>
                    <option value="1">2023</option>
                    <option value="2">2024</option>
                    <option value="3">2025</option>
                    <option value="4">2026</option>
                    <option value="5">2027</option>
                    <option value="6">2028</option>
                    <option value="7">2029</option>
                    <option value="8">2030</option>
                    <option value="9">2031</option>
                    <option value="10">2032</option>
                    <option value="11">2033</option>
                    <option value="12">2034</option>
                </select>
                <button class="btn btn-primary text-light">Terapkan</button>
            </div>
        </div>
    </div>
  </div>
  <div class="card mt-5">
    <div class="card-body">

      <table id="table-2" class="table table-hover border-primary">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col" class="text-center">Nama alat</th>
                                <th scope="col" class="text-center">No. Aset</th>
                                <th scope="col" class="text-center">Kalibrasi</th>
                                <th scope="col" class="text-center">Performa</th>
                                <th scope="col" class="text-center">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <td scope="row" class="text-center">1</td>
                                <td>Analytical Balance Sartorius SECURA 225D-1S</td>
                                <td>RD.TBD16.16</td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">
                                  Kondisi alat baik
                                  <button class="btn-sm">
                                    <i class="link-icon" data-feather="edit-3"></i>
                                  </button>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center">2</td>
                                <td>Analytical Balance Sartorius SECURA 225D-1S</td>
                                <td>RD.TBD17.19</td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">Kondisi alat baik</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center">3</td>
                                <td>Dissolution Tester Hanson Vision Elite 8</td>
                                <td>RD.DST01.12</td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">Kondisi alat baik</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center">4</td>
                                <td>Desintegration Tester Charles Ischi AG</td>
                                <td>RD.DSG01.15</td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">Kondisi alat baik</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center">5</td>
                                <td>KARL FISCHER Metrohm Type 870 KF Titrino Plus</td>
                                <td>RD.TTR01.15</td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">Kondisi alat baik</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center">6</td>
                                <td>Spectrofotometer Jasco-V650</td>
                                <td>RD.SPC01.07</td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">Kondisi alat baik</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center">7</td>
                                <td>Furnace Carbolite CWF 12-13</td>
                                <td>RD.FNC01.15</td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">Kondisi alat baik</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center">8</td>
                                <td>HPLC Waters Alliance 2695</td>
                                <td>RD.HPLC01.08</td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">Kondisi alat baik</td>
                            </tr>
    
                            <tr>
                                <td scope="row" class="text-center">9</td>
                                <td>HPLC Waters Alliance E 2695</td>
                                <td>RD.HPLC03.12</td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">Kondisi alat baik</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center">10</td>
                                <td>HPLC Waters Alliance E 2695</td>
                                <td>RD.HPLC05.16</td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">Kondisi alat baik</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center">11</td>
                                <td>HPLC Water Breeze 1525</td>
                                <td>RD.HPLC02.07</td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">Kondisi alat baik</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center">12</td>
                                <td>UHPLC Waters Acquity ARC System</td>
                                <td>RD.HPLC06.19</td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">Kondisi alat baik</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-center">13</td>
                                <td>pH meter Ohaus AQUASEARCHER™ a-AB41PH</td>
                                <td>RD.PHM06.23</td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">
                                  <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                  </select>
                                </td>
                                <td class="text-center">Kondisi alat baik</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col" class="text-center">Nama alat</th>
                                <th scope="col" class="text-center">No. Aset</th>
                                <th scope="col" class="text-center">Kalibrasi</th>
                                <th scope="col" class="text-center">Performa</th>
                                <th scope="col" class="text-center">Keterangan</th>
                            </tr>
                        </tfoot>
                    </table>

      <hr class="hr" />
      <h4 class="text-muted">Kesimpulan</h4>
      <div class="col-md-2">
        <table class="table table-hober border-primary">
          <thead>
            <tr>
                <th scope="col" class="text-center">Item</th>
                <th scope="col" class="text-center">Nilai</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <td scope="row">Point</td>
              <td class="text-center">23</td>
            </tr>
            <tr>
              <td scope="row">% Point</td>
              <td class="text-center">95%</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h4 class="text-muted mt-4">Keterangan</h4>
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
@endsection

@push('plugin-scripts')
  <script src="{{ asset('plugin/data-tables/dataTables.scroller.min.js') }}"></script>  
    <script src="{{ asset('plugin/data-tables/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('plugin/data-tables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugin/data-tables/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('plugin/data-tables/button/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugin/data-tables/button/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('plugin/data-tables/button/jszip.min.js') }}"></script>
    <script src="{{ asset('plugin/data-tables/button/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugin/data-tables/button/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugin/data-tables/button/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugin/data-tables/button/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugin/data-tables/button/buttons.colVis.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('js/dataTable.js') }}"></script>
@endpush