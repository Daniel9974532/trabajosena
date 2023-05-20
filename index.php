<?php

$db = new PDO('mysql:host=localhost;dbname=sena','root','');

$info = $db->query("SELECT * FROM personas")->fetchALL(PDO::FETCH_OBJ);

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

    <th>id</th>
    <th>identificador</th>
    <th>nombre</th>
    <th>apellido</th>
    <th>edad</th>
    <th>email</th>
    <th>tipo</th>
    <th>curso</th>
    <th>opciones</th>
</tr>

<?php foreach($info as $m):?>

<tr>

    <td><?php echo $m-> id ?></td>
    <td><?php echo $m-> num_identificacion ?></td>
    <td><?php echo $m-> nombre ?></td>
    <td><?php echo $m-> apellido ?></td>
    <td><?php echo $m-> edad ?></td>
    <td><?php echo $m-> email ?></td>
    <td><?php echo $m-> tipo ?></td>
    <td><?php echo $m-> curso ?></td>
<td>
    <a class="btn btn-danger" href="editarinstru.php ?num_identificacion=<?php echo $m->num_identificacion?>&nombre=<?php echo $m->nombre?>&apellido=<?php echo $m->apellido?>
    &email=<?php echo $m->email?>&curso=<?php echo $m->curso?>">Editar</a> 


    <a class="btn btn-danger" href="eliminar.php?id=<?php echo $m->id ?>">ELiminar</a>

</td>

</tr>

<?php endforeach;?>

</table>

<a href="aprendis.php" class="btn btn-primary">aprendis</a>
<a href="instructor.php" class="btn btn-primary">instructor</a>
<a href="horario.php" class="btn btn-primary">horario</a>

</div>

</body>
</html>