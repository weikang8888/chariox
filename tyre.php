<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chariox</title>
    <link rel="stylesheet" href="static/css/style.css" />
    <link rel="stylesheet" href="static/css/bootstrap.css" />
    <link rel="stylesheet" href="static/css/font.css" />
    <link rel="stylesheet" href="static/css/aos-animate.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Topbar Start -->
    <?php include 'header.php'?>
    <!-- Topbar End -->

    <article class="chariox-content background-black">
      <div class="tyre-banner">
        <!-- <div class="container">
          <div class="row text-center justify-content-center">
            <h2 class="content-title absolute-bottom">Tech & Knowledge</h2>
          </div> -->
        <!-- </div> -->
      </div>

      <div class="at-container">
        <div class="container">
          <div class="tyre-content-relative row align-items-start">
            <div class="col-12 col-lg-6 at-infront">
              <div class="tyre-content">
                <div
                  class="at-mt-title d-sm-flex align-items-center"
                  data-aos="fade-right"
                  data-aos-duration="1200">
                  Lexio A
                  <div class="slash">/</div>
                  T
                </div>
                <div
                  class="pe-6"
                  data-aos="fade-right"
                  data-aos-duration="1500">
                  <p>
                    Be ready for wherever you decide to go,be it off-road or on
                  </p>
                </div>
                <a
                  href="at-tyre.php"
                  data-aos="fade-right"
                  data-aos-duration="1800"
                  class="btn-class btn-text py-2 px-4 fw-light">
                  Learn More
                </a>
              </div>
              <img
                class="tyre-at-image-infront"
                data-aos="fade-right"
                data-aos-duration="800"
                src="static/images/tyre/tyre-at.png" />
            </div>
            <div class="col-12 at-behind">
              <img
                class="tyre-at-image-behind"
                data-aos="fade-left"
                data-aos-duration="400"
                src="static/images/tyre/tyre-at-car.png" />
            </div>
          </div>
        </div>
      </div>

      <div class="at-container">
        <div class="container">
          <div class="tyre-content-relative row align-items-start">
            <div class="col-12 col-lg-6 at-infront">
              <div class="tyre-content">
                <div
                  class="at-mt-title d-sm-flex align-items-center"
                  data-aos="fade-up"
                  data-aos-duration="1200">
                  Lexio M
                  <div class="slash">/</div>
                  T
                </div>
                <div class="pe-6" data-aos="fade-up" data-aos-duration="1500">
                  <p>
                    Be ready for wherever you decide to go,be it off-road or on
                  </p>
                </div>
                <a
                  href="mt-tyre.php"
                  data-aos="fade-up"
                  data-aos-duration="1800"
                  class="btn-class btn-text py-2 px-4 fw-light">
                  Learn More
                </a>
              </div>
              <img
                class="tyre-at-image-infront"
                data-aos="fade-up"
                data-aos-duration="800"
                src="static/images/tyre/tyre-mt.png" />
            </div>
            <div class="col-12 at-behind">
              <img
                class="tyre-mt-image-behind"
                data-aos="fade-down"
                data-aos-duration="400"
                src="static/images/tyre/tyre-mt-car.png" />
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Start -->
      <?php include 'footer.php'?>
      <!-- Footer End -->
    </article>
  </body>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="static/js/swiper.js"></script>
  <script>
    AOS.init({
      once: true,
    });
  </script>
</html>
