<html>
    <head>
        <title>Ejercicio 22</title>
    </head>
    <body>
        <h1>Bucle While 2</h1>
        <form action = "22_Ejercicio.php" method = "post">
            ¿Cuántas repeticiones?
            <input type="text" name="number">
            <input type="submit" value="Enviar">
        </form>
        
        <p>
            <?php
            /*
            En este ejercicio se muestra el uso de la sentencia
            while y comenenzamos a usar la entrada de teclado
            mediante un formulario simple.
            */
            if(isset($_POST['number'])){
                $number = $_POST['number'];
                $counter = 1;
                
                while($counter <= $number){
                    echo "<b>$counter</b>.- Los bucles son fáciles! <br>\n";
                    $counter++;
                }
                echo "<h1>Finished!</h1>";
            }
            ?>
        </p>
    </body>
</html>