<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Form</title>
	<link rel="stylesheet" type="text/css" href="LoginForm.css">
</head>

<body>
	<div class="boxxes">
		<h2>LOGIN FORM</h2>
		<div class="textInfo"><br>
			<form method="POST">
				<br><br>Email:<br>
				<input type="text" placeholder="Enter Email" name="Email" id="Email">
				<br><br>Password:<br>
				<input type="password" placeholder="Enter password" name="Password" id="Password">
				<br><br><button class="button button5" type="submit" value="submit">Login</button>
			</form>
			<a href="SignUp.php" target="_blank">Sign Up</a><br><br>
			<?php
	
require 'connection.php';
			
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$Email = $_POST["Email"];
	$Password = $_POST["Password"];
	$result = mysqli_query($conn, "SELECT * FROM signup WHERE Email = '$Email'");
	$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result) > 0){
		
		if($Password == $row["Password"]){
			$_SESSION["login"] = true;
			$_SESSION["id"] = $row["id"];
			$_SESSION["No_Matric"] = $row["No_Matric"];
			$_SESSION["Email"] = $row["Email"];
			if($row["Email"]=='approverUTHM@staff.uthm.com' && $Password == $row["Password"]){
				header("Location: approver.php");
			}
			elseif($row["Email"]=='checkerUTHM@staff.uthm.com' && $Password == $row["Password"]){
				header("Location: checker.php");
			}
			else{
				header("Location: bookProf.php");				
			}
		}
		else{
			echo  "<script> alert('Incorrect Password'); </script>";
		}	
	}
	else{
		echo  "<script> alert('User not registered'); </script>";
		
	}
}


?>
		</div>

	</div>
</body>





</html>
