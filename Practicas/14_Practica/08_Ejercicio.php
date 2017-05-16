<html>
    <head>
        <title>Ejercicio 8</title>
    </head>
    <body>
        <h1>Introducción a los Arrays, método largo</h1>
        <p>A continuación escribiremos los arrays de acuerdo al método largo.
        </p>
        <p>
            <?php
            /*
            Nota:
            Aunque los arrays se ven más adelante de acuerdo al temario,
            en el cuaderno de trabajo vienen antes y no son difíciles de asimilar.
            Queda a discresión ponerlos en orden o hacerlos después del ejercicio 21, que trata sobre ciclos,
            y está antes de comenzar con los formularios.
            */
            
            /*
            Éste es el método largo para la creación de arrays,
            donde cada uno de los arreglos está en una línea diferente,
            junto con su valor de índice correspondiente.
            */
            $dia[0] = "Domingo";
            $dia[1] = "Lunes";
            $dia[2] = "Martes";
            $dia[3] = "Miércoles";
            $dia[4] = "Jueves";
            $dia[5] = "Viernes";
            $dia[6] = "Sábado";
            
            #Mostrar día miércoles
            echo "El día de hoy es: <b>$dia[3]</b>";
            ?>
        </p>
    </body>
</html>