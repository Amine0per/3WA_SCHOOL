


















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


//exercice1 24/12/2022

let semaines=['lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche'];
for (let i = 0; i < semaines.length; i++) {
    console.log(semaines[i]);
  }


  //exercice2 24/12/2022

  let condiments= ['Tomates','Oignons','Persil','Carottes','Choux','Poivrons'];
  for(let i=0; i < condiments.length;  i++){
      console.log(condiments[i])};
  //Q2
  condiments.pop();
  
  console.log(condiments);
  //Q3
  
  condiments.push("betterave");
  console.log(condiments);
  //Q4
  condiments.shift();
  console.log(condiments);
  //Q5
  condiments.unshift("Pomme de terre");
  console.log(condiments);


  //exercice 3
  var recettes = ['pizza', 'pates', 'poulet', 'salade', 'tajine', 'soupe', 'haricot'] ;

  for(i=recettes.length-1 ; i>recettes.length-5;i--)
  {console.log(recettes[i]);}
      // methode 2
      console.log(recettes.slice(3,7)); //slice +1
      console.log(recettes.slice(-4));

  for(i=0 ; i<=2 ; i++)
  {console.log(recettes[i]);}
   // methode 2
   console.log(recettes.slice(0,3));
   


  console.log(recettes.indexOf("salade"));

  recettes[2] = "Olive";
  console.log(recettes[2]);

 // exercice 4  multidimensional table
var p=[[1,2,1,24],[8,11,9,4],[7,0,7,27],[7,4,28,14],[3,10,26,7]];

 for(let i=0 ; i<p.length  ; i++) { //p.length egal au nombre de sous tableau
    for(let j=0 ; j<p[i].length ; j++) { //p[i].length egal au nombre delements de chaque sous tableau i 
        console.log(p[i][j])
 }
}

let totalq2 = [0,0,0,0,0]
for(let i=0 ; i<p.length ; i++) {
    for(let j=0 ; j<p[i].length ; j++) {
       totalq2[i]+=p[i][j] ; 

        
} }
console.log(totalq2);

let totalq3 = 0
for(let i=0 ; i<p.length ; i++) {
    for(let j=0 ; j<p[i].length ; j++) {
       totalq3+=p[i][j]

        
} }
console.log(totalq3);

for(let i=0 ; i<p.length ; i++) 
{
       console.log(p[i][0]);

        
} 


//exerice 4 deuxieme methode avec foreach
let v = [
    [1, 2, 1, 24],
    [8, 11, 9, 4],
    [7, 0, 7, 27],
    [7, 4, 28, 14],
    [3, 10, 26, 7],
  ];
  // Q1
  console.log("resultat question 1:");
  v.forEach((e)=> e.forEach((l) => console.log(l)));
  // Q2
  console.log("resultat question 2:");
  v.forEach((e) =>
    console.log(
      e.reduce(function (total, b) {
        return total + b;
      })
    )
  );
  // Q3
  console.log("resultat question 3:");
  let s = 0;
  v.forEach((e) => e.forEach((l) => (s = s + l)));
  console.log(s);
  // Q4
  console.log("resultat question 4:");
  v.forEach((e) => console.log(e[0]));



//exerice 5 M1 create table randomly
let tableq5 = [];
for (i=0; i<10; i++)
{
   tableq5[i] = i ;

}
console.log(tableq5);

let tableq6 = [];
 
 for (i=0; i<100; i++)
 {
    tableq6[i] = i ;

 }
 console.log(tableq6);


//exerice 5 M2 Mehtode push
let tableq7= [];
for (i=0; i<100; i++)
 {
    tableq7.push(i);
    

 }
     console.log(tableq7);


let tableq8= [];
for (i=0; i<10; i++)
 {
    tableq8.push(i);
    

 }
     console.log(tableq8);



 
  