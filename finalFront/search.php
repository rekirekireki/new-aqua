<?php
include_once("connection.php");
if (isset($_POST['look'])) {
	$search = $_POST['search'];
}

$search = $_POST['search'];
?>

<head>
	<title><?php echo $search; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="stylesheet.css">
	<style>
		.logo {
			height: 40px;
			margin: 0 10px;
		}

		.container1 {
			margin: 20px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}
		
		th,
		td {
			padding: 8px;
			text-align: left;
		}

		th {
			background-color: green;
			color: white;
		}

		.cth {
			background-color: yellowgreen;
			color: white;
		}

		.ctd {
			background-color: yellowgreen;
		}

		.cardOne {
			display: flex;
			margin-top: 7rem;
			justify-content: center;
			width: 80%;
			border-radius: 10px;
			box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
			background-color: white;
		}
		.pageOne {
			display: flex;
			flex-direction: column;
			flex-wrap: wrap;
			align-content: center;
		}
		.totalR {
			color: green;
			margin-top: 3rem;
			text-align: center;
			font-size: 3rem;
		}
	</style>
</head>
<link rel="stylesheet" href="style.css">

<body>
	<div class="pageOne">
		<div class="cardOne">
			<div class="container1">
				<h1> <b>Search result for: <?php echo $search; ?></h1>
				<table>
					<tr>
						<th>Picture</th>
						<th>Type of Plant</th>
						<th>Garden Size</th>
						<th>Name</th>
						<th>Description</th>
						<th>Soil Preference</th>
						<th>Sunlight Preference</th>
						<th>Water Preference</th>
					</tr>

					<?php
					$viewQuery = $pdo->prepare("SELECT * FROM planttbl WHERE plantName LIKE '%$search%'");
					$viewQuery->execute();
					$totalRecords = $viewQuery->rowCount();
					while ($rows = $viewQuery->fetch()) {
						$plantPhoto = $rows['Photo'];
						$plantType = $rows['plantType'];
						$gardenSize = $rows['gardenSize'];
						$plantName = $rows['plantName'];
						$plantDes = $rows['plantDes'];
						$soilPref = $rows['plantSoil'];
						$sunlightPref = $rows['plantSun'];
						$waterPref = $rows['plantWater'];

					?>

						<tr>
						<td class="ctd"><img src="Plants/<?php echo $plantPhoto; ?>" alt="Plant Picture" width="100" /></td>
							<td><?php echo $plantType; ?></td>
							<td><?php echo $plantName; ?></td>
							<td><?php echo $plantDes; ?></td>
							<td><?php echo $gardenSize; ?></td>
							<td><?php echo $soilPref; ?></td>
							<td><?php echo $sunlightPref; ?></td>
							<td><?php echo $waterPref; ?></td>
						</tr>
					<?php } ?>
				</table>

			</div>
		</div>
	</div>
</body>