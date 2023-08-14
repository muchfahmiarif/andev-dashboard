@extends('front-view.layouts.master')

@push('plugin-style')

@endpush

@section('content')
  <nav class="hstack gap-3">
    <div class="ms-auto">
    </div>
    <div class="col-lg-2 text-center ">
      <label for="formFile" class="form-label">Nama Produk</label>
      <select class="form-select" aria-label="Default select example">
        <option value="1">Aza 20 Cream</option>
        <option value="2">Acnebenz Gel</option>
        <option value="3">Alopros Capsule</option>
        <option value="3">Celibris Cream</option>
      </select>
      <a href="#" class="btn btn-primary btn-sm text-white mt-2 d-block">Terapkan Item</a>
    </div>
  </nav>

  <div class="">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-bpo-tab" data-bs-toggle="tab" data-bs-target="#nav-bpo" type="button" role="tab" aria-controls="nav-bpo" aria-selected="true">BPO</button>
        <button class="nav-link" id="nav-adapalane-tab" data-bs-toggle="tab" data-bs-target="#nav-adapalane" type="button" role="tab" aria-controls="nav-adapalane" aria-selected="false">Adapalane</button>
        <button class="nav-link" id="nav-nipagin-tab" data-bs-toggle="tab" data-bs-target="#nav-nipagin" type="button" role="tab" aria-controls="nav-nipagin" aria-selected="false">Nipagin</button>
      </div>
    </nav>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade active show" id="nav-bpo" role="tabpanel" aria-labelledby="nav-bpo-tab">
                {{-- BPO --}}
                <div id="content">
                  <ul class="timeline">
                    <li class="event" data-date="2 Days Ago">
                      <div>
                        <div class="hstack">
                          <a class="title text-decoration-none" href="{{ url('/development-journey/finish-good/detail') }}">BPO ex Indokemika</a>
                          <p class="ms-auto badge bg-info">Mencari Literatur</p>
                        </div>
                        <p>Get here on time, it's first come first serve. Be late, get turned away.</p>
                      </div>
                    </li>
                    <li class="event" data-date="9 Month Ago">
                      <div>
                        <div class="hstack">
                          <a class="title text-decoration-none" href="{{ url('/development-journey/finish-good/detail') }}">BPO ex Global</a>
                          <p class="ms-auto badge bg-danger">Pending</p>
                        </div>
                        <p>Perubahan prosedur kerja sesuai USP 44 dan perubahan format dokumen</p>
                      </div>
                    </li>
                    <li class="event" data-date="Apr 2018">
                      <div>
                        <div class="hstack gap-3">
                          <a class="title text-decoration-none" href="{{ url('/development-journey/finish-good/detail') }}">BPO ex Alchem</a>
                          <p class="ms-auto badge bg-warning">Work In Progress</p>
                        </div>
                        <p>Perubahan prosedur kerja dan perubahan alat dari HPLC menjadi UPLC</p>
                      </div>
                    </li>
                    <li class="event" data-date="Apr 2015">
                      <div>
                        <div class="hstack gap-3">
                          <a class="title text-decoration-none" href="{{ url('/development-journey/finish-good/detail') }}">BPO</a>
                          <p class="ms-auto badge bg-success">Done</p>
                        </div>
                        <p>Pertama Terbit</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-adapalane" role="tabpanel" aria-labelledby="nav-adapalane-tab">
                {{-- Adapalene --}}
                <div id="content">
                  <ul class="timeline">
                    <li class="event" data-date="2 Days Ago">
                      <div>
                        <div class="hstack">
                          <a class="title text-decoration-none" href="{{ url('/development-journey/finish-good/detail') }}">Registration</a>
                          <p class="ms-auto badge bg-info">Mencari Literatur</p>
                        </div>
                        <p>Get here on time, it's first come first serve. Be late, get turned away.</p>
                      </div>
                    </li>
                    <li class="event" data-date="9 Month Ago">
                      <div>
                        <div class="hstack">
                          <a class="title text-decoration-none" href="{{ url('/development-journey/finish-good/detail') }}">Adapalene</a>
                          <p class="ms-auto badge bg-danger">Pending</p>
                        </div>
                        <p>Perubahan prosedur kerja sesuai USP 44 dan perubahan format dokumen</p>
                      </div>
                    </li>
                    <li class="event" data-date="Apr 2018">
                      <div>
                        <div class="hstack gap-3">
                          <a class="title text-decoration-none" href="{{ url('/development-journey/finish-good/detail') }}">Adapalene</a>
                          <p class="ms-auto badge bg-warning">Work In Progress</p>
                        </div>
                        <p>Perubahan prosedur kerja dan perubahan alat dari HPLC menjadi UPLC</p>
                      </div>
                    </li>
                    <li class="event" data-date="Apr 2015">
                      <div>
                        <div class="hstack gap-3">
                          <a class="title text-decoration-none" href="{{ url('/development-journey/finish-good/detail') }}">Adapalene</a>
                          <p class="ms-auto badge bg-success">Done</p>
                        </div>
                        <p>Pertama Terbit</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-nipagin" role="tabpanel" aria-labelledby="nav-nipagin-tab">
                {{-- Nipagin --}}
                <div id="content">
                  <ul class="timeline">
                    <li class="event" data-date="2 Days Ago">
                      <div>
                        <div class="hstack">
                          <a class="title text-decoration-none" href="{{ url('/development-journey/finish-good/detail') }}">Registration</a>
                          <p class="ms-auto badge bg-info">Mencari Literatur</p>
                        </div>
                        <p>Get here on time, it's first come first serve. Be late, get turned away.</p>
                      </div>
                    </li>
                    <li class="event" data-date="9 Month Ago">
                      <div>
                        <div class="hstack">
                          <a class="title text-decoration-none" href="#">Nipagin</a>
                          <p class="ms-auto badge bg-danger">Pending</p>
                        </div>
                        <p>Perubahan prosedur kerja sesuai USP 44 dan perubahan format dokumen</p>
                      </div>
                    </li>
                    <li class="event" data-date="Apr 2018">
                      <div>
                        <div class="hstack gap-3">
                          <a class="title text-decoration-none" href="#">Nipagin</a>
                          <p class="ms-auto badge bg-warning">Work In Progress</p>
                        </div>
                        <p>Perubahan prosedur kerja dan perubahan alat dari HPLC menjadi UPLC</p>
                      </div>
                    </li>
                    <li class="event" data-date="Apr 2015">
                      <div>
                        <div class="hstack gap-3">
                          <a class="title text-decoration-none" href="#">Nipagin</a>
                          <p class="ms-auto badge bg-success">Done</p>
                        </div>
                        <p>Pertama Terbit</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
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