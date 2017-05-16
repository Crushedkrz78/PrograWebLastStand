<html>
    <head>
        <title>Ejercicio 10</title>
    </head>
    <body>
        <h1>Ejemplo de operaciones aritméticasen PHP.</h1>
        <?php
        /*
        Uno de los temas es cómo se realizan las operaciones
        en php, en este ejemplo se ven cadenas y números y
        cómo se hacen las operaciones básicas, así como
        los incrementos y decrementos a las variables.
        También se oobserva cómo se crea una variable en PHP.
        */
        
        #Declaración de variables
        $a = 8;
        $b = 3;
        echo "Variable A = <b>$a</b><br>";
        echo "Variable B = <b>$b</b><br>";
        
        echo "---------------------------- <br>";
        #Operaciones aritméticas básicas
        echo "Suma: ";
        echo $a + $b,"<br>";
        echo "Resta: ";
        echo $a - $b, "<br>";
        echo "Multiplicación: ";
        echo $a * $b, "<br>";
        echo "División: ";
        echo $a / $b, "<br>";
        
        echo "---------------------------- <br>";
        #Incremento y decremento de variables numéricas
        echo "Incremento: ";
        $a++;
        echo $a,"<br>";
        echo "Decremento: ";
        $b--;
        echo $b,"<br>";
        ?>
    </body>
</html>