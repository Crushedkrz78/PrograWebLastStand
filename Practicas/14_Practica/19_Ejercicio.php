<html>
    <head>
        <title>Ejercicio 19</title>
    </head>
    <body>
        <h1>Tabla condicional 2</h1>
        <?php
        /*
        Se crea una tabla condicional de valores seno y coseno
        de 0 a 2 en incrementos de 0.1.
        Los valores negativos se mostrarán en color rojo
        y los valores positivos se mostrarán en color azul.
        */
        
        /*
        Este ejercicio es una variación del ejercicio 18,
        en este caso se imprimirá cada fila de color diferente.
        */
        
        function muestra($valor,$renglon){
            if($renglon % 2)
                $fondo = "#eeeeee";
            else
                $fondo = "#dddddd";
            
            if($valor < 0.5)
                $color = "red";
            else
                $color = "blue";
            
            echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n";
        }
        ?>
        <table border="1">
            <?php
            $renglon = 0;
            for($x=0; $x<=2; $x+=0.01, $renglon++){
                echo "<tr>";
                muestra($x,$renglon);
                muestra(sin($x),$renglon);
                muestra(cos($x),$renglon);
                echo "</tr>";
            }
            /*
            En este ejercicio es importante mencionar que
            el script original cuenta con algunos errores que
            impiden su ejecución correctamente, por lo que+las correciones realizadas incluyen la modificación
            de la declaración de la función para que reciba 
            dos parámetros, y una ligera modificación en el
            ciclo, para que incremente la variable $renglon
            que nos sirve de indicador para saber sobre que
            renglon se está trabajando y determinar si es
            par o impar y así definirle un color a dicho renglón
            */
            ?>
        </table>
    </body>
</html>