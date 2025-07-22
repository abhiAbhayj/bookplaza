<?php
include('../config.php');
$admin=new Admin();

$semail=$_SESSION['supemail'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($password==$cpassword)
{
	$pass=password_hash($password,PASSWORD_BCRYPT);
	  $sql=$admin->cud("UPDATE `user` SET `user_pass`='$pass' where `user_email`='$semail'","saved");
	  echo "<script>alert('Password sucessfully changed');
    window.location='../userlogin.php';
 </script>"; 

}
else
{
	 echo "<script>alert('Password did not match');
    window.location='../createpassword.php';
 </script>";
}