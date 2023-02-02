
//1- Créez une promesse qui prend en paramètre un nombre et qui résout avec ce nombre multiplié par 2 après 2 secondes.
    const maPromesse1 = num1 => {  
        return new Promise((resolve,reject) => {  
            setTimeout(resolve, 2000 ,num1*2);
        })  
      }   

//2- Créez une promesse qui rejette avec une erreur "Erreur de division par zéro" si un utilisateur essaie de diviser un nombre par 0.      
const maPromesse2 = num2 => {  
    return new Promise((resolve,reject) => {  
        if(num2 === 0) {
        reject("Erreur de division par zéro") }
        else resolve(500/num2) ;
    })  
  }  
  maPromesse2(0).catch(error => console.log('Erreur :'+ error))

//3- Utilisez la méthode Promise.all() pour exécuter plusieurs promesses en parallèle.  
Promise.all([maPromesse1(1000), maPromesse2(100)]).then(valeur => { console.log('Resolu grace a promise.all:'+ valeur);}).catch(error => console.log('Erreur :'+ error));  

//4- Utilisez la méthode Promise.race() pour exécuter plusieurs promesses et retourner la première qui se résout.
Promise.race([maPromesse1(1000), maPromesse2(100)]).then((valeur) => { console.log('Premiere Resolu grace a Promise.race:' + valeur); });