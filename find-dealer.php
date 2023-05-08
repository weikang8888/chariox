<?php
// Include the database configuration file
require_once 'config.php';

?>

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
      <nav
        class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0 px-3 px-lg-0 navbar-otherpage">
        <a href="index.php" class="navbar-brand d-block d-lg-none">
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
            <a href="index.php" class="nav-item nav-link nav-pd fw-bolder">
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
              class="nav-item nav-link active nav-pd fw-bolder">
              Find Dealers
            </a>
            <a
              href="tech-knowledge.php"
              class="nav-item nav-link nav-pd fw-bolder">
              Tech & Knowledge
            </a>
            <a href="contact-us.php" class="nav-item nav-link nav-pd fw-bolder">
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
            <?php
              $query = "SELECT * FROM map";
              $resultset = mysqli_query($conn, $query);
              // Free result set
              foreach ($resultset as $row) {
            ?>
              <li class="find-dealer-result-card" id=<?php echo $row['id']; ?>>
                <div class="find-dealer-result-card-container">
                  <div class="find-dealer-result-card-header">
                    <div class="find-dealer-result-card-header-distance">
                      <div class="markericon"><?php echo $row['char']; ?></div>
                      <div class="find-dealer-result-card-header-range">
                        <?php echo $row['km']; ?>
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
                  <div class="find-dealer-result-card-bottom">
                  <?php echo $row['name']; ?>
                  </div>
                </div>
              </li>
              <?php }?>
            </ul>
          </div>
        </div>
      </section>
      <section class="find-dealer-map-section">
        <div id="map"></div>
      </section>
    </div>

    <!-- Footer Start -->
    <!-- Footer End -->
  </body>

  <script
    async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB94E1buyq9HpajiO6d8EA8REcskcoAmxw&callback=initMap"></script>
  <script>
        function initMap() {
          const myLatLng = { lat: 2.4641896090638924, lng: 102.91983144134475 };
          const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 12,
          center: myLatLng,
      });

      
      const points = [
        <?php 
            $result = $conn->query("SELECT * FROM map WHERE id");
            if ($result->num_rows > 0) {
               while ($row = $result->fetch_assoc()) {
            echo '[
              "' . $row['id'] . '",
              "' . $row['char'] . '",
              ' . $row['latitude'] . ',
              ' . $row['longitude'] . ',
              `<p class="map-info">' . $row['info'] . '</p>`, 
              `<p class="map-address">' . $row['address'] . '</p>`],';
          }
        }?>
      ];

      let normalIcon = {
        url: "http://localhost:8080/chariox/static/images/other/map-marker.svg",
        scaledSize: new google.maps.Size(50, 50), // scaled size
      };
      let selectedIcon = {
        url: "http://localhost:8080/chariox/static/images/other/map-marker-selected.svg",
        scaledSize: new google.maps.Size(50, 50), // scaled size
      };

      for (var i = 0; i < points.length; i++) {
        const marker = new google.maps.Marker({
          position: {
            lat: points[i][2],
            lng: points[i][3],
          },
          map: map,
          icon: normalIcon,
          label: {
            text: points[i][1],
            color: "#000000",
            className: "marker-label",
          },
          id: points[i][0], // Set the marker's ID
        });
        const detailWindow = new google.maps.InfoWindow({
            content: points[i][4] + '<br>' + points[i][5],
            maxWidth: 300,

        });

        // marker.addListener("mouseover", () => {
        //   detailWindow.open(map, marker);

        //   if (mouseoverInfoWindow) {
        //     mouseoverInfoWindow.close();
        //   }
        //   detailWindow.open(map, marker);
        //   mouseoverInfoWindow = detailWindow;
        // });

        const resultcard = document.querySelectorAll(".markericon");
        const markerIds = 
        <?php
          $result = $conn->query("SELECT id FROM map");
          $ids = [];
          while ($row = $result->fetch_assoc()) {
            $ids[] = $row['id'];
          }
          echo json_encode($ids);
          ?>
        ;
        const resultCardBox = document.querySelectorAll(".find-dealer-result-card");

        var activeInfoWindow;
        var selectedMarker;
        var prevSelectedElement;

        function activeInfoWindows() {
          if (activeInfoWindow) {
            activeInfoWindow.close();
          }

          detailWindow.open(map, marker);
          activeInfoWindow = detailWindow;
        }

        function selectedMarkers() {
          if (selectedMarker) {
            selectedMarker.setIcon(normalIcon);
          }
          marker.setIcon(selectedIcon);
          selectedMarker = marker;
        }

        function toggleMarkerIconSelected(resultcard, index) {
          resultcard.forEach((el) => {
            el.classList.remove("markericon-selected");
          });
          resultcard[index].classList.toggle("markericon-selected");
        }

        for (let i = 0; i < resultCardBox.length; i++) {
          for (let i = 0; i < resultcard.length; i++) {
            marker.addListener("click", function () {
              map.setZoom(16);
              map.setCenter(marker.getPosition());

              if (markerIds[i] === marker.id) {
                console.log(marker.id);
                const element = document.getElementById(marker.id);
                if (element) {
                  element.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center',
                    inline: 'center'
                  });

                  if (prevSelectedElement) {
                    prevSelectedElement.classList.remove(
                      "find-dealer-result-card-selected"
                    );
                  }
                  element.classList.toggle("find-dealer-result-card-selected");
                  prevSelectedElement = element;
                } else {
                  console.error(`Element with id '${marker.id}' not found`);
                }

                if (selectedMarker && selectedMarker !== marker) {
                  const selectedElement = document.getElementById(
                    selectedMarker.id
                  );

                  if (selectedElement) {
                    selectedElement.classList.remove(
                      "find-dealer-result-card-selected"
                    );
                  }
                }

                toggleMarkerIconSelected(resultcard, i);
                activeInfoWindows();
                selectedMarkers();
              }
            });

            resultCardBox[i].addEventListener("click", function () {
              if (markerIds[i] === marker.id) {
                console.log(marker.id);
                map.setZoom(16);
                map.setCenter(marker.getPosition());
                const element = document.getElementById(marker.id);

                if (prevSelectedElement) {
                  prevSelectedElement.classList.remove(
                    "find-dealer-result-card-selected"
                  );
                }

                element.classList.toggle("find-dealer-result-card-selected");
                prevSelectedElement = element;

                toggleMarkerIconSelected(resultcard, i);
                activeInfoWindows();
                selectedMarkers();
              }
            });
          }
        }
      }
    }
  </script>
</html>
