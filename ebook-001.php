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
                    <a class="link" href="#deskripsi">Deskripsi</a>
                </li>
                <li class="item">
                    <a class="link" href="#gambar">Gambar</a>
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
        <div class="header-content container text-center">
            <h1 class="header-title">
                <span class="down" style="font-size: 2.5rem;">Sistem E-Book SMP</span>
            </h1>
            <a href="index.php#portfolio" class="btn btn-secondary">Kembali</a>
            <a href="https://ebook-001.erinfn.my.id/" class="btn btn-primary" target="_blank">Demo Sistem</a>
        </div>
    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="deskripsi">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
                <div class="about-img-holder">
                    <img src="assets/imgs/E-Book.png" class="about-img" style="border: 2px solid #ffffff;"
                        alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div>
                <div class="about-caption">
                    <h2 class="section-title mb-3">Deskripsi</h2>
                    <p>
                        Website eBook merupakan sistem berbasis web yang dirancang untuk memudahkan pengguna dalam mencari, membaca,
                        dan mengelola buku digital secara online. Sistem ini memiliki dua jenis aktor utama, yaitu User Biasa dan Admin,
                        dengan hak akses dan fungsi yang berbeda sesuai perannya.
                    </p>
                    <p>
                        Website ini bertujuan untuk menyediakan platform digital yang terstruktur, mudah digunakan, serta efisien
                        dalam pengelolaan koleksi buku elektronik.
                    </p>
                </div>
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->



    <section id="aktor-sistem" class="container my-5">
        <h2 class="text-center mb-3">Aktor Sistem</h2>

        <!-- User Biasa -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h3>1. User Biasa</h3>
                <p>
                    User biasa adalah pengguna umum yang memanfaatkan website untuk membaca eBook.
                    Fitur yang tersedia bagi user biasa meliputi:
                </p>

                <h5 class="mt-4">🔎 Pencarian eBook</h5>
                <p>Pengguna dapat mencari buku berdasarkan:</p>
                <ul>
                    <li>Judul</li>
                    <li>Nama penulis</li>
                    <li>Kategori</li>
                    <li>Kata kunci tertentu</li>
                </ul>
                <p>
                    Fitur pencarian membantu pengguna menemukan buku dengan cepat dan efisien.
                </p>

                <h5 class="mt-4">📖 Melihat Detail eBook</h5>
                <p>User dapat melihat informasi lengkap dari sebuah eBook, seperti:</p>
                <ul>
                    <li>Judul buku</li>
                    <li>Penulis</li>
                    <li>Kategori</li>
                    <li>Deskripsi / Sinopsis</li>
                    <li>Cover buku</li>
                    <li>Informasi tambahan lainnya</li>
                </ul>

                <h5 class="mt-4">📚 Membaca eBook</h5>
                <p>
                    User dapat membaca eBook secara langsung melalui website tanpa perlu mengunduh file.
                    Sistem dapat menampilkan eBook dalam format PDF viewer atau reader online
                    agar nyaman digunakan.
                </p>
            </div>
        </div>

        <!-- Admin -->
        <div class="card shadow-sm">
            <div class="card-body">
                <h3>2. Admin</h3>
                <p>
                    Admin bertanggung jawab dalam pengelolaan konten dan data yang ada di dalam sistem.
                    Admin memiliki hak akses penuh terhadap manajemen eBook dan kategori.
                </p>

                <h5 class="mt-4">📘 Manajemen eBook (CRUD)</h5>
                <p>Admin dapat:</p>
                <ul>
                    <li>Menambahkan eBook baru (upload file, cover, isi data buku)</li>
                    <li>Mengubah data eBook (judul, deskripsi, kategori, dll.)</li>
                    <li>Menghapus eBook dari sistem</li>
                </ul>
                <p>
                    Fitur ini memastikan koleksi buku selalu terupdate dan relevan.
                </p>

                <h5 class="mt-4">🗂️ Manajemen Kategori (CRUD)</h5>
                <p>Admin juga dapat mengelola kategori buku, meliputi:</p>
                <ul>
                    <li>Menambahkan kategori baru</li>
                    <li>Mengubah nama kategori</li>
                    <li>Menghapus kategori</li>
                </ul>
                <p>
                    Dengan adanya pengelolaan kategori, sistem menjadi lebih terstruktur
                    dan memudahkan proses pencarian buku oleh user.
                </p>
            </div>
        </div>
    </section>

    <!-- portfolio section -->
    <section class="section" id="gambar">
        <div class="container text-center">
            <h6 class="section-title mb-6">Gambar</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-4">
                    <a href="https://ebook-001.erinfn.my.id/" class="portfolio-card">
                        <img src="assets/imgs/E-Book.png" class="portfolio-card-img"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Website E-Book</h4>
                                <p class="font-weight-normal">Category: Web Development</p>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://inventaris-001.erinfn.my.id/" class="portfolio-card">
                        <img class="portfolio-card-img" src="assets/imgs/inventaris.png" class="img-responsive rounded"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Inventaris Barang</h4>
                                <p class="font-weight-normal">Category: Web Development</p>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://sikdes-001.erinfn.my.id/" class="portfolio-card">
                        <img class="portfolio-card-img" src="assets/imgs/sikdes.png" class="img-responsive rounded"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Sistem Pencatatan Desa</h4>
                                <p class="font-weight-normal">Category: Web Development</p>
                            </span>
                        </span>
                    </a>
                </div>
            </div><!-- end of row -->
            <br>`
            <div class="row">
                <div class="col-md-4">
                    <a href="https://produksi-kue-001.erinfn.my.id/" class="portfolio-card">
                        <img src="assets/imgs/produksi-kue.png" class="portfolio-card-img"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Produksi Kue</h4>
                                <p class="font-weight-normal">Category: Web Development</p>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://ca.erinfn.my.id/" class="portfolio-card">
                        <img class="portfolio-card-img" src="assets/imgs/Absensi-SMP.png" class="img-responsive rounded"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Absensi SMP</h4>
                                <p class="font-weight-normal">Category: Web Development</p>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://alam-tasikmalaya.erinfn.my.id/" class="portfolio-card">
                        <img class="portfolio-card-img" src="assets/imgs/Virtual-Tour.png" class="img-responsive rounded"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Virtual Tour 360</h4>
                                <p class="font-weight-normal">Category: Web Development</p>
                            </span>
                        </span>
                    </a>
                </div>
            </div><!-- end of row -->
        </div><!-- end of container -->


    </section> <!-- end of portfolio section -->

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

</body>

</html>