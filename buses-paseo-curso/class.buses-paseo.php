<?php
class BusPaseo
{
    private $capacidad = 50;
    private $asientosDisponibles = 50;
    private $pasajerosBordo = 0; //suma resta
    private $pasajeros = array();
    
    /*=========================*/
    function __construct($pasajeros, $aBordo){
        $this -> pasajeros = $pasajeros;
        $this -> setPasajerosBordo(true,$aBordo);
        $this -> setAsientosDisponibles($this->asientosDisponibles-count($this->pasajeros));
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
    public function setPasajeros($pasajeros){
        $this -> pasajeros = $pasajeros;
    }
    /*-------------------------*/
    public function getPasajerosBordo(){
        return $this -> pasajerosBordo;
    }
    public function setPasajerosBordo($aBordo,$cantidad){
        if($aBordo === true){
            return $this -> pasajerosBordo = $this -> pasajerosBordo+$cantidad;
        } elseif($aBordo === false){
            return $this -> pasajerosBordo = $this -> pasajerosBordo-$cantidad;
        } else{
            echo 'El primer parametro solo recive "true" o "false"';
        }
    }
}
?>