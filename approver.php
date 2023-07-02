<?php
require 'connection.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learningroomfyp";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the search term from the query string
$searchTerm = isset($_GET['searchTerm']) ? $_GET['searchTerm'] : '';

// Build the SQL query
$sql = "SELECT * FROM permohonan WHERE No_Matric LIKE '%$searchTerm%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $rows = [];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Approver Page</title>
	<link rel="stylesheet" type="text/css" href="approver.css">

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
	<form action="LoginForm.php"><button class="button button1">Logout</button> </form>
	<form action="" method="GET">
		<br><input type="text" id="searchInput" name="searchTerm" placeholder="Enter No Matric" value="<?php echo $searchTerm; ?>">
		<button id="searchButton">Search</button>
	</form>
	<div id="searchResults"></div>
	<script>
		const searchInput = document.getElementById('searchInput');
		const searchButton = document.getElementById('searchButton');
		const searchResults = document.getElementById('searchResults');

		searchButton.addEventListener('click', function() {
			searchResults.innerHTML = '';

			const query = searchInput.value.toLowerCase();
			const allContent = document.getElementsByTagName('body')[0].innerText.toLowerCase();
			const matches = allContent.match(new RegExp(query, 'g'));

			if (matches) {
				for (const match of matches) {
					const result = document.createElement('p');
					result.textContent = match;
					searchResults.appendChild(result);
				}
			}
		});

	</script>

	<hr>

	<table>
		<tr>
			<th>No</th>
			<th>Information Booker</th>
			<th>Information Advisor</th>
			<th>Room</th>
			<th>Date</th>
			<th>Time Start</th>
			<th>Time End</th>
			<th>Status</th>
			<th>APPROVE</th>
			<th>DISAPPROVE</th>
		</tr>
		<?php foreach ($rows as $row): ?>
		<?php $_SESSION["Id"] = $row["Id"];?>

		<tr>
			<td><?php echo $row['Id']; ?></td>
			<td><?php echo $row['Nama_Pemohon']; ?><br><?php echo $row['No_Matric']; ?><br>0<?php echo $row['No_Telephone']; ?></td>
			<td><?php echo $row['Nama_Penasihat']; ?><br><?php echo $row['No_Staff']; ?><br>0<?php echo $row['No_Telephone_P']; ?></td>
			<td><?php echo $row['bilik']; ?></td>
			<td><?php echo $row['Hari_Guna']; ?></td>
			<td><?php echo $row['Masa_Mula']; ?></td>
			<td><?php echo $row['Masa_Tamat']; ?></td>
			<td><?php if($row['Disemak']==1){
				echo "CHECKED";
			}
			else{
				echo "IN PROGRESS";
			}
				?><br>
				<?php if($row['Kelulusan']==null){?>
					<?php echo "NO STATUS";?>
				<?php }elseif($row['Kelulusan']==0){?>
				<div style="color:red"><b>DISAPPROVED</b></div>
				<?php }else{?>
				<div style="color:green"><b>APPROVED</b></div> <?php
			}?><?php if($row['Pembatalan']==1){ ?><div style="color:red"><b>CANCELED</b></div> <?php }?>

			</td>
			<td>
				<form method="POST" action="approve.php">
					<input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">
					<button type="submit" class="buttonV button" name="update">APPROVE</button><br>
				</form>
			</td>
			<td>
				<form method="POST" action="disapprove.php">
					<input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">
					<button type="submit" class="buttonG button" name="update"> DISAPPROVE</button>
				</form>
			</td>

		</tr>
		<?php endforeach; ?>


	</table>
</body>

</html>
