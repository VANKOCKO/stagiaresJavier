<?php 


require "db.php";


// select all users
$stmt = $pdo->query("SELECT * FROM infolist");


//echo "<pre>";
 // print_r($stmt->fetchAll() );
//echo "</pre>";


?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <ul>
                <?php  foreach ($stmt->fetchAll() as $key => $data) : ?>

                           <li style="display: flex; margin: 10px;"> 
                                   <div ><?php echo  $data['nom'] ."</br>";?></div> 
                                       
                                   <div> <form action="modifier.php" method="post">
                                                  <input hidden value=" <?php echo $data['id']; ?>" name="id" >
                                                  <input hidden value=" <?php echo $data['nom']; ?>" name="nom" >
                                                  <button style="background-color:yellow; margin:2px" type="submit">Modifier</button>
                                         </form>
                                   </div>
                                    <div>
                                          <form action="supprimer.php" method="post">
                                                     <input hidden value=" <?php echo $data['id']; ?>" name="id" >
                                                     <button style="background-color:red;" type="submit">Supprimer</button>
                                          </form>
                                    </div>       
                            </li>
                                    
                                  

                <?php  endforeach ?>
        </ul>
        <script src="" async defer></script>
    </body>
</html>