  function init_map(){
    var myOptions = {
      zoom:14,
      center:new google.maps.LatLng(-23.2404356,-45.9129676),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
    marker = new google.maps.Marker({
      map: map,
      position: new google.maps.LatLng(-23.2404356,-45.9129676)});
      infowindow = new google.maps.InfoWindow({content:'<strong>Easydev Desenvolvimentos</strong><br>Rua Raimundo Barbosa Nogueira 451<br>12237-828 São José dos Campos<br>'});
    google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);
}
google.maps.event.addDomListener(window, 'load', init_map);