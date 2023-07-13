<?php
    if(empty($_POST)){
        header("Location: ../index.php");
    }else{
        include "conexion.php";
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $paquete = $_POST["paquete"];
        $telefono = $_POST["telefono"];
        $mensaje = $_POST["mensaje"];
        $claveUnica = uniqid("CLI",false);

        $subirDatos = mysqli_prepare($enlace,"INSERT INTO madnoxclientes (nombre,apellido,email,idPaquete,telefono,mensaje,clave) VALUES (?,?,?,?,?,?,?)");
        mysqli_stmt_bind_param($subirDatos,"sssisss",$nombre,$apellido,$email,$paquete,$telefono,$mensaje,$claveUnica);
        mysqli_stmt_execute($subirDatos);

        if(isset($_POST["negocio"])){
            $subirNegocio = mysqli_prepare($enlace, "UPDATE madnoxclientes SET negocio = ? WHERE email = ?");
            mysqli_stmt_bind_param($subirNegocio,"ss",$_POST["negocio"],$email);
            mysqli_stmt_execute($subirNegocio);
        }
    }
?>