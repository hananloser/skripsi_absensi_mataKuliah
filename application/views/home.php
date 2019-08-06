
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Rapid Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?=base_url()?>assets/user/img/favicon.png" rel="icon">
  <link href="<?=base_url()?>assets/user/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="#" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?=base_url()?>assets/user/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?=base_url()?>assets/user/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/user/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/user/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/user/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?=base_url()?>assets/user/css/style.css" rel="stylesheet">

</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>SI - Lab</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Pengumuman</a></li>
          <li><a href="<?=site_url('auth/login')?>">Login</a></li>
       
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>IC Labs<br>Faculty of Computer Science <span> <br>UMI</span></h2>
          
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="<?=base_url()?>assets/user/img/icon.png" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="<?=base_url()?>assets/user/img/i.jpg" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>Tentang Kami</h2>
              <h3>Laboratorium UMI : Laboratorium Terpadu dan Studio Informatika.</h3>
              <p>Laboratorium Pembelajaran merupakan salah satu laboratorium komputer yang memfokuskan diri pada kegiatan praktikum di Fakultas Ilmu Komputer UMI.</p>
              <p>Adapun kegiatan yang dapat dilakukan dilingkup laboratorium Pembelajaran meliputi kegiatan praktikum, penggunaan peralatan laboratorium, penggunaan laboratorium untuk sertifikasi atau sejenisnya..</p>
              <p>Fungsi utama dari laboratorium sebagai sarana untuk melakukan praktik atau penerapan atas teori, dan pengembangan keilmuan di lingkungan FIKOM UMI, sehingga menjadi unsur penting dalam kegiatan pendidikan.</p>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> Gedung Fakultas Ilmu Komputer Kampus II UMI.</li>
                <li><i class="ion-android-checkmark-circle"></i> Jln. Urip Sumoharjo, KM. 5, Makassar Sulawesi Selatan.</li>
                <li><i class="ion-android-checkmark-circle"></i> 0811-4111-289 fikom@umi.ac.id.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->


    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Pengumuman</h3>
          <p>Pengumuman Resmi Laboratorium Fakultas Ilmu Komputer UMI.</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->
    <!--==========================

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="row">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?=base_url()?>assets/user/lib/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/user/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?=base_url()?>assets/user/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets/user/lib/easing/easing.min.js"></script>
  <script src="<?=base_url()?>assets/user/lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?=base_url()?>assets/user/lib/wow/wow.min.js"></script>
  <script src="<?=base_url()?>assets/user/lib/waypoints/waypoints.min.js"></script>
  <script src="<?=base_url()?>assets/user/lib/counterup/counterup.min.js"></script>
  <script src="<?=base_url()?>assets/user/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>assets/user/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?=base_url()?>assets/user/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?=base_url()?>assets/user/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?=base_url()?>assets/user/js/main.js"></script>

</body>
</html>
