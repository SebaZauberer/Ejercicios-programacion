<?php
$objetivo = "palabra";

if(isset($_GET[s])){
    if($_GET[s] == $objetivo){
        $frase = "Cambié el contenido";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <a href="get.php?s=palabra">Cambiar</a>
<?php if($frase != ""){ ?>
    <h1><? echo $frase;?></h1>
<?php  } ?>  
</body>
</html>