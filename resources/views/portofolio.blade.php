<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Portofolio Rasyidiin, mahasiswa Sistem Informasi yang membuat website dan antarmuka.">

    <title>Rasyidiin | Portofolio Laravel</title>

    @vite('resources/sass/app.scss')
</head>

<body class="portfolio-page">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky-top border-bottom py-3">
        <div class="container">

            <a class="navbar-brand"
               href="#home"
               aria-label="Kembali ke beranda">
                Rasyidiin
            </a>

            <button class="navbar-toggler border-0"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#menu"
                    aria-controls="menu"
                    aria-expanded="false"
                    aria-label="Buka navigasi">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <div class="navbar-nav ms-auto gap-lg-4">

                    <a class="nav-link" href="#home">
                        Beranda
                    </a>

                    <a class="nav-link" href="#about">
                        Tentang
                    </a>

                    <a class="nav-link" href="#projects">
                        Proyek
                    </a>

                    <a class="nav-link" href="#contact">
                        Kontak
                    </a>

                </div>
            </div>

        </div>
    </nav>


    <!-- HOME -->
    <header id="home">
        <div class="container py-5">

            <div class="row g-5 align-items-center py-lg-4">

                <div class="col-lg-6 order-2 order-lg-1">

                    <p class="text-secondary mb-3">
                        Mahasiswa Sistem Informasi, Surabaya
                    </p>

                    <h1 class="hero-title mb-4">
                        Rasyidiin
                    </h1>

                    <p class="lead-text mb-4">
                        Saya membuat website dan antarmuka
                        yang rapi, responsif, dan mudah dipakai.
                    </p>

                    <a href="#projects"
                       class="btn btn-ink me-2 mb-2">
                        Lihat proyek
                    </a>

                    <a href="#about"
                       class="btn btn-outline-dark mb-2">
                        Tentang saya
                    </a>

                </div>

                <div class="col-lg-6 order-1 order-lg-2">

                    <img
                        class="hero-photo rounded-4"
                        src="{{ Vite::asset('resources/images/portfolio/foto-rasyidiin.jpg') }}"
                        alt="Foto Rasyidiin"
                    >

                </div>

            </div>
        </div>
    </header>


    <!-- ABOUT -->
    <section class="about-section py-5" id="about">
        <div class="container py-md-5">

            <div class="row g-5">

                <div class="col-md-5">

                    <h2 class="section-title">
                        Halo, saya Rasyid.
                    </h2>

                </div>

                <div class="col-md-7 col-lg-6 offset-lg-1">

                    <p class="fs-5">
                        Saya mahasiswa S1 Sistem Informasi
                        di Telkom University Surabaya.
                        Saya belajar membuat website
                        dengan cara langsung membangunnya,
                        dari tampilan sampai interaksinya.
                    </p>

                    <dl class="facts border-top pt-4 mt-4 mb-0 row">

                        <dt class="col-sm-4">Kuliah</dt>
                        <dd class="col-sm-8">
                            Sistem Informasi,
                            Telkom University Surabaya
                        </dd>

                        <dt class="col-sm-4">Fokus</dt>
                        <dd class="col-sm-8">
                            Kuliah, ngopi dan healing
                        </dd>

                        <dt class="col-sm-4">Hobi</dt>
                        <dd class="col-sm-8">
                            Mendaki, memasak dan memancing
                        </dd>

                    </dl>

                </div>

            </div>
        </div>
    </section>


    <!-- PROJECTS -->
    <section class="py-5" id="projects">
        <div class="container py-md-5">

            <h2 class="section-title mb-2">
                Proyek saya
            </h2>

            <p class="text-secondary mb-5">
                Dua proyek web, masing-masing bisa dibuka.
            </p>

            <div class="row g-5">

                <!-- MCLAREN -->
                <div class="col-lg-6">

                    <article class="project position-relative">

                        <div class="frame rounded-3 mb-3">

                            <img
                                class="project-image-mclaren"
                                src="{{ Vite::asset('resources/images/portfolio/mclaren.png') }}"
                                alt="Halaman utama website McLaren"
                                loading="lazy"
                            >

                        </div>

                        <h3 class="h3 fw-semibold mb-1">

                            <a
                                class="title-link stretched-link"
                                href="https://msadyarasyidiin.github.io/McLAREN/"
                                target="_blank"
                                rel="noopener noreferrer">

                                McLaren Website

                            </a>

                        </h3>

                        <p class="mb-2">
                            Landing page otomotif dengan
                            tampilan sinematik, meniru gaya
                            situs merek mobil sport.
                        </p>

                        <p class="stack mb-0">
                            Dibuat dengan HTML dan CSS
                        </p>

                    </article>

                </div>


                <!-- KALKULATOR -->
                <div class="col-lg-6">

                    <article class="project position-relative">

                        <div class="frame rounded-3 mb-3">

                            <img
                                class="project-image-contain"
                                src="{{ Vite::asset('resources/images/portfolio/kalkulator.png') }}"
                                alt="Aplikasi Kalkulator Rasyid"
                                loading="lazy"
                            >

                        </div>

                        <h3 class="h3 fw-semibold mb-1">

                            <a
                                class="title-link stretched-link"
                                href="https://msadyarasyidiin.github.io/kalkulator/"
                                target="_blank"
                                rel="noopener noreferrer">

                                Kalkulator Rasyid

                            </a>

                        </h3>

                        <p class="mb-2">
                            Kalkulator di browser dengan tombol
                            hapus, persen, dan tampilan
                            hasil sementara.
                        </p>

                        <p class="stack mb-0">
                            Dibuat dengan HTML, CSS,
                            dan JavaScript
                        </p>

                    </article>

                </div>

            </div>
        </div>
    </section>


    <!-- CONTACT -->
    <section class="contact py-5" id="contact">

        <div class="container py-md-5">

            <h2 class="section-title mb-3">
                Mari terhubung.
            </h2>

            <p class="fs-5 muted mb-4 contact-lead">
                Kode proyek-proyek saya ada di GitHub.
                Monggo dilihat, beri masukan,
                atau info project bareng.
            </p>

            <a
                class="btn btn-light me-2 mb-2"
                href="https://github.com/msadyarasyidiin"
                target="_blank"
                rel="noopener noreferrer">

                <i class="bi bi-github me-2"></i>
                Buka GitHub

            </a>

            <a
                class="btn btn-outline-light mb-2"
                href="{{ url('/routing') }}">

                <i class="bi bi-arrow-left me-2"></i>
                Kembali ke Routing

            </a>

        </div>


        <!-- FOOTER -->
        <footer class="container border-top border-secondary pt-4
                       d-flex flex-wrap justify-content-between
                       small muted gap-2">

            <span>© 2026 Rasyidiin</span>

            <span>
                Dibuat dengan Laravel, Vite dan Bootstrap 5
            </span>

        </footer>

    </section>

    @vite('resources/js/app.js')

</body>
</html>
