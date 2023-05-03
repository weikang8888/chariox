function initMap() {
  const myLatLng = { lat: 2.4641896090638924, lng: 102.91983144134475 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    center: myLatLng,
  });

  const points = [
    [
      "1",
      "A",
      2.5087898859664874,
      102.81350169244817,
      `<p class="text-black">This is A</p>`,
    ],
    [
      "2",
      "B",
      2.49374240185527,
      102.85897342292282,
      `<p class="text-black">This is B</p>`,
    ],
    [
      "3",
      "C",
      2.5011472088163056,
      102.85658834825935,
      `<p class="text-black">This is C</p>`,
    ],
    [
      "4",
      "D",
      2.4962957222302466,
      102.84687128163006,
      `<p class="text-black">This is D</p>`,
    ],
    [
      "5",
      "E",
      2.497437795877134,
      102.82664195090041,
      `<p class="text-black">This is E</p>`,
    ],
    [
      "6",
      "F",
      2.5240773782823474,
      102.81155653701249,
      `<p class="text-black">This is F</p>`,
    ],
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
      content: points[i][4],
    });

    marker.addListener("mouseover", () => {
      detailWindow.open(map, marker);

      if (mouseoverInfoWindow) {
        mouseoverInfoWindow.close();
      }
      detailWindow.open(map, marker);
      mouseoverInfoWindow = detailWindow;
    });

    const resultcard = document.querySelectorAll(".markericon");
    const markerIds = ["1", "2", "3", "4", "5", "6"];
    const resultCardBox = document.querySelectorAll(".find-dealer-result-card");

    var activeInfoWindow;
    var mouseoverInfoWindow;
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
              element.scrollIntoView();

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
