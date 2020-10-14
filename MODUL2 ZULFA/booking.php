<!DOCTYPE html>
<html>
<head>
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
<h4 class="text-primary text-center">EAD HOTEL</h4>
<h5 class="text-info text-center"> Welcome To 5 Star Hotel</h5>
<br>

<div class="row justify-content-center">
    <div class="col-4">
      <from action="mybooking.php" method="get">
  <div class="form-group">
    <label for="nama">Name</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="form-group">
  	<label for="nama">Check-in</label>
  <input id="datepicker" width="487" name="datepicker"/>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
</div>
<div class="form-group">
    <label for="durasi">Duration</label>
    <input type="text" class="form-control" id="durasi" name="durasi">
    <small id="hari" class="form-text text-muted">Day(s)</small>
  </div>
 				<div class="form-group">
                            <label for="tipe">Room Type</label>
                            <?php
                                if(!empty($_POST['type'])){
                            ?>
                                <div class="form-group">
                                <select class="custom-select mr-sm-2" name="tipekamar" value="tipekamar" id="tipekamar1">
                                    <option selected>Choose...</option>
                                    <option value="Standard">Standard</option>
                                    <option value="Superior">Superior</option>
                                    <option value="Luxury">Luxury</option>
                            </select>
                                </div>
                            <?php } else { ?>
                                <div>
                                    <input type="text" value="<?php echo $_POST['type'] ?>" readonly name="tipekamar" value="tipekamar">
                                </div> 
                            <?php } ?>  
                            
                            
                        </div>
<div class="form-group">
    <label for="service">Add Service(s)</label>
    <small id="hari" class="form-text text-muted">$ 20/Service</small>
    <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"  name="service[]" value="Room Service"> Room Service
    </label>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"  name="service[]" value="Breakfast"> Breakfast
    </label>
  </div>
  <div class="form-group">
    <label for="tlp">Phone Number</label>
    <input type="text" class="form-control" id="tlp"  name="tlp">
  </div>
 </div>
  <button type="submit" href="mybooking.php" class="btn btn-primary btn-lg btn-block">Book</button>
</form>
    </div>
    <div class="col-4">
      <img src="<?php echo $_GET['type'] ?>.jpg" alt="Standard" style="width: 650px; height: 500px;">
    </div>
  </div>

</body>

</html>