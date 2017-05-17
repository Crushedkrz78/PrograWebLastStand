<html>
    <head>
        <title>Ejercicio 18</title>
    </head>
    <body>
        <h1>Tabla condicional</h1>
        <?php
        /*
        Crearemos una tabla de valores de seno y coseno de
        0 a 2 en incrementos de 0.01.
        Los valores negativos que resulten se mostrarán
        en rojo y los valores positivos en azul.
        */
        
        /*
        Primero que nada se creará una función con las 
        condicionales, la sentencia FUNCTION en PHP nos
        permitirá crear funciones que serán llamadas
        cuando sea necesario.
        */
        
        function muestra($valor){
            if($valor < 0.5){
                $color = "red";
            }
            else{
                $color = "blue";
            }
            echo "<td><font color='$color'>$valor</font></td>\n";
        }
        ?>
        <table border="1">
            <?php
            for($x=0; $x<=2; $x+=0.01){
                echo "<tr>";
                muestra($x);
                muestra(sin($x));
                muestra(cos($x));
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>