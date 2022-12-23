

//operateur ternaire
const nombre = 25
const parite =(nombre % 2 ===0) ? "Oui" : "Non" ;
console.log("Le nombre " + nombre +" est pair ? " + parite  )  ;

//commutation
function couleurfruit(couleur)   { 
                                      switch (couleur)  
                             { 

                                      case "rouge" : return "pomme"  ;
                                      case "jaune" : return "banane" ;
                                      case "orange" : return "orange" ;
                                      case "vert" : return "avocat";
                                      default : return ;
                             };
    
                                 };

const Macouleur = "jaune";
const fruit = couleurfruit(Macouleur);
console.log("je veux manger : "+ fruit );



let couleur = "jaune";


if (!couleur=="jaune"){
    console.log("Tout est bon!");
} else{
    console.log("Ce n'est pas bon!");
}

//and  || or
let forme = "rond";

if (couleur=="jaune" || forme == "rond" ){
    console.log("Tout est bon!");
} else{
    console.log("Ce n'est pas bon!");
}

//for
for(let i=1 ; i<=10 ; i++)
{

    console.log(i);
}

//while 
let j=1 ; 
while(j<10 )
{  console.log(j); j++;};

//do while 
let k=1 ; 
do 
{  console.log(k); k++;}
while (k<=5)  


let coul=["rouge" , "blanc" , "noir"]
for (let v in coul) { console.log(coul[v])}


//break

for(let i=1 ; i<=10 ; i++)
{

    console.log(i);
    if (i==7) { break ;}
}


//continuez

for(let i=1 ; i<=10 ; i++)
{

    console.log(i);
    if (i!=0) { continue; } else { break ;}
}

//fonction

function essaie(nom,prenom)
{
console.log ("bonjour tout le monde mon nom est "+nom +" et mon prenom est "+prenom);
}

essaie("tajine" , "couscous");

function airecercle(rayon)
{ 

    return rayon*rayon*Math.PI ;
}

let rayon = 5;
let  aire = airecercle(rayon);
console.log("l'aire du cercle dont le rayon est "+ rayon+ " est : " +aire );

//fonction flechee
const hello=()=>{
    console.log ("bonjour tout le monde");
}


//table
let boire = [22, 16, 14, 2 ,5 ,7];
console.log (boire[4]); // afficher le contenu de lindice 4 01234...
console.log (boire.length);

for (let i=0; i<boire.length; i++){
console.log(boire[i]);}


//afficher tableau
boire.forEach((boire)=>{
    console.log(boire);
});

//affectation cellule tableau
boire[2]="tea"
console.log(boire);

// trier sort 
let trieboire = boire.sort();
console.log (trieboire);
boire.sort(function(a,b){
    return a-b; // a-b croissant b-a decroissant
});
console.log (boire);

// ajouter cellule
boire.push("jus d'orange");
console.log(boire);

//supprimer dernier element uniquement
boire.pop();
console.log(boire);

//inverser le tableau
boire.reverse();
console.log(boire);

//supprimer la 1er valeur et la garder 
let supprimer = boire.shift();
console.log(supprimer);
console.log(boire);

//ajoutter element au debut avec unshift
let nouveau = boire.unshift("jus citron","jus ananas");
console.log(nouveau); //affiche taille du tableau incluant les nouveaux elements ajoutees
console.log(boire);

//concatenation de tableau (rassembler 2 tableau en 1 ou 3 en 1 dans ce cas)
let plat = ["couscouse", "tajine", "riz"];
let messi=["couscouse", "tajines", "rizs"];
let totaltableau= boire.concat(plat,messi);
console.log(totaltableau); 

//prendre une tranche du tableau dans ce cas la tranche entre lindice 1 et 4 
let essay = boire.slice(1,4);
console.log(essay);

//affiche lindex de la cellule du tableau dans notre cas jus ananas est dans la cellule 1
let trouver=boire.indexOf("jus ananas");
console.log(trouver);

//.includes verifie si un element existe dans le  tableau retoune true ou false
let a=boire.includes("jus ananas");
console.log(a);

//somme des elements du tableau 
let number=[1,2,3,4,5,6,7,8];
let total = number.reduce(function(total,a){

    return total + a;
})
console.log(total);