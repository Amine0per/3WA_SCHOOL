
let cell = document.getElementsByTagName("td");
let cellhead = document.getElementsByTagName("th");
let texte = "entrez une nouvelle valeur";

for (let i=0 ; i<cell.length ; i++) {

    for (let i=0 ; i<cellhead.length ; i++) {
        cellhead[i].addEventListener("mouseover",function() {
            
            this.innerHTML =texte;
        })
    }
    cell[i].addEventListener("mouseover",function() {
        
        this.innerHTML =texte;
    })
}
