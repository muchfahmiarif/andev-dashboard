@extends('front-view.layouts.master')

@push('plugin-style')

@endpush

@section('content')
    <div class="mb-2 d-flex">
        <div>
            <h2 class="mb-0">Compliance</h2>
        </div>
        <div class="ms-auto">
            <div class="d-flex">
                <select class="form-select mx-2" aria-label="Default select example">
                    <option selected>Pilih bulan...</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
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
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Data Compliance</h1>
            <div class="content">
                <table class="table table-hober border-primary">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center">Area</th>
                            <th scope="col" class="text-center">PIC</th>
                            <th scope="col" class="text-center">Nama alat</th>
                            <th scope="col" class="text-center">List item yang perlu di cek</th>
                            <th scope="col" class="text-center">Status</th>
                            <th scope="col" class="text-center">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td scope="row" class="text-center">1</td>
                            <td>Ruang Timbang</td>
                            <td>Daffa</td>
                            <td>Karl Fischer</td>
                            <td>Memastikan alat masih dalam status terkualifikasi dan terkalibrasi</td>
                            <td class="text-center">✔️ | ❌</td>
                            <td>NA</td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-center">2</td>
                            <td>Ruang Timbang</td>
                            <td>Daffa</td>
                            <td>Karl Fischer</td>
                            <td>Memastikan logsheet pemakaian karl fisher diisi setiap harinya jika digunakan</td>
                            <td class="text-center">✔️ | ❌</td>
                            <td>NA</td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-center">3</td>
                            <td>Ruang Timbang</td>
                            <td>Daffa</td>
                            <td>Karl Fischer</td>
                            <td>Memastikan ketersedian standar "Hydranal" untuk verifikasi Karl Ficher</td>
                            <td class="text-center">✔️ | ❌</td>
                            <td>NA</td>
                        </tr>
                        <tr>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-center">155</td>
                            <td>Bangunan dan Fasilitas</td>
                            <td>NA</td>
                            <td>Dinding / Langit - langit</td>
                            <td>Memastikan area dinding dan langit-langit lab Andev bersih dan terawat</td>
                            <td class="text-center">✔️ | ❌</td>
                            <td>NA</td>
                        </tr>
                    </tbody>
                </table>
                <h1 class="card-title mt-5">Kesimpulan</h1>
                <div class="col-md-2">
                    <table class="table table-hober border-primary">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Item</th>
                                <th scope="col" class="text-center">Nilai</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <td scope="row">Total Compliance</td>
                                <td class="text-center">142</td>
                            </tr>
                            <tr>
                                <td scope="row">% Compliance</td>
                                <td class="text-center">95%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h1 class="card-title mt-5">Keterangan</h1>
                <table>
                    <tr>
                        <td>✔️</td>
                        <td> : </td>
                        <td>Memenuhi</td>
                    </tr>
                    <tr>
                        <td>❌</td>
                        <td> : </td>
                        <td>Tidak Memenuhi</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')

@endpush

@push('custom-scripts')

@endpush