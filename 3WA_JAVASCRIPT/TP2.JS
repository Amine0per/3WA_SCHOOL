


















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