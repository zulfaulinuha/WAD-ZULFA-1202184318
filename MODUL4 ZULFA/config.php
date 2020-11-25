<?php
include "koneksi.php";
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $checkUsername = mysqli_query($connect,"SELECT * FROM users_table WHERE email='$email' AND password='$password'");
    if (mysqli_num_rows($checkUsername)===1){
        $row=mysqli_fetch_assoc($checkUsername);
            $_SESSION["userLogin"] = $row["username"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["phone"] = $row["mobile_number"];
            $_SESSION["userID"] = $row["id"];
            $_SESSION["login"] = true;
            echo "<script>alert('Login Success');window.location.href='home.php'</script>";

    }else{
        echo "<script>alert('Wrong Email or Password');window.location.href='home.php'</script>";
    }

}
if(isset($_POST['register'])){
    $nama = $_POST['rNama'];
    $email = $_POST['rEmail'];
    $phone = $_POST['rPhone'];
    $username = $_POST['rUsername'];
    $password = $_POST['rPass'];
    $cPassword = $_POST['cPass'];

    if(!($password==$cPassword)){
        echo "<script>alert('Password didnt match !');window.location.href='home.php'</script>";
        exit;
    }
    $checkEmail = mysqli_query($connect,"SELECT * FROM users_table WHERE email='$email'");
    $checkEmail = mysqli_num_rows($checkEmail);

    if($checkEmail==0){
        $checkUser = mysqli_query($connect,"SELECT * FROM users_table WHERE username='$username'");
        $checkUser = mysqli_num_rows($checkUser);
        if($checkUser==0){
            $query = mysqli_query($connect,"INSERT INTO `users_table` (`nama`, `email`, `username`, `mobile_number`, `password`) 
            VALUES ('$nama','$email','$username','$phone','$password')");
            if ($query > 0){
                echo "<script>alert('Register Success !');window.location.href='home.php'</script>";
            }else{
                echo "<script>alert('Unable to Regist');window.location.href='home.php'</script>";
            }
        }else{
            echo "<script>alert('Username already exist');window.location.href='home.php'</script>";
        }    
    }else{
        echo "<script>alert('Email already Registered');window.location.href='home.php'</script>";
    }
}
if(isset($_POST['update'])){
    $updateUser=$_POST['userUpdate'];
    $updatePhone=$_POST['phoneUpdate'];
    $updatePass=$_POST['passUpdate'];
    $updatePassC=$_POST['cPassUpdate'];
    $idUser=$_SESSION['userID'];
    if($updatePass===$updatePassC){
        $update = mysqli_query($connect,"UPDATE users_table SET username='$updateUser',mobile_number='$updatePhone',password='$updatePass' WHERE id='$idUser'");
        $_SESSION["userLogin"] = $updateUser;
        $_SESSION["phone"] = $updatePhone;

        echo "<script>alert('Profile Updated !');window.location.href='home.php'</script>";
    }else{
        echo "<script>alert('Password didnt match !');window.location.href='profile.php'</script>";
        exit;
    }
}
if(isset($_GET['buy1'])){
    $idUser = $_SESSION["userID"];
    $query = mysqli_query($connect,"INSERT INTO `cart_table` (`user_id`, `product`, `price`) 
    VALUES('$idUser','YUJA NIACIN 30 DAYS BLEMISH CARE SERUM','169000')");
    echo "<script>alert('Added to Cart');window.location.href='home.php'</script>";
}
if(isset($_GET['buy2'])){
    $idUser = $_SESSION["userID"];
    $query = mysqli_query($connect,"INSERT INTO `cart_table` (`user_id`, `product`, `price`) VALUES('$idUser','SOMEBYMI Snail Truecica Miracle Repair Cream','180000')");
    echo "<script>alert('Added to Cart');window.location.href='home.php'</script>";
}
if(isset($_GET['buy3'])){
    $idUser = $_SESSION["userID"];
    $query = mysqli_query($connect,"INSERT INTO `cart_table` (`user_id`, `product`, `price`) VALUES('$idUser','30 DAYS MIRACLE TONER','210000')");
    echo "<script>alert('Added to Cart');window.location.href='home.php'</script>";
}
?>