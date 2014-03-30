var map;

function initialize() {

	var mapOptions = {
		zoom: 14,
		center: new google.maps.LatLng(33.8869,35.5131),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	if (navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(function (position) {
             initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
             map.setCenter(initialLocation);
         });
     }

     getOutput();

//	plotPoint(<?php echo $location; ?>, '<?php echo $desc; ?>');


}

function plotPoint(loc, id){
	var point;

	point = new google.maps.Marker({
		position: new google.maps.LatLng( loc ),
		map: map,
		title: id
	});

	point.setMap(map);


}

function getOutput(){
	$.ajax({
		url: '../php/getPoints.php',
		success: plotAll,
		error: function() {
			console.log('could not add point');
		},

	});
	return false;
}

function plotAll(response){
	console.log(response.responseText);
	$("#output").html(response.responseText);
}