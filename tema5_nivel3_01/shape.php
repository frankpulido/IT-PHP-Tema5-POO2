<?php
abstract class Shape { // Obligaré a los CHILD a usar la función area(). Para poder declarar métodos abstract la Clase debe ser abstract.
    protected $base;
    protected $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    // Getters

    public function getBase() {
        return $this->base;
    }

    public function getHeight() {
        return $this->height;
    }

    // Setters

    public function setBase($base) {
        $this->base = $base;
    }

    public function setHeight($height) {
        $this->height = $height;
    }


    // Función área tipo abstract

    abstract function area(); // El método abstract únicamente se declara. Se desarrollara en sus CHILD (implementación obligatoria)

}
?>