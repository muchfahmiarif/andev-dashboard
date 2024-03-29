<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description"
        content="Responsive Laravel Admin &amp; Dashboard Template based on Bootstrap 5 Documentation" />
    <meta name="author" content="Andev Dashboard" />
    <meta name="keywords" content="andev dashboard" />

    <title>Documentation | Andev Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/codemirror.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/theme/xq-light.min.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet" />
    <!-- End fonts -->

    <link rel="stylesheet" href="{{ asset('css/docs.css') }}" />

    <link rel="shortcut icon" href="{{ asset('ico/docs.png') }}" />
</head>

<body data-bs-spy="scroll" data-bs-target="#sidebarNav">
    <div class="main-wrapper">
        {{-- Sidebar Starts --}}
        <div class="sidebar max-vh-100">
            <div class="logo-wrapper px-4 py-3">
                <a href="#" class="noble-ui-logo d-block">Andev<span> Dashboard</span></a>
            </div>
            <ul class="nav flex-column my-4 d-flex flex-column" id="sidebarNav">
                <li class="nav-item">
                    <a class="nav-link" href="#introduction"> <i data-feather="home"></i> Perkenalan </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#fileStructure"> <i data-feather="file-text"></i> Struktur Dokumentasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#setupEnvironment"> <i data-feather="code"></i> Source Code </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#installation"> <i data-feather="sliders"></i> Installation steps </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#rtl"> <i data-feather="align-right"></i> RTL </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#dsh"> <i data-feather="grid"></i> Dark Sidebar/Header </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#credits"> <i data-feather="gift"></i> Credits </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#support"> <i data-feather="headphones"></i> Support </a>
                </li>
            </ul>
        </div>
        {{-- Sidebar Ends --}}

        <div id="introduction" class="page-content p-4 p-md-5 pb-0 pb-md-0">
            {{-- Introduction Starts --}}
            <div>
                <h1 class="h4 mt-5 mb-4 text-primary fw-semibold">
                    Andev Dashboard <span class="badge bg-secondary tx-12 ms-2" style="vertical-align: middle">v
                        2.2</span>
                </h1>
                <p class="">
                    Andev Dashboard adalah platform Andev secara digital yang menggunakan sistem web apps. Kunci utama
                    andev dashboard ini adalah untuk memudahkan melihat histori validasi metode kimia analis dan
                    mempermudah pengelolaan data hasil analisa. Jika ada pertanyaan atau masalah, silahkan hubungi <a
                        href="https://helpdesk.aryanoble.co.id/" target="_blank">team IT</a>.
                </p>
                <hr class="my-5" />
                <div class="grid-margin">
                    <h4 class="mb-4">Perkenalan</h4>
                    <p>
                        Andev Dashboard ada platform digital andev untuk tracking data histori validasi metode kimia
                        analisis, pengelolaan data hasil analisa dan masih banyak lagi. Kunci utama dari platform ini
                        untuk mempermudah sortir data agar data yang di dapat akurat dan mudah di akses. Pengembangan
                        aplikasi ini dilakukan oleh tim Andev dan IT Genero. Diharpkan dengan adanya aplikasi ini dapat
                        mempermudah pengelolaan data dan kerja menjadi efisien.
                    </p>
                </div>
            </div>
            {{-- Introductions Ends --}}

            {{-- File Structure Starts --}}
            <div>
                <hr class="my-5" id="fileStructure" />
                <div class="grid-margin">
                    <h4 class="mb-4"><abbr title="File Structure">What's include</abbr></h4>
                    <p>Andev Dashboard dibuat dengan stack laravel 9 dan menggunakan bootstrap ui serta auth. Berikut
                        stuktur dari aplikasi Andev Digital</p>
                    <textarea rows="4" cols="50" class="code-non-editable">
  andev-dashboard
  ├── app
              ├── Http/
                          ├── app/
                          ├── bootstrap/
                          ├── config/
                          ├── database/
                          ├── public/
                          ├── resources/
                                      ├── js/
                                      ├── lang/
                                      ├── sass/
                                      ├── views/
                                                  ├── layout/
                                                  ├── pages/
                                                  ├── dashboard.blade.php
                          ├── routes/
                          ├── storage/
                          ├── tests/
                          ├── public/
                          ├── .env.example
                          ├── .gitatributes
                          ├── .gitignore
                          ├── .styleci.yml
                          ├── artisan
                          ├── composer.json
                          ├── composer.lock
                          ├── package-lock.json
                          ├── package.json
                          ├── phpunit.xml
                          ├── readme.md
                          ├── server.php
                          ├── webpack.mix.js
              ├── demo2/                            ( Vertical Menu - Dark )
              ├── demo3/                            ( Horizontal Menu - Light )
              ├── demo4/                            ( Horizontal Menu - Dark )
  ├── documentation
          </textarea>
                    <p>Untuk gambaran diagram antar muka dapat dilihat dibawah ini</p>
                    <figure class="figure">
                        <img src="{{ asset('img/genero.webp') }}" class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption">A caption for the above image.</figcaption>
                    </figure>
                    <div>
                        <a
                            href="https://excalidraw.com/#room=4c489cd67d10f8aba82d,fNrZDqLdRIUkToCwpxcrEQ">https://excalidraw.com/</a>
                    </div>
                </div>
            </div>
            {{-- File Structure Ends --}}

            <div class="grid-margin">
                {{-- Setup Environment Starts --}}
                <hr class="my-5" id="setupEnvironment" />

                <h4 class="mb-4">Source Code</h4>
                <p>
                    Silahkan hubungi <a href="https://www.linkedin.com/in/muchfahmiarif/" target="_blank">Fahmi</a>
                    dan <a href="https://www.linkedin.com/in/muhammad-aglia-dwitama-8170b9163/"
                        target="_blank">Aglia</a> untuk mendapatkan source code.
                </p>
                {{-- Setup Environment Ends --}}

                {{-- Installation Steps Starts --}}
                <hr class="my-5" id="installation" />

                <h4 class="mb-4">Development Journey</h4>
                <p class="">Bagian development journey mencakup riwayat dari pengembangan metode analisa untuk
                    kategori produk jadi, mikrobiologi dan bahan baku. Riwayat pengembangan metode diurut berdasarkan
                    terbaru hingga yang lama.</p>
                <p class="mb-3">Untuk melihat detail pengembangan metode dapat klik pada judul pengembangan metode
                    dan akan terlihat detail deskripsi dan list dokumen dengan status dokumen</p>
                <p class="mb-3"><strong>1.</strong> Navigate to the project folder (demo1, demo2, demo3, or demo4)
                </p>
                <p class="mb-n2">Example:</p>
                <textarea rows="4" cols="50" class="code-non-editable">cd nobleui-laravel/template/demo1/</textarea>

                <p class="mt-n4"><strong>2.</strong> Install Composer dependencies:</p>
                <textarea rows="4" cols="50" class="code-non-editable">composer install</textarea>

                <p class="mt-n4"><strong>3.</strong> Install NPM dependencies:</p>
                <textarea rows="4" cols="50" class="code-non-editable">npm install</textarea>

                {{-- <p class="mb-3"><strong>4.</strong> Rename the <b>.env.example</b> file to <b>.env</b></p> --}}
                <p class="mb-3">
                    <strong>4.</strong> Copy <code>.env.example</code> file and create duplicate. Use <code>cp</code>
                    command for Linux or Mac user.
                </p>
                <textarea rows="4" cols="50" class="code-non-editable">cp .env.example .env</textarea>
                <p>If you are using Windows, use <code>copy</code> instead of <code>cp</code>.</p>
                <textarea rows="4" cols="50" class="code-non-editable">copy .env.example .env</textarea>

                <p class="mt-n4"><strong>5.</strong> Generate your application encryption key:</p>
                <textarea rows="4" cols="50" class="code-non-editable">php artisan key:generate</textarea>

                <p class="mt-n4"><strong>6.</strong> Start the localhost server:</p>
                <textarea rows="4" cols="50" class="code-non-editable">php artisan serve</textarea>
                <p>Then go to <a href="http://127.0.0.1:8000" target="_blank">http://127.0.0.1:8000</a></p>

                <br />
                <br />

                <h5>Now Need some Laravel Commands</h5>

                <div class="table-responsive mt-3">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Command</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>npm run watch</code></td>
                                <td>For watch files and compiles assets on the fly (also auto reloads browser).</td>
                            </tr>
                            <tr>
                                <td><code>npm run dev</code></td>
                                <td>For compile assets.</td>
                            </tr>
                            <tr>
                                <td><code>npm run prod</code></td>
                                <td>For compile and prepare assets for production.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    You need to know how laravel works in order to use this version. Check the
                    <a href="https://laravel.com/docs/9.x" target="_blank">Laravel official documentation</a>.
                </div>
                {{-- Installation Steps Ends --}}

                {{-- RTL Starts --}}
                <hr class="my-5" id="rtl" />

                <h4 class="mb-4">Right-to-Left (RTL)</h4>

                <p>
                    The RTL does not enabled by default. It can be easily setup with a <a href="https://rtlcss.com/"
                        target="_blank">RTLCSS</a> webpack
                    plugin.
                </p>

                <br />

                <h6><b>Generate RTL CSS:</b></h6>
                <p><strong>1.</strong> Open <code>[nobleui-laravel]/template/[demo]/</code> folder. Example "demo1".</p>
                {{-- <p class="mb-n2">Example: </p>
          <textarea rows="4" cols="50" class="code-non-editable mt-0">cd nobleui-laravel/template/demo1/</textarea> --}}

                <p><strong>2.</strong> Uncomment the following two lines in the webpack.mix.js file (~Line number 2 and
                    20 ).</p>
                <textarea rows="4" cols="50" class="code-non-editable mt-0">let RtlCssPlugin = require('rtlcss-webpack-plugin');</textarea>
                <textarea rows="4" cols="50" class="code-non-editable mt-0">new RtlCssPlugin()</textarea>

                <p><strong>3.</strong> Run npm script command to compile assets.</p>
                <textarea rows="4" cols="50" class="code-non-editable mt-0">npm run dev</textarea>
                <p class="mb-4">You will be able to get the bundle CSS with RTL by path:
                    <code>[demo]/public/css/app.rtl.css</code>.</p>

                <p>
                    <strong>4.</strong> Open the master.blade.php file from
                    <code>[demo]/resources/views/layout/master.blade.php</code>. Change the file path
                    to the RTL CSS path:
                </p>
                <ul class="mb-4">
                    <li>From: <code>&lt;link href="{{ asset('css/app.css') }}" rel="stylesheet" /&gt;</code></li>
                    <li>To RTL CSS: <code>&lt;link href="{{ asset('css/app.rtl.css') }}" rel="stylesheet" /&gt;</code>
                    </li>
                </ul>

                <p><strong>5.</strong> In the master.blade.php file, set <code>dir="rtl"</code> on the
                    <code>html</code> element.</p>
                <textarea rows="4" cols="50" class="code-non-editable"><html dir="rtl"></textarea>
                {{-- RTL Ends --}}

                <hr class="my-5" id="dsh" />
                <h4 class="mb-4">Dark Sidebar/Header</h4>
                <p class="mb-3">The Dark sidebar (in Demo1) &amp; Dark header (in Demo3) are does not enabled by
                    default.</p>
                <p class="mb-4">Add class to the <code>body</code> element as given below (in resources > views >
                    layout > master.blade.php).</p>
                <ul>
                    <li class="mb-2">For the dark sidebar (in Demo1), set <code>class="sidebar-dark"</code> on the
                        <code>body</code> element.</li>
                    <textarea rows="4" cols="50" class="code-non-editable"><body class="sidebar-dark"></textarea>
                    <li class="mb-2">For the dark header (in Demo3), set <code>class="navbar-dark"</code> on the
                        <code>body</code> element.</li>
                    <textarea rows="4" cols="50" class="code-non-editable"><body class="navbar-dark"></textarea>
                </ul>

                <hr class="my-5" id="credits" />

                <h4 class="mb-4">Credits</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Plugin</th>
                                <th>Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ace Editor</td>
                                <td><a href="https://ace.c9.io/" target="_blank">https://ace.c9.io/</a></td>
                            </tr>
                            <tr>
                                <td>Animate.css</td>
                                <td><a href="https://daneden.github.io/animate.css/"
                                        target="_blank">https://daneden.github.io/animate.css/</a></td>
                            </tr>
                            <tr>
                                <td>Apex Charts</td>
                                <td><a href="https://apexcharts.com/" target="_blank">https://apexcharts.com/</a></td>
                            </tr>
                            <tr>
                                <td>Bootstrap</td>
                                <td><a href="https://getbootstrap.com/" target="_blank">http://getbootstrap.com/</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bootstrap Max-length</td>
                                <td><a href="https://mimo84.github.io/bootstrap-maxlength/"
                                        target="_blank">http://mimo84.github.io/bootstrap-maxlength/</a></td>
                            </tr>
                            <tr>
                                <td>Chart.js</td>
                                <td><a href="https://www.chartjs.org/" target="_blank">https://www.chartjs.org/</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Codemirror</td>
                                <td><a href="https://codemirror.net/" target="_blank">https://codemirror.net/</a></td>
                            </tr>
                            <tr>
                                <td>Cropper.js</td>
                                <td><a href="https://github.com/fengyuanchen/cropperjs"
                                        target="_blank">https://github.com/fengyuanchen/cropperjs</a></td>
                            </tr>
                            <tr>
                                <td>Data Table</td>
                                <td><a href="https://datatables.net/" target="_blank">https://datatables.net/</a></td>
                            </tr>
                            <tr>
                                <td>Dropify</td>
                                <td><a href="https://github.com/JeremyFagis/dropify/"
                                        target="_blank">https://github.com/JeremyFagis/dropify/</a></td>
                            </tr>
                            <tr>
                                <td>Dropzone</td>
                                <td><a href="https://www.dropzonejs.com/"
                                        target="_blank">https://www.dropzonejs.com/</a></td>
                            </tr>
                            <tr>
                                <td>Feather Icons</td>
                                <td><a href="https://feathericons.com/" target="_blank">https://feathericons.com/</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Flatpickr</td>
                                <td><a href="https://flatpickr.js.org/" target="_blank">https://flatpickr.js.org/</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Flot Charts</td>
                                <td><a href="http://www.flotcharts.org/"
                                        target="_blank">http://www.flotcharts.org/</a></td>
                            </tr>
                            <tr>
                                <td>Full Calendar</td>
                                <td><a href="https://fullcalendar.io/" target="_blank">https://fullcalendar.io/</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Input Mask</td>
                                <td><a href="https://robinherbots.github.io/Inputmask/"
                                        target="_blank">https://robinherbots.github.io/Inputmask/</a></td>
                            </tr>
                            <tr>
                                <td>jQuery</td>
                                <td><a href="https://jquery.com/" target="_blank">https://jquery.com/</a></td>
                            </tr>
                            <tr>
                                <td>jQuery Sparklines</td>
                                <td>
                                    <a href="https://omnipotent.net/jquery.sparkline/#s-about"
                                        target="_blank">https://omnipotent.net/jquery.sparkline/#s-about</a>
                                </td>
                            </tr>
                            <tr>
                                <td>jQuery Steps</td>
                                <td><a href="http://www.jquery-steps.com/GettingStarted"
                                        target="_blank">http://www.jquery-steps.com/GettingStarted</a></td>
                            </tr>
                            <tr>
                                <td>jQuery Tags Input Plugin</td>
                                <td>
                                    <a href="https://www.npmjs.com/package/jquery-tags-input"
                                        target="_blank">https://www.npmjs.com/package/jquery-tags-input</a>
                                </td>
                            </tr>
                            <tr>
                                <td>jQuery Validation</td>
                                <td><a href="https://jqueryvalidation.org/"
                                        target="_blank">https://jqueryvalidation.org/</a></td>
                            </tr>
                            <tr>
                                <td>MDI Icons</td>
                                <td><a href="https://materialdesignicons.com/"
                                        target="_blank">https://materialdesignicons.com/</a></td>
                            </tr>
                            <tr>
                                <td>Moment js</td>
                                <td><a href="https://momentjs.com/" target="_blank">https://momentjs.com/</a></td>
                            </tr>
                            <tr>
                                <td>Owl Carousel 2</td>
                                <td><a href="https://owlcarousel2.github.io/OwlCarousel2/"
                                        target="_blank">https://owlcarousel2.github.io/OwlCarousel2/</a></td>
                            </tr>
                            <tr>
                                <td>Peity chart</td>
                                <td><a href="https://benpickles.github.io/peity/"
                                        target="_blank">https://benpickles.github.io/peity/</a></td>
                            </tr>
                            <tr>
                                <td>Perfect scrollbar</td>
                                <td>
                                    <a href="https://github.com/mdbootstrap/perfect-scrollbar"
                                        target="_blank">https://github.com/mdbootstrap/perfect-scrollbar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Pickr</td>
                                <td><a href="https://simonwep.github.io/pickr/"
                                        target="_blank">https://simonwep.github.io/pickr/</a></td>
                            </tr>
                            <tr>
                                <td>Popper Js</td>
                                <td><a href="https://popper.js.org/" target="_blank">https://popper.js.org/</a></td>
                            </tr>
                            <tr>
                                <td>Select 2</td>
                                <td><a href="https://select2.org/" target="_blank">https://select2.org/</a></td>
                            </tr>
                            <tr>
                                <td>Easy MDE</td>
                                <td><a href="https://github.com/Ionaru/easy-markdown-editor"
                                        target="_blank">https://github.com/Ionaru/easy-markdown-editor</a></td>
                            </tr>
                            <tr>
                                <td>Sweetalert 2</td>
                                <td><a href="https://sweetalert2.github.io/"
                                        target="_blank">https://sweetalert2.github.io/</a></td>
                            </tr>
                            <tr>
                                <td>TinyMCE</td>
                                <td><a href="https://www.tiny.cloud/" target="_blank">https://www.tiny.cloud/</a></td>
                            </tr>
                            <tr>
                                <td>Typeahead</td>
                                <td><a href="http://twitter.github.io/typeahead.js/"
                                        target="_blank">http://twitter.github.io/typeahead.js/</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <hr class="my-5" id="support" />

                <h4 class="mb-4">Support</h4>
                <p class="mb-2">
                    We are happy to help you. Please feel free to contact us through:
                    <a href="https://themeforest.net/item/nobleui-laravel-admin-template/25229169/support"
                        target="_blank">https://themeforest.net/item/nobleui-laravel-admin-template/25229169/support</a>
                    if you have any queries.
                </p>
                <!-- <p class="mb-2">We are happy to help you, thank you for report any bug/issue to our email <a href="https://themeforest.net/item/nobleui-laravel-admin-template/25229169/support" target="_blank">nobleui123@gmail.com</a>.</p> -->
                <p class="mb-5 pb-5">
                    If you liked our product, would you mind taking a few seconds to <b> write a review and ⭐️⭐️⭐️⭐️⭐️
                        rating </b> for us, please? It
                    means a lot to us. You can review the product from the
                    <a href="https://themeforest.net/downloads" target="_blank"> https://themeforest.net/downloads
                    </a> page.
                </p>

                <hr class="mt-5 mb-3" />
                <div class="d-flex  justify-content-between align-items-center">
                    <p class="mb-2">Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> <a href="https://fahmiarif.site" target="_blank">NobleUI</a>.
                    </p>
                    <p class="text-muted mb-1 mb-md-0">Handcrafted With<i class="mb-1 text-danger ms-1 icon-sm"
                            data-feather="heart"></i> by <a href="https://www.linkedin.com/in/muchfahmiarif/"
                            target="_blank">Fahmi</a> and <a
                            href="https://www.linkedin.com/in/muhammad-aglia-dwitama-8170b9163/"
                            target="_blank">Agi</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/codemirror.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="{{ asset('js/docs.js') }}"></script>
</body>

</html>
