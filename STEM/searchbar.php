<?php
  $conn = mysqli_connect("localhost", "root", "", "yearbook");

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get the search query from the URL parameter
  $searchQuery = $_GET["q"];

  // Perform a SQL query to retrieve the search results
  $sql = "SELECT * FROM students WHERE name LIKE '%" . $searchQuery . "%'";
  $result = mysqli_query($conn, $sql);

  // Check if any data was returned
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo '<div class="search-result">' . $row["name"] . '</div>';
    }
  } else {
    echo "No results found";
  }

  // Close the database connection
  mysqli_close($conn);
?>
