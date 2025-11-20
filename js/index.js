
const bouton=document.querySelectorAll(".btn");

function recuperID( nom){
   
}
let id;
for(let i=0; i < bouton.length; i++){
    bouton[i].addEventListener('click',(e)=>{
        e.preventDefault();
         id=bouton[i].getAttribute("value");
         window.location.href="main.php?id="+id;
    })
}