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

RECURSOS :
https://mohasin-dev.medium.com/polymorphism-in-php-with-example-83de1792c89d

Clase padre : OJO protected versus private, etc, no lo tengo 100% claro. La primera se usa en ejemplo de "interface" :
https://diego.com.es/modificadores-y-herencia-de-clases-en-php
https://medium.com/@london.lingo.01/exploring-the-power-of-php-object-oriented-programming-4516980fd95b
*/

$opcion = -1;
$base = 0;
$height = 0;
$radius = 0;
$shapes = [];

echo "\n";
echo "Esta aplicación sirve para calcular el área de 3 figuras geométricas sencillas : rectángulo, triángulo y círculo.\n";
echo "RECORDATORIO clase anterior :\n";
echo "- Si la base y la altura miden igual, el área del triángulo será siempre la mitad que la del rectángulo, independientemente de que el triángulo tenga o no un ángulo recto.\n";
echo "- Dibuja el triángulo en el interior del rectángulo y sombrea su área... Lo ves?...(Pista : Divide el rectángulo en 2 partes en el punto donde intersecta el vertice no común del triángulo).\n\n";

echo "\nHagámoslo más interesante esta vez : almacenemos todos los objetos en un Array y calculemos luego las áreas. Hemos cambiado la relación de herencia (child extends parent) por una interface (implements).\n";

do {
    echo "Deberás indicarnos los parámetros de TODAS las figuras cuya área desees calcular y pulsar \"0\" cuando desees ver los resultados por pantalla :\n[1] Triángulo.\n[2] Rectángulo.\n[3] Círculo.\n[0] Salir (y ver resultados).\n";
    $opcion = readline();
    echo "\n";
    switch ($opcion) {
        case 1 :
            $base = (float) readline("Por favor, indíquenos la base : ");
            $height = (float) readline("Por favor, indíquenos la altura : ");
            $shape = new Triangle ($base, $height);
            echo "\n";
            break;
        case 2 :
            $base = (float) readline("Por favor, indíquenos la base : ");
            $height = (float) readline("Por favor, indíquenos la altura : ");
            $shape = new Rectangle ($base, $height);
            echo "\n";
            break;
        case 3 :
            $radius = (float) readline("Por favor, indíquenos el radio del círculo : ");
            $shape = new Circle ($radius);
            echo "\n";
            break;
        case 0 :
            echo "Muy bien, calculemos ahora las áreas de las figuras geométricas que nos ha indicado :\n";
            echo "\n";
            break;
        default :
            echo "Debe seleccionar una opción válida : 1 al 3. Para salir de la aplicación : 0.";
            echo "\n";
    }

    if ($opcion != 0) {
        $shapes[] = $shape;
    }

} while ($opcion != 0);

if (count($shapes) > 0) {
    foreach($shapes as $shape) {
        echo $shape->getName() . " : " . $shape->how();
        echo $shape->area();
        echo "\n\n";
    }
} else {
    echo "No ha indicado ninguna nueva forma geométrica...";
}

echo "\nEsperamos que le haya gustado la aplicación. Cerramos sesión de usuario.\n***IMPORTANTE*** Próximamente desarrollaremos una aplicación para calcular el área de polígonos de lados iguales por lo que pueden ser inscritos en una circunferencia intersectada por sus vértices.\n\n";


?>

