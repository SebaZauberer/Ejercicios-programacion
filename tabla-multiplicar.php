<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabla multiplicar con PHP</title>
    <style>
        td{
            border: 1px solid #000;
            padding: 10px;
        }
    </style>
</head>
<body>
   
<?php 
    $tablas = array(array());
    
    for($fila = 1; $fila <= 9; $fila++){
        for($columna = 1; $columna <= 9; $columna++){
            $tablas[$fila][$columna] = $fila*$columna;
        }
    }
?> 
   <table>
       <?php for($a = 1; $a <= 9; $a++){?>
            <tr>
                <?php for($b = 1; $b <= 9; $b++){?>
                    <td><?php echo $tablas[$a][$b];?></td>
                <?php }?>
            </tr>
        <?php }?>
   </table>  
    
</body>
</html>