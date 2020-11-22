<?php
    $host = "localhost:3306";
    $user = "root";
    $pass ="";
    $database = "wad_modul4";
    $connect = mysqli_connect($host,$user,$pass,$database)
                or die("Unable to connect to database");
?>