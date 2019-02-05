<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bark</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <link rel="stylesheet" type="text/css" href="styles/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class='containerLogin'>
        <a class="home" href="index.php">BARK</a>
        <form class='formContainer' action='login.php' method='POST'>
            <input class='inputs' type="text" name="email" placeholder="E-mail" required>
            <input class='inputs' type="password" name="password" placeholder="Password" required>
            <input class='login' type="submit" value="Login">
            <?php if(!is_null($_SESSION['message'])) {
                echo "<span class='error'>" , $_SESSION['message'] , "</span>";
                unset($_SESSION['message']);
            }?>
        </form>
        <span>Don't have an account? <a href='signup.php'>Create one</a></span>
    </div>
    <div class='end'>
        <span class="copyright">&copy; Žygimantas Augūnas 2019 <?php if(date("Y")!="2019") {echo "- " , date("Y");}?></span>
    </div>
</div>
</body>
</html>