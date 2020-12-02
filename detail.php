<?php
	/*$id=$_GET['id'];*/
	include 'config.php';
	if (isset($_POST['submit'])) {
		# code...
		$service = $_GET['service'];
	}
	/*layanan*/
	$query = "SELECT * FROM service WHERE id_service";
	$sql2 = mysqli_query($connect, $query);
	 $dataservice = mysqli_fetch_array($sql2);
	 $layanan = $dataservice['nama_service'];
	 $harga = $dataservice['harga'];

	 /**/
	 /*User*/
	 $query1 = "SELECT * FROM user WHERE id_user";
	$sql3 = mysqli_query($connect, $query1);
	 $datauser = mysqli_fetch_array($sql3);
	 /*Hewan*/
	 $query2 = "SELECT * FROM pet WHERE id_pet";
	$sql4 = mysqli_query($connect, $query2);
	 $datahewan = mysqli_fetch_array($sql4);
	 $jenishewan = $datahewan['jenisHwn'];
	 $namahewan = $datahewan['namaHewan'];
	 $keterangan = $datahewan['keterangan'];

	 $invoice = $datauser['id_user'].$dataservice['nama_service'].date("Ymd");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Detail Layanan</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="style/Bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="style/Bootstrap/js/bootstrap.bundle.min.js">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.css"
		integrity="sha512-8M8By+q+SldLyFJbybaHoAPD6g07xyOcscIOQEypDzBS+sTde5d6mlK2ANIZPnSyxZUqJfCNuaIvjBUi8/RS0w=="
		crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #DFE2D2; color: #878384;">
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
			<!-- Section Form  -->
			<div style="
				flex: 1;
			">
				<div style="
					width: 60%;
					height: 70vh;
					margin-left: 20%;
					margin-top: 5%;
					border: 3px solid rgba(0,0,0,0.1);

					border-radius: 20px;

				">
					<form action="detail.php" method="post" style="
						padding: 10px;
						list-style: none;
						color: white;
					">
						<h2 style="text-align: center;">Detail Layanan</h2>
						<li style="
							padding-left: 25%;
							padding-top: 10px;
						">
							<label>Nama Layanan</label><br>
							<p  style="
									outline: none;
							border: none;
							border-radius: 10px;
							font-size: 17px;
							background-color: #f9f9f9;
							padding: 5px 10px 5px 10px;
							width: 60%;
							color: black;
							"> <?php echo "".$datauser['username']; ?><br> </p>
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
							"> <?php echo "".$harga; ?> </p>
						</li>
						<li style="
							padding-left: 25%;
							padding-top: 10px;
						">
							<label>Invoice Code</label><br>
							<p  style="
									outline: none;
							border: none;
							border-radius: 10px;
							font-size: 17px;
							background-color: #f9f9f9;
							padding: 5px 10px 5px 10px;
							width: 60%;
							color: black;
							"> <?php echo"".$invoice ?> </p>
						</li>
					
						<!-- Button trigger modal -->
						<button type="button" style="margin-left: 25%;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						  LLihat Struck
						</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel" style="color: black;">HAI</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body" style="color: black;" >
						        <p>Nama Pemilik 			: <?php  echo "".$datauser['username']; ?></p>
						        <p>No. Handphone Pemilik	: <?php echo "".$datauser['notelp']; ?></p>
						        <p>Nama Hewan 				: <?php echo "".$namahewan; ?></p>
						        <p>Jenis Hewan 				: <?php echo "".$jenishewan; ?></p>
						        <p>Keterangan Hewan 		: <?php echo "".$keterangan; ?></p>
						        <p>Nama Layanan 			: <?php echo "".$layanan; ?></p>
						        <p>Invoice Code 			: <?php echo "".$invoice; ?></p>
						        <p>harga 					: <?php echo "".$harga; ?></p>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <a href="index.php">
						        <button type="button" class="btn btn-primary">Save changes</button>
						    	</a>
						      </div>
						    </div>
						  </div>
						</div>
					</form>

				</div>
			</div>
			
		</section>
	</main>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
</body>
</html>