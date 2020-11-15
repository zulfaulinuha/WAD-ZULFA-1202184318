<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
		  <p>Detail Event!</p>
		</div>
		<div class="column2">
			<?php 
				include "koneksi.php";
				$ID=$_GET['id'];
      			$sql = "SELECT * FROM events WHERE id='$ID'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				  // output data of each row
				  while($row = $result->fetch_assoc()) { 
					$checked = explode(', ', $row['benefit']);
				  	?>
				    <div class="card">
						<img class="fakeimg" src="img/<?php echo($row["gambar"]);?>">
						<div class="text">
							<h2><?php echo($row["name"]);?></h2>
							<h4>Deskripsi</h4>
							<p><?php echo($row["deskripsi"]);?></p>
							<div style="width: 50%;height:192px;float: left;">
								<h4>Informasi Event</h4>							
								<p><?php echo($row["tanggal"]);?></p>
								<p><?php echo($row["tempat"]);?></p>
								<p><?php echo($row["mulai"]);?>&nbsp;&nbsp;<?php echo($row["berakhir"]);?></p>
							</div>
							<div style="width: 50%;height:192px;float: left;">
								<h4>Informasi Event</h4>							
								<p><?php echo($row["benefit"]);?></p>
							</div>
							<br>
							<div style="width: 100%;">
								<p><b>Kategori:</b> <?php echo($row["kategori"]);?></p>
								<h4>HTM Rp.<?php echo($row["harga"]);?></h4>								
							</div>
						</div>
						<div class="button-detail">
							<button class="btn-blue" id="myBtn">Edit</button>
							<a href="delete.php?id=<?=$row['id']?>"><button class="btn-red">Delete</button></a>
						</div>
				    </div>
				    <div id="myModal" class="modal">

					  <!-- Modal content -->
					<div class="modal-content">
					    <span class="close">&times;</span>
					    <p>Edit Content Events</p>

						<form action="ubah.php" method="POST" enctype="multipart/form-data" class="tengah">
							<input type="hidden" name="id" value="<?php echo($row["id"]);?>">
								<div class="column">
									<h2 style="background: #DC3545;color:#DC3545;border-radius: 4px;">.</h2>
								    <label for="fname">Name</label>
								    <input type="text" id="fname" name="name" value="<?php echo($row["name"]);?>" placeholder="Your name..">

								    <label for="dek">Deskripsi</label>
								    <textarea id="dek" name="deskripsi" ><?php echo($row["deskripsi"]);?></textarea>

								    <label for="myfile">Upload Gambar</label>
				  					<input type="file" id="myfile" name="upload">
								  	
								  	<label for="kat">Kategori</label>
								  	<div style="margin: 8px 0;">
									  	<input type="radio" name="kategori" value="Online" <?php echo ($row["kategori"]=="Online") ? 'checked="checked"' : '' ;?>>Online&nbsp;&nbsp;
									  	<input type="radio" name="kategori" value="Offline" <?php echo ($row["kategori"]=="Offline") ? 'checked="checked"' : '' ;?>>Offline
									</div>
									<br><br><br><br><br>
								</div>

								<div class="column">
									<h2 style="background: #007BFF;color:#007BFF;border-radius: 4px;">.</h2>
									<label for="ttl">Tanggal</label>
								    <input type="date" id="ttl" name="tgl" value="<?php echo($row["tanggal"]);?>">

								    <div class="tourow" style="margin-right: 4%">
								    	<label for="jm">Jam Mulai</label>
									    <input type="time" id="jm" name="jm" value="<?php echo($row["mulai"]);?>">
								    </div>
								    <div class="tourow">
								    	<label for="jb">Jam Berakhir</label>
									    <input type="time" id="jb" name="jb" value="<?php echo($row["berakhir"]);?>">
								    </div>

								    <label for="tmp">Tempat</label>
								    <input type="text" id="tmp" name="tempat" value="<?php echo($row["tempat"]);?>">

								    <label for="hrg">Harga</label>
								    <input type="number" id="hrg" name="Harga"  value="<?php echo($row["harga"]);?>">

								    <label for="hrg">Benefit</label>
								    <div style="margin: 8px 0;">
									    <input type="checkbox" name="benefit[]" value="Snacks" <?php in_array ('Snacks', $checked) ? print "checked" : ""; ?>>&nbsp;Snacks&nbsp;&nbsp;&nbsp;
									    <input type="checkbox" name="benefit[]" value="Sertifikat" <?php in_array ('Sertifikat', $checked) ? print "checked" : ""; ?>>&nbsp;Sertifikat&nbsp;&nbsp;&nbsp;
									    <input type="checkbox" name="benefit[]" value="Souvenir" <?php in_array ('Souvenir', $checked) ? print "checked" : ""; ?>>&nbsp;Souvenir
								    </div>
									<div class="button" >
										<button type="submit" name="simpan" class="btn-blue">Submit</button>
										<a href="javascript:history.back()"><input type="button" class="btn-red" value="Cancel"></a>
									</div>
								</div>
						</form>
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
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</html>