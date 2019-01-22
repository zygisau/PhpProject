<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "mydb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset( $conn, 'utf-8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM pet";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data
    while ($row = $result->fetch_assoc()) {
        $today = new DateTime();
        $date = new DateTime($row["date"]);
        $diff = $date->diff($today);
        echo "<div class=\"good\">";
        echo "<img class=\"photo\" src=\"" , $row["image_path"] , "\">";
        echo "<div class=\"clear\"></div>";
        echo "<div class=\"firstLine\">";
//        $tmp = utf8_encode($row["name"]);
//        echo mb_detect_encoding($row["name"]);
        echo "<div class=\"name\">" , $row["name"] , "</div>";

        if ($diff->format("%y")==0) {
            echo "<div class=\"age\">", $diff->format("%m") , " m.</div>";
        }
        else {
            echo "<div class=\"age\">", $diff->format("%y") , " yr.</div>";
        }
        echo "</div>";
        echo "<div class=\"price\">", $row["price"] , " €</div>";
        echo "<div class=\"show-more\">";
        echo "<a href=\"#\">Show More</a>";
        echo "<div></div>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>