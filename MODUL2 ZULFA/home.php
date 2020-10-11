<!DOCTYPE html>
<html>

<head>
     <title>EAD HOTEL</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
     <nav class="navbar navbar-expand-sm navbar-light bg-primary justify-content-center">
          <div class="navbar-center" id="navbarNav">
               <ul class="navbar-nav">
                    <li class="nav-item active">
                         <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="booking.php">Booking</a>
                    </li>
               </ul>
          </div>
     </nav>

     <h4 class="text-primary text-center">EAD HOTEL</h4>
     <h5 class="text-info text-center"> Welcome To 5 Star Hotel</h5>
     <br>

     <div class="bs-example">
          <div class="container-fluid">
               <div class="row">
                    <div class="card-deck mx-auto text-center" style="width: 60rem;">
                         <div class="card shadow bg-white rounded">
                              <img src="Standard.jpg" class="card-img-top mx-auto d-block" style="width: 288px;"
                                   alt="...">
                              <div class="card-body">
                                   <h5 class="card-title text-center">Standard</h5>
                                   <h6 class="card-title text-center text-info">$ 90/Day</h6>
                                   <div class="card mx-auto text-center" style="width: 15rem;">
                                        <div class="card-header">
                                             Facilities
                                        </div>
                                        <ul class="list-group list-group-flush">
                                             <li class="list-group-item">1 Single Bed</li>
                                             <li class="list-group-item">1 Bathroom</li>
                                        </ul>
                                   </div>
                                   <br>
                              </div>
                              <div class="card-footer">
                                   <small class="text-muted">
                                        <a href="booking.php?type=Standard" class="btn btn-primary ">Book Now</a>
                                   </small>
                              </div>
                         </div>
                         <div class="card shadow bg-white rounded">
                              <img src="Superior.jpg" class="card-img-top mx-auto d-block"
                                   style="width: 288px; height: 162px;" alt="...">
                              <div class="card-body" style="height: 100px ">
                                   <h5 class="card-title text-center">Superior</h5>
                                   <h6 class="card-title text-center text-info">$ 150/Day</h6>
                                   <div class="card mx-auto text-center" style="width: 15rem;">
                                        <div class="card-header">
                                             Facilities
                                        </div>
                                        <ul class="list-group list-group-flush">
                                             <li class="list-group-item">1 Double Bed</li>
                                             <li class="list-group-item">1 Television and WI-FI</li>
                                             <li class="list-group-item">1 Bathroom with hot water</li>
                                        </ul>
                                   </div>
                                   <br>
                              </div>
                              <div class="card-footer">
                                   <small class="text-muted">
                                         <a href="booking.php?type=Superior" class="btn btn-primary ">Book Now</a>
                                   </small>
                              </div>
                         </div>
                         <div class="card shadow bg-white rounded">
                              <img src="Luxury.jpg" class="card-img-top mx-auto d-block" style="width: 288px; height: 162px;"
                                   alt="...">
                              <div class="card-body">
                                   <h5 class="card-title text-center">Luxury</h5>
                                   <h6 class="card-title text-center text-info">$ 200/Day</h6>
                                   <div class="card mx-auto text-center" style="width: 15rem;">
                                        <div class="card-header">
                                             Facilities
                                        </div>
                                        <ul class="list-group list-group-flush">
                                             <li class="list-group-item">2 Double Bed</li>
                                             <li class="list-group-item">2 Bathroom with hot water</li>
                                             <li class="list-group-item">1 Kitchen</li>
                                             <li class="list-group-item">1 Television and Wi-Fi </li>
                                             <li class="list-group-item">1 workroom</li>
                                        </ul>
                                   </div>
                                   <br>
                              </div>
                              <div class="card-footer">
                                   <small class="text-muted">
                                        <a href="booking.php?type=Luxury" class="btn btn-primary ">Book Now</a>
                                   </small>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</body>

</html>