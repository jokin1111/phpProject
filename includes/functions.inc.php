<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat): bool{

    $result = false;

    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }else{
        $result = false;
    }

    return $result;

}

function invalidUid($uid){
    $result = false;

    if(!preg_match("/^[a-zA-Z0-9]*$/", $uid)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){

    $result = false;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result = false;

    if ($pwd !== $pwdRepeat){
        $result = true;
    }else{
        $result= false;
    }
    return $result;
}

function uidExists($dbConn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersEmail = ? OR usersUid = ?;";
    $stmt = mysqli_stmt_init($dbConn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../01src/signup.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);

    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        mysqli_stmt_close($stmt);
        return $row;
    }else{
        mysqli_stmt_close($stmt);
        $result = false;
        return $result;
    }
}


function createUser($dbConn, $name, $email, $username, $pwd){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES(?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($dbConn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../01src/signup.php?error=stmtFailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    
    header("location: ../01src/signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd){
    $result = false;

    if(empty($username) || empty($pwd)){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function loginUser($dbConn, $username, $pwd){
    $uidExists = uidExists($dbConn, $username, $username);

    if($uidExists === false){
        header("location: ../01src/login.php?error=wrongLogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false){
        header("location: ../01src/login.php?error=wrongLogin");
        exit();
    } else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../01src/index.php");
        exit();
    }
    
}