<?php 


/**
 *  While  
 */


//  //$chiffre = null;

//  While($chiffre !== 10){
//   //    $chiffre = (int)readline("Entrer un chiffre : ");
//  }
//  echo "Bravo vous avez ganger  !"."<br>";



 /**
  *   For
  */
  $notes = [10,15,16];
  for($i=0;$i<count($notes); $i++){
      echo "- ". $notes[$i]."<br>";
  }
  echo "<br>";

  /**
   *   For Each
   */

   // creation du tableau des eleves 
   $eleves = [
          'cm2' => ['Jean', 'Jacques','Greg'],
          'cm1' => ['Claude','Kevin','Jason'],
   ];
   // Boucle syr le tableau des eleves 
   foreach ($eleves as $class =>  $eleve) {
        //  affichage de la cle du tableau des eleves
        echo " La class  $class :  "."<br>";
        // boucle sur la listes des eleves d'une class 
        foreach ($eleve as $key => $value) {
            echo " - ". $value ."<br>";
        } 
        echo "<br>";
   }


    // Pour ajouter tableau 
  // Ajout dans tableau 
   $tableauNotes = [];  
   
   while(count($tableauNotes) <= 10) {
       $noteEnregistrer = (int)readline("Enregistrer note dans le tableau : ");
       $tableauNotes[] = $noteEnregistrer; 
   }
   foreach ($tableauNotes as $key => $note) {
        echo $note ."<br>";
   }
?>