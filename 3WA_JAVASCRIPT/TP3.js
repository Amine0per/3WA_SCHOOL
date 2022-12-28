//Tp 1: 
//1 - Créez un objet nommé "personne" avec les propriétés suivantes : "nom", "âge" et ville .
//initialisez ces propriétes avec des valeurs appropriées .
//2- Affichez la ville de la personne en utilisant la syntaxe suivante: "La ville de [nom de la personne] est [ville de la personne]."
//3 - Ajoutez une propriété "hobbies" à l'objet "personne" et initialisez-là avec un tableau contenant 3 de ses hobbies.
//4- Affichez chaque hobbies de la personne en utilisant la boucle for
//5- Ajoutez une fonction "presentation"  à l'objet "personne" qui affiche la phrase "Je m'appelle [nom de la personne] et j'ai [âge de la personne] ans."
//6- Appelez cette méthode ou cette fonction pour afficher cette phrase.

//Q1
const personne ={

                      nom : "amine" ,
                      age : 30 ,
                      ville : "Marrakech"
};

//Q2
console.log(`la ville de ${personne.nom} est ${personne.ville} `);

//Q3
personne.hobbies = [ "football" , "cinema" , "lecture"]
//Q4
for (let i = 0; i < personne.hobbies.length; i++)
{
    console.log(personne.hobbies[i]);
}
// methode 2
for (const value of personne.hobbies )  {  
    
    console.log(value);
}

//Q5
personne.presentation = () => {

    console.log("Je m'appelle " + personne.nom +" et j'ai "+personne.age +" ans.")
}
//Q6
personne.presentation()