<?php
require_once("class.pasajeros.php");

$datosPasajeros = json_decode(file_get_contents(""), true);

$personas = array();

if(!empty($datosPasajeros))
{
    foreach($datosPasajeros as $clave => $valor){
        if($valor["tipo"] == "profesor"){
            $valor = new Profesor(
                $valor["id"],
                $valor["nombre"],
                $valor["apellido"],
                $valor["tipo"],
                $valor["curso"]
            );
        } elseif($valor["tipo"] == "apoderado"){
            $valor = new Apoderado(
                $valor["id"],
                $valor["nombre"],
                $valor["apellido"],
                $valor["tipo"],
                $valor["curso"]
            );
        } elseif($valor["tipo"] == "chofer"){
            $valor = new Chofer(
                $valor["id"],
                $valor["nombre"],
                $valor["apellido"],
                $valor["tipo"],
                $valor["curso"]
            );
        } else{
            $valor = new Alumno(
                $valor["id"],
                $valor["nombre"],
                $valor["apellido"],
                $valor["tipo"],
                $valor["curso"]
            );
        }
        
        $personas[] = $valor;
    }
}

//arrays buses
$bus1 = array();
$bus2 = array();
$bus3 = array();
$asiento = 0;

while($asiento <= 50)
{
    $bus1[] = "asiento vacio";
    $bus2[] = "asiento vacio";
    $bus3[] = "asiento vacio";
    
    $asiento++;
}

//rellenar buses
for($i = 0; $i <= 44; $i++){
    if($i >= 0 && $i <= 44):
        $bus1[$i] = $personas[$i];
    elseif($i >= 45 && $i <= 88):
        $bus2[$i] = $personas[$i];
    elseif($i >= 89):
        $bus3[$i] = $personas[$i];
    endif;
}
?>