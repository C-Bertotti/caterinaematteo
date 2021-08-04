// Set the date we're counting down to
var countDownDate = new Date("Sep 11, 2021 10:30:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("date-d").innerHTML = days;
  document.getElementById("date-h").innerHTML = hours;
  document.getElementById("date-m").innerHTML = minutes;


  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Marito e Moglie";
  }
}, 1000);


//mappa
mapboxgl.accessToken = 'pk.eyJ1IjoiY2F0ZTQ5OTciLCJhIjoiY2twZnA5ejYxMHk0eTJubzhkM2psbmd2NiJ9.vMy_pKghDVjf47V-flmGEg';

var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/cate4997/ckpfphzxm1gdg17pllyu17su6',
  center: [11.166323, 46.027708],
  zoom: 11
});

var geojson = {
  type: 'FeatureCollection',
  features: [{
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [11.166323, 46.027708]
    },
    properties: {
      title: 'IL RISTORANTE',
      description: 'Rifugio Maranza'
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [11.154885, 46.008020]
    },
    properties: {
      title: 'IL RITROVO',
      description: 'per lo sposo'
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [11.143278, 46.040047]
    },
    properties: {
      title: 'IL RITROVO',
      description: 'per la sposa'
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [11.212679, 46.004470]
    },
    properties: {
      title: 'LA CERIMONIA',
      description: 'Santuario Madonna del Feles'
    }
  }]
};

// add markers to map
geojson.features.forEach(function(marker) {

  // create a HTML element for each feature
  var el = document.createElement('div');
  el.className = 'marker';

  // make a marker for each feature and add to the map
  new mapboxgl.Marker(el)
    .setLngLat(marker.geometry.coordinates)
    .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
    .setHTML('<h3 class="map__popup__title">' + marker.properties.title + '</h3><p class="map__popup__p">' + marker.properties.description + '</p>'))
    .addTo(map);
});

