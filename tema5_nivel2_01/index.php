<?php
require "shape.php";
require "rectangle.php";
require "triangle.php";
/*
Frank Pulido - Tema 5 [POO2] - Nivel 2 - Ejercicio 1

ENUNCIADO :
Mismo ejercicio que en POO1, pero aquí necesitamos que lo resuelvas aplicando alguno de los conceptos del tema POO2.
Escribe un programa que defina una clase Shape con un constructor que reciba como parámetros el ancho y alto.
Define dos subclases; Triángulo y Rectángulo que hereden de Shape y que calculen respectivamente el área de la forma area().

Clase padre : OJO REPASAR protected versus private, etc. La primera se usa en ejemplo de "interface" :
https://diego.com.es/modificadores-y-herencia-de-clases-en-php
https://medium.com/@london.lingo.01/exploring-the-power-of-php-object-oriented-programming-4516980fd95b
*/

echo "\n";
echo "Rubén, podríamos hablar de esta función?\nhttps://www.php.net/manual/en/language.oop5.autoload.php\nhttps://www.phptutorial.net/php-oop/php-autoloading-class-files/\n";
echo "(Dado que Triangle y Rectangle se calculan con las mismas variables lo dejo tal como el ejercicio de POO1, sin menú de usuario).\nVer ejercicio siguiente : Tema 5, Nivel 3, Ejercicio 1.\n\n";
echo "Vamos a calcular el área de 2 figuras geométricas sencillas : rectánculo y triángulo.\nPara ello necesitaremos que nos indique base y altura (usaremos los mismos valores en ambos casos).\n";
$base = (float) readline("Por favor, indíquenos la base : ");
$height = (float) readline("Por favor, indíquenos la altura : ");
$triangulo = new Triangle ($base, $height);
$rectangulo = new Rectangle ($base, $height);
echo "\n";
$triangulo->area();
echo "\n";
$rectangulo->area();
echo "\n";
echo "Si la base y la altura miden igual, el área del triángulo será siempre la mitad que la del rectángulo, independientemente de que el triángulo tenga o no un ángulo recto.\n";
echo "Dibuja el triángulo en el interior del rectángulo y sombrea su área... Lo ves?...(Pista : Divide el rectángulo en 2 partes en el punto donde intersecta el vertice no común del triángulo).\n\n";
?>