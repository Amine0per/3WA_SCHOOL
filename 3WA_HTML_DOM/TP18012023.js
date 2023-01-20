   let TacheUtilisateur = document.querySelector('#TacheUtilisateur');  // selecteur sur le input id : TacheUtilisateur

   let Ajouter = document.querySelector('#Ajouter');      // selecteur sur le bouton id : Ajouter

   let EffacezTout = document.querySelector('#EffacezTout');  // selecteur sur le bouton id : EffacezTout

   let ToDoList = document.querySelector('#ToDoList');  // selecteur sur notre ol id : ToDoList
   
   let EffacezDerniereTache = document.querySelector('#EffacezDerniereTache');

   Ajouter.addEventListener('click', () => {           // event creation de notre tache

      let NouvelleTache = TacheUtilisateur.value ;   

      if (NouvelleTache === "") {

                alert('veuillez saisir une tache');

      } else{   
       
        let CreationListe = `<li class="p-1"> ${NouvelleTache}  
                             <button onclick="CheckerLaTache(this)" class="btn btn-sm btn-success">Fait</button>
                             <button onclick="Important(this)" class="btn btn-sm btn-warning">Rendre Important</button>
                             <button onclick="SupprimerTache(this)" class="btn btn-sm btn-danger pr-1">Supprimer</button> </li>`; // creation de notre tache 
        ToDoList.innerHTML += CreationListe; // ajout de notre tache a la liste
        TacheUtilisateur.value = ''; // vidage de l'input
        
      }
   })

   
   function SupprimerTache(e) {         // fonction supprimer une tache
     
    let Sup = e.parentElement;
    Sup.style.display = "none";

   }

   function CheckerLaTache(e) {       // fonction checker la tache

    let che= e.parentElement;
    che.style.setProperty('text-decoration', 'line-through');
    
   }

   EffacezTout.addEventListener('click', () => {   // suppression de toutes les taches 

   ToDoList.innerHTML = ""; } )

   
   function Important(e) {       // rendre la tache important

      let imp= e.parentElement;
      imp.style.setProperty('text-decoration', 'underline');
      imp.style.setProperty('text-decoration-color', 'Yellow');
      imp.style.setProperty('color', 'Yellow');
      
     }
  
     EffacezDerniereTache.onclick = function(){               // Fonction annuler derniere tache 

      ToDoList.removeChild(ToDoList.lastElementChild);
     }