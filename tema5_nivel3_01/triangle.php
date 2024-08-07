<?php
class Triangle implements Shape { // Shape es una INTERFACE.

    // Atributos
    protected $base;
    protected $height;
    private $name = "Triángulo";

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

    public function getName() {
        return $this->name;
    }

    // Setters

    public function setBase($base) {
        $this->base = $base;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    // Funciones de implementación obligatoria

    public function how() {
        return "El área del " . __CLASS__ . " se calcula multiplicando la base (" . $this->base . ") por la altura (" . $this->height . ") y dividiendo el resultado por 2. Área = ";
    }
    public function area () {
        return ($this->base * $this->height) / 2;
    }
}
?>