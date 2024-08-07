<?php
class Circle extends Shape { // Shape es una clase "abstract", así como el método "area()" definido en ella, razón por la que su implementación en clases CHILD es obligatoria.
    
    // Atributos adicionales... El resto los hereda de la Clase Shape (parent)...
    protected $name = "Circle";
    protected $radius;

    public function __construct($radius, $name = 'Circle') { // No usamos $base ni tampoco $height. Crearemos métodos setter y getter para el atributo $radius
        $this->name = $name; // No necesitamos getters ni setters para este atributo
        $this->radius = $radius;
    }

    // Getter

    public function getRadius() {
        return $this->radius;
    }

    // Setter

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function area () {
        echo "El área del " . $this->name . " es el producto del número PI por el cuadrado del radio.\n";
        echo "PI (3,1416) * " . $this->radius . "^2 = " . (pow($this->radius,2) * pi());
    }
}
?>