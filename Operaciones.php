<?php

$num1 = 4;
$num2 = 7;
$suma = $num1 + $num2;
echo "La suma de $num1 y $num2 es: $suma";

$num1 = 10;
$num2 = 3;
$resta = $num1 - $num2;
echo "La resta de $num1 y $num2 es: $resta";

$num1 = 5;
$num2 = 6;
$multiplicacion = $num1 * $num2;
echo "La multiplicación de $num1 y $num2 es: $multiplicacion";

$num1 = 20;
$num2 = 4;
$division = $num1 / $num2;
echo "La división de $num1 y $num2 es: $division";

$base = 2;
$exponente = 3;
$potencia = $base ** $exponente;
echo "La potencia de $base elevado a $exponente es: $potencia";

$num1 = 15;
$num2 = 4;
$modulo = $num1 % $num2;
echo "El módulo de $num1 y $num2 es: $modulo";

$numero = 4.6;
$redondeado = round($numero);
$redondeadp_arriba = ceil($numero);
$redondeado_abajo = floor($numero);
echo "El número $numero redondeado es: $redondeado";
echo "El número $numero redondeado hacia arriba es: $redondeadp_arriba";
echo "El número $numero redondeado hacia abajo es: $redondeado_abajo";
