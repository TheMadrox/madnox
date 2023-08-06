window.onload = function(){
    const loadCharge = document.getElementById("loadCharge");
    loadCharge.classList.add("loaded");
}
//history.scrollRestoration = "manual";
const fontObserver = new FontFaceObserver("Stark","TheNextFont");
Promise.all(fontObserver.load()).then(function(){
    console.log("ESTAN CARGADAS");
});
const contenedorContenedorInicial = document.getElementById("contenedorContenedorInicial");
const nav2 = document.getElementById("nav2");
const nav1 = document.getElementById("nav1");
const contenedorNavs = document.getElementById("contenedorNavs");
const contenedorContenido = document.querySelectorAll(".contenedorContenido");
const contenedorVideoInicial = document.getElementById("contenedorVideoInicial");
window.addEventListener("load",()=>{
     if(window.innerHeight > 520){
        contenedorContenedorInicial.style.height = window.innerHeight - nav2.offsetHeight - nav1.offsetHeight + "px";
     }else{
        contenedorContenedorInicial.style.height = "auto";
     }
    contenedorVideoInicial.style.height = contenedorContenedorInicial.style.height + nav2.offsetHeight + nav1.offsetHeight + "px";
    contenedorContenedorInicial.style.visibility = "visible";
})
window.addEventListener("resize",()=>{
    setTimeout(()=>{
        contenedorContenedorInicial.style.height = "auto";
        if(window.innerHeight > 520){
            contenedorContenedorInicial.style.height = window.innerHeight - nav2.offsetHeight - nav1.offsetHeight + "px";
        }
        contenedorVideoInicial.style.height = contenedorContenedorInicial.offsetHeight + nav2.offsetHeight + nav1.offsetHeight + "px";
    },200);
})

if(window.pageYOffset >= nav2.offsetTop){
    nav2.classList.add("sticky");
}
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
        if(i != 0){
            window.scrollTo({top:contenedorContenido[i].offsetTop + 1,behavior:"smooth"});
        }else{
            window.scrollTo({top:0, behavior: "smooth"});
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
const parteInicialContactanos = document.getElementById("parteInicialContactanos");
for(let i = 0; i < contenedorContenido.length; i++ ){
    if(i != 0 && i != contenedorContenido.length - 1){
        contenedorContenido[i].style.paddingTop = nav2.offsetHeight + "px";
    }
}
parteInicialContactanos.style.paddingTop = nav2.offsetHeight + "px";

const botonSubir = document.getElementById("botonSubir");
botonSubir.addEventListener("click",()=>{
    window.scrollTo({top:0,behavior:"smooth"});
})

const botonContactanosNav = document.getElementById("botonContactanosNav");
botonContactanosNav.addEventListener("click",()=>{
    eliminarBotonNavActivo();
    window.scrollTo({top:contenedorContenido[contenedorContenido.length - 1].offsetTop + 1, behavior:"smooth"});
})

const barraConoceMas = document.getElementById("barraConoceMas");
barraConoceMas.addEventListener("click",()=>{
    window.scrollTo({top:contenedorContenido[1].offsetTop, behavior:"smooth"});
})
window.addEventListener("scroll",()=>{
    contenedorContenido.forEach((contenedor,index)=>{
        if(index != 0){
            const rect = contenedor.getBoundingClientRect();
            if(rect.top <= 0 && window.pageYOffset <= contenedor.offsetHeight + contenedor.offsetTop){
                eliminarBotonNavActivo();
                if(index!=4){
                    const idSeccionActiva = contenedor.getAttribute("data-seccion");
                    document.querySelector('#menuDesplegable button[data-seccion="'+ idSeccionActiva +'"]').classList.add("activo");
                }
            }
        }else if(index == 0){
            if(window.pageYOffset <= contenedorVideoInicial.offsetHeight + contenedorVideoInicial.offsetTop){
                eliminarBotonNavActivo();
                botonesNav[0].classList.add("activo");
            }
        }
    })
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

typeWriteEffect();

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


//----------------------ANIMACIONES DE LA PAGINA-------------------------------
const subtextoConocenos = document.getElementById("subtextoConocenos");
const tarjetaQueHacemos = document.querySelectorAll(".tarjetaQueHacemos");

var observadorContenido = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        if(entry.isIntersecting){
            if(!entry.target.classList.contains("animacion")){
                entry.target.classList.add("animacion");
                observadorContenido.unobserve(entry.target);
            }
        }
    })
},{threshold:0,rootMargin:"-100px 0px"});

titulo.forEach((tituloOb)=>{
    observadorContenido.observe(tituloOb);
})
tarjetaQueHacemos.forEach((tarjeta,index)=>{
    tarjeta.style.animationDelay = index * .4 + "s";
    observadorContenido.observe(tarjeta);
})

observadorContenido.observe(subtextoConocenos);

const rowHerramientas = document.querySelectorAll(".rowHerramientas");

rowHerramientas.forEach((herramienta, index) =>{
    setTimeout(()=>{
        observadorContenido.observe(herramienta);
    }, index * 500);
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


const tarjetaPrecio = document.querySelectorAll(".tarjetaPrecio");

tarjetaPrecio.forEach(tarjeta=>{
    tarjeta.addEventListener("mouseenter",()=>{
        tarjetaPrecio.forEach(tarjetaBorrar =>{
            if(tarjetaBorrar.classList.contains("activa")){
                tarjetaBorrar.classList.remove("activa");
            }
        })
        tarjeta.classList.add("activa");
    })
})