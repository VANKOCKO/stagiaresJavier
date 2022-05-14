<?php 

//  du tableau 

$notes = [10,20,10,9,8];

$eleves = ["Sem", "Cham",[10,20]];



echo "<pre>";
 print_r($eleves);
echo "</pre>";

// Tableau assosiee 

$student  = [
              'nom'=> 'kocko', 
              'prenom'=> 'van',
              'notes' => [10,20,15,14,16]
            ];

$class = [

      [
          'nom' => 'Hilaire',
          'prenom' => 'Eric',
          'notes' => [10,20,15,14,16]
      ],
      [
        'nom' => 'Hilaire',
        'prenom' => 'Eric',
        'notes' => [10,20,15,14,16]
      ]

];

$famille = [      
                [
                    'nom'=> 'Dupond', 
                    'prenom'=> 'Laurent',
                    'age'=> 30,
                    'enfants' => ["Pierre", "Jacques","Jean"]
                ],
                [
                    'nom'=> 'Jethro', 
                    'prenom'=> 'Prince',
                    'age'=> 45,
                    'enfants' => ["Alexandre","Jonathan","Andree"]
                ],
                [
                    'nom'=> 'Jethro', 
                    'prenom'=> 'Prince',
                    'age'=> 40,
                    'enfants' => ["Alexandre","Jonathan","Andree"]
                ]      
];  

$entreprise = 
        [
            "nom" => "Societe General",
            "numero de siren" => "8938498398498",
            "chiffre affaire" => 90920392092039,
            "pays" => ["france", "Luxembourg"],
            "agencce en france" => 
                [
                    "Paris" =>[
                            "ville"=>"Paris", 
                            "adresse" => "Place de la Repulique",
                            "tel" => 01-98-39-80-34,
                            "mail"=> "sgparis@sg.fr",
                            "nombre employe " => 2000
                    ], 
                    "Bordeaux"=>[
                               "ville"=>"Bordeaux", 
                                "adresse" => "Place de la Gare",
                                "tel" => 01-99-344-86-389,
                                "mail"=> "sgbordeaux@sg.fr",
                                "nombre employe " => 300
                    ], 
                    "Lyon"=>[
                                "ville"=>"Lyon", 
                                "adresse" => "Rue de la concorde",
                                "tel" => 01-99-344-86-3459,
                                "mail"=> "sgLyon@sg.fr",
                                "nombre employe " => 3345

                    ]
                ],
                "Service" => ["Banque","Assurance"]

        ];
// affichage du tableau en fonction de l'index du tableau 

//echo $eleves[2][1]."\n"; 
//echo $notes[3]."\n"; 


// Modification de la valeur contenu dans un tableau 

$student['nom'] = "Togno";
$student['prenom'] = "Sem";
$student['notes'][3]= 16;

// ajout d'un element dans un tableau 

$student["class"] = "CM-2";

//echo $student['nom']." ".$student['prenom']." a obtenu une note de : ".$student["notes"][2]."\n";

// affichage de tous elements du tableau 

/**
 *   Afficher les information des agences en Frances  
 */

echo "<pre>";
  // print_r($entreprise);
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
            <h1>Listes des agences <?php $entreprise['nom'] ?> en France </h1>
            <h3> Numero de siren : <?= $entreprise['numero de siren'];?></h3> 
            <h3>Chiffre d'affaire : <?= $entreprise['chiffre affaire'];?></h3>    
                <ul style="border: 1px solid black ;">
                    <?php foreach ($entreprise['agencce en france'] as  $ent) : ?>
                              <li>
                                  <?=$ent['ville']?>
                                  <?php foreach ($ent as $key => $agence) : ?>
                                         <li style="margin-left: 30px; border: 1px solid black "><?= $key ?> : <?= $agence?></li>
                                  <?php endforeach ?>
                              </li>
                    <?php endforeach ?>
                </ul>
            </body>
</html>