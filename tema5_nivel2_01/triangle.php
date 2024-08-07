<?php
class Triangle extends Shape { // Al ser Shape una clase "abstract", el método "area" es obligatorio

    // Atributo adicional... El resto los hereda de la Clase Shape (parent)...
    protected $name = "Triángulo";

    public function __construct($base, $height, $name = 'Triángulo') {
        Shape::__construct($base, $height);
        $this->name = $name;
    }

    public function area () {
        echo "El área del " . $this->name . " es el producto de su base por su altura dividido entre 2.\n";
        echo $this->base . " * " . $this->height . " / 2 = " . ($this->base * $this->height) / 2;
    }
}
?>