<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Form</title>
	<link rel="stylesheet" type="text/css" href="bookInfo.css">

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
						<button class="button button3"><b>Book</b></button><br>
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
			<!--untuk link file book history--->
			<!--kanan line tgh--->
			<div class="bookInfo1">
				<br>
				<form action="form.php" target="_blank">
					<b>I hereby will:</b><br><br>
					I- Responsible for program organization, security, property and use equipment provided.<br><br>
					II- Ensure the Learning Center is always clean and the furniture is properly rearranged. <br><br>
					III- Comply with the procedures and conditions of use of the designated space. I can also be charged appropriate action if found guilty or in violation of the regulations in force as stated in the UTHM Residential College rulebook. University Regulations (Act 1971) and Standard Operating Procedures (SOP) which are being implemented.<br><br>
					<input type="checkbox" required> <b>I have read and understood all the conditions that have been set. If I and also the users who use at that time violate the conditions that have been set by the university can take appropriate action as stated in the conditions.</b>
					<br><br>

					<button type="submit" value="submit">Submit</button>
				</form>

			</div>
		</div>
	</div>



</body>


</html>
