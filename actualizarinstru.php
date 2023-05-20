<?php

$db = new PDO('mysql:host=localhost;dbname=sena','root','');

$identificacion= $_POST['num_identificacion'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$email= $_POST['email'];
$curso= $_POST['curso'];

$db->query("UPDATE personas SET num_identificacion='$identificacion',nombre='$nombre',apellido='$apellido',email='$email',curso='$curso' WHERE num_identificacion='$identificacion'");
header('location:index.php');


?>