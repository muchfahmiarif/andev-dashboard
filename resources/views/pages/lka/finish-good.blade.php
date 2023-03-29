@extends('layouts.master')

@push('plugin-style')
  <link rel="stylesheet" href="{{ asset('css/data-table/scroller.bootstrap5.min.css') }}">
@endpush

@section('content')
<nav class="hstack gap-3">
  <div class=" text-center ms-auto">
    <button class="btn btn-outline-primary">
      Add Lembar Kerja Analisa
    </button>
  </div>
</nav>

  <div class="container">
    <div class="card mt-5">
      <div class="card-body">
        <table id="example" class="table hover stripe" >
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nama Item</th>
              <th class="text-center">No. LKA</th>
              <th class="text-center">Tahun Terbit</th>
              <th class="text-center">Keterangan</th>
              <th class="text-center">Action</th>
              <th class="text-center">Timestamps</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="align-middle">1</td>
              <td class="align-middle">Glycerin</td>
              <td class="align-middle">J.001.A.23</td>
              <td class="align-middle">2019</td>
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
              <td class="align-middle">Glycerin</td>
              <td class="align-middle">J.001.A.23</td>
              <td class="align-middle">2019</td>
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
              <td class="align-middle">Glycerin</td>
              <td class="align-middle">J.001.A.23</td>
              <td class="align-middle">2019</td>
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
              <td class="align-middle">Glycerin</td>
              <td class="align-middle">J.001.A.23</td>
              <td class="align-middle">2019</td>
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
              <td class="align-middle">Glycerin</td>
              <td class="align-middle">J.001.A.23</td>
              <td class="align-middle">2019</td>
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
              <th class="text-center">Nama Item</th>
              <th class="text-center">No. LKA</th>
              <th class="text-center">Tahun Terbit</th>
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
  <script src="{{ asset('js/dataTableFix.js') }}"></script>
@endpush