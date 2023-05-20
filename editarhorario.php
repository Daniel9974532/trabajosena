<?php

$db = new PDO('mysql:host=localhost;dbname=sena','root','');


$codigo= $_GET['codigo'];
$dia= $_GET['dia'];
$hora= $_GET['hora'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>holis</title>
</head>
<body>

<div class="container">

<form action="actualizarhorario.php" method="post" class="form-group">

<label for="">codigo</label>
<input type="numbre" name="codigo" class="form-control" value="<?php echo $codigo ?>">

<label for="">dia</label>
<input type="text" name="dia" class="form-control" value="<?php echo $dia ?>">

<label for="">hora</label>
<input type="text" name="hora" class="form-control" value="<?php echo $hora ?>">

<br>

<input class="btn btn-success" type="submit" name="guardar" value="guardar">

</div>
    
</body>
</html>
