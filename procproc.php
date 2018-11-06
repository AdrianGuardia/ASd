<?php
session_start();
$op=$_POST["texto"];
$idcl=$_SESSION["idus"];

$db = new PDO('mysql:host=localhost;dbname=pj01;charset=utf8', 'root', '');
$db->query("INSERT INTO opiniones VALUES (NULL, '$op', '$idcl')");

header("Location:Opiniones.php");