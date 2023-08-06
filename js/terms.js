const contenedorInfoTerminos = document.getElementById("contenedorInfoTerminos");
const dropDownBotonTerminos = document.querySelectorAll(".dropDownBotonTerminos");
const contenedorSubTerminos = document.querySelectorAll(".contenedorSubTerminos");

const urlTerminos = new URLSearchParams(window.location.search);
const docLegal = urlTerminos.get('leg');
dropDownBotonTerminos[docLegal].classList.add("activo");
contenedorSubTerminos[docLegal].classList.add("activo");

fetch(docLegal == 0 ? "/php/terminosycondiciones.php" : docLegal==1 ? "/php/politicasPrivacidad.php" :"").then(res =>{
    return res.text();
}).then(text =>{
    contenedorInfoTerminos.innerHTML = text;
    const subTermino = document.querySelectorAll(".subTermino");
    const subtituloTerminos = document.querySelectorAll(".subtituloTerminos");
    const observadorTitulos = new IntersectionObserver((entries)=>{
        entries.forEach((entry)=>{
            let subtituloTerminosArray = Array.from(subtituloTerminos);
            let index = subtituloTerminosArray.indexOf(entry.target);
            if(entry.isIntersecting){
                docLegal==0 ? subTermino[index].classList.add("activo") : subTermino[index+11].classList.add("activo");
            }else{
                docLegal==0 ? subTermino[index].classList.remove("activo") : subTermino[index+11].classList.remove("activo");
            }
        })
    },{threshold:0, rootMargin: "-1px"})
    subtituloTerminos.forEach(subtitulo=>{
        observadorTitulos.observe(subtitulo);
    })
    subTermino.forEach((boton,index) =>{
        boton.addEventListener("click",()=>{
            window.scrollTo({top:index<11?subtituloTerminos[index].offsetTop:subtituloTerminos[index-11].offsetTop,behavior:"smooth"});
        })
    })
}).catch(err =>{
    console.log(err);
})

dropDownBotonTerminos.forEach((boton,index)=>{
    boton.addEventListener("click",()=>{
        urlTerminos.set("leg",index);
        const nuevaURL = `${window.location.pathname}?${urlTerminos.toString()}`;
        window.history.replaceState({},"",nuevaURL);
        if(!boton.classList.contains("activo")){
            dropDownBotonTerminos.forEach(botonJ=>{
                botonJ.classList.remove("activo");
            })
            boton.classList.add("activo");
        }
        if(!contenedorSubTerminos[index].classList.contains("activo")){
            contenedorSubTerminos.forEach(subtermino=>{
                subtermino.classList.remove("activo");
            })
            contenedorSubTerminos[index].classList.add("activo");
        }else{
            contenedorSubTerminos[index].classList.remove("activo");
        }
        fetch(index == 0 ? "/php/terminosycondiciones.php" : index==1 ? "/php/politicasPrivacidad.php" :"").then(res =>{
            return res.text();
        }).then(text =>{
            contenedorInfoTerminos.innerHTML = text;
            const subTermino = document.querySelectorAll(".subTermino");
            const subtituloTerminos = document.querySelectorAll(".subtituloTerminos");
            const observadorTitulos = new IntersectionObserver((entries)=>{
                entries.forEach((entry)=>{
                    let subtituloTerminosArray = Array.from(subtituloTerminos);
                    let indexJ = subtituloTerminosArray.indexOf(entry.target);
                    if(entry.isIntersecting){
                        index==0 ? subTermino[indexJ].classList.add("activo") : subTermino[indexJ+11].classList.add("activo");
                    }else{
                        index==0 ? subTermino[indexJ].classList.remove("activo") : subTermino[indexJ+11].classList.remove("activo");
                    }
                })
            },{threshold:0, rootMargin: "-1px"})
            subtituloTerminos.forEach(subtitulo=>{
                observadorTitulos.observe(subtitulo);
            })
            subTermino.forEach((boton,index) =>{
                boton.addEventListener("click",()=>{
                    window.scrollTo({top:index<11?subtituloTerminos[index].offsetTop:subtituloTerminos[index-11].offsetTop,behavior:"smooth"});
                })
            })
        }).catch(err =>{
            console.log(err);
        })
    })
})