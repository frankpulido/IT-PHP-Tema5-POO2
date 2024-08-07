<?php
class Cow extends Animal {

    function __construct($name) {
        $this->name = $name;
    }
    
    function makeSound() {
        return "Moo!!, moo!!"; // Si usase echo makeSound abriría la oración en el echo de mySelf alterando el orden. No lo entiendo del todo.
    }

    function mySelf() {
        echo "My name is {$this->name} and I am a " . __CLASS__ . ".\nAs expected, my sound is " . $this->makeSound() . ".\n\n";
    }
}
?>