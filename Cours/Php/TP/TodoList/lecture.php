<?php 


require "db.php";


// select all users
$stmt = $pdo->query("SELECT * FROM infolist");


echo "<pre>";
   print_r($stmt->fetch());
echo "</pre>";



?>