<?php
$lat=$_POST['lat'];
$lon=$_POST['long'];
$mail=$_POST['email'];
$pwd=$_POST['pwd'];
$key=0;
$mail=mysql_real_escape_string($mail);
$con=mysqli_connect("localhost","cl10-admin-uzl","supernova","cl10-admin-uzl");
$res=mysqli_query($con,"SELECT * FROM `user` WHERE `emailid`='$mail'");
$row = mysqli_fetch_array($res)
echo $row;
$key=$row['key'];
if($key==0)
{
  echo "Emailid and password do not match";
}
else
{
  $del="DELETE FROM `user` WHERE `emailid`='$mail'";
  $ins="INSERT INTO `user` (`emailid`,`pwd`,`key`,`lat`,`long`) VALUES ('$mail','$pwd','$key','$lat','$long')";
  mysqli_query($con,$del);
  mysqli_query($con,$ins);
  echo $lat;
  echo $lon;
}
?>
