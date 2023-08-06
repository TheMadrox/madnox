<?php
    header("Cache-Control: max-age=259200");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Erick Guzmán">
    <meta name="description" content="Desarrollo web atractivo y accesible para emprendedores, dale a tu proyecto una presencia digital de calidad y logra ese impulso que tu negocio necesita">
    <meta name="keywords" content="desarrollo web, diseño web, página web">
    <meta name="copyright" content="Erick Guzmán">
    <meta name="robots" content="index,follow">
    <meta name="category" content="web development">
    <meta name="audience" content="all">
    <meta itemprop="name" content="MadNox">
    <meta itemprop="telephone" content="5525223863">
    <meta itemprop="address" content="Naucalpan de Juárez,Edo.Méx">
    <link rel="shortcut icon" href="src/img/favicon.ico" type="image/x-icon">
    <link rel="alternate" hreflang="es" href="https:/madnox.net">
    <link rel="canonical" href="https://madnox.net">
    <title>Desarrollo web personalizado y accesible para tu negocio|MadNox</title>
    <link rel="stylesheet" href="/styles/bootstrap5.3.1.min.css">
    <link rel="stylesheet" media="print" onload="this.media='all'" href="/styles/bootstrap1.10.4-icons.css">
    <link rel="stylesheet" href="/styles/indexStyles.css">
    <link rel="stylesheet" media="print" onload="this.media='all'" href="/styles/animate4.1.1.min.css">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LKZVK25YKC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LKZVK25YKC');
</script>
<body>
    <div id="loadCharge"><span id="preLoader"><span id="dotsPacMan"></span></span></div>
    <div id="page">
        <header>
            <div id="contenedorNavs">
                <nav id="nav1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="d-flex justify-content-end">
                                <div class="pe-4">
                                    <button id="botonMiProyecto">Mi proyecto</button>
                                </div>
                                <div id="dropdownMenu" class="position-relative">
                                    <button id="botonDrop" class="d-flex align-items-center"><img class="banderaIdioma" src="/src/img/mexicoFlag.svg" alt="bandera de mexico"><span class="claveIdioma">ES&nbsp;</span>Español <span class="flex-grow-1 text-end mt-1" id="trianguloDrop">&#9660;</span></button>
                                    <div id="dropdown" class="position-absolute">
                                        <a href="" class="d-flex align-items-center"><img class="banderaIdioma" src="/src/img/usaFlag.svg" alt="bandera de usa"><span class="claveIdioma">EN&nbsp;</span>Ingles</a>
                                        <a href="" class="d-flex align-items-center"><img class="banderaIdioma" src="/src/img/brasilFlag.svg" alt="bandera de brasil"><span class="claveIdioma">PT&nbsp;</span>Portugues</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <nav id="nav2" class="container-fluid d-flex">
                    <a href="https://madnox.net" class="d-flex align-items-center" style="width:15rem;">
                        <img id="imgLogo" src="src/img/madnoxLogo.svg" alt="LogoMadnox">
                        <img id="tipografiaLogo" src="src/img/madnoxLogoTipografia.svg" alt="logoMadroxTipografia">
                    </a>
                    <div id="menuDesplegable" class="d-inline-flex w-100 h-sm-50 align-items-center justify-content-center" style="">
                        <ul class="m-0 p-0 d-inline-flex">
                            <li><button data-seccion="0" type="button" class="activo">Inicio</button></li>
                            <li><button data-seccion="1" type="button">Conócenos</button></li>
                            <li><button data-seccion="2" type="button">Proyectos</button></li>
                            <li><button data-seccion="3" type="button">Paquetes</button></li>
                        </ul>
                    </div>
                    <div style="z-index:2;width:15rem;" class="position-relative ms-auto d-inline-flex align-items-center justify-content-end pe-md-2">
                        <button type="button" id="botonContactanosNav">Contactanos</button>
                        <button type="button" id="botonMenu"><i class="bi bi-list d-block d-md-none"></i></button>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <div id="contenedorBotonSubir" class="d-inline-block">
                <a type="button">    
                    <div id="botonSubir" class="d-flex align-items-center justify-content-center">
                        <img style="height:2rem;" src="src/img/curvedArrowUp.svg" alt="">
                    </div>
                </a>
            </div>
            <div id="contenedorBotonWhatsapp">
                <button><div class="botonWhatsapp position-relative"><i style="top:50%;left:50%;transform:translate(-50%, -50%)" class="bi bi-whatsapp position-absolute"></i></div></button>
            </div>
            <div style="height:100vh;" id="contenedorVideoInicial" class="position-absolute w-100 bg-dark">
                <video id="videoInicial" autoplay muted loop class="w-100 h-100">
                    <source src="/src/img/fondoDisco.mp4" type="video/mp4">
                </video>
            </div>
            <section id="contenedorContenedorInicial" data-seccion="0" style="height:100vh" class="seccionesOscuras contenedorContenido position-relative d-flex flex-column">
                <div id="contenedorInicial" class="d-flex flex-column justify-content-center flex-grow-1">
                    <div class="container-fluid">
                        <div class="row">
                            <div id="redesInicial" class="ps-md-4 col-12 col-md-6 d-flex justify-content-between">
                                <a href=""><i class="bi bi-facebook logoFacebookNeon"></i></a>
                                <a href=""><i class="bi bi-twitter logoTwitterNeon"></i></a>
                                <a href=""><i class="bi bi-instagram logoInstagramNeon"></i></a>
                                <a href=""><i class="bi bi-whatsapp logoWhatsappNeon"></i></a>
                                <a href=""><i class="bi bi-github logoGithubNeon"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ps-md-4">
                                <h1 id="textoInicial">Desarrollo web profesional<br>para&nbsp;<span id="textoTypeWrite"></span><span id="punteroTypeWrite">|</span></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div id="contenedorQuienesSomosInicial" class="mt-4 col-11 col-md-7 col-lg-6">
                                <div class="ms-md-5 ms-0 position-relative" style="overflow:hidden;border-left:3px solid #D4AF37">
                                    <p id="subtextoInicial"class="ps-3 my-1">Desarrollamos y diseñamos sitios web profesionales y atractivos para tu negocio</p>
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
            </section>
            <section id="contenedorConocenos" data-seccion="1" class="seccionesBlancas contenedorContenido container-fluid position-relative">
                <div class="d-flex justify-content-center">
                    <h2 class="titulo tituloFuente tituloSeparadorNegro">Conócenos</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p id="subtextoConocenos">Madnox es una empresa especializada en el desarrollo de páginas web y la resolución de problemas en línea. Nuestro objetivo principal es brindar apoyo a nuestros clientes para que logren una presencia exitosa en Internet y alcancen el impulso necesario para sus negocios</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <h2 class="titulo tituloFuente tituloSeparadorNegro">¿Qué hacemos?</h2>
                        </div>
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-6 col-lg-4 p-3">
                                    <div class="tarjetaQueHacemos d-flex d-md-block">
                                        <div class="d-flex w-50 w-md-100">
                                            <div class="col-12 col-md-6 d-flex align-items-center">
                                                <img class="img-fluid" loading="lazy" src="/src/img/conocenosDesign.svg" alt="Correcion y mantenimiento">
                                            </div>
                                        </div>
                                        <div class="ps-3 ps-md-0 d-flex d-md-block flex-column justify-content-center">
                                            <h5>Sitios personalizados</h5>
                                            <span class="divisorTarjetaConocenos"></span>
                                            <p>El diseño de tu sitio es la imagen de tu negocio e influye en el éxito que obtienes en internet</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 p-3">
                                    <div class="tarjetaQueHacemos d-flex d-md-block">
                                        <div class="d-flex w-100">
                                            <div class="col-12 col-md-6 d-flex align-items-center">
                                                <img class="img-fluid" src="/src/img/conocenosResponsive.svg" alt="Correcion y mantenimiento">
                                            </div>
                                        </div>
                                        <div class="ps-3 ps-md-0 d-flex d-md-block flex-column justify-content-center">
                                            <h5>Sitios responsivos</h5>
                                            <span class="divisorTarjetaConocenos"></span>
                                            <p>El uso de dipositivos móviles ha cambiado la forma en que las personas consumen sus productos, por eso es importante que tu sitio se visualize correctamente en cualquier dispositivo</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 p-3">
                                    <div class="tarjetaQueHacemos d-flex d-md-block">
                                        <div class="d-flex w-50 w-md-100">
                                            <div class="col-12 col-md-6 d-flex align-items-center">
                                                <img class="img-fluid" src="/src/img/conocenosServidor.svg" alt="Hosting y dominio">
                                            </div>
                                        </div>
                                        <div class="ps-3 ps-md-0 d-flex d-md-block flex-column justify-content-center">
                                            <h5>Hosting y dominio</h5>
                                            <span class="divisorTarjetaConocenos"></span>
                                            <p>Todos nuestros paquetes cuentan con dominio y hosting por 1 año, ¡Renueva y cancela cuando quieras!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 p-3">
                                    <div class="tarjetaQueHacemos d-flex d-md-block">
                                        <div class="d-flex w-50 w-md-100">
                                            <div class="col-12 col-md-6 d-flex align-items-center">
                                                <img class="img-fluid" src="/src/img/conocenosEmail.svg" alt="Correos corporativos">
                                            </div>
                                        </div>
                                        <div class="ps-3 ps-md-0 d-flex d-md-block flex-column justify-content-center">
                                            <h5>Correos corporativos</h5>
                                            <span class="divisorTarjetaConocenos"></span>
                                            <p>Un correo que cuente con tu marca inspira confianza en tus clientes</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 p-3">
                                    <div class="tarjetaQueHacemos d-flex d-md-block">
                                        <div class="d-flex w-50 w-md-100">
                                            <div class="col-12 col-md-6 d-flex align-items-center">
                                                <img class="img-fluid" src="/src/img/conocenosBug.svg" alt="Correcion y mantenimiento">
                                            </div>
                                        </div>
                                        <div class="ps-3 ps-md-0 d-flex d-md-block flex-column justify-content-center">
                                            <h5>Correción y mantenimiento</h5>
                                            <span class="divisorTarjetaConocenos"></span>
                                            <p>Si ya cuentas con un sitio y solo quieres corregir, optimizar o agregar una funcionalidad, nosotros podemos ayudarte</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <h2 class="titulo tituloFuente tituloSeparadorNegro">Páginas potenciadas con...</h2>
                </div>
                <div class="container" id="contenedorSVGHerramientas">
                    <div class="row">
                        <div class="col-12" id="contenedorHerramientasDesarrollo">
                            <div class="row my-4 rowHerramientas">
                                <div class="col-12 col-md-6 d-flex p-0">
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <h4>HTML</h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 452 520">
                                            <path fill="#e34f26" d="M41 460L0 0h451l-41 460-185 52" />
                                            <path fill="#ef652a" d="M226 472l149-41 35-394H226" />
                                            <path fill="#ecedee" d="M226 208h-75l-5-58h80V94H84l15 171h127zm0 147l-64-17-4-45h-56l7 89 117 32z"/>
                                            <path fill="#fff" d="M226 265h69l-7 73-62 17v59l115-32 16-174H226zm0-171v56h136l5-56z"/>
                                        </svg>
                                    </div>
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <h4>CSS</h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 452 520">
                                            <path fill="#0c73b8" d="M41 460L0 0h451l-41 460-185 52"/>
                                            <path fill="#30a9dc" d="M226 472l149-41 35-394H226"/>
                                            <path fill="#ecedee" d="M226 208H94l5 57h127zm0-114H84l5 56h137zm0 261l-124-33 7 60 117 32z"/>
                                            <path fill="#fff" d="M226 265h69l-7 73-62 17v59l115-32 26-288H226v56h80l-6 58h-74z"/>
                                        </svg>
                                    </div>
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <h4>SASS</h4>
                                        <img src="/src/img/sassLogo.svg" alt="SASS" class="svgLogo">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 d-flex p-0">
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <h4>Bootstrap</h4>
                                        <svg width="2500" height="2500" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet"><path d="M0 222.991C0 241.223 14.779 256 33.009 256H222.99C241.223 256 256 241.221 256 222.991V33.01C256 14.777 241.221 0 222.991 0H33.01C14.777 0 0 14.779 0 33.009V222.99z" fill="#563D7C"/><path d="M106.158 113.238V76.985h31.911c3.04 0 5.97.253 8.792.76 2.822.506 5.319 1.41 7.49 2.713 2.17 1.303 3.907 3.112 5.21 5.427 1.302 2.316 1.954 5.283 1.954 8.9 0 6.513-1.954 11.217-5.862 14.111-3.907 2.895-8.9 4.342-14.979 4.342h-34.516zM72.075 50.5v155h75.112c6.947 0 13.713-.868 20.298-2.605 6.585-1.737 12.446-4.414 17.584-8.032 5.137-3.618 9.226-8.286 12.265-14.002 3.04-5.717 4.559-12.483 4.559-20.298 0-9.697-2.352-17.982-7.055-24.856-4.704-6.875-11.832-11.687-21.384-14.437 6.947-3.328 12.194-7.598 15.74-12.808 3.545-5.21 5.318-11.722 5.318-19.538 0-7.236-1.194-13.314-3.582-18.235-2.388-4.92-5.753-8.864-10.095-11.831-4.341-2.967-9.551-5.102-15.63-6.404-6.078-1.303-12.808-1.954-20.189-1.954H72.075zm34.083 128.515v-42.549h37.121c7.381 0 13.315 1.7 17.802 5.102 4.486 3.401 6.73 9.081 6.73 17.041 0 4.053-.688 7.381-2.063 9.986-1.375 2.605-3.22 4.668-5.536 6.187-2.315 1.52-4.993 2.605-8.032 3.257-3.04.65-6.223.976-9.552.976h-36.47z" fill="#FFF"/></svg>
                                    </div>
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <h4>JS</h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 630 630">
                                            <rect width="630" height="630" fill="#f7df1e"/>
                                            <path d="m423.2 492.19c12.69 20.72 29.2 35.95 58.4 35.95 24.53 0 40.2-12.26 40.2-29.2 0-20.3-16.1-27.49-43.1-39.3l-14.8-6.35c-42.72-18.2-71.1-41-71.1-89.2 0-44.4 33.83-78.2 86.7-78.2 37.64 0 64.7 13.1 84.2 47.4l-46.1 29.6c-10.15-18.2-21.1-25.37-38.1-25.37-17.34 0-28.33 11-28.33 25.37 0 17.76 11 24.95 36.4 35.95l14.8 6.34c50.3 21.57 78.7 43.56 78.7 93 0 53.3-41.87 82.5-98.1 82.5-54.98 0-90.5-26.2-107.88-60.54zm-209.13 5.13c9.3 16.5 17.76 30.45 38.1 30.45 19.45 0 31.72-7.61 31.72-37.2v-201.3h59.2v202.1c0 61.3-35.94 89.2-88.4 89.2-47.4 0-74.85-24.53-88.81-54.075z"/>
                                        </svg>
                                    </div>
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <h4>React</h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-11.5 -10.23174 23 20.46348">
                                            <title>React Logo</title>
                                            <circle cx="0" cy="0" r="2.05" fill="#61dafb"/>
                                            <g stroke="#61dafb" stroke-width="1" fill="none">
                                                <ellipse rx="11" ry="4.2"/>
                                                <ellipse rx="11" ry="4.2" transform="rotate(60)"/>
                                                <ellipse rx="11" ry="4.2" transform="rotate(120)"/>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-4 rowHerramientas">
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <h4>PHP</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" height="383.5975" id="svg3430" version="1.1" viewBox="0 0 711.20123 383.5975" width="711.20123" xml:space="preserve">
                                        <title id="title3510">Official PHP Logo</title>
                                        <metadata id="metadata3436">
                                            <rdf:RDF>
                                            <cc:Work rdf:about="">
                                                <dc:format>image/svg+xml</dc:format>
                                                <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
                                                <dc:title>Official PHP Logo</dc:title>
                                                <dc:creator>
                                                <cc:Agent>
                                                    <dc:title>Colin Viebrock</dc:title>
                                                </cc:Agent>
                                                </dc:creator>
                                                <dc:description/>
                                                <dc:contributor>
                                                <cc:Agent>
                                                    <dc:title/>
                                                </cc:Agent>
                                                </dc:contributor>
                                                <cc:license rdf:resource="http://creativecommons.org/licenses/by-sa/4.0/"/>
                                                <dc:rights>
                                                <cc:Agent>
                                                    <dc:title>Copyright Colin Viebrock 1997 - All rights reserved.</dc:title>
                                                </cc:Agent>
                                                </dc:rights>
                                                <dc:date>1997</dc:date>
                                            </cc:Work>
                                            <cc:License rdf:about="http://creativecommons.org/licenses/by-sa/4.0/">
                                                <cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction"/>
                                                <cc:permits rdf:resource="http://creativecommons.org/ns#Distribution"/>
                                                <cc:requires rdf:resource="http://creativecommons.org/ns#Notice"/>
                                                <cc:requires rdf:resource="http://creativecommons.org/ns#Attribution"/>
                                                <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks"/>
                                                <cc:requires rdf:resource="http://creativecommons.org/ns#ShareAlike"/>
                                            </cc:License>
                                            </rdf:RDF>
                                        </metadata>
                                        <defs id="defs3434">
                                            <clipPath clipPathUnits="userSpaceOnUse" id="clipPath3444">
                                            <path d="M 11.52,162 C 11.52,81.677 135.307,16.561 288,16.561 l 0,0 c 152.693,0 276.481,65.116 276.481,145.439 l 0,0 c 0,80.322 -123.788,145.439 -276.481,145.439 l 0,0 C 135.307,307.439 11.52,242.322 11.52,162" id="path3446"/>
                                            </clipPath>
                                            <radialGradient cx="0" cy="0" fx="0" fy="0" gradientTransform="matrix(363.05789,0,0,-363.05789,177.52002,256.30713)" gradientUnits="userSpaceOnUse" id="radialGradient3452" r="1" spreadMethod="pad">
                                            <stop id="stop3454" offset="0" style="stop-opacity:1;stop-color:#aeb2d5"/>
                                            <stop id="stop3456" offset="0.3" style="stop-opacity:1;stop-color:#aeb2d5"/>
                                            <stop id="stop3458" offset="0.75" style="stop-opacity:1;stop-color:#484c89"/>
                                            <stop id="stop3460" offset="1" style="stop-opacity:1;stop-color:#484c89"/>
                                            </radialGradient>
                                            <clipPath clipPathUnits="userSpaceOnUse" id="clipPath3468">
                                            <path d="M 0,324 576,324 576,0 0,0 0,324 Z" id="path3470"/>
                                            </clipPath>
                                            <clipPath clipPathUnits="userSpaceOnUse" id="clipPath3480">
                                            <path d="M 0,324 576,324 576,0 0,0 0,324 Z" id="path3482"/>
                                            </clipPath>
                                        </defs>
                                        <g id="g3438" transform="matrix(1.25,0,0,-1.25,-4.4,394.29875)">
                                            <g id="g3440">
                                            <g clip-path="url(#clipPath3444)" id="g3442">
                                                <g id="g3448">
                                                <g id="g3450">
                                                    <path d="M 11.52,162 C 11.52,81.677 135.307,16.561 288,16.561 l 0,0 c 152.693,0 276.481,65.116 276.481,145.439 l 0,0 c 0,80.322 -123.788,145.439 -276.481,145.439 l 0,0 C 135.307,307.439 11.52,242.322 11.52,162" id="path3462" style="fill:url(#radialGradient3452);stroke:none"/>
                                                </g>
                                                </g>
                                            </g>
                                            </g>
                                            <g id="g3464">
                                            <g clip-path="url(#clipPath3468)" id="g3466">
                                                <g id="g3472" transform="translate(288,27.3594)">
                                                <path d="M 0,0 C 146.729,0 265.68,60.281 265.68,134.641 265.68,209 146.729,269.282 0,269.282 -146.729,269.282 -265.68,209 -265.68,134.641 -265.68,60.281 -146.729,0 0,0" id="path3474" style="fill:#777bb3;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                                </g>
                                            </g>
                                            </g>
                                            <g id="g3476">
                                            <g clip-path="url(#clipPath3480)" id="g3478">
                                                <g id="g3484" transform="translate(161.7344,145.3066)">
                                                <path d="m 0,0 c 12.065,0 21.072,2.225 26.771,6.611 5.638,4.341 9.532,11.862 11.573,22.353 1.903,9.806 1.178,16.653 -2.154,20.348 C 32.783,53.086 25.417,55 14.297,55 L -4.984,55 -15.673,0 0,0 Z m -63.063,-67.75 c -0.895,0 -1.745,0.4 -2.314,1.092 -0.57,0.691 -0.801,1.601 -0.63,2.48 L -37.679,81.573 C -37.405,82.982 -36.17,84 -34.734,84 L 26.32,84 C 45.508,84 59.79,78.79 68.767,68.513 77.792,58.182 80.579,43.741 77.05,25.592 75.614,18.198 73.144,11.331 69.709,5.183 66.27,-0.972 61.725,-6.667 56.198,-11.747 49.582,-17.939 42.094,-22.429 33.962,-25.071 25.959,-27.678 15.681,-29 3.414,-29 l -24.722,0 -7.06,-36.322 c -0.274,-1.41 -1.508,-2.428 -2.944,-2.428 l -31.751,0 z" id="path3486" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                                </g>
                                                <g id="g3488" transform="translate(159.2236,197.3071)">
                                                <path d="m 0,0 16.808,0 c 13.421,0 18.083,-2.945 19.667,-4.7 2.628,-2.914 3.124,-9.058 1.435,-17.767 C 36.012,-32.217 32.494,-39.13 27.452,-43.012 22.29,-46.986 13.898,-49 2.511,-49 L -9.523,-49 0,0 Z m 28.831,35 -61.055,0 c -2.872,0 -5.341,-2.036 -5.889,-4.855 l -28.328,-145.751 c -0.342,-1.759 0.12,-3.578 1.259,-4.961 1.14,-1.383 2.838,-2.183 4.63,-2.183 l 31.75,0 c 2.873,0 5.342,2.036 5.89,4.855 l 6.588,33.895 22.249,0 c 12.582,0 23.174,1.372 31.479,4.077 8.541,2.775 16.399,7.48 23.354,13.984 5.752,5.292 10.49,11.232 14.08,17.657 3.591,6.427 6.171,13.594 7.668,21.302 3.715,19.104 0.697,34.402 -8.969,45.466 C 63.965,29.444 48.923,35 28.831,35 m -45.633,-90 19.313,0 c 12.801,0 22.336,2.411 28.601,7.234 6.266,4.824 10.492,12.875 12.688,24.157 2.101,10.832 1.144,18.476 -2.871,22.929 C 36.909,3.773 28.87,6 16.808,6 L -4.946,6 -16.802,-55 M 28.831,29 C 47.198,29 60.597,24.18 69.019,14.539 77.44,4.898 79.976,-8.559 76.616,-25.836 75.233,-32.953 72.894,-39.46 69.601,-45.355 66.304,-51.254 61.999,-56.648 56.679,-61.539 50.339,-67.472 43.296,-71.7 35.546,-74.218 27.796,-76.743 17.925,-78 5.925,-78 l -27.196,0 -7.531,-38.75 -31.75,0 28.328,145.75 61.055,0" id="path3490" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                                </g>
                                                <g id="g3492" transform="translate(311.583,116.3066)">
                                                <path d="m 0,0 c -0.896,0 -1.745,0.4 -2.314,1.092 -0.571,0.691 -0.802,1.6 -0.631,2.48 L 9.586,68.061 C 10.778,74.194 10.484,78.596 8.759,80.456 7.703,81.593 4.531,83.5 -4.848,83.5 L -27.55,83.5 -43.305,2.428 C -43.579,1.018 -44.814,0 -46.25,0 l -31.5,0 c -0.896,0 -1.745,0.4 -2.315,1.092 -0.57,0.691 -0.801,1.601 -0.63,2.48 l 28.328,145.751 c 0.274,1.409 1.509,2.427 2.945,2.427 l 31.5,0 c 0.896,0 1.745,-0.4 2.315,-1.091 0.57,-0.692 0.801,-1.601 0.63,-2.481 L -21.813,113 2.609,113 c 18.605,0 31.221,-3.28 38.569,-10.028 7.49,-6.884 9.827,-17.891 6.947,-32.719 L 34.945,2.428 C 34.671,1.018 33.437,0 32,0 L 0,0 Z" id="path3494" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                                </g>
                                                <g id="g3496" transform="translate(293.6611,271.0571)">
                                                <path d="m 0,0 -31.5,0 c -2.873,0 -5.342,-2.036 -5.89,-4.855 l -28.328,-145.751 c -0.342,-1.759 0.12,-3.578 1.26,-4.961 1.14,-1.383 2.838,-2.183 4.63,-2.183 l 31.5,0 c 2.872,0 5.342,2.036 5.89,4.855 l 15.283,78.645 20.229,0 c 9.363,0 11.328,-2 11.407,-2.086 0.568,-0.611 1.315,-3.441 0.082,-9.781 l -12.531,-64.489 c -0.342,-1.759 0.12,-3.578 1.26,-4.961 1.14,-1.383 2.838,-2.183 4.63,-2.183 l 32,0 c 2.872,0 5.342,2.036 5.89,4.855 l 13.179,67.825 c 3.093,15.921 0.447,27.864 -7.861,35.5 -7.928,7.281 -21.208,10.82 -40.599,10.82 l -20.784,0 6.143,31.605 C 6.231,-5.386 5.77,-3.566 4.63,-2.184 3.49,-0.801 1.792,0 0,0 m 0,-6 -7.531,-38.75 28.062,0 c 17.657,0 29.836,-3.082 36.539,-9.238 6.703,-6.16 8.711,-16.141 6.032,-29.938 l -13.18,-67.824 -32,0 12.531,64.488 c 1.426,7.336 0.902,12.34 -1.574,15.008 -2.477,2.668 -7.746,4.004 -15.805,4.004 l -25.176,0 -16.226,-83.5 -31.5,0 L -31.5,-6 0,-6" id="path3498" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                                </g>
                                                <g id="g3500" transform="translate(409.5498,145.3066)">
                                                <path d="m 0,0 c 12.065,0 21.072,2.225 26.771,6.611 5.638,4.34 9.532,11.861 11.574,22.353 1.903,9.806 1.178,16.653 -2.155,20.348 C 32.783,53.086 25.417,55 14.297,55 L -4.984,55 -15.673,0 0,0 Z m -63.062,-67.75 c -0.895,0 -1.745,0.4 -2.314,1.092 -0.57,0.691 -0.802,1.601 -0.631,2.48 L -37.679,81.573 C -37.404,82.982 -36.17,84 -34.733,84 L 26.32,84 C 45.509,84 59.79,78.79 68.768,68.513 77.793,58.183 80.579,43.742 77.051,25.592 75.613,18.198 73.144,11.331 69.709,5.183 66.27,-0.972 61.725,-6.667 56.198,-11.747 49.582,-17.939 42.094,-22.429 33.962,-25.071 25.959,-27.678 15.681,-29 3.414,-29 l -24.723,0 -7.057,-36.322 c -0.275,-1.41 -1.509,-2.428 -2.946,-2.428 l -31.75,0 z" id="path3502" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                                </g>
                                                <g id="g3504" transform="translate(407.0391,197.3071)">
                                                <path d="M 0,0 16.808,0 C 30.229,0 34.891,-2.945 36.475,-4.7 39.104,-7.614 39.6,-13.758 37.91,-22.466 36.012,-32.217 32.493,-39.13 27.452,-43.012 22.29,-46.986 13.898,-49 2.511,-49 L -9.522,-49 0,0 Z m 28.831,35 -61.054,0 c -2.872,0 -5.341,-2.036 -5.889,-4.855 L -66.44,-115.606 c -0.342,-1.759 0.12,-3.578 1.259,-4.961 1.14,-1.383 2.838,-2.183 4.63,-2.183 l 31.75,0 c 2.872,0 5.342,2.036 5.89,4.855 l 6.587,33.895 22.249,0 c 12.582,0 23.174,1.372 31.479,4.077 8.541,2.775 16.401,7.481 23.356,13.986 5.752,5.291 10.488,11.23 14.078,17.655 3.591,6.427 6.171,13.594 7.668,21.302 3.715,19.105 0.697,34.403 -8.969,45.467 C 63.965,29.444 48.924,35 28.831,35 m -45.632,-90 19.312,0 c 12.801,0 22.336,2.411 28.601,7.234 6.267,4.824 10.492,12.875 12.688,24.157 2.102,10.832 1.145,18.476 -2.871,22.929 C 36.909,3.773 28.87,6 16.808,6 L -4.946,6 -16.801,-55 M 28.831,29 C 47.198,29 60.597,24.18 69.019,14.539 77.441,4.898 79.976,-8.559 76.616,-25.836 75.233,-32.953 72.894,-39.46 69.601,-45.355 66.304,-51.254 61.999,-56.648 56.679,-61.539 50.339,-67.472 43.296,-71.7 35.546,-74.218 27.796,-76.743 17.925,-78 5.925,-78 l -27.196,0 -7.53,-38.75 -31.75,0 28.328,145.75 61.054,0" id="path3506" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                                </g>
                                            </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <h4>SQL</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="256" height="133" viewBox="0 0 204.8 105.765"><path d="M0 96.334h6.747V69.7l10.445 23.227c1.232 2.8 2.92 3.806 6.228 3.806s4.93-.995 6.164-3.806L40.03 69.7v26.644h6.748v-26.6c0-2.595-1.04-3.85-3.18-4.498-5.125-1.6-8.564-.216-10.12 3.244l-10.25 22.923L13.3 68.48c-1.492-3.46-4.995-4.844-10.12-3.244C1.038 65.885 0 67.14 0 69.734v26.6zm52.386-21.686h6.745v14.68c-.063.798.256 2.67 3.952 2.727 1.886.03 14.554 0 14.672 0v-17.48h6.76c.03 0-.007 23.834-.006 23.936.037 5.878-7.294 7.155-10.672 7.254H52.533v-4.54l21.342-.001c4.342-.46 3.83-2.617 3.83-3.344v-1.77h-14.34c-6.672-.06-10.92-2.973-10.973-6.323-.005-.3.144-14.995-.004-15.14z" fill="#00618a"/><path d="M89.716 96.334h19.398c2.27 0 4.477-.475 6.23-1.298 2.92-1.34 4.347-3.157 4.347-5.536v-4.93c0-1.947-1.622-3.763-4.8-4.974-1.687-.65-3.763-.995-5.774-.995h-8.175c-2.724 0-4.022-.822-4.346-2.638-.065-.216-.065-.4-.065-.606v-3.07c0-.173 0-.347.065-.563.324-1.384 1.038-1.774 3.438-2 .195 0 .454-.044.65-.044h19.268v-4.497h-18.944c-2.725 0-4.152.173-5.45.562C91.532 67 89.78 69 89.78 72.46v3.936c0 3.028 3.44 5.623 9.212 6.228.65.043 1.298.086 1.946.086h7.007c.26 0 .52 0 .714.044 2.14.173 3.05.562 3.698 1.34.4.4.52.78.52 1.2v3.936c0 .476-.324 1.082-.973 1.6-.584.52-1.557.865-2.855.952-.26 0-.454.043-.713.043h-18.62v4.498zm72.064-7.828c0 4.628 3.438 7.223 10.38 7.742a29.45 29.45 0 0 0 1.946.086h17.582v-4.498h-17.712c-3.957 0-5.45-.995-5.45-3.374v-23.27h-6.747v23.312zm-37.785.234V72.705c0-4.074 2.86-6.545 8.516-7.325a12.94 12.94 0 0 1 1.821-.13h12.807a13.87 13.87 0 0 1 1.886.13c5.656.78 8.516 3.25 8.516 7.325V88.74c0 3.305-1.215 5.074-4.015 6.227l6.646 6h-7.834l-5.377-4.854-5.413.343h-7.216c-1.235 0-2.535-.174-3.966-.564-4.3-1.17-6.37-3.424-6.37-7.152zm7.283-.4c0 .217.065.433.13.694.4 1.864 2.145 2.904 4.8 2.904h6.13l-5.63-5.083h7.834l4.9 4.433c.905-.482 1.5-1.22 1.7-2.167.065-.216.065-.433.065-.65V73.096c0-.173 0-.4-.065-.607-.4-1.733-2.146-2.73-4.746-2.73H136.22c-3 0-4.94 1.3-4.94 3.337v15.256z" fill="#e48e00"/><g fill="#00618a"><path d="M197.624 57.73c-4.147-.112-7.316.273-10.024 1.415-.77.325-1.997.333-2.123 1.298.423.443.49 1.105.825 1.65.647 1.047 1.74 2.45 2.713 3.184 1.064.803 2.16 1.663 3.303 2.36 2.03 1.238 4.296 1.945 6.25 3.184 1.152.73 2.296 1.65 3.42 2.476.555.408.93 1.042 1.65 1.297v-.118c-.38-.483-.477-1.147-.825-1.65l-1.533-1.533c-1.5-2-3.402-3.737-5.425-5.19-1.613-1.158-5.224-2.722-5.897-4.6l-.118-.118c1.144-.13 2.483-.543 3.54-.825 1.773-.475 3.358-.353 5.19-.825l2.477-.708v-.472c-.926-.95-1.586-2.207-2.595-3.066-2.64-2.25-5.523-4.495-8.49-6.37-1.646-1.04-3.68-1.714-5.425-2.595-.587-.296-1.618-.45-2.005-.944-.916-1.168-1.415-2.65-2.122-4-1.48-2.85-2.934-5.964-4.246-8.963-.895-2.045-1.48-4.062-2.594-5.897-5.355-8.804-11.12-14.118-20.048-19.34-1.9-1.11-4.187-1.55-6.605-2.123l-3.892-.236c-.792-.33-1.616-1.3-2.36-1.77-2.958-1.87-10.545-5.933-12.736-.6-1.383 3.373 2.067 6.664 3.302 8.374.866 1.2 1.976 2.543 2.594 3.892.407.886.478 1.775.826 2.713.857 2.3 1.603 4.823 2.712 6.958.56 1.08 1.178 2.218 1.887 3.184.435.593 1.18.854 1.297 1.77-.728 1.02-.77 2.6-1.18 3.892-1.843 5.812-1.148 13.035 1.533 17.337.823 1.32 2.76 4.152 5.425 3.066 2.33-.95 1.8-3.89 2.477-6.486.15-.59.058-1.02.354-1.415v.118l2.123 4.245c1.57 2.53 4.36 5.175 6.722 6.96 1.225.925 2.2 2.525 3.774 3.066v-.118h-.118c-.307-.48-.787-.677-1.18-1.06-.923-.905-1.95-2.03-2.713-3.066-2.15-2.918-4.048-6.11-5.778-9.435-.826-1.587-1.545-3.338-2.24-4.953-.268-.623-.265-1.564-.825-1.887-.763 1.184-1.887 2.14-2.477 3.538-.944 2.234-1.066 4.958-1.415 7.784-.207.074-.115.023-.236.118-1.642-.396-2.22-2.087-2.83-3.538-1.544-3.67-1.83-9.576-.472-13.798.35-1.092 1.94-4.534 1.297-5.543-.307-1.007-1.32-1.6-1.887-2.36-.7-.95-1.402-2.204-1.887-3.302-1.264-2.86-1.854-6.07-3.184-8.963-.636-1.382-1.71-2.78-2.594-4-.978-1.36-2.073-2.364-2.83-4-.27-.585-.636-1.52-.236-2.123a.93.93 0 0 1 .708-.708c.684-.527 2.59.175 3.302.472 1.89.786 3.47 1.534 5.072 2.595.77.5 1.547 1.496 2.476 1.77h1.06c1.66.382 3.52.12 5.07.59 2.742.833 5.198 2.13 7.43 3.538 6.798 4.292 12.355 10.402 16.157 17.7.612 1.173.876 2.294 1.415 3.538 1.087 2.5 2.456 5.093 3.538 7.547 1.08 2.45 2.13 4.92 3.656 6.958.802 1.07 3.9 1.646 5.307 2.24.987.417 2.603.852 3.538 1.415 1.785 1.077 3.515 2.36 5.19 3.54.837.59 3.41 1.883 3.538 2.948z"/><path d="M144.91 12.798c-.865-.016-1.476.094-2.123.236v.118h.118c.412.848 1.14 1.393 1.65 2.123l1.18 2.476.118-.118c.73-.515 1.065-1.338 1.06-2.595-.293-.308-.336-.694-.59-1.062-.337-.49-1-.768-1.415-1.18z" fill-rule="evenodd"/></g><path d="M194.855 91.708c0 2.97 2.347 4.972 4.972 4.972s4.972-2.002 4.972-4.972-2.347-4.972-4.972-4.972-4.972 2.002-4.972 4.972zm8.83 0c0 2.254-1.723 3.938-3.86 3.938-2.16 0-3.86-1.684-3.86-3.938s1.698-3.938 3.86-3.938c2.135 0 3.86 1.684 3.86 3.938zm-2.52 2.838h1.113l-1.63-2.492c.875-.093 1.537-.518 1.537-1.552 0-1.154-.73-1.63-2.134-1.63h-2.215v5.675h.955v-2.453h.888l1.485 2.453zm-2.374-3.25v-1.63h1.1c.57 0 1.26.106 1.26.77 0 .795-.623.862-1.34.862h-1.02z" fill="#e48e00" fill-rule="evenodd"/></svg>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <h4>NodeJS</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="589.827" height="361.238" version="1.2" viewBox="0 0 442.37 270.929"><defs><clipPath id="a"><path d="M239.03 226.605l-42.13 24.317c-1.578.91-2.546 2.59-2.546 4.406v48.668c0 1.817.968 3.496 2.546 4.406l42.133 24.336c1.575.907 3.517.907 5.09 0l42.126-24.336c1.57-.91 2.54-2.59 2.54-4.406v-48.668c0-1.816-.97-3.496-2.55-4.406l-42.12-24.317c-.79-.453-1.67-.68-2.55-.68-.88 0-1.76.227-2.55.68"/></clipPath><linearGradient id="b" x1="-.348" x2="1.251" gradientTransform="rotate(116.114 53.1 202.97) scale(86.48)" gradientUnits="userSpaceOnUse"><stop offset=".3" stop-color="#3E863D"/><stop offset=".5" stop-color="#55934F"/><stop offset=".8" stop-color="#5AAD45"/></linearGradient><clipPath id="c"><path d="M195.398 307.086c.403.523.907.976 1.5 1.316l36.14 20.875 6.02 3.46c.9.52 1.926.74 2.934.665.336-.027.672-.09 1-.183l44.434-81.36c-.34-.37-.738-.68-1.184-.94l-27.586-15.93-14.582-8.39c-.414-.24-.863-.41-1.32-.53zm0 0"/></clipPath><linearGradient id="d" x1="-.456" x2=".582" gradientTransform="rotate(-36.46 550.846 -214.337) scale(132.798)" gradientUnits="userSpaceOnUse"><stop offset=".57" stop-color="#3E863D"/><stop offset=".72" stop-color="#619857"/><stop offset="1" stop-color="#76AC64"/></linearGradient><clipPath id="e"><path d="M241.066 225.953c-.707.07-1.398.29-2.035.652l-42.01 24.247 45.3 82.51c.63-.09 1.25-.3 1.81-.624l42.13-24.336c1.3-.754 2.19-2.03 2.46-3.476l-46.18-78.89c-.34-.067-.68-.102-1.03-.102-.14 0-.28.007-.42.02"/></clipPath><linearGradient id="f" x1=".043" x2=".984" gradientTransform="translate(192.862 279.652) scale(97.417)" gradientUnits="userSpaceOnUse"><stop offset=".16" stop-color="#6BBF47"/><stop offset=".38" stop-color="#79B461"/><stop offset=".47" stop-color="#75AC64"/><stop offset=".7" stop-color="#659E5A"/><stop offset=".9" stop-color="#3E863D"/></linearGradient></defs><path fill="#689f63" d="M218.647 270.93c-1.46 0-2.91-.383-4.19-1.12l-13.337-7.896c-1.992-1.114-1.02-1.508-.363-1.735 2.656-.93 3.195-1.14 6.03-2.75.298-.17.688-.11.993.07l10.246 6.08c.37.2.895.2 1.238 0l39.95-23.06c.37-.21.61-.64.61-1.08v-46.1c0-.46-.24-.87-.618-1.1l-39.934-23.04c-.37-.22-.86-.22-1.23 0l-39.926 23.04c-.387.22-.633.65-.633 1.09v46.1c0 .44.24.86.62 1.07l10.94 6.32c5.94 2.97 9.57-.53 9.57-4.05v-45.5c0-.65.51-1.15 1.16-1.15h5.06c.63 0 1.15.5 1.15 1.15v45.52c0 7.92-4.32 12.47-11.83 12.47-2.31 0-4.13 0-9.21-2.5l-10.48-6.04c-2.59-1.5-4.19-4.3-4.19-7.29v-46.1c0-3 1.6-5.8 4.19-7.28l39.99-23.07c2.53-1.43 5.89-1.43 8.4 0l39.94 23.08c2.58 1.49 4.19 4.28 4.19 7.28v46.1c0 2.99-1.61 5.78-4.19 7.28l-39.94 23.07c-1.28.74-2.73 1.12-4.21 1.12"/><path fill="#689f63" d="M230.987 239.164c-17.48 0-21.145-8.024-21.145-14.754 0-.64.516-1.15 1.157-1.15h5.16c.57 0 1.05.415 1.14.978.78 5.258 3.1 7.91 13.67 7.91 8.42 0 12-1.902 12-6.367 0-2.57-1.02-4.48-14.1-5.76-10.94-1.08-17.7-3.49-17.7-12.24 0-8.06 6.8-12.86 18.19-12.86 12.79 0 19.13 4.44 19.93 13.98.03.33-.09.65-.31.89-.22.23-.53.37-.85.37h-5.19c-.54 0-1.01-.38-1.12-.9-1.25-5.53-4.27-7.3-12.48-7.3-9.19 0-10.26 3.2-10.26 5.6 0 2.91 1.26 3.76 13.66 5.4 12.28 1.63 18.11 3.93 18.11 12.56 0 8.7-7.26 13.69-19.92 13.69m48.66-48.89h1.34c1.1 0 1.31-.77 1.31-1.22 0-1.18-.81-1.18-1.26-1.18h-1.38zm-1.63-3.78h2.97c1.02 0 3.02 0 3.02 2.28 0 1.59-1.02 1.92-1.63 2.12 1.19.08 1.27.86 1.43 1.96.08.69.21 1.88.45 2.28h-1.83c-.05-.4-.33-2.6-.33-2.72-.12-.49-.29-.73-.9-.73h-1.51v3.46h-1.67zm-3.57 4.3c0 3.58 2.89 6.48 6.44 6.48 3.58 0 6.47-2.96 6.47-6.48 0-3.59-2.93-6.44-6.48-6.44-3.5 0-6.44 2.81-6.44 6.43m14.16.03c0 4.24-3.47 7.7-7.7 7.7-4.2 0-7.7-3.42-7.7-7.7 0-4.36 3.58-7.7 7.7-7.7 4.15 0 7.69 3.35 7.69 7.7"/><path fill="#333" fill-rule="evenodd" d="M94.936 90.55c0-1.84-.97-3.53-2.558-4.445l-42.356-24.37c-.715-.42-1.516-.64-2.328-.67h-.438c-.812.03-1.613.25-2.34.67L2.562 86.105C.984 87.025 0 88.715 0 90.555l.093 65.64c0 .91.47 1.76 1.27 2.21.78.48 1.76.48 2.54 0l25.18-14.42c1.59-.946 2.56-2.618 2.56-4.44V108.88c0-1.83.97-3.52 2.555-4.43l10.72-6.174c.796-.46 1.67-.688 2.56-.688.876 0 1.77.226 2.544.687l10.715 6.172c1.586.91 2.56 2.6 2.56 4.43v30.663c0 1.82.983 3.5 2.565 4.44l25.164 14.41c.79.47 1.773.47 2.56 0 .776-.45 1.268-1.3 1.268-2.21zm199.868 34.176c0 .457-.243.88-.64 1.106l-14.548 8.386c-.395.227-.883.227-1.277 0l-14.55-8.386c-.4-.227-.64-.65-.64-1.106V107.93c0-.458.24-.88.63-1.11l14.54-8.4c.4-.23.89-.23 1.29 0l14.55 8.4c.4.23.64.652.64 1.11zM298.734.324c-.794-.442-1.76-.43-2.544.027-.78.46-1.262 1.3-1.262 2.21v65c0 .64-.34 1.23-.894 1.55-.55.32-1.235.32-1.79 0L281.634 63c-1.58-.914-3.526-.914-5.112 0l-42.37 24.453c-1.583.91-2.56 2.6-2.56 4.42v48.92c0 1.83.977 3.51 2.56 4.43l42.37 24.47c1.582.91 3.53.91 5.117 0l42.37-24.48c1.58-.92 2.56-2.6 2.56-4.43V18.863c0-1.856-1.01-3.563-2.63-4.47zm141.093 107.164c1.574-.914 2.543-2.602 2.543-4.422V91.21c0-1.824-.97-3.507-2.547-4.425l-42.1-24.44c-1.59-.92-3.54-.92-5.13 0l-42.36 24.45c-1.59.92-2.56 2.6-2.56 4.43v48.9c0 1.84.99 3.54 2.58 4.45l42.09 23.99c1.55.89 3.45.9 5.02.03l25.46-14.15c.8-.45 1.31-1.3 1.31-2.22 0-.92-.49-1.78-1.29-2.23l-42.62-24.46c-.8-.45-1.29-1.3-1.29-2.21v-15.34c0-.916.48-1.76 1.28-2.216l13.26-7.65c.79-.46 1.76-.46 2.55 0l13.27 7.65c.79.45 1.28 1.3 1.28 2.21v12.06c0 .91.49 1.76 1.28 2.22.79.45 1.77.45 2.56-.01zm0 0"/><path fill="#689f63" fill-rule="evenodd" d="M394.538 105.2c.3-.177.676-.177.98 0l8.13 4.69c.304.176.49.5.49.85v9.39c0 .35-.186.674-.49.85l-8.13 4.69c-.304.177-.68.177-.98 0l-8.125-4.69c-.31-.176-.5-.5-.5-.85v-9.39c0-.35.18-.674.49-.85zm0 0"/><g clip-path="url(#a)" transform="translate(-78.306 -164.016)"><path fill="url(#b)" d="M331.363 246.793l-118.715-58.19-60.87 124.174L270.49 370.97zm0 0"/></g><g clip-path="url(#c)" transform="translate(-78.306 -164.016)"><path fill="url(#d)" d="M144.07 264.004l83.825 113.453 110.86-81.906-83.83-113.45zm0 0"/></g><g clip-path="url(#e)" transform="translate(-78.306 -164.016)"><path fill="url(#f)" d="M197.02 225.934v107.43h91.683v-107.43zm0 0"/></g></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contenedorProyectos" data-seccion="2" style="z-index:1; background-color:#333333;"class="seccionesOscuras contenedorContenido position-relative pb-5">
                <div class="d-flex justify-content-center">
                    <h2 class="titulo tituloFuente tituloSeparadorBlanco">Nuestro trabajo</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12 d-flex flex-column justify-content-center">
                            <p class="text-center" id="proyectosSubtitulo">¡Cada trabajo es único!</p>
                            <p class="text-center" id="textoTrabajos">Mantente conectado con tus clientes a través de nuestros sitios y marca la diferencia</p>
                            <a href="https://proyectos.madnox.net" class="botonProyectos text-center">Proyectos</a>
                        </div>
                        <div class="col-md-6 col-12 d-flex mt-4 mt-md-0">
                            <div>
                                <img src="/src/img/smartphoneTrabajos.svg" alt="smartphones" class="w-100 imagenTrabajos">
                            </div>
                            <div style="margin-top:25%">
                                <img src="/src/img/laptopTrabajos.svg" alt="computadoras" class="w-100 imagenTrabajos2">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contenedorNuestrosPrecios" data-seccion="3" class="seccionesBlancas contenedorContenido pb-5" style="position:relative; z-index:1; background-color:#ECEEF1;color:#1A1A1A;">
                <div style="position:relative; z-index:2;">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-center">
                                    <h2 class="titulo tituloFuente tituloSeparadorNegro">Nuestros precios</h2>
                                </div>
                                <p class="text-center" style="font-size:.8rem">Entendemos que cada proyecto es único y personalizado, por lo que nuestros precios son estimaciones que se ajustan según el tipo de trabajo y su complejidad.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-4 p-0">
                                <div class="mx-1 tarjetaPrecio">
                                    <span class="precioRecomendado"></span>
                                    <div class="headerTarjetaPrecio">
                                        <div class="contenedorTituloPrecio">                                
                                            <p class="tituloTarjetaPrecio">
                                                Avanzado
                                            </p>
                                            <div class="contenedorPrecio">
                                                <p class="precioTarjeta">
                                                    400USD
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cuerpoTarjetaPrecio justify-content-center d-flex flex-column text-center">
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoCode.svg" alt="Secciones pagina" class="imgBeneficio">
                                            <p class="beneficio">Secciones<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Número de secciones máximas.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoForm.svg" alt="Formularios" class="imgBeneficio">    
                                            <p class="beneficio">Formularios<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Número de formularios máximos.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoHost.svg" alt="Dominio y Host" class="imgBeneficio">
                                            <p class="beneficio">Dominio y Hosting<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Dominio y Hosting por 1 año.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoEmail.svg" alt="Correos" class="imgBeneficio">
                                            <p class="beneficio">4 correos corporativos<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Cada correo cuenta con 1GB de almacenamiento.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoSSD.svg" alt="Espacio SSD" class="imgBeneficio">
                                            <p class="beneficio">10GB espacio SSD<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">10GB para almacenar los archivos de tu sitio.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoSSL.svg" alt="Certificado SSL" class="imgBeneficio">
                                            <p class="beneficio">Certificado SSL<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Garantiza privacidad y seguridad a tus clientes.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                    </div>
                                    <div class="footerTarjetaPrecio">
                                        <button class="botonTarjetaPrecio">Comencemos</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 p-0">
                                <div class="mx-1 tarjetaPrecio activa recomendado">
                                    <span class="precioRecomendado"></span>
                                    <div class="headerTarjetaPrecio">
                                        <div class="contenedorTituloPrecio">                                
                                            <p class="tituloTarjetaPrecio">
                                                Estándar
                                            </p>
                                            <div class="contenedorPrecio">
                                                <p class="precioTarjeta">
                                                    250 <span>USD</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cuerpoTarjetaPrecio justify-content-center d-flex flex-column text-center">
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoCode.svg" alt="Secciones pagina" class="imgBeneficio">
                                            <p class="beneficio">Secciones<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Número de secciones máximas.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoForm.svg" alt="Formularios" class="imgBeneficio">    
                                            <p class="beneficio">Formularios<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Número de formularios máximos.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoHost.svg" alt="Dominio y Host" class="imgBeneficio">
                                            <p class="beneficio">Dominio y Hosting<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Dominio y Hosting por 1 año.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoEmail.svg" alt="Correos" class="imgBeneficio">
                                            <p class="beneficio">4 correos corporativos<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Cada correo cuenta con 1GB de almacenamiento.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoSSD.svg" alt="Espacio SSD" class="imgBeneficio">
                                            <p class="beneficio">10GB espacio SSD<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">10GB para almacenar los archivos de tu sitio.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoSSL.svg" alt="Certificado SSL" class="imgBeneficio">
                                            <p class="beneficio">Certificado SSL<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Garantiza privacidad y seguridad a tus clientes.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                    </div>
                                    <div class="footerTarjetaPrecio">
                                        <button class="botonTarjetaPrecio">Comencemos</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 p-0">
                                <div class="mx-1 tarjetaPrecio">
                                    <span class="precioRecomendado"></span>
                                    <div class="headerTarjetaPrecio">
                                        <div class="contenedorTituloPrecio">                                
                                            <p class="tituloTarjetaPrecio">
                                                Avanzado
                                            </p>
                                            <div class="contenedorPrecio">
                                                <p class="precioTarjeta">
                                                    400USD
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cuerpoTarjetaPrecio justify-content-center d-flex flex-column text-center">
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoCode.svg" alt="Secciones pagina" class="imgBeneficio">
                                            <p class="beneficio">Secciones<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Número de secciones máximas.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoForm.svg" alt="Formularios" class="imgBeneficio">    
                                            <p class="beneficio">Formularios<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Número de formularios máximos.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoHost.svg" alt="Dominio y Host" class="imgBeneficio">
                                            <p class="beneficio">Dominio y Hosting<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Dominio y Hosting por 1 año.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoEmail.svg" alt="Correos" class="imgBeneficio">
                                            <p class="beneficio">4 correos corporativos<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Cada correo cuenta con 1GB de almacenamiento.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoSSD.svg" alt="Espacio SSD" class="imgBeneficio">
                                            <p class="beneficio">10GB espacio SSD<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">10GB para almacenar los archivos de tu sitio.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img src="/src/img/precioIconoSSL.svg" alt="Certificado SSL" class="imgBeneficio">
                                            <p class="beneficio">Certificado SSL<span class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Garantiza privacidad y seguridad a tus clientes.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                    </div>
                                    <div class="footerTarjetaPrecio">
                                        <button class="botonTarjetaPrecio">Comencemos</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <!-- <div class="row">
                            <div class="col-12" id="tablaPrecios">
                                <div class="row flex-column flex-md-row rowTabla">
                                    <div class="col-12 col-md-3"></div>
                                    <div class="d-flex col-12 col-md-9">                                        
                                        <div class="col-4">Estándar</div>
                                        <div class="col-4">Avanzado</div>
                                        <div class="col-4">Premium</div>
                                    </div>
                                </div>
                                <div class="row flex-column flex-md-row rowTabla">
                                    <div class="col-12 col-md-3"><p>Precios<i class="bi bi-question-circle-fill"></i></p></div>
                                    <div class="d-flex col-12 col-md-9">
                                        <div class="col-4">100</div>
                                        <div class="col-4">200</div>
                                        <div class="col-4">300</div>
                                    </div>
                                </div>
                                <div class="row flex-column flex-md-row rowTabla">
                                    <div class="col-12 col-md-3"><p>Tipo<i class="bi bi-question-circle-fill"></i></p></div>
                                    <div class="d-flex col-12 col-md-9">
                                        <div class="col-4">100</div>
                                        <div class="col-4">200</div>
                                        <div class="col-4">300</div>
                                    </div>
                                </div>
                                <div class="row flex-column flex-md-row rowTabla">
                                    <div class="col-12 col-md-3"><p>Secciones<i class="bi bi-question-circle-fill"></i></p></div>
                                    <div class="d-flex col-12 col-md-9">
                                        <div class="col-4">100</div>
                                        <div class="col-4">200</div>
                                        <div class="col-4">300</div>
                                    </div>
                                </div>
                                <div class="row flex-column flex-md-row rowTabla">
                                    <div class="col-12 col-md-3"><p>Formularios<i class="bi bi-question-circle-fill"></i></p></div>
                                    <div class="d-flex col-12 col-md-9">
                                        <div class="col-4">100</div>
                                        <div class="col-4">200</div>
                                        <div class="col-4">300</div>
                                    </div>
                                </div>
                                <div class="row flex-column flex-md-row rowTabla">
                                    <div class="col-12 col-md-3"><p>Dominio y Hosting<i class="bi bi-question-circle-fill"></i></p></div>
                                    <div class="d-flex col-12 col-md-9">
                                        <div class="col-4">100</div>
                                        <div class="col-4">200</div>
                                        <div class="col-4">300</div>
                                    </div>
                                </div>
                                <div class="row flex-column flex-md-row rowTabla">
                                    <div class="col-12 col-md-3"><p>Certificado SSL<i class="bi bi-question-circle-fill"></i></p></div>
                                    <div class="d-flex col-12 col-md-9">
                                        <div class="col-4">100</div>
                                        <div class="col-4">200</div>
                                        <div class="col-4">300</div>
                                    </div>
                                </div>
                                <div class="row flex-column flex-md-row rowTabla">
                                    <div class="col-12 col-md-3"><p>Correos corporativos<i class="bi bi-question-circle-fill"></i></p></div>
                                    <div class="d-flex col-12 col-md-9">
                                        <div class="col-4">100</div>
                                        <div class="col-4">200</div>
                                        <div class="col-4">300</div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
            <section id="contenedorContactanos" data-seccion="4" class="px-0 seccionesBlancas contenedorContenido container-fluid" style="background-color:#333333;">
                <div id="parteInicialContactanos" class="pb-4" style="position:relative; z-index:1;background-color:#333333;">
                    <div class="d-flex justify-content-center">
                        <h2 class="titulo tituloFuente tituloSeparadorBlanco">Contactanos</h2>
                    </div>
                    <p class="text-center" style="font-size:.8rem">¡Hablemos sobre tu proyecto web! Contáctanos y comienza a destacar en internet.</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div id="imagenContacto" class="px-0 col-md-6 col-12 m-0 position-relative">
                            <div class="position-absolute" style="height:200%; top:-100%; width:100%; left:0;">
                                <div class="" id="contenedorImagenContacto" style="height:50%;position:sticky;top:10vh;" class="bg-warning">
                                    <!-- <img class="px-3 px-md-0" style="height:100%;width:100%;" src="src/img/imagenContacto.jpg" alt=""> -->
                                    <video id="videoFormulario" muted loop autoplay>
                                        <source src="/src/img/gatoVideo.mp4" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 m-0 p-0" id="contenedorFormularioContacto">
                            
                        </div>
                    </div>
                </div> 
            </section>
        </main>
        <footer class="">
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
                            <div class="col-4">
                                <div class="d-flex flex-column px-2">
                                    <h4>Legal</h4>
                                    <a href="/php/terms.php?leg=0">Términos y condiciones</a>
                                    <a href="/php/terms.php?leg=1">Politica de privacidad</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column px-2">
                                    <h4>Soporte</h4>
                                    <p>Unete al equipo</p> 
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column px-2">
                                    <h4>Atribuciones</h4>
                                    <p>Créditos</p>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <hr>
                    <div id="copyLogo" class="d-flex justify-content-center">
                        <p class="m-0">MadNox 2023 Copyright © Derechos Reservados</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="js/main.js" defer></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>