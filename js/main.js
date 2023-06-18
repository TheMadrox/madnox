const contenedorInicial = document.getElementById("contenedorContenedorInicial");
const contenedorConocenos = document.getElementById("contenedorConocenos");
const contenedorNuestrosPrecios = document.getElementById("contenedorNuestrosPrecios");
const contenedorContactanos = document.getElementById("contenedorContactanos");
const contenedorProyectos = document.getElementById("contenedorProyectos");

window.addEventListener("load",()=>{
    contenedorInicial.style.height= window.innerHeight + "px";
})
window.addEventListener("resize",()=>{
    contenedorInicial.style.height= window.innerHeight + "px";
})


const botonesNav = document.querySelectorAll("nav li a");
for(let i = 0; i<botonesNav.length; i++){
    botonesNav[i].addEventListener("click",()=>{
        eliminarBotonNavActivo();
        switch(i){
            case 0:
                var posicionContenedorInicial = contenedorInicial.offsetTop - (window.innerHeight * 0.1);
                window.scrollTo({top:posicionContenedorInicial, behavior:"smooth"});
                break;
            case 1:
                var posicionContenedorConocenos = contenedorConocenos.offsetTop - (window.innerHeight * 0.1);
                window.scrollTo({top:posicionContenedorConocenos, behavior:"smooth"});
                break;
            case 2:
                var posicionContenedorProyectos = contenedorProyectos.offsetTop - (window.innerHeight * 0.1);
                window.scrollTo({top:posicionContenedorProyectos,behavior:"smooth"});
                break;
            case 3:
                var posicionContenedorNuestrosPrecios = contenedorNuestrosPrecios.offsetTop - (window.innerHeight * 0.1);
                window.scrollTo({top:posicionContenedorNuestrosPrecios, behavior:"smooth"});
                break;
        }
        botonesNav[i].classList.add("activo");
    })
}

function eliminarBotonNavActivo(){
    for(let i= 0; i < botonesNav.length;i++){
        if(botonesNav[i].classList.contains("activo")){
            botonesNav[i].classList.remove("activo");
        }
    }
}



const thresholdSmall = 0.2;
const thresholdMedium = 0.7;
function getThreshold(){
    if(window.innerWidth < 768){
        return thresholdSmall;
    }else{
        return thresholdMedium;
    }
} 
const contenedorContenido = document.querySelectorAll(".contenedorContenido");
const arrayContenedorContenido = Array.from(contenedorContenido);
const observadorTitulos = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        if(entry.isIntersecting){
            eliminarBotonNavActivo();
            var indexPru = arrayContenedorContenido.indexOf(entry.target);
            if(indexPru!=4){
                botonesNav[indexPru].classList.add("activo");
            }
        }
    });
},{threshold:getThreshold()});
arrayContenedorContenido.forEach((contenedor)=>{
    observadorTitulos.observe(contenedor);
})



const botonSubir = document.getElementById("botonSubir");
botonSubir.addEventListener("click",()=>{
    contenedorInicial.scrollIntoView({behavior:"smooth"});
})

const botonContactanosNav = document.getElementById("botonContactanosNav");
botonContactanosNav.addEventListener("click",()=>{
    var posicionContenedorContactanos = contenedorContactanos.offsetTop - (window.innerHeight * 0.1);
    window.scrollTo({top: posicionContenedorContactanos, behavior:"smooth"});
})

const barraConoceMas = document.getElementById("barraConoceMas");
barraConoceMas.addEventListener("click",()=>{
    var posicionContenedorConocenos = contenedorConocenos.offsetTop - (window.innerHeight * 0.1);
    window.scrollTo({top: posicionContenedorConocenos, behavior:"smooth"});
})

//MENU DESPLEGABLE
const botonMenu = document.getElementById("botonMenu");
const menuDesplegable = document.getElementById("menuDesplegable");
const nav = document.querySelector("nav");

/* botonMenu.addEventListener("click",()=>{
    if(menuDesplegable.classList.contains("d-none")){
        menuDesplegable.classList.remove("d-none");
        menuDesplegable.classList.add("d-flex");
        menuDesplegable.classList.add("desplegado");
    }else{
        menuDesplegable.classList.remove("d-flex");
        menuDesplegable.classList.add("d-none");
        menuDesplegable.classList.remove("desplegado");
    }
})
 */
function screenMenuDesplegable(){
    menuDesplegable.classList.remove("activo");
    if(window.innerWidth < 768){
        menuDesplegable.classList.add("desplegado");
    }else{
        menuDesplegable.classList.remove("desplegado");
    }
}

botonMenu.addEventListener("click",()=>{
    if(!menuDesplegable.classList.contains("activo")){
        menuDesplegable.classList.add("activo");
    }else{
        menuDesplegable.classList.remove("activo");
    }
})

var resizeTime;
addEventListener("load",screenMenuDesplegable());
addEventListener("resize",()=>{
    cancelAnimationFrame(resizeTime);
    resizeTime=requestAnimationFrame(screenMenuDesplegable);
});

addEventListener("scroll",()=>{

})