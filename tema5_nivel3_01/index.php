<?php
require "shape.php";
require "rectangle.php";
require "triangle.php";
require "circle.php";

/*
Frank Pulido - Tema 5 [POO2] - Nivel 3 - Ejercicio 1

ENUNCIADO :
Mismo ejercicio que en POO1, pero aquí necesitamos que lo resuelvas aplicando alguno de los conceptos del tema POO2.
Escribe un programa que defina una clase Shape con un constructor que reciba como parámetros el ancho y alto.
Define dos subclases; Triángulo y Rectángulo que hereden de Shape y que calculen respectivamente el área de la forma area().

Clase padre : OJO protected versus private, etc, no lo tengo 100% claro. La primera se usa en ejemplo de "interface" :
https://diego.com.es/modificadores-y-herencia-de-clases-en-php
https://medium.com/@london.lingo.01/exploring-the-power-of-php-object-oriented-programming-4516980fd95b
*/

$opcion = -1;
$base = 0;
$height = 0;
$radius = 0;
echo "\n";
echo "Esta aplicación sirve para calcular el área de 3 figuras geométricas sencillas : rectángulo, triángulo y círculo.\n";
echo "RECORDATORIO clase anterior :\n";
echo "- Si la base y la altura miden igual, el área del triángulo será siempre la mitad que la del rectángulo, independientemente de que el triángulo tenga o no un ángulo recto.\n";
echo "- Dibuja el triángulo en el interior del rectángulo y sombrea su área... Lo ves?...(Pista : Divide el rectángulo en 2 partes en el punto donde intersecta el vertice no común del triángulo).\n\n";

do {
    echo "\nEscoge la figura cuya área desees calcular :\n[1] Triángulo.\n[2] Rectángulo.\n[3] Círculo.\n[0] Salir del programa.\n";
    $opcion = readline();
    echo "\n";
    if ($opcion == 1) {
        $base = (float) readline("Por favor, indíquenos la base : ");
        $height = (float) readline("Por favor, indíquenos la altura : ");
        $triangulo = new Triangle ($base, $height);
        $triangulo->area();
        echo "\n";
    } elseif ($opcion == 2) {
        $base = (float) readline("Por favor, indíquenos la base : ");
        $height = (float) readline("Por favor, indíquenos la altura : ");
        $rectangulo = new Rectangle ($base, $height);
        $rectangulo->area();
        echo "\n";
    } elseif ($opcion == 3) {
        $radius = (float) readline("Por favor, indíquenos el radio del círculo : ");
        $circle = new Circle ($radius);
        $circle->area();
        echo "\n";
    } elseif ($opcion == 0) {
        echo "Esperamos que le haya gustado la aplicación. Cerramos sesión de usuario.\n***IMPORTANTE*** Próximamente desarrollaremos una aplicación para calcular el área de polígonos de lados iguales por lo que pueden ser inscritos en una circunferencia intersectada por sus vértices.";
        echo "\n";
    } else {
        echo "Debe seleccionar una opción válida : 1 al 3. Para salir de la aplicación : 0.";
        echo "\n";
    }
} while ($opcion != 0);

?>

