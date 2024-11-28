<?php

if(isset($_POST["submit"])){
    
    $name = $_POST["nombre"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once("dbh.inc.php");
    require_once("functions.inc.php");

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false){
        header("location: ../01src/signup.php?error=emptyInput");
        exit();
    }
    if (invalidUid($username) !== false){
        header("location: ../01src/signup.php?error=invalidUsername");
        exit();
    }
    if (invalidEmail($email) !== false){
        header("location: ../01src/signup.php?error=invalidEmail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../01src/signup.php?error=pwdDontMatch");
        exit();
    }
    if (uidExists($dbConn, $username, $email) !== false){
        header("location: ../01src/signup.php?error=userTaken");
        exit();
    }    


    createUser($dbConn, $name, $email, $username, $pwd);


} else {
    header("location: ../01src/signup.php");
    exit();
} 