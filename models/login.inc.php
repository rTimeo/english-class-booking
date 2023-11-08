<?php
//login.inc.php
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.php';
    require_once '../controllers/functions.php';
    


    if(emptyInputLogin($email, $pwd) !== false){
        header("location: ../views/registration-login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $email, $pwd);

} 
else{
    header("location: ../views/registration-login.php");
    exit();
}