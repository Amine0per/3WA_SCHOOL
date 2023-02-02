

function FaireSport(sport, callback) { 
    alert("je commence " + sport + ".");
    setTimeout(callback , 3000);
    
    }
    
    function Termine(){
        alert("j'ai termine mon sport.");
    
    }
    
    FaireSport("Football", Termine);
    





async function success() {

    const results = {message:"hello world"};
    return results;

};





function success() {
    const results = {message:"tout est bon"};
    return Promise.resolve(results);
    
    };
function fail() {
const results = {message:"tout est faux"};
return Promise.reject(results);

};





const maPromesse = new promise ((resolve, reject) => { 
    setTimeout(() => {
        
     resolve("Ma promesse a ete resolu avec succes");
} , 5000)
});

maPromesse.then( results => {   console.log(results);   })





const myPromise = fetch('https://google.com/%27')
.then(Response => Response.json())
.then(data => {
  console.log(data);
  return data.title;
})
.catch(Error=>console.Error(Error) );




//recuperation requete reseaux et mettre dans fichier json
async function example(){
    let results = await fetch('https://google.com/')
    let data = await results.json();
    console.log(data);
}

const maPromesse1 = new Promise ((resolve, reject) => { 
    setTimeout(() => {
        
     resolve("promesse 1 resolue");
} , 1500);
});

const maPromesse2 = new Promise ((resolve, reject) => { 
    setTimeout(() => {
        
     resolve("promesse 2 resolue");
} , 2000);
});

const maPromesse3 = new Promise ((resolve, reject) => { 
    setTimeout(() => {
        
     resolve("promesse 3 resolue");
} , 2500);
});
Promise.all([maPromesse1, maPromesse2, maPromesse3])
.then(values => {
    console.log(values);
})
.catch(error => console.error(error));
