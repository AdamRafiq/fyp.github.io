<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Form</title>
	<link rel="stylesheet" type="text/css" href="form.css">

</head>

<body>
	<form method="POST">
		<div class="boxxes">
			<h2>BOOKING FORM</h2>
			<div class="text">
				<h3>1- Booking Details.</h3>
				<label for="date">Select a date:</label>
				<input type="date" id="Hari_Guna" name="Hari_Guna"><br><br>
				Choose Room:
				<select name="bilik" id="bilik">
					<option value="A5">A5</option>
					<option value="A11">A11</option>
					<option value="A12">A12</option>
				</select><br><br>
				Time Start: <br><input type="time" id="Masa_Mula" name="Masa_Mula"><br>
				Time End: <br><input type="time" id="Masa_Tamat" name="Masa_Tamat"><br><br>
				Purpose:<br>
				<textarea id="Tujuan" name="Tujuan" rows="6" cols="50"></textarea><br><br>
				Jumlah Ahli: <input type="text" id="Jumlah_Ahli" name="Jumlah_Ahli" placeholder="Jumlah ahli"><br>
				<h3>2- Details Booker.</h3>
				Name: <br><input type="text" id="Nama_Pemohon" name="Nama_Pemohon" placeholder="Name" required><br><br>
				Matric Number: <br><input type="text" id="No_Matric" name="No_Matric" placeholder="No. Matric"><br><br>
				No Telephone: <br><input type="text" id="No_Telephone" name="No_Telephone" placeholder="No. Tel"><br>
				<h3>3- Advisor Information.</h3>
				Name: <br><input type="text" id="Nama_Penasihat" name="Nama_Penasihat" placeholder="Lect. Name"><br><br>
				Staff Number: <br><input type="text" id="No_Staff" name="No_Staff" placeholder="No Staff"><br><br>
				No Telephone: <br><input type="text" id="No_Telephone_P" name="No_Telephone_P" placeholder="No. Tel"><br><br><br>
				<button class="button button5" type="submit" value="submit">Submit</button>

			</div>
		</div>
	</form>
	
</body>

<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$Nama_Pemohon=$_POST['Nama_Pemohon'];
$No_Matric=$_POST['No_Matric'];
$No_Telephone=$_POST['No_Telephone'];
$Nama_Penasihat=$_POST['Nama_Penasihat'];
$No_Staff=$_POST['No_Staff'];
$No_Telephone_P=$_POST['No_Telephone_P'];
$bilik=$_POST['bilik'];
$Hari_Guna=$_POST['Hari_Guna'];
$Masa_Mula=$_POST['Masa_Mula'];
$Masa_Tamat=$_POST['Masa_Tamat'];
$Jumlah_Ahli=$_POST['Jumlah_Ahli'];
$Tujuan=$_POST['Tujuan'];


$sql = "INSERT INTO permohonan (Nama_Pemohon, No_Matric, No_Telephone, Nama_Penasihat, No_Staff, No_Telephone_P, bilik, Hari_Guna, Masa_Mula, Masa_Tamat, Jumlah_Ahli, Tujuan) VALUES ('$Nama_Pemohon', '$No_Matric', '$No_Telephone', '$Nama_Penasihat', '$No_Staff', '$No_Telephone_P', '$bilik', '$Hari_Guna', '$Masa_Mula', '$Masa_Tamat', '$Jumlah_Ahli', '$Tujuan')";


if (mysqli_query($conn, $sql) > 0) {
    echo "<script> alert('Successful book'); </script>";
} else {
    echo "Error for book";
}

}

$conn->close();



?>

</html>
