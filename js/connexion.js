 
const btnIns=document.getElementById("ins");
const btnAnn=document.getElementById("ann");
const btnCon=document.getElementById("conn");
const partf2=document.getElementById("f2");
const partf1=document.getElementById("f1");
const body=document.querySelector("body");
// bouton gerant l'inscription\
const overlay=document.querySelector(".overlay");
//par defaut
partf2.classList.add("act");
partf1.classList.add("hit");

btnIns.addEventListener('click',()=>{

      partf2.classList.remove("act");
      partf2.classList.add("hit");

      partf1.classList.remove("hit");
      partf1.classList.add("act");
});
overlay.addEventListener('click',()=>{
      window.location.href="index.php";
});
