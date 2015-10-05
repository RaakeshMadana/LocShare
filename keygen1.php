<?php
function generateKey($length = 10) {
 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $charactersLength = strlen($characters);
 $randomString = '';
 for ($i = 0; $i < $length; $i++) {
 $randomString .= $characters[rand(0, $charactersLength - 1)];
 }
 return $randomString;
}
$rankey=generateKey();
echo $rankey;
$con=mysqli_connect("localhost","root","wolverine","srp");
$sql="INSERT INTO `user`(`emailid`,`pwd`,`key`) VALUES ('$_POST[email]','$_POST[pwd]','$rankey')";
if(!mysqli_query($con,$sql))
{
	echo "Could not enter data".mysqli_error($con);
}
?>
