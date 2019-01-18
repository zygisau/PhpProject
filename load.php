<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT type FROM pet_type";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data
    while ($row = $result->fetch_assoc()) {
        echo "<div class=\"animal\">" . $row["type"] . "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>