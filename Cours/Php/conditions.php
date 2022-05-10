<?php 

$note  = 15;;

/**
 *   If
 */

if($note >= 10){
     
    if($note == 10){
       echo "Vous avez juste la moyenne"."<br>";
    }else {
       echo "Vous avez la moyenne"."<br>";;
    }
}else {
      echo "Vous n'avez pas de moyenne"."<br>";;
}

$action = (int)readline("Entrez votre action : (1: Attaquer, 2: defendre, 3: passer mon tour) : ");

/**
 *   Switch
 */
switch ($action) {
      case 1: 
          echo 'J\'attaque !'."<br>";;
          break;
      case 2: 
          echo 'Je defends'."<br>";;
          break; 
      case 3 : 
        echo 'Je fais rien'."<br>";;
        break; 
      default: 
        echo "Commande Inconnue !"."<br>";;  
}


$heure = (int)readline("Entrez votre heure : ");

if( (9 <= $heure && $heure <= 12 ) ||  (14 <= $heure && $heure <= 17 ) ){
      echo "Le magasin sera ouvert "."<br>";
}else {
     echo "Le magasin sera ferme ! "."<br>";
}
?>
