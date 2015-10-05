<?php
$con=mysqli_connect("localhost","cl10-admin-uzl","supernova","cl10-admin-uzl");
$sql="DELETE FROM user WHERE emailid='$_POST[email]' AND pwd='$_POST[pwd]'";
if(!mysqli_query($con,$sql))
{
	echo "Could not enter data".mysqli_error($con);
}
else {
  echo "You are deleted";
}
?>
