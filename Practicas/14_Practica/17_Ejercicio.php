<html>
    <head>
        <title>Ejercicio 17</title>
    </head>
    <body>
        <h1>Ejemplo de la condicional Switch</h1>
        <?php
        #Declaración de una variable con un valor de muestra
        $posicion = "arriba";
        echo "La variable posición es <b>$posicion</b> <br>";
        
        #Definición de la sentencia switch
        switch($posicion){
            case "arriba": #Primera condición
                echo "La variable contiene el valor de <b>arriba</b>";
                break;
                
            case "abajo": #Segunda condición
                echo "La variable contiene el valor de <b>abajo</b>";
                break;
                
            default: #Si no se cumple ninguna condición
                echo "La variable contiene un valor distinto de arriba y abajo";
        }
        ?>
    </body>
</html>