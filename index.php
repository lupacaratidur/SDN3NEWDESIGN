<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SD Negeri 3 - Purwokerto Kidul</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">SD Negeri 3 Purwokerto Kidul<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#beranda">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="profil/visimisi.html">VISI dan MISI</a></li>
              <li><a href="profil/guruguru.html">GURU</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="fasilitas/fasilitas.html">Fasilitas</a></li>
          <li><a class="nav-link scrollto" href="berita.html">Berita</a></li>
          <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="galeri/galerifoto.html">Galeri Foto</a></li>
              <li><a href="galeri/galerividio.html">Galeri Vidio</a></li>
            </ul>
          </li>
          <li><a style="background: #F63854; border-radius: 5px; color: #fff;" class="nav-link scrollto"
              href="login/login.html">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="beranda" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>TANGGUL TAMAN BUDAYA<span>.</span></h1>
      <h2>Taqwa, Unggul, Berprestasi, Mandiri, Berbudi luhur, dan Berdaya</h2>
      <div class="d-flex">
        <a href="Pendaftaran.html" class="btn-get-started scrollto">Pendaftaran Peserta Didik Baru</a>
      </div>
    </div>
  </section><!-- End Hero -->



  <!-- Sambutan Kepala Sekolah -->
  <section class="sambutan-kepsek section-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 video-box">
          <img src="assets/img/guru/foto kepsek.jpg" class="img-fluid" alt="" width="6000">
        </div>

        <div class="col mt-3">
          <div class="icon-box">
            <h2 style="color: #F63854;" class="oren">Sambutan Kepala Sekolah</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolores molestias aliquid nesciunt nobis,
              cupiditate placeat. Incidunt blanditiis veritatis obcaecati, sit, dolorem unde eveniet natus ab quidem
              eum, explicabo fuga! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, id aut
              voluptates aperiam quam sunt inventore nulla quos, voluptatem officiis aspernatur iusto, vero laudantium!
              Excepturi asperiores provident nulla dolore sequi! Lorem ipsum dolor sit, amet consectetur adipisicing
              elit. Error perferendis cumque illum ut suscipit nostrum iste. Dolore molestias amet in esse, aliquid
              ipsam error, veniam, quae ut aliquam alias maxime.</p><br>
            <p>Gold D Roger</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Sambutan Kepala Sekolah -->

  <!-- ======= Xtrakulikuler Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="section-title">
      <h2>Extrakulikuler</h2>
    </div>

    <!-- List eXtrakulikuler -->
    <div class="container" style="padding-left: 80px;">
      <div class="row mt-3">
        <div class="col">
          <div class="list-ekstra">
            <img src="assets/img/extrakulikuler/luffy.jpg" width="50">
            Seni Tari
          </div>
        </div>
        <div class="col">
          <div class="list-ekstra">
            <img src="assets/img/extrakulikuler/nami.jpg" width="50">
            Pidato
          </div>
        </div>
        <div class="col">
          <div class="list-ekstra">
            <img src="assets/img/extrakulikuler/sanji.jpg" width="50">
            Seni Lukis
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
          <div class="list-ekstra">
            <img src="assets/img//extrakulikuler/usop.jpg" width="50">
            Pantonim
          </div>
        </div>
        <div class="col">
          <div class="list-ekstra">
            <img src="img/photo/macapat.png" width="50">
            Macapat
          </div>
        </div>
        <div class="col">
          <div class="list-ekstra">
            <img src="img/photo/pramuka.png" width="50">
            Pramuka
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
          <div class="list-ekstra">
            <img src="img/photo/Atletik.png" width="50">
            Atletik
          </div>
        </div>
        <div class="col">
          <div class="list-ekstra">
            <img src="img/photo/Kenthongan.png" width="50">
            Kenthongan
          </div>
        </div>
        <div class="col">
          <div class="list-ekstra">
            <img src="img/photo/hadroh.png" width="50">
            Hadroh
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
          <div class="list-ekstra">
            <img src="img/photo/puisi.png" width="50">
            Cipta Baca Puisi
          </div>
        </div>
        <div class="col">
          <div class="list-ekstra">
            <img src="img/photo/btq.png" width="50">
            BTQ
          </div>
        </div>
        <div class="col">
          <div class="list-ekstra">
            <img src="img/photo/komputer.png" width="50">
            Pelatihan Komputer
          </div>
        </div>
      </div>
    </div>
  </section>


  </div>
  </section>

  <!-- End Extrakulikuler Section -->

  <!-- Prestasi Section -->
  <section id="featured-services" class="featured-services">
    <div class="section-title">
      <h2>Prestasi</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="icon-box icon-box-blue">
            <div class="text-center">
              <img src="assets/img/prestasi/Piala.png" width="150">
            </div>
            <h5 class="juara-title mt-3"><a href="index.html">JUARA 2 SEPAK BOLA TINGKAT KABUPATEN</a></h5>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box icon-box-blue">
            <div class="text-center">
              <img src="assets/img/prestasi/Piala.png" width="150">
            </div>
            <h5 class="juara-title mt-3"><a href="index.html">JUARA 1 LOMBA MELUKIS TINGKAT KABUPATEN</a></h5>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box icon-box-blue">
            <div class="text-center">
              <img src="assets/img/prestasi/Piala.png" width="150">
            </div>
            <h5 class="juara-title mt-3"><a href="index.html">JUARA 2 SENI TARI TINGKAT KECAMATAN</a></h5>
          </div>
        </div>


        <div class="col-md-4">
          <div class="icon-box icon-box-blue">
            <div class="text-center">
              <img src="assets/img/prestasi/Piala.png" width="150">
            </div>
            <h5 class="juara-title mt-3"><a href="index.html">JUARA 2 SEPAK BOLA TINGKAT KABUPATEN</a></h5>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box icon-box-blue">
            <div class="text-center">
              <img src="assets/img/prestasi/Piala.png" width="150">
            </div>
            <h5 class="juara-title mt-3"><a href="index.html">JUARA 2 SEPAK BOLA TINGKAT KABUPATEN</a></h5>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box icon-box-blue">
            <div class="text-center">
              <img src="assets/img/prestasi/Piala.png" width="150">
            </div>
            <h5 class="juara-title mt-3"><a href="index.html">JUARA 2 SEPAK BOLA TINGKAT KABUPATEN</a></h5>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End Prestasi Section -->

  <!-- Berita Section -->
  <div style="position: relative;" data-draggable="true" class="" draggable="false">
    <section draggable="false" class="container pt-5" data-v-271253ee="">
      <section id="berita1" class="mb-10">
        <h2 class="fw-bold mb-5 text-center">Berita Acara Terbaru <br /></h2>
        <div class="row gx-lg-5 mb-5 align-items-center">
          <div class="col-md-6 mb-4 mb-md-0 hover-zoom">
            <img src="<?php echo ambil_gambar('5') ?>" class="w-100 shadow-5-strong rounded-4 mb-4" alt=""
              aria-controls="#picker-editor" draggable="false" />
          </div>
          <div class="col-md-6 mb-4 mb-md-0">
            <h3 class="fw-bold">Peserta Juara Lomba Sepak Bola</h3>
            <div class="mb-2 text-danger small"><i class="fas fa-book-open me-2"
                aria-controls="#picker-editor"></i><span>Lomba</span></div>
            <p class="text-muted">Ut pretium ultricies dignissim. Sed sit amet mi eget urna placerat vulputate. Ut
              vulputate est non quam dignissim elementum. Donec a ullamcorper diam.</p>
            <p class="text-muted">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quae nulla saepe rerum aspernatur odio amet
              perferendis tempora mollitia? Ratione unde magni omnis quaerat blanditiis cumque dolore placeat
              rem dignissimos?
            </p>
            <a style="background: #F63854;" class="btn btn-primary" href="blog/2022_02_02.php" role="button"
              aria-controls="#picker-editor" draggable="false">Read more</a>
          </div>
        </div>
        <div class="row gx-lg-5 mb-5 flex-lg-row-reverse align-items-center">
          <div class="col-md-6 mb-4 mb-md-0 hover-zoom">
            <img src="assets/img/berita/fishman.jpg" class="w-100 shadow-5-strong rounded-4 mb-4" alt=""
              aria-controls="#picker-editor" draggable="false" />
          </div>
          <div class="col-md-6 mb-4 mb-md-0">
            <h3 class="fw-bold">Pembagian Hadiah Pemenang Lomba</h3>
            <div class="mb-2 text-primary small"><i class="fas fa-book-reader me-2"
                aria-controls="#picker-editor"></i><span>Lomba</span></div>
            <p class="text-muted">
              Duis sagittis, turpis in ullamcorper venenatis, ligula nibh porta dui, sit amet rutrum enim massa in ante.
              Curabitur in justo at lorem laoreet ultricies. Nunc ligula felis, sagittis eget nisi vitae,
              sodales vestibulum purus. Vestibulum nibh ipsum, rhoncus vel sagittis nec, placerat vel justo. Duis
              faucibus sapien eget tortor finibus, a eleifend lectus dictum. Cras tempor convallis magna id
              rhoncus. Suspendisse potenti. Nam mattis faucibus imperdiet. Proin tempor lorem at neque tempus aliquet.
              Phasellus at ex volutpat, varius arcu id, aliquam lectus. Vestibulum mattis felis quis ex
              pharetra luctus. Etiam luctus sagittis massa, sed iaculis est vehicula ut.
            </p>
            <a style="background: #F63854;" class="btn btn-primary disabled" href="#" role="button"
              aria-controls="#picker-editor" draggable="false">Read more</a>
          </div>
        </div>
        <div class="row gx-lg-5 mb-5 align-items-center">
          <div class="col-md-6 mb-4 mb-md-0 hover-zoom">
            <img src="assets/img/berita/marinford.jpg" class="w-100 shadow-5-strong rounded-4 mb-4" alt=""
              aria-controls="#picker-editor" draggable="false" />
          </div>
          <div class="col-md-6 mb-4 mb-md-0">
            <h3 class="fw-bold">Pembagian Sembako</h3>
            <div class="mb-2 text-warning small"><i class="fas fa-box-open me-2"
                aria-controls="#picker-editor"></i><span>SD Negeri 3 Purwokerto Kidul</span></div>
            <p class="text-muted">
              Sed sollicitudin purus sed nulla dignissim ullamcorper. Aenean tincidunt vulputate libero, nec imperdiet
              sapien pulvinar id. Nullam scelerisque odio vel lacus faucibus, tincidunt feugiat augue ornare.
              Proin ac dui vel lectus eleifend vestibulum et lobortis risus. Nullam in commodo sapien. Curabitur ut erat
              congue sem finibus eleifend egestas eu metus. Sed ut dolor id magna rutrum ultrices ut eget
              libero. Duis vel porttitor odio. Ut pulvinar sed turpis ornare tincidunt. Donec luctus, mi euismod
              dignissim malesuada, lacus lorem commodo leo, tristique blandit ante mi id metus. Integer et vehicula
              leo, vitae interdum lectus. Praesent nulla purus, commodo at euismod nec, blandit ultrices erat. Aliquam
              eros ipsum, interdum et mattis vitae, faucibus vitae justo. Nulla condimentum hendrerit leo, in
              feugiat ipsum condimentum ac. Maecenas sed blandit dolor.
            </p>
            <a style="background: #F63854;" class="btn btn-primary disabled" href="#" role="button"
              aria-controls="#picker-editor" draggable="false">Read more</a>
          </div>
        </div>
  </div>
  </div>
  </section>
  </section>
  </div>
  <!-- End Berita Section -->


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Kontak</h2>
        <h3><span>Hubungi Kami</span></h3>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Alamat Kami</h3>
            <p>Karanganyar, Purwokerto Kidul, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53147</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p>sdn3pwtkidul@gmail.com</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Telepon</h3>
            <p>+63 8387 7099 617</p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63300.96974094285!2d109.20378569061324!3d-7.430839277501736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655f2b30771ceb%3A0x9ff1b2354038c296!2sSDN%203%20PURWOKERTO%20KIDUL!5e0!3m2!1sid!2sid!4v1654894660836!5m2!1sid!2sid" " frameborder="
            0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->



  <div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong><span>SD Negeri 3-Purwokerto Kidul</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="">wahrul</a>
    </div>
  </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>