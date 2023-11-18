<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/dashboard.css">
    <link rel="stylesheet" href="/styles/formProyects.css">
</head>
<body>
    <div class="container-fluid d-flex p-0">
        <div class="col-3">
            <?php include 'dashboardBar.php'?>
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-around">
                <div class="col-11">
                    <h1 class="pt-5">Crear proyecto</h1>
                </div>
            </div>
            <div class="d-flex justify-content-around">
                <div class="col-11">
                    <form enctype="multipart/form-data" action="/private/php/uploadProyect.php" method="post" >
                        <div class="d-flex justify-content-between group-form">
                            <div class="col-6">
                                <label for="proyecto-nombre">Introduce el nombre del proyecto</label>
                                <input placeholder="nombre" type="text" name="proyecto-nombre" id="nombre-proyecto">
                            </div>
                            <div class="col-5">
                                <label for="proyecto-fecha">Indique la fecha</label>
                                <input type="date" name="proyecto-fecha" id="proyecto-fecha">
                            </div>
                        </div>
                        <div class="d-flex flex-column group-form">
                            <label for="proyecto-descripcion">Introduce una descripción</label>
                            <textarea placeholder="descripción..." name="proyecto-descripcion" id="proyecto-descripcion"></textarea>
                        </div>
                        <div class="d-flex flex-column group-form">
                            <label for="">Seleccione las herramientas usadas</label>
                            <div class="d-flex formulario-herramientas">
                                <label class="col-2 d-flex"><input type="checkbox" name="herramientas[]" value="html"><span class="checkbox-container"></span> <img height="100%" width="100%" src="/src/img/htmlLogo.svg" alt=""></label>
                                <label class="col-2 d-flex"><input type="checkbox" name="herramientas[]" value="css"><span class="checkbox-container"></span> <img height="100%" width="100%" src="/src/img/cssLogo.svg" alt=""></label>
                                <label class="col-2 d-flex"><input type="checkbox" name="herramientas[]" value="javascript"><span class="checkbox-container"></span> <img height="100%" width="100%" src="/src/img/javascriptLogo.svg" alt=""></label>
                                <label class="col-2 d-flex"><input type="checkbox" name="herramientas[]" value="bootstrap"><span class="checkbox-container"></span> <img height="100%" width="100%" src="/src/img/bootstrapLogo.svg" alt=""></label>
                                <label class="col-2 d-flex"><input type="checkbox" name="herramientas[]" value="nodejs"><span class="checkbox-container"></span> <img height="100%" width="100%" src="/src/img/nodejsLogo.svg" alt=""></label>
                                <label class="col-2 d-flex"><input type="checkbox" name="herramientas[]" value="react"><span class="checkbox-container"></span> <img height="100%" width="100%" src="/src/img/reactLogo.svg" alt=""></label>
                            </div>
                            <div class="d-flex formulario-herramientas">
                                <label class="col-2 d-flex"><input type="checkbox" name="herramientas[]" value="php"><span class="checkbox-container"></span> <img height="100%" width="100%" src="/src/img/phpLogo.svg" alt=""></label>
                                <label class="col-2 d-flex"><input type="checkbox" name="herramientas[]" value="sass"><span class="checkbox-container"></span> <img height="100%" width="100%" src="/src/img/sassLogo.svg" alt=""></label>
                                <label class="col-2 d-flex"><input type="checkbox" name="herramientas[]" value="sql"><span class="checkbox-container"></span> <img height="100%" width="100%" src="/src/img/sqlLogo.svg" alt=""></label>
                            </div>
                        </div>
                        <div class="d-flex group-form">
                            <div class="col-6">
                                <label for="proyecto-imagenes">Introduzca una o más imágenes</label>
                                <input onchange="mostrarVistaPrevia(this)" type="file" name="proyecto-imagenes" id="proyecto-imagenes">
                            </div>
                            <div class="col-6 d-flex flex-column">
                                <p class="m-0">Vista previa</p>
                                <div class="col-6">
                                    <img id="proyecto-imagen-vista">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="submit" value="Subir proyecto">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    const contenedorVistaPrevia = document.getElementById("proyecto-imagen-vista");
    function mostrarVistaPrevia(archivoInput){
        const archivos = archivoInput.files;
        if(archivos.length > 0){
            contenedorVistaPrevia.src = URL.createObjectURL(archivos[0]);  
        }
    }
</script>
</html>