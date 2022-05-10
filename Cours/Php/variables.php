
<?php

// declaration des varibales 

$nom = "Kocko";
$prenom = "van";

$note = 10;
$note2 = 15 ;


// 


echo <<<EOT
    Mon nom est $nom 
EOT;

echo ""."<br>";

var_dump ($nom).'<br>';

echo ""."<br>";

echo "<pre>";
  
 print_r($note);

echo "</pre>";

$vrai  = true;
$null = null;

// faire de la concatenation 


//echo "$prenom $nom \n";

// echo pour l'affichage ! 

//echo ($note + $note2) / 2;

//echo $nom;

//echo $null;


/**
 *   Exercice 
 */

 $firstName = "Van";
 $lastName = "kocko";
 $mark1 = 10;
 $mark2 = 20;

 echo " Bonjour ".$firstName." ".$lastName. "vous avez eu "." ".( ($mark1 + $mark2) / 2 )." ". "de moyenne";  




 $informationClient = ["kocko","van"];

 $informationClientAsso = [
                       "nom"=>"kocko",
                       "prenom"=>"van"
                    ];
 

 echo "<pre>";
    print_r($informationClientAsso).'\n';
 echo "</pre>";


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

               <?php  for ($i=0; $i < count($informationClient) ; $i++) : ?>   
                    <li> 
                        <?php echo $informationClient[$i]; ?> 
                    </li>
                <?php  endfor ?>
            </ul>


            <ul>

               <?php  foreach ($informationClientAsso as $key => $info) : ?>
                  <li>    
                       <?php echo $key. " : " ; echo $info; ?>                   
                   </li>

                  <?php  endforeach ?>   
            </ul>

                  
           
          <?php echo "Hello"; ?>
        <script src="" async defer></script>
    </body>
</html>

