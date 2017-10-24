<?php

    require_once('class.personas.php');

    $datos = json_decode(file_get_contents('http://www.slck.cl/seba.json'), true);

    $listaObjetos = array();

    if(!empty($datos)) {
        foreach($datos as $clave => $valor){
            if($valor["per_tipo"] == "alumno"){
                $valor = new Alumno(
                    $valor["id"],
                    $valor["per_nom"],
                    $valor["per_ap1"],
                    $valor["per_ap2"],
                    $valor["per_edad"],
                    $valor["per_tipo"]
                );
            } else{
                $valor = new Profesor(
                    $valor["id"],
                    $valor["per_nom"],
                    $valor["per_ap1"],
                    $valor["per_ap2"],
                    $valor["per_edad"],
                    $valor["per_tipo"]
                );
            }
            $listaObjetos[] = $valor;
        }
    } else {
        echo "SIN DATOS.";
    }
    echo "<pre>";
    print_r($listaObjetos);
    echo "</pre>";

?>