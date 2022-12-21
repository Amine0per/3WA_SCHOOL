


















// EXERCICE 4
let pays = "maroc";
let capitale = "rabat";

console.log("<< La capitale du "+ pays + " est : " +capitale +" >>" ) ;
console.log(`               << La capitale du  ${pays} est : ${capitale} >>  `) ;



// EXERCICE 5
var payss = `France` ;
var prixduproduit = 2500 ;

console.log(typeof payss ) ;
console.log(typeof prixduproduit ) ;



//Exerice

let variable = 2 ;
if( typeof variable == 'string')
{console.log("La valeur est une chaine de caractere");}
else {console.log("La valeur est un nombre");}


switch (variable)
{case 2 : case '2' : console.log("La valeur est superieur a 1") ; 
case 1 : case '1' : console.log("La valeur est superieur a 0") ; break; 
default : console.log("La valeur est egale a 0") ; }


// EXERCICE 3

let a = 5 ;
let b =-2 ;
let c = 6 ;
if (a > b && a > c)  
{console.log("la variable la plus grande est a "+ a) ;}
else if (b > a && b > c)  
{console.log("la variable la plus grande est b "+ b) ;}
else if (c > a && c > b)  
{console.log("la variable la plus grande est c "+ c) ;}


// EXERCICE 2

for(let i=0 ;i<=20 ; i++)
{
if (i%2!==0){
console.log(i + " est un nombre impair" ) ;
} }

let j=0;
while (j<=20)
{if (j%2==0) {
    console.log(j + " est un nombre pair" );}
j++ ;
}

// EXERCICE 4
let e=0;

for(let i=0 ;i<=10;i++)
{
  e= e+i ;
 }
 console.log(e);


 let k=0;
 let m=0;

 while (m<=10)
 {
     k= k+m; m++; 
 }
 console.log(k);


// EXERCICE fonction somme

function somme(u,v)
{
   if (typeof u=="number" && typeof v=="number") {
   return u+v ; }
   else return "veuillez entrer des chiffres" ;
}

console.log( somme(5,4) );

console.log( somme(5,"4") );


//exercice1 minutes secondes

function conversion(minutes)
{
    if (typeof minutes=="number") 
{    return minutes*60;   }
else return "veuillez entrer des chiffres" ;
}
console.log( conversion(10));


//function incerementation
function incerementation(n)
{
    return ++n ;
}
console.log(incerementation(4));    

//function SurfaceTriangle
function SurfaceTriangle(base,hauteur)
{
   return (base*hauteur)/2 ;
}
console.log ( SurfaceTriangle(100,5));

//fonction LePlusGrand
function LePlusGrand(num1,num2,num3)
{
  if (num1>num2 && num1>num3)
     return num1;

    else if  (num2>num1 && num2>num3)
        return num2;

    else return num3;

}
console.log ( LePlusGrand(8,100,4));


//fonction LePlusGrand avec Math.max
function LePlusGrand(num1,num2,num3)
{

    return  Math.max(num1,num2,num3);

}
console.log ( LePlusGrand(20,16,200));

//fonction inversion chaine caractere
function inversion(chaine) 
{

    let NvelleChaine = "";
    for (let i = chaine.length - 1; i >= 0; i--) 
    {
        NvelleChaine= NvelleChaine + chaine[i];
    }
    return NvelleChaine;

}

console.log ( inversion("bonjour"));

let macron = "france";
console.log ( macron.length);
console.log(macron[0]);
console.log(macron[1]);

//fonction inversion chaine caractere methode 2
function reverseString(string) {
    return string.split('').reverse().join('');
}
console.log(reverseString("hello"));


//fonction puissance
function puissance(num,puis)
{
   return Math.pow(num,puis) ;
}
console.log(puissance(5,2));



