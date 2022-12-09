

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

