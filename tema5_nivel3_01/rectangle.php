<?php
class Rectangle extends Shape { // Shape es una clase "abstract", así como el método "area()" definido en ella, razón por la que su implementación en clases CHILD es obligatoria.

    // Atributo adicional... El resto los hereda de la Clase Shape (parent)...
    protected $name;

    public function __construct($base, $height, $name = 'Rectángulo') {
        Shape::__construct($base, $height);
        $this->name = $name; // No necesitamos getters ni setters para este atributo
    }

    public function area() {
        echo "El área del " . $this->name . " es el producto de su base por su altura.\n";
        echo $this->base . " * " . $this->height . " = " . $this->base * $this->height;
    }
}
?>