<?php 


require "db.php";


// select all users
$stmt = $pdo->query("SELECT * FROM infolist");

// envoi en json 

echo json_encode($stmt->fetchAll()); 
?>