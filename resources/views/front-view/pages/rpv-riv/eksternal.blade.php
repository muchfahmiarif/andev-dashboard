@extends('front-view.layouts.master')

@push('plugin-style')
@endpush

@section('content')
  <div class="">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex">
            <h1 class="card-title">Home</h1>
            <div class="ms-auto d-flex align-items-center">
              <p class="align-self-center mb-0 px-2">Find </p>
              <input type="text" class="form-control" placeholder="Search">
            </div>
          </div>
          <div class="content d-flex flex-wrap justify-content-center">
            <div class="row pt-5">
              <div class="col-sm-6 my-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="ms-auto badge bg-info">Mencari Literatur</p>
                    </div>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam corrupti repellendus est saepe distinctio quibusdam eligendi aut optio nulla, necessitatibus esse tempore asperiores quia! Illum natus quis, pariatur iure maxime corporis ipsum velit fugit officiis assumenda, molestiae nihil laborum nobis eius aperiam nisi vel porro molestias nulla aut optio cumque fugiat recusandae! Praesentium ratione, provident distinctio placeat, expedita nihil ipsa soluta corporis sint accusantium accusamus beatae odio consequuntur fugiat fugit laboriosam. Tempore eos reiciendis debitis officiis ad at obcaecati odio aliquid, repellat, mollitia deserunt doloribus. Tempora, sunt. Distinctio quidem odit, quo labore beatae sed ratione veritatis et maxime. Atque, quo?</p>
                    <div class="pb-3 text-muted">
                      <div class="d-flex">
                        <p class="me-1 text-start mb-0">Planning</p>
                        <p class="ms-3 mb-0">: <span>Januari 2023</span></p>
                      </div>
                      <div class="d-flex">
                        <p class="me-3 text-start mb-0">Aktual</p>
                        <p class="ms-3 mb-0">: <span>Maret 2023</span></p>
                      </div>
                    </div>
                    <a href="{{ url('/development-journey/eksternal') }}" class="btn btn-primary text-light">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 my-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="ms-auto badge bg-success">Done</p>
                    </div>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <div class="pb-3 text-muted">
                      <div class="d-flex">
                        <p class="me-1 text-start mb-0">Planning</p>
                        <p class="ms-3 mb-0">: <span>Januari 2023</span></p>
                      </div>
                      <div class="d-flex">
                        <p class="me-3 text-start mb-0">Aktual</p>
                        <p class="ms-3 mb-0">: <span>Maret 2023</span></p>
                      </div>
                    </div>
                    <a href="{{ url('/development-journey/eksternal') }}" class="btn btn-primary text-light">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 my-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="ms-auto badge bg-success">Done</p>
                    </div>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <div class="pb-3 text-muted">
                      <div class="d-flex">
                        <p class="me-1 text-start mb-0">Planning</p>
                        <p class="ms-3 mb-0">: <span>Januari 2023</span></p>
                      </div>
                      <div class="d-flex">
                        <p class="me-3 text-start mb-0">Aktual</p>
                        <p class="ms-3 mb-0">: <span>Maret 2023</span></p>
                      </div>
                    </div>
                    <a href="{{ url('/development-journey/eksternal') }}" class="btn btn-primary text-light">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 my-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="ms-auto badge bg-success">Done</p>
                    </div>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <div class="pb-3 text-muted">
                      <div class="d-flex">
                        <p class="me-1 text-start mb-0">Planning</p>
                        <p class="ms-3 mb-0">: <span>Januari 2023</span></p>
                      </div>
                      <div class="d-flex">
                        <p class="me-3 text-start mb-0">Aktual</p>
                        <p class="ms-3 mb-0">: <span>Maret 2023</span></p>
                      </div>
                    </div>
                    <a href="{{ url('/development-journey/eksternal') }}" class="btn btn-primary text-light">Go somewhere</a>
                  </div>
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