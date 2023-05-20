<?php

$db = new PDO('mysql:host=localhost;dbname=sena','root','');

$identificador= $_POST['num_identificacion'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$email= $_POST['email'];
$tipo= 1;
$curso= $_POST['curso'];


$db->query("INSERT INTO personas(num_identificacion,nombre,apellido,email,tipo,curso) VALUES('$identificador','$nombre','$apellido','$email','$tipo','$curso')");
header('location:index.php');


?>