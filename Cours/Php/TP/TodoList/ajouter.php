<?php 

require "db.php";

// Ajouter dans la liste 

$sql = "INSERT INTO infolist(nom) VALUES (?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$_POST['nom']]);


?>