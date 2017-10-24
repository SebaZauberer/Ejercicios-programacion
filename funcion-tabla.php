<?php
//$tablaDel9 = array();

function agregarMultiplos($m1, $m2)
{
    $tabla = array();
    
    for($fila = $m1; $fila <= $m2; $fila++){
        for($columna = $m1; $columna <= $m2; $columna++){
            $tabla[$fila][$columna] = $fila*$columna;
        }
    }
    return $tabla;
}


function crearTabla($n1 = 0, $n2 = 0)
{
    agregarMultiplos($n1, $n2);
    
    $estructura = "";
    if($n1 != 0){
        $estructura .="<table>";
    }
    
    for($fila = $n1; $fila <= $n2; $fila++){
        $estructura.="<tr>";
        for($columna = $n1; $columna <= $n2; $columna++){
            $tabla[$fila][$columna] = $fila*$columna;
            $estructura .= "<td> ".$tabla[$fila][$columna]." </td>";
        }
        $estructura.="</tr>";
    }
    if($n2 != 0){
        $estructura .="</table>";
    }
    
    return $estructura;
}


$tablaDel9 = crearTabla(1, 9);
echo $tablaDel9;

?>