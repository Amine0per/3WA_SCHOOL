
function FaireSport(sport, callback) { 
    alert("je commence " + sport + ".");
    setTimeout(callback , 3000);
    
    }
    
    function Termine(){
        alert("j'ai termine mon sport.");
    
    }
    
    FaireSport("Le sport est : ", Termine);
    

const success= false  ;
const  data = new Promise((resolve , reject)=> {
    if (success) {
        const results = {
            message:"tout est bon!"
        };
        resolve(results);
    } else {
        const results = {
            message:"tout est faux"

        };
        reject(results);
    }
});

data.then(success => {
    console.log(success.message);
}).catch(error => {
console.log(error.message);
})