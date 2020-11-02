<?php

class Vehiculo
{
    public $cantidadPuertas;
    public $cilindraje;
    private $cantidadRuedas;
    protected $placa;
   
    /* Método mágico usado para darle un valor a los atributos del objeto al crearlo. */
   
    public function __construct($cantidadPuertas, $cilindraje, $cantidadRuedas, $placa)
    {
        $this->cantidadPuertas =$cantidadPuertas;
        $this->cilindraje =$cilindraje;
        $this->cantidadRuedas =$cantidadRuedas;
        $this->placa =$placa;
    }

    public function mostrarInformacion()
    {
        $info = 'Hola soy un objeto creado a partir de la clase vehiculo y tengo:.<br>';
        $info.= "Cilindraje : ".$this->cilindraje.'<br>';
        $info.= "Ruedas : ".$this->cantidadRuedas.'<br>';
        $info.= "Placa Numero :".$this->placa.'<br>';
        return $info;
    }
};