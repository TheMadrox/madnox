<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Erick Guzmán">
    <meta name="description" content="Desarrollo web atractivo y eficiente para emprendedores, dale a tu proyecto una presencia digital de calidad y logra ese impulso que tu negocio necesita">
    <meta name="keywords" content="desarrollo web, diseño web, página web">
    <meta name="copyright" content="Erick Guzmán">
    <meta name="robots" content="index,follow">
    <meta name="category" content="web development">
    <meta name="audience" content="all">
    <meta itemprop="name" content="MadNox">
    <meta itemprop="telephone" content="5525223863">
    <meta itemprop="address" content="Naucalpan de Juárez,Edo.Méx">
    <meta http-equiv="cache-control" content="no-cache">
    <link rel="shortcut icon" href="src/img/favicon.ico" type="image/x-icon">
    <link rel="alternate" hreflang="es" href="https:/madnox.net">
    <link rel="canonical" href="https://madnox.net">
    <title>Desarrollo web rápido y accesible para tu negocio|MadNox</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/indexStyles.css">
</head>
<body>
    <div id="page">
        <header>
            <nav id="nav1">

            </nav>
            <nav id="nav2" class="container-fluid d-flex">
                <div class="d-flex align-items-center">
                    <img id="imgLogo" src="src/img/madnoxLogo.svg" alt="LogoMadnox">
                    <img id="tipografiaLogo" src="src/img/madnoxLogoTipografia.svg" alt="logoMadroxTipografia">
                    <!-- <div id="textoLogo" class="d-flex"><h2 style="color:#1A1A1A">MAD</h2><h2 style="color:#D4AF37">NOX</h2></div> -->
                </div>
                <div id="menuDesplegable" class="d-inline-flex position-absolute w-100 h-50 align-items-center justify-content-center" style="">
                    <ul class="m-0 p-0 d-inline-flex">
                        <li><button type="button" class="activo">Inicio</button></li>
                        <li><button type="button">Conócenos</button></li>
                        <li><button type="button">Proyectos</button></li>
                        <li><button type="button">Paquetes</button></li>
                    </ul>
                </div>
                <div style="z-index:2;" class="position-relative ms-auto d-inline-flex align-items-center justify-content-end pe-md-2">
                    <button type="button" id="botonContactanosNav">Contactanos</button>
                    <button type="button" id="botonMenu"><i class="bi bi-list d-block d-md-none"></i></button>
                </div>
            </nav>
        </header>
        <main>
            <div id="contenedorBotonSubir" class="d-inline-block">
                <a type="button">    
                    <div id="botonSubir" class="d-flex align-items-center justify-content-center">
                        <img style="height:2rem;" src="src/img/curvedArrowUp.svg" alt="">
                    </div>
                </a>
            </div>
            <section id="contenedorContenedorInicial"class="seccionesOscuras contenedorContenido position-relative d-flex flex-column" style="height:100vh;">
                <div id="contenedorInicial" class="d-flex flex-column justify-content-center flex-grow-1">
                    <div class="container-fluid mt-5">
                        <div class="row mt-5">
                            <div class="col-12">
                                <h1 id="textoInicial">Desarrollo web profesional <br> para <span id="textoTypeWrite"></span><span id="punteroTypeWrite">|</span></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div id="contenedorQuienesSomosInicial" class="mt-4 col-11 col-md-7 col-lg-5">
                                <div class="ms-md-5 ms-0 position-relative" style="overflow:hidden;border-left:3px solid #D4AF37">
                                    <p id="subtextoInicial"class="ps-3 my-1">Aumenta tu impacto en línea con nuestra experiencia en desarrollo web. Creamos sitios que combinan creatividad y funcionalidad para potenciar tu presencia digital.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button">
                    <div id="barraConoceMas" class="text-center">
                        <p class="m-0">Conoce más</p>
                        <i class="bi bi-chevron-compact-down"></i>
                    </div>
                </button>
                <div style="z-index:1;position:absolute;bottom:0px; width:100%; height:100%; backdrop-filter:blur(5px);"></div>
                <div id="fondoContenedorInicial">
                    <div class="d-flex" style="height:50%">
                        <div class="fondoInicial" id="fondoInicial1"></div>
                        <div class="fondoInicial" id="fondoInicial2"></div>
                    </div>
                    <div class="d-flex" style="height:50%">
                        <div class="fondoInicial" id="fondoInicial3"></div>
                        <div class="fondoInicial" id="fondoInicial4"></div>
                    </div>
                </div>
            </section>
            <section id="contenedorConocenos" class="seccionesBlancas contenedorContenido py-3 container-fluid position-relative">
                <div class="d-flex justify-content-center">
                    <h2 class="titulo">Conócenos</h2>
                </div>
                <div class="container py-3">
                    <div class="row">
                        <div class="col-12 col-md-3 d-flex" id="contenedorBotonesConocenos">
                            <div class="d-flex flex-md-column w-100">
                                <div class="d-flex flex-column flex-grow-1 justify-content-center">
                                    <button type="button" class="botonConocenos activo">
                                        Nosotros
                                    </button>
                                    <button type="button" class="botonConocenos">
                                        Visión
                                    </button>
                                    <button type="button" class="botonConocenos">
                                        Objetivo
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="contenedorInformacionConocenos" class="mt-3 mt-md-0 col-12 col-md-5 position-relative">
                            <div class="infoConocenos">
                                <h3 class="tituloConocenos">Tu puerta al mundo digital</h3>
                                <p class="textoConocenos">
                                    En MadNox, nos apasiona ayudar a nuestros clientes a tener 
                                    una presencia en línea impactante y exitosa. Como expertos 
                                    en diseño y desarrollo de páginas web, nos esforzamos por 
                                    crear soluciones personalizadas y atractivas que impulsen 
                                    tu negocio hacia el éxito digital. Confía en MadNox para 
                                    abrirte las puertas al mundo digital y alcanzar nuevos 
                                    horizontes en línea.
                                </p>
                            </div>
                            <div class="infoConocenos d-none">
                                <h3 class="tituloConocenos">Diseño web que marca la diferencia</h3>
                                <p class="textoConocenos">
                                    En MadNox, nos dedicamos a transformar ideas en realidades digitales 
                                    cautivadoras. Nuestro enfoque se basa en el diseño web innovador 
                                    y el desarrollo de páginas personalizadas que capturan la esencia 
                                    de tu marca. Nuestro objetivo es superar tus expectativas y 
                                    brindarte una presencia en línea que te destaque entre la multitud. 
                                    Descubre cómo MadNox marca la diferencia en el mundo digital.
                                </p>
                            </div>
                            <div class="infoConocenos d-none">
                                <h3 class="tituloConocenos">Diseñando tu éxito en la web</h3>
                                <p class="textoConocenos">
                                    En MadNox, creemos en el poder de una presencia en línea sólida.
                                    Nuestro equipo talentoso y apasionado se especializa en diseñar
                                    y desarrollar páginas web que generan impacto y resultados tangibles. 
                                    Nos comprometemos a ofrecerte soluciones web personalizadas y estratégicas 
                                    que impulsen tu negocio hacia el éxito en el mundo digital.
                                    Confía en MadNox para diseñar tu camino hacia el éxito en la web.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 d-flex align-items-center mt-3 mt-md-0">
                            <img src="src/img/conocenos1.svg" alt="" class="imagenConocenos img-fluid">
                            <img src="src/img/conocenos2.svg" alt="" class="imagenConocenos img-fluid d-none">
                            <img src="src/img/conocenos3.svg" alt="" class="imagenConocenos img-fluid d-none">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <h2 class="titulo">Conóce al equipo</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="d-flex">
                                <div class="col-4 bg-warning">

                                </div>
                                <div class="col-8">
                                    <div class="d-flex flex-column px-2">
                                        <h5>Desarrollador</h5>
                                        <p>Erick Miguel Guzmán Moreno</p>
                                        <button type="button" class="my-2 botonConoceEquipo">Sobre mí<i class="ms-2 bi bi-caret-down-fill"></i></button>
                                        <button type="button" class="my-2 botonConoceEquipo">Habilidades<i class="ms-2 bi bi-caret-down-fill"></i></button>
                                        <p class="d-none">
                                            Que tal, soy ingeniero de sistemas y desarrollador web mexicano,
                                            cuento con conocimientos en Back-End y Front-End
                                            y estoy comprometido para volver de tu página algo
                                            real y ayudarte a lograr ese impulso que tu negocio
                                            necesita.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contenedorProyectos" style="height:100vh;z-index:1; background-color:#1A1A1A;"class="seccionesOscuras contenedorContenido position-relative">
                <div class="d-flex justify-content-center">
                    <h2 class="titulo">Nuestros clientes</h2>
                </div>
            </section>
            <section id="contenedorNuestrosPrecios" class="seccionesBlancas contenedorContenido pt-3" style="position:relative; z-index:1; background-color:#1A1A1A;">
                <div style="position:relative; z-index:2;">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-center">
                                    <h2 class="titulo">Nuestros precios</h2>
                                </div>
                                <p class="text-center" style="font-size:.8rem">Potencia tu presencia en línea sin romper el presupuesto.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="col-12 col-md-4 pb-4">
                            <div class="mx-4 tarjetaPrecio">
                                <div class="tituloPlan basico d-flex flex-column align-items-center justify-content-center">
                                    <h3 class="m-0 my-2">Básico</h3>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-center" style="background-color:rgba(100, 181, 246,0.2)">
                                    <h4 class="m-0 py-2" style="font-size:3rem;">$200</h4>
                                    <div class="d-flex align-items-end"><p class="m-0 py-2 mb-1" style="font-size:1.2rem">USD</p></div>
                                </div>
                                <hr>
                                <div class="d-flex infoPaquete check ms-2">
                                    <i class="bi bi-check2-circle"></i>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="m-0">Páginas estáticas</p>
                                    </div>
                                </div>
                                <div class="d-flex infoPaquete check ms-2">
                                    <i class="bi bi-check2-circle"></i>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="m-0">Páginas estáticas</p>
                                    </div>
                                </div>
                                <div class="d-flex infoPaquete check ms-2">
                                    <i class="bi bi-check2-circle"></i>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="m-0">Páginas estáticas</p>
                                    </div>
                                </div>
                                <div class="d-flex infoPaquete check ms-2">
                                    <i class="bi bi-check2-circle"></i>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="m-0">Páginas estáticas</p>
                                    </div>
                                </div>
                                <div class="d-flex infoPaquete cross ms-2">
                                    <i class="bi bi-x-circle"></i>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="m-0">Páginas dinámicas</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-4">
                                    <button  style="width:100%;height:100%; background-color:#0D47A1;" class="btn py-3">Comencemos</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 pb-4">
                            <div class="mx-4 tarjetaPrecio">
                                <div class="tituloPlan avanzado d-flex align-items-center justify-content-center">
                                    <h3 class="m-0 my-2">Avanzado</h3>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-center" style="background-color:rgba(255, 183, 77,0.2)">
                                    <h4 class="m-0 py-2" style="font-size:3rem;">$500</h4>
                                    <div class="d-flex align-items-end"><p class="m-0 py-2 mb-1" style="font-size:1.2rem">USD</p></div>
                                </div>
                                <hr>
                                <div class="d-flex infoPaquete check ms-2">
                                    <i class="bi bi-check2-circle"></i>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="m-0">Páginas estáticas</p>
                                    </div>
                                </div>
                                <div class="d-flex infoPaquete check ms-2">
                                    <i class="bi bi-check2-circle"></i>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="m-0">Páginas estáticas</p>
                                    </div>
                                </div>
                                <div class="d-flex infoPaquete check ms-2">
                                    <i class="bi bi-check2-circle"></i>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="m-0">Páginas estáticas</p>
                                    </div>
                                </div>
                                <div class="d-flex infoPaquete check ms-2">
                                    <i class="bi bi-check2-circle"></i>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="m-0">Páginas estáticas</p>
                                    </div>
                                </div>
                                <div class="d-flex infoPaquete cross ms-2">
                                    <i class="bi bi-x-circle"></i>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="m-0">Páginas dinámicas</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-4">
                                    <button  style="width:100%;height:100%; background-color:#F57C00;"class="btn py-3">Comencemos</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 pb-4">
                            <div class="mx-4 tarjetaPrecio">
                                <div class="tituloPlan premium d-flex align-items-center justify-content-center">
                                    <h3 class="m-0 my-2">Premium</h3>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-center" style="background-color:rgba(206, 147, 216,0.2)">
                                    <h4 class="m-0 py-2" style="font-size:3rem;">$1000</h4>
                                    <div class="d-flex align-items-end"><p class="m-0 py-2 mb-1" style="font-size:1.2rem">USD</p></div>
                                </div>
                                <hr>
                                <div class="d-flex infoPaquete check ms-2">
                                    <i class="bi bi-check2-circle"></i>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="m-0">Páginas estáticas</p>
                                    </div>
                                </div>
                                <div class="d-flex infoPaquete check ms-2">
                                    <i class="bi bi-check2-circle"></i>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="m-0">Páginas estáticas</p>
                                    </div>
                                </div>
                                <div class="d-flex infoPaquete check ms-2">
                                    <i class="bi bi-check2-circle"></i>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="m-0">Páginas estáticas</p>
                                    </div>
                                </div>
                                <div class="d-flex infoPaquete check ms-2">
                                    <i class="bi bi-check2-circle"></i>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="m-0">Páginas estáticas</p>
                                    </div>
                                </div>
                                <div class="d-flex infoPaquete cross ms-2">
                                    <i class="bi bi-x-circle"></i>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="m-0">Páginas dinámicas</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-4">
                                    <button  style="width:100%;height:100%; background-color:#6A1B9A;"class="btn py-3">Comencemos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="z-index:1; position:absolute; width:100%; height:70%; background-color:#FFF2CC; bottom:0px;">

                </div>
            </section>
            <section id="contenedorContactanos" class="seccionesBlancas contenedorContenido container-fluid" style="background-color:#1A1A1A;">
                <div class="py-4" style="position:relative; z-index:1;background-color:#1A1A1A;">
                    <div class="d-flex justify-content-center">
                        <h2 class="titulo">Contactanos</h2>
                    </div>
                    <p class="text-center" style="font-size:.8rem">¡Hablemos sobre tu proyecto web! Contáctanos y comienza a destacar en internet.</p>
                </div>
                <div class="row d-flex">
                    <div id="imagenContacto" class="px-0 px-md-3 col-md-5 col-12 position-relative">
                        <div class="position-absolute" style="height:200%; top:-100%; width:100%; left:0; padding-left:1rem; padding-right:1rem;">
                            <div class="" id="contenedorImagenContacto" style="height:50%;position:sticky;top:10vh;" class="bg-warning">
                                <img class="px-3 px-md-0" style="height:100%;width:100%;" src="src/img/imagenContacto.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 mb-3 mt-3 mt-md-0" id="contenedorFormularioContacto">
                        
                    </div>
                </div> 
            </section>
        </main>
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4 p-0 d-flex align-items-center justify-content-center">
                        <div class="d-inline-flex my-3 px-3">
                            <img id="logoFooter" src="src/img/madnoxLogo.svg" alt="">
                            <img class="ms-3" id="textoLogoFooter"src="src/img/madnoxLogoTipografia.svg" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-8 d-flex flex-column m-0 p-0">
                        <div class="my-md-2 mb-2 d-flex redesSociales justify-content-around">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-twitter"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-whatsapp"></i>
                            <i class="bi bi-github"></i>
                        </div>
                        <hr>
                        <div class="d-flex" id="enlacesFooter">
                            <div class="col-6">
                                <div class="d-flex flex-column px-2">
                                    <h4>Términos y condiciones</h4>
                                    <p>Términos y condiciones</p>
                                    <p>Politicas y privacidad</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column px-2">
                                    <h4>Unete al equipo</h4>
                                    <p>Manda tu postulacion</p> 
                                </div>
                            </div>
                        </div> 
                    </div>
                    <hr>
                    <div id="copyLogo" class="d-flex justify-content-center">
                        <p>MadNox 2023 Copyright © Derechos Reservados</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>