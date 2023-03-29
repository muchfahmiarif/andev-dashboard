@extends('layouts.master')

@push('plugin-style')
  <link rel="stylesheet" href="{{ asset('css/data-table/scroller.bootstrap5.min.css') }}">
@endpush

@section('content')
<nav class="hstack gap-3">
  <div class=" text-center ms-auto">
    <button class="btn btn-primary">
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
              <th>No</th>
              <th>Nama Item</th>
              <th>No. LKA</th>
              <th>Tahun Terbit</th>
              <th>Keterangan</th>
              <th>Action</th>
              <th>Timestamps</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
              <td>Tidak ada keterangan</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
              <td>2 days ago</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Glycerin</td>
              <td>J.001.A.23</td>
              <td>2019</td>
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
              <th>Nama Item</th>
              <th>No. LKA</th>
              <th>Tahun Terbit</th>
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
  <script src="{{ asset('js/dataTableFix.js') }}"></script>
@endpush