<?php 

session_start();




$userName = $_POST["userName"];
$password = $_POST["password"];

if(trim($userName) == "rysavy" && trim($password) =="password123"){

    $_SESSION['isLoggedIn'] = true;
    header('Location: protectedpage.php');
} else {
    header('location: login1.php?badUserCredentials=true');
}



?>