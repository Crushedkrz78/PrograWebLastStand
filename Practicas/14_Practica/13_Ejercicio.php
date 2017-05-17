<html>
    <head>
        <title>Ejercicio 13</title>
    </head>
    <body>
        <h1>Ejemplo, comparación numérica</h1>
        <p>
            <?php
            /*
            En este ejercicio se realizan comparaciones
            numéricas que serán mostradas posteriormente
            en la ventana del navegador.
            */
            $a = 3;
            $b = 4;
            $c = 5;
            
            $r1 = $a + $b;
            $r2 = $b * $c;
            
            $c1 = $a>$b;
            $c2 = $r1<$r2;
            
            echo "----------<br>";
            echo "A = $a <br>";
            echo "B = $b <br>";
            echo "C = $c <br>";
            echo "----------<br>";
            echo "A + B = $r1 <br>";
            echo "A * B = $r2 <br>";
            echo "----------<br>";
            echo "1 = True <br>";
            echo "False no muestra valor <br>";
            echo "A > B = $c1 <br>";
            echo "(A + B)<(B * C) = $c2 <br>";
            echo "----------<br>";
            ?>
        </p>
    </body>
</html>