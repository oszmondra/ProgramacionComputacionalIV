<?php
// Definimos la interfaz Food
interface Food {
    // Declaramos los métodos que cualquier clase que implemente esta interfaz debe implementar
    public function setType(string $type): void;
    public function calculatePrice(): float;
}

// Definimos la clase Pizza, que implementa la interfaz Food
class Pizza implements Food {
    // Declaramos dos propiedades privadas
    private $size;
    private $type;

    // Definimos el método setSize, que asigna el valor del parámetro $size a la propiedad $size
    public function setSize(string $size): void {
        $this->size = $size;
    }

    // Definimos el método setType, que asigna el valor del parámetro $type a la propiedad $type
    public function setType(string $type): void {
        $this->type = $type;
    }

    // Definimos el método calculatePrice, que devuelve un valor fijo de 10.99
    public function calculatePrice(): float {
        return 10.99;
    }
}

// Definimos la clase Lasagne, que también implementa la interfaz Food
class Lasagne implements Food {
    // Declaramos una propiedad privada
    private $type;

    // Definimos el método setType, que asigna el valor del parámetro $type a la propiedad $type
    public function setType(string $type): void {
        $this->type = $type;
    }

    // Definimos el método calculatePrice, que devuelve un valor fijo de 15.99
    public function calculatePrice(): float {
        return 15.99;
    }
}

$pizza = new Pizza();
$pizza->setSize('large');
$pizza->setType('pepperoni');

// Imprimimos el resultado del método calculatePrice del objeto Pizza
echo 'El precio de la pizza es: $' . $pizza->calculatePrice() . '<br>';

// Creamos un objeto Lasagne y le asignamos un tipo
$lasagne = new Lasagne();
$lasagne->setType('meat');

// Imprimimos el resultado del método calculatePrice del objeto Lasagne
echo 'El precio de la lasagne es: $' . $lasagne->calculatePrice();