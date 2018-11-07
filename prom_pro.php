<?php
$a=$_POST["nom"];
$b=$_POST["prec"];
$c=$_POST["text"];
$d=$_POST["imag"];


$db = new PDO('mysql:host=localhost;dbname=pj01;charset=utf8', 'root', '');
$db->query("INSERT INTO promociones VALUES (NULL, '$b', '$a','$c','$d')");

header('Location: index.php');