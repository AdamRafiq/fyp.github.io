<?php
require 'connection.php';
if(!empty($_SESSION["No_Matric"])){
	$No_Matric=$_SESSION["No_Matric"];
	$result = mysqli_query($conn, "SELECT * FROM signup WHERE No_Matric = '$No_Matric'");
	$row = mysqli_fetch_assoc($result);
}
else{
	header("Location: LoginForm.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Form</title>
	<link rel="stylesheet" type="text/css" href="bookProf.css">

	<style>
		/* Style for the vertical navigation bar */
		.navbar {
			position: fixed;
			left: -500px;
			/* Hide the navigation bar by default */
			top: 67.5px;
			width: 24.5%;
			height: 100%;
			background-color: #CCB78D;
			transition: left 0.3s ease-in-out;
			z-index: 9999;
		}

		/* Style for the navigation bar items */
		.navbar ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}

		.navbar li {
			text-align: center;
			padding: 8px 16px;
		}

		/* Style for the navigation bar item links */
		.navbar li a {
			display: block;
			color: #000;
			text-decoration: none;
		}

		/* Change the background color of the active item */
		.navbar li.active {
			background-color: #ccc;
		}

		/* Style for the button to open and close the navigation bar */
		.open-btn {
			position: fixed;
			left: 0;
			transform: translateY(-50%);
			background-color: #f1f1f1;
			cursor: pointer;
			z-index: 99999;
		}

		/* Style for the close button within the navigation bar */
		.close-btn {
			position: absolute;
			right: 0;
			top: 0;
			padding: 0px;
			cursor: pointer;
		}

		/* Media queries for responsive design baru tambahh kt sini SINIIII SINIII;*/
		@media screen and (max-width: 767px) {

			/* Adjust the width and position of the navbar for smaller screens */
			.navbar {
				width: 100%;
				left: 0;
			}
		}

		@media screen and (max-width: 480px) {

			/* Adjust the font size and padding of navbar items for smaller screens */
			.navbar li {
				padding: 4px 8px;
			}

			.navbar li a {
				font-size: 14px;
			}

			.open-btn {
				transform: translateY(-50%) scale(0.8);
			}
		}

	</style>
	<script>
		function toggleNavbar() {
			var navbar = document.getElementById("myNavbar");
			var openBtn = document.getElementById("openBtn");

			if (navbar.style.left === "-500px") {
				navbar.style.left = "0";
				openBtn.style.left = "0";
			} else {
				navbar.style.left = "-500px";
				openBtn.style.left = "0";
			}
		}

	</script>

</head>


<body>


	<h2>UTHM Pagoh Resindential College Learning Center Room Booking System</h2>
	<hr>

	<!--dlm line start sini--->
	<div id="openBtn" class="open-btn" onclick="toggleNavbar()">
		>>>
	</div>
	<div id="myNavbar" class="navbar">
		<ul>
			<div class="info">
				<li>
					<form action="bookProf.php">
						<button class="button button4"><b>Profile</b></button><br>
					</form>
				</li>
				<li>
					<form action="bookInfo.php">
						<button class="button button3">Book</button><br>
					</form>
				</li>
				<li>
					<form action="bookHis.php">
						<button class="button button2">Booking History</button><br>
					</form>
				</li>
				<li>
					<form action="bookReq.php">
						<button class="button button1">Booking Requirement</button><br>
					</form>
				</li>
			</div>
			<li>
				<form action="LoginForm.php">
					<!--action to change other page--->

					<button class="button.">
						Logout
					</button>
				</form>
			</li>
		</ul>
	</div>
	<div class="v1">
		<div class="box">



			<form action="bookInfo1.php">
				<!--untuk link file book history--->
				<!--kanan line tgh--->
				<div class="bookInfo1">

					<br>
					<h3>INFORMATION</h3>
					<p><br>
						<b>NAME : </b><?php echo $row["Nama"]; ?><br><br>

						<b>MATRIC NO : </b><?php echo $row["No_Matric"]; ?><br><br>
						<b>EMAIL : </b><?php echo $row["Email"]; ?><br><br>
						<b>PHONE NO : </b>0<?php echo $row["No_Telephone"]; ?><br><br>





				</div>

			</form>

		</div>
	</div>



</body>

</html>
