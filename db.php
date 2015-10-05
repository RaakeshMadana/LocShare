<?php
$lat=$_POST['lat'];
$lon=$_POST['long'];
$mail=$_POST['email'];
$pwd=$_POST['pwd'];
//$mail=mysql_real_escape_string($mail);
$con=mysqli_connect("localhost","cl10-admin-uzl","supernova","cl10-admin-uzl");
$sql="UPDATE `user` SET `lat`='$lat',`long`='$lon' WHERE `emailid`='$mail' AND `pwd`='$pwd'";
if(!mysqli_query($con,$sql))
{
	echo "Could not enter data".mysqli_error($con);
}
else
{
    echo $lat;
    echo $lon;
}
?>
