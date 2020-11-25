<?php
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>EAD Store</title>
</head>

<body>
<?php
    if(isset($_SESSION["login"])){
        echo '<nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="home.php">WAD BEAUTY
        </a>
        <div style="float: right;">
            <table>
                <tr>
                    <td><a href="cart.php"><img src="cart.png" alt="Cart" width="20px"></a></td>
                    <td>
                        <div class="bs-example" style="padding: 5px;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">';
                            echo $_SESSION["userLogin"];
                            echo '</a>
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
    </nav>';
    }else{
        echo '<nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="home.php">WAD BEAUTY
        </a>
        <div style="float: right;">
            <a href="" data-toggle="modal" data-target="#loginButton">Login</a>
            <label> </label>
            <a href="config.php" data-toggle="modal" data-target="#regisButton">Register</a>
        </div>
    </nav>';
    }
    ?>
    <!-- Before Login -->




    <!-- AfterLogin -->
    <div class="modal fade" id="loginButton" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="config.php" method="POST">
                    <div class="modal-body">
                        <label>Email Address</label>
                        <div class="input-group flex-nowrap">
                            <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email"
                                aria-describedby="addon-wrapping">
                        </div><br>
                        <label>Password</label>
                        <div class="input-group flex-nowrap">
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                aria-label="Password" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class=" modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" name="login" class="btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Form Register -->
    <div class="modal fade" id="regisButton" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Register</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="config.php" method="POST">
                    <div class="modal-body">
                    <label>Nama</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" name="rNama" class="form-control" placeholder="Nama"
                                aria-label="Nama" aria-describedby="addon-wrapping">
                        </div><br>
                        <label>Email Address</label>
                        <div class="input-group flex-nowrap">
                            <input type="email" name="rEmail" class="form-control" placeholder="Email"
                                aria-label="Email" aria-describedby="addon-wrapping">
                        </div><br>
                        <label>No. Handphone</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" name="rPhone" class="form-control" placeholder="No. Handphone"
                                aria-label="No. Handphone" aria-describedby="addon-wrapping">
                        </div><br>
                        <label>Username</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" name="rUsername" class="form-control" placeholder="Username"
                                aria-label="Username" aria-describedby="addon-wrapping">
                        </div><br>
                        <label>Password</label>
                        <div class="input-group flex-nowrap">
                            <input type="password" name="rPass" class="form-control" placeholder="Password"
                                aria-label="Password" aria-describedby="addon-wrapping">
                        </div><br>
                        <label>Confirm Password</label>
                        <div class="input-group flex-nowrap">
                            <input type="password" name="cPass" class="form-control" placeholder="Confirm Password"
                                aria-label="Confirm Password" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class=" modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" name="register" class="btn btn-primary" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>



    <form action="config.php" method="GET">
        <div style="width: 60%;margin:auto;">
            <div class="card" style='background-image:url("gradient2.jpg");background-size:cover;color: black;'>
                <div style="text-align:center;">
                    <br>
                    <h1>WAD BEAUTY</h1>
                    <p>Tersedia Skin Care dengan harga murah tapi bukan murahan dan berkualitas</p>
                    <br>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <img src="yuja_niacin.jpg" class="card-img-top" alt="yuja naichin logo">
                    <div class="card-body">
                        <h5 class="card-title">YUJA NIACIN 30 DAYS BLEMISH CARE SERUM</h5>
                        <p class="card-text">Produk terbaru dari somebymi yang memiliki manfaat untuk Whitening +
                        Blemish Care + Anti-Wrinkle, sangat recommended untuk masalah kulit kusam, kuliah kering dan
                        bekas jerawat atau FLEK hitam</p>
                        <p class="card-footer" style="background-color: white;"> Rp169.000</p>
                    </div>
                </div>
                <div class="card">
                    <img src="snail.jpeg" class="card-img-top" alt="snail logo">
                    <div class="card-body">
                        <h5 class="card-title">SOMEBYMI Snail Truecica Miracle Repair Cream</h5>
                        <p class="card-text">Sebagai pelembab, krim ini mampu memberikan kelembapan yang menyeluruh dan
                        tahan lama bagi kulit, sehingga terasa halus, lembap, dan kenyal. Mencerahkan, menghambat penuaan seperti
                        keriput dan garis halus, juga menenangkan kulit yang iritasi, dengan kandungan 420,000ppm Snail Truecica</p>
                        <p class="card-footer" style="background-color: white;"> Rp180.000</p>
                    </div>
                </div>
                <div class="card">
                    <img src="toner.jpeg" class="card-img-top" alt="toner logo">
                    <div class="card-body">
                        <h5 class="card-title">30 DAYS MIRACLE TONER</h5>
                        <p class="card-text">Dengan kandungan AHA, BHA, dan PHA bekerja secara efektif untuk membuat kulit
                        lebih bersih dan lebih bersinar, mengandung 10.000 ppm ekstrak pohon teh alami yang secara efektif
                        meningkatkan elastisitas dan menutrisi kulit Anda tanpa efek iritasi karena tidak mengandung 20 bahan
                        dan 500 pewarna berbahaya</p>
                        <p class="card-footer" style="background-color: white;"> Rp108.000</p>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card">

                    <div class="card-body">
                    <center><input type="submit" name="buy1" class="btn btn-primary btn-block" value="Tambahkan ke Keranjang"></center>
                    </div>
                </div>
                <div class="card">

                    <div class="card-body">
                        <center><input type="submit" name="buy2" class="btn btn-primary btn-block" value="Tambahkan ke Keranjang"></center>
                    </div>
                </div>
                <div class="card">

                    <div class="card-body">
                    <center><input type="submit" name="buy3" class="btn btn-primary btn-block" value="Tambahkan ke Keranjang"></center>
                    </div>
                </div>
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