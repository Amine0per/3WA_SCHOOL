//ex
//Q1
const maPromesse1 = new Promise((resolve, reject) => {
  setTimeout(resolve, 2000, "succes");
});
//Q2
maPromesse1.then((valeur) => {
  console.log(valeur)})

//Q3
const maPromesse2 = new Promise((resolve, reject) => {
  setTimeout(reject, 2000, "echec");
});
//Q4
maPromesse2.catch((error) => {
  console.log(error)})
//Q5
Promise.all([maPromesse1, maPromesse2]).then(valeurs => { console.log(valeurs);} ).catch(error => {console.log(error)});

//Q6
Promise.race([maPromesse1, maPromesse2]).then((valeur) => { console.log(valeur); });