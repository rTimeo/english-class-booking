<?php
//login.inc.php
if(isset($_POST["submit"])){
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.php';
    require_once '../controllers/functions.php';
    


    if(emptyInputLogin($username, $pwd) !== false){
        header("location: ../views/registration-login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);

} 
else{
    header("location: ../views/registration-login.php");
    exit();
}