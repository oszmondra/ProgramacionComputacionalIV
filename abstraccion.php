<?php
class Mascota {
    private $nombre;
    private $edad;
    private $tipo;

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }
}


class Libro {
    private $titulo;
    private $autor;
    private $isbn;

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    public function getIsbn() {
        return $this->isbn;
    }
}


$mascota = new Mascota();
$mascota->setNombre("Fido");
$mascota->setEdad(5);
$mascota->setTipo("Perro");

echo "Nombre: " . $mascota->getNombre() . "<br>";
echo "Edad: " . $mascota->getEdad() . "<br>";
echo "Tipo: " . $mascota->getTipo() . "<br>";

$libro = new Libro();
$libro->setTitulo("La Isla del Tesoro");
$libro->setAutor("Robert Louis Stevenson");
$libro->setIsbn("978-84-670-3379-6");

echo "Titulo: " . $libro->getTitulo() . "<br>";
echo "Autor: " . $libro->getAutor() . "<br>";
echo "ISBN: " . $libro->getIsbn() . "<br>";
