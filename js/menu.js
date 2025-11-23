const getBloc=document.querySelectorAll(".bloc");
const getInd=document.querySelector(".individual");
const getProd=document.querySelector(".c2");



getInd.classList.add("masquer");
getProd.classList.add("fixer");
   for(let i=0;i< getBloc.length;i++){
           getBloc[i].classList.add("bloque");
       }

function openDetails(){
       getInd.classList.remove("masquer");
       getInd.classList.add("fixer");
       getProd.classList.add("masquer");
       for(let i=0;i< getBloc.length;i++){
           getBloc[i].classList.remove("bloque");
           getBloc[i].classList.add("masquer");
       }
       
}

for(let i=0 ; i < getBloc.length ;i++){
 getBloc[i].addEventListener('click',(e)=>{
      e.preventDefault();
         openDetails();
      
});
}
