let btn= document.querySelector(".btn1");
let btn2= document.querySelector(".btn2");
let uul= document.querySelector(".ul1");
let i=2;
btn.onclick=function() {
    let li = document.createElement("li");
   
    li.innerHTML = i;
    i=i*2;
    uul.appendChild(li);
}

btn2.onclick=function() {
    uul.removeChild(uul.lastElementChild);
    i=i/2;
}
