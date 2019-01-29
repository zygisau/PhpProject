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
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
<div class='container'>
    <div class='containerLogin'>
        <a class="home" href="index.php">BARK</a>
        <form class='formContainer' action='register.php' method='post'>
            <input class='inputs' type="text" name="fname" placeholder="First Name" required>
            <input class='inputs' type="text" name="lname" placeholder="LastName" required>
            <input class='inputs' type="email" name="email" placeholder="E-mail" required>
            <input class='inputs' type="password" name="password" placeholder="Password" id='password'required>
            <input class='inputs' type="password" name="confirmPassword" placeholder="Confirm Password" id='confirmPassword' required>
            <input class='login' type="submit" value="Login">
            <script type="text/javascript">
            let password = document.getElementById("password")
            , confirm_password = document.getElementById("confirmPassword");
            function validatePassword(){
              if(password.value !== confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
              } else {
                confirm_password.setCustomValidity('');
              }
            }
            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
            </script>
            <?php if(!is_null($_SESSION['message'])) {
                echo "<span class='error'>" , $_SESSION['message'] , "</span>";
            }?>
        </form>
        <span>Already have an account? <a href='loginPage.php'>Log in</a></span>
    </div>
    <div class='end'>
        <span class="copyright">&copy; Žygimantas Augūnas 2019 <?php if(date("Y")!="2019") {echo "- " , date("Y");}?> </span>
    </div>
</div>
</body>
</html>
