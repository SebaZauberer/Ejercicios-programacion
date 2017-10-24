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


function agregarMultiplos_2($m1, $m2)
{
    $tabla = array($m1, $m2);
    
    foreach($tabla as $m1 => $m2)
    {
        $m1 = $m1*$m2;
    }
    
    return $tabla;
}


function crearTabla($n1, $n2)
{
    return agregarMultiplos($n1, $n2);
}


/*$tablaDel9 = agregarMultiplos(1, 15);
echo "<pre>";
print_r($tablaDel9);
echo "</pre>";

$tablaDel9 = crearTabla(20, 25);
echo "<pre>";
print_r($tablaDel9);
echo "</pre>";*/

$tablaDel9 = agregarMultiplos_2(1, 10);
echo "<pre>";
print_r($tablaDel9);
echo "</pre>";    

?>