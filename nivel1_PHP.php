//Ejercicio 1
<?php
$personas = 10;
$salary = 1.1;
$nameUser = "Andrea";
$workshops = false;

$performance = ($workshops = 0) ? "no":"si";

echo "Trabaja con nosotros ".$nameUser," tiene un sueldo de ".$salary, " es parte de nuestro equipo de " .$personas,
" ella ha realizado talleres ".$performance;
 ?>
//Ejercicio 2
<?php
$saludos = "hello word!";
$curso = "Aquest és el curs de PHP";
echo strtoupper($saludos),"  ", strlen ($saludos),"  ", strrev ($saludos),"  ", ($saludos.$curso);
 ?>
//Ejercicio 3
<?php
define("ANDREA");
echo "<h1>ANDREA</h1>";
 ?>
//Ejercicio 4
<?php
$x= 1;
$y= 2;
$n= 1.1;
$m= 2.2;
echo "Las varibles son: ".$x," y ". $y, " ", ", el resultado de la suma es ".($x+$y)
, " ", ", el resultado de la resta es ".($x-$y), " ", ", el resultado del producto es ".($x*$y)
, " ", ", el resultado del módulo es ".($x-$y), ". Las siguientes varibles son: ".$n," y ". $m, " ", ", el resultado de la suma es ".($n+$m)
, " ", ", el resultado de la resta es ".($n-$m), " ", ", el resultado del producto es ".($n*$m)
, " ", ", el resultado del módulo es ".($n-$m), ". El valor del doble de cada variable: ".($x*2)," , ".($y*2)," , ".($n*2)," , ".($m*2),
". El resultado de la suma de todas las variables: ".($x+$y+$n+$m), ", el resultado del producto de todas las variables: "
.($x*$y*$n*$m);
 ?>
//Ejercicio 5
<?php

  $personas = array (1,2,3,4,5);
  $coches = array (6,7,8);
  $coches[]=9;
  print_r($coches);
  $sum = array_merge($personas, $coches);
  $sumtotal = array_sum($sum);
  print_r($sum);
  print_r($sumtotal);
 ?>