<?php 
require "db.php"; 

$nom = "";
$id = 0 ;
if(isset($_POST['nom']) && isset($_POST['nom']))
{
     $nom = $_POST['nom'];                 
     $id = $_POST['id'];
 }



?>

<h1>Modifier le nom! </h1>

<form action="" method="post">  
            <input type="text" name="nomModifier" value="<?php echo $nom; ?>  "> 
            <input hidden value="<?php echo $id;?>" name="id" >
            <button name="btnmodifier" type="submit">Modifier</button>
</form> 

<?php 

if(isset($_POST['btnmodifier'])){

    $id= $_POST['id'];  
    $nommdf = $_POST['nomModifier'];   
    $sql = "UPDATE infolist SET nom = ?  WHERE id=$id";
    $pdo->prepare($sql)->execute([$nommdf]);
    //$Message = urlencode("Votre modification a ete prise en compte !");
    header("Location:lecture.php");
    die;
}

?>