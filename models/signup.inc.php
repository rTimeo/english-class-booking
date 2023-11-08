<?php

if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];


    require_once 'dbh.php';
    require_once '../controllers/functions.php';
    


    if(emptyInputSignup($name, $email, $pwd, $pwdRepeat) !== false){
        header("location: ../views/registration-login.php?error=emptyinput&type=registration");
        exit();
    }
    



    if(invalidEmail($email) !== false){
        header("location: ../views/registration-login.php?error=invalidemail");
        exit();
    }

    if(pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../views/registration-login.php?error=passwordsdontmatch");
        exit();
    }



    createUser($conn, $name, $email, $pwd);

}else{
    header("location: ../views/registration-login.php");
    exit();
}

