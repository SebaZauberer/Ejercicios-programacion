<?php
class Pasajero
{
    private $id = 0;
    private $nombre = "";
    private $apellido = "";
    private $tipo = "";
    private $curso = "";
    
    /*===========================*/
    
    function __construct($id = 0, $nombre = "", $apellido = "", $tipo = "", $curso = "")
    {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> tipo = $tipo;
        $this -> curso = $curso;
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
    public function getApellido()
    {
        return $this -> apellido;
    }
    public function setApellido($apellido)
    {
        $this -> apellido = $apellido;
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
}

// subclases: alumno, profesor, apoderado, chofer

class Alumno extends Pasajero
{
    function __construct($id = 0, $nombre = "", $apellido = "", $tipo = "alumno", $curso = "")
    {
        parent::__construct($id, $nombre, $apellido, $tipo, $curso);
    }
}

class Profesor extends Pasajero
{
    function __construct($id = 0, $nombre = "", $apellido = "", $tipo = "profesor", $curso = "")
    {
        parent::__construct($id, $nombre, $apellido, $tipo, $curso);
    }
}

class Apoderado extends Pasajero
{
    function __construct($id = 0, $nombre = "", $apellido = "", $tipo = "apoderado", $curso = "")
    {
        parent::__construct($id, $nombre, $apellido, $tipo, $curso);
    }
}

class Chofer extends Pasajero
{
    function __construct($id = 0, $nombre = "", $apellido = "", $tipo = "chofer", $curso = "")
    {
        parent::__construct($id, $nombre, $apellido, $tipo, $curso);
    }
}
?>