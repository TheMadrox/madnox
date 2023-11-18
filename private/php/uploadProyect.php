<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST)){
            header('Location: /');
            exit;
        }else{
            $dirRaiz = $_SERVER['DOCUMENT_ROOT'];
            $dirImagen = "/src/imgproyectos/".$_FILES['proyecto-imagenes']['name'];
            $dirSalida = $dirRaiz."/src/imgproyectos/".$_FILES['proyecto-imagenes']['name'];
            include $dirRaiz.'/php/conexion.php';
            $nombre = $_POST['proyecto-nombre'];
            $fecha = $_POST['proyecto-fecha'];
            $descripcion = $_POST['proyecto-descripcion'];
            move_uploaded_file($_FILES['proyecto-imagenes']['tmp_name'],$dirSalida);

            $subirProyecto = mysqli_prepare($enlace,"INSERT INTO madnoxproyectos (titulo,fecha,imagen,descripcion) VALUES (?,?,?,?)");
            mysqli_stmt_bind_param($subirProyecto,"ssss",$nombre,$fecha,$dirImagen,$descripcion);
            mysqli_stmt_execute($subirProyecto);

            $ultimoID = mysqli_insert_id($enlace);

            foreach($_POST['herramientas'] as $herramienta){
                $subirHerramientas = mysqli_prepare($enlace, "INSERT INTO madnoxproyectosherramientas(idProyecto,idHerramienta) VALUES (?,?)");
                $herramientas = mysqli_query($enlace,"SELECT idHerramienta FROM madnoxherramientas WHERE nombre = '$herramienta'");
                $idHerramienta = mysqli_fetch_assoc($herramientas);
                mysqli_stmt_bind_param($subirHerramientas,"dd",$ultimoID,$idHerramienta['idHerramienta']);
                mysqli_stmt_execute($subirHerramientas);
                $resultado = mysqli_stmt_get_result($subirHerramientas);
            }
            header('Location: ./createProyect.php?success=1');
        }
    }else{
        header('Location: /');
        exit;
    }
?>