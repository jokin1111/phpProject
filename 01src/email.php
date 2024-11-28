<?php
    include_once("header.php");
?>
<h3 style="margin-left: 10px;">Envíanos un email</h3>


    <form method="post" class="formulario" style="display: flex; justify-content: center; align-items: center;">
        <fieldset>
            <legend>Contáctanos</legend>
            <label for="nombre">Nombre: </label>
            <input type="text" name ="nombre" placeholder="nombre"> <br><br>
            <label for="email">Email: </label>
            <input type="email" name ="email" placeholder="email"> <br><br>
            <label for="asunto">Asunto: </label>
            <input type="text" name ="asunto" placeholder="asunto"> <br> <br>
            <label for="msg">Mensaje: </label> <br>
            <textarea name="msg" placeholder="mensaje"></textarea> <br> <br>
            <input type="submit" name="enviar" value="Enviar email">
        </fieldset>
    </form>
<?php
    include_once("../includes/correo.inc.php");
?>

</body>
</html>