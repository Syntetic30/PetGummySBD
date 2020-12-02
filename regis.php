<?php
include 'config.php';
	if (isset($_POST['submit'])) {
		# code...
		$nama = $_POST['nama'];
		$email = $_POST['mail'];
		$notelp = $_POST['notelp'];
		$alamat = $_POST['alamat'];
		$php = mysqli_query($connect, "INSERT INTO user VALUES('','$nama','$email','$notelp', '$alamat')");
		if ($php) {
			# code...
			header("location: index.php?id=$id");
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
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registrasi User's Pet Gummy</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<style>
		
	</style>
</head>
<body style="
	margin: 0px;
	padding: 0px;
	background-color: 	#F5F5F5;
	max-width: 100%;
	font-family: sans-serif;
	background-color: #DFE2D2; color: #878384;
">
	<main>
		<section class="cont-sec 1" style="
			width: 70%;
			height: 60vh;
			background: linear-gradient(#0099ff, #ccffff);
			display: flex;
			position: relative;
			border-radius: 40px;
			left: 30vh;
			top: 20vh;
		">
			<div class="contain" style="
				background: linear-gradient(#0099ff, #ccffff);
				width: 100%;
				height: 100%;
				border-radius: 40px;
			">
				<div style="
					position: relative;
					top: 20vh;
					left: 20vh;
					width: 30%;
					height: 20%;
				">
					<img src="style/img/pet.jpg" style="
						width: 20vh;
						height: 20vh;
						border-radius: 60px;
						position: relative;
						top: -10vh;
					">
					<div style="
						width: 40vh;
						position: relative;
						top: -10vh;
						left: -8vh;
						color: #666;
						text-align: center;
					">
						<h2>Halo Selamat datang</h2>
						<h4>Kami akan melayani hewan mu dengan baik</h4>
					</div>
					
				</div>
			</div>
			<div class="contain" style="
				background: linear-gradient(#00cccc,#66ffcc );
				height: 45vh;
				width: 120%;
				top: 5vh;
				position: relative;
				padding: 60px;
				padding-top: 20px;
				margin-bottom: 20px;
				border-bottom-left-radius: 80px;
				border-top-left-radius: 80px;
			">
				<form action="regis.php" method="post" style="
						display: flex;
						flex-direction: column;
						justify-content: center;
						width: 100%;
						height: 40vh;
						padding: 20px;
						padding-top: 0px;
				">
					<h4 style="text-align: center;">Welcome To My PetShop</h4>
					<div>
						<label style="
							font-size: 17px;
							font-weight: bold;
							letter-spacing: 1px;
						">Username</label><br>
						<input type="text" name="nama" placeholder="Username" style="
							outline: none;
								border: none;
								border-radius: 10px;
								font-size: 15px;
								background-color: #f9f9f9;
								padding: 5px 15px 5px 15px;
								margin-top: 5px;
								margin-bottom: 10px;
								width: 80%;
						">
						<br>
						<label style="
							font-size: 17px;
							font-weight: bold;
							letter-spacing: 1px;
						">Email</label><br>
						<input type="email" name="mail" placeholder="Email" style="
							outline: none;
								border: none;
								border-radius: 10px;
								font-size: 15px;
								background-color: #f9f9f9;
								padding: 5px 15px 5px 15px;
								margin-top: 5px;
								margin-bottom: 10px;
								width: 80%;
						">
						<br>
						<label style="
							font-size: 17px;
							font-weight: bold;
							letter-spacing: 1px;
						">Alamat</label><br>
						<input type="text" name="alamat" placeholder="Alamat" style="
							outline: none;
								border: none;
								border-radius: 10px;
								font-size: 15px;
								background-color: #f9f9f9;
								padding: 5px 15px 5px 15px;
								margin-top: 5px;
								margin-bottom: 10px;
								width: 80%;
						">
						<br>
						<label style="
							font-size: 17px;
							font-weight: bold;
							letter-spacing: 1px;
						">No. Handphone</label><br>
						<input type="text" name="notelp" placeholder="Nomor Handphone" style="
							outline: none;
								border: none;
								border-radius: 10px;
								font-size: 15px;
								background-color: #f9f9f9;
								padding: 5px 15px 5px 15px;
								margin-top: 5px;
								margin-bottom: 10px;
								width: 80%;
						">
						<br>
						<input style="
							background-color: lightblue;
							border: none;
							outline: none;
							padding: 10px 15px 10px 15px;
							font-size: 15px;
							font-weight: bold;
							width: 30%;
							color: white;
							float: right;
							margin-right: 20%;
							border-radius: 10px;
							cursor: pointer;
						" type="submit" class="btn btn-primary"  name="submit" value="Masuk" style=""> 

					</form>
				</div>
			</div>
		</section>
	</main>
</body>
</html>