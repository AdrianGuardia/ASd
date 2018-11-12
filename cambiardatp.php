<?php
session_start();

$asd=$_POST["a"];
$as=$_POST["b"];
$f=$_SESSION["idus"];

$db = new PDO('mysql:host=localhost;dbname=pj01;charset=utf8', 'root', '');
$stet=$db->query("UPDATE clientes SET dir='$asd', tel=$as where idcl='$f' ");

header("Location: index.php")

?>
