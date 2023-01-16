let table = document.querySelector("table");

for (let i = 0; i < table.rows.length; i++) {
  for (let j = 0; j < table.rows[i].cells.length; j++) {
    table.rows[i].cells[j].innerHTML = "Nouveau contenu";
  }
}

let livre = document.getElementById("zozor-books");

let job = document.createElement("li");

job.innerHTML= "zozor à pole emploi ";

let fortune =document.createElement("li");
fortune.innerHTML = "Zorzor fait fortune";

livre.insertBefore(job, livre.getElementsByTagName("li")[5]);
livre.appendChild(fortune); 