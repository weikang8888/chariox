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
    <?php include 'header.php'?>
    <!-- Topbar End -->

    <article class="chariox-content background-black">
      <div class="contact-us-banner">
        <div class="container">
          <div class="row text-center justify-content-center">
            <h1 class="other-title absolute-bottom">Contact Us</h1>
          </div>
        </div>
      </div>

      <div class="google-map-container my-5">
        <div class="container contact-map">
          <div id="map"></div>
        </div>
      </div>

      <div class="contact-container">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-6 fst-italic">
              <p>Please give us a call or complete the form to enquire.</p>
              <h2 class="content-title">HEAD OFFICE</h2>
              <p>Address:</p>
              <p>
                PLO 181,Jalan Genuang,Kawasan Perindustrian,85000 Segamat,Johor.
              </p>
              <p>Phone:</p>
              <p>012-254 9609</p>
            </div>
            <div class="col-6">
              <form>
                <div class="contact-form">
                  <div class="contact-form-first-row mb-3">
                    <div class="styled-input wide">
                      <input type="text" required />
                      <label>Full Name*</label>
                    </div>
                    <div class="styled-input wide">
                      <input type="text" required />
                      <label>Phone Number*</label>
                    </div>
                  </div>
                  <div class="styled-input wide mb-3">
                    <input type="text" required />
                    <label>Email*</label>
                  </div>
                  <div class="styled-input wide">
                    <textarea class="mb-3" required></textarea>
                    <label>Message</label>
                  </div>
                  <button type="" value="" class="btn-submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Start -->
      <?php include 'footer.php'?>
      <!-- Footer End -->
    </article>
  </body>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script src="static/js/contact-map.js"></script>
  <script
    async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB94E1buyq9HpajiO6d8EA8REcskcoAmxw&callback=initMap"></script>
</html>
