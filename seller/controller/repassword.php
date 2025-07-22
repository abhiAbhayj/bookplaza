<?php
include('../config.php');
$admin=new Admin();

$semail=$_SESSION['supemail'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($password==$cpassword)
{
	$pass=password_hash($password,PASSWORD_BCRYPT);
	  $sql=$admin->cud("UPDATE `seller` SET `seller_pass`='$pass' where `seller_email`='$semail'","saved");
	  echo "<script>alert('password  sucessfully changed');
    window.location='../sellerrlogin.php';
 </script>"; 

}
else
{
	 echo "<script>alert('Password did not match');
    window.location='../createpassword.php';
 </script>";
}