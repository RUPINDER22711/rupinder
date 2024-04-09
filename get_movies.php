<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "movies";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to retrieve movies from database
$sql = "SELECT * FROM movies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["title"] . " - Genre: " . $row["genre"] . " - Director: " . $row["director"] . "</li>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
