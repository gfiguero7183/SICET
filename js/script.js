function iniciarMap(){
    var coord = {lat:4.617742 ,lng: -74.102389};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 16,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}
