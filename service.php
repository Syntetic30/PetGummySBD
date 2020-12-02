<?php
	$service = "";
	if (isset($_POST['submit'])) {
		# code...
		$namaHewan = $_POST['namaHwn'];
		$jenis = $_POST['jenisH'];
		$ket = $_POST['keterangan'];
		$service = $_POST['service'];
		$umur = $_POST['umur'];

		include 'config.php';
		$php1 = mysqli_query($connect, "INSERT INTO pet VALUES('','$jenis','$ket','$namaHewan')");
		$php2 = mysqli_query($connect, "INSERT INTO service VALUES('','$service','$total')");
		if ($php1 && $php2) {
			# code...
			header("location: detail.php?id=$id");
			?>
				<script>
					alert("Berhasil!");
				</script>
				<?php
		}
		else{
			?>
				<script>
					alert("Tidak Berhasil!");
				</script>
				<?php
		}
	}
	switch ($service) {
		case 'groom':
			# code...
			$harga = 20000;
			break;
			case 'nitip':
			# code...
			$harga = 40000;
			break;
		
		default:
			# code...
		 	$harga = 0;
			break;
	}
	$total = $harga;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Service Us</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="
	margin: 0px;
	padding: 0px;
	max-width: 100%;
	font-family: sans-serif;
	background-color: #DFE2D2; color: #878384;	
">
	<main>
		<section style="
			width: 100%;
			max-width: 100%;
			height: 100vh;
			display: flex;
			/*background-image: url(style/img/backGame.jpeg);*/
			background-color: cyan;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			justify-content: center;
		">
			<!-- Section Form -->
			<div style="
				flex: 1;
			">
				<div style="
					width: 90%;
					height: 70vh;
					margin-left: 5%;
					margin-top: 15%;
					border-radius: 20px;

				">
					<form action="service.php" method="post" style="
						padding: 10px;
						list-style: none;
						color: white;
					">
						<h2 style="text-align: center;">Pendaftaran Identitas Hewan</h2>
						<li style="
							padding-left: 25%;
						">
							<label>Nama Hewan</label><br>
							<input type="text" name="namaHwn" style="
								outline: none;
							border: none;
							border-radius: 10px;
							font-size: 17px;
							background-color: #f9f9f9;
							padding: 5px 10px 5px 10px;
							width: 60%;
							">
						</li>
						<li style="
							padding-left: 25%;
							padding-top: 10px;
						">
							<label>Jenis Hewan</label><br>
							<select name="jenisH"  style="
									outline: none;
							border: none;
							border-radius: 10px;
							font-size: 17px;
							background-color: #f9f9f9;
							padding: 5px 10px 5px 10px;
							width: 60%;
							">
								<optgroup label="Jenis Hewan">
									<option value="kucing">Kucing</option>
									<option value="anjing">Anjing</option>
								</optgroup>
							</select>
						</li>
						<li style="
							padding-left: 25%;
							padding-top: 10px;
						">
							<label>Keterangan Khusus Hewan</label><br>
							<textarea style="
								outline: none;
							border: none;
							border-radius: 10px;
							font-size: 17px;
							background-color: #f9f9f9;
							padding: 5px 10px 5px 10px;
							width: 60%;
							" name="keterangan"></textarea>
						</li>
						<!-- <li style="
							padding-left: 40px;
						">
							<label>No. Handphone</label><br>
							<input type="text" name="telp" maxlength="12" required style="
								outline: none;
							border: none;
							border-radius: 10px;
							font-size: 17px;
							background-color: #f9f9f9;
							padding: 5px 10px 5px 10px;
							width: 60%;
							">
						</li> -->
						 <!-- <input type="submit" class="btn btn-primary" name="submit" value="Submit" style="
							width: 30%;
							margin-top: 15px;
							border-radius: 10px;
							margin-left: 40%;
						">
					</form> -->
				</div>
			</div>
			<!-- Section gambar -->
			<div style="
				flex: 1;
			">
				<div style="
					width: 90%;
					height: 80vh;
					margin-left: 5%;
					margin-top: 9%;
					border-radius: 20px;

					padding: 20px;
				">
					<div style="
						display: grid;
						grid-template-columns: auto auto;
						height: 45vh;
						margin-top: 1vh;
						
					">
						<div style="
							background-image: url(style/img/pet.jpg);
							background-size: cover;
							background-position: center;
							padding: 8vh;
							margin: 10px;
						">
							h
						</div>
						<div style="
							background-image: url(style/img/pet.jpg);
							background-size: cover;
							background-position: center;
							padding: 8vh;
							margin: 10px;
						">
							h
						</div>
						<div style="
							background-image: url(style/img/pet.jpg);
							background-size: cover;
							background-position: center;
							padding: 8vh;
							margin: 10px;
						">
							h
						</div>
						<div style="
							background-image: url(style/img/pet.jpg);
							background-size: cover;
							background-position: center;
							padding: 8vh;
							margin: 10px;
						">
							h
						</div>
					</div>
					<div style="
						display: grid;
						grid-template-columns: auto;
						margin-top: 2vh;
						
						text-align: center;
					">
						<h3 style="padding-bottom: 20px;">Grooming Your Pet!</h3>
						<p>Kami Menyediakan banyak pelayanan terkait dari grooming yakni Memandikan biasa, Membebaskan dari kutu, dan Memberikan vitamin agar bulu hewan tersayang mu tidak terkena parasit</p>
					</div>
				</div>
			</div>
		</section>

		<section style="
			width: 100%;
			max-width: 100%;
			height: 100vh;
			display: flex;
			/*background-image: url(style/img/backGame.jpeg);*/
			background-color: cyan;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			justify-content: center;
		">
			<!-- Section Form  -->
			<div style="
				flex: 1;
			">
				<div style="
					width: 60%;
					height: 70vh;
					margin-left: 20%;
					margin-top: 5%;
					border-radius: 20px;

				">
					<!-- <form action="detail.php" method="post" style="
						padding: 10px;
						list-style: none;
						color: white;
					"> -->
						<h2 style="text-align: center;">Pilih Layanan</h2>
						<li style="
							padding-left: 25%;
							padding-top: 10px;
						">
							<label>Pilihan Layanan</label><br>
							<select name="service"  style="
									outline: none;
							border: none;
							border-radius: 10px;
							font-size: 17px;
							background-color: #f9f9f9;
							padding: 5px 10px 5px 10px;
							width: 60%;
							">
								<optgroup label="Jenis Layanan">
									<option value="groom">Grooming</option>
									<option value="nitip">Pet's Hotel</option>
								</optgroup>
							</select>
						</li>
						<li style="
							padding-left: 25%;
							padding-top: 10px;
						">
							<label>Harga Layanan</label><br>
							<p  style="
									outline: none;
							border: none;
							border-radius: 10px;
							font-size: 17px;
							background-color: #f9f9f9;
							padding: 5px 10px 5px 10px;
							width: 60%;
							color: black;
							"> <?php echo "Rp. ".$harga; ?> </p>
						</li>
						 <input type="submit" class="btn btn-primary" name="submit" value="Submit" style="
							width: 30%;
							margin-top: 20px;
							border-radius: 10px;
							margin-left: 32%;
						">
					</form>
				</div>
			</div>
		</section>

	</main>
</body>
</html>
