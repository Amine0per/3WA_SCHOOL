
// declaration variable et constante

let nom = "Amine" ;
const age = 30 ;
 

// affichage sur console 
console. log (nom + " a " + age + " ans ") ;  




// modeles litteraux concatenation simple
const ville = "Marrakech" ;
console.log ("j'habite dans la ville de " + ville) ;




// modeles litteraux  interpolation de chaines en string
console.log (`je suis en train
    de faire
            un test d'interpolation de chaines
                 tout simplement`);


const restaurant = "kfc" ;
console.log(`Mon restaurant favori est : ${restaurant} !`);


// iUpLowerCase
const cafe = "Coffee Shop" ;
console.log(cafe.toLowerCase() );
console.log(cafe.toUpperCase() );

//repeat
const Messi = "vite";
console.log("messi cour" + Messi.repeat(5) );


//remplacer
const maison = "ma maison a la couleur rouge";
const newmaison = maison.replace("rouge" , "bleu");

console.log (maison);
console.log (newmaison);


//rechercher
console.log (maison.includes("rouge"));
console.log (maison.includes("noir"));

