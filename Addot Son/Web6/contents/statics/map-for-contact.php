<script>
  function initMap() {
   var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: {lat: 33.320351, lng: -111.907141}
});

   var image = 'assets/images/marker.png';
   var beachMarker = new google.maps.Marker({
    position: {lat: 33.320351, lng: -111.907141},
    map: map,
    icon: image
});
}
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD84ST3FIRNNVS1CEm_IE9KoR-lAIw8OPo&callback=initMap" type="text/javascript"></script>