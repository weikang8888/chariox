function initMap() {
  const myLatLng = { lat: 2.4640435247852444, lng: 102.9198134922123 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 18,
    center: myLatLng,
  });

  new google.maps.Marker({
    position: myLatLng,
    map,
    title: "Hello World!",
  });
}
