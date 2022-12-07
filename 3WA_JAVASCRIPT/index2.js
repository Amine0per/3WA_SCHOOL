
//addition

let a = 4 ;
let b = 5 ;
let somme = a + b ;
console.log("le resultat est " + somme);


//incrementation

a++;

console.log(a) ;



//affectation par addition
a+=20 ;
console.log(a) ;


//soustraction

let c = 8;
let d = 9;
let soustraction = c - d ;
console.log(soustraction) ;


//decrementation

c--;

console.log(c) ;

//affectation par soustraction
c-=2 ;
console.log(c) ;


//multiplication

let e = 2 ;
let f = 4 ;
let mul = 4 * 2 ;
console.log(mul) ; 

//affectation par multi
c*=2 ;
console.log(c) ;

//division
let g = 75 ;
let h = 5 ;
let div = g / h ;
console.log(div) ;


//affectation par division
g/=2;
console.log(g) ;


//modulo
let i = 23 ;
let j = 2 ; 
let mod = i%j ; 
console.log(mod) ;

//affectation modulo
i%=3 ;
console.log(i) ;

//ordre des operations
const x = 5*3+10/2;

console.log(x) ;


//fonction Math pi 
const pi = Math.PI ; 
console.log(pi) ;

//valeur absolue 
let k =6;
let l = -7 ;

console.log(Math.abs(k)) ;
console.log(Math.abs(l)) ;


//plafond
const dec = 13.67 ; 
const  arrondi = Math.ceil(dec);
console.log(arrondi) ;

//logarithme
const nombre = Math.log(1);
console.log(nombre);


//maximum et minimum 
const maximum = Math.max(5 , 14 , 24 , 90 , 59 , 29 );
const minimum = Math.min(5 , 14 , 24 , 90 , 59 , 29 );
console.log(maximum);
console.log(minimum);


//Racine carre 
const carre = Math.sqrt(49) ;
console.log(carre);


// operateur d'egalite
console.log(5==5);
console.log(5=='5');

// operateur strictement egal
console.log(5===5);
console.log(5==='5');


// operateur d'inegalite
console.log(5!==5);
console.log(5!==8);

// operateur superiorite inferiorite
console.log(6>2);
console.log(8<7);

// operateur superiorite inferiorite ou egal
console.log(6>=6);
console.log(8<7);


// operateur conditionel ;
const couscous =20 ;
if (couscous >= 30)
{
    console.log("on mange le couscous")
} 
else if(couscous <= 20){
    console.log("je peux te servir pour 20dhs")
}
else{
    console.log("je ne peux rien faire pour toi")
}


