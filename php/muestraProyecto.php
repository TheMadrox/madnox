<?php
    include 'conexion.php';
    isset($_GET['id']) ? $id = $_GET['id'] : $id = null;
    $consulta = mysqli_prepare($enlace,"SELECT * FROM madnoxproyectos WHERE idProyecto = ?");
    mysqli_stmt_bind_param($consulta,"i",$id);
    mysqli_stmt_execute($consulta);
    $resultado = mysqli_stmt_get_result($consulta);
    $row = mysqli_fetch_assoc($resultado);
    if($id != null){
        echo '
            <div class="d-flex flex-column" id="informacion__tarjeta">
                <div id="tarjeta-background"></div>
                <h2 id="informacion_tarjeta-titulo">'.$row['titulo'].'</h2>
                <img id="informacion__tarjeta-imagen" src="'.$row['imagen'].'" alt="prueba">
                <a href="#" id="informacion__tarjeta-boton">Visitar Sitio</a>
                <p id="informacion__tarjeta-fecha">12/11/2023</p>
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
        ';
    }
?>