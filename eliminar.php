<?php

$db = new PDO('mysql:host=localhost;dbname=sena','root','');

$id = $_GET['id'];

$db->query("DELETE FROM personas WHERE id = '$id'");

header('location:index.php');

?>