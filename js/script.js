// Preload 
var loader = document.getElementById ("preloader");
window.addEventListener("load", function(){
    loader.style.display = "none";
    document.body.style.overflow = "Unset";
});

// NAVBAR COLOR ACTIVE
const header = document.querySelector("header");
window.addEventListener("scroll",function(){
    header.classList.toggle("active", window.scrollY > 100); 
});


// NAVBAR RESPONSIVE PRESIONA EL BTN Y ABRE EL MENU
const toggle = document.querySelector('.btn-menu');
const links = document.querySelector('.navlinks');
const nav2 = document.querySelector('.nav');
const body = document.querySelector('body');

toggle.addEventListener('click', () => {
    nav2.classList.toggle('active');
    links.classList.toggle('active-links');
    nav2.classList.toggle('active-nav-color');
});

//  CLICK EN LINKS (CERRAR MENU Y ELEMINAR FONDO NAVBAR)
links.addEventListener('click', () => {    
    links.classList.remove('active-links');
    nav2.classList.remove('active-nav-color');
});