<?php
if(!(isset($_SESSION["login"]))){
    echo "<script>window.location.href='home.php'</script>";
        exit;
}
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Required meta tags -->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>EAD Store</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="home.php">WAD BEAUTY
        </a>
        <div style="float: right;">
            <table>
                <tr>
                    <td><a href="cart.php"><img src="cart.png" alt="Cart" width="20px"></a></td>
                    <td>
                        <div class="bs-example" style="padding: 5px;">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$_SESSION["userLogin"]?></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="profile.php" class="dropdown-item">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a href="logout.php" class="dropdown-item">Logout</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>


        </div>
    </nav>
<div style="width:70%;margin:auto;">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $id = $_SESSION["userID"];
    $tampil = mysqli_query($connect, "SELECT * FROM cart_table WHERE user_id = '$id'");
    $count=1;
    $price=0;
        while($row = mysqli_fetch_array($tampil)){
            echo "<tr>";
            echo "<td>$count</td>";
            echo "<td>";
            echo $row['product'];
            echo "</td>";
            echo "<td>";
            echo $row['price'];
            echo "</td>";
            echo "<td><a href='delete.php?id=".$row['id']." 'name='delete' class='btn btn-danger' data-dismiss='modal'>&times</a></td>";
            $count=$count+1;
            $price=$price+$row['price'];
            echo "</tr>";
        }
        
  ?>
</tbody>
    <tr>
        <td colspan="2"><b>Total</b></td>
        <td colspan="2"><b><?=$price?></b></td>
    </tr>
</table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
</html>