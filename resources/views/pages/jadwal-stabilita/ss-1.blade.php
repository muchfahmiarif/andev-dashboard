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
              <th>Nama Produk</th>
              <th>No. Bets</th>
              <th>Tanggal Mulai Stabtest</th>
              <th>Tanggal Pemeriksaan</th>
              <th>Bulan Ke</th>
              <th>Kondisi</th>
              <th>Parameter</th>
              <th>Keterangan</th>
              <th>Formulator</th>
              <th>Analisa By</th>
              <th>Tanggal Jatuh Tempo</th>
              <th>Spek Pemerian</th>
              <th>Spek pH</th>
              <th>Spek Visko</th>
              <th>Spek BJ</th>
              <th>Hasil</th>
              <th>Action</th>
              <th>Timestamps</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Aza 20 Cream</td>
              <td>TC229S</td>
              <td>01-Des-23</td>
              <td>01-Des-23</td>
              <td>6</td>
              <td>SK, SO</td>
              <td>ph, visko</td>
              <td>Scale Up</td>
              <td>Saputf</td>
              <td>Andev</td>
              <td>01-Des-23</td>
              <td>Cairan, Kental, Tidak berwarna</td>
              <td>5,0 - 6,5</td>
              <td>15.000 – 45.000 cps
                Brookfield type RVDV II + pro, Sp. 06, 20 rpm, T:25 ± 0,5 ̊C, t : 1 menit</td>
              <td>Pendataan</td>
              <td></td>
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
              <th>Nama Produk</th>
              <th>No. Bets</th>
              <th>Tanggal Mulai Stabtest</th>
              <th>Tanggal Pemeriksaan</th>
              <th>Bulan Ke</th>
              <th>Kondisi</th>
              <th>Parameter</th>
              <th>Keterangan</th>
              <th>Formulator</th>
              <th>Analisa By</th>
              <th>Tanggal Jatuh Tempo</th>
              <th>Spek Pemerian</th>
              <th>Spek pH</th>
              <th>Spek Visko</th>
              <th>Spek BJ</th>
              <th>Hasil</th>
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