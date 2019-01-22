<?php
function sayHiBack()
{
    if (isset($_GET["parameter"]) && !is_nan($_GET["parameter"]) && $_GET["parameter"]>=1 && $_GET["parameter"]<=69) {
        $hello = $_GET["parameter"];
        echo "<script language='text/javascript'>function sayHiFromPHP() { alert('Just wanted to say $hello!'); }</script>";
    }
        else {
            echo "<script language='text/javascript'>function sayHiFromPHP() { alert('Parameter is not a function'); }</script>";
        }
}

?>