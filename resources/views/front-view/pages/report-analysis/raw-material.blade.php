@extends('front-view.layouts.master')

@push('plugin-style')
  <link rel="stylesheet" href="{{ asset('css/data-table/scroller.bootstrap5.min.css') }}">
@endpush

@section('content')
  <nav class="hstack gap-3">
    <div class="ms-auto">
      <button class="btn btn-outline-primary">
        Add Report
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
        <table id="example" class="table hover stripe align-midle" >
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">No. Permintaan Analisa</th>
              <th class="text-center">No. Laporan Analisa</th>
              <th class="text-center">Nama Item</th>
              <th class="text-center">Kategori</th>
              <th class="text-center">PIC</th>
              <th class="text-center">No. Bets</th>
              <th class="text-center">Bulan</th>
              <th class="text-center">Parameter</th>
              <th class="text-center">Storage</th>
              <th class="text-center">Tgl Masuk</th>
              <th class="text-center">Tgl Estimasi Selesai</th>
              <th class="text-center">Tgl Analisa</th>
              <th class="text-center">Tgl Selesai Analisa</th>
              <th class="text-center">Nama Analis</th>
              <th class="text-center">Download File</th>
              <th class="text-center">Status</th>
              <th class="text-center">Keterangan</th>
              <th class="text-center">Action</th>
              <th class="text-center">Timestamps</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="align-middle">1</td>
              <td class="align-middle">FG.001.A.23</td>
              <td class="align-middle">J.001.A.23</td>
              <td class="align-middle">Aza 20 Cream</td>
              <td class="align-middle">Obat</td>
              <td class="align-middle">Fahmi</td>
              <td class="align-middle">TJ112S</td>
              <td class="align-middle">B12</td>
              <td class="align-middle">ph, visko</td>
              <td class="align-middle">SK, SO</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">Wahyu</td>
              <td class="align-middle">Disini</td>
              <td class="align-middle">MS</td>
              <td class="align-middle">Tidak ada keterangan</td>
              <td>
                <a href="#" class="text-decoration-none btn btn-warning btn-sm"><i data-feather="edit" class="text-dark"></i></a>
                <button class="btn btn-danger btn-sm">
                  <i data-feather="trash" class="text-dark"></i>
                </button>
              </td>
              <td class="align-middle">2 days ago</td>
            </tr>
            <tr>
              <td class="align-middle">1</td>
              <td class="align-middle">FG.001.A.23</td>
              <td class="align-middle">J.001.A.23</td>
              <td class="align-middle">Aza 20 Cream</td>
              <td class="align-middle">Obat</td>
              <td class="align-middle">Fahmi</td>
              <td class="align-middle">TJ112S</td>
              <td class="align-middle">B12</td>
              <td class="align-middle">ph, visko</td>
              <td class="align-middle">SK, SO</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">Wahyu</td>
              <td class="align-middle">Disini</td>
              <td class="align-middle">MS</td>
              <td class="align-middle">Tidak ada keterangan</td>
              <td>
                <a href="#" class="text-decoration-none btn btn-warning btn-sm"><i data-feather="edit" class="text-dark"></i></a>
                <button class="btn btn-danger btn-sm">
                  <i data-feather="trash" class="text-dark"></i>
                </button>
              </td>
              <td class="align-middle">2 days ago</td>
            </tr>
            <tr>
              <td class="align-middle">1</td>
              <td class="align-middle">FG.001.A.23</td>
              <td class="align-middle">J.001.A.23</td>
              <td class="align-middle">Aza 20 Cream</td>
              <td class="align-middle">Obat</td>
              <td class="align-middle">Fahmi</td>
              <td class="align-middle">TJ112S</td>
              <td class="align-middle">B12</td>
              <td class="align-middle">ph, visko</td>
              <td class="align-middle">SK, SO</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">Wahyu</td>
              <td class="align-middle">Disini</td>
              <td class="align-middle">MS</td>
              <td class="align-middle">Tidak ada keterangan</td>
              <td>
                <a href="#" class="text-decoration-none btn btn-warning btn-sm"><i data-feather="edit" class="text-dark"></i></a>
                <button class="btn btn-danger btn-sm">
                  <i data-feather="trash" class="text-dark"></i>
                </button>
              </td>
              <td class="align-middle">2 days ago</td>
            </tr>
            <tr>
              <td class="align-middle">1</td>
              <td class="align-middle">FG.001.A.23</td>
              <td class="align-middle">J.001.A.23</td>
              <td class="align-middle">Aza 20 Cream</td>
              <td class="align-middle">Obat</td>
              <td class="align-middle">Fahmi</td>
              <td class="align-middle">TJ112S</td>
              <td class="align-middle">B12</td>
              <td class="align-middle">ph, visko</td>
              <td class="align-middle">SK, SO</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">Wahyu</td>
              <td class="align-middle">Disini</td>
              <td class="align-middle">MS</td>
              <td class="align-middle">Tidak ada keterangan</td>
              <td>
                <a href="#" class="text-decoration-none btn btn-warning btn-sm"><i data-feather="edit" class="text-dark"></i></a>
                <button class="btn btn-danger btn-sm">
                  <i data-feather="trash" class="text-dark"></i>
                </button>
              </td>
              <td class="align-middle">2 days ago</td>
            </tr>
            <tr>
              <td class="align-middle">1</td>
              <td class="align-middle">FG.001.A.23</td>
              <td class="align-middle">J.001.A.23</td>
              <td class="align-middle">Aza 20 Cream</td>
              <td class="align-middle">Obat</td>
              <td class="align-middle">Fahmi</td>
              <td class="align-middle">TJ112S</td>
              <td class="align-middle">B12</td>
              <td class="align-middle">ph, visko</td>
              <td class="align-middle">SK, SO</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">Wahyu</td>
              <td class="align-middle">Disini</td>
              <td class="align-middle">MS</td>
              <td class="align-middle">Tidak ada keterangan</td>
              <td>
                <a href="#" class="text-decoration-none btn btn-warning btn-sm"><i data-feather="edit" class="text-dark"></i></a>
                <button class="btn btn-danger btn-sm">
                  <i data-feather="trash" class="text-dark"></i>
                </button>
              </td>
              <td class="align-middle">2 days ago</td>
            </tr>
            <tr>
              <td class="align-middle">1</td>
              <td class="align-middle">FG.001.A.23</td>
              <td class="align-middle">J.001.A.23</td>
              <td class="align-middle">Aza 20 Cream</td>
              <td class="align-middle">Obat</td>
              <td class="align-middle">Fahmi</td>
              <td class="align-middle">TJ112S</td>
              <td class="align-middle">B12</td>
              <td class="align-middle">ph, visko</td>
              <td class="align-middle">SK, SO</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">Wahyu</td>
              <td class="align-middle">Disini</td>
              <td class="align-middle">MS</td>
              <td class="align-middle">Tidak ada keterangan</td>
              <td>
                <a href="#" class="text-decoration-none btn btn-warning btn-sm"><i data-feather="edit" class="text-dark"></i></a>
                <button class="btn btn-danger btn-sm">
                  <i data-feather="trash" class="text-dark"></i>
                </button>
              </td>
              <td class="align-middle">2 days ago</td>
            </tr>
            <tr>
              <td class="align-middle">1</td>
              <td class="align-middle">FG.001.A.23</td>
              <td class="align-middle">J.001.A.23</td>
              <td class="align-middle">Aza 20 Cream</td>
              <td class="align-middle">Obat</td>
              <td class="align-middle">Fahmi</td>
              <td class="align-middle">TJ112S</td>
              <td class="align-middle">B12</td>
              <td class="align-middle">ph, visko</td>
              <td class="align-middle">SK, SO</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">Wahyu</td>
              <td class="align-middle">Disini</td>
              <td class="align-middle">MS</td>
              <td class="align-middle">Tidak ada keterangan</td>
              <td>
                <a href="#" class="text-decoration-none btn btn-warning btn-sm"><i data-feather="edit" class="text-dark"></i></a>
                <button class="btn btn-danger btn-sm">
                  <i data-feather="trash" class="text-dark"></i>
                </button>
              </td>
              <td class="align-middle">2 days ago</td>
            </tr>
            <tr>
              <td class="align-middle">1</td>
              <td class="align-middle">FG.001.A.23</td>
              <td class="align-middle">J.001.A.23</td>
              <td class="align-middle">Aza 20 Cream</td>
              <td class="align-middle">Obat</td>
              <td class="align-middle">Fahmi</td>
              <td class="align-middle">TJ112S</td>
              <td class="align-middle">B12</td>
              <td class="align-middle">ph, visko</td>
              <td class="align-middle">SK, SO</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">Wahyu</td>
              <td class="align-middle">Disini</td>
              <td class="align-middle">MS</td>
              <td class="align-middle">Tidak ada keterangan</td>
              <td>
                <a href="#" class="text-decoration-none btn btn-warning btn-sm"><i data-feather="edit" class="text-dark"></i></a>
                <button class="btn btn-danger btn-sm">
                  <i data-feather="trash" class="text-dark"></i>
                </button>
              </td>
              <td class="align-middle">2 days ago</td>
            </tr>
            <tr>
              <td class="align-middle">1</td>
              <td class="align-middle">FG.001.A.23</td>
              <td class="align-middle">J.001.A.23</td>
              <td class="align-middle">Aza 20 Cream</td>
              <td class="align-middle">Obat</td>
              <td class="align-middle">Fahmi</td>
              <td class="align-middle">TJ112S</td>
              <td class="align-middle">B12</td>
              <td class="align-middle">ph, visko</td>
              <td class="align-middle">SK, SO</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">Wahyu</td>
              <td class="align-middle">Disini</td>
              <td class="align-middle">MS</td>
              <td class="align-middle">Tidak ada keterangan</td>
              <td>
                <a href="#" class="text-decoration-none btn btn-warning btn-sm"><i data-feather="edit" class="text-dark"></i></a>
                <button class="btn btn-danger btn-sm">
                  <i data-feather="trash" class="text-dark"></i>
                </button>
              </td>
              <td class="align-middle">2 days ago</td>
            </tr>
            <tr>
              <td class="align-middle">1</td>
              <td class="align-middle">FG.001.A.23</td>
              <td class="align-middle">J.001.A.23</td>
              <td class="align-middle">Aza 20 Cream</td>
              <td class="align-middle">Obat</td>
              <td class="align-middle">Fahmi</td>
              <td class="align-middle">TJ112S</td>
              <td class="align-middle">B12</td>
              <td class="align-middle">ph, visko</td>
              <td class="align-middle">SK, SO</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">01-Des-23</td>
              <td class="align-middle">Wahyu</td>
              <td class="align-middle">Disini</td>
              <td class="align-middle">MS</td>
              <td class="align-middle">Tidak ada keterangan</td>
              <td>
                <a href="#" class="text-decoration-none btn btn-warning btn-sm"><i data-feather="edit" class="text-dark"></i></a>
                <button class="btn btn-danger btn-sm">
                  <i data-feather="trash" class="text-dark"></i>
                </button>
              </td>
              <td class="align-middle">2 days ago</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">No. Permintaan Analisa</th>
              <th class="text-center">No. Laporan Analisa</th>
              <th class="text-center">Nama Item</th>
              <th class="text-center">Kategori</th>
              <th class="text-center">PIC</th>
              <th class="text-center">No. Bets</th>
              <th class="text-center">Bulan</th>
              <th class="text-center">Parameter</th>
              <th class="text-center">Storage</th>
              <th class="text-center">Tgl Masuk</th>
              <th class="text-center">Tgl Estimasi Selesai</th>
              <th class="text-center">Tgl Analisa</th>
              <th class="text-center">Tgl Selesai Analisa</th>
              <th class="text-center">Nama Analis</th>
              <th class="text-center">Download File</th>
              <th class="text-center">Status</th>
              <th class="text-center">Keterangan</th>
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