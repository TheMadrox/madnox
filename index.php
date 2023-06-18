<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MadNox Web Development</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/indexStyles.css">
</head>
<body>
    <nav class="container-fluid d-flex">
        <div class="d-flex align-items-center">
            <img id="imgLogo" src="src/img/madnoxLogo.svg" alt="LogoMadnox">
            <img id="tipografiaLogo" src="src/img/madnoxLogoTipografia.svg" alt="logoMadroxTipografia">
            <!-- <div id="textoLogo" class="d-flex"><h2 style="color:#1A1A1A">MAD</h2><h2 style="color:#D4AF37">NOX</h2></div> -->
        </div>
        <div id="menuDesplegable" class="ms-md-4 align-items-center d-flex justify-content-center">
            <ul class="m-0 p-0 d-flex">
                <li><a type="button" class="activo">Inicio</a></li>
                <li><a type="button">Conócenos</a></li>
                <li><a type="button">Proyectos</a></li>
                <li><a type="button">Paquetes</a></li>
            </ul>
        </div>
        <div style="z-index:2;" class="position-relative flex-grow-1 d-flex align-items-center justify-content-end pe-md-2">
            <a type="button" id="botonContactanosNav">Contactanos</a>
            <a type="button" id="botonMenu"><i class="bi bi-list d-block d-md-none"></i></a>
        </div>
    </nav>
    <main>
        <div id="contenedorBotonSubir" class="d-inline-block">
            <a type="button">    
                <div id="botonSubir" class="d-flex align-items-center justify-content-center">
                    <img style="height:2rem;" src="src/img/curvedArrowUp.svg" alt="">
                </div>
            </a>
        </div>
        <div id="contenedorContenedorInicial"class="contenedorContenido position-relative d-flex flex-column" style="height:100vh;">
            <div id="contenedorInicial" class="d-flex flex-column justify-content-center flex-grow-1">
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-12 col-md-10 col-lg-10">
                            <h1 id="textoInicial">Desarrollo web profesional y rápido para <span>"ejemplo"</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div id="contenedorQuienesSomosInicial" class="mt-3 col-11 col-md-5 col-lg-5">
                            <div class="ms-md-5 ms-0" style="border-left:3px solid #D4AF37">
                                <p class="ps-3 pb-2">Aumenta tu impacto en línea con nuestra experiencia en desarrollo web. Crea páginas web que combinan creatividad y funcionalidad para potenciar tu presencia digital.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a type="button">
                <div id="barraConoceMas" class="text-center">
                    <p class="m-0">Conoce más</p>
                    <i class="bi bi-chevron-compact-down"></i>
                </div>
            </a>
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
        </div>
        <!-- <div class="mt-5" style="background-color:#1A1A1A;z-index:1;position:relative;">
            <h2 class="titulo">¿Quiénes Somos?</h2>
            <div class="container-fluid">
                <div class="row my-5">
                    <div class="col-11 col-md-7 p-0 d-flex align-items-center">
                        <div class="d-flex" style="border-top-right-radius:60px;border-bottom-right-radius:60px; overflow:hidden;">
                            <div class="tarjetaConocenos">
                                <h2>Tu puerta al mundo digital</h2>
                                <p>
                                    En MadNox, nos apasiona ayudar a nuestros clientes a tener 
                                    una presencia en línea impactante y exitosa. Como expertos 
                                    en diseño y desarrollo de páginas web, nos esforzamos por 
                                    crear soluciones personalizadas y atractivas que impulsen 
                                    tu negocio hacia el éxito digital. Confía en MadNox para 
                                    abrirte las puertas al mundo digital y alcanzar nuevos 
                                    horizontes en línea.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <img class="img-fluid p-5 p-md-0"src="src/img/conocenos1.svg" alt="">
                    </div>
                </div>
                <div class="row flex-row-reverse my-5">
                    <div class="col-11 col-md-7 p-0 d-flex align-items-center">
                        <div class="d-flex flex-row-reverse">
                            <div class="tarjetaConocenos" style="border-top-left-radius:60px;border-bottom-left-radius:60px; overflow:hidden;">
                                <h2 class="ps-3 ps-md-4">Diseño web que marca la diferencia</h2>
                                <p class="ps-4">
                                    En MadNox, nos dedicamos a transformar ideas en realidades digitales 
                                    cautivadoras. Nuestro enfoque se basa en el diseño web innovador 
                                    y el desarrollo de páginas personalizadas que capturan la esencia 
                                    de tu marca. Nuestro objetivo es superar tus expectativas y 
                                    brindarte una presencia en línea que te destaque entre la multitud. 
                                    Descubre cómo MadNox marca la diferencia en el mundo digital.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <img src="src/img/conocenos2.svg" alt="" class="img-fluid p-5 p-md-0">
                    </div>
                </div>
                <div class="row mt-5 pb-5">
                    <div class="col-11 col-md-7 p-0 d-flex align-items-center">
                        <div class="d-flex" style="border-top-right-radius:60px;border-bottom-right-radius:60px; overflow:hidden;">
                            <div class="tarjetaConocenos">
                                <h2>Diseñando tu éxito en la web</h2>
                                <p>
                                    En MadNox, creemos en el poder de una presencia en línea sólida.
                                    Nuestro equipo talentoso y apasionado se especializa en diseñar
                                    y desarrollar páginas web que generan impacto y resultados tangibles. 
                                    Nos comprometemos a ofrecerte soluciones web personalizadas y estratégicas 
                                    que impulsen tu negocio hacia el éxito en el mundo digital.
                                    Confía en MadNox para diseñar tu camino hacia el éxito en la web.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <img src="src/img/conocenos3.svg" alt="" class="img-fluid p-5 p-md-0">
                    </div>
                </div>
            </div> 

            <h2 class="titulo">Conoce al equipo</h2>
            <p>Trabajamos juntos para cumplir tus espectativas</p>
            <div class="container-fluid">
                <div class="row">

                </div>
            </div>
        </div> -->
        <div id="contenedorConocenos" class="contenedorContenido py-3 container-fluid position-relative">
            <div class="d-flex justify-content-center">
                <h2 class="titulo">Conócenos</h2>
            </div>
            <div class="container py-3">
                <div class="row">
                    <div class="col-12 col-md-3 d-flex" id="contenedorBotonesConocenos">
                        <div class="d-flex flex-md-column w-100">
                            <div class="d-flex flex-column flex-grow-1 justify-content-center">
                                <a href="" class="botonConocenos activo">
                                    Nosotros
                                </a>
                                <a href="" class="botonConocenos">
                                    Visión
                                </a>
                                <a href="" class="botonConocenos">
                                    Objetivo
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <h3 class="tituloConocenos">Tu puerta al mundo digital</h3>
                        <p>
                            En MadNox, nos apasiona ayudar a nuestros clientes a tener 
                            una presencia en línea impactante y exitosa. Como expertos 
                            en diseño y desarrollo de páginas web, nos esforzamos por 
                            crear soluciones personalizadas y atractivas que impulsen 
                            tu negocio hacia el éxito digital. Confía en MadNox para 
                            abrirte las puertas al mundo digital y alcanzar nuevos 
                            horizontes en línea.
                        </p>
                    </div>
                    <div class="col-12 col-md-4 d-flex align-items-center">
                        <img src="src/img/conocenos1.svg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <h2 class="titulo">Conóce al equipo</h2>
            </div>
            <div class="container">

            </div>
        </div>
        <div id="contenedorProyectos" class="contenedorBlanco contenedorContenido">

        </div>
        <div id="contenedorNuestrosPrecios" class="contenedorContenido pt-3" style="position:relative; z-index:1; background-color:#1A1A1A;">
            <div style="position:relative; z-index:2;">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <h2 class="titulo">Nuestros precios</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet.</p>
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
        </div>
        <div id="contenedorContactanos" class="contenedorContenido container-fluid" style="background-color:#1A1A1A;">
            <div class="py-4" style="position:relative; z-index:1;background-color:#1A1A1A;">
                <div class="d-flex justify-content-center">
                    <h2 class="titulo">Contactanos</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div id="imagenContacto" class="px-0 px-md-3 col-md-5 col-12 position-relative">
                    <div class="position-absolute" style="height:200%; top:-100%; width:100%;">
                        <div class="" id="contenedorImagenContacto" style="height:50%;position:sticky;top:10vh;" class="bg-warning">
                            <img class="px-3 px-md-0" style="height:100%;width:100%;" src="src/img/imagenContacto.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 mb-3 mt-3 mt-md-0">
                    <div class="ms-md-3" id="formularioContacto">
                        <div class="pt-3 px-2 mb-2 d-flex justify-content-center">
                            <img style="height:5rem" src="src/img/userProfileIcon.svg" alt="">
                        </div>
                        <form action="" method="post">
                            <div class="d-flex">
                                <div class="col-6 px-3">
                                    <label for="nombre" class="form-label">Nombre/s</label>
                                    <input placeholder="nombre" id="nombre" type="text" class="form-control">
                                </div>
                                <div class="col-6 px-3">
                                    <label for="apellido" class="form-label">Apellidos</label>
                                    <input placeholder="apellido" id="apellido" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="px-3 mt-2">
                                <label for="email" class="form-label">Correo eléctronico</label>
                                <input id="email" placeholder="em@il" type="email" class="form-control">
                            </div>
                            <div class="px-3 mt-2">
                                <label for="negocio" class="form-label">Nombre del negocio(opcional)</label>
                                <input id="negocio" type="text" class="form-control" placeholder="negocio">
                            </div>
                            <div class="px-3 mt-2">
                                <label for="paquete" class="form-label">Escoge el plan que te interesa</label>
                                <select class="form-select" id="paquete">
                                    <option value="" selected>Básico $300USD</option>
                                    <option value="">Avanzado</option>
                                    <option value="">Premium</option>
                                </select>
                            </div>
                            <div class="px-3 mt-2">
                                <label for="telefono" class="form-label">Télefono de contacto</label>
                                <input type="tel" class="form-control" placeholder="télefono" id="telefono">
                            </div>
                            <div class="px-3 mt-2">
                                <label for="mensaje" class="form-label">Dejanos un mensaje</label>
                                <textarea id="mensaje" style="resize:none; width:100%; height:15vh;"></textarea>
                            </div>
                            <div class="px-3 mt-2">
                                <div class="d-flex justify-content-center">
                                    <input id="terminos" type="checkbox" class="m-0 form-check-input">
                                    <label for="terminos" style="font-size:.85rem;" class="ps-2 form-check-label">Acepta los <a href="">términos y condiciones</a> para continuar</label>
                                </div>
                            </div>
                            <div class="px-3 pb-3 mt-3 d-flex justify-content-center">
                                <button class="btn btn-warning">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
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
                    <div id="enlacesPaginaFooter" class="d-flex justify-content-around">
                        <p class="m-0 py-2">Inicio</p>
                        <p class="m-0 py-2">Conocenos</p>
                        <p class="m-0 py-2">Proyectos</p>
                        <p class="m-0 py-2">Paquetes</p>
                        <p class="m-0 py-2">Contacto</p>   
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
</body>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>