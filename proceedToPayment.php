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
                $sql = $conn->prepare("INSERT INTO orders (user_id, pet_id, order_date) VALUES(?, ?, ?)");
                $sql->bind_param('iis', $user,$pet , $date);
                $user = $user_id['user_id'];
                foreach ($_SESSION['cart'] as $key => $value) {
                    $date = date('Y-m-d H:i:s', time());
                    $pet = $value;
                    $sql->execute();
                }
                printf("Error: %s.\n", $sql->error);
                unset($_SESSION['cart']);
                header('Location: profile.php');
            } catch (Exception $e) {
//                print_r("nope" . $conn->error_list);
                echo 'Caught exception: ',  $e->getMessage(), "\n";
                echo "Hi";
                print_r($sql->error);
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