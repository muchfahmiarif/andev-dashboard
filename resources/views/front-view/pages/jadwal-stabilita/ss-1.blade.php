@extends('front-view.layouts.master')

@push('plugin-style')
  <link rel="stylesheet" href="{{ asset('css/data-table/scroller.bootstrap5.min.css') }}">
@endpush

@section('content')
  <nav class="hstack gap-3">
    <div class="ms-auto">
      <button class="btn btn-outline-primary">
        Upload File
      </button>
    </div>
    <div class="vr"></div>
    <div class="col-lg-1 text-center ">
      <label for="formFile" class="form-label">Bulan</label>
      <select class="form-select" aria-label="Default select example">
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="3">April</option>
        <option value="3">Mei</option>
        <option value="3">Juni</option>
        <option value="3">Juli</option>
        <option value="3">Agustus</option>
        <option value="3">September</option>
        <option value="3">Oktober</option>
        <option value="3">November</option>
        <option value="3">Desember</option>
      </select>
      <a href="#" class="btn btn-primary btn-sm text-white mt-2 d-block">Terapkan Bulan</a>
    </div>
    <div class="vr"></div>
    <div class="col-lg-1 text-center">
      <label for="formFile" class="form-label">Tahun</label>
      <select class="form-select " aria-label="Default select example">
        <option value="1">2023</option>
        <option value="2">2024</option>
        <option value="3">2025</option>
        <option value="3">2026</option>
        <option value="3">2027</option>
        <option value="3">2028</option>
        <option value="3">2029</option>
        <option value="3">2030</option>
      </select>
      <a href="#" class="btn btn-primary btn-sm text-white mt-2 d-block">Terapkan Tahun</a>
    </div>
  </nav>

  <div class="container">
    <div class="card mt-5">
      <div class="card-body">
        <table id="example" class="table hover stripe" >
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nama Produk</th>
              <th class="text-center">No. Bets</th>
              <th class="text-center">Tanggal Mulai Stabtest</th>
              <th class="text-center">Tanggal Pemeriksaan</th>
              <th class="text-center">Bulan Ke</th>
              <th class="text-center">Kondisi</th>
              <th class="text-center">Parameter</th>
              <th class="text-center">Keterangan</th>
              <th class="text-center">Formulator</th>
              <th class="text-center">Analisa By</th>
              <th class="text-center">Tanggal Jatuh Tempo</th>
              <th class="text-center">Spek Pemerian</th>
              <th class="text-center">Spek pH</th>
              <th class="text-center">Spek Visko</th>
              <th class="text-center">Spek BJ</th>
              <th class="text-center">Hasil</th>
              <th class="text-center">Action</th>
              <th class="text-center">Timestamps</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="align-center">1</td>
              <td class="align-center">Aza 20 Cream</td>
              <td class="align-center">TC229S</td>
              <td class="align-center">01-Des-23</td>
              <td class="align-center">01-Des-23</td>
              <td class="align-center">6</td>
              <td class="align-center">SK, SO</td>
              <td class="align-center">ph, visko</td>
              <td class="align-center">Scale Up</td>
              <td class="align-center">Saputf</td>
              <td class="align-center">Andev</td>
              <td class="align-center">01-Des-23</td>
              <td class="align-center">Cairan, Kental, Tidak berwarna</td>
              <td class="align-center">5,0 - 6,5</td>
              <td class="align-center">15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td class="align-center">Pendataan</td>
              <td class="align-center">...</td>
              <td>
                <a href="#" class="text-decoration-none btn btn-warning btn-sm"><i data-feather="edit" class="text-dark"></i></a>
                <button class="btn btn-danger btn-sm">
                  <i data-feather="trash" class="text-dark"></i>
                </button>
              </td>
              <td class="align-center">2 days ago</td>
            </tr>
            <tr>
              <td class="align-center">1</td>
              <td class="align-center">Aza 20 Cream</td>
              <td class="align-center">TC229S</td>
              <td class="align-center">01-Des-23</td>
              <td class="align-center">01-Des-23</td>
              <td class="align-center">6</td>
              <td class="align-center">SK, SO</td>
              <td class="align-center">ph, visko</td>
              <td class="align-center">Scale Up</td>
              <td class="align-center">Saputf</td>
              <td class="align-center">Andev</td>
              <td class="align-center">01-Des-23</td>
              <td class="align-center">Cairan, Kental, Tidak berwarna</td>
              <td class="align-center">5,0 - 6,5</td>
              <td class="align-center">15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td class="align-center">Pendataan</td>
              <td class="align-center">...</td>
              <td>
                <a href="#" class="text-decoration-none btn btn-warning btn-sm"><i data-feather="edit" class="text-dark"></i></a>
                <button class="btn btn-danger btn-sm">
                  <i data-feather="trash" class="text-dark"></i>
                </button>
              </td>
              <td class="align-center">2 days ago</td>
            </tr>
            <tr>
              <td class="align-center">1</td>
              <td class="align-center">Aza 20 Cream</td>
              <td class="align-center">TC229S</td>
              <td class="align-center">01-Des-23</td>
              <td class="align-center">01-Des-23</td>
              <td class="align-center">6</td>
              <td class="align-center">SK, SO</td>
              <td class="align-center">ph, visko</td>
              <td class="align-center">Scale Up</td>
              <td class="align-center">Saputf</td>
              <td class="align-center">Andev</td>
              <td class="align-center">01-Des-23</td>
              <td class="align-center">Cairan, Kental, Tidak berwarna</td>
              <td class="align-center">5,0 - 6,5</td>
              <td class="align-center">15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td class="align-center">Pendataan</td>
              <td class="align-center">...</td>
              <td>
                <a href="#" class="text-decoration-none btn btn-warning btn-sm"><i data-feather="edit" class="text-dark"></i></a>
                <button class="btn btn-danger btn-sm">
                  <i data-feather="trash" class="text-dark"></i>
                </button>
              </td>
              <td class="align-center">2 days ago</td>
            </tr>
            <tr>
              <td class="align-center">1</td>
              <td class="align-center">Aza 20 Cream</td>
              <td class="align-center">TC229S</td>
              <td class="align-center">01-Des-23</td>
              <td class="align-center">01-Des-23</td>
              <td class="align-center">6</td>
              <td class="align-center">SK, SO</td>
              <td class="align-center">ph, visko</td>
              <td class="align-center">Scale Up</td>
              <td class="align-center">Saputf</td>
              <td class="align-center">Andev</td>
              <td class="align-center">01-Des-23</td>
              <td class="align-center">Cairan, Kental, Tidak berwarna</td>
              <td class="align-center">5,0 - 6,5</td>
              <td class="align-center">15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td class="align-center">Pendataan</td>
              <td class="align-center">...</td>
              <td>
                <a href="#" class="text-decoration-none btn btn-warning btn-sm"><i data-feather="edit" class="text-dark"></i></a>
                <button class="btn btn-danger btn-sm">
                  <i data-feather="trash" class="text-dark"></i>
                </button>
              </td>
              <td class="align-center">2 days ago</td>
            </tr>
            <tr>
              <td class="align-center">1</td>
              <td class="align-center">Aza 20 Cream</td>
              <td class="align-center">TC229S</td>
              <td class="align-center">01-Des-23</td>
              <td class="align-center">01-Des-23</td>
              <td class="align-center">6</td>
              <td class="align-center">SK, SO</td>
              <td class="align-center">ph, visko</td>
              <td class="align-center">Scale Up</td>
              <td class="align-center">Saputf</td>
              <td class="align-center">Andev</td>
              <td class="align-center">01-Des-23</td>
              <td class="align-center">Cairan, Kental, Tidak berwarna</td>
              <td class="align-center">5,0 - 6,5</td>
              <td class="align-center">15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td class="align-center">Pendataan</td>
              <td class="align-center">...</td>
              <td>
                <a href="#" class="text-decoration-none btn btn-warning btn-sm"><i data-feather="edit" class="text-dark"></i></a>
                <button class="btn btn-danger btn-sm">
                  <i data-feather="trash" class="text-dark"></i>
                </button>
              </td>
              <td class="align-center">2 days ago</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nama Produk</th>
              <th class="text-center">No. Bets</th>
              <th class="text-center">Tanggal Mulai Stabtest</th>
              <th class="text-center">Tanggal Pemeriksaan</th>
              <th class="text-center">Bulan Ke</th>
              <th class="text-center">Kondisi</th>
              <th class="text-center">Parameter</th>
              <th class="text-center">Keterangan</th>
              <th class="text-center">Formulator</th>
              <th class="text-center">Analisa By</th>
              <th class="text-center">Tanggal Jatuh Tempo</th>
              <th class="text-center">Spek Pemerian</th>
              <th class="text-center">Spek pH</th>
              <th class="text-center">Spek Visko</th>
              <th class="text-center">Spek BJ</th>
              <th class="text-center">Hasil</th>
              <th class="text-center">Action</th>
              <th class="text-center">Timestamps</th>
            </tr>
          </tfoot>
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