<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['register'])){
    $email=$_POST['email'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $conpassword=$_POST['conpassword'];
    
    $target="upload/";
    $image=$target.basename($_FILES['img']['name']);
	move_uploaded_file($_FILES['img']['tmp_name'], $image);
	


    $stmt=$admin->ret("SELECT * FROM `user` WHERE `user_email`='$email'");
    $num=$stmt->rowCount();

    if($num>0){
        echo "<script>alert('Email already exist');
      history.back();
        </script>";

    }else{
        if($password==$conpassword){
            $pass=password_hash($password,PASSWORD_BCRYPT);
            						

            $stmt2=$admin->cud("INSERT INTO `user`(`user_name`,`user_pno`,`user_email`,`user_img`,`user_pass`,`user_date`)
            VALUES('$name','$phone','$email','$image','$pass',now())","saved");
            if($stmt2){
            echo "<script>alert('Registered Successfully');
            window.location='../userlogin.php';
            </script>";
            } else {
                echo "<script>alert('Something went wrong!!,please try again.');
                // history.back();
                </script>";
            }
        }else{
            echo "<script>alert('Password did not match,please try again.');
            history.back();
            </script>";
        }

        }
        
    }

?>
