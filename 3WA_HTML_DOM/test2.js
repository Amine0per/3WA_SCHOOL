

let output = document.getElementById("output"); // on pointe sur l'id output

if(output)  
      
           {

                let langages = output.getElementsByTagName("li") // on stock l'element li dans la variable langages
            
                    for (let i = 0; i < langages.length; i++)  // boucle qui va parcourir les different element li
                             
                        {

                            langages[i].onclick = function()    // creation d'une fonction qui s'active en cliquant sur le li   

                                {
                                   
                                    let text = this.innerHTML ; // recuperation de la valeur de l'elememt li 
                                    let newitem = prompt("Saisissez le nouveau texte : " , text);  // prompt qui permet de saisir un nouveau texte et le stocker dans la variable newitem
                                    if(newitem === "") { return alert("Veuillez saisir un texte");  }  // verifiction si l'utilisateur a entre un champ vide et alert de l'utilisateur
                                    else if (newitem) { langages[i].innerHTML = newitem ; }  // remplacement du contenu de l'element li par le contenu de la variable newitem
                                     
                                }

                        }  

            }


         




           




           