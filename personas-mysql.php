<?php
$link = mysqli_connect("127.0.0.1","admin_seba","apuge6uqu");

mysqli_select_db($link,"admin_seba");

$query = "SELECT * FROM `tabla_personas`";

$rs = mysqli_query($link,$query);
?>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
    </tr>
<?php while($rf = mysqli_fetch_assoc($rs)){?>
    <tr>
        <td><?php echo $rf["id"];?></td>
        <td><?php echo $rf["per_nom"];?></td>
        <td><?php echo $rf["per_ap1"];?></td>
        <td><?php echo $rf["per_ap2"];?></td>
    </tr>
<?php }?>
</table>