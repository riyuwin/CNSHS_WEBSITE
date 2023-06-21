<?php
	$conn = mysqli_connect("localhost", "root", "", "yearbook");

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Retrieve batch names from the database
	$sql = "SELECT DISTINCT batch FROM students";
	$result = mysqli_query($conn, $sql);

	// Check if any data was returned
	if (mysqli_num_rows($result) > 0) {
		echo '<div class="search-container">';
		echo '<form class="search-form" action="search.php" method="GET">';
		echo '<label for="search">Search by name:</label>';
		echo '<input type="text" name="search" id="search">';
		echo '<input type="submit" value="Search">';

		echo '<label for="sort">Sort by:</label>';
		echo '<select name="sort" id="sort">';
		echo '<option value="name_asc">Name A-Z</option>';
		echo '<option value="name_desc">Name Z-A</option>';
		echo '</select>';

		echo '<label for="filter">Filter by batch:</label>';
		echo '<select name="filter" id="filter">';
		echo '<option value="">All</option>';

		while($row = mysqli_fetch_assoc($result)) {
			echo '<option value="' . $row["batch"] . '">' . $row["batch"] . '</option>';
		}

		echo '</select>';
		echo '</form>';
		echo '</div>';

		if (isset($_GET['filter'])) {
			$batch_filter = mysqli_real_escape_string($conn, $_GET['filter']);

			if (!empty($batch_filter)) {
				$sql = "SELECT * FROM students WHERE batch='$batch_filter'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					echo '<table>';
					echo '<thead>';
					echo '<tr><th>Name</th><th>Batch</th><th>Description</th></tr>';
					echo '</thead>';
					echo '<tbody>';

					while($row = mysqli_fetch_assoc($result)) {
						echo '<tr>';
						echo '<td>' . $row['name'] . '</td>';
						echo '<td>' . $row['batch'] . '</td>';
						echo '<td>' . $row['description'] . '</td>';
						echo '</tr>';
					}

					echo '</tbody>';
					echo '</table>';
				} else {
					echo '<p>No students found in batch ' . $batch_filter . '</p>';
				}
			}
		}
	}

	// Close the database connection
	mysqli_close($conn);
?>
