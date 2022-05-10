
<?php 



class Article {
     public  $nom;
     public $prix;
     public function __construct($nom, $prix)
     {
         $this->nom = $nom;
         $this->prix = $prix;
     }
}

class Categorie {
      public $nom;
      public $listeArticle = [];
      function AfficheArticle(){
             // instansce de la class 
             $article = new Article("Iphone", 200);
             $listeArticle[] = $article;
             foreach ($listeArticle as $key => $value) {
                  echo "nom  : ".$value->nom. " Prix : "." ".$value->prix;
             }
      }
}


// instancle 

$categorie  = new Categorie();
$categorie->AfficheArticle();

?>
