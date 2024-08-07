<?php
require "animal.php";
require "dog.php";
require "cat.php";
require "cow.php";
/*
Frank Pulido - Tema 5 [POO2] - Nivel 1 - Ejercicio 1

ENUNCIADO :
Necesitamos crear un tipo de datos que represente a un animal. Los animales tienen un nombre, sin embargo, no es lo mismo el sonido del “habla” de un perro, que el de un gato.
Por tanto, necesitamos crear otros tipos de datos que nos ayuden a programar estos comportamientos.
Básicamente, queremos un método makeSound() que muestre un mensaje diferente si se trata de un perro (por ejemplo, “Bup, bup!”) o un gato (por ejemplo “Mi!”).
*/

$dog = new Dog ("Churrasco");
$cat = new Cat ("Misifú");
$cow = new Cow ("Dolores (but they call me \"Lola\")");

$animals = [$dog, $cat, $cow];

echo "\n\n";
echo "Estamos trabajando con una clase abstract Animal y 3 clases dependientes que heredan el atributo \"name\" y les forzamos a implementar el \nMétodo \"makeSound\" que en la clase abstract (parent) se declara, pero no se implementa.\n\n";
$dog->mySelf();
$cat->mySelf();
$cow->mySelf();


/*
INVESTIGAR que ocurre con array_walk, no entiendo el error :
echo "\n\nAprovecho también de usar la función \"array_walk\" que tenía pendiente. Nuestros animales se presentan en inglés :\n\n";
array_walk($animals, "mySelf");
*/


?>