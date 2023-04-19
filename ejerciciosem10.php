<?php

interface Identificacion{
    #public function persona();
    #public function vehiculo();
}

class persona implements Identificacion{
    private $dni;
    private $nombre;
    private $pape;

    public function setDNI(string $dni): void{
        $this->dni = $dni;
    }  

    public function setNombre(string $nombre): void{
        $this->nombre = $nombre;
    } 

    public function setPape(string $pape): void{
        $this->pape = $pape;
    } 

}

class 