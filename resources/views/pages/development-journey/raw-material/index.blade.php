@extends('layouts.master')

@push('plugin-style')
  
@endpush

@section('content')
<nav class="hstack gap-3">
  <div class="ms-auto">
  </div>
  <div class="col-lg-2 text-center ">
    <label for="formFile" class="form-label">Nama Bahan Baku</label>
    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
    <datalist id="datalistOptions">
      <option value="Tretinoin">
      <option value="Fusidic Acid">
      <option value="Minoxidil">
      <option value="Mometasone Furoate">
    </datalist>
    {{-- <select class="form-select" aria-label="Default select example">
      <option value="1">Tretinoin</option>
      <option value="2">Fusidic Acid</option>
      <option value="3">Minoxidil</option>
      <option value="3">Mometasone Furoate</option>
    </select> --}}
    <a href="#" class="btn btn-primary btn-sm text-white mt-2 d-block">Terapkan Item</a>
  </div>
</nav>

<div class="mt-3">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Timeline</h6>
          <div id="content">
            <ul class="timeline">
              <li class="event" data-date="2 Days Ago">
                <div>
                  <div class="hstack">
                    <a class="title text-decoration-none" href="{{ url('/development-journey/raw-material/detail') }}">Lorem, ipsum.</a>
                    <p class="ms-auto badge bg-info">Mencari Literatur</p>
                  </div>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure suscipit nostrum repellat, qui natus obcaecati pariatur doloribus quos voluptatibus debitis.</p>
                </div>
              </li>
              <li class="event" data-date="9 Month Ago">
                <div>
                  <div class="hstack">
                    <a class="title text-decoration-none" href="#">Minoxidil ex Global Calcium</a>
                    <p class="ms-auto badge bg-danger">Pending</p>
                  </div>
                  <p>Perubahan prosedur kerja sesuai USP 44 dan perubahan format dokumen</p>
                </div>
              </li>
              <li class="event" data-date="Apr 2021">
                <div>
                  <div class="hstack gap-3">
                    <a class="title text-decoration-none" href="#">Minoxidil</a>
                    <p class="ms-auto badge bg-warning">Work In Progress</p>
                  </div>
                  <p>Perubahan prosedur kerja dan perubahan alat dari HPLC menjadi UPLC</p>
                </div>
              </li>
              <li class="event" data-date="Apr 2019">
                <div>
                  <div class="hstack gap-3">
                    <a class="title text-decoration-none" href="#">Minoxidil</a>
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
@endsection

@push('plugin-scripts')

@endpush

@push('custom-scripts')

@endpush