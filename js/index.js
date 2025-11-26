
const scrollhaut = document.querySelector(".nav-haut");
const bare=document.querySelectorAll(".btn")
const scrollList = document.querySelector(".nav-list");
const navbare = document.querySelector(".nav-bare");
const navbas = document.querySelector(".nav-bas");

const  bare_menu=document.getElementById("menu-id");

 for(let i=0; i < bare.length; i++){
        bare[i].addEventListener('cick',(e)=>{
              e.preventDefault();
              bare[i].classList.add("active"); 
        });
 }
document.addEventListener("scroll", (e) => {
    e.preventDefault();

    if (window.scrollY > 80) {
        navbare.classList.add("sticky");
        scrollhaut.style.backgroundColor = "#ffff";
        navbas.style.backgroundColor = "#7b7a7aff";
    } else {
        navbare.classList.remove("sticky");
        navbare.style.backgroundColor = "transparent";
        navbas.style.backgroundColor = "rgba(0,0,0,0.5)";
    }
     navbare.style.zIndex=3;
});

