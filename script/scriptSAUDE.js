/*

const BtnDsts = document.getElementById("btn-DSTs")
const TextDsts = document.getElementById("text-DSts")




function BtnActiveDsts(){
   document.getElementById("text-DSts").style.color = "red";

}

function BtnActiveDepressao(){
    document.getElementById("text-depressao").style.color = "blue";
}
function BtnActiveDoencas(){
    document.getElementById("text-doencas").style.color = "green";
}*/

const BtnDsts = document.querySelector("#btn-DSTs")
const TextDsts = document.querySelector("#text-DSts")
const AreaTextDepre = document.querySelector("#area-text-depresao")



BtnDsts.addEventListener('click', () => {
    AreaTextDepre.classList.toggle('animar');
  })


function animando(){
    TextDsts.classList.toggle("animar");
}