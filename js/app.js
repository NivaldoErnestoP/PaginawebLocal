const navSlide = ()=>{

    var icono = document.getElementById("icono");
    
var body = document.querySelector(".body");

    var nav_menu=document.querySelector(".nav-menu");

    var img = document.querySelector(".img");
    

    icono.addEventListener("click",()=>{
        nav_menu.classList.toggle("nav-menu");   
    });


}

navSlide();
