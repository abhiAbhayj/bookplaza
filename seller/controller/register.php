<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['register'])){
    $email=$_POST['email'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $pincode=$_POST['pin'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $desc=$_POST['desc'];
    $password=$_POST['password'];
    $conpassword=$_POST['conpassword'];
    

    
    $target="upload/";
    $image=$target.basename($_FILES['img']['name']);
	move_uploaded_file($_FILES['img']['tmp_name'], $image);
	$certimage=$target.basename($_FILES['cert']['name']);
	move_uploaded_file($_FILES['cert']['tmp_name'], $certimage);
    $docimage=$target.basename($_FILES['doc']['name']);
	move_uploaded_file($_FILES['doc']['tmp_name'], $docimage);


    $stmt=$admin->ret("SELECT * FROM `seller` WHERE `seller_email`='$email'");
    $num=$stmt->rowCount();

    if($num>0){
        echo "<script>alert('Email already exist');
      history.back();
        </script>";

    }else{
        if($password==$conpassword){
            $pass=password_hash($password,PASSWORD_BCRYPT);

            $stmt2=$admin->cud("INSERT INTO `seller`(`seller_name`,`seller_image`,`cert_img`,`seller_doc`,`seller_pno`,`seller_add`,`seller_email`,`seller_city`,`pincode`,`seller_state`,`seller_about`,`seller_pass`,`seller_date`)
            VALUES('$name','$image','$certimage','$docimage','$phone','$address','$email','$city','$pincode','$state','$desc','$pass',now())","saved");
            if($stmt2){
            echo "<script>alert('Registered Successfully');
            window.location='../sellerrlogin.php';
            </script>";
            } else {
                echo "<script>alert('Something went wrong!!,please try again.');
                history.back();
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
