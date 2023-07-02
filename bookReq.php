<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Form</title>
	<link rel="stylesheet" type="text/css" href="bookReq.css">

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

	<!--dlm line--->
	<div id="openBtn" class="open-btn" onclick="toggleNavbar()">
		>>>
	</div>
	<div id="myNavbar" class="navbar">
		<ul>
			<div class="info">
				<li>
					<form action="bookProf.php">
						<button class="button button4">Profile</button><br>
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
						<button class="button button1"><b>Booking Requirement</b></button><br>
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
					<b>Requirement</b><br><br><br>
					1. Check the Learning Center Usage schedule before submitting the form. Booking must be sent no later than 2 (two) days before the use of the room.<br><br>
					2. Use for the purpose of student activities/programs, must attach a letter of approval from the organization of the program.<br><br>
					3. Only successul bookings will be listed in the booking table.<br><br>
					4. Please obey every instruction and rule in the Learning Center.<br><br>
					5. Reservation requests are only handled during office hours.<br><br>
					6. Pagoh Campus Resindential College facility unit has the right to cancel the booking if the infromation provided is false.




				</div>

			</form>

		</div>
	</div>



</body>

</html>
