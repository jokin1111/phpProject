<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPproyect</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <nav class="navbar">
        <div class="wrapper">
            
            <div class="icono">
                <img src="../css/file-list-rate-2-svgrepo-com.png" alt="Icono" class="icono">
            </div>
            
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutUs.php">About Us</a></li>
                <li><a href="blog.php">Blog</a></li>
                <?php
                    if(isset($_SESSION["useruid"])){
                        echo"<li><a href='profile.php'>Profile page</a></li>";
                        echo"<li><a href='../includes/logout.inc.php'>Log out</a></li>";
                    }else {
                        echo"<li><a href='login.php'>Log-In</a></li>";
                        echo"<li><a href='signup.php'>Sign-Up</a></li>";
                    }
                ?>
            </ul>
            
        </div>
    </nav>