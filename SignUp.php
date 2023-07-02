<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Form</title>
	<link rel="stylesheet" type="text/css" href="SignUp.css">
</head>

<body>
	<div class="boxxes">
		<h2>SIGN UP FORM</h2>
		<div class="text">
			<form method="POST" >
				Name:<br>
				<input type="text" placeholder="Enter Name" name="Nama" id="Nama" required>
				<br><br>No Matric:<br>
				<input type="text" placeholder="Enter Name" name="No_Matric" id="No_Matric" required>
				<br><br>No Telephone:<br>
				<input type="text" placeholder="Enter No. Tel." name="No_Telephone" id="No_Telephone" required>
				<br><br>Email:<br>
				<input type="email" placeholder="Enter Email" name="Email" id="Email" required>
				<br><br>Password:<br>
				<input type="text" placeholder="Enter Password" name="Password" id="Password" required>
				<br><br><button class="button button5" onclick="submit" value="submit">Sign Up</button>
			</form>
		</div>

	</div>
</body>
<?php
require 'connection.php';
	
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$Nama=$_POST['Nama'];
	$No_Matric=$_POST['No_Matric'];
	$No_Telephone=$_POST['No_Telephone'];
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	
	$query = "INSERT INTO signup VALUES ('','$Nama', '$No_Matric', '$No_Telephone', '$Email', '$Password')";
	mysqli_query($conn, $query);
	if (mysqli_query($conn, $query) > 0) {
    echo "<script> alert('Successful create account'); </script>";
	} 
	else {
    echo  "<script> alert('Error to create account'); </script>";
	}
	
}
	

/*if ($_SERVER["REQUEST_METHOD"] == "POST"){
$Nama=$_POST['Nama'];
$No_Matric=$_POST['No_Matric'];
$No_Telephone=$_POST['No_Telephone'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];




$sql = "INSERT INTO signup (Nama, No_Telephone, Email, Password) VALUES ('$Nama', '$No_Telephone', '$Email', '$Password')";
mysqli_query($conn, $query);

if (mysqli_query($conn, $sql) > 0) {
    echo "<script> alert('Successful create account'); </script>";
} else {
    echo  "<script> alert('Error to create account'); </script>";
}

}

$conn->close();*/


?>

</html>
