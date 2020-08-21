<?php  

require 'dbconnect.php';

$user = $_POST['user'];
$lastname = $_POST['lastname'];
$bday = $_POST['bday'];
$age = $_POST['age'];




$sql = 'INSERT INTO mydate(db_name, db_last, db_bday,db_age) VALUES(?, ?, ?, ?)';

$insert = $pdo->prepare($sql);
$insert->execute([$user, $lastname, $bday, $age]);


header('Location:/guest.php');




?>