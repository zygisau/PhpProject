<?php
session_start();
// login variables
$email = $_POST['email'];
//$pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
// conn variables
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "mydb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf-8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Is there already a user with that email?
$sql = "SELECT password, hash FROM user WHERE email='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if(password_verify($_POST["password"],$row['password'])) {
        $_SESSION['hash'] = $row['hash'];
        $_SESSION['is_logged'] = true;
        header('Location:index.php');
    } else {
        $_SESSION['message'] = 'The e-mail and password you entered did not match our records. Please double-check and try again.';
        header('Location:loginPage.php');
    }
} else { // if user is new
        $_SESSION['message'] = 'The e-mail and password you entered did not match our records. Please double-check and try again.';
        header('Location:loginPage.php');
}
$conn->close();

?>