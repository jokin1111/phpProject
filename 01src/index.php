<?php
    include_once("header.php");
?>
    <h3 style="margin-left: 10px;">Index page</h3>

    <section>
        
        <?php
            if(isset($_SESSION["useruid"])){
                echo"<p style='margin-left: 10px;'>¡Bienvenido a este TO-DO LIST ". $_SESSION["useruid"] ."!</p>";
            }
        ?>

        <h1 class="todoTittle">TO-DO LIST</h1>
        
    </section>

    <div class="container">

        <!-- Barra de botones -->
        <div class="button-bar">
            <button id = "crearTarea">CREAR TAREA</button>
            <button id = "empezarTarea">EMPEZAR</button>
            <button id = "finalizarTarea">FINALIZAR</button>
            <button id = "repetirTarea">REPETIR</button>
        </div>

        <!-- Contenedor de columnas -->
        <div class="columns">
            <div class="column">
                <h3>Columna 1</h3>
                <ul>
                    <li>Tarea 1</li>
                    <li>Tarea 2</li>
                    <li>Tarea 3</li>
                </ul>
            </div>
            <div class="column">
                <h3>Columna 2</h3>
                <ul>
                    <li>Tarea 4</li>
                    <li>Tarea 5</li>
                    <li>Tarea 6</li>
                </ul>
            </div>
            <div class="column">
                <h3>Columna 3</h3>
                <ul>
                    <li>Tarea 7</li>
                    <li>Tarea 8</li>
                    <li>Tarea 9</li>
                </ul>
            </div>
        </div>
        
    </div>
    <script src = "../js/script.js" ></script>
</body>
</html>