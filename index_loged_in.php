<!DOCTYPE html>
<html lang="en">

<?php
session_start();

include("forms/connect_order.php");
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NMG</title>
  <meta content="ngablak meat grinder" name="description">
  <meta content="ngablak, grinder, meat, gilingan daging ngablak" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link rel="icon" href="assets\img\my_logo.jpg">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    body{
      background-image: url("assets/img/background.jpg");
    }
  table {
  border-collapse: collapse;
  width: 100%;
  }

  th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  }

  tr:hover {background-color: rgb(42, 170, 235);}
</style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:akbarwibowo.2021@student.uny.ac.id">e-mail me</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 8572 9775 932</span></i>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">NMG<span>.</span></a></h1>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Pengumuman</a></li>
          <li><a class="nav-link scrollto" href="#order">Pemesanan</a></li>
          <li><a class="nav-link scrollto" href="#contact_us">Kontak</a></li>
          <li><a class="nav-link scrollto" href="sign-up-login-form/dist/logout.php">Keluar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle">Menu</i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Selamat Datang di <span>Ngablak Meat Grinder</span></h1>
      <h2>Penggilingan daging Ngablak, melayani pembuatan bakso, cilok, galantin, dan lain-lain</h2>
      <div class="d-flex">
        <a href="#order" class="btn-get-started scrollto">Pemesanan</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up" style="align-items:center;">

      <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="margin:0 auto;">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">Hasil Bagus</a></h4>
              <p class="description">Kami menjamin kepuasan pembeli dengan selalu berusaha memberikan hasil terbaik</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="margin:0 auto;">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <h4 class="title"><a href="">Harga Kompetitif</a></h4>
              <p class="description">Kami selalu menjaga harga dari jasa/produk kami untuk selalu kompetitif dengan para kompetitor dengan hasil yang memuaskan</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="margin:0 auto;">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <h4 class="title"><a href="">Halal</a></h4>
              <p class="description">Kami menggunakan daging dan bahan-bahan yang dijamin kehalalannya</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Kami</h2>
          <h3>Ketahui Lebih <span>Tentang Kami</span></h3>
          <p>Kami sudah memulai penggilingan daging bakso sejak tahun 2010.</p>        </div>

        <div class="row">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/Gilingan-Bakso.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <h3>Ngablak Meat Grinder merupakan penggilingan daging pertama dan nomor satu di Ngablak.</h3>
            <p class="fst-italic">
              kami menjamin dengan kualitas yang kami berikan dan akan selalu menjaga kualitas tersebut.
            </p>
            <ul>
            <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Banyak toko bakso di Ngablak dan sekitarnya yang percaya pada kami</h5>
                  <p>kami terbukti dapat menjaga kualitas yang terjamin dengan banyaknya pengusaha bakso yang memercayakan penggilingan daging untuk adonan bakso mereka kepada kami</p>
                </div>
              </li>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan</h2>
          <h3><span>Pelayanan yang Kami Sediakan</span></h3>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4><a href="">Bakso</a></h4>
              <p>kami menyediakan pelayanan pembuatan adonan bakso dengan kualitas terbaik</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <h4><a href="">Cilok Daging</a></h4>
              <p>pembuatan adonan cilok yang dicampur daging</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <h4><a href="">Galantin</a></h4>
              <p>kami juga bisa membuat adonan galantin dengan kualitas yang tidak mengecewakan</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4><a href="">Kerne</a></h4>
              <p>daging yang digiling untuk membuat bola-bola daging</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <h4><a href="">Mie</a></h4>
              <p>menyediakan mie untuk pembuatan mi ayam</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <h4><a href="">Nugget</a></h4>
              <p>kami menyediakan pembuatan adonan nugget</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

  

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pengumuman</h2>
          <h3>Lihat pemberitahuan terbaru <span>di sini</span></h3>
          <p>Apabila ada pemberitahuan terbaru, maka akan ditampilkan di sini. <br> <br> belum ada pemberitahuan terbaru</p>
        </div>
        </div> 

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="order" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pemesanan</h2>
          <h3>Silahkan pesan <span>di sini</span></h3>
          <p>*hiraukan apabila muncul pesan eror. lakukan refresh halaman dan lihat tabel di bawah untuk melihat pesanan anda</p>
        </div>

        <section id="contact" class="contact">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6" style="margin: 0 auto;">
              <form action="forms/order.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama anda" required>
                  </div>
                  <div class="col form-group">
                    <input type="varchar" class="form-control" name="address" id="address" placeholder="Alamat anda" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="varchar" class="form-control" name="subject" id="subject" placeholder="Jenis pesanan" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" placeholder="Jumlah barang dan pesan" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message">berhasil</div>
                  <div class="sent-message">Pemesanan anda telah terkirim. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Kirim</button></div>
              </form>
            </div>
          </div>
        </section>

        <table>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis</th>
            <th>Jumlah</th>
            
            <?php
        $sql = "SELECT * FROM   order_data;";
        $no = 1;
        $result = mysqli_query($connect_order, $sql);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td>
                    <?php echo $no++;?>
                </td>
                <td>
                    <?php echo $data['nama']?>
                </td>
                <td>
                    <?php echo $data['alamat']?>
                </td>
                <td>
                    <?php echo $data['jenis']?>
                </td>
                <td>
                    <?php echo $data['jumlah']?>
                </td>
            </tr>
            <?php
        }
        ?>
        </table>

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up" style="align-items: center;">

        <div class="section-title">
          <h2>Harga</h2>
          <h3>Harga pembuatan <span>per kilogram</span></h3>
        </div>

        <div class="row">

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Bakso</h3>
              <h4><sup>Rp</sup>18K<span> / kg</span></h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <h3>Cilok</h3>
              <h4><sup>Rp</sup>20K<span> / kg</span></h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Mie</h3>
              <h4><sup>Rp</sup>12K<span> / kg</span></h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <h3>Galantin</h3>
              <h4><sup>Rp</sup>25K<span> / kg</span></h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <h3>Kerne</h3>
              <h4><sup>Rp</sup>10K<span> / kg</span></h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <h3>Nugget</h3>
              <h4><sup>Rp</sup>25K<span> / kg</span></h4>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Pertanyaan yang sering ditanyakan</h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Di mana alamat penggilingan daging ngablak? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    penggilingan daging ngablak terdapat di Jl. Magelang - Salatiga, Gondang Kulon, Girirejo, Kec. Ngablak, Kabupaten Magelang, Jawa Tengah. di bawah cafe Cerita Kita
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Pukul berapa penggilingan di buka? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    penggilingan daging ngablak buka pukul 07.00
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Apakah NMG menyediakan daging? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    kami menyediakan seluruh bahan untuk pembuatan bakso, galantin, nugget, mie, kerne, dan cilok. baik itu daging maupun bumbu 
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact_us" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <h3>Kontak <span>kami</span></h3>
          <p>Anda dapat melakukan pemesanan dengan melakukan login(masuk) [atau signup(daftar) terlebih dahulu apabila belum melakukan pendaftaran] atau melalui pesan WhatsApp pada nomor yang tersedia.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>Jl. Magelang - Salatiga, Gondang Kulon, Girirejo, Kec. Ngablak, Kabupaten Magelang, Jawa Tengah</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>nmg@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>WhatsApp</h3>
              <p>+62 8572 9775 932</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>NMG<span></span></h3>
        <p>
          Jalan Magelang - Salatiga<br>
          Ngablak <br><br>
          <strong>WhatsApp:</strong> +62 8572 9775 932<br>
          <strong>Email:</strong> nmg@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
            <h4>Navigasi</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Layanan</a></li>
            </ul>
          </div>

      
      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Sosial media</h4>
        <p>Kenali lebih tentang kami di sosial media kami</p>
        <div class="social-links mt-3">
          <a href="twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>


</footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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