<html>
    <head>
        <title>Ejercicio 20</title>
    </head>
    <body>
        <h1>Tabla condicional 3</h1>
        <?php
        /*
        Se crea una tabla condicional de valores seno y coseno
        de 0 a 2 en incrementos de 0.1.
        Los valores negativos se mostrarán en color rojo
        y los valores positivos se mostrarán en color azul.
        */
        
        /*
        Esta es una variación del ejercicio 19, la diferencia
        está en que se usará una variable global, es decir, fuera
        de la función donde se vaya a utilizar, esto nos
        permite además el poder usar este valor
        desde cualquier función o parte del script.
        */
        
        function muestra($valor){
            global $nrenglon;
            
            if($nrenglon % 2)
                $fondo = "#ffff00";
            else
                $fondo = "#ffffff";
            
            if($valor < 0.5)
                $color = "red";
            else
                $color = "blue";
            
            echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n";
        }
        ?>
        <table border = "1">
            <?php
            $nrenglon = 0;
            for($x=0; $x<=2; $x+=0.05, $nrenglon++){
                echo "<tr>";
                muestra($x);
                muestra(sin($x));
                muestra(cos($x));
                echo "</tr>";
            }
            /*
            Este ejercicio tiene un ligero error, para 
            corregirlo es necesario incrementar el valor
            de la variable $nrenglon conforme se van
            imprimiendo los valores en la tabla, para ello,
            se añade el incremento de la variable en el ciclo
            for.
            */
            ?>
        </table>
    </body>
</html>