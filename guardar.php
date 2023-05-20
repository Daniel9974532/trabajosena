<?php

$db = new PDO('mysql:host=localhost;dbname=sena','root','');

$identificador= $_POST['num_identificacion'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$edad= $_POST['edad'];
$tipo= 2;
$curso= $_POST['curso'];


$db->query("INSERT INTO personas(num_identificacion,nombre,apellido,edad,tipo,curso) VALUES('$identificador','$nombre','$apellido','$edad','$tipo','$curso')");
header('location:index.php');


?>