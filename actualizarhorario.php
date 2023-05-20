<?php

$db = new PDO('mysql:host=localhost;dbname=sena','root','');


$codigo= $_POST['codigo'];
$dia= $_POST['dia'];
$hora= $_POST['hora'];

$db->query("UPDATE horario SET codigo='$codigo',dia='$dia',hora='$hora' WHERE codigo='$codigo'");
header('location:horario.php');


?>