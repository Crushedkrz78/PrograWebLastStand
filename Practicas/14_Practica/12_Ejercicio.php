<html>
    <head>
        <title>Ejercicio 12</title>
    </head>
    <body>
        <h1>Ejemplo de Operaciones lógicas en PHP</h1>
        <p>
            <?php
            /*
            Ejemplo de operaciones lógicas AND y OR
            */
            $a = 8;
            $b = 3;
            $c = 3;
            
            echo "----------------------<br>";
            echo ($a==$b)&&($c>$b), "<br>";
            echo "----------------------<br>";
            echo ($a==$b)||($c>$b), "<br>";
            echo "----------------------<br>";
            #echo !($b<=$c)b, "<br>";
            #Este ejemplo tiene un posible error
            #Por lo que fue corregido
            echo !($b<=$c), "<br>";
            echo "----------------------<br>";
            ?>
        </p>
    </body>
</html>