/* area  de noticia*/
//const BtnTestoNoticia = document.querySelector("#tbn-texto-noticia");
//const TextList = document.querySelector("#texto-noticia");
//const UltimasNoticias = document.querySelector("#ultimas-noticias");
// const DataList = document.querySelector("#data-list");

//UltimasNoticias.addEventListener('submit', function(event){
//        event.preventDefault()
 //   const TextList = document.querySelector("#texto-noticia");

  //  console.log(TextList)
 
//    const DataList = document.querySelector("#data-list");

 //   console.log(DataList)
//})


/* area  de noticia*/
const UltimasNoticias = document.getElementById("ultimas-noticias");
const BtnTestoNoticia = document.getElementById("tbn-texto-noticia");
const TextList = document.getElementById("texto-noticia");
const DataList = document.getElementById("data-list");


const ImportNot = (text, date) => {

    const ContentData = document.createElement("h3")
    ContentData.classList.add("data-list")

    

    const ContentList = document.createAttribute("h4")
    ContentList.classList.add("text-list")

}

UltimasNoticias.addEventListener("submit", (e) => {
    e.preventDefault();
  
   const TextListValue = TextList.value;
   const DataListValue = DataList.value;

   if(TextListValue){
    console.log(TextListValue)
   }
   if(TextListValue){
    console.log(DataListValue)
   }
});



