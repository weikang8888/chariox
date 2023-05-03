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
      <div class="size-list-banner">
        <div class="container">
          <div class="row text-center justify-content-center">
            <h1 class="other-title absolute-bottom">Sizes List</h1>
          </div>
        </div>
      </div>

      <div class="at-size-list-container">
        <div class="container">
          <div
            class="row justify-content-between size-list-row align-items-center mb-6">
            <div class="col-8">
              <div class="at-mt-title d-sm-flex align-items-center">
                Lexio A
                <div class="slash">/</div>
                T
              </div>
              <h2 class="other-title fs-1">Size List :</h2>

              <ul class="size-list-column ps-0 fst-italic">
                <li class="row size-list-items align-items-center my-4">
                  <div class="col-auto polygon">
                    <p class="content-title fs-3 size-number">15''</p>
                  </div>
                  <div class="col horizontal">
                    <p class="content-title size-description">
                      LT265/70R15 M+S 6PR 109/105S
                    </p>
                  </div>
                </li>
                <li class="row size-list-items align-items-center my-4">
                  <div class="col-auto polygon">
                    <p class="content-title fs-3 size-number">16''</p>
                  </div>
                  <div class="col horizontal">
                    <p class="content-title size-description">
                      LT265/75R15 M+S 6PR 121/118S
                    </p>
                  </div>
                </li>
                <li class="row size-list-items align-items-center my-4">
                  <div class="col-auto polygon">
                    <p class="content-title fs-3 size-number">17''</p>
                  </div>
                  <div class="col horizontal">
                    <p class="content-title size-description">
                      LT265/65R15 M+S 6PR 120/117S
                    </p>
                  </div>
                </li>
                <li class="row size-list-items align-items-center my-4">
                  <div class="col-auto polygon">
                    <p class="content-title fs-3 size-number">18''</p>
                  </div>
                  <div class="col horizontal">
                    <p class="content-title size-description">
                      LT265/60R15 M+S 6PR 119/116S
                    </p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-4 relative">
              <img
                src="static/images/tyre/tyre-at.png"
                class="size-list-at-tyre" />
            </div>
          </div>
          <div class="row justify-content-between size-list-row">
            <div class="col-4 relative">
              <img
                src="static/images/tyre/tyre-mt.png"
                class="size-list-mt-tyre" />
            </div>
            <div class="col-8">
              <div class="at-mt-title d-sm-flex align-items-center">
                Lexio M
                <div class="slash">/</div>
                T
              </div>
              <h2 class="other-title fs-1">Size List :</h2>

              <ul class="size-list-column ps-0 fst-italic">
                <li class="row size-list-items align-items-center my-4">
                  <div class="col horizontal-mt">
                    <p class="content-title size-description-left">
                      LT265/70R15 M+S 6PR 109/105S
                    </p>
                  </div>
                  <div class="col-auto polygon-right">
                    <p class="content-title fs-3 size-number-right">15''</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Start -->
      <?php include 'footer.php'?>
      <!-- Footer End -->
    </article>
  </body>
</html>
