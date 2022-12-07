//AIRE DU TRIANGLE
const base = 5 ; 
const h = 15 ; 
const aire = (base*h) / 2;
console.log("l'aire du triangle est : " + aire);


//RESOLUTION EQUATION 2EME DEGRE 2x**2 + 4x + 5


let a = 2;
let b = 4;
let c = 5;
let delta = (b**2)-(4*a*c);


console.log("Le discriminant est egal a " + delta) ;

if(delta<0) 
{

    console.log("L'equation n'admet aucune solution");

}

else if(delta==0) {

let x = -b/(2*a)
    console.log("L'equation admet une seule solution l'inconnu x est egal a :" + x );
}

else if (delta>0)
{
    let x1 =(-b-Math.sqrt(delta))/2*a;
    let x2 =(-b+Math.sqrt(delta))/2*a;
    console.log("L'equation admet deux solution x1 qui est egal a : " + x1 +" et x2 qui est egal a : " + x2  );
    
} 