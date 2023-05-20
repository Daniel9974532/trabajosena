<?php

$db = new PDO('mysql:host=localhost;dbname=sena','root','');

$hora = $db->query("SELECT * FROM horario")->fetchALL(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>holi</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/hola.css">


</head>
<body>
    
<div class=container> 

<table class="table table-hover table-dark">

<tr>

    <th>codigo</th>
    <th>dia</th>
    <th>hora</th>
    <th>opciones</th>
</tr>

<?php foreach($hora as $m):?>

<tr>

    <td><?php echo $m-> codigo ?></td>
    <td><?php echo $m-> dia ?></td>
    <td><?php echo $m-> hora ?></td>

<td>
    <a class="btn btn-danger" href="editarhorario.php ?codigo=<?php echo $m->codigo?>&dia=<?php echo $m->dia?>&hora=<?php echo $m->hora?>">Editar</a> 

</td>

</tr>

<?php endforeach;?>

</table>

<a href="index.php" class="btn btn-primary">volver</a>

</div>

</body>
</html>