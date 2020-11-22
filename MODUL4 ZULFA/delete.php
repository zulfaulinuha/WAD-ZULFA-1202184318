<?php
session_start();
include "koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query($connect,"DELETE FROM cart_table WHERE id='$id'");
    echo "<script>alert('Removed from cart');window.location.href='cart.php'</script>";
?>