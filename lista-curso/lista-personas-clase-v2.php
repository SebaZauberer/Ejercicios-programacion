<?php
error_reporting(E_ERROR);

    require_once('class.personas-v2.php');

    $datos = json_decode(file_get_contents('http://www.slck.cl/seba.json'), true);

    $listaObjetos = array();

    if(!empty($datos)) {
        /*foreach($datos as $clave => $valor){
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
        }*/
        
        for($i = 0; $i < count($datos); $i++){
            if($datos[$i]["per_tipo"] == "alumno"){
                $datosx[$i] = new Alumno(
                    $datos[$i]["id"],
                    $datos[$i]["per_nom"],
                    $datos[$i]["per_ap1"],
                    $datos[$i]["per_ap2"],
                    $datos[$i]["per_edad"],
                    $datos[$i]["per_tipo"]
                );
            } else{
                $datosx[$i] = new Profesor(
                    $datos[$i]["id"],
                    $datos[$i]["per_nom"],
                    $datos[$i]["per_ap1"],
                    $datos[$i]["per_ap2"],
                    $datos[$i]["per_edad"],
                    $datos[$i]["per_tipo"]
                );
            }
            
        }
        
    } else {
        echo "SIN DATOS.";
    }

    echo "<pre>";
    print_r($datosx);
    echo "</pre>";
    

    /*require_once('class.personas.php');

    $datos = json_decode(file_get_contents('http://www.slck.cl/seba.json'));
    $datos  = (object) $datos;
    $alumnos = array();

foreach($datos as $r){
    if($r->per_tipo == "alumno"){
       $alumnos[] =  [
           'nombre' => $r->per_nom,
           'nombre' => $r->per_nom
       ];
    }
}

    print_r((object) $alumnos);
    die();*/

?>