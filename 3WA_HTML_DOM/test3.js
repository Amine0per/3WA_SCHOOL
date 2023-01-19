let checkButton = document.getElementById("button-check");
let checkboxes = document.querySelectorAll("input");

checkButton.addEventListener("click", checkAll);
function checkAll() {

    for (let i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = true; }

}

let uncheckButton = document.getElementById("button-uncheck");
uncheckButton.addEventListener("click", uncheckAll);
function uncheckAll() {
    for (let i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = false; }

}
