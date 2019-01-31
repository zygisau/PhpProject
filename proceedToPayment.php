<?php
//session_start();
//if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['hash']) && $_SESSION['is_logged']==true && !is_nan($_POST['pet_id'])) {
//// registration variables $_SESSION['hash']
//    $pet_id = $_POST['pet_id'];
//// conn variables
//    $servername = "localhost";
//    $username = "root";
//    $password = "admin";
//    $dbname = "mydb";
//// Create connection
//    $conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//    if ($conn->connect_error) {
//        die("Connection failed: " . $conn->connect_error);
//    }
//    $sql = $conn->prepare("SELECT user_id FROM user WHERE hash = ?");
//    $sql = $conn->bind_params('s', $_SESSION['hash']);
//    $sql->execute();
//
//    $sql = $conn->prepare("INSERT INTO order (user_id, pet_id, order_date) VALUES(?, ?, ?)");
//    $sql = $conn->execute(array('user_id' => ));
//
//    if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";
//    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    }
//
//    $conn->close();
//} else {
//    $_SESSION['message'] = '';
//    header('Location: error.php');
//}
//?>