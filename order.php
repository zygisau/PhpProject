<?php
session_start();
unset($_SESSION['message']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bark</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="cart.css">
    <link rel="stylesheet" type="text/css" href="order.css">
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
            if ($_SESSION['is_logged']==true) {
                echo '
                <a class="topnavRight" href="logout.php"><i class="fa fa-sign-out" style="line-height:65px; font-size:24px"></i></a>
                <a class="topnavRight" href="#"><i class="fa fa-fw fa-search"></i></a>
                <a class="topnavRight" href="profile.php">Profile</a>
                <a class="topnavRight" href="cart.php">Cart<span class="cartNumber">';
                if(isset($_SESSION['cart'])) {
                    $cart = $_SESSION['cart'];
                    echo count($_SESSION['cart']);
                } else {echo "0";} echo '</span></a>';
            } else {
                echo '
                <a class="topnavRight" href="#"><i class="fa fa-fw fa-search"></i></a>
                <a class="topnavRight" href="loginPage.php">Login</a>
                <a class="topnavRight" href="cart.php">Cart<span class="cartNumber">';
                if(isset($_SESSION['cart'])) {
                    $cart = $_SESSION['cart'];
                    echo count($_SESSION['cart']);
                } else {echo "0";} echo '</span></a>';}
            ?>
        </div>
    </div>
    <div id="main">
        <div class="filter" id="filter">
            <div class="left-element">
                <div class="nav">
                    <ul id="navmenu">
                        <li><a href="index.php" class="animals">Animals</a>
                            <ul class="sub1">
                                <li class=""><a class="" href="nestedList.php?type=1&breed=null">Dogs</a>
                                    <ul class="sub2">

                                        <li class="breed"><a href="nestedList.php?type=1&breed=1">Pekingese</a></li>
                                        <li class="breed"><a href="nestedList.php?type=1&breed=2">Pug</a></li>
                                        <li class="breed"><a href="nestedList.php?type=1&breed=3">German Shepherd</a></li>
                                        <li class="breed"><a href="nestedList.php?type=1&breed=4">Poodle</a></li>
                                        <li class="breed"><a href="nestedList.php?type=1&breed=5">Bulldog</a></li>
                                        <li class="breed"><a href="nestedList.php?type=1&breed=6">Labrador Retriever</a>
                                        </li>
                                        <li class="breed"><a href="nestedList.php?type=1&breed=7">Beagle</a></li>
                                        <li class="breed"><a href="nestedList.php?type=1&breed=8">Chihuahua</a></li>
                                        <li class="breed"><a href="nestedList.php?type=1&breed=9">Yorkshire Terrier</a></li>
                                        <li class="breed"><a href="nestedList.php?type=1&breed=10">Siberian Husky</a></li>
                                    </ul>
                                </li>
                                <li class="animalsList"><a class="types" href="nestedList.php?type=2&breed=null">Cats</a>
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
                                <li class="animalsList"><a class="types" href="nestedList.php?type=3&breed=null">Turtles</a>
                                    <ul class="sub2">
                                        <li><a href="nestedList.php?type=3&breed=1">African Aquatic Sideneck</a></li>
                                        <li><a href="nestedList.php?type=3&breed=2">Central American Wood Turtle</a></li>
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
                                <li class="animalsList"><a class="types" href="nestedList.php?type=4&breed=null">Rabbits</a>
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
                                <li class="animalsList"><a class="types" href="nestedList.php?type=5&breed=null">Parrots</a>
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
                                <li class="animalsList"><a class="types" href="nestedList.php?type=6&breed=null">Snakes</a>
                                    <ul class="sub2">
                                        <li><a href="nestedList.php?type=6&breed=1">Corn Snake</a></li>
                                        <li><a href="nestedList.php?type=6&breed=2">California Kingsnake</a></li>
                                        <li><a href="nestedList.php?type=6&breed=3">Rosy Boa</a></li>
                                        <li><a href="nestedList.php?type=6&breed=4">Gopher Snake</a></li>
                                        <li><a href="nestedList.php?type=6&breed=5">Ball Python</a></li>
                                    </ul>
                                </li>
                                <li class="animalsList"><a class="types" href="nestedList.php?type=7&breed=null">Spiders</a>
                                    <ul class="sub2">
                                        <li><a href="nestedList.php?type=7&breed=1">Mexican Redknee Tarantulas</a></li>
                                        <li><a href="nestedList.php?type=7&breed=2">Chilean Rose Tarantulas</a></li>
                                        <li><a href="nestedList.php?type=7&breed=3">Costa Rican Zebra Tarantulas</a></li>
                                        <li><a href="nestedList.php?type=7&breed=4">Mexican Redleg Tarantulas</a></li>
                                        <li><a href="nestedList.php?type=7&breed=5">Honduran Curly Hair Tarantulas</a></li>
                                        <li><a href="nestedList.php?type=7&breed=6">Pink Zebra Beauty Tarantulas</a></li>
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
        </div>
        <div class="separator"></div>
        <div class="cart">
            <div class="title">Order #<?php echo $_GET['order_id']?></div>
            <div class="separator"></div>
            <div class="cart-items">
                <?php

                if (!is_nan($_GET['order_id']) && isset($_SESSION['hash'])) {
                    $servername = "localhost";
                    $username = "root";
                    $password = "admin";
                    $dbname = "mydb";
// Create connection
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $presql = $conn->prepare("SELECT order_date FROM orders WHERE order_id = ?");
                    $presql->bind_param('i', $_GET['order_id']);
                    $presql->execute();
                    $preresult = $presql->get_result();
                    $preresult = $preresult->fetch_assoc();
//                    print_r($preresult);
                    $sql = $conn->prepare("SELECT o.*, u.*, p.* FROM pet AS p INNER JOIN orders AS o ON o.pet_id = p.pet_id INNER JOIN user AS u ON o.user_id=u.user_id WHERE o.order_date=? AND u.hash=?");
                    $sql->bind_param('si', $preresult['order_date'], $_SESSION['hash']);
                    $sql->execute();
                    $result = $sql->get_result();
                    if ($result->num_rows > 0) {
                        // output data
                        while($row = $result->fetch_assoc())
                        {
                            echo '
                <div class="order-container">
                    <img class="cart-photo" src="' , $row['image_path'] , '">                                    
                    <div class="order-pet">' , $row['name'] , '</div>
                    <div class="info-cart"><a href="pet.php?pet=' , $row['pet_id'] , '">About pet</a></div>
                </div>
                <div class="order-separator"></div>
                
                            ';
                            $total = $row['total_price'];
                            $paid = $row['paid'];
                            $delivered = $row['delivered'];
                        }
                        echo '
                <div class="separator-total"></div>
                <div class="last-total">
                    <div class="total">TOTAL</div>
                    <div class="total-price">' , $total , ' €</div>
                </div>
                <div style="width: 100%; height: 100%">';
                    if (!$paid) {
                        echo '
                        <table class="buttons">
                        <tbody>
                            <tr align="center">
                                <td><button type="button" class="pay" onclick="order(\'',$preresult['order_date'] , '\', \'pay\')">PAY FOR THE PRODUCT</button></td>
                                <td><button type="button" class="pay deletebutton" onclick="order(\'',$preresult['order_date'] , '\', \'delete\')">DELETE THE ORDER</button></td>
                            </tr>                       
                        </tbody>
                        </table>
                        <br><span id="payment-info"></span>';
                    } else if (!$delivered) {
                        echo '
                        <table class="buttons">
                        <tbody>
                            <tr align="center">
                                <td><button type="button" class="pay" onclick="order(\'',$preresult['order_date'] , '\', \'deliver\')">MARK AS DELIVERED</button></td>
                            </tr>                       
                        </tbody>
                        </table>
                        <br><span id="payment-info"></span>';
                    }
                echo '</div>
                <script>
                function order(date, state) {
                    var ajax = new XMLHttpRequest();
                    ajax.open("POST", "orderModification.php", true);
                    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    ajax.onreadystatechange = function() {
                        if (this.readyState === 4 && this.status === 200) {
                            var response = this.responseText;
                            document.getElementById("payment-info").innerHTML = response;
                            if (state === "delete") {
                                window.location="profile.php";
                            } else {
                                location.reload();
                            }
                        }
                    }
                    if (state === "pay" || state === "deliver"  || state === "delete" ) {
                        var send = "state=" + state + "&date=" + date;
                        try {
                            ajax.send(send);
                        } catch(err) {
                            console.log(err.message);
                        }
                    }
                }
                </script>
                        ';
                    } else {
                        echo "<div class=\"no-items\">There was a problem while loading your order.</div>";
                    }
                    $conn = null;
                } else {
                    echo '<div class="no-items">Something went wrong while trying to authorize the user.</div>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class='end'>
        <span class="copyright">&copy; Žygimantas Augūnas 2019<?php if(date("Y")!="2019") {echo "- " , date("Y");}?></span>
    </div>
</div>
</body>
</html>