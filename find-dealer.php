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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  </head>

  <body>
    <!-- Topbar Start -->
    <div
      class="container-fluid px-0 d-none d-lg-block top-header top-header-otherpage">
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
            <a href="index.html" class="navbar-brand">
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
      <nav
        class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0 px-3 px-lg-0 navbar-otherpage">
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
            <a href="index.html" class="nav-item nav-link nav-pd fw-bolder">
              Home
            </a>
            <a href="about-us.html" class="nav-item nav-link nav-pd fw-bolder">
              About
            </a>
            <a href="tyre.html" class="nav-item nav-link nav-pd fw-bolder">
              Tyre
            </a>
            <a href="gallery.html" class="nav-item nav-link nav-pd fw-bolder">
              Gallery
            </a>
            <a
              href="find-dealer.html"
              class="nav-item nav-link active nav-pd fw-bolder">
              Find Dealers
            </a>
            <a
              href="tech-knowledge.html"
              class="nav-item nav-link nav-pd fw-bolder">
              Tech & Knowledge
            </a>
            <a
              href="contact-us.html"
              class="nav-item nav-link nav-pd fw-bolder">
              Contact Us
            </a>
          </div>
        </div>
      </nav>
    </div>
    <!-- Topbar End -->

    <div class="find-dealer-container">
      <section class="find-dealer-search-section">
        <div class="find-dealer-search">
          <div class="find-dealer-search-container">
            <form
              class="find-dealer-search-input-container find-dealer-search-input-container--rounded">
              <span class="find-dealer-search-icon-placeholder">
                <img src="static/images/other/search-icon.svg" />
              </span>

              <input
                class="find-dealer-search-input"
                placeholder="City or Postcode" />
            </form>
          </div>
        </div>
        <div class="find-dealer-result">
          <div class="find-dealer-result-list">
            <ul>
              <li class="find-dealer-result-card" id="1">
                <div class="find-dealer-result-card-container">
                  <div class="find-dealer-result-card-header">
                    <div class="find-dealer-result-card-header-distance">
                      <div class="markericon">A</div>
                      <div class="find-dealer-result-card-header-range">
                        2.9km
                      </div>
                    </div>
                    <div class="find-dealer-result-card-header-logo">
                      <div>
                        <img
                          src="static/images/other/result-card-logo.png"
                          class="find-dealer-result-card-header-logo-network" />
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="find-dealer-result-card" id="2">
                <div class="find-dealer-result-card-container">
                  <div class="find-dealer-result-card-header">
                    <div class="find-dealer-result-card-header-distance">
                      <div class="markericon">B</div>
                      <div class="find-dealer-result-card-header-range">
                        2.9km
                      </div>
                    </div>
                    <div class="find-dealer-result-card-header-logo">
                      <div>
                        <img
                          src="static/images/other/result-card-logo.png"
                          class="find-dealer-result-card-header-logo-network" />
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="find-dealer-result-card" id="3">
                <div class="find-dealer-result-card-container">
                  <div class="find-dealer-result-card-header">
                    <div class="find-dealer-result-card-header-distance">
                      <div class="markericon">C</div>
                      <div class="find-dealer-result-card-header-range">
                        2.9km
                      </div>
                    </div>
                    <div class="find-dealer-result-card-header-logo">
                      <div>
                        <img
                          src="static/images/other/result-card-logo.png"
                          class="find-dealer-result-card-header-logo-network" />
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="find-dealer-result-card" id="4">
                <div class="find-dealer-result-card-container">
                  <div class="find-dealer-result-card-header">
                    <div class="find-dealer-result-card-header-distance">
                      <div class="markericon">D</div>
                      <div class="find-dealer-result-card-header-range">
                        2.9km
                      </div>
                    </div>
                    <div class="find-dealer-result-card-header-logo">
                      <div>
                        <img
                          src="static/images/other/result-card-logo.png"
                          class="find-dealer-result-card-header-logo-network" />
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="find-dealer-result-card" id="5">
                <div class="find-dealer-result-card-container">
                  <div class="find-dealer-result-card-header">
                    <div class="find-dealer-result-card-header-distance">
                      <div class="markericon">E</div>
                      <div class="find-dealer-result-card-header-range">
                        2.9km
                      </div>
                    </div>
                    <div class="find-dealer-result-card-header-logo">
                      <div>
                        <img
                          src="static/images/other/result-card-logo.png"
                          class="find-dealer-result-card-header-logo-network" />
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="find-dealer-result-card" id="6">
                <div class="find-dealer-result-card-container">
                  <div class="find-dealer-result-card-header">
                    <div class="find-dealer-result-card-header-distance">
                      <div class="markericon">F</div>
                      <div class="find-dealer-result-card-header-range">
                        2.9km
                      </div>
                    </div>
                    <div class="find-dealer-result-card-header-logo">
                      <div>
                        <img
                          src="static/images/other/result-card-logo.png"
                          class="find-dealer-result-card-header-logo-network" />
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="find-dealer-map-section">
        <div id="map"></div>
      </section>
    </div>

    <!-- Footer Start -->
    <?php include 'footer.php'?>
   <!-- Footer End -->
  </body>

  <script src="static/js/map.js"></script>
  <script
    async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB94E1buyq9HpajiO6d8EA8REcskcoAmxw&callback=initMap"></script>
</html>
