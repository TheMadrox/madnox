<?php
    session_start();
    if(!isset($_SESSION['ultimo_id'])){
        $_SESSION['ultimo_id'] = null;
    }
    if(isset($_SESSION['selector'])){
        include 'conexion.php';
        $comparacion = "SELECT * FROM madnoxproyectos ";
        $idProyecto = isset($_SESSION['ultimo_id']) ? $_SESSION['ultimo_id'] : null;
        $idProyecto == null ? ($_SESSION['selector'] == 'todo' ? "" : ($_SESSION['selector'] == 'landing' ? $comparacion .= "WHERE idTipo = 2 " : ($_SESSION['selector'] == 'web' ? $comparacion .= "WHERE idTipo = 3 " : ($_SESSION['selector'] == 'ecommerce' ? $comparacion .= "WHERE idTipo = 4 " : "")))) : $comparacion .= "WHERE idProyecto > ? ";
        $idProyecto != null ? ($_SESSION['selector'] == 'todo' ? "" : ($_SESSION['selector'] == 'landing' ? $comparacion .= "AND idTipo = 2 " : ($_SESSION['selector'] == 'web' ? $comparacion .= "AND idTipo = 3 " : ($_SESSION['selector'] == 'ecommerce' ? $comparacion .= "AND idTipo = 4 " : "")))) : "";
        $comparacion .= "ORDER BY idProyecto ASC LIMIT 3";
        $funcion = mysqli_prepare($enlace,$comparacion);
        $idProyecto == null ? "" : mysqli_stmt_bind_param($funcion, "i", $idProyecto);
        mysqli_stmt_execute($funcion);
        $resultado = mysqli_stmt_get_result($funcion);
        $filaGaleria = '  <div class="d-flex galeria__fila">';
        $contador = 0;
        while($row = mysqli_fetch_assoc($resultado)){
            $_SESSION['ultimo_id'] = $row['idProyecto'];
            $contador++;
            $filaGaleria .= '  <div class="col-4 contenedor__proyecto">
                        <div onclick="mostrarProyecto(this)" data-id="'.$row['idProyecto'].'" class="muestra__proyecto d-flex flex-column">
                            <img class="muestra__proyecto-imagen" src="'.$row['imagen'].'" alt="imagen de '.$row['titulo'].'"></img>
                            <div class="muestra__proyecto__contenedor-texto">
                                <p class="muestra__proyecto-texto">'.$row['titulo'].'</p>
                            </div>
                        </div>
                    </div>';
        }
        $filaGaleria .= '  </div>';
        if($contador > 0){
            echo $filaGaleria;
        }else{
            echo 'no_more_projects';
            unset($_SESSION['ultimo_id']);
        }
    }
?>