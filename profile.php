<?php
session_start();
//unset($_SESSION['cart']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bark</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="cart.css">
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> <!--Search-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--LogOut-->
</head>
<body>
<div class="container">
    <div class="worldwide"><span>Everyone loves pets!</span></div>
    <div class="NavigContainer">
        <div class="topnav">
            <a class="home" href="index.php">BARK</a>
            <?php
            if ($_SESSION['is_logged'] == true) {
                echo '
                <a class="topnavRight" href="logout.php"><i class="fa fa-sign-out" style="line-height:65px; font-size:24px"></i></a>
                <a class="topnavRight" href="#"><i class="fa fa-fw fa-search"></i></a>
                <a class="topnavRight" href="profile.php">Profile</a>
                <a class="topnavRight" href="cart.php">Cart<span id="cart" class="cartNumber">
                ';
                if (isset($_SESSION['cart'])) {
                    echo count($_SESSION['cart']);
                } else {
                    echo "0";
                }
                echo '</span></a>';
            } else {
                echo '
            <a class="topnavRight" href="#"><i class="fa fa-fw fa-search"></i></a>
            <a class="topnavRight" href="loginPage.php">Login</a>
            <a class="topnavRight" href="cart.php">Cart<span id="cart" class="cartNumber">';
                if (isset($_SESSION['cart'])) {
                    echo count($_SESSION['cart']);
                } else {
                    echo "0";
                }
                echo '</span></a>';
            }
            ?>
        </div>
    </div>
    <div id="main">
        <div class="filter">
            <div class="nav">
                <ul id="navmenu">
                    <li><a href="index.php" class="animals">Animals</a>
                        <ul class="sub1">
                            <li class=""><a class="" href="nestedList.php?type=1&breed=null">Dogs</a>
                                <ul class="sub2">

                                    <li class="breed"><a href="nestedList.php?type=1&breed=1">Pekingese</a></li>
                                    <li class="breed"><a href="nestedList.php?type=1&breed=2">Pug</a></li>
                                    <li class="breed"><a href="nestedList.php?type=1&breed=3">German Shepherd</a>
                                    </li>
                                    <li class="breed"><a href="nestedList.php?type=1&breed=4">Poodle</a></li>
                                    <li class="breed"><a href="nestedList.php?type=1&breed=5">Bulldog</a></li>
                                    <li class="breed"><a href="nestedList.php?type=1&breed=6">Labrador Retriever</a>
                                    </li>
                                    <li class="breed"><a href="nestedList.php?type=1&breed=7">Beagle</a></li>
                                    <li class="breed"><a href="nestedList.php?type=1&breed=8">Chihuahua</a></li>
                                    <li class="breed"><a href="nestedList.php?type=1&breed=9">Yorkshire Terrier</a>
                                    </li>
                                    <li class="breed"><a href="nestedList.php?type=1&breed=10">Siberian Husky</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="animalsList"><a class="types"
                                                       href="nestedList.php?type=2&breed=null">Cats</a>
                                <ul class="sub2">
                                    <li><a href="nestedList.php?type=2&breed=1">Russian Blue</a></li>
                                    <li><a href="nestedList.php?type=2&breed=2">Persian cat</a></li>
                                    <li><a href="nestedList.php?type=2&breed=3">Siamese cat</a></li>
                                    <li><a href="nestedList.php?type=2&breed=4">British Shorthair</a></li>
                                    <li><a href="nestedList.php?type=2&breed=5">Bengal</a></li>
                                    <li><a href="nestedList.php?type=2&breed=6">Munchkin</a></li>
                                    <li><a href="nestedList.php?type=2&breed=7">Siamese</a></li>
                                    <li><a href="nestedList.php?type=2&breed=8">Persian</a></li>
                                    <li><a href="nestedList.php?type=2&breed=9">Ragdoll</a></li>
                                    <li><a href="nestedList.php?type=2&breed=10)">Scottish Fold</a></li>
                                </ul>
                            </li>
                            <li class="animalsList"><a class="types"
                                                       href="nestedList.php?type=3&breed=null">Turtles</a>
                                <ul class="sub2">
                                    <li><a href="nestedList.php?type=3&breed=1">African Aquatic Sideneck</a></li>
                                    <li><a href="nestedList.php?type=3&breed=2">Central American Wood Turtle</a>
                                    </li>
                                    <li><a href="nestedList.php?type=3&breed=3">Painted Turtle</a></li>
                                    <li><a href="nestedList.php?type=3&breed=4">Caspian Pond Turtle</a></li>
                                    <li><a href="nestedList.php?type=3&breed=5">Red Ear Slider Turtle</a></li>
                                    <li><a href="nestedList.php?type=3&breed=6">Reeve's Turtle</a></li>
                                    <li><a href="nestedList.php?type=3&breed=7">Eastern Box Turtle</a></li>
                                    <li><a href="nestedList.php?type=3&breed=8">Mississippi Map Turtle</a></li>
                                    <li><a href="nestedList.php?type=3&breed=9">Russian Tortoise</a></li>
                                    <li><a href="nestedList.php?type=3&breed=10">Greek Tortoise</a></li>
                                </ul>
                            </li>
                            <li class="animalsList"><a class="types"
                                                       href="nestedList.php?type=4&breed=null">Rabbits</a>
                                <ul class="sub2">
                                    <li><a href="nestedList.php?type=4&breed=1">Alaskan</a></li>
                                    <li><a href="nestedList.php?type=4&breed=2">American</a></li>
                                    <li><a href="nestedList.php?type=4&breed=3">Angora</a></li>
                                    <li><a href="nestedList.php?type=4&breed=4">Argentes</a></li>
                                    <li><a href="nestedList.php?type=4&breed=5">Belgian Hare</a></li>
                                    <li><a href="nestedList.php?type=4&breed=6">Champagne d'Argent</a></li>
                                    <li><a href="nestedList.php?type=4&breed=7">Cinnamon</a></li>
                                    <li><a href="nestedList.php?type=4&breed=8">Dutch</a></li>
                                    <li><a href="nestedList.php?type=4&breed=9">Dwarf Hotot</a></li>
                                </ul>
                            </li>
                            <li class="animalsList"><a class="types"
                                                       href="nestedList.php?type=5&breed=null">Parrots</a>
                                <ul class="sub2">
                                    <li><a href="nestedList.php?type=5&breed=1">Cockatoos</a></li>
                                    <li><a href="nestedList.php?type=5&breed=2">Parakeets</a></li>
                                    <li><a href="nestedList.php?type=5&breed=3">African Grey Parrot</a></li>
                                    <li><a href="nestedList.php?type=5&breed=4">Amazon Parrot</a></li>
                                    <li><a href="nestedList.php?type=5&breed=5">Eclectus Parrot</a></li>
                                    <li><a href="nestedList.php?type=5&breed=6">Hawk-Headed Parrot </a></li>
                                    <li><a href="nestedList.php?type=5&breed=7">Macaws</a></li>
                                    <li><a href="nestedList.php?type=5&breed=8">Palm Cockatoo</a></li>
                                    <li><a href="nestedList.php?type=5&breed=9">Alexandrine Parrot</a></li>
                                    <li><a href="nestedList.php?type=5&breed=10">Macaws</a></li>
                                </ul>
                            </li>
                            <li class="animalsList"><a class="types"
                                                       href="nestedList.php?type=6&breed=null">Snakes</a>
                                <ul class="sub2">
                                    <li><a href="nestedList.php?type=6&breed=1">Corn Snake</a></li>
                                    <li><a href="nestedList.php?type=6&breed=2">California Kingsnake</a></li>
                                    <li><a href="nestedList.php?type=6&breed=3">Rosy Boa</a></li>
                                    <li><a href="nestedList.php?type=6&breed=4">Gopher Snake</a></li>
                                    <li><a href="nestedList.php?type=6&breed=5">Ball Python</a></li>
                                </ul>
                            </li>
                            <li class="animalsList"><a class="types"
                                                       href="nestedList.php?type=7&breed=null">Spiders</a>
                                <ul class="sub2">
                                    <li><a href="nestedList.php?type=7&breed=1">Mexican Redknee Tarantulas</a></li>
                                    <li><a href="nestedList.php?type=7&breed=2">Chilean Rose Tarantulas</a></li>
                                    <li><a href="nestedList.php?type=7&breed=3">Costa Rican Zebra Tarantulas</a>
                                    </li>
                                    <li><a href="nestedList.php?type=7&breed=4">Mexican Redleg Tarantulas</a></li>
                                    <li><a href="nestedList.php?type=7&breed=5">Honduran Curly Hair Tarantulas</a>
                                    </li>
                                    <li><a href="nestedList.php?type=7&breed=6">Pink Zebra Beauty Tarantulas</a>
                                    </li>
                                    <li><a href="nestedList.php?type=7&breed=7">Pink Toe Tarantulas</a></li>
                                    <li><a href="nestedList.php?type=7&breed=8">Brazilian Black Tarantulas</a></li>
                                    <li><a href="nestedList.php?type=7&breed=9">Brazilian Black Tarantulas</a></li>
                                    <li><a href="nestedList.php?type=7&breed=10">Desert Blonde Tarantulas</a></li>
                                </ul>
                            </li>
                            <li class="animalsList"><a class="types"
                                                       href="nestedList.php?type=8&breed=null">Hamsters</a>
                                <ul class="sub2">
                                    <li><a href="nestedList.php?type=8&breed=1">Syrian Hamsters</a></li>
                                    <li><a href="nestedList.php?type=8&breed=2">Syrian Hamsters</a></li>
                                    <li><a href="nestedList.php?type=8&breed=3">Robo Hamsters</a></li>
                                    <li><a href="nestedList.php?type=8&breed=4">Winter White Hamsters</a></li>
                                    <li><a href="nestedList.php?type=8&breed=5">Chinese Hamsters</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="separator"></div>
        <div class="title">Hello,
            <?php
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

            $sql = $conn->prepare("SELECT fname, lname FROM user WHERE hash=?");
            $sql->bind_param('s', $_SESSION['hash']);
            $sql->execute();
            $result = $sql->get_result();
            if ($result->num_rows > 0) {
                $info = $result->fetch_assoc();
                echo $info['fname'] , " " , $info['lname'];
            }
            ?>!</div> <!--Getting name and surname-->
        <div class="separator profile-separator"></div>
        <div class="profile">
            <div class="purchases">
                <span class="subtitle">PURCHASES</span>
                <div class="history">
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
                    echo '
                    <table class="on-going-table">
                    <thead>
                        <tr>
                            <th class="on-going">ON GOING</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    </table>
                    ';
                    ?>
                </div>
            </div>
        </div>
    </div>
        <div class='end'>
            <span class="copyright">&copy; Žygimantas Augūnas 2019<?php if (date("Y") != "2019") {
                    echo "- ", date("Y");
                } ?></span>
        </div>
</body>
</html>