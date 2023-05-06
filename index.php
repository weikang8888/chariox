<!DOCTYPE html>
<html lang="en" style="height:100%">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chariox</title>
    <link rel="stylesheet" href="static/css/style.css" />
    <link rel="stylesheet" href="static/css/bootstrap.css" />
    <link rel="stylesheet" href="static/css/font.css" />
    <link rel="stylesheet" href="static/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="static/css/aos-animate.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Topbar Start -->
    <div class="container-fluid px-0 d-none d-lg-block top-header">
      <div class="row gx-0 align-items-center">
        <div class="col-lg-4 text-center">
          <div class="d-inline-flex align-items-center justify-content-center">
            <i class="bi bi-envelope fs-1 text-primary me-3"></i>
            <div class="text-start">
              <!-- <h6 class="content-title mb-1 fw-bolder text-black">Email Us</h6> -->
              <span class="text-white">info@example.com</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 text-center border-inner">
          <div class="d-inline-flex align-items-center justify-content-center">
            <a href="index.php" class="navbar-brand">
              <img src="static/images/logo.png" class="logo" />
            </a>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <div class="d-inline-flex align-items-center justify-content-center">
            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
            <div class="header-find fw-bolder">
              <div class="right-find">SIZES / SPEC</div>
              <div class="left-find">FIND A STORE</div>
            </div>
          </div>
        </div>
      </div>
      <nav
        class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
          <h1 class="m-0 text-uppercase text-white">
            <i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>
            Chariox
          </h1>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto mx-lg-auto py-0">
            <a
              href="index.php"
              class="nav-item nav-link active nav-pd fw-bolder">
              Home
            </a>
            <a href="about-us.php" class="nav-item nav-link nav-pd fw-bolder">
              About
            </a>
            <a href="tyre.php" class="nav-item nav-link nav-pd fw-bolder">
              Tyre
            </a>
            <a href="gallery.php" class="nav-item nav-link nav-pd fw-bolder">
              Gallery
            </a>
            <a
              href="find-dealer.php"
              class="nav-item nav-link nav-pd fw-bolder">
              Find Dealers
            </a>
            <a
              href="tech-knowledge.php"
              class="nav-item nav-link nav-pd fw-bolder">
              Tech & Knowledge
            </a>
            <a
              href="contact-us.php"
              class="nav-item nav-link nav-pd fw-bolder">
              Contact Us
            </a>
          </div>
        </div>
      </nav>
    </div>
    <!-- Topbar End -->

    <!-- Hero Start -->

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <video muted="" loop="" autoplay="" playsinline="">
            <!-- autoplay -->
            <source src="static/video/ferarri-1.mp4" type="" />
          </video>
        </div>
        <div class="swiper-slide">
          <video muted="" loop="" autoplay="" playsinline="">
            <!-- autoplay -->
            <source src="static/video/ferarri-2.mp4" type="" />
          </video>
        </div>
        <div class="swiper-slide">
          <video muted="" loop="" autoplay="" playsinline="">
            <!-- autoplay -->
            <source src="static/video/ferarri-3.mp4" type="" />
          </video>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <!-- <div>
          <div class="container-fluid bg-primary py-5 hero-header">
            <div class="container py-5">
              <div class="">
                <img class="image-banner" src="static/images/logo-white.png" />
              </div>
            </div>
          </div>
        </div> -->
    <article class="chariox-content background-black">
      <div
        class="row row-lexio-tyre align-items-center p-4 justify-content-center">
        <div class="col-at" data-aos="fade-right" data-aos-duration="800">
          <div>
            <img src="static/images/at-tyre.png" class="img-at-mt" />
          </div>
          <div class="col-at-mt-content">
            <div class="at-mt-title d-sm-flex align-items-center">
              Lexio A
              <div class="slash">/</div>
              T
            </div>
            <p class="at-mt-content pe-6">
              Be ready for wherever you decide to go,be it off-road or on.
            </p>
            <p class="learn-more">Learn More</p>
          </div>
        </div>
        <div class="vertical-white-line"></div>

        <div class="col-mt" data-aos="fade-left" data-aos-duration="800">
          <div>
            <img src="static/images/mt-tyre.png" class="img-at-mt" />
          </div>
          <div class="col-at-mt-content">
            <div class="at-mt-title d-sm-flex align-items-center">
              Lexio M
              <div class="slash">/</div>
              T
            </div>
            <p class="at-mt-content pe-6">
              Be ready for wherever you decide to go,be it off-road or on.
            </p>
            <p class="learn-more">Learn More</p>
          </div>
        </div>
      </div>

      <!-- Hero End -->

      <!-- Manufacturer Start -->
      <div class="text-center manufacturer-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-12 manufacturer-width text-center">
              <div class="manufacturer-logo">
                <img
                  data-aos="fade-up"
                  src="static/images/manufacturer.png"
                  style="width: 300px; height: 300px" />
              </div>
              <img
                class="at-image-font"
                data-aos="homepage-animation1"
                src="static/images/at-tyre-front.png" />
              <img
                class="mt-image-font"
                data-aos="homepage-animation2"
                src="static/images/mt-tyre-front.png" />
              <img
                class="fade-image-right"
                src="static/images/fade-black.png" />
              <img class="fade-image-left" src="static/images/fade-black.png" />
            </div>
          </div>
        </div>
      </div>
      <!-- Manufacturer End -->

      <!-- Tyre Show Start -->
      <div class="tyre-show-section">
        <div class="col-lg-12">
          <img
            class="tyre-mt-car"
            src="static/images/4x4.png"
            data-aos="fade-up-right"
            data-aos-duration="1000" />
          <img
            class="tyre-mt-background"
            src="static/images/beautiful.background-top.jpg" />
        </div>

        <div class="tyre-center-container">
          <div
            data-aos="fade-right"
            data-aos-duration="400"
            class="at-mt-title mt-title-center d-sm-flex align-items-center justify-content-end">
            Lexio M
            <div class="slash">/</div>
            T
          </div>
          <img
            class="tyre-center"
            src="static/images/tyre/tyre-at.png"
            data-aos="homepage-animation3"
            data-aos-duration="400" />
          <div
            data-aos="fade-left"
            data-aos-duration="400"
            class="at-mt-title at-title-center d-sm-flex align-items-center justify-content-start">
            Lexio A
            <div class="slash">/</div>
            T
          </div>
        </div>
        <div class="col-lg-12">
          <img
            class="tyre-at-car"
            src="static/images/4x4-down.png"
            data-aos="fade-down-right"
            data-aos-duration="1000" />
        </div>
        <img
          class="tyre-at-background"
          src="static/images/beautiful.background-down.png" />
      </div>
      <!-- Tyre Show End -->

      <!-- Gallery Start -->
      <div class="gallery-section">
        <div class="horizontal-red p-3 mb-5"></div>
        <div class="col-lg-12 text-center">
          <h1 class="gallery-title">Our Gallery</h1>
        </div>
        <div class="container-grid d-grid gallery-grid justify-content-center">
          <a class="transition-link">
            <img src="static/images/car.jpg" class="grid-img" />
          </a>
          <a class="transition-link">
            <img src="static/images/car.jpg" class="grid-img" />
          </a>
          <a class="transition-link">
            <img src="static/images/car.jpg" class="grid-img" />
          </a>
          <a class="transition-link">
            <img src="static/images/car.jpg" class="grid-img" />
          </a>
          <a class="transition-link">
            <img src="static/images/car.jpg" class="grid-img" />
          </a>
          <a class="transition-link">
            <img src="static/images/car.jpg" class="grid-img" />
          </a>
        </div>

        <div class="row justify-content-center text-center">
          <div class="col-lg-12 mb-5">
            <p class="learn-more text-uppercase fw-bolder view-more">
              View More
            </p>
          </div>
        </div>
      </div>
      <!-- Gallery End -->

      <!-- About Us Start -->
      <div class="container-fluid about-us-section py-5">
        <div class="container py-5">
          <div class="row">
            <div class="col-5">
              <h2
                class="content-title"
                data-aos="fade-right"
                data-aos-duration="400">
                About Us
              </h2>
              <p
                class="about-us-description mb-4"
                data-aos="fade-right"
                data-aos-duration="600">
                We've been helping enthusiasts follow thier passion for over 50
                years and have no intention of slowing down.Keep following your
                own road,we love seeing what you do.
              </p>
              <a
                data-aos="fade-right"
                data-aos-duration="800"
                class="btn-class btn-text py-2 px-4">
                About Us
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- About Us End -->

      <!-- Find-Dealer Start -->
      <div class="container-fluid dealer-section py-5">
        <div class="container py-1">
          <div class="row justify-content-between align-items-center">
            <div class="col-8">
              <img src="static/images/dealer.png" />
            </div>
            <div class="col-4">
              <div class="text-end">
                <h2
                  class="dealer-title"
                  data-aos="fade-left"
                  data-aos-duration="400">
                  Dealers
                </h2>
                <p
                  class="dealer-description mb-4"
                  data-aos="fade-left"
                  data-aos-duration="600">
                  Chariox has evolved International.Find Chariox in your country
                  today.
                </p>
                <a
                  data-aos="fade-left"
                  data-aos-duration="800"
                  class="btn-class btn-text py-2 px-4 btn-black">
                  Find a dealers
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Find-Dealer End -->

      <!-- Tech & knowledge Start -->
      <div class="container-fluid tech-know-section py-5">
        <div class="container py-5">
          <div class="row">
            <div class="col-5">
              <h2
                class="content-title"
                data-aos="zoom-in"
                data-aos-duration="400">
                tech & knowledge
              </h2>
              <p
                class="about-us-description mb-4"
                data-aos="zoom-in"
                data-aos-duration="600">
                Let's see what technology.We use for our latest Chariox tyres.
              </p>
              <a
                data-aos="zoom-in"
                data-aos-duration="800"
                class="btn-class btn-text py-2 px-4">
                tech & knowledge
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Tech & knowledge End -->

      <!-- Footer Start -->
      <?php include 'footer.php'?>
      <!-- Footer End -->
    </article>
  </body>
  <script src="static/js/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="static/js/swiper.js"></script>
  <script>
    AOS.init({
      duration: 3000,
      once: true,
    });
  </script>

  <script>
    //common reveal options to create reveal animations
    ScrollReveal({
      //reset: true,
      distance: "500px",
      duration: 1000,
      delay: 400,
    });

    //target elements, and specify options to create reveal animations
    ScrollReveal().reveal(".find-absolute-left h2", {
      delay: 200,
      origin: "left",
      interval: 100,
    });
  </script>
</html>
