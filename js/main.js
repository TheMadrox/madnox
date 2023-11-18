/* window.onload = function(){
    const loadCharge = document.getElementById("loadCharge");
    loadCharge.classList.add("loaded");
} */
//history.scrollRestoration = "manual";
/* function cargarFuentes(nombre,tipo){
    return new Promise((resolve,reject)=>{
        const fuente = new FontFace(nombre, `url(/src/fonts/${nombre}.${tipo})`);
        fuente.load().then((fuenteCargada)=>{
            document.fonts.add(fuenteCargada);
            resolve();
        }).catch((error)=>{
            reject(error);
        })
    })
}*/

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
const nav2Background = document.getElementById("nav2-background");

function screenMenuDesplegable(){
    menuDesplegable.classList.remove("activo");
    nav2Background.classList.remove("scroll-activo");
    if(window.innerWidth < 768){
        menuDesplegable.classList.add("desplegado");
    }else{
        menuDesplegable.classList.remove("desplegado");
    }
}

botonMenu.addEventListener("click",()=>{
    if(!menuDesplegable.classList.contains("activo")){
        menuDesplegable.classList.add("activo");
        nav2Background.classList.add("scroll-activo");
    }else{
        menuDesplegable.classList.remove("activo");
        nav2Background.classList.remove("scroll-activo");
    }
})
const seccionesBlancas = document.querySelectorAll(".seccionesBlancas");
const seccionesOscuras = document.querySelectorAll(".seccionesOscuras");
addEventListener("scroll",()=>{
    if((window.pageYOffset >= seccionesBlancas[0].offsetTop && window.pageYOffset < seccionesOscuras[1].offsetTop) || (window.pageYOffset >=seccionesBlancas[1].offsetTop)){
        nav2Background.classList.add("oscuro");
    }else{
        nav2Background.classList.remove("oscuro");
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
    const posicionScrollActual = window.pageYOffset;
    if(menuDesplegable.classList.contains("desplegado")){
        if(posicionScrollActual > posicionScrollInicial){
            menuDesplegable.classList.remove("activo");
            nav2Background.classList.remove("scroll-activo");
        }else if(posicionScrollActual < posicionScrollInicial){
            menuDesplegable.classList.add("activo");
            nav2Background.classList.add("scroll-activo");
        }
    }
    posicionScrollInicial = posicionScrollActual;
})

//Efecto TypeWrite
var listaPalabras = ["empresarios","médicos","influencers","restaurantes","artistas","escuelas","tiendas","hoteles"];
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
                setTimeout(typeWriteEffect,700);
            }else{
                setTimeout(typeWriteEffect, 150);
            }
        }else{
            if(numTypeWriter != -1){
                let nuevoTexto = espacioTypeWrite.innerHTML.substring(0,numTypeWriter);
                espacioTypeWrite.innerHTML = nuevoTexto;
                numTypeWriter--;
                setTimeout(typeWriteEffect,100);
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




const botonEnviarFormulario = document.getElementById("botonEnviarFormulario");
const contenedorFormularioContacto = document.getElementById("contenedorFormularioContacto");
const xhrFormulario = new XMLHttpRequest();
const modalFormulario = document.getElementById("modalFormulario");

xhrFormulario.open("POST","../php/formularioContacto.php");
xhrFormulario.onreadystatechange= ()=>{
    if(xhrFormulario.readyState == 4 && xhrFormulario.status== 200){
        contenedorFormularioContacto.innerHTML = xhrFormulario.responseText;
        const formulario = document.getElementById("formulario");
        const telefono = document.getElementById("telefono");
        const alertaValidacion = formulario.querySelectorAll(".alertaValidacion");
        const validadoIconos = formulario.querySelectorAll(".validado");
        
        function buscarAlerta(busqueda){
            alertaValidacion.forEach(alerta=>{
                if(alerta.classList.contains(busqueda)){
                    alerta.classList.add("activo");
                }
            })
        }
        function borrarAlerta(busqueda){
            if(busqueda!=null){
                alertaValidacion.forEach(alerta=>{
                    if(alerta.classList.contains(busqueda)){
                        alerta.classList.remove("activo");
                    }
                })
            }else{
                alertaValidacion.forEach(alerta=>{
                    alerta.classList.remove("activo");
                })
            }
        }
        function moverAlerta(){
            for(let i=0; i <= alertaValidacion.length; i++){
                if(alertaValidacion[i].classList.contains("activo")){
                    window.scrollTo({top:alertaValidacion[i].offsetTop - 128, behavior:"smooth"});
                    break;
                }
            }
        }
        function mostrarVerificado(busqueda){
            validadoIconos.forEach(validado=>{
                if(validado.classList.contains(busqueda)){
                    validado.classList.add("activo");
                }
            })
        }
        function borrarVerificado(busqueda){
            console.log(busqueda);
            if(busqueda!= null){
                validadoIconos.forEach(validado=>{
                    if(validado.classList.contains(busqueda)){
                        validado.classList.remove("activo");
                    }
                })
            }else{
                validadoIconos.forEach(validado=>{
                    if(!validado.classList.contains("-paquete") && !validado.classList.contains("-negocio")){
                        validado.classList.remove("activo");
                    }
                })
            }
        }

        const inputTelefono = window.intlTelInput(telefono,{
            separateDialCode: true,
            initialCountry: "auto",
            geoIpLookup: callback => {
                fetch("https://ipapi.co/json")
                .then(res => res.json())
                .then(data => callback(data.country_code))
                .catch(() => callback("MX"));
            },
            utilsScript: "/build/js/utils.js",
        });

        telefono.addEventListener("input",()=>{
            borrarAlerta("-telefono");
            inputTelefono.isValidNumber()?mostrarVerificado("-telefono"):borrarVerificado("-telefono");
        })

        const expReg = {
            nombre : /^([\wÀ-ÿ']+\s?){1,5}$/,
            apellido: /^([\wÀ-ÿ']+\s?){1,5}$/,
            email: /^[\w.-]+@[\w]+(\.[\w]+){1,3}$/
        };
        const inputNombre = document.getElementById("nombre");
        const inputApellido = document.getElementById("apellido");
        const inputEmail = document.getElementById("email");
        const inputMensaje = document.getElementById("mensaje");
        const inputTerminos = document.getElementById("terminos");
        inputTerminos.addEventListener("change",()=>{
            borrarAlerta("-terminos");
        })
        inputNombre.addEventListener("input",()=>{
            borrarAlerta("-nombre");
            expReg.nombre.test(inputNombre.value)?mostrarVerificado("-nombre"):borrarVerificado("-nombre");
        })
        inputApellido.addEventListener("input",()=>{
            borrarAlerta("-apellido");
            expReg.apellido.test(inputApellido.value)?mostrarVerificado("-apellido"):borrarVerificado("-apellido");
        })
        inputEmail.addEventListener("input",()=>{
            borrarAlerta("-email");
            expReg.email.test(inputEmail.value)?mostrarVerificado("-email"):borrarVerificado("-email");
        })
        inputMensaje.addEventListener("input", ()=>{
            borrarAlerta("-mensaje");
            inputMensaje.value.length > 15 ? mostrarVerificado("-mensaje"):borrarVerificado("-mensaje");
        })
        
        formulario.addEventListener("submit",(event)=>{
            event.preventDefault();
            borrarAlerta();
            const formData = new FormData(formulario);
            var validacion = true;

            if(!expReg.nombre.test(formData.get("nombre"))){
                buscarAlerta("-nombre");
                validacion = false;
            }
            if(!expReg.apellido.test(formData.get("apellido"))){
                buscarAlerta("-apellido");
                validacion = false;
            }
            if(!expReg.email.test(formData.get("email"))){
                buscarAlerta("-email");
                validacion = false;
            }
            if(!inputTelefono.isValidNumber()){
                buscarAlerta("-telefono");
                validacion = false;
            }else{
                formData.set("telefono",inputTelefono.getNumber());
            }
            if(formData.get("mensaje").length < 15){
                buscarAlerta("-mensaje");
                validacion = false;
            }
            if(formData.get("terminos") != "on"){
                buscarAlerta("-terminos");
                validacion=false;
            }
            if(!validacion){
                moverAlerta();
            }else{
                if(validacion){
                    const xhr = new XMLHttpRequest();
                    xhr.open("POST","../php/uploadContact.php");
                    xhr.send(formData);
                    xhr.onreadystatechange = ()=>{
                        if(xhr.readyState == 4 && xhr.status == 200){
                            formulario.reset();
                            borrarVerificado();
                            modalFormulario.classList.add("activo");
                        }
                    }
                }
            }
        });
    }
}
xhrFormulario.send();

function cerrarModal(){
    modalFormulario.classList.remove("activo");
}

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

function mostrarGlobo(element){
    const screenWidth = window.innerWidth;
    let infoServicio = element.querySelector(".infoServicio");
    let infoRect = infoServicio.getBoundingClientRect();
    console.log(infoRect.right);
    console.log("screen: " + screenWidth);
    if(infoRect.right > screenWidth - 28){
        infoServicio.style.right = '100%';
        infoServicio.classList.add("invertido");
    }else{
        infoServicio.style.left = '65%';
        infoServicio.classList.remove("invertido");
    }
}
function ocultarGlobo(element){
    let infoServicio = element.querySelector(".infoServicio");
    infoServicio.style.left ='auto';
    infoServicio.style.right ='auto';
}
