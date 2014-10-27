function initialize() {
  var myLatlng = new google.maps.LatLng(-37.327413, -59.134512);
  var mapOptions = {
    zoom: 17,
    center: myLatlng,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Tupar VyT!'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);