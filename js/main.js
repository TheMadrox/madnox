const contenedorInicial = document.getElementById("contenedorContenedorInicial");
const contenedorConocenos = document.getElementById("contenedorConocenos");
const contenedorNuestrosPrecios = document.getElementById("contenedorNuestrosPrecios");
const contenedorContactanos = document.getElementById("contenedorContactanos");
const contenedorProyectos = document.getElementById("contenedorProyectos");
const contenedorContenedorInicial = document.getElementById("contenedorContenedorInicial");
const nav2 = document.getElementById("nav2");
const nav1 = document.getElementById("nav1");
const contenedorNavs = document.getElementById("contenedorNavs");
window.addEventListener("load",()=>{
    contenedorContenedorInicial.style.height = window.innerHeight - nav2.offsetHeight - nav1.offsetHeight + "px"; 
})
window.addEventListener("resize",()=>{
    contenedorContenedorInicial.style.height = window.innerHeight - nav2.offsetHeight - nav1.offsetHeight + "px";
})

window.addEventListener("scroll",()=>{
    if(window.pageYOffset <= nav1.offsetHeight){
        nav2.classList.remove("sticky");
        contenedorNavs.style.marginBottom = 0 + "px";
    }else{
        nav2.classList.add("sticky");
        contenedorNavs.style.marginBottom = nav2.offsetHeight + "px";
    }
})

const botonesNav = document.querySelectorAll("nav li button");
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
const thresholdMedium = 0.3;
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
    eliminarBotonNavActivo();
})

const barraConoceMas = document.getElementById("barraConoceMas");
barraConoceMas.addEventListener("click",()=>{
    var posicionContenedorConocenos = contenedorConocenos.offsetTop - (window.innerHeight * 0.1);
    window.scrollTo({top: posicionContenedorConocenos, behavior:"smooth"});
    eliminarBotonNavActivo();
    botonesNav[1].classList.add("activo");
})

//MENU DESPLEGABLE
const botonMenu = document.getElementById("botonMenu");
const menuDesplegable = document.getElementById("menuDesplegable");
const nav = document.querySelector("nav");

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


var posicionScrollInicial = window.pageYOffset;
addEventListener("scroll",()=>{
    posicionScrollActual = window.pageYOffset;
    if(posicionScrollActual > posicionScrollInicial){
        menuDesplegable.classList.remove("activo");
    }else if(posicionScrollActual < posicionScrollInicial){
        menuDesplegable.classList.add("activo");
    }
    posicionScrollInicial = posicionScrollActual;
})

//Efecto TypeWrite
var listaPalabras = ["emprendedores","médicos","estudiantes","músicos","escuelas"];
var espacioTypeWrite = document.getElementById("textoTypeWrite");
var numPalabras = 0;
var numLetras = 0;
var numTypeWriter = 0;

function typeWriteEffect(){
    if(numPalabras != listaPalabras.length){
        if(numLetras != listaPalabras[numPalabras].length){
            espacioTypeWrite.innerHTML += listaPalabras[numPalabras].charAt(numLetras);
            numLetras++;
            numTypeWriter = numLetras - 1;
            if(numLetras == listaPalabras[numPalabras].length){
                setTimeout(typeWriteEffect,1000);
            }else{
                setTimeout(typeWriteEffect, 200);
            }
        }else{
            if(numTypeWriter != -1){
                let nuevoTexto = espacioTypeWrite.innerHTML.substring(0,numTypeWriter);
                espacioTypeWrite.innerHTML = nuevoTexto;
                numTypeWriter--;
                setTimeout(typeWriteEffect,200);
            }else{
                if(numPalabras != listaPalabras.length){
                    numPalabras++;
                    numLetras = 0;
                    setTimeout(typeWriteEffect,500);
                }
            }
        }
    }else{
        numPalabras = 0;
        numLetras = 0;
        typeWriteEffect();
    }
}

window.onload = typeWriteEffect;

const botonesConocenos = document.querySelectorAll(".botonConocenos");
const infoConocenos = document.querySelectorAll(".infoConocenos");
const imagenConocenos = document.querySelectorAll(".imagenConocenos");
const textoConocenos = document.querySelectorAll(".textoConocenos");
const tituloConocenos = document.querySelectorAll(".tituloConocenos");
const titulo = document.querySelectorAll(".titulo");
function borrarBotonConocenos(){
    for(let i = 0; i < botonesConocenos.length; i++){
        if(botonesConocenos[i].classList.contains("activo")){
            botonesConocenos[i].classList.remove("activo");
            infoConocenos[i].classList.add("d-none");
            imagenConocenos[i].classList.add("d-none");
        }
    }
}

for(let i = 0; i < botonesConocenos.length; i++){
    botonesConocenos[i].addEventListener("click",()=>{
        borrarBotonConocenos();
        botonesConocenos[i].classList.add("activo");
        infoConocenos[i].classList.remove("d-none");
        imagenConocenos[i].classList.remove("d-none");
    })
}

var observadorContenido = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        if(entry.isIntersecting){
            if(!entry.target.classList.contains("animacion")){
                entry.target.classList.add("animacion");
            }
        }
    })
});

imagenConocenos.forEach((imagen)=>{
    observadorContenido.observe(imagen);
})
infoConocenos.forEach((info)=>{
    observadorContenido.observe(info);
})
textoConocenos.forEach((texto)=>{
    observadorContenido.observe(texto);
})
tituloConocenos.forEach((titulo)=>{
    observadorContenido.observe(titulo);
})
titulo.forEach((tituloOb)=>{
    observadorContenido.observe(tituloOb);
})


const seccionesBlancas = document.querySelectorAll(".seccionesBlancas");
const seccionesOscuras = document.querySelectorAll(".seccionesOscuras");
addEventListener("scroll",()=>{
    if((window.pageYOffset >= seccionesBlancas[0].offsetTop && window.pageYOffset < seccionesOscuras[1].offsetTop) || (window.pageYOffset >=seccionesBlancas[1].offsetTop)){
        nav2.classList.add("oscuro");
        menuDesplegable.classList.add("oscuro");
    }else{
        nav2.classList.remove("oscuro");
        menuDesplegable.classList.remove("oscuro");
    }
})

const botonEnviarFormulario = document.getElementById("botonEnviarFormulario");
const contenedorFormularioContacto = document.getElementById("contenedorFormularioContacto");
const xhrFormulario = new XMLHttpRequest();

xhrFormulario.open("POST","../php/formularioContacto.php");
xhrFormulario.onreadystatechange= ()=>{
    if(xhrFormulario.readyState == 4 && xhrFormulario.status== 200){
        contenedorFormularioContacto.innerHTML = xhrFormulario.responseText;
        const formulario = document.getElementById("formulario");
        formulario.addEventListener("submit",(event)=>{
            event.preventDefault();
            const xhr = new XMLHttpRequest();
            const formData = new FormData(formulario);
            xhr.open("POST","../php/uploadContact.php");
            xhr.send(formData);
            xhr.onreadystatechange = ()=>{
                if(xhr.readyState == 4 && xhr.status == 200){
                    formulario.reset();
                }
            }
        });
    }
}
xhrFormulario.send();
