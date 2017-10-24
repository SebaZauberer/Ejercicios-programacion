<?php

class Persona
{
    private $id = 0;
    private $nombre = "";
    private $apellido1 = "";
    private $apellido2 = "";
    private $edad = 0;
    private $tipo = "";
    
    function __construct($id = 0, $nombre = "", $ap1 = "", $ap2 = "", $edad = 0, $tpo = "")
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido1 = $ap1;
        $this->apellido2 = $ap2;
        $this->edad = $edad;
        $this->tipo = $tpo;
    }
    
    /*=====================================*/
    
    public function getId()
    {
        return $this->id;
    }
    /*--------------------------------*/
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    /*--------------------------------*/
    public function getApellido1()
    {
        return $this->apellido1;
    }
    public function setApellido1($ap1)
    {
        $this->apellido1 = $ap1;
    }
    /*--------------------------------*/
    public function getApellido2()
    {
        return $this->apellido2;
    }
    public function setApellido2($ap2)
    {
        $this->apellido2 = $ap2;
    }
    /*--------------------------------*/
    public function getEdad()
    {
        return $this->edad;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
    /*--------------------------------*/
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tpo)
    {
        $this->tipo = $tpo;
    }
}

class Alumno extends Persona
{
    public function __construct($id = 0, $nombre = "", $ap1 = "", $ap2 = "", $edad = 0, $tpo = "alumno")
    {
        parent::__construct($id, $nombre, $ap1, $ap2, $edad, $tpo);
        
    }
}

class Profesor extends Persona
{
    public function __construct($id = 0, $nombre = "", $ap1 = "", $ap2 = "", $edad = 0, $tpo = "profesor")
    {
        parent::__construct($id, $nombre, $ap1, $ap2, $edad, $tpo);
    }
}
?>