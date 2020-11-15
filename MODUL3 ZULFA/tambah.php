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
		<div class="header">
		  <h2>Buat Event!</h2>
		</div>
		<form action="simpan.php" method="POST" enctype="multipart/form-data" class="tengah">
			<div class="column">
				<h2 style="background: #DC3545;color:#DC3545;border-radius: 4px;">.</h2>
				    <label for="fname">Name</label>
				    <input type="text" id="fname" name="name">

				    <label for="dek">Deskripsi</label>
				    <textarea id="dek" name="deskripsi" ></textarea>

				    <label for="myfile">Upload Gambar</label>
  					<input type="file" id="myfile" name="upload">
				  	
				  	<label for="kat">Kategori</label>
				  	<div style="margin: 8px 0;">
					  	<input type="radio" name="kategori" value="Online" checked="checked">Online&nbsp;&nbsp;
					  	<input type="radio" name="kategori" value="Offline" >Offline
					</div>
					<br><br><br><br><br>
			</div>

			<div class="column">
				<h2 style="background: #007BFF;color:#007BFF;border-radius: 4px;">.</h2>
				<label for="ttl">Tanggal</label>
			    <input type="date" id="ttl" name="tgl" >

			    <div class="tourow" style="margin-right: 4%">
			    	<label for="jm">Jam Mulai</label>
				    <input type="time" id="jm" name="jm">
			    </div>
			    <div class="tourow">
			    	<label for="jb">Jam Berakhir</label>
				    <input type="time" id="jb" name="jb">
			    </div>

			    <label for="tmp">Tempat</label>
			    <input type="text" id="tmp" name="tempat" >

			    <label for="hrg">Harga</label>
			    <input type="number" id="hrg" name="Harga" >

			    <label for="hrg">Benefit</label>
			    <div style="margin: 8px 0;">
				    <input type="checkbox" name="benefit[]" value="Snacks">&nbsp;Snacks&nbsp;&nbsp;&nbsp;
				    <input type="checkbox" name="benefit[]" value="Sertifikat">&nbsp;Sertifikat&nbsp;&nbsp;&nbsp;
				    <input type="checkbox" name="benefit[]" value="Souvenir">&nbsp;Souvenir
			    </div>
				<div class="button" >
					<button type="submit" name="simpan" class="btn-blue">Submit</button>
					<a href="javascript:history.back()"><input type="button" class="btn-red" value="Cancel"></a>
				</div>
			</div>
		</form>
	</div>
</body>
</html>