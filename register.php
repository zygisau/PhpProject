<?php
session_start();
// registration variables
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
$hash = hash('sha512', rand(0, 1000000));
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
$sql = $conn->prepare("SELECT * FROM user WHERE email=?");
$sql->bind_param("s", $email);
$sql->execute();
$result = $sql->get_result();
if ($result -> num_rows > 0) {
    $_SESSION['message'] = 'User with this e-mail already exists';
    header('Location:signup.php');
} else { // if user is new
    $sql = $conn->prepare("INSERT INTO user (fname, lname, email, password, hash) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("sssss", $fname, $lname, $email, $pass, $hash);
    if($sql->execute()) {
        $_SESSION['is_logged'] = true;
        $_SESSION['hash'] = $hash;
        header('Location:index.php');
    } else  {
        $_SESSION['message'] = 'Something went wrong. Sorry for inconvenience.';
        header('Location:signup.php');
//        echo $conn->error;
    }
}
$conn->close();

?>