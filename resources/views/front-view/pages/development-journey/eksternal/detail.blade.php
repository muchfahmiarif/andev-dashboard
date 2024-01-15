@extends('front-view.layouts.master')

@push('plugin-style')

@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ url('#') }}">Development Journey</a></li>
    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ url('/development-journey/finish-good') }}">Eksternal</a></li>
    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ url('/development-journey/finish-good') }}">Aza 20 Cream</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ 'BPO' }}</li> {{-- Dinamis sesuai nama judul --}}
  </ol>
</nav>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title mb-3">{{ 'BPO' }}</h6> {{-- Dinamis sesuai nama judul --}}
        <div class="accordion" id="FaqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Zat Aktif dalam Aza 20 Cream
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#FaqAccordion">
              <div class="accordion-body">
                Kandungan zat aktif dalam Aza 20 Cream adalah Azelaic Acid
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Sumber metode aza 20 cream
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#FaqAccordion">
              <div class="accordion-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-body">
        <h6 class="card-title">Data {{ 'BPO' }}</h6> {{-- Dinamis sesuai nama judul --}}
        {{-- <p class="text-muted mb-3">Add class <code>.table-bordered</code></p> --}}
        <div class="table-responsive pt-3">
          <table class="table table-hover align-middle">
            <thead class="text-center">
              <tr>
                <th>
                  #
                </th>
                <th>
                  Nama Dokumen
                </th>
                <th>
                  Progress
                </th>
                <th>
                  Keterangan
                </th>
                <th>
                  Download
                </th>
              </tr>
            </thead>
            <tbody class="table-group-divider text-center">
              <tr>
                <td>
                  1
                </td>
                <td class="text-start">
                  Laporan Validasi Aza 20 Cream
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 33%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div> {{-- 0 - 33% => danger --}}
                  </div>
                </td>
                <td>
                  Work In Progress
                </td>
                <td>
                  <button>
                    <a href="#">Get File</a>
                  </button>
                </td>
              </tr>
              <tr>
                <td>
                  2
                </td>
                <td class="text-start">
                  Perhitungan Validasi Aza 20 Cream
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 66%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  Work In Progress
                </td>
                <td>
                  <button>
                    <a href="#">Get File</a>
                  </button>
                </td>
              </tr>
              <tr>
                <td>
                  3
                </td>
                <td class="text-start">
                  Protokol Validasi Aza 20 Cream
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  Done
                </td>
                <td>
                  <button>
                    <a href="#">Get File</a>
                  </button>
                </td>
              </tr>
              <tr>
                <td>
                  4
                </td>
                <td class="text-start">
                  Riset Aza 20 Cream
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td>
                  Done
                </td>
                <td>
                  <button>
                    <a href="#">Get File</a>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  
</div>
@endsection

@push('plugin-scripts')

@endpush

@push('custom-scripts')

@endpush