
<?php
    include_once("header.php");
?>
<h3>Sign Up page</h3>

<section class="signup-form">
    
    <form action="../includes/signup.inc.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre completo...">    
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Contraseña...">
        <input type="password" name="pwdrepeat" placeholder="Repite la contraseña...">
        <button type="submit" name="submit">Sign Up</button>
    </form>

</section>

<?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyInput"){
            echo "<p>¡Rellena todos los campos!</p>";
        } else if ($_GET["error"] == "invalidUsername"){
            echo "<p>¡Elige un usuario adecuado.!</p>";
        } else if ($_GET["error"] == "invalidEmail"){
            echo "<p>¡Elige un email adecuado!</p>";
        } else if ($_GET["error"] == "pwdDontMatch"){
            echo "<p>¡Las contraseñas no coinciden!</p>";
        }else if ($_GET["error"] == "userTaken"){
            echo "<p>¡El usuario ya existe, elige otro!</p>";
        } else if ($_GET["error"] == "stmt"){
            echo "<p>¡Algo ha salido mal...!</p>";
        } else if ($_GET["error"] == "none"){
            echo "<p>¡Ya estás registrado!</p>";
        }
    }   
?>

</body>
</html>
