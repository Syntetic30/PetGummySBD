<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<ul>
		<li>
			<label for="LJenis">Jenis Hewan</label><br>
			<select name="jenisH">
				<optgroup>
					<option value="anjing">Anjing</option>
					<option value="kucing">Kucing</option>
				</optgroup>
			</select>
		</li>
		<li>
			<label for="Lket">Keterangan Khusus Hewan</label><br>
		 	<textarea name="ket" rows="4" cols="25"></textarea>
		</li>

		</ul>
		<input type="submit" name="submitt" value="Daftar">
	</form>
</body>
</html>

<?php
	$ket = $jenisH = "";
	if (isset($_POST['submitt'])) {
		$jenisH = $_POST['jenisH'];
		$ket = $_POST['ket'];
	}


	include_once("config.php");
	$result = mysqli_query($connect, "INSERT INTO user VALUES ('','$jenisH', '$ket')");
?>