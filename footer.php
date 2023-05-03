<link rel="stylesheet" href="static/css/aos-animate.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

<!-- Footer Start -->
<div class="footer-section">
  <div class="container-fluid find-section">
    <div class="container find-relative-container">
      <div class="row justify-content-between align-items-end">
        <div class="col-5 find-absolute-left">
          <h2 class="content-title find-left-title">made to mud</h2>
          <h2 class="content-title">build to climb</h2>
          <h2 class="content-title find-right-title">created to conquer</h2>
        </div>
        <div
          class="col-5 find-absolute-right"
          data-aos="homepage-animation3"
          data-aos-duration="400">
          <img class="mt-light" src="static/images/mt-tyre-light.png" />
        </div>
      </div>
    </div>
  </div>

  <div class="find-store-bg">
    <div class="container">
      <div
        class="row align-items-center justify-content-between find-store-row">
        <div class="col-8">
          <div class="">
            <h1 class="content-title">find chariox tyre near you</h1>
          </div>
        </div>
        <div class="col-3">
          <a class="btn-class btn-text py-2 px-4 btn-white btn-text-black">
            Find a store
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="footer__container container-lg mt-4">
    <div class="row justify-content-between align-items-baseline">
      <div class="col-sm-12 col-md-4 me-auto">
        <div class="mb-3">
          <img src="static/images/logo-white.png" style="width: 100%" />
          <h3 class="footer-title">chariox malaysia sdn. bhd.</h3>
          <p class="footer-content">
            LEVEL 2,Wisma Comcorp No.37,Jalan Pelukis U1/46 Section UI, Temasya
            Industrial Park,40150 Glemarie,Shah Alam,Selangor Darul Ehsan.
          </p>
          <div class="footer-tel-fax">
            <p>Tel:03-5568 3166</p>
            <p>Fax:03-5569 5792</p>
          </div>
        </div>
        <ul class="social-list mb-sm-4 mb-md-0">
          <li class="social-list__item" role="listitem">
            <a
              href=""
              class="social-list__link"
              aria-label="Go to: Facebook (New Window)"
              target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
          </li>
          <li class="social-list__item" role="listitem">
            <a
              href=""
              class="social-list__link"
              aria-label="Go to: Facebook (New Window)"
              target="_blank">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
          </li>
          <li class="social-list__item" role="listitem">
            <a
              href=""
              class="social-list__link"
              aria-label="Go to: Facebook (New Window)"
              target="_blank">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </li>
          <li class="social-list__item" role="listitem">
            <a
              href=""
              class="social-list__link"
              aria-label="Go to: Facebook (New Window)"
              target="_blank">
              <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-sm-12 col-md-3 pb-3 pb-md-0">
        <ul class="footer-navigation">
          <li class="footer-list-item">
            <a href="" class="footer-list-title">Navigation</a>
          </li>
          <li class="footer-list-item">
            <a href="" class="footer-list-link">Home</a>
          </li>
          <li class="footer-list-item">
            <a href="" class="footer-list-link">About Us</a>
          </li>
          <li class="footer-list-item">
            <a href="" class="footer-list-link">Tyre</a>
          </li>
          <li class="footer-list-item">
            <a href="" class="footer-list-link">Gallery</a>
          </li>
          <li class="footer-list-item">
            <a href="" class="footer-list-link">find dealers</a>
          </li>
          <li class="footer-list-item">
            <a href="" class="footer-list-link">Tech & Knowledge</a>
          </li>
          <li class="footer-list-item">
            <a href="" class="footer-list-link">contact us</a>
          </li>
        </ul>
      </div>
      <div class="col-sm-12 col-md-3 pb-3 pb-md-0">
        <li class="footer-list-item">
          <a href="" class="footer-list-title">Content</a>
        </li>
        <p class="content-title">Head Office</p>
        <p>
          Address: PLO 181,Jalan Genuang Kawasan Perindustrian, 85000
          Segamat,Johor
        </p>
        <p>Phone: 012-254 9609</p>
      </div>
    </div>
  </div>
</div>
<!-- Footer End -->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
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
