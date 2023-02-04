 $(document).ready(function(){

        $('form').submit(function(e){   // declenchement d'une fonction sur submit du formulaire                  
          e.preventDefault();// eviter que la page se recharge             
          let MessageUtilisateur = $('input').val(); // obtention du message         
          if( MessageUtilisateur !== '' )  // verification si le message n'est pas vide 
          {     
            // Preparation du message
            let NouveauMessage = "<p><strong>Utilisateur :</strong> " + MessageUtilisateur + "</p>"; 
      
            // Appel de la fonction qui gere lajout du message et la reponse du bot en callback
            Ajout_Message_Et_Reponse_Bot_En_CallBack( MessageUtilisateur , NouveauMessage  ,Reponse_Du_Bot );                 
            
            $('input').val(""); // nettoyage de l'input           
          } 
          else { alert("Veuillez ecrire quelque chose dans le champ");}  // alert de l'utilisateur si il entre un champ vide

          //Fonction qui ajoute le message entre par lutilisateur et reponds grace a la fonction call back
          function Ajout_Message_Et_Reponse_Bot_En_CallBack(r,n, callback) {   

            $('.LeBox').append(n);
            setTimeout (function(){ callback(r);} ,2000 ) ;     
            }

          //la fonction call back 
          function Reponse_Du_Bot(r) { 
             //les differents cas de reponse du BOT
              switch(r){   

                case "bonjour" :$('.LeBox').append("<p class=' message '> <strong>Bot : </strong>  Bonjour, comment vas tu  </p>"); break ;
                case  "ca va et toi" : $('.LeBox').append("<p class=' message '> <strong>Bot : </strong>  je vais bien merci  </p>");break ;
                case  "tu fais quoi" : $('.LeBox').append("<p class=' message '> <strong>Bot : </strong>  je regarde une nouvelle serie </p>");break ;
                case  "quel serie" : $('.LeBox').append("<p class=' message bg-warning'> <strong>Bot : </strong> Last of us </p>");break ;
                case  "tu as quel age" : $('.LeBox').append("<p class=' message bg-warning'> <strong>Bot : </strong> tu m'a cree il y'a quelques heures je dois avoir 3 heures</p>");break ;
                case  "quel temps fait il aujourdhui" : $('.LeBox').append("<p class=' message bg-warning'> <strong>Bot : </strong> le ciel est nuageux prevoit un parapluie au cas ou </p>");break ;
                case  "au revoir" : $('.LeBox').append("<p class=' message bg-warning'> <strong>Bot : </strong> au revoir a la prochaine fois </p>");break ;
               
                default:  $('.LeBox').append("<p class=' message bg-warning'> <strong>Bot : </strong> je n'ai pas compris </p>");     
            }
        }                   
        });      
      });