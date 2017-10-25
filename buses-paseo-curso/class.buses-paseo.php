<?php
class BusPaseo
{
    private $capacidad = 50;
    private $asientosDisponibles = 49;
    private $pasajeros = array();
    private $pasajerosBordo = count($pasajeros); //suma resta
    
    /*=========================*/
    function __construct($pasajeros[]){
        $this -> pasajeros = $pasajeros[];
    }
    /*-------------------------*/
    public function getCapacidad(){
        return $this -> capacidad;
    }
    public function setCapacidad($capacidad){
        $this -> capacidad = $capacidad;
    }
    /*-------------------------*/
    public function getAsientosDisponibles(){
        return $this -> asientosDisponibles;
    }
    public function setAsientosDisponibles($asientos){
        $this -> asientosDisponibles = $asientos;
    }
    /*-------------------------*/
    public function getPasajeros(){
        return $this -> pasajeros;
    }
    public function setPasajeros($pasajeros[]){
        $this -> pasajeros = $pasajeros[];
    }
    /*-------------------------*/
    public function getPasajerosBordo(){
        return $this -> pasajerosBordo;
    } 
}
?>