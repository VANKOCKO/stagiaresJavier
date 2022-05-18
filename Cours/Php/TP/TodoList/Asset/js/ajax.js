$(function(){
    
         // CRUD En Ajax 

         /**
          *  Ajout
          */
         function ajouter(){
                 // init ajax 
                 $.ajax({
                    method: "POST",
                    url: "ajouter.php",
                    data: { nom : $("#nom").val()  }
                  })
                    .done(function( msg ) {
                      alert( " Donne enregistrer " + msg );
                    });
         }

         function lecture(){
            $.ajax({
                method: "GET",
                url: "lecture.php"
              })
              .done(function( msg ) {
                JSON.parse(msg).forEach(function(item){
                    var li = $("<li></li>")
                    var p = $("<p></p>")
                    var btnMdf = $("<button class='btnmdf'>Modifier</button>")
                    var btnSup = $("<button class='btnsup'>Supprimer</button>")
                    p.text(item.nom)
                    li.append(p)
                    li.append(btnMdf)
                    li.append(btnSup)
                    $("ul").append(li)
                  });
                
                 $("ul > li > .btnmdf ").on("click", function( ) {
                     console.log($(this).parent().children("p").text())
                })
                $("ul > li > .btnsup ").on("click", function( ) {
                    console.log($(this).parent().children("p").text())
               })


                });
         }




             $("#ajouterList").on("click",ajouter)


        




         lecture()

         $("#ajouterList").on("click",ajouter)








  });