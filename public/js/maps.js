/* 
 * Google Maps functions
 */

function initialize() {
    var latlng = new google.maps.LatLng(10.420988112536117,-75.54889619350433);
    var myOptions = {
      zoom: 15,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	
	var marker = new google.maps.Marker({
      position: latlng, 
      map: map, 
      title:"Centro de convenciones Cartagena de Indias!"
  });
  }


