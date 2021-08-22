const navSlide = ()=>{

    var icono = document.getElementById("icono");
    
var body = document.querySelector(".body");

    var nav_menu=document.querySelector(".nav-menu");

    var img = document.querySelector(".img");
    


    img.addEventListener("mouseover",()=>{
        body.style.overflow="visible";

    });
    icono.addEventListener("click",()=>{
        nav_menu.classList.toggle("nav-menu");   
    });

    icono.addEventListener("click", ()=>{
        body.style.overflow="hidden";
    });




}

navSlide();