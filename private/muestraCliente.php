<?php
    include '../php/conexion.php';
    $obtenerInfoCliente = mysqli_prepare($enlace, "SELECT * FROM madnoxclientes WHERE clave = ?");
    mysqli_stmt_bind_param($obtenerInfoCliente,"s",$_GET["claveCliente"]);
    mysqli_stmt_execute($obtenerInfoCliente);
    $infoCliente = mysqli_stmt_get_result($obtenerInfoCliente);
    $cliente = mysqli_fetch_assoc($infoCliente);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente <?php echo $_GET["claveCliente"];?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/styles/indexStyles.css">
</head>
<body style="background-color:#F7F7F7; color: #1A1A1A;">
    <header>
        <nav id="nav2" class="container-fluid d-flex" style="background-color:rgba(0,0,0,0.7);">
            <div class="d-flex align-items-center">
                <img id="imgLogo" src="/src/img/madnoxLogo.svg" alt="LogoMadnox">
                <img id="tipografiaLogo" src="/src/img/madnoxLogoTipografia.svg" alt="logoMadroxTipografia">
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
        <div class="container position-relative" style="margin-top:10vh;">
            <div class="position-absolute d-flex align-items-center justify-content-center" style="width:7vh; height:7vh; top:0; right:100%; background-color:#1A1A1A; color: #F7F7F7;">
                <i class="bi bi-arrow-return-left"></i>
            </div>
            <h2 class="text-center pt-3">Datos del pedido #<?php echo $cliente["clave"];?></h2>
            <div class="row">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Dato</th>
                            <th>Info</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>#numCliente(pedido)</th>
                            <td><?php echo $cliente["clave"];?></td>
                        </tr>
                        <tr>
                            <th>Nombre</th>
                            <td><?php echo $cliente["nombre"];?></td>
                        </tr>
                        <tr>
                            <th>Apellido</th>
                            <td><?php echo $cliente["apellido"];?></td>
                        </tr>
                        <tr>
                            <th>Nombre negocio</th>
                            <td><?php echo $cliente["negocio"];?></td>
                        </tr>
                        <tr>
                            <th>Correo electronico</th>
                            <td><?php echo $cliente["email"];?></td>
                        </tr>
                        <tr>
                            <th>Telefono</th>
                            <td><?php echo $cliente["telefono"];?></td>
                        </tr>
                        <tr>
                            <th>Mensaje</th>
                            <td style="word-break:break-all;"><?php echo $cliente["mensaje"];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>