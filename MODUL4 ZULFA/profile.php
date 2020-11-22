<?php
session_start();
if(!(isset($_SESSION["login"]))){
    echo "<script>window.location.href='home.php'</script>";
        exit;
}
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

    <form action="config.php" method="POST">
        <div style="width:60%;margin:auto;">
            <center><h1>Profile</h1></center>
            <div></div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <label readonly class="form-control-plaintext"><?=$_SESSION['email']?></label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" name="userUpdate" class="form-control" value="<?=$_SESSION['userLogin']?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Mobile Phone</label>
                <div class="col-sm-10">
                    <input type="number" name="phoneUpdate" class="form-control" value="<?=$_SESSION['phone']?>">
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="passUpdate" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password Confirm</label>
                <div class="col-sm-10">
                    <input type="password" name="cPassUpdate" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <input type="submit" name="update" placeholder="Save" class=" btn btn-primary btn-block ">
                <a href="home.php" class=" btn btn-light btn-block ">Cancel</a>
            </div>
        </div>
    </form>

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