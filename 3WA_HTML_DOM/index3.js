let output = document.getElementById("output");
if (output) {
    cells = output.getElementsByTagName("td")
    for (let i = 0 , c=cells.length ; i < c; i++) {
        cells[i].onclick = function() {
            if (this.getAttribute("data-state")) return ;
            
            let text = this.innerHTML ;   // on recupere les contenu de la cellule
            let input = document.createElement("input") ; // on a cree le input 
            input.value = text ; 
            input.type= "text" ;

            this.innerHTML = ' ' ; // on efface le contenu de la cellule
            this.appendChild(input) ; // on place le input declarer en haut de la cellule 
            this.setAttribute("data-state", "edit") ; // on est en train dediter la cellule 
            input.focus();
            input.onblur = function() {

                this.parentNode.removeAttribute("data-state")
                this.parentNode.innerHTML = this.value ;
            };
        }
    }
}
