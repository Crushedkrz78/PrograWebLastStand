<html>
    <head>
        <title>Ejercicio 16</title>
    </head>
    <body>
        <h1>Otro ejemplo de la sentencia if...else</h1>
        <?php
        #En este ejemplo se utilizará la función date() de php
        $dia = date("d");
        if($dia<=10){
            echo "Sitio activo.";
        }
        else{
            echo "Sitio fuera de servicio.";
        }
        ?>
    </body>
</html>