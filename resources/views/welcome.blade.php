<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TREIZE-DRY SIM Laundry</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Knight - v4.6.0
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <a href="#hero" class="hero-logo" data-aos="zoom-in"><img src="{{ asset('assets/img/treize.png') }}" alt="" width="400"></a>
      <h1 data-aos="zoom-in">Solusi Pakaian Kotor Menjadi Seperti Baru Lagi </h1>
      <h2 data-aos="fade-up">Laundry kualitas profesional & siap mengantarkan langsung ke Rumah Anda</h2>
      <a data-aos="fade-up" data-aos-delay="200" href="#about" class="btn-get-started scrollto">Mulai</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="#hero"><img src="{{ asset('assets/img/treize.png') }}" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Harga</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tentang Kami</h2>
          <p>TREIZE- SIM Laundry Aplikasi Sistem Informasi Manajemen Laundry Berbasis Website</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="image">
              <img src="{{ asset('assets/img/tentangkami.jpg') }}" class="img-fluid" alt="" width="800">
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
              <h3>Layanan Laundry Berbasis Website</h3>
              <p>TREIZE-DRY SIM Laundry merupakan jasa layanan laundry yang merintis pada tahun 2022 dengan memanfaatkan teknologi untuk mengembangkan sistem informasi layanannya. Oleh karena itu, berbekal alat dan bahan yang berkualitas, keahlian, serta pengalaman yang mumpuni, Kami mengutamakan kepuasan layanan Pelanggan.</p>
              <p class="fst-italic">Berikut beberapa keunggulan kami:</p>
              <ul>
                <li><i class="bx bx-check-double"></i> Memanfaatkan perkembangan teknologi sebagai bentuk layanan.</li>
                <li><i class="bx bx-check-double"></i> Fitur yang Kami tawarkan merupakan fitur pelayanan yang efisien, terkini, dan terinovasi.</li>
                <li><i class="bx bx-check-double"></i> Selain itu pelayanan Kami profesional dengan bahan pembersih yang terjamin dan aman.</li>
              </ul>
              <p>Pelanggan tidak perlu lagi menanyakan kapan harus mengambil pesanan laundry. Sekarang Pelanggan hanya perlu login dan melihat proses pengerjaan laundry dan kami siap mengantar sampai depan Rumah.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Layanan</h2>
          <p>TREIZE-DRY SIM Laundry sebagai jasa laundry profesional menggunakan alat dan bahan yang terjamin kualitasnya dan menawarkan pelayanan terbaik.</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
              <i class="bi bi-truck"></i>
              <h4>Jasa Antar</h4>
              <p>Pelanggan dapat memilih opsi jasa antar atau mengambil pakaian yang telah diproses ke outlet</p>
            </div>

            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-droplet-half"></i>
              <h4>Produk Berkualitas</h4>
              <p>Produk yang digunakan untuk mencuci pakaian merupakan produk pilihan berkualitas tinggi</p>
            </div>

            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-cash-stack"></i>
              <h4>Opsi Pembayaran</h4>
              <p>Pelanggan dapat memilih opsi pembayaran dengan datang langsung ke outlet atau menggunakan sistem COD jika menggunakan jasa antar</p>
            </div>

            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo"></i>
              <h4>Tracking Pesanan</h4>
              <p>Pelanggan dapat memantau proses pengerjaan dengan menggunakan layanan website TREIZE-DRY SIM Laundry dengan hak akses yang telah diberikan oleh kasir</p>
            </div>           
          </div>
          <div class="image col-lg-6 order-1 order-lg-2 mt-4" data-aos="fade-left" data-aos-delay="100">
              <img src="{{ asset('assets/img/services.jpg') }}" class="img-fluid" alt="" width="800">
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container mt-4">

        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 pl-0 pl-lg-0" data-aos="fade-right">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="{{ asset('assets/img/Paket-laundry.jpg') }}" alt="" class="img-fluid" width="800">
                </figure>
              </div>
            </div>
          </div>
          <div class="accordion-list col-lg-6 mt-4 mt-lg-0">
              <h3 class="text-center">Paket Laundry<strong> TREIZE-DRY SIM Laundry</strong></h3>
                <p class="text-center mb-4">
                  Pilih paket laundry sesuai kebutuhanmu!
                </p>
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <a data-bs-toggle="collapse" class="collapse active show" data-bs-target="#accordion-list-1" href="#tab-1"><span>01</span> Paket Kiloan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      TREIZE-DRY SIM Laundry melayani Paket Kiloan. Paket Kiloan ini merupakan paket laundry yang diukur beratnya terlebih dahulu dengan timbangan dengan satuan berat Kilogram (kg). Paket layanan ini sangat cocok untuk Pelanggan yang melakukan laundry tiga hari sekali atau seminggu sekali.
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" href="#tab-2" class="collapse active show"><span>02</span> Paket Satuan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      TREIZE-DRY SIM Laundry juga melayani Paket Satuan. Paket Satuan ini sangat cocok untuk Pelanggan yang ingin melakukan laundry pakaian berwarna sejenis seperti pakaian berwarna putih atau yang lain. Paket layanan ini untuk mempermudah dan memprioritaskan serta mengutamakan hasil agar Pelanggan puas.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">
        <div class="quote-icon">
          <i class="bx bxs-quote-right"></i>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  Sebagai ibu rumah tangga yang punya banyak pekerjaan, laundry di sini sangat membantu saya. pakaian juga bersih dan wangi. Kalau malas ambil, tinggal minta diantar saja. Masalah beres! Pekerjaan saya jadi lebih mudah.
                </p>
                <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Amanda Fitria</h3>
                <h4>Ibu Rumah Tangga</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  Kalau malas nyuci baju sendiri, langsung aja datang ke TREIZE-DRY. Di sini nyuci nya bersih banget dan bisa tracking pakaian kita kayak di Shopee.
                </p>
                <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Mateo William</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  Gak pernah rugi kalau pakai jasa TREIZE-DRY SIM Laundry ini. Saya suka sekali bau pewangi nya haruuummm banget. Dibilang pakai parfum mahal, padahal habis dilaundry di TREIZE-DRY SIM Laundry.
                </p>
                <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3>Atela</h3>
                <h4>Model</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  Sebagai anak kos yang banyak tugas kuliah, kadang jadi malas nyuci pakaian sendiri. Kadang mikir kalau laundry takut boros. Tapi laundry di TREIZE-DRY SIM Laundry gak bikin kantong kering. Murah banget dan pelayanannya sangat bagus.
                </p>
                <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                <h3>Mia Gunawan</h3>
                <h4>Mahasiswi</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  Pernah laundry di tempat lain, beberapa pakaian saya ada yang hilang. Sempat trauma gak mau laundry lagi. Tapi pas coba laundry di TREIZE-DRY SIM Laundry, berkali-kali laundry di sini gak pernah kehilangan pakaian. Pokoknya TREIZE-DRY SIM Laundry keren banget!
                </p>
                <img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>Sekala</h3>
                <h4>Selebgram</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>DAFTAR HARGA</h2>
          <p>Pilih harga paket kesukaanmu!</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <img src="{{ asset('assets/img/pricing/paketmini.jpg') }}" class="pricing-img mt-4" alt="">
              <h3>Paket Mini</h3>
              <h4><sup>Rp</sup>3500<span> / kg</span></h4>
              <ul>
                <li>Cuci atau Setrika saja</li>
                <li>Jenis pakaian apapun</li>
                <li>Include sprei, badcover, dll</li>
                <li class="na">Gratis jasa antar</li>
              </ul>
              <!-- <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended" data-aos="zoom-in">
              <span class="recommended-badge mt-1">Recommended</span>
              <img src="{{ asset('assets/img/pricing/paketextra.jpg') }}" class="pricing-img mt-4" alt="">
              <h3>Paket Extra</h3>
              <h4><sup>Rp</sup>6000<span> / kg</span></h4>
              <ul>
                <li>Cuci dan setrika</li>
                <li>Jenis pakaian apapun</li>
                <li>Include sprei, badcover, dll</li>
                <li>Gratis jasa antar</li>
              </ul>
              <!-- <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <img src="{{ asset('assets/img/pricing/paketsatuan.jpg') }}" class="pricing-img mt-4" alt="">
              <h3>Paket Satuan</h3>
              <h4><sup>Rp</sup>2000<span> / satuan</span></h4>
              <ul>
                <li>Cuci dan Setrika</li>
                <li>Khusus baju atau celana</li>
                <li>Khusus untuk 1 item</li>
                <li class="na">Gratis jasa antar</li>
              </ul>
              <!-- <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Pertanyaan Pelanggan</h2>
        </div>

        <ul class="faq-list">

          <li data-aos="fade-up">
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Bagaimana cara menggunakan jasa TREIZE-DRY SIM Laundry? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Pelanggan bisa langsung datang ke outlet dengan membawa pakaian kotor kemudian serahkan ke bagian kasir, pilih paket laundry yang tersedia dan pakaian kotormu segera diproses.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Pembayaran dilakukan di awal atau di akhir pengerjaan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Pembayaran dapat dilakukan di awal atau di akhir pengerjaan sesuai dengan kemauan Pelanggan.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Apakah TREIZE-DRY SIM Laundry melayani pengambilan pakaian kotor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                TREIZE-DRY SIM Laundry tidak melayani pengambilan pakaian kotor.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Bagaimana cara Pelanggan mengetahui progres pengerjaan laundry? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Pelanggan dapat melihat progres pengerjaan laundry melalui laman login dengan memasukkan username dan password yang telah diberikan oleh kasir.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Bagaimana cara menghubungi pihak outlet jika Pelanggan mengalami kendala? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Pelanggan dapat menghubungi nomor kontak outlet yang tertera pada website TREIZE-DRY SIM Laundry.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>KONTAK</h2>
          <p>Hubungi kontak outlet TREIZE-DRY SIM Laundry apabila mengalami kendala</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jalan Ketintang, Kecamatan Gayungan,<br>Kota Surabaya, Kode Pos 60231</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>treizedrysurabaya@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>No WA:</h4>
                <p>08123456789</p>
              </div>
            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2283.6406900908696!2d112.72355260763437!3d-7.315911145919312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb77985f5b71%3A0x8226ca493dd1aea9!2sJurusan%20Teknik%20Informatika%20UNESA!5e0!3m2!1sid!2sid!4v1649317708362!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Developed by <strong><span>Kelompok 13 SI B 2020</span></strong>
      </div>
      <div class="credits">
        Pemrograman Web
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>