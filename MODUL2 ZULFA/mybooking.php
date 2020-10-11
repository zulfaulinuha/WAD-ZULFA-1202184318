<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EAD HOTEL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-primary justify-content-center">
  <div class="navbar-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="home.php">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="booking.php">Booking<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
    <?php  
        $nama = $_POST['nama'];
        $datepicker = $_POST['datepicker'];
        $durasi = $_POST['durasi'];
        $check_out = date("d/m/Y",strtotime("+".$durasi." days", strtotime($datepicker)));
        $tipekamar = $_POST['tipekamar'];
        $tlp = $_POST['tlp'];
        $service = $_POST['service'];
        $booking_id = rand(1,1000000);
        $booking_date = date("d/m/Y");
        $price;
        if($tipekamar === 'Standard'){
            $price = $durasi * 90;
        }elseif ($tipekamar === 'Superior') {
            $price = $durasi * 150;
        }elseif ($tipekamar === 'Luxury') {
            $price = $durasi * 200;
        }
    

?>
    <div class="container-fluid">
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>
                    <th scope="col">Room Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?= $booking_id; ?></th>
                    <td><?= $nama;?></td>
                    <td><?= date('d/m/Y',strtotime($datepicker)) ?></td>
                    <td><?= $check_out ?></td>
                    <td><?= $tipekamar ?></td>
                    <td><?= $tlp ?></td>
                    <td>
                      
                            <?php if(!empty($_POST['service'])){

                                foreach($_POST['service'] as $service){
                                echo $service;
                            }
                        }else if(empty($_POST['service'])){
                        echo 'no service';}?>
                           
                    
                    </td>
                    <td><?= '$ '.$price ?></td>

                </tr>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>