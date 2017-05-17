<html>
    <head>
        <title>Ejercicio 21</title>
    </head>
    <body>
        <h1>Bucle While</h1>
        <?php
        /*
        En este ejercicio se muestra el uso de la sentencia
        WHILE para PHP, para ello se utilizará una entrada
        simple mediante un formulario.
        */
        if(isset($_POST['number'])){
            $number = $_POST['number'];
            $counter = 1;
            while($counter <= $number){
                echo "$counter.- Los bucles son sencillos Papu! <br>\n";
                $counter++;
            }
            echo "<h1>Finished!</h1>";
        }
        
        ?>
    </body>
</html>