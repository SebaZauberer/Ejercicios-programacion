<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Acsii</title>
</head>
<body>
<?php 
    $numeros = array();
    
    for($i = 0; $i <= 250; $i ++){
        $numeros[$i] = $i;
    }
?>
    
    <ul>
        <?php for($i = 0; $i <= 250; $i ++){?>
        
        <li><?php echo "El número ".$numeros[$i]." equivale a: ".chr($numeros[$i]);?></li>
        
        <?php }?>
    </ul>    
    
</body>
</html>