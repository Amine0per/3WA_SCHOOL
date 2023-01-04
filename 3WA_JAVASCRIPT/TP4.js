// Exercice 1 4/01/2023
// Q1 
const person ={

    nom : "amine" ,
    prenom : "taoufiq",
    age : 30 ,
    ville : "Marrakech" ,
    presentation: function()   { console.log("Bonjour, mon nom est "+ person.nom + " " +person.prenom +  " et j'ai " + person.age+ " ans."); } ,
    etudiant : Boolean(0) ,
    anneetude : 5 
    
};
//Q2
function afficherpersonne(p) {
    console.log(Object.keys(p))
} ;

 afficherpersonne(person) ;

 // Q3 
const animal ={

    nom : "max" ,
    espece : "chien" ,
    cri : "aboie"
};
//Q4
function faireDuBruit(a) {
    console.log(a.cri)
}
faireDuBruit(animal) ;
//Q5

const voiture ={

    marque : "peugeot" ,
    modele: "308" ,
    annee : 2017
};
//Q6 + Q7
let anneeMIN = 2020 ; 
function afficherVoiture(v,an){
    console.log(Object.keys(v)) ;
 if ( v.annee < an ) {console.log("la voiture n'est pas recente"); }
 else {console.log("la voiture est recente");}
}
afficherVoiture(voiture,anneeMIN);
//Q8
const etudiant ={

    nom : "amine" ,
    age: 30 ,
    notes : [17,16,18,15,19]
};
//Q9
function afficherMoyenne(e){
    let moyenne = 0;
    for(let i=0 ; i< e.notes.length ; i++){
     moyenne += e.notes[i] ;
}
moyenne = moyenne / e.notes.length ;
console.log(moyenne) ; // 17
}
afficherMoyenne(etudiant);
//Q10 

function ajouterNote(e,nouv) {
    e.notes.push(nouv)
    let moyenne =0 ;
    e.notes.forEach((e) => (moyenne = moyenne + e));
    moyenne =moyenne / e.notes.length ;
  console.log(moyenne); //16.166
    };
ajouterNote(etudiant,12);




//exercice 2
//Q1 Q2
const personne2 = {
    nom : "yassine" ,
    prenom : "mouad" ,
    age : 26 ,
    presentation: function()   { console.log("Bonjour, mon nom est "+ personne2.nom + " " +personne2.prenom +  " et j'ai " + personne2.age+ " ans.") },
    etudiant : Boolean(1) ,
    anneetude : 6 }


//Q3
function presentationPersonne(p2) {
    p2.presentation()
    if(p2.etudiant === true) console.log("etudiant") ;
    else console.log("non etudiant") ;
}


//Q4 + Q5
const personne3 = {
    nom : "omar" ,
    prenom : "mehdi" ,
    age : 28 ,
    presentation: function()   { console.log("Bonjour, mon nom est "+ personne3.nom + " " +personne3.prenom +  " et j'ai " + personne3.age+ " ans.")} ,
    etudiant : Boolean(1) ,
    anneetude : 4 
}
let tab1 = [personne2 ,personne3, person] ;


tab1.forEach((e) => presentationPersonne(e) );

//Q6

function totalannee(tab) {
   
let somme = 0 ;
tab.forEach((p) => (p.etudiant === true ? (somme+= p.anneetude) : null))
console.log(somme);
}
totalannee(tab1);