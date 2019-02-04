<?php
session_start();
if(isset($_SESSION['hash']) && $_SESSION['is_logged']==true) {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['state']) && $_POST['state'] && isset($_POST['date'])) {
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
        $presql = $conn->prepare("SELECT * FROM user WHERE hash = ?");
        $presql->bind_param('i', $_SESSION['hash']);
        $presql->execute();
        $preresult = $presql->get_result();
        if($preresult->num_rows > 0) {
//        $preresult = $preresult->fetch_assoc();
//        print_r($preresult);
            $sql = $conn->prepare("UPDATE orders SET paid=1 WHERE order_date=?");
    //        $sql = $conn->prepare("UPDATE orders SET paid=1 WHERE (SELECT user_id FROM user WHERE u.hash=?)=user_id AND order_date=?");
            $sql->bind_param('s',$_POST['date']);
            if (!$sql->execute()) {
                echo "Something went wrong! " . $sql->error;
            } else {
                echo "Payment done successfully";
            }
        }
    } else {
        $_SESSION['message'] = 'Ups! Something went wrong.';
        header('Location: error.php');
    }
} else {
    $_SESSION['message'] = 'Ups! We were not able to authenticate You.';
    header('Location: error.php');
}
?>