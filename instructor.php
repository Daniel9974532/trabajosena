<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>holi</title>
</head>
<body>

<div class="container">

<form action="guardarinstru.php" method="post" class="form-group">

<label for="">identificador</label>
<input type="number" name="num_identificacion" class="form-control">

<label for="">nombre</label>
<input type="text" name="nombre" class="form-control">

<label for="">apellido</label>
<input type="text" name="apellido" class="form-control">

<label for="">email</label>
<input type="email" name="email" class="form-control">

<label for="">curso</label>
<input type="number" name="curso" class="form-control">

<br>

<input class="btn btn-success" type="submit" name="guardar" value="guardar">

</div>
    
</body>
</html>