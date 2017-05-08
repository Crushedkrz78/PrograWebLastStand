<?php
#PHP programing practice

/*
Algorithm description:

Día de la semana

uno de los principales problemas que se tiene que resolver al escribir
un programa que trabaje con fechas es el de decir qué día de la semana
corresponde con una cierta fecha dada. Por ejemplo,
el 23 de Mayo de 2005 es Lunes, el día anterior Domingo y el siguiente
Martes.
Dada una fecha como tres números enteros A, M y D (Donde A=Año,
M=Mes y D=Día), el día de la semana se puede encontrar con el siguiente
algoritmo.

1.- Si (M>2), Entonces ve al paso 3.
2.- Haga (M=M+10) y (A=A-1), vaya al paso 4;
3.- Haga (M=M-2);
4.- Haga (C=A/100) y (E=A%100);
5.- Haga B=((13M-1)/5)+(E/4)+(C/4);
6.- Haga F=(B+E+D-2C)%7;

Donde todas las divisiones son enteras, mod (%) es el residuo de la 
división y F=0 significa "Domingo"m F=1 significa "Lunes" y así sucesivamente.
Dada una fecha, deberás determinar qué día de la semana due el día
anterior (F!), el día de la fecha (F2) y el día siguiente(F3).
*/
/*
Quick reference for week days:
0 - Sunday
1 - Monday
2 - Tuesday
3 - Wednesday
4 - Thursday
5 - Friday
6 - Saturday
*/
function CalcDay($a, $m, $d){
    $b=0;
    $c=0;
    $e=0;
    $f=0;
    
    if($m>2){#Step1
        $m=$m-2; #Step3
    }
    else{
        $m=$m+10;#Setp2
        $a=$a-1;#Setp2
    }
    $c=$a/100;#Setp4
    $e=$a%100;#Setp4
    
    $b=(((($m*13)-1)/5)+($e/4)+($c/4));#Step5
    $f=($b+$e+$d-($c*2))%7;#Step6
    
    $msg="Hola Papu, el dia de la semana es: $f";
    #echo $msg;
    
    
    
    echo $f;
}

CalcDay(2005,5,20);
#echo "<br/>";
CalcDay(2017,4,26);
?>