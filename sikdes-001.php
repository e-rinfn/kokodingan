<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website project Erin Fajrin Nugraha - Software Engineer">
    <meta name="author" content="Devcrud">
    <title>DESKRIPSI WEBSITE</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/imgs/IlustrasiMe2.png">

    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="assets/css/meyawo.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="#">KOKODINGAN</a>
            <ul class="nav">
                <li class="item">
                    <a class="link" href="#home">Home</a>
                </li>

                <li class="item">
                    <a class="link" href="#gambar">Gambar</a>
                </li>
                <li class="item">
                    <a class="link" href="#fitur">Fitur</a>
                </li>
                <li class="item">
                    <a class="link" href="#contact">Contact</a>
                </li>
                <!-- <li class="item ml-md-3">
                    <a href="components.html" class="btn btn-primary">Components</a>
                </li> -->
            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>
    </nav><!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h1 class="header-title">
                <span class="down" style="font-size: 2.5rem;">Sistem Pencatatan Data Desa</span>
            </h1>
            <a href="index.php#portfolio" class="btn btn-secondary"><i class="ti-arrow-left"></i> Kembali</a>
            <a href="#gambar" class="btn btn-warning"><i class="ti-image"></i> Screenshot</a>
            <a href="https://sikdes-001.erinfn.my.id/" class="btn btn-primary" target="_blank"><i class="ti-world"></i> Demo Sistem</a>
        </div>
    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="deskripsi">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
                <div class="about-img-holder">
                    <img src="assets/imgs/sikdes.png" class="about-img" style="border: 2px solid #ffffff;"
                        alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div>
                <div class="about-caption">
                    <h2 class="section-title mb-3">Deskripsi</h2>
                    <p class="text-start">
                        Website Sistem Pencatatan Data Desa merupakan sistem berbasis web yang dirancang
                        untuk membantu pemerintah desa dalam mengelola dan mendokumentasikan data
                        administrasi desa secara terstruktur, terpusat, dan terdigitalisasi. Sistem ini
                        memudahkan proses pencatatan data kependudukan, kondisi rumah warga, informasi umum
                        desa, serta pengelolaan surat masuk dan surat keluar. Dengan adanya sistem ini, proses
                        administrasi desa menjadi lebih cepat, akurat, dan efisien. Website ini memiliki satu
                        aktor utama, yaitu Admin, yang memiliki hak akses penuh terhadap seluruh fitur sistem.
                    </p>
                </div>
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->

    <!-- portfolio section -->
    <section class="section" id="gambar">
        <div class="container text-center">
            <h6 class="section-title mb-6">Gambar Screenshot Sistem</h6>
            <ul class="nav nav-tabs justify-content-center mb-4" id="screenshotTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="desktop-tab" data-toggle="tab" href="#desktop" role="tab" aria-controls="desktop" aria-selected="true">Desktop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-tab" data-toggle="tab" href="#mobile" role="tab" aria-controls="mobile" aria-selected="false">Mobile</a>
                </li>
            </ul>
            <div class="tab-content" id="screenshotTabContent">

                <!-- Screenshot Desktop -->
                <div class="tab-pane fade show active" id="desktop" role="tabpanel" aria-labelledby="desktop-tab">
                    <!-- Screenshot desktop di sini -->
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Landing Page</h5>
                            <img src="assets/imgs/sikdes-001/landing.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="border: 2px solid #000;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/landing.png">
                        </div>
                    </div>

                    <hr>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Login</h5>
                            <img src="assets/imgs/sikdes-001/login.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="border: 2px solid #000;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/login.png">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Dashboard</h5>
                            <img src="assets/imgs/sikdes-001/dashboard.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="border: 2px solid #000;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/dashboard.png">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Data Kependudukan</h5>
                            <img src="assets/imgs/sikdes-001/daftar-penduduk.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="border: 2px solid #000;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/daftar-penduduk.png">
                        </div>
                    </div>

                    <hr>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Tambah Penduduk</h5>
                            <img src="assets/imgs/sikdes-001/tambah-data-penduduk.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="border: 2px solid #000;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/tambah-data-penduduk.png">
                        </div>
                    </div>


                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Data Kondisi Rumah</h5>
                            <img src="assets/imgs/sikdes-001/data-rumah.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="border: 2px solid #000;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/data-rumah.png">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Klasifikasi Penduduk</h5>
                            <img src="assets/imgs/sikdes-001/klasifikasi-penduduk.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="border: 2px solid #000;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/klasifikasi-penduduk.png">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Surat Masuk</h5>
                            <img src="assets/imgs/sikdes-001/surat-masuk.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="border: 2px solid #000;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/surat-masuk.png">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Surat Keluar</h5>
                            <img src="assets/imgs/sikdes-001/surat-keluar.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="border: 2px solid #000;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/surat-keluar.png">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Kontrol Panel</h5>
                            <img src="assets/imgs/sikdes-001/kontrol-panel.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="border: 2px solid #000;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/kontrol-panel.png">
                        </div>
                    </div>
                </div>

                <!-- Screenshot Mobile -->
                <div class="tab-pane fade" id="mobile" role="tabpanel" aria-labelledby="mobile-tab">
                    <!-- Screenshot mobile di sini -->
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Landing Page</h5>
                            <img src="assets/imgs/sikdes-001/mobile-landing.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="max-width: 300px;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/mobile-landing.png">
                        </div>
                    </div>

                    <hr>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Login</h5>
                            <img src="assets/imgs/sikdes-001/mobile-login.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="max-height: 400px;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/mobile-login.png">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Dashboard</h5>
                            <img src="assets/imgs/sikdes-001/mobile-dashboard.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="max-height: 400px;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/mobile-dashboard.png">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Data Kependudukan</h5>
                            <img src="assets/imgs/sikdes-001/mobile-data-penduduk.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="max-height: 400px;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/mobile-data-penduduk.png">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Tambah Penduduk</h5>
                            <img src="assets/imgs/sikdes-001/mobile-tambah-penduduk.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="max-height: 400px;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/mobile-tambah-penduduk.png">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Data Kondisi Rumah</h5>
                            <img src="assets/imgs/sikdes-001/mobile-kondisi-rumah.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="max-height: 400px;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/mobile-kondisi-rumah.png">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Klasifikasi Penduduk</h5>
                            <img src="assets/imgs/sikdes-001/mobile-klasifikasi-penduduk.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="max-height: 400px;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/mobile-klasifikasi-penduduk.png">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Surat Masuk</h5>
                            <img src="assets/imgs/sikdes-001/mobile-surat-masuk.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="max-height: 400px;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/mobile-surat-masuk.png">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Surat Keluar</h5>
                            <img src="assets/imgs/sikdes-001/mobile-surat-keluar.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="max-height: 400px;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/mobile-surat-keluar.png">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h5 class="mb-2">Kontrol Panel</h5>
                            <img src="assets/imgs/sikdes-001/mobile-kontrol-panel.png"
                                alt="Screenshot Sistem E-Book"
                                class="img-fluid rounded shadow mb-4"
                                style="max-height: 400px;"
                                data-toggle="modal"
                                data-target="#imgModal"
                                data-img="assets/imgs/sikdes-001/mobile-kontrol-panel.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end of portfolio section -->

    <!-- contact section -->
    <section class="section" id="fitur">
        <div class="container text-start">
            <h6 class="section-title mb-5">Fitur Pada Sistem</h6>

            <!-- User Biasa -->
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h3>Tujuan</h3>
                    <p>
                        Tujuan dari sistem pencatatan data desa ini adalah untuk menyediakan platform yang mudah diakses
                        bagi pengguna untuk mencari, membaca, dan mengelola data desa. Sistem ini bertujuan untuk:
                    </p>
                    <ul>
                        <li>Mempermudah akses membaca data desa</li>
                        <li>Menyediakan sistem manajemen data desa yang terorganisir</li>
                        <li>Mempermudah pencarian data penduduk</li>
                        <li>Mendukung transparansi dan efisiensi pelayanan desa</li>
                    </ul>
                </div>
            </div>

            <!-- Admin -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>Admin</h3>
                    <p>
                        Admin merupakan petugas atau perangkat desa yang bertanggung jawab dalam
                        mengelola seluruh data dan aktivitas pada sistem. Admin memiliki akses untuk
                        menambah, mengubah, menghapus, serta melihat seluruh data yang tersimpan dalam
                        sistem.
                    </p>

                    <h5 class="mt-4">👥 CRUD Data Kependudukan</h5>
                    <p>Admin dapat:</p>
                    <ul>
                        <li>Menambahkan data penduduk baru</li>
                        <li>Mengubah data penduduk yang sudah ada</li>
                        <li>Menghapus data penduduk</li>
                    </ul>
                    <p>
                        Fitur ini memastikan data penduduk selalu terupdate dan relevan.
                    </p>

                    <h5 class="mt-4">🏠 CRUD Data Kondisi Rumah</h5>
                    <p>Admin juga dapat mengelola data kondisi rumah, meliputi:</p>
                    <ul>
                        <li>Menambahkan data kondisi rumah baru</li>
                        <li>Mengubah data kondisi rumah yang sudah ada</li>
                        <li>Menghapus data kondisi rumah</li>
                    </ul>
                    <p>
                        Dengan adanya pengelolaan data kondisi rumah, sistem menjadi lebih terstruktur
                        dan memudahkan proses pencarian data rumah oleh user.
                    </p>

                    <h5 class="mt-4">🌳 CRUD Data Desa</h5>
                    <p>Admin dapat:</p>
                    <ul>
                        <li>Menambahkan desa baru</li>
                        <li>Mengubah data desa yang sudah ada</li>
                        <li>Menghapus data desa</li>
                    </ul>
                    <p>
                        Fitur ini memastikan data desa selalu terupdate dan relevan.
                    </p>

                    <h5 class="mt-4">📥 Input Surat Masuk</h5>
                    <p>Admin juga dapat mengelola data surat masuk, meliputi:</p>
                    <ul>
                        <li>Menambahkan data surat masuk baru</li>
                        <li>Mengubah data surat masuk yang sudah ada</li>
                        <li>Menghapus data surat masuk</li>
                    </ul>
                    <p>
                        Dengan adanya pengelolaan data surat masuk, sistem menjadi lebih terstruktur
                        dan memudahkan proses pencarian data surat masuk oleh user.
                    </p>

                    <h5 class="mt-4">📤 Input Surat Keluar</h5>
                    <p>Admin juga dapat mengelola data surat keluar, meliputi:</p>
                    <ul>
                        <li>Menambahkan data surat keluar baru</li>
                        <li>Mengubah data surat keluar yang sudah ada</li>
                        <li>Menghapus data surat keluar</li>
                    </ul>
                    <p>
                        Dengan adanya pengelolaan data surat keluar, sistem menjadi lebih terstruktur
                        dan memudahkan proses pencarian data surat keluar oleh user.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- contact section -->
    <section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle">How can you communicate?</p>
            <h6 class="section-title mb-5">Contact Me</h6>

            <a href="https://www.instagram.com/erinfajrinnugraha/"
                target="_blank"
                class="btn btn-outline-primary btn-lg rounded">
                <i class="ti ti-brand-instagram"></i> Contact via Instagram
            </a>

            <p class="mt-3 text-muted">
                Klik tombol di atas untuk menghubungi saya melalui Instagram
            </p>
        </div>
    </section>


    <!-- footer -->
    <div class="container">
        <footer class="footer">
            <!-- <p class="mb-0">Copyright
                <script>document.write(new Date().getFullYear())</script> &copy; <a
                    href="http://www.devcrud.com">DevCRUD</a> Distribution <a
                    href="https://themewagon.com">ThemeWagon</a>
            </p> -->
            <div class="social-links text-right m-auto ml-sm-auto">
                <a href="mailto:erinfajrinnugraha@gmail.com?subject=Halo&body=Hai Erin," class="link">
                    <i class="ti-google"></i>
                </a>
                <a href="https://www.instagram.com/erinfajrinnugraha/" target="_blank" class="link">
                    <i class="ti-instagram"></i>
                </a>

            </div>
        </footer>
    </div> <!-- end of page footer -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Meyawo js -->
    <script src="assets/js/meyawo.js"></script>

    <!-- Modal untuk preview gambar -->
    <div class="modal fade" id="imgModal" tabindex="-1" role="dialog" aria-labelledby="imgModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body text-center p-0">
                    <img id="modalImage" src="" class="img-fluid rounded" style="max-height:90vh;">
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#imgModal').on('show.bs.modal', function(event) {
            var img = $(event.relatedTarget);
            var src = img.data('img');
            var modal = $(this);
            modal.find('#modalImage').attr('src', src);
        });
    </script>

</body>

</html>