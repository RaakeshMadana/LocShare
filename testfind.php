<?php
$ke=$_POST['key'];
$con=mysqli_connect("localhost","root","wolverine","srp");
$res=mysqli_query($con,"SELECT * FROM `user` WHERE `key`='$ke'");
while($row = mysqli_fetch_array($res))
{
  $lat=$row['lat'];
  $long=$row['long'];
}
echo "<html>
<head>
 <link rel='stylesheet' href='map.css'>
<script
src='http://maps.googleapis.com/maps/api/js'>
</script>
<script>

function initialize()
{
    latitude=".$lat."
    longitude=".$long.";
    var myCenter=new google.maps.LatLng(latitude,longitude);
var mapProp = {
  center: myCenter,
  zoom:5,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById('googleMap'),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
  title:'Click to zoom'
  });

marker.setMap(map);

// Zoom to 9 when clicking on marker
google.maps.event.addListener(marker,'click',function() {
  map.setZoom(15);
  map.setCenter(marker.getPosition());
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div class='Flexible-container' id='googleMap'></div>
</body>
</html>
";
?>
