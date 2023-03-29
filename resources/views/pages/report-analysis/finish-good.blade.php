@extends('layouts.master')

@push('plugin-style')
  <link rel="stylesheet" href="{{ asset('css/data-table/scroller.bootstrap5.min.css') }}">
@endpush

@section('content')
  <nav class="hstack gap-3">
    <div class="ms-auto">
      <button class="btn btn-primary">
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
    </div>
  </nav>

  <div class="container">
    <div class="card mt-5">
      <div class="card-body">
        <table id="example" class="table hover stripe" >
          <thead>
            <tr>
              <th>No</th>
              <th>No. Permintaan Analisa</th>
              <th>No. Laporan Analisa</th>
              <th>Nama Item</th>
              <th>Kategori</th>
              <th>PIC</th>
              <th>No. Bets</th>
              <th>Bulan</th>
              <th>Parameter</th>
              <th>Storage</th>
              <th>Tgl Masuk</th>
              <th>Tgl Estimasi Selesai</th>
              <th>Tgl Analisa</th>
              <th>Tgl Selesai Analisa</th>
              <th>Nama Analis</th>
              <th>Download File</th>
              <th>Status</th>
              <th>Keterangan</th>
              <th>Action</th>
              <th>Timestamps</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>FG.001.A.23</td>
              <td>J.001.A.23</td>
              <td>Aza 20 Cream</td>
              <td>Obat</td>
              <td>Fahmi</td>
              <td>TJ112S</td>
              <td>B12</td>
              <td>ph, visko</td>
              <td>SK, SO</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>Wahyu</td>
              <td>Disini</td>
              <td>MS</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>No. Permintaan Analisa</th>
              <th>No. Laporan Analisa</th>
              <th>Nama Item</th>
              <th>Kategori</th>
              <th>PIC</th>
              <th>No. Bets</th>
              <th>Bulan</th>
              <th>Parameter</th>
              <th>Storage</th>
              <th>Tgl Masuk</th>
              <th>Tgl Estimasi Selesai</th>
              <th>Tgl Analisa</th>
              <th>Tgl Selesai Analisa</th>
              <th>Nama Analis</th>
              <th>Download File</th>
              <th>Status</th>
              <th>Keterangan</th>
              <th>Action</th>
              <th>Timestamps</th>
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