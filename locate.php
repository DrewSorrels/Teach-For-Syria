<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Locate NGO</title>

    <style>
      html, body, #map-canvas {
        height: 90%;
        margin: 40px;
        padding: 20px
      }
    </style>

    <!-- Bootstrap Core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
// This example displays a marker at the center of Australia.
// When the user clicks the marker, an info window opens.

function initialize() {
  var myLatlng = new google.maps.LatLng(32.298783, 36.321605);
  var mapOptions = {
    zoom: 9,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3 id="firstHeading" class="firstHeading">Al-Zaatari Refugee Camp</h3>'+
      '<div id="bodyContent">'+
      '<p><b>Child Population:</b> 500000<br>' +
      '<b>No. of Serving Volunteers:</b> 100<br>' +
      '<b>Topics taught:</b> See full list here<br> '+
      '<b>Email Enquiries:</b> Use SendGrid<br> '+
      '<b>Schedule a visit:</b>Use Twilio Here</p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      icon: iconBase + 'schools_maps.png',
      title: 'Al-Zaatari Refugee Camp'
  });
  google.maps.event.addListener(marker, 'mouseover', function() {
    infowindow.open(map,marker);
  });

var contentString2 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3 id="firstHeading" class="firstHeading">Jusoor-Syria</h3>'+
      '<div id="bodyContent">'+
      '<p><b>Child Taught:</b> 12000<br>' +
      '<b>No. of Serving Volunteers:</b> 40<br>' +
      '<b>Topics taught:</b> See full list here<br> '+
      '<b>Email Enquiries:</b> Use SendGrid<br> '+
      '<b>Schedule a visit:</b>Use Twilio Here</p>'+
      '</div>'+
      '</div>';

   var point1 = new google.maps.LatLng(32.54, 36.5);
    var marker1 = new google.maps.Marker({
       position: point1,
       map: map,
       title:'Marker 1',
       icon: iconBase + 'schools_maps.png'
    });
    var html_text1    = 'This is text for the first marker';
    var infowindow1 = new google.maps.InfoWindow({
       content: contentString2
    });
    google.maps.event.addListener(marker1, 'mouseover', function() {
        infowindow1.open(map, marker1);
    });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <i class="fa fa-pencil" ></i>  <span class="light">Teach for</span> Syria
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#profile" data-toggle="modal" data-target="#profile">Profile</a>
                    </li>
                    <li class="page-scroll">
                        <a href="board.php">Collaborate</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Locate NGO</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Teacher Training</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


   <div id="map-canvas" style="color:Black;"></div>

     <div class="modal fade" id="profile" style="color:Black;">
              <div class="modal-dialog">
                 <div class="modal-content">
                      <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           <center><h3 class="modal-title"><b>Profile</b></h3></center>
                      </div>
                <div class="modal-body">
                  <p style="text-align:center;"><img src="img/book.png" class="img-polaroid"></p>
                    <p><b>Name:</b> Suhem Parack</p>
                    <p><b>Country:</b> Jordan</p>
                    <p><b>Teaching Interest:</b> Math</p>
                    <p><b>Places Taught:</b> Zaatari Camp, Amman</p>
                </div>
                <div class="modal-footer">
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </div><!-- /.modal-content -->
             </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    <!-- Core JavaScript Files -->
    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


    <!-- Google Maps API Key - You will need to use your own API key to use the map feature -->

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
