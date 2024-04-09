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

// Retrieve movie details from form
$movie = $_POST['movie'];
$genre = $_POST['genre'];
$director = $_POST['director'];

// SQL to insert movie into database
$sql = "INSERT INTO movies (title, genre, director) VALUES ('$movie', '$genre', '$director')";

if ($conn->query($sql) === TRUE) {
    echo "New movie added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: index.php');
exit();
?>
