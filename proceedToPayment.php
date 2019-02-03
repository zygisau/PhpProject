<?php
session_start();
if(isset($_SESSION['hash']) && $_SESSION['is_logged']==true) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
// conn variables
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
        $sql = $conn->prepare("SELECT user_id FROM user WHERE hash = ?");
        $sql->bind_param('s', $_SESSION['hash']);
        $sql->execute();
        $result = $sql->get_result();
        if ($result->num_rows > 0) {
            $user_id = array_slice($result->fetch_assoc(), 0, 1);
            try {
                $sql = $conn->prepare("INSERT INTO order (user_id, pet_id, order_date) VALUES(?, ?, ?)");
                $date = date('Y-m-d H:i:s', time());
                $user = $user_id['user_id'];
                print_r(gettype($user));
                echo "</br>";
                $pet=(int)$_SESSION['cart'][0];
                print_r(gettype($pet));
                echo "</br>";
                print_r(gettype($date));
                $sql->bind_param('iis', $user,$pet , $date);
                print_r($sql);
            } catch (Exception $e) {
//                print_r("nope" . $conn->error_list);
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
//            if ($conn->query($sql) === TRUE) {
//                echo "New records created successfully";
//            } else {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//            }
        } else {
            $_SESSION['message'] = 'Ups! We were not able to authenticate You.' . $sql;
            header('Location: error.php');
        }
        $conn->close();
    } else {
        $_SESSION['message'] = 'Ups! Something went wrong.';
        header('Location: error.php');
    }
} else {
    $_SESSION['message'] = 'Please log in to continue your purchase';
    header('Location: login.php');
}
?>