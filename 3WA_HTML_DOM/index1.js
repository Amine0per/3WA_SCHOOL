
document.querySelector('h1').textContent="1un autre titre grace au js";

document.querySelector('p').textContent="un autre paragraphe";

let documentDiv = document.querySelector('div');

documentDiv.querySelector('p').textContent="un autre paragraphe dans le div";

document.querySelector('p.bleu').style.color = 'blue';
document.querySelector('h1').style.color = 'green';



document.getElementById('p1').style.color = 'red';

let paras = document.getElementsByTagName('p');
for (e of paras) {
    
    e.style.color = 'red';}
    