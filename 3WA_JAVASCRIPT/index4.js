// creation d'objets 
const chien ={

    nom : "max" , age : 3 , crie: function()   { console.log("ho ho ho ho ho");}

}
//recuperation d'obj
console.log(chien.nom);
console.log(chien.age)
chien.crie();
const chat = new Object();
chat.nom = 'mimi';
chat.age = 2;
chat.crie = function() { return 'miaou miaou maou'; }
console.log(chat.nom);
console.log(chat.age);
console.log(chat.crie());
//reaffectation d'objet
chien.age = 5;
console.log(chien.age);
chien.taille = 10;
console.log(chien.taille);
//fonction d'objet
console.log(chien.hasOwnProperty("nom")); // retourne true si la property existe dans lobjet false si non
console.log(chien.hasOwnProperty("race"));

console.log(Object.keys(chien)); // afficher tout les property de objet

console.log(Object.values(chien));  // afficher valeurs des proprietes

const e = Object.entries(chien); // afficher les property et les valeurs
console.log(e);

for (const [key , value] of Object.entries(chien)) {  // afficher les property et les valeurs deuxieme methode avec for  on peut remplacer key et value par a et b
    
    console.log(`${key} ::: ${value}`);
}
