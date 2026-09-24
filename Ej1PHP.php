<?php
echo"<h2>Operadores Basicos </h2><br>";
$n1 = 10;
$n2 = 5;
echo "La numero 1 es: $n1 <br>";
echo "El numero 2 es: $n2 <br>";
echo "<h2>Operadores Aritmeticos</h2><br>";
$suma = $n1 + $n2; 
echo "La suma es: $suma <br>";

$resta = $n1 - $n2 ;
echo "La resta es: $resta <br>";

$multiplicacion= $n1 * $n2 ;
echo "La multiplicacion es: $multiplicacion <br>";

$division= $n1 / $n2 ;
echo "La division es: $division <br>";

$resto = $n1 % $n2;
  echo "El resto de la division es: $resto <br>";

echo"<h2>Operadores de Comparacion </h2><br>";
if($n1 > $n2){
    echo"$n1 es mayor <br>";
}elseif($n1 == $n2){
 echo"El numero $n1 es igual a $n2 <br>";
}

 echo"<h2>Operadores Logicos</h2><br>";

 if($n1 > 5 && $n2 > 5){
    echo "Los numeros $n1 y $n2 son mayores que 5 ";
 }
 if($n1 < 5 || $n2 < 5) {
    echo "Al menos uno de los dos números es menor que 5.";
 }else{
   echo"no es mayor que 5";}
 
 ?>