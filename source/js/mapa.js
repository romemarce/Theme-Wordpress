var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: new google.maps.LatLng(-31.3925448,-58.0326048),
    mapTypeId: 'roadmap'
  });
  //DEFINE ICONOS
  var iconBase = WPURL.home_url+'/source/img/';
  var icons = {
    cachotoller: {
      icon: iconBase + 'p.png'
    }
  };
  // CREA POSICIONES
  var features = [
    {
      position: new google.maps.LatLng(-31.3925448,-58.0326048),
      type: 'cachotoller'
    }
  ];

  //CREA EL MARCADOR
  features.forEach(function(feature) {
    var marker = new google.maps.Marker({
      position: feature.position,
      icon: icons[feature.type].icon,
      map: map
    });
  });
}