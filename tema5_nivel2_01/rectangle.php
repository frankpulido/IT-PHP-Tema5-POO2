<?php
class Rectangle extends Shape { // Al ser Shape una clase "abstract", el método "area" es obligatorio

    // Atributo adicional... El resto los hereda de la Clase Shape (parent)...
    protected $name;

    public function __construct($base, $height, $name = 'Rectángulo') {
        Shape::__construct($base, $height);
        $this->name = $name;
    }

    public function area() {
        echo "El área del " . $this->name . " es el producto de su base por su altura.\n";
        echo $this->base . " * " . $this->height . " = " . $this->base * $this->height;
    }
}
?>