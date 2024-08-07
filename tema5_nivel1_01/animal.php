<?php
abstract class Animal { // PARENT de tipo abstract. Clases CHILD están obligadas a implementar la función abstract makeSound()
    protected $name;
    abstract function makeSound();
}
?>