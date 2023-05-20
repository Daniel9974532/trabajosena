<?php

$db = new PDO('mysql:host=localhost;dbname=sena','root','');

$identificacion=$_GET['num_identificacion'];
$nombre= $_GET['nombre'];
$apellido= $_GET['apellido'];
$email= $_GET['email'];
$curso= $_GET['curso'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>:(</title>
</head>
<body>

<div class="container">

<form action="actualizarinstru.php" method="post" class="form-group">



<label for="">identificador</label>
<input type="number" name="num_identificacion" class="form-control" value="<?php echo $identificacion ?>">

<label for="">nombre</label>
<input type="text" name="nombre" class="form-control" value="<?php echo $nombre ?>">

<label for="">apellido</label>
<input type="text" name="apellido" class="form-control" value="<?php echo $apellido ?>">

<label for="">email</label>
<input type="email" name="email" class="form-control" value="<?php echo $email ?>">

<label for="">curso</label>
<input type="number" name="curso" class="form-control" value="<?php echo $curso ?>">

<br>

<input class="btn btn-success" type="submit" name="guardar" value="guardar">

</div>
    
</body>
</html>
