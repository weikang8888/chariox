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
      <div class="tech-knowledge-banner">
        <div class="container">
          <div class="row text-center justify-content-center">
            <h2 class="content-title absolute-bottom">Tech & Knowledge</h2>
          </div>
        </div>
      </div>

      <div class="tech-knowlegde-content">
        <div class="container my-4">
          <div class="row justify-content-center horizontal-white-line mb-5">
            <ul class="tech-knowledge-category">
              <li class="tech-knowledge-title active text-uppercase">
                Sidewall Marking
              </li>
              <li class="tech-knowledge-title text-uppercase">Tyre Pressure</li>
              <li class="tech-knowledge-title text-uppercase">
                Tyre Integrity
              </li>
              <li class="tech-knowledge-title text-uppercase">
                Tyre Tread Depth
              </li>
            </ul>
          </div>

          <div class="row justify-content-center mb-5">
            <div class="col-6 text-center">
              <h2 class="content-title mb-4">Sidewall Marking</h2>
              <!-- <div class="col-md-12 ps-4"> -->
              <p class="text-end">
                On the tyre sidewall there are several different inscriptions.As
                well as the name of the brand and the range,the size and
                characteristics of the tyres are marked:nominal section width,
                structure or construction code,rim diameter and load and speed
                index.
              </p>
              <!-- </div> -->
            </div>
            <div class="col-6">
              <img
                src="static/images/tech-knowledge/sidewall-marking-image.jpg"
                class="width-100" />
            </div>
          </div>

          <div class="row justify-content-center mb-5 align-items-center">
            <div class="col-6">
              <img
                src="static/images/tech-knowledge/tyre-pressure-image.jpg"
                class="width-100" />
            </div>
            <div class="col-6 text-center">
              <h2 class="content-title mb-4 text-start">Tyre Pressure</h2>
              <div class="col-md-12 text-start">
                <p>
                  The tyre pressure has a strong influence to the safety and
                  economy of a vehicle. Tyre pressure when cold (never try to
                  adjust the pressure while the tyre is hot)must therefore be
                  checked regularly(every month),especially before a long trip.
                </p>
                <p>
                  Breaking distance is related to the tyre pressure.At a driving
                  speed of 100km/h,the braking distance with correctly inflated
                  tyres will be 40m compared o 42.4m with deflated
                  tyres.Performance is therefore improved by almost 6%,equal to
                  2.4m.
                </p>

                <p>
                  Incorrect inflation pressure causes irregular tyre
                  wear.Pressure that is too low causes shoulder wear and carries
                  the risk of structurally damaging the tyre.Pressure that is
                  too high causes wear to the centre of the tyre.
                </p>
              </div>
            </div>
          </div>

          <div class="row justify-content-center mb-5 align-items-center">
            <div class="col-6 text-center">
              <h2 class="content-title mb-4 text-end">Tyre Integrity</h2>
              <div class="col-md-12 text-end">
                <p>
                  A tyre is made of rubber,steel and fibres.Steel adn fibred are
                  structural materials,the rubber has the function of protecting
                  them against environmental influences.The rubber itself can be
                  damaged by chemicals or other environmental influences
                </p>
                <ul class="list-style">
                  <li>
                    Sharp objects,strong impacts or other mistreatment can cause
                    visible and invisible structural defects
                  </li>
                  <li>
                    Also tyres pressure that is too low causes structural
                    defects
                  </li>
                  <li>High temperatures and sunlight can destroy the rubber</li>
                </ul>
              </div>
            </div>
            <div class="col-6">
              <img
                src="static/images/tech-knowledge/tyre-intergrity-image.jpg"
                class="width-100" />
            </div>
          </div>

          <div class="row justify-content-center mb-5 align-items-center">
            <div class="col-6">
              <img
                src="static/images/tech-knowledge/tyre-tread-depth-image.jpg"
                class="width-100" />
            </div>
            <div class="col-6 text-center">
              <h2 class="content-title mb-4 text-start">Tyre Tread Depth</h2>
              <div class="col-md-12 text-start">
                <p>
                  The tread depth is a substantial safety faactore.It has an
                  important influence on the vehicles's contact with the ground.
                </p>
                <p>
                  While braking,the Anti-lock Braking System is controlling the
                  wheel at the slip threshold and water is collected.The tyre
                  tread becomes saturated and the braking distance increases
                  drastically.
                </p>
                <p>
                  Hydroplaning depends on water depth,thread depth and driving
                  speed.In order to measure hydroplaning,a car is driven into a
                  basin with 8 mm of water and speeds up.As soon as the motor
                  works harder withoud speeding up,hydroplaning starts.
                </p>
              </div>
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
