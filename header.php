<div id="sticky-header" class="container-fluid px-0 d-none d-lg-block top-header top-header-otherpage">
  <div class="row gx-0 align-items-center">
    <div class="col-lg-4 text-center">
      <div class="d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-envelope fs-1 text-primary me-3"></i>
        <div class="text-start">
          <!-- <h6 class="content-title mb-1 fw-bolder text-black">Email Us</h6> -->
          <span class="text-black">info@example.com</span>
        </div>
      </div>
    </div>
    <div class="col-lg-4 text-center border-inner">
      <div class="d-inline-flex align-items-center justify-content-center">
        <a href="index.php" class="navbar-brand">
          <img src="static/images/logo-b.png" class="logo" />
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
  <nav class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0 px-3 px-lg-0 navbar-otherpage">
    <a href="index.php" class="navbar-brand d-block d-lg-none">
      <h1 class="m-0 text-uppercase text-white">
        <i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>
        Chariox
      </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto mx-lg-auto py-0">
        <a href="index.php" class="<?php if($page=='home'){echo 'active';}?> nav-item nav-link nav-pd fw-bolder">
          Home
        </a>
        <a href="about-us.php" class="<?php if($page=='about'){echo 'active';}?> nav-item nav-link nav-pd fw-bolder">
          About
        </a>
        <a href="tyre.php" class="<?php if($page=='tyre'){echo 'active';}?> nav-item nav-link nav-pd fw-bolder">Tyre</a>
        <a href="gallery.php" class="<?php if($page=='gallery'){echo 'active';}?> nav-item nav-link nav-pd fw-bolder">
          Gallery
        </a>
        <a href="find-dealer.php" class="<?php if($page=='findDealers'){echo 'active';}?> nav-item nav-link nav-pd fw-bolder">
          Find Dealers
        </a>
        <a href="tech-knowledge.php" class="<?php if($page=='techKnowledge'){echo 'active';}?> nav-item nav-link nav-pd fw-bolder">
          Tech & Knowledge
        </a>
        <a href="contact-us.php" class="<?php if($page=='contact'){echo 'active';}?> nav-item nav-link nav-pd fw-bolder">
          Contact Us
        </a>
      </div>
    </div>
  </nav>
</div>

<script src="static/js/sticky-header.js"></script>
