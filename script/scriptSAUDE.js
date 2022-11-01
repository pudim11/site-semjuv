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
}