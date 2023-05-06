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
    <?php $page='gallery'; include 'header.php'?>
    <!-- Topbar End -->

    <article class="chariox-content background-black">
      <div class="gallery-banner">
        <div class="container">
          <div class="row text-center justify-content-center">
            <h2 class="content-title absolute-bottom gallery-topic">Gallery</h2>
          </div>
        </div>
      </div>

      <div class="gallery-content">
        <div class="container my-4">
          <div class="row justify-content-center horizontal-white-line mb-5">
            <ul class="gallery-category fw-bolder fs-3">
              <li class="gallery-title active text-uppercase">
                All
              </li>
              <li class="gallery-title text-uppercase">Chariox A/T</li>
              <li class="gallery-title text-uppercase">
                Chariox M/T
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Footer Start -->
      <?php include 'footer.php'?>
      <!-- Footer End -->
    </article>
  </body>
</html>
