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
<!--    <link rel="stylesheet" type="text/css" href="styles/index.css">-->
    <link rel="stylesheet" type="text/css" href="styles/cart.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--LogOut-->
</head>
<body>
<div class="container">
    <div class="worldwide"><span>Everyone loves pets!</span></div>
    <div class="NavigContainer">
        <div class="topnav">
            <a class="home" href="index.php">BARK</a>
            <?php
            if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']==true) {
                echo '
                <a class="topnavRight" href="logout.php"><i class="fa fa-sign-out" style="line-height:65px; font-size:24px"></i></a>
                
                <a class="topnavRight" href="profile.php">Profile</a>
                <a class="topnavRight" href="cart.php">Cart<span class="cartNumber">';
                if(isset($_SESSION['cart'])) {
                    $cart = $_SESSION['cart'];
                    echo count($_SESSION['cart']);
                } else {echo "0";} echo '</span></a>';
            } else {
                echo '
                
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
            <div class="title">CART</div>
            <div class="separator"></div>
            <div class="cart-items">
                <?php
                function howMany($id) {
                    $count = 0;
                    foreach ($_SESSION['cart'] as $item) {
                        if ($item == $id) {
                            $count++;
                        }
                    }
                    return $count;
                }
                if (isset($_SESSION['cart'])) {
                    $servername = "localhost";
                    $username = "root";
                    $password = "admin";
                    $dbname = "mydb";
// Create connection
                    try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $place_holders = implode(',', array_fill(0, count($_SESSION['cart']), '?'));
                    $sql = "SELECT * FROM pet WHERE pet_id IN ($place_holders)";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute($_SESSION['cart']);
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    // set the resulting array to associative
//                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    if (count($result) > 0) {
                        // output data
                        echo '
                <table class="cart-table">
                <thead>
                    <tr>
                        <th>PET</th>
                        <th></th>
                        <th>QUANTITY</th>
                        <th></th>
                        <th>SUBTOTAL</th>
                        <th></th>
                        <th>PRICE</th>
                    </tr>
                </thead>
                <tbody>
                        ';
                        $last = array_keys($result);
                        $lastres = end($last);
                        foreach ($result as $key => $row) {
                            echo '
                    <tr class="cart-pet">
                        <td align="center" class="cart-photo-container"><img class="cart-photo" src="' , $row["image_path"] , '"></td>
                        <td class="name-info-cart">
                            <div class="name-cart">' , $row['name'] , '</div>
                            <div class="info-cart"><a href="pet.php?pet=' , $row['pet_id'] , '">About pet</a></div>
                            <div class="delete"><a style="color: #c10000;text-decoration: none;" href="javascript:deletePet(' , $row['pet_id'] , ');"><b>X</b> Delete pet</a></div>
                            <script>
                            function deletePet (id) {
//                                var pet = document.getElementById("pet").value
                                var ajax = new XMLHttpRequest();
                                ajax.open("POST", "deleteFromCart.php", true);
                                ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                                ajax.onreadystatechange = function() {
                                    if (this.readyState === 4 && this.status === 200) {
                                        location.reload();
                                    }
                                }
                                var send = \'pet_id=\' + id;
                                console.log(send);
                                try {
                                    ajax.send(send);
                                } catch(err) {
                                    console.log(err.message);
                                }
                            }
                            </script>
                        </td>
                        <td align="center" class="quantity">
                            <input type="number" onchange="" class="quantity-input" name="' , $row['pet_id'] , '" min="1" max="100" value="' , howMany($row['pet_id']) , '">
                            <input type="hidden" value="' , $row['pet_id'] , '">
                        </td>
                        <script>
                        document.addEventListener("DOMContentLoaded",function() {
                            document.querySelector(\'input[name = "' , $row['pet_id'] , '"]\').onchange=changeEventHandler;
                        },false);
                        
                        function changeEventHandler(event) {
                            // You can use “this” to refer to the selected element.
                                var ajax = new XMLHttpRequest();
                                ajax.open("POST", "newCount.php", true);
                                ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                                ajax.onreadystatechange = function() {
                                    if (this.readyState === 4 && this.status === 200) {
//                                        location.reload();
                                    }
                                }
                                var send = \'pet_id=\' + ' , $row['pet_id'] , ' + \'&newValue=\' + event.target.value;
                                console.log(send);
                                try {
                                    ajax.send(send);
                                } catch(err) {
                                    console.log(err.message);
                                }
                        }
                        </script>
                        <td align="center" class="arithmetic">X</td>
                        <td align="center" class="subtotal-cart">
                            <span>' , $row['price'] , ' €</span>
                        </td>
                        <td align="center" class="arithmetic" style="font-size: 20pt;">=</td>
                        <td align="center" class="price-cart">
                            <span class="price-cart-class">' , $row['price']*howMany($row['pet_id']) , '</span><span> €</span>
                        </td>
                    </tr>';
                        if ($key == $lastres) {
                            echo '<tr><td colspan="7" align="center"><div class="table-separator" style="background-color: #121212"></div></td></tr>';
                        } else { echo '<tr><td colspan="7" align="center"><div class="table-separator"></div></td></tr>';}
                        }
                        echo '
                    <tr>
                        <td colspan="2" align="center"><div class="total">TOTAL</div></td>
                        <td colspan="5" align="right"><div class="total-price" id="total-price"></div></td>
                    </tr>
                    <tr>
                        <td colspan="6" align="right"><form action="proceedToPayment.php" method="POST" class="proceed">
                        <input type="submit" value="PROCEED TO CHECKOUT">
                        <input id="submit" name="price" type="hidden" value="">
                        </form></td>
                        <script>
                        var total = document.getElementById("total-price");
                        var prices = document.getElementsByClassName("price-cart-class");
                        var submit = document.getElementById("submit");
                        var array = [];
                        for (var ind=0; ind<prices.length; ind++) {
                            array.push(parseFloat(prices[ind].outerText))
                        }
                        console.log(prices);
                        calculate();
                        function getSum(total, num) {
                            return total + num;
                        }
                        function calculate() {
                            var result = array.reduce(getSum);
                            total.innerHTML = result + " €";
                            submit.value = result;
                        }
                        </script>
                    </tr>
                </tbody>
                </table>';
                    } else {
                        echo "<div class=\"no-items\">There was a problem while loading your cart.</div>";
                    }
                    } catch(PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    $conn = null;
                } else {
                    echo '<div class="no-items">There are no items in the cart.</div>';
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