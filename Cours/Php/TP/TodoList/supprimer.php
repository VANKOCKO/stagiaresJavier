<?php 

require "db.php"; 


$sql = "DELETE FROM infolist WHERE id=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$_POST['id']]);


?>