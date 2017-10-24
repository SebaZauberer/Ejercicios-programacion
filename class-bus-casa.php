<?php

class Bus
{
    $puerta = "";
    
    function getPuerta()
    {
        return $this->$puerta;
    }
    function setPuerta($valor_Puerta)
    {
        $this->$puerta = $valor_Puerta;
    }
    
    $asientos = "";
    
    function getAsientos()
    {
        return $this->$asientos;
    }
    function setAsientos($valor_asientos)
    {
        $this->$asientos = $valor_asientos;
    }
    
    $ventanas = "";
    
    function getVentanas()
    {
        return $this->$ventanas;
    }
    function setVentanas($valor_ventanas)
    {
        $this->$ventanas = $valor_ventanas;
    }
    
    $ruedas = "";
    
    function getRuedas()
    {
        return $this->$ruedas;
    }
    function setRuedas($valor_ruedas)
    {
        $this->$ruedas = $valor_ruedas;
    }
    
    $motor = "";
    
    function getMotor()
    {
        return $this->$motor;
    }
    function setMotor($valor_motor)
    {
        $this->$motor = $valor_motor;
    }
}


class Casa
{
    $habitaciones = "";
    
    function getHabitaciones()
    {
        return $this->$habitaciones;
    }
    function setHabitaciones($valor_habitaciones)
    {
        $this->$habitaciones = $valor_habitaciones;
    }
    
    $ventanas = "";
    
    function getVentanas()
    {
        return $this->$ventanas;
    }
    function setVentanas($valor_ventanas)
    {
        $this->$ventanas = $valor_ventanas;
    }
    
    $puertas = "";
    
    function getPuertas()
    {
        return $this->$puertas;
    }
    function setPuertas($valor_puertas)
    {
        $this->$puertas = $valor_puertas;
    }
    
    $techo = "";
    
    function getTecho()
    {
        return $this->$techo;
    }
    function setTecho($valor_techo)
    {
        $this->$techo = $valor_techo;
    }
    
    $caneria = "";
    
    function getCaneria()
    {
        return $this->$caneria;
    }
    function setCaneria($valor_caneria)
    {
        $this->$caneria = $valor_caneria;
    }
}


?>