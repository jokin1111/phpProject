<?php 

if(isset($_POST["submit"])){

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false){
        header("location: ../01src/login.php?error=emptyInput");
        exit();
    }

    loginUser($dbConn, $username, $pwd);
    
} else {
    header("location: ../login.php");
    exit();
}