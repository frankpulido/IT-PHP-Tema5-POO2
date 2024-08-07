<?php
class Circle implements Shape { // Shape es una INTERFACE.
    
    // Atributos
    protected $radius;
    private $name = "Círculo";

    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Getter

    public function getRadius() {
        return $this->radius;
    }

    public function getName() {
        return $this->name;
    }

    // Setter

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    // Funciones de implementación obligatoria

    public function how() {
        return "El área del " . __CLASS__ . " se calcula multiplicando el número PI (3,1416) por el cuadrado del radio (" . $this->radius . ") . Área = ";
    }

    public function area () {
        return (pow($this->radius,2) * pi());
    }
}
?>