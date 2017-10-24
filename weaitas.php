<?php
/*Experimento recivir como parametro un elemento de un array*/
$cosas = array("cosa 1", "cosa 2", "cosa 3");

function imprime($aImprimir){
    echo $aImprimir."<br>" ;
}

imprime($cosas[1]);

/*Experimento rellenar un array con un foreach*/
$unArray = array();

foreach(range(0, 10) as $num){ 
  echo $num;
  $unArray[]= $num;
}
echo "<br/>";
print_r($unArray);
echo "<br/>";

/*Experimento crear una funcion que sume los numeros de un array*/
function creaSuma($ar)
{
    $resultado = 0;
    for($i = 0; $i < count($ar); $i++){
        if($i == 0){
            $resultado = $ar[$i];
        } else{
            $resultado = $resultado+$ar[$i];
        }       
    }
    return $resultado;
}
echo creaSuma([1,2,3,4,10,11]);
echo "<br/>";

/*Experimento funcion para encontrar una expresion regularlas etiquetas en un texto y reemplazarlas*/
$textoConTags = "
<p>
Este es un <span>texto de ejemplo</span>, en donde debo usar <strong>etiquetas</strong> que modifiquen <i>las palabras</i> 
</p>
";

function borraEtiquetas($tex)
{
    return preg_replace("/<[^>]+>/", "", $tex);
}

echo "<p> ".borraEtiquetas($textoConTags)." </p><br/>";

/**/

?>