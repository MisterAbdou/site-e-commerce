
const bouton = document.querySelectorAll(".btn");
const scrollhaut = document.querySelector(".nav-haut");
const scrollList = document.querySelector(".nav-list");
const navbare = document.querySelector(".nav-bare");

document.addEventListener("scroll", (e) => {
    // e.preventDefault();

    if (window.scrollY > 60) {
        navbare.classList.remove("sticky");
        navbare.style.backgroundColor = "#e7e6e6ff";
        scrollList.style.backgroundColor = "#0b0b0bff";
    } else {
        navbare.classList.add("sticky");
        navbare.style.backgroundColor = "transparent";
        scrollList.style.backgroundColor = "rgba(0,0,0,0.5)";
    }
     navbare.style.zIndex=3;
});

let id;
let b;
for(let i=0; i < bouton.length; i++){
    bouton[i].addEventListener('click',(e)=>{
        //  e.preventDefault();

         // Enlever la classe active de tous les boutons
          bouton.forEach(btn => btn.classList.remove("active"));
          bouton[i].classList.add("active");
         id=bouton[i].getAttribute("value");
         window.location.href="main.php?id="+id;
    })
}

