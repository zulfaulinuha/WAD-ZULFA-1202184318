<!DOCTYPE html>
<html>
<head>
	<title>EAD Event</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="topnav">
	  <a href="#">EAD EVENTS</a>
	  <a href="tambah.php" style="float:right;border-radius: 5%;border:1px solid white;">Buat Events</a>
	  <a href="index.php" style="float:right">Home</a>
	</div>

	<div class="row">
		<div class="header2">
		  <p>WELCOME TO EAD EVENTS</p>
		</div>
		<div class="column2">
			<?php 
				include "koneksi.php";
				$sql = "SELECT * FROM events";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				  while($row = $result->fetch_assoc()) {?>
				    <div class="card-index">
						<img class="fakeimg" src="img/<?php echo($row["gambar"]);?>">
						<div class="text">
							<h2><?php echo($row["name"]);?></h2>
							<p><?php echo($row["tanggal"]);?></p>
							<p><?php echo($row["tempat"]);?></p>
							<p>Kategori : <?php echo($row["kategori"]);?></p>
						</div>
						<div class="button-detail">
							<a href="detail.php?id=<?=$row['id']?>"><button class="btn-blue">Detail</button></a>
						</div>
				    </div>
				    <?php
				  }
				} else {
				  echo "No Event Found";
				}
				$conn->close();
			?>	    
		</div>
	</div>
</body>
</html>