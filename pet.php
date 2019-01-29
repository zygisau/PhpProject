<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bark</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
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
                <a class="topnavRight" href="#">Cart<span class="cartNumber">0</span></a>';
            } else {
                echo '
            <a class="topnavRight" href="#"><i class="fa fa-fw fa-search"></i></a>
            <a class="topnavRight" href="loginPage.php">Login</a>
            <a class="topnavRight" href="#">Cart<span class="cartNumber">0</span></a>';}
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
            <?php
            $pet = (int)$_GET["pet"];
            if (!is_nan($pet)) {
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

                    $sql = "SELECT t.type_id, b.breed_id, p.*, b.breed, t.type 
                            FROM pet AS p 
                            INNER JOIN breed AS b 
                            ON p.breed_id = b.breed_id 
                            INNER JOIN pet_type AS t
                            ON b.type_id = t.type_id AND p.pet_id=\"$pet\"";
                    $result = $conn->query($sql);
                    $result2 = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $pet_type = $result2->fetch_assoc();
                        echo "
            <div class=\"path\">
            <div class=\"type\"> / ", "<a href=\"nestedList.php?type=" , $pet_type["type_id"] , "&breed=null\">", $pet_type["type"], "</a></div>";
                        echo "
            <div class=\"path-breed\"> / ", "<a href=\"nestedList.php?type=" , $pet_type["type_id"] , "&breed=", $pet_type["breed_id"] , "\">", $pet_type["breed"], "</a></div>";
                        echo "
            <div class=\"path-pet\"> / " , "<a href=\"pet.php?pet=$pet\">" , $pet_type["name"] , "</a></div>";
                        echo "
        </div></div>
        <div class=\"separator\"></div>
        <div class=\"goods\">";


                        // output data
                        while ($row = $result->fetch_assoc()) {
                            $today = new DateTime();
                            $date = new DateTime($row["date"]);
                            $diff = $date->diff($today);
                            echo "<div class=\"petContainer\">";
                                echo "<div class=\"img-and-price\">";
                                    echo "<img class=\"pet-photo\" src=\"", $row["image_path"], "\">";
                                    echo "<div class=\"info\">";
                                        echo "<h1>" , $row["name"] , "</h1>";
                                        echo "<h2>" , $row["price"] , " €</h2>";
                                        echo "<div class=\"separator-info\"></div>";
                                        echo "<h3>Description</h3>";
                                        if ($diff->format("%y") == 0) {
                                            echo "<div class=\"info-age\">Age: ", $diff->format("%m"), " m.</div>";
                                        } else {
                                            echo "<div class=\"info-age\">Age: ", $diff->format("%y"), " yr.</div>";
                                        }
                                        echo "<div class=\"info-story\">Story: " , $row["story"] , "</div>";
                                    echo "<div class=\"separator-info\"></div>";
                                    echo "<input type='button' class='info-buy' value='Add to cart'>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
            } else {
                echo "<script language='text/javascript'>function alert() { alert('Unable to continue. Sorry for inconvenience.'); }</script>";
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>