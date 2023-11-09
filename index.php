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
    <meta name="description" content="Diseñamos tu página web, PAQUETES TODO EN UNO , dale a tu proyecto la presencia digital que necesita, ¿Listo para comenzar?">
    <meta name="keywords" content="desarrollo web, diseño web, página web">
    <meta name="copyright" content="Erick Guzmán">
    <meta name="robots" content="index,follow">
    <meta name="category" content="web development">
    <meta name="audience" content="all">
    <meta itemprop="name" content="MADNOX">
    <meta itemprop="telephone" content="5525223863">
    <meta itemprop="address" content="Naucalpan de Juárez,Edo.Méx">
    <link rel="apple-touch-icon" sizes="180x180" href="/src/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/src/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/src/img/favicon-16x16.png">
    <link rel="manifest" href="/src/img/site.webmanifest">
    <link rel="mask-icon" href="/src/img/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="alternate" hreflang="es" href="https:/madnox.net">
    <link rel="canonical" href="https://madnox.net">
    <title>Sitios web de calidad: Diseño, Hosting, SEO y más | MADNOX</title>
    <!-- <link rel="stylesheet" href="/styles/bootstrap5.3.1.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" media="print" onload="this.media='all'" href="/styles/bootstrap1.10.4-icons.css">
    <link rel="stylesheet" href="/styles/indexStyles.css">
    <link rel="stylesheet" media="print" onload="this.media='all'" href="/styles/animate4.1.1.min.css">
    <link rel="stylesheet" media="print" onload="this.media='all'" href="/build/css/intlTelInput.min.css">
</head>
<!-- Google tag (gtag.js) -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-LKZVK25YKC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LKZVK25YKC');
</script> -->
<body>
    <!-- <div id="loadCharge"><span id="preLoader"><span id="dotsPacMan"></span></span></div> -->
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
                                    <button id="botonDrop" class="d-flex align-items-center"><img loading="lazy" class="banderaIdioma" height="1rem" width="1.75rem" src="/src/img/mexicoFlag.svg" alt="bandera de mexico"><span class="claveIdioma">ES&nbsp;</span>Español <span class="flex-grow-1 text-end mt-1" id="trianguloDrop">&#9660;</span></button>
                                    <div id="dropdown" class="position-absolute">
                                        <a href="" class="d-flex align-items-center"><img loading="lazy" height="100%" width="100%" class="banderaIdioma" src="/src/img/usaFlag.svg" alt="bandera de usa"><span class="claveIdioma">EN&nbsp;</span>Ingles</a>
                                        <a href="" class="d-flex align-items-center"><img loading="lazy" height="100%" width="100%" class="banderaIdioma" src="/src/img/brasilFlag.svg" alt="bandera de brasil"><span class="claveIdioma">PT&nbsp;</span>Portugues</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <nav id="nav2" class="container-fluid d-flex">
                    <div id="nav2-background"></div>
                    <a href="/" class="d-flex align-items-center" style="width:15rem;">
                        <img height="100%" width="100%" loading="lazy" id="imgLogo" src="src/img/madnoxLogo.svg" alt="LogoMadnox">
                        <img height="100%" width="100%" loading="lazy" id="tipografiaLogo" src="src/img/madnoxLogoTipografia.svg" alt="logoMadroxTipografia">
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
                        <button type="button" id="botonMenu" aria-label="boton toggle menu"><i class="bi bi-list d-block d-md-none"></i></button>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <div id="contenedorBotonSubir" class="d-inline-block">
                <a type="button">    
                    <div id="botonSubir" class="d-flex align-items-center justify-content-center">
                        <img loading="lazy" height="32" width="32" src="src/img/curvedArrowUp.svg" alt="">
                    </div>
                </a>
            </div>
            <div id="contenedorBotonWhatsapp">
                <a href="https://wa.me/message/AYO4KGOZYJAJE1"><button aria-label="boton contacto whatsapp"><div class="botonWhatsapp position-relative"><i style="top:50%;left:50%;transform:translate(-50%, -50%)" class="bi bi-whatsapp position-absolute"></i></div></button></a>
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
                                        <div class="col-3 col-md-12 d-flex align-items-center">
                                            <div class="col-12 col-md-6">
                                                <img height="100%" width="100%" class="img-fluid" loading="lazy" src="/src/img/conocenosDesign.svg" alt="Correcion y mantenimiento">
                                            </div>
                                        </div>
                                        <div class="ps-3 ps-md-0 col-9 col-md-12 d-flex flex-column justify-content-center d-md-block">
                                            <h5>Sitios personalizados</h5>
                                            <span class="divisorTarjetaConocenos"></span>
                                            <p>El diseño de tu sitio es la imagen de tu negocio e influye en el éxito que obtienes en internet</p> 
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 p-3">
                                    <div class="tarjetaQueHacemos d-flex d-md-block">
                                        <div class="col-3 col-md-12 d-flex align-items-center">
                                            <div class="col-12 col-md-6">
                                                <img height="100%" width="100%" loading="lazy" class="img-fluid" src="/src/img/conocenosResponsive.svg" alt="Sitios responsivos">
                                            </div>
                                        </div>
                                        <div class="ps-3 ps-md-0 col-9 col-md-12 d-flex flex-column justify-content-center d-md-block">
                                            <h5>Sitios responsivos</h5>
                                            <span class="divisorTarjetaConocenos"></span>
                                            <p>El uso de dipositivos móviles ha cambiado la forma en que las personas consumen sus productos, por eso es importante que tu sitio se visualize correctamente en cualquier dispositivo</p>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 p-3">
                                    <div class="tarjetaQueHacemos d-flex d-md-block">
                                        <div class="col-3 col-md-12 d-flex align-items-center">
                                            <div class="col-12 col-md-6">
                                                <img height="100%" width="100%" loading="lazy" class="img-fluid" src="/src/img/conocenosServidor.svg" alt="Hosting y dominio">
                                            </div>
                                        </div>
                                        <div class="ps-3 ps-md-0 col-9 col-md-12 d-flex flex-column justify-content-center d-md-block">
                                            <h5>Hosting y dominio</h5>
                                            <span class="divisorTarjetaConocenos"></span>
                                            <p>Todos nuestros paquetes cuentan con dominio y hosting por 1 año, ¡Renueva y cancela cuando quieras!</p>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 p-3">
                                    <div class="tarjetaQueHacemos d-flex d-md-block">
                                        <div class="col-3 col-md-12 d-flex align-items-center">
                                            <div class="col-12 col-md-6">
                                                <img height="100%" width="100%" loading="lazy" class="img-fluid" src="/src/img/conocenosEmail.svg" alt="Correos corporativos">
                                            </div>
                                        </div>
                                        <div class="ps-3 ps-md-0 col-9 col-md-12 d-flex flex-column justify-content-center d-md-block">
                                            <h5>Correos corporativos</h5>
                                            <span class="divisorTarjetaConocenos"></span>
                                            <p>Un correo que cuente con tu marca inspira confianza en tus clientes</p>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 p-3">
                                    <div class="tarjetaQueHacemos d-flex d-md-block">
                                        <div class="col-3 col-md-12 d-flex align-items-center">
                                            <div class="col-12 col-md-6">
                                                <img height="100%" width="100%" loading="lazy" class="img-fluid" src="/src/img/conocenosBug.svg" alt="Correcion y mantenimiento">
                                            </div>
                                        </div>
                                        <div class="ps-3 ps-md-0 col-9 col-md-12 d-flex flex-column justify-content-center d-md-block">
                                            <h5>Optimización SEO</h5>
                                            <span class="divisorTarjetaConocenos"></span>
                                            <p>Comienza a destacar entre la competencia y gana visibilidad en internet con nuestras estrátegias de SEO</p>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 p-3">
                                    <div class="tarjetaQueHacemos d-flex d-md-block">
                                        <div class="col-3 col-md-12 d-flex align-items-center">
                                            <div class="col-12 col-md-6">
                                                <img height="100%" width="100%" loading="lazy" class="img-fluid" src="/src/img/conocenosGear.svg" alt="Correcion y mantenimiento">
                                            </div>
                                        </div>
                                        <div class="ps-3 ps-md-0 col-9 col-md-12 d-flex flex-column justify-content-center d-md-block">
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
                                        <img height="100%" width="100%" loading="lazy" src="/src/img/htmlLogo.svg" alt="HTML" class="svgLogo">
                                    </div>
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <h4>CSS</h4>
                                        <img height="100%" width="100%" loading="lazy" src="/src/img/cssLogo.svg" alt="CSS" class="svgLogo">
                                    </div>
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <h4>SASS</h4>
                                        <img height="100%" width="100%" loading="lazy" src="/src/img/sassLogo.svg" alt="SASS" class="svgLogo">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 d-flex p-0">
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <h4>Bootstrap</h4>
                                        <img height="100%" width="100%" loading="lazy" src="/src/img/bootstrapLogo.svg" alt="BOOTSTRAP" class="svgLogo">
                                    </div>
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <h4>JS</h4>
                                        <img height="100%" width="100%" loading="lazy" src="/src/img/javascriptLogo.svg" alt="JAVASCRIPT" class="svgLogo">
                                    </div>
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <h4>React</h4>
                                        <img height="100%" width="100%" loading="lazy" src="/src/img/reactLogo.svg" alt="REACT" class="svgLogo">
                                    </div>
                                </div>
                            </div>
                            <div class="row my-4 rowHerramientas">
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <h4>PHP</h4>
                                    <img height="100%" width="100%" loading="lazy" src="/src/img/phpLogo.svg" alt="PHP" class="svgLogo">
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <h4>SQL</h4>
                                    <img height="100%" width="100%" loading="lazy" src="/src/img/sqlLogo.svg" alt="SQL" class="svgLogo">
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <h4>NodeJS</h4>
                                    <img height="100%" width="100%" loading="lazy" src="/src/img/nodejsLogo.svg" alt="NODEJS" class="svgLogo">
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
                            <div style="margin-bottom:25%">
                                <img width="100%" height="100%" loading="lazy" src="/src/img/smartphoneTrabajos.svg" alt="smartphones" class="w-100 imagenTrabajos">
                            </div>
                            <div style="margin-top:25%">
                                <img width="100%" height="100%" loading="lazy" src="/src/img/laptopTrabajos.svg" alt="computadoras" class="w-100 imagenTrabajos2">
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
                                <p class="text-center" style="font-size:.8rem">Entendemos la importancia de cada proyecto y que cada sitio es único y personalizado, por lo que nuestros precios se ajustan según el tipo de trabajo y su complejidad.</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-7 col-md-4 p-0 ">
                                <div class="mx-1 tarjetaPrecio">
                                    <span class="precioRecomendado"></span>
                                    <div class="headerTarjetaPrecio">
                                        <div class="contenedorTituloPrecio">                                
                                            <p class="tituloTarjetaPrecio">
                                                Landing Page
                                            </p>
                                            <div class="contenedorPrecio d-flex">
                                                <p class="precioTarjeta">
                                                    $X
                                                </p>
                                                <span>*</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cuerpoTarjetaPrecio justify-content-center d-flex flex-column text-center">
                                        <div class="beneficioTarjetaPrecio">
                                            <img height="100%" width="100%" loading="lazy" src="/src/img/precioIconoCode.svg" alt="Secciones pagina" class="imgBeneficio">
                                            <p class="beneficio">Secciones<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Número de secciones máximas.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img height="100%" width="100%" loading="lazy" src="/src/img/precioIconoForm.svg" alt="Formularios" class="imgBeneficio">    
                                            <p class="beneficio">Formularios<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Número de formularios máximos.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img height="100%" width="100%" loading="lazy" src="/src/img/precioIconoHost.svg" alt="Dominio y Host" class="imgBeneficio">
                                            <p class="beneficio">Dominio y Hosting<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Dominio y Hosting por 1 año.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img height="100%" width="100%" loading="lazy" src="/src/img/precioIconoEmail.svg" alt="Correos" class="imgBeneficio">
                                            <p class="beneficio">4 correos corporativos<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Cada correo cuenta con 1GB de almacenamiento.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img height="100%" width="100%" loading="lazy" src="/src/img/precioIconoSSD.svg" alt="Espacio SSD" class="imgBeneficio">
                                            <p class="beneficio">10GB espacio SSD<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">10GB para almacenar los archivos de tu sitio.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img height="100%" width="100%" loading="lazy" src="/src/img/precioIconoSSL.svg" alt="Certificado SSL" class="imgBeneficio">
                                            <p class="beneficio">Certificado SSL<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Garantiza privacidad y seguridad a tus clientes.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                    </div>
                                    <div class="footerTarjetaPrecio">
                                        <button class="botonTarjetaPrecio">Comencemos</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7 col-md-4 p-0">
                                <div class="mx-1 tarjetaPrecio activa recomendado">
                                    <span class="precioRecomendado"></span>
                                    <div class="headerTarjetaPrecio">
                                        <div class="contenedorTituloPrecio">                                
                                            <p class="tituloTarjetaPrecio">
                                                Sitio Web
                                            </p>
                                            <div class="contenedorPrecio d-flex">
                                                <p class="precioTarjeta">
                                                    $X
                                                </p>
                                                <span>*</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cuerpoTarjetaPrecio justify-content-center d-flex flex-column text-center">
                                        <div class="beneficioTarjetaPrecio">
                                            <img height="100%" width="100%" loading="lazy" src="/src/img/precioIconoCode.svg" alt="Secciones pagina" class="imgBeneficio">
                                            <p class="beneficio">Secciones<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Número de secciones máximas.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img height="100%" width="100%" loading="lazy" src="/src/img/precioIconoForm.svg" alt="Formularios" class="imgBeneficio">    
                                            <p class="beneficio">Formularios<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Número de formularios máximos.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img height="100%" width="100%" loading="lazy" src="/src/img/precioIconoHost.svg" alt="Dominio y Host" class="imgBeneficio">
                                            <p class="beneficio">Dominio y Hosting<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Dominio y Hosting por 1 año.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img height="100%" width="100%" loading="lazy" src="/src/img/precioIconoEmail.svg" alt="Correos" class="imgBeneficio">
                                            <p class="beneficio">4 correos corporativos<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Cada correo cuenta con 1GB de almacenamiento.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img height="100%" width="100%" loading="lazy" src="/src/img/precioIconoSSD.svg" alt="Espacio SSD" class="imgBeneficio">
                                            <p class="beneficio">10GB espacio SSD<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">10GB para almacenar los archivos de tu sitio.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img height="100%" width="100%" loading="lazy" src="/src/img/precioIconoSSL.svg" alt="Certificado SSL" class="imgBeneficio">
                                            <p class="beneficio">Certificado SSL<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Garantiza privacidad y seguridad a tus clientes.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                    </div>
                                    <div class="footerTarjetaPrecio">
                                        <button class="botonTarjetaPrecio">Comencemos</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7 col-md-4 p-0">
                                <div class="mx-1 tarjetaPrecio">
                                    <span class="precioRecomendado"></span>
                                    <div class="headerTarjetaPrecio">
                                        <div class="contenedorTituloPrecio">                                
                                            <p class="tituloTarjetaPrecio">
                                                E-commerce
                                            </p>
                                            <div class="contenedorPrecio d-flex">
                                                <p class="precioTarjeta">
                                                    $X
                                                </p>
                                                <span>*</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cuerpoTarjetaPrecio justify-content-center d-flex flex-column text-center">
                                        <div class="beneficioTarjetaPrecio">
                                            <img heigth="100%" width="100%" loading="lazy" src="/src/img/precioIconoCode.svg" alt="Secciones pagina" class="imgBeneficio">
                                            <p class="beneficio">Secciones<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Número de secciones máximas.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img heigth="100%" width="100%" loading="lazy" src="/src/img/precioIconoForm.svg" alt="Formularios" class="imgBeneficio">    
                                            <p class="beneficio">Formularios<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Número de formularios máximos.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img  heigth="100%" width="100%" loading="lazy" src="/src/img/precioIconoHost.svg" alt="Dominio y Host" class="imgBeneficio">
                                            <p class="beneficio">Dominio y Hosting<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Dominio y Hosting por 1 año.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img heigth="100%" width="100%" loading="lazy" src="/src/img/precioIconoEmail.svg" alt="Correos" class="imgBeneficio">
                                            <p class="beneficio">4 correos corporativos<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Cada correo cuenta con 1GB de almacenamiento.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img heigth="100%" width="100%" loading="lazy" src="/src/img/precioIconoSSD.svg" alt="Espacio SSD" class="imgBeneficio">
                                            <p class="beneficio">10GB espacio SSD<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">10GB para almacenar los archivos de tu sitio.</span><i class="bi bi-question-circle-fill"></i></span></p>
                                        </div>
                                        <div class="beneficioTarjetaPrecio">
                                            <img heigth="100%" width="100%" loading="lazy" src="/src/img/precioIconoSSL.svg" alt="Certificado SSL" class="imgBeneficio">
                                            <p class="beneficio">Certificado SSL<span onmouseleave="ocultarGlobo(this)" onmouseenter="mostrarGlobo(this)" class="contenedorInfoBeneficio position-relative"><span class="infoServicio">Garantiza privacidad y seguridad a tus clientes.</span><i class="bi bi-question-circle-fill"></i></span></p>
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
                                <div id="contenedorImagenContacto" style="height:50%;position:sticky;top:10vh;" class="bg-warning">
                                    <div id="layoutImagenContacto"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 m-0 p-0" id="contenedorFormularioContacto">
                            
                        </div>
                    </div>
                </div> 
            </section>
        </main>
        <div id="modalFormulario">
            <div class="modal d-flex flex-column">
                <div class="d-flex modal-header">
                    <p class="tituloModal text-start flex-grow-1">Enviado</p>
                    <button onclick="cerrarModal()" class="botonCerrarModal"><img height="100%" width="50%" src="/src/img/modalClose.svg" alt="Cerrar"></button>
                </div>
                <div class="modalBody">
                    <img class="d-flex justify-content-center w-100" height="100%" width="100%" loading="lazy" src="/src/img/modalApprove.svg" alt="Aprovado">
                </div>
                <p class="textoModal text-center">Sus datos fueron enviados correctamente, nos pondremos en contacto lo más pronto posible</p>
                <div class="modal-footer">
                    <button id="cerrarModal" onclick="cerrarModal()" class="botonCerrarModalFooter">Cerrar</button>
                </div>
            </div>
            <label for="cerrarModal" class="modalFondo"></label>
        </div>
        <?php include 'php/footer.php'?>
    </div>
</body>
<script async src="/build/js/intlTelInput.min.js"></script>
<script src="js/main.js" defer></script>
<!-- <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>-->
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>