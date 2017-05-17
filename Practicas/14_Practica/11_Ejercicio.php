<html>
    <head>
        <title>Ejercicio 11</title>
    </head>
    <body>
        <h1>Ejemplo de operaciones de comparación en PHP</h1>
        <p>
            <?php
            /*
            Sobre el mismo punto de operaciones, pero ahora de
            comparación con variables numéricas y observar
            el resultado en tiempo de ejecución.
            */
            $a = 8;
            $b = 3;
            $c = 3;
            
            echo "---------------<br>";
            echo $a == $b, "<br>"; #False
            echo "---------------<br>";
            echo $a != $b, "<br>"; #True
            echo "---------------<br>";
            echo $a < $b, "<br>"; #False
            echo "---------------<br>";
            echo $a > $b, "<br>"; #True
            echo "---------------<br>";
            echo $a >= $c, "<br>"; #True
            echo "---------------<br>";
            echo $a <= $b, "<br>"; #False
            echo "---------------<br>";
            ?>
        </p>
    </body>
</html>