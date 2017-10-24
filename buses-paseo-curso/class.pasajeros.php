<?php
class Pasajero
{
    private $id = 0;
    private $nombre = "";
    private $apellido1 = "";
    private $apellido2 = "";
    private $edad = 0;
    private $tipo = "";
    private $curso = "";
    private $asiento = 0;
    
    /*===========================*/
    
    function __construct($id = 0, $nombre = "", $apellido1 = "", $apellido2 = "", $edad = 0, $tipo = "", $curso = "", $asiento = 0)
    {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido1 = $apellido1;
        $this -> apellido2 = $apellido2;
        $this -> edad = $edad;
        $this -> tipo = $tipo;
        $this -> curso = $curso;
        $this -> asiento = $asiento;
    }
    
    /*--------------------------*/
    public function getId()
    {
        return $this -> id;
    }
    public function setId($id)
    {
        $this -> id = $id;
    }
    /*--------------------------*/
    public function getNombre()
    {
        return $this -> nombre;
    }
    public function setNombre($nombre)
    {
        $this -> nombre = $nombre;
    }
    /*--------------------------*/
    public function getApellido1()
    {
        return $this -> apellido1;
    }
    public function setApellido1($apellido1)
    {
        $this -> apellido1 = $apellido1;
    }
     /*--------------------------*/
    public function getApellido2()
    {
        return $this -> apellido2;
    }
    public function setApellido2($apellido2)
    {
        $this -> apellido2 = $apellido2;
    }
     /*--------------------------*/
    public function getEdad()
    {
        return $this -> edad;
    }
    public function setEdad($edad)
    {
        $this -> edad = $edad;
    }
    /*--------------------------*/
    public function getTipo()
    {
        return $this -> tipo;
    }
    public function setTipo($tipo)
    {
        $this -> tipo = $tipo;
    }
    /*--------------------------*/
    public function getCurso()
    {
        return $this -> curso;
    }
    public function setCurso($curso)
    {
        $this -> curso = $curso;
    }
    /*--------------------------*/
    public function getAsiento()
    {
        return $this -> asiento;
    }
    public function setAsiento($asiento)
    {
        $this -> asiento = $asiento;
    }
}

// subclases: alumno, profesor, apoderado, chofer

class Alumno extends Pasajero
{
    function __construct($id = 0, $nombre = "", $apellido1 = "", $apellido2 = "", $edad = 0, $tipo = "alumno", $curso = "", $asiento = 0)
    {
        parent::__construct($id, $nombre, $apellido1, $apellido2, $edad, $tipo, $curso, $asiento);
    }
}

class Profesor extends Pasajero
{
    function __construct($id = 0, $nombre = "", $apellido1 = "", $apellido2 = "", $edad = 0, $tipo = "profesor", $curso = "", $asiento = 0)
    {
        parent::__construct($id, $nombre, $apellido1, $apellido2, $edad, $tipo, $curso, $asiento);
    }
}

class Apoderado extends Pasajero
{
    function __construct($id = 0, $nombre = "", $apellido1 = "", $apellido2 = "", $edad = 0, $tipo = "apoderado", $curso = "", $asiento = 0)
    {
        parent::__construct($id, $nombre, $apellido1, $apellido2, $edad, $tipo, $curso, $asiento);
    }
}

class Chofer extends Pasajero
{
    function __construct($id = 0, $nombre = "", $apellido1 = "", $apellido2 = "", $edad = 0, $tipo = "chofer", $curso = "", $asiento = 0)
    {
        parent::__construct($id, $nombre, $apellido1, $apellido2, $edad, $tipo, $curso, $asiento);
    }
}
?>