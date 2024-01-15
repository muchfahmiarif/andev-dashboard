@extends('front-view.layouts.master')

@push('style')
<style>
    span.empty-box-blue {
        border: 1px solid transparent;
        border-radius: .2rem;
        width: 1.5rem;
        height: 0.7rem;
        display: inline-block;
        background-color: #5470c6;
    }
    span.empty-box-green {
        border: 1px solid transparent;
        border-radius: .2rem;
        width: 1.5rem;
        height: 0.7rem;
        display: inline-block;
        background-color: #9fe080;
    }
    span.empty-box-yellow {
        border: 1px solid transparent;
        border-radius: .2rem;
        width: 1.5rem;
        height: 0.7rem;
        display: inline-block;
        background-color: #ffdc60;
    }
</style>
@endpush

@push('head-script')
<script src="https://cdn.jsdelivr.net/npm/echarts@5.4.2/dist/echarts.min.js"></script>
@endpush

@section('content')
{{-- <div>
    <div class="alert alert-warning d-flex align-items-center" role="alert">
        🏗️ Under development
    </div>
</div> --}}
    <div class="mb-2 d-flex">
        <div>
            <h2 class="mb-0">Andev Dashboard</h2>
        </div>
        <div class="ms-auto">
            <div class="d-flex">
                <select class="form-select mx-2" aria-label="Default select example">
                    <option selected>Pilih tahun...</option>
                    <option value="1">2023</option>
                    <option value="2">2024</option>
                    <option value="3">2025</option>
                    <option value="4">2026</option>
                    <option value="5">2027</option>
                    <option value="6">2028</option>
                    <option value="7">2029</option>
                    <option value="8">2030</option>
                    <option value="9">2031</option>
                    <option value="10">2032</option>
                    <option value="11">2033</option>
                    <option value="12">2034</option>
                </select>
                <button class="btn btn-primary text-light">Terapkan</button>
            </div>
        </div>
    </div>

    {{-- Grafik 1 --}}
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Main 1</h1>
                <div class="content d-flex flex-wrap justify-content-center gap-3">
                    <div class="text-center">
                        <div id="output-analisa" class="d-flex "></div>
                        <div class="d-flex gap-2 justify-content-center ">
                            <a href="#" class="text-decoration-none text-muted"><span class="empty-box-blue"></span> Finish Good</a>
                            <a href="#" class="text-decoration-none text-muted"><span class="empty-box-green"></span> Finish Good</a>
                            <a href="#" class="text-decoration-none text-muted"><span class="empty-box-yellow"></span> Finish Good</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        {{-- Grafik 2 --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Main 2</h1>
                    <div class="content d-flex flex-wrap justify-content-center gap-3">
                        <div class="text-center">
                            <div id="output-riset-validasi" class="d-flex"></div>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-blue"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-green"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-yellow"></span> Finish Good</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Grafik 3 --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Main 2</h1>
                    <div class="content d-flex flex-wrap justify-content-center gap-3">
                        <div class="text-center">
                            <div id="output-lain" class="d-flex"></div>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-blue"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-green"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-yellow"></span> Finish Good</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        {{-- Grafik 5 --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Complience</h1>
                    <div class="content d-flex flex-wrap justify-content-center gap-3">
                        <div class="text-center">
                            <div id="main-complience" class="d-flex"></div>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-blue"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-green"></span> Finish Good</a>
                                <a href="#" class="text-decoration-none text-muted"><span class="empty-box-yellow"></span> Finish Good</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
{{-- Diagram Output Analisa --}}
<script type="text/javascript" src="{{ asset('js/diagram/output-andev-1.js') }}">
</script>

{{-- Diagram Riset dan Validasi --}}
<script type="text/javascript" src="{{ asset('js/diagram/output-andev-2.js') }}">
</script>

{{-- Diagram Dokumen --}}
<script type="text/javascript" src="{{ asset('js/diagram/output-andev-3.js') }}"></script>

{{-- Main Complience --}}
<script type="text/javascript" src="{{ asset('js/diagram/complience-statusInstrument.js') }}"></script>
@endpush
