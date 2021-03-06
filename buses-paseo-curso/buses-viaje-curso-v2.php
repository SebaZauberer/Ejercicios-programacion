<?php
require_once("class.pasajeros.php");
require_once("class.buses-paseo.php");

$datosPasajeros = json_decode(file_get_contents('http://www.slck.cl/seba2.json'), true);

$personas = array();

if(!empty($datosPasajeros))
{
    foreach($datosPasajeros as $clave => $valor){
        if($valor["per_tipo"] == "profesor"){
            $valor = new Profesor(
                $valor["id"],
                $valor["per_nom"],
                $valor["per_ap1"],
                $valor["per_ap2"],
                $valor["per_edad"],
                $valor["per_tipo"],
                $valor["per_curso"]
            );
        } elseif($valor["per_tipo"] == "apoderado"){
            $valor = new Apoderado(
                $valor["id"],
                $valor["per_nom"],
                $valor["per_ap1"],
                $valor["per_ap2"],
                $valor["per_edad"],
                $valor["per_tipo"],
                $valor["per_curso"]
            );
        } elseif($valor["per_tipo"] == "chofer"){
            $valor = new Chofer(
                $valor["id"],
                $valor["per_nom"],
                $valor["per_ap1"],
                $valor["per_ap2"],
                $valor["per_edad"],
                $valor["per_tipo"],
                $valor["per_curso"]
            );
        } else{
            $valor = new Alumno(
                $valor["id"],
                $valor["per_nom"],
                $valor["per_ap1"],
                $valor["per_ap2"],
                $valor["per_edad"],
                $valor["per_tipo"],
                $valor["per_curso"]
            );
        }
        
        $personas[] = $valor;
    }
} else {
    echo "SIN DATOS.";
}

//llenar los buses
for($i = 0; $i < count($personas); $i++){
    if($personas[$i]->getCurso() == "4A"){
        $bus1[] = $personas[$i];
    }elseif($personas[$i]->getCurso() == "4E"){
        $bus2[] = $personas[$i];
    }elseif($personas[$i]->getCurso() == "4G"){
        $bus3[] = $personas[$i];
    }
}

$bus4A = new BusPaseo($bus1, count($bus1));
$bus4E = new BusPaseo($bus2, count($bus2));
$bus4G = new BusPaseo($bus3, count($bus3));



$busesPaseo = array("Bus 1"=>$bus1, "Bus 2"=>$bus2, "Bus 3"=>$bus3);

echo "<pre>";
print_r($bus4A);
echo "</pre>";
?>