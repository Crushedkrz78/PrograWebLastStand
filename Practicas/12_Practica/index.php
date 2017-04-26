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
2.- Haga (M=M+10) y (A=A-1), vaya al paso 4.
3.- Haga (M=M-2).
4.- Haga (C=A/100) y (E=A%100).
5.- Haga (B=(13M-1)/5)+(E/4)+(C/4).
6.- Haga (F=(B+E+D-2C)%7).

Donde todas las divisiones son enteras, mod (%) es el residuo de la 
división y F=0 significa "Domingo"m F=1 significa "Lunes" y así sucesivamente.
Dada una fecha, deberás determinar qué día de la semana due el día
anterior (F!), el día de la fecha (F2) y el día siguiente(F3).
*/


?>