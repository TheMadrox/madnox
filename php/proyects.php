<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos | MADNOX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/proyects.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div id="pagina__proyectos">
        <header>
            <?php include $_SERVER["DOCUMENT_ROOT"].'/php/navbar.php'?>
        </header>
        <main>
            <div class="d-md-flex container-fluid p-0">
                <div class="col-12 col-md-8" id="contenedor-general-padding">
                    <h1 class="titulo">Proyectos</h1>
                    <div id="contenedor__general">
                        <div id="general-background"></div>
                        <div class="col-12 d-flex" id="selector__galeria">
                            <div class="col-3 selector activo d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                                Todas
                            </div>
                            <div class="col-3 selector d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-airplane-fill" viewBox="0 0 16 16">
                                    <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Z"/>
                                </svg>
                                Landing
                            </div>
                            <div class="col-3 selector d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                                    <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                                </svg>
                                Sitio Web
                            </div>
                            <div class="col-3 selector d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                </svg>
                                E-commerce
                            </div>
                        </div>
                        <div id="seccion__galeria">  
                            <div class="col-12" id="galeria">
                                <div class="d-flex galeria__fila">
                                    <div class="col-4 contenedor__proyecto">
                                        <div class="muestra__proyecto d-flex flex-column">
                                            <div class="muestra__proyecto-imagen"></div>
                                            <div class="muestra__proyecto__contenedor-texto">
                                                <p class="muestra__proyecto-texto">WEB DE PRUEBA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 contenedor__proyecto">
                                        <div class="muestra__proyecto d-flex flex-column">
                                            <div class="muestra__proyecto-imagen"></div>
                                            <div class="muestra__proyecto__contenedor-texto">
                                                <p class="muestra__proyecto-texto">WEB DE PRUEBA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 contenedor__proyecto">
                                        <div class="muestra__proyecto d-flex flex-column">
                                            <div class="muestra__proyecto-imagen"></div>
                                            <div class="muestra__proyecto__contenedor-texto">
                                                <p class="muestra__proyecto-texto">WEB DE PRUEBA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex galeria__fila">
                                    <div class="col-4 contenedor__proyecto">
                                        <div class="muestra__proyecto d-flex flex-column">
                                            <div class="muestra__proyecto-imagen"></div>
                                            <div class="muestra__proyecto__contenedor-texto">
                                                <p class="muestra__proyecto-texto">WEB DE PRUEBA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 contenedor__proyecto">
                                        <div class="muestra__proyecto d-flex flex-column">
                                            <div class="muestra__proyecto-imagen"></div>
                                            <div class="muestra__proyecto__contenedor-texto">
                                                <p class="muestra__proyecto-texto">WEB DE PRUEBA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 contenedor__proyecto">
                                        <div class="muestra__proyecto d-flex flex-column">
                                            <div class="muestra__proyecto-imagen"></div>
                                            <div class="muestra__proyecto__contenedor-texto">
                                                <p class="muestra__proyecto-texto">WEB DE PRUEBA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex galeria__fila">
                                    <div class="col-4 contenedor__proyecto">
                                        <div class="muestra__proyecto d-flex flex-column">
                                            <div class="muestra__proyecto-imagen"></div>
                                            <div class="muestra__proyecto__contenedor-texto">
                                                <p class="muestra__proyecto-texto">WEB DE PRUEBA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 contenedor__proyecto">
                                        <div class="muestra__proyecto d-flex flex-column">
                                            <div class="muestra__proyecto-imagen"></div>
                                            <div class="muestra__proyecto__contenedor-texto">
                                                <p class="muestra__proyecto-texto">WEB DE PRUEBA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 contenedor__proyecto">
                                        <div class="muestra__proyecto d-flex flex-column">
                                            <div class="muestra__proyecto-imagen"></div>
                                            <div class="muestra__proyecto__contenedor-texto">
                                                <p class="muestra__proyecto-texto">WEB DE PRUEBA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex galeria__fila">
                                    <div class="col-4 contenedor__proyecto">
                                        <div class="muestra__proyecto d-flex flex-column">
                                            <div class="muestra__proyecto-imagen"></div>
                                            <div class="muestra__proyecto__contenedor-texto">
                                                <p class="muestra__proyecto-texto">WEB DE PRUEBA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 contenedor__proyecto">
                                        <div class="muestra__proyecto d-flex flex-column">
                                            <div class="muestra__proyecto-imagen"></div>
                                            <div class="muestra__proyecto__contenedor-texto">
                                                <p class="muestra__proyecto-texto">WEB DE PRUEBA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 contenedor__proyecto">
                                        <div class="muestra__proyecto d-flex flex-column">
                                            <div class="muestra__proyecto-imagen"></div>
                                            <div class="muestra__proyecto__contenedor-texto">
                                                <p class="muestra__proyecto-texto">WEB DE PRUEBA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="contenedor__informacion" class="col-12 col-md-4">
                    <div id="contenedor__tarjeta">
                        <div class="d-flex flex-column" id="informacion__tarjeta">
                            <div id="tarjeta-background"></div>
                            <h2 id="informacion_tarjeta-titulo">Web de Ejemplo</h2>
                            <img id="informacion__tarjeta-imagen" src="/src/img/backgroundProyectos.jpg" alt="prueba">
                            <a href="#" id="informacion__tarjeta-boton">Visitar Sitio</a>
                            <p id="informacion__tarjeta-descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda sit laboriosam praesentium nobis id esse placeat nesciunt temporibus voluptas, reiciendis quo illum cum qui? Temporibus!</p>
                            <h2 id="informacion_tarjeta-subtitulo">Herramientas empleadas</h2>
                            <div class="d-flex flex-column" id="informacion_tarjeta-herramientas">
                                <div class="d-flex justify-content-center">
                                    <div class="col-2 p-2"><img width="100%" height="100%" src="/src/img/bootstrapLogo.svg" alt="" class="imagen-herramienta img-fluid"></div>
                                    <div class="col-2 p-2"><img width="100%" height="100%" src="/src/img/nodejsLogo.svg" alt="" class="imagen-herramienta img-fluid"></div>
                                    <div class="col-2 p-2"><img width="100%" height="100%" src="/src/img/htmlLogo.svg" alt="" class="imagen-herramienta img-fluid"></div>
                                    <div class="col-2 p-2"><img width="100%" height="100%" src="/src/img/javascriptLogo.svg" alt="" class="imagen-herramienta img-fluid"></div>
                                    <div class="col-2 p-2"><img width="100%" height="100%" src="/src/img/cssLogo.svg" alt="" class="imagen-herramienta img-fluid"></div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="col-2 p-2"><img width="100%" height="100%" src="/src/img/bootstrapLogo.svg" alt="" class="imagen-herramienta img-fluid"></div>
                                    <div class="col-2 p-2"><img width="100%" height="100%" src="/src/img/nodejsLogo.svg" alt="" class="imagen-herramienta img-fluid"></div>
                                    <div class="col-2 p-2"><img width="100%" height="100%" src="/src/img/cssLogo.svg" alt="" class="imagen-herramienta img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php
            include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php';
        ?>
    </div>
</body>
</html>