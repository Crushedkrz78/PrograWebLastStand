<html>
    <head>
        <title>Ejercicio 14</title>
    </head>
    <body>
        <h1>Cálculos, redonde y formato.</h1>
        <p>
            <?php
            #Declaración devariables
            $precioNeto = 101.98;
            $iva = 0.196;
            #Obtención de resultado
            $resultado = $precioNeto * $iva;
            
            echo "El precio es de <b>$precioNeto</b> ";
            echo "y IVA es de <b>$iva %</b> <br>";
            echo "Resultado: ";
            echo "<b>".round($resultado, 2)."</b>";
            echo " con la función round() <br>";
            echo "Resultado normal: <b>$resultado</b> \n";
            echo "<br><br>";
            $resultado2 = sprintf("%01.2f",$resultado);
            echo "Usando la función sprintf() se ve así: <b>$resultado2</b>";
            ?>
        </p>
    </body>
</html>