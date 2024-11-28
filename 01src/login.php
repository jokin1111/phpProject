

<?php
    include_once("header.php");
?>

<section class="login-form">
    <h4>Log In</h4>    
    <form action="../includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Usuario/Mail">    
        <input type="password" name="pwd" placeholder="Contraseña">
        <button type="submit" name="submit">Log In</button>
    </form>
</section>

<?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyInput"){
            echo "<p>¡Rellena todos los campos!</p>";
        } else if ($_GET["error"] == "wrongLogin"){
            echo "<p>¡Login incorrecto!</p>";
        }
    }   
?>
</body>
</html>