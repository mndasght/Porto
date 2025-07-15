<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Interaktif | Amanda Sugihanto</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #007bff;
            /* Biru cerah sebagai aksen */
            --secondary-color: #6c757d;
            --background-light: #ffffff;
            --background-soft: #f8f9fa;
            --text-dark: #212529;
            --text-light: #6c757d;
            --shadow-sm: 0 4px 15px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 8px 25px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 12px 35px rgba(0, 0, 0, 0.15);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-light);
            color: var(--text-dark);
            scroll-behavior: smooth;
        }

        /* --- Custom Cursor --- */
        .custom-cursor {
            position: fixed;
            width: 20px;
            height: 20px;
            border: 2px solid var(--primary-color);
            border-radius: 50%;
            pointer-events: none;
            transform: translate(-50%, -50%);
            transition: all 0.1s ease;
            z-index: 9999;
        }

        .custom-cursor.hover {
            width: 40px;
            height: 40px;
            background-color: rgba(0, 123, 255, 0.2);
        }

        @media (max-width: 768px) {
            .custom-cursor {
                display: none;
                /* Sembunyikan kursor kustom di mobile */
            }
        }

        /* --- Scroll Progress Bar --- */
        #scroll-progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: var(--primary-color);
            width: 0%;
            z-index: 1040;
            /* Di atas navbar */
            transition: width 0.1s ease-out;
        }

        /* --- Perbaikan untuk Gambar Profil --- */
        .profile-image {
            aspect-ratio: 1 / 1;
            /* Membuat wadah gambar menjadi persegi */
            width: 100%;
            /* Lebar mengisi kontainer kolomnya */
            object-fit: cover;
            /* Penting: Memotong gambar agar pas tanpa distorsi */
            border-radius: 50%;
            /* Membuatnya menjadi lingkaran */
        }

        /* --- Link Portofolio --- */
        a.portfolio-link,
        a.portfolio-link:hover {
            text-decoration: none;
            /* Menghapus garis bawah */
            color: inherit;
            /* Menggunakan warna teks dari parent-nya */
        }


        /* --- Navbar --- */
        .navbar {
            background-color: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-sm);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: 700;
        }

        .nav-link {
            font-weight: 500;
            color: var(--text-light) !important;
            position: relative;
            padding-bottom: 5px;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 50%;
        }

        .nav-link.active {
            color: var(--text-dark) !important;
        }

        /* --- Hero Section --- */
        #beranda {
            background-color: var(--background-soft);
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        #beranda h1 {
            font-size: 2.5rem;
            font-weight: 700;
        }

        #beranda .lead {
            font-size: 1.2rem;
            color: var(--text-light);
        }

        #typewriter .cursor {
            display: inline-block;
            width: 3px;
            height: 2.5rem;
            background-color: var(--primary-color);
            animation: blink 0.7s infinite;
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }

        /* --- Section Styling --- */
        section {
            padding: 100px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            font-weight: 700;
            font-size: 2.5rem;
            position: relative;
        }

        /* --- Riwayat Section (Pendidikan & Pengalaman) --- */
        .riwayat-title {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 10px;
        }

        .riwayat-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: var(--primary-color);
            border-radius: 2px;
        }

        .riwayat-item {
            padding: 0 0 20px 25px;
            border-left: 2px solid #e4e4e4;
            position: relative;
            margin-left: 10px;
        }

        .riwayat-item:last-child {
            padding-bottom: 0;
        }

        .riwayat-item::before {
            content: '';
            position: absolute;
            left: -11px;
            top: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--background-light);
            border: 2px solid var(--primary-color);
        }

        .riwayat-item h4 {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .riwayat-item h5 {
            font-size: 0.9rem;
            background: rgba(0, 123, 255, 0.1);
            display: inline-block;
            padding: 5px 15px;
            border-radius: 50px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .riwayat-item p,
        .riwayat-item ul {
            margin-bottom: 0;
            color: var(--text-light);
        }

        .riwayat-item ul {
            padding-left: 20px;
        }

        .riwayat-item ul li {
            margin-bottom: 5px;
        }


        /* --- Portfolio Section --- */
        #portfolio-filter button {
            background-color: transparent;
            border: 1px solid #ddd;
            color: var(--text-light);
            padding: 8px 20px;
            margin: 5px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        #portfolio-filter button.active,
        #portfolio-filter button:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }

        .portfolio-item {
            transition: transform 0.3s ease, opacity 0.3s ease;
            cursor: pointer;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-md);
        }

        .card-img-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .card:hover .card-img-overlay {
            opacity: 1;
        }

        /* --- Skills Section --- */
        .progress {
            height: 10px;
            border-radius: 5px;
            background-color: #e9ecef;
        }

        /* --- Animation on Scroll --- */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- Footer --- */
        footer {
            background-color: var(--background-soft);
        }

        footer .social-icons a {
            font-size: 1.5rem;
            color: var(--text-light);
            transition: color 0.3s ease;
        }

        footer .social-icons a:hover {
            color: var(--primary-color);
        }

        /* Responsive Adjustments */
        @media (min-width: 992px) {
            #beranda h1 {
                font-size: 3.5rem;
            }

            #beranda .lead {
                font-size: 1.5rem;
            }

            #typewriter .cursor {
                height: 3.5rem;
            }
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-portfolio">

    <div class="custom-cursor"></div>
    <div id="scroll-progress-bar"></div>

    <!-- Navbar -->
    <nav id="navbar-portfolio" class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Amanda Sugihanto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#riwayat">Riwayat</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portofolio">Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 id="typewriter">Halo, saya Amanda Sugihanto<span class="cursor"></span></h1>
                    <p class="lead my-4">Mahasiswa Teknik Informatika dengan minat besar di bidang pengembangan web dan
                        pemrograman. Berpengalaman menggunakan berbagai bahasa pemrograman seperti HTML, CSS, Java,
                        JavaScript, PHP, dan C++. Terampil dalam menggunakan framework Laravel dan Bootstrap, serta
                        mengelola versi kode dengan Git dan melakukan pengujian menggunakan Postman.</p>
                    <a href="#portofolio" class="btn btn-primary btn-lg rounded-pill px-4">Lihat Karya Saya</a>
                </div>
                <div class="col-lg-5 d-none d-lg-block text-center">
                    <img src="{{ asset('images/1.jpeg') }}" class="profile-image shadow-lg"
                        alt="Foto profil Amanda Sugihanto">
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Saya Section -->
    <section id="tentang" class="bg-white">
        <div class="container">
            <h2 class="section-title reveal">Tentang & Keahlian</h2>
            <div class="row align-items-center">
                <div class="col-lg-4 text-center mb-4 mb-lg-0 reveal">
                    <img src="{{ asset('images/1.jpeg') }}" class="profile-image shadow-sm mx-auto"
                        style="max-width: 250px;" alt="Foto Amanda Sugihanto">
                </div>
                <div class="col-lg-8 reveal">
                    <p class="text-secondary">
                        Memiliki pemahaman kuat tentang basis data MySQL dan PostgreSQL, serta terbiasa melakukan
                        debugging, unit testing, dan penanganan error. Terbiasa membuat dokumentasi teknis seperti UML
                        dan flowchart. Mampu bekerja dalam tim dan memiliki inisiatif serta kemampuan problem solving
                        yang baik.
                    </p>
                    <p class="text-secondary">
                        Saya selalu antusias untuk mempelajari hal-hal baru dan berkolaborasi dalam tim untuk
                        menciptakan produk digital yang luar biasa.
                    </p>
                    <h4 class="mb-3 mt-4">Keahlian Saya:</h4>
                    <div class="mb-3">
                        <span>HTML, CSS, & Bootstrap</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" data-width="95%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <span>JavaScript & Java</span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" data-width="85%">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <span>PHP & Laravel</span>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 0%;" data-width="90%">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <span>MySQL & PostgreSQL</span>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 0%;" data-width="88%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Riwayat Section (Pendidikan & Pengalaman) -->
    <section id="riwayat" class="bg-light">
        <div class="container">
            <h2 class="section-title reveal">Riwayat Saya</h2>
            <div class="row">
                <!-- Kolom Pendidikan -->
                <div class="col-lg-6">
                    <div class="reveal">
                        <h3 class="riwayat-title">Pendidikan</h3>
                        <div class="riwayat-item">
                            <h4>Sarjana Teknik Informatika</h4>
                            <h5>2023 - Now</h5>
                            <p><em>Universitas Dian Nuswantoro, PSDKU Kediri</em></p>
                            <p>Fokus pada pengembangan perangkat lunak, kecerdasan buatan, dan rekayasa web.</p>
                        </div>
                        <div class="riwayat-item">
                            <h4>SMK Negeri 4 Bojonegoro</h4>
                            <h5>2020 - 2023</h5>
                            <p><em>Rekayasa Perangkat Lunak</em></p>
                        </div>
                    </div>
                </div>
                <!-- Kolom Pengalaman -->
                <div class="col-lg-6">
                    <div class="reveal">
                        <h3 class="riwayat-title">Pengalaman Kerja</h3>
                        <div class="riwayat-item">
                            <h4>Software Enginer Intern</h4>
                            <h5>Januari 2022 - Juni 2022</h5>
                            <p><em>PT RetGoo Sentris Informa, Malang</em></p>
                            <ul>
                                <li>
                                    Bertanggung jawab dalam merancang dan membangun aplikasi web yang responsif dan
                                    fungsional.
                                </li>
                                <li>Melakukan pengujian sistem seperti unit testing dan debugging untuk memastikan
                                    aplikasi berjalan stabil.</li>
                                <li>Mendesain dan mengimplmenetasikan API untuk mendukung komunikasi antara frontend dan
                                    backend.</li>
                                <li>Mengelola struktur, query, dan optimasi database PostgreSQL untuk mendukung performa
                                    aplikasi. </li>
                                <li>Mengelola alur kerja proyek, kolaborasi tim, serta pelacakan versi kode menggunakan
                                    Git dan platform GitHub.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Portofolio Section -->
    <section id="portofolio" class="bg-white">
        <div class="container">
            <h2 class="section-title reveal">Portofolio</h2>
            <div id="portfolio-filter" class="text-center mb-5 reveal">
                <button class="btn active" data-filter="all">Semua</button>
                <button class="btn" data-filter="webapp">Web App</button>
                <button class="btn" data-filter="desain">Desain</button>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 portfolio-item" data-category="webapp">
                    <a href="https://github.com/mndasght86/Employees" target="_blank" class="portfolio-link">
                        <div class="card text-white">
                            <img src="{{ asset('images/image1.png') }}" class="card-img"
                                alt="Proyek 1">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Sistem Manajemen HR</h5>
                                <p class="card-text">Dibuat dengan Laravel, bootstrap, CSS, JS, Menggunakan PostgreSQL
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 portfolio-item" data-category="webapp">
                    <a href="https://github.com/mndasght86/Manajemen-Sampah" target="_blank" class="portfolio-link">
                        <div class="card text-white">
                            <img src="{{ asset('images/image2.png') }}" class="card-img"
                                alt="Proyek 2">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Sistem Manajemen Pengelolaan Sampah</h5>
                                <p class="card-text">Dibuat dengan Laravel, bootstrap, CSS, JS, Menggunakan PostgreSQL
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Tambahkan proyek lain di sini dengan data-category yang sesuai -->
            </div>
        </div>
    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="bg-light">
        <div class="container">
            <h2 class="section-title reveal">Hubungi Saya</h2>
            <div class="row">
                <div class="col-md-8 mx-auto reveal">
                    <p class="text-center mb-4 text-secondary">Punya pertanyaan atau ingin bekerja sama? Jangan ragu
                        untuk mengirimkan pesan kepada saya.</p>
                    <!-- Formulir Kontak yang Diperbarui -->
                    <form id="contact-form" action="https://formspree.io/f/xdkdoaev" method="POST">
                        <div class="mb-3">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap"
                                required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Alamat Email"
                                required>
                        </div>
                        <div class="mb-3">
                            <textarea name="pesan" class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary rounded-pill px-5">Kirim Pesan</button>
                        </div>
                    </form>
                    <!-- Div untuk menampilkan status formulir -->
                    <div id="form-status" class="text-center mt-3"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4">
        <div class="container text-center">
            <div class="social-icons mb-3">
                <a href="https://github.com/mndasght86" target="_blank" class="mx-2" aria-label="GitHub"><i
                        class="bi bi-github"></i></a>
                <a href="#" class="mx-2" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.instagram.com/mndasght_?igsh=ajNpNzgwcWtyd2Jw" target="_blank" class="mx-2"
                    aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            </div>
            <p class="text-secondary mb-0">&copy; 2025 Amanda Sugihanto. Dibuat dengan <i
                    class="bi bi-heart-fill text-danger"></i>.</p>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS for Interactivity -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // --- Kursor Kustom ---
            const cursor = document.querySelector('.custom-cursor');
            if (cursor) {
                window.addEventListener('mousemove', e => {
                    cursor.style.top = e.clientY + 'px';
                    cursor.style.left = e.clientX + 'px';
                });
                document.querySelectorAll('a, button, .portfolio-item').forEach(el => {
                    el.addEventListener('mouseover', () => cursor.classList.add('hover'));
                    el.addEventListener('mouseout', () => cursor.classList.remove('hover'));
                });
            }

            // --- Progress Bar Scroll ---
            const progressBar = document.getElementById('scroll-progress-bar');
            if (progressBar) {
                window.addEventListener('scroll', () => {
                    const scrollTotal = document.documentElement.scrollHeight - document.documentElement
                        .clientHeight;
                    const scrollPercent = (window.scrollY / scrollTotal) * 100;
                    progressBar.style.width = scrollPercent + '%';
                });
            }

            // --- Efek Typewriter ---
            const typewriterElement = document.getElementById('typewriter');
            if (typewriterElement) {
                const text = typewriterElement.childNodes[0].nodeValue;
                typewriterElement.childNodes[0].nodeValue = '';
                let i = 0;

                function typeWriter() {
                    if (i < text.length) {
                        typewriterElement.childNodes[0].nodeValue += text.charAt(i);
                        i++;
                        setTimeout(typeWriter, 100);
                    }
                }
                typeWriter();
            }

            // --- Filter Portofolio ---
            const filterContainer = document.querySelector('#portfolio-filter');
            const portfolioItems = document.querySelectorAll('.portfolio-item');
            if (filterContainer) {
                filterContainer.addEventListener('click', (e) => {
                    if (e.target.tagName === 'BUTTON') {
                        filterContainer.querySelector('.active').classList.remove('active');
                        e.target.classList.add('active');
                        const filterValue = e.target.getAttribute('data-filter');

                        portfolioItems.forEach(item => {
                            item.style.transform = 'scale(0.9)';
                            item.style.opacity = '0';
                            setTimeout(() => {
                                if (item.getAttribute('data-category') === filterValue ||
                                    filterValue === 'all') {
                                    item.style.display = 'block';
                                    setTimeout(() => {
                                        item.style.transform = 'scale(1)';
                                        item.style.opacity = '1';
                                    }, 50);
                                } else {
                                    item.style.display = 'none';
                                }
                            }, 300);
                        });
                    }
                });
            }

            // --- Animasi saat Scroll (Intersection Observer) ---
            const revealElements = document.querySelectorAll('.reveal');
            const skillsProgress = document.querySelectorAll('.progress-bar');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        // Animate progress bars
                        if (entry.target.classList.contains('progress-bar')) {
                            entry.target.style.width = entry.target.getAttribute('data-width');
                        }
                    }
                });
            }, {
                threshold: 0.1
            });

            revealElements.forEach(el => observer.observe(el));
            skillsProgress.forEach(el => observer.observe(el));

            // --- Navbar collapse on click (untuk mobile) ---
            const navLinks = document.querySelectorAll('.nav-link');
            const menuToggle = document.getElementById('navbarNav');
            const bsCollapse = new bootstrap.Collapse(menuToggle, {
                toggle: false
            });
            navLinks.forEach((l) => {
                l.addEventListener('click', () => {
                    if (menuToggle.classList.contains('show')) {
                        bsCollapse.toggle();
                    }
                });
            });

            // --- AJAX Contact Form Submission ---
            const contactForm = document.getElementById('contact-form');
            const formStatus = document.getElementById('form-status');

            if (contactForm) {
                contactForm.addEventListener('submit', async function(e) {
                    e.preventDefault(); // Mencegah form redirect

                    const form = e.target;
                    const data = new FormData(form);

                    // Tampilkan status "mengirim..."
                    formStatus.innerHTML = 'Mengirim...';
                    formStatus.className = 'text-center mt-3 text-info';

                    try {
                        const response = await fetch(form.action, {
                            method: form.method,
                            body: data,
                            headers: {
                                'Accept': 'application/json'
                            }
                        });

                        if (response.ok) {
                            formStatus.innerHTML = "Terima kasih! Pesan Anda telah terkirim.";
                            formStatus.className = 'text-center mt-3 text-success';
                            form.reset(); // Mengosongkan form
                        } else {
                            const responseData = await response.json();
                            if (Object.hasOwn(responseData, 'errors')) {
                                formStatus.innerHTML = responseData["errors"].map(error => error[
                                    "message"]).join(", ");
                            } else {
                                formStatus.innerHTML = "Oops! Terjadi masalah saat mengirim formulir.";
                            }
                            formStatus.className = 'text-center mt-3 text-danger';
                        }
                    } catch (error) {
                        formStatus.innerHTML = "Oops! Terjadi masalah dengan jaringan.";
                        formStatus.className = 'text-center mt-3 text-danger';
                    }
                });
            }
        });
    </script>
</body>

</html>
