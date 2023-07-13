<?php
    include '../php/conexion.php';

    $obtenerInfo = mysqli_prepare($enlace,"SELECT * FROM madnoxclientes WHERE contactado = 0");

    mysqli_stmt_execute($obtenerInfo);

    $resultadoInfoClientes = mysqli_stmt_get_result($obtenerInfo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../styles/indexStyles.css">
</head>
<body style="background-color:#F7F7F7; color: #1A1A1A;">
    <header>
        <nav id="nav2" class="container-fluid d-flex" style="background-color:rgba(0,0,0,0.7);">
            <div class="d-flex align-items-center">
                <img id="imgLogo" src="../../src/img/madnoxLogo.svg" alt="LogoMadnox">
                <img id="tipografiaLogo" src="../../src/img/madnoxLogoTipografia.svg" alt="logoMadroxTipografia">
            </div>
            <div id="menuDesplegable" class="d-inline-flex position-absolute w-100 h-50 align-items-center justify-content-center" style="">
                <ul class="m-0 p-0 d-inline-flex">
                    <li><button type="button" class="activo">Contactar</button></li>
                    <li><button type="button">Trabajos Activos</button></li>
                    <li><button type="button">Contactados</button></li>
                    <li><button type="button">???</button></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container" style="margin-top:10vh;">
            <h1 class="text-center">Clientes a contactar</h1>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#Cliente</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Negocio</th>
                        <th scope="col">Paquete</th>
                        <th scope="col">Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($infoClientes = mysqli_fetch_assoc($resultadoInfoClientes)){
                            echo '<tr>';
                            echo '<td scope="row">'.$infoClientes["clave"].'</td>';
                            echo '<td>'.$infoClientes["nombre"].'</td>';
                            echo '<td>'.$infoClientes["negocio"].'</td>';
                            echo '<td>'.$infoClientes["idPaquete"].'</td>';
                            echo '<td><a href="contactar/'.$infoClientes["clave"].'">Ver más info</a></td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer></footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>