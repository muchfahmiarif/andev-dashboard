@extends('rear-view.layouts.master')

@push('plugin-style')
@endpush

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">

                <h1>Hello World</h1>

                <table id="example" class="table table-hover align-midle ">
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
                            <td class="text-center">
                                <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                </select>
                            </td>
                            <td>NA</td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-center">2</td>
                            <td>Ruang Timbang</td>
                            <td>Daffa</td>
                            <td>Karl Fischer</td>
                            <td>Memastikan logsheet pemakaian karl fisher diisi setiap harinya jika digunakan</td>
                            <td class="text-center">
                                <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                </select>
                            </td>
                            <td>NA</td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-center">3</td>
                            <td>Ruang Timbang</td>
                            <td>Daffa</td>
                            <td>Karl Fischer</td>
                            <td>Memastikan ketersedian standar "Hydranal" untuk verifikasi Karl Ficher</td>
                            <td class="text-center">
                                <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                </select>
                            </td>
                            <td>NA</td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-center">4</td>
                            <td>....</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td class="text-center">
                                <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                </select>
                            </td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td scope="row" class="text-center">159</td>
                            <td>Bangunan dan Fasilitas</td>
                            <td>NA</td>
                            <td>Dinding / Langit - langit</td>
                            <td>Memastikan area dinding dan langit-langit lab Andev bersih dan terawat</td>
                            <td class="text-center">
                                <select name="cars" id="cars" class="p-1">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    <option value="true">✔️</option>
                                    <option value="false">❌</option>
                                </select>
                            </td>
                            <td>NA</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center">Area</th>
                            <th scope="col" class="text-center">PIC</th>
                            <th scope="col" class="text-center">Nama alat</th>
                            <th scope="col" class="text-center">List item yang perlu di cek</th>
                            <th scope="col" class="text-center">Status</th>
                            <th scope="col" class="text-center">Keterangan</th>
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
