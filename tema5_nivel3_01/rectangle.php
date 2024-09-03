<?php
class Rectangle implements Shape { // Shape es una INTERFACE.
    
    // Atributos
    protected $base;
    protected $height;
    private $name = "Rectángulo";

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

    // Métodos de implementación obligatoria (implements Shape)

    public function how() { // Nos describirá de qué forma se calcula el área de esta forma geométrica
        return "El área del " . __CLASS__ . " se calcula multiplicando la base (" . $this->base . ") por la altura (" . $this->height . "). Área = ";
    }
    public function area() { // Efectúa el cálculo del área tal como lo describe how()
        return ($this->base * $this->height);
    }
}
?>