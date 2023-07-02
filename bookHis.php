<?php
require 'connection.php';
 if (isset($_SESSION['No_Matric'])) {
     $No_Matric = $_SESSION['No_Matric'];
	 $sql = "SELECT * FROM permohonan WHERE No_Matric = '$No_Matric'";
	 $result = mysqli_query($conn, $sql);
 }

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Form</title>
	<link rel="stylesheet" type="text/css" href="bookHis.css">
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
		
		function confirmCancel() {
    	return confirm("Are you sure you want to cancel?");
		}


	</script>
</head>

<style>
	table,
	th,
	td {
		border: 1px solid;
		background-color: #FFFFCC;
		text-align: center;
	}

	table {
		width: 100%;
		border-collapse: collapse;
	}

</style>

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
						<button class="button button2"><b>Booking History</b></button><br>
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
			<table>
				<tr>
					<th>Id</th>
					<th>Information Booker</th>
					<th>Information Advisor</th>
					<th>Location</th>
					<th>Date</th>
					<th>Time Start</th>
					<th>Time End</th>
					<th>Status</th>
					<th>Button</th>
				</tr>
				<?php
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
				<tr>
					<td><?php echo $row['Id']; ?></td>
					<td><?php echo $row['Nama_Pemohon']; ?><br><?php echo $row['No_Matric']; ?><br></td>
					<td><?php echo $row['Nama_Penasihat']; ?><br><?php echo $row['No_Staff']; ?><br><?php echo $row['No_Telephone_P']; ?></td>
					<td><?php echo $row['bilik']; ?></td>
					<td><?php echo $row['Hari_Guna']; ?></td>
					<td><?php echo $row['Masa_Mula']; ?></td>
					<td><?php echo $row['Masa_Tamat']; ?></td>
					<td><?php if($row['Kelulusan']==1){
											echo "APPROVE";} 
									else{
										echo "IN PROGRESS";
									}?> <?php if($row['Pembatalan']==1){ ?>
						<div style="color:red"><b>CANCELED</b></div>
						<?php }?>
					</td>
					<td>
						<form method="POST" onsubmit="return confirmCancel();" action="cancel.php">
							<input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">
							<button type="submit" class="buttonG" name="update">CANCEL</button><br>
						</form>
					</td>
				</tr>
				<?php
                        }
                    } else {
                        echo "<tr><td colspan='8'>No data available.</td></tr>";
                    }
                    ?>

			</table>




		</div>
	</div>



</body>

</html>
